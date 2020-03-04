<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index() {
        $drivers = \App\Driver::all();
        return view('driver.index');
    }

    public function create() {
        return view('driver.create');
    }

    public function store() {
        $driver = request()->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'address' => 'required|string'
        ]);

        \App\Driver::create($driver);

        return 'Completed';
    }
}
