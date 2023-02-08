<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\AdditionalService;

class PagesController extends Controller
{
    public function home() {
        $services = Service::orderby('created_at', 'asc')->get();
        $additional_services = AdditionalService::orderby('created_at', 'asc')->get();

        return view('index', [
            'services' => $services,
            'additional_services' => $additional_services,
        ]);
    }
}
