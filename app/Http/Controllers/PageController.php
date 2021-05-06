<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $companies = Company::all();

        return view('welcome', compact('companies'));
    }
}
