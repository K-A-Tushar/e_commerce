<?php

namespace App\Traits;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


trait UploadsImage
{

    //For uploading images
    public function uploadImage(Request $request, $inputName = 'images') // Added $inputName parameter
    {
        $imagePaths = [];

        if ($request->hasFile($inputName)) { // Use $inputName
            foreach ($request->file($inputName) as $image) { // Use $inputName
                if ($image->isValid() && in_array($image->getClientOriginalExtension(), ['jpg', 'jpeg', 'png', 'gif', 'webp'])) { // Added more common image types
                    $path = $image->store('uploads/images', 'public');
                    $imagePaths[] = $path;
                }
            }
        }

        return $imagePaths;
    }

    //For Product Price discount calculation 

    public function calculateFinalPrice($originalPrice, $discountValue, $discountType)
    {
        if ($discountType === 'percentage') {
            $discountAmount = ($originalPrice * $discountValue) /100;
            return $originalPrice - $discountAmount;
        }
        elseif ($discountType === 'fixed')
        {
            return $originalPrice - $discountValue;
        }

        return $originalPrice;
    }

    
}
