<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class AdminController extends Controller
{

    public function index(): View
    {
        return view("admin.dashboard");
    }
}
