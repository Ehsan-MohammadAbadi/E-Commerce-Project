<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addCategory()
    {
        return view('admin.addCategory');
    }

    public function postAddCategory(Request $request)
    {
        $category = $request->category;

    }
}
