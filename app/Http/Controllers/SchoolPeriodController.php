<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolPeriodController extends Controller
{
    //

    public function index() {
        return "Index del controlador SchoolPeriodController";
    }

    public function create() {
        return "Create del controlador SchoolPeriodController";
    }

    public function show($period) {
        return "Show del controlador SchoolPeriodController: " . $period;
    }
}
