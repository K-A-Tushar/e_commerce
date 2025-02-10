<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use ReflectionClass;

class ModeltestController extends Controller
{
    /**
     * Get all model classes from the app/Models directory
     */
    private function getAllModels()
    {
        $models = [];
        $modelPath = app_path('Models'); // Path to the Models directory

        if (File::isDirectory($modelPath)) {
            foreach (File::allFiles($modelPath) as $file) {
                $filename = $file->getFilenameWithoutExtension();
                $class = "App\\Models\\$filename";

                // Check if the class exists and is a subclass of Model
                if (class_exists($class) && is_subclass_of($class, Model::class)) {
                    $models[] = $class;
                }
            }
        }

        return $models;
    }

    /**
     * Check if all models exist in the database and count records
     */
    public function checkModels()
    {
        $models = $this->getAllModels(); // Dynamically get all models
        $results = [];

        foreach ($models as $model) {
            $table = (new $model)->getTable(); // Get table name from model
            $hasTable = Schema::hasTable($table); // Check if table exists in DB

            // Get the column names if the table exists
            $columns = $hasTable ? Schema::getColumnListing($table) : [];

            // Get relational model names
            $relations = $this->getRelations($model);

            // Prepare the result for each model
            $results[] = [
                'model' => $model,
                'table' => $table,
                'exists_in_db' => $hasTable ? 'Yes' : 'No',
                'record_count' => $hasTable ? $model::count() : 0,
                'fields' => $columns, // Add the fields to the result
                'relations' => $relations // Add the relations to the result
            ];
        }

        return response()->json($results);
    }

    /**
     * Get the relational model names for a given model
     */
    private function getRelations($model)
    {
        $relations = [];
        $reflection = new ReflectionClass($model);

        foreach ($reflection->getMethods() as $method) {
            // Check if the method returns a relationship
            if ($method->class === $model && $method->isPublic()) {
                $returnType = $method->getReturnType();
                if ($returnType && is_subclass_of($returnType->getName(), 'Illuminate\Database\Eloquent\Relations\Relation')) {
                    $relations[$method->name] = $returnType->getName(); // Store the method name and the related model class
                }
            }
        }

        return $relations;
    }
}