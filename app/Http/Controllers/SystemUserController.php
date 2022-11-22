<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SystemUserController extends Controller
{
    //

    public function index() {
        return "Index del controlador SystemUserController";
    }

    public function create() {
        return "Create del controlador SystemUserController";
    }

    public function show($user) {
        return "Show del controlador SystemUserController: " . $user;
    }
}
