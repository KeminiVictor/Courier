<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Http\Controllers\Agent\DashboardController;

class DashboardController extends Controller
{
    public function index(){

    	return view('agent.dashboard');
    }

}