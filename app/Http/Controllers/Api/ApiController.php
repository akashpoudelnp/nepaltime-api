<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\NepaliDate;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function today()
    {
        $today = NepaliDate::today();
        return response($today);
    }
    public function convertBsToAd(Request $request)
    {
        $request->validate([
            'month' => 'required|numeric|between:1,12',
            'day' => 'required|numeric|between:1,32',
            'year' => 'required|numeric|between:1800,2099',
        ]);
        $nepalidate = new NepaliDate;
        if ($nepalidate->validate_en($request->year, $request->month, $request->day)) {
            $ad = $nepalidate->get_eng_date($request->year, $request->month, $request->day);
            $ad = json_encode($ad, JSON_UNESCAPED_UNICODE);
            return response($ad);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Invalid date']);
        }
    }
    public function convertAdtoBs(Request $request)
    {
        $request->validate([
            'month' => 'required|numeric|between:1,12',
            'day' => 'required|numeric|between:1,32',
            'year' => 'required|numeric|between:1800,2099',
        ]);
        $nepalidate = new NepaliDate;
        if ($nepalidate->validate_ne($request->year, $request->month, $request->day)) {
            $bs = $nepalidate->get_nepali_date($request->year, $request->month, $request->day);
            $bs = json_encode($bs, JSON_UNESCAPED_UNICODE);
            return response($bs);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Invalid date']);
        }
    }
}
