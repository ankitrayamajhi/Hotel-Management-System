<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\profile;

class AdminController extends Controller
{

    public function view_profile(){
        return view('admin.profile');
    }
}
