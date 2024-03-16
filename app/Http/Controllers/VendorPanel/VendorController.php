<?php

namespace App\Http\Controllers\VendorPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VendorController extends Controller
{
    public function index(): View
    {
        return view("vendor.dashboard");
    }
}
