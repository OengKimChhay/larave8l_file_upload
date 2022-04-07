<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UploadController extends Controller
{
    function index(Request $request){
        // $validatedData = $request->validate([
        //     'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg,pdf|max:2048',
        // ]);
        $file = $request->file('image');// 'image' is the same of name="image" in form input
        $fileName = $file->getClientOriginalName(); //to get file name and it's extention
        $destinat_path = 'public/images'; 
        $file->storeAs($destinat_path,$fileName);
        return "
        <p>filename is ".$fileName."</P>
        <img style='width:70%;' src='/storage/images/$fileName'>
        ";         
    }
}
