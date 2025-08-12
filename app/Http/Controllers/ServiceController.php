<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::active()
            ->ordered()
            ->get();

        $popularServices = Service::active()
            ->popular()
            ->ordered()
            ->take(4)
            ->get();

        $servicesByCategory = Service::active()
            ->get()
            ->groupBy('category');

        return view('services.index', compact('services', 'popularServices', 'servicesByCategory'));
    }

    public function show(Service $service)
    {
        if (!$service->is_active) {
            abort(404);
        }

        $relatedServices = Service::active()
            ->where('category', $service->category)
            ->where('id', '!=', $service->id)
            ->ordered()
            ->take(3)
            ->get();

        return view('services.show', compact('service', 'relatedServices'));
    }
}
