<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function index()
    {
        $vendors = Vendor::with('user')->get();
        // dd($vendors);

        return view('test.form', compact('vendors'));
    }

    public function productStore(Request $request)
    {
        dd($request->all());
    }

    // public function vendorShow()
    // {
    //     return view('test.vendor');
    // }
    public function vendorStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:6',
            'shop_name' => 'required|string|max:255',
            'phone_number' => 'required|string|unique:vendors,phone_number',
            'shop_address' => 'required|string',
            'shop_email' => 'required|email|unique:users,email|unique:vendors,shop_email',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Create User
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->shop_email;
        $user->phone = $request->phone_number;
        $user->password = Hash::make($request->password);
        $user->role = 'vendor';
        $user->save();

        // Create Vendor
        $vendor = new Vendor();
        $vendor->user_id = $user->id;
        $vendor->shop_name = $request->shop_name;
        $vendor->shop_address = $request->shop_address;
        $vendor->phone_number = $request->phone_number;
        $vendor->shop_email = $request->shop_email;
        $vendor->save();

        if ($vendor) {
            return redirect()->back()->with('success', 'Vendor created successfully!');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function vendorUpdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:6',
            'shop_name' => 'required|string|max:255',
            'phone_number' => 'required|string',
            'shop_address' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $vendor = Vendor::find($id);
        $vendor->shop_name = $request->shop_name;
        $vendor->shop_address = $request->shop_address;
        $vendor->phone_number = $request->phone_number;      
        $vendor->save();

        if ($vendor) {
            return redirect()->back()->with('success', 'Vendor updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
    public function updateVendorCode($encryptedId)
    {
        try {
            $vendor_id = decrypt($encryptedId); 
            $vendor = Vendor::findOrFail($vendor_id); 
            Vendor::updateVendorCode($vendor);
    
            return redirect()->back()->with('success', 'Vendor code updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Invalid request!');
        }
    }
    public function editVendor($encryptedId)
    {
        try {
            // Securely Decrypt Vendor ID
            $vendor_id = decrypt($encryptedId);
        
            // Fetch Vendor Data
            $vendor = Vendor::findOrFail($vendor_id)->load('user');
    
            $editVendor =   $vendor->editable_fields;
            dd($editVendor);
            // Pass to View
            // return view('vendors.edit', compact('sortedVendor'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Invalid request!');
        }
    }
    
}

