<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index() {
        Service::all();
        $services = Service::all();
        return view('service.index', compact('services'));
    }

    public function create() {
        return view('service.create');
    }

    public function store() {
        $serviceItem = request()->validate([
            'name'=>'string',
            'description'=>'string',
            'time'=>'string',
            'price'=>'string'
        ]);
        Service::create($serviceItem);
        return redirect()->route('service.index');
    }

    public function show(Service $service) {
        return view('service.show', compact('service'));
    }

    public function edit(Service $service) {
        return view('service.edit', compact('service'));
    }

    public function update(Service $service) {
        $serviceItem = request()->validate([
            'name'=>'string',
            'description'=>'string',
            'time'=>'string',
            'price'=>'string'
        ]);
        $service->update($serviceItem);
        return redirect()->route('services.show', $service->id);
    }

    public function destroy(Service $service) {
        $service->delete();
        return redirect()->route('service.index');
    }
}
