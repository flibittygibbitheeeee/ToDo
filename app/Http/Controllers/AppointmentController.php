<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $data = Appointment::all();

        return view('appointment.index', ['appointments' => $data]);

        // return ('Hello World');
    }
}
