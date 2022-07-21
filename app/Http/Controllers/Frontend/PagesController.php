<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\NepaliDate;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $months_ne = NepaliDate::getMonthsNepali();
        $months_en = NepaliDate::getMonthsEnglish();
        $today = NepaliDate::today();
        $y = date('Y', time());
        $m = date('m', time());
        $d = date('d', time());
        $today_en = ['y' => $y, 'm' => $m, 'd' => $d];
        return view('home.index', compact('today', 'today_en', 'months_ne', 'months_en'));
    }
    public function api()
    {
        return view('home.api');
    }
}
