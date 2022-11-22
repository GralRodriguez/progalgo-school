<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolCycleController extends Controller
{
    //
    public function index() {
        return "Index del controlador SchoolCycleController";
    }

    public function create() {
        return "Create del controlador SchoolCycleController";
    }

    public function show($cycle) {
        return "Show del controlador SchoolCycleController: " . $cycle;
    }
}
