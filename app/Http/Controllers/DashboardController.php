<?php

namespace App\Http\Controllers;

use App\Models\Peta;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $peta = Peta::count();

        return view('dashboard.dashboard', [
            'peta' => $peta,
        ]);
    }
}
