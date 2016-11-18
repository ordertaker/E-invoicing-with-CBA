<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }

    protected function index()
    {
    	return view('/reports');
    }
}
