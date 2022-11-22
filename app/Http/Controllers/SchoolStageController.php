<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolStageController extends Controller
{
    //
    public function index() {
        return "Index del controlador SchoolStageController";
    }

    public function create() {
        return "Create del controlador SchoolStageController";
    }

    public function show($stage) {
        return "Show del controlador SchoolStageController: " . $stage;
    }
}
