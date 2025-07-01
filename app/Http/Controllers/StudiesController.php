<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class StudiesController extends Controller
{

    public function exampleRef()
    {
        return Inertia::render('Studies/ExampleRef');
    }

    public function exampleWatch()
    {
        return Inertia::render('Studies/ExampleWatch');
    }
}
