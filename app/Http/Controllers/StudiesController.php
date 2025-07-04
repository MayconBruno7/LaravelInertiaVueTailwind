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

    public function exampleComputed()
    {
        return Inertia::render('Studies/ExampleComputed');
    }

    public function exampleProps()
    {
        return Inertia::render('Studies/ExampleProps');
    }

    public function exampleVModel()
    {
        return Inertia::render('Studies/ExampleVModel');
    }

    public function exampleVFor()
    {
        return Inertia::render('Studies/ExampleVFor');
    }

    public function exampleVIf()
    {
        return Inertia::render('Studies/ExampleVIf');
    }

    public function exampleEmit()
    {
        return Inertia::render('Studies/ExampleEmit');
    }
}
