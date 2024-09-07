<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        return view("frontpage.index");
    }
}