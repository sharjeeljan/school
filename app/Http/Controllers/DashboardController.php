<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {

        if(auth()->user()->hasRole('admin'))
        {
            return view('admin.dashboard');
        }

        if(auth()->user()->hasRole('principal'))
        {
            return view('principal.dashboard');
        }

        if(auth()->user()->hasRole('teachers'))
        {
            return view('teachers.dashboard');
        }

        if(auth()->user()->hasRole('students'))
        {
            return view('students.dashboard');
        }

    }
}
