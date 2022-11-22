<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserTypeController extends Controller
{
    //
    public function index() {
        return "Index del controlador UserTypeController";
    }

    public function create() {
        return "Create del controlador UserTypeController";
    }

    public function show($user_type) {
        return "Show del controlador UserTypeController: " . $user_type;
    }
}
