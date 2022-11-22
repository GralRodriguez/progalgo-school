<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducationalStageController extends Controller
{
    //
    public function index() {
        return "Index del controlador EducationalStageController";
    }

    public function create() {
        return "Create del controlador EducationalStageController";
    }

    public function show($stage) {
        return "Show del controlador EducationalStageController: " . $stage;
    }
}
