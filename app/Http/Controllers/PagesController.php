<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;

class PagesController extends Controller
{
    public function home() {
        $services = Service::orderby('created_at', 'asc')->get();

        return view('index', [
            'services' => $services,
        ]);
    }
}
