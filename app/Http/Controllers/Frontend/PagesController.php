<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\NepaliDate;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $today = NepaliDate::today();
        return view('home.index', compact('today'));
    }
    public function api()
    {
        return view('home.api');
    }
}
