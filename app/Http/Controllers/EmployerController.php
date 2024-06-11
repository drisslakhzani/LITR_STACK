<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function index() {
        $employers = Employer::all();
        return view('employer', with(compact('employers')));
    }
    public function find() {
        $employers = Employer::all();
        $jobs= $employers->with('jobs')->get();
    }
}
