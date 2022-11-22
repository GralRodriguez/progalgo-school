<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SystemProfileController extends Controller
{
    //
    public function index() {
        return "Index del controlador SystemProfileController";
    }

    public function create() {
        return "Create del controlador SystemProfileController";
    }

    public function show($profile) {
        return "Show del controlador SystemProfileController: " . $profile;
    }
}
