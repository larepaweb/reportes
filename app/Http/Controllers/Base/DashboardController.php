<?php

namespace App\Http\Controllers\Base;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function tecnico()
    {
        return view('dashboard.tecnico');
    }

    public function cliente()
    {
        return view('dashboard.cliente');
    }
}
