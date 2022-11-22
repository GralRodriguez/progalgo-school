<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolTurnController extends Controller
{
    //
    public function index() {
        return "Index del controlador SchoolTurnController";
    }

    public function create() {
        return "Create del controlador SchoolTurnController";
    }

    public function show($turn) {
        return "Show del controlador SchoolTurnController: " . $turn;
    }
}
