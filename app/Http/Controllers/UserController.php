<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index() {
        return "Index del controlador UserController";
    }

    public function create() {
        return "Create del controlador UserController";
    }

    public function show($user) {
        return "Show del controlador UserController: " . $user;
    }
}
