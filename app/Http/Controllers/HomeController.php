<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    public function index()
    {
        $home = Home::find(1);
        return view('dnvmaster.admin.home_section',compact('home'));
    }
}
