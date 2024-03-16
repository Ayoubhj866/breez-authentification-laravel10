<?php

namespace App\Http\Controllers\CostumerPanel;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class CostumerController extends Controller
{
    //
    public function dashboard(): View|RedirectResponse
    {
        //check if the user is admin or vendor then redirect to them route
        if (Auth::user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif (Auth::user()->role === 'vendor') {
            return redirect()->route('vendor.dashboard');
        }

        return view("dashboard");
    }
}
