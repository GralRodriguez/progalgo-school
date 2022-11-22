<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolDegreeController extends Controller
{
    //
    public function index() {
        return "Index del controlador SchoolDegreeController";
    }

    public function create() {
        return "Create del controlador SchoolDegreeController";
    }

    public function show($degree) {
        return "Show del controlador SchoolDegreeController: " . $degree;
    }
}
