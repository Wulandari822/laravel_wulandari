<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $pasienHariIni = Pasien::whereDate('created_at', Carbon::today())->count();

    return view('dashboard', compact('pasienHariIni'));
    }
}
