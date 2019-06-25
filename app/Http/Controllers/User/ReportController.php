<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\ReportRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DigitalReport;

class ReportController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function calculate(ReportRequest $request)
    {
        $percents['mark2'] = DigitalReport::percentageMark($request->mark2, $request->students);
        $percents['mark3'] = DigitalReport::percentageMark($request->mark3, $request->students);
        $percents['mark4'] = DigitalReport::percentageMark($request->mark4, $request->students);
        $percents['mark5'] = DigitalReport::percentageMark($request->mark5, $request->students);
        $indicators['percents'] = DigitalReport::balancing($percents);
        $indicators['kpu'] = DigitalReport::kpu($request->only(['mark5', 'mark4', 'mark3']), $request->students);
        $indicators['pu'] = DigitalReport::pu($request->only(['mark5', 'mark4']), $request->students);
        $indicators['ca'] = DigitalReport::ca($request->only(['mark5', 'mark4', 'mark3', 'mark2']),$request->students);

        return view('index', array_merge($indicators, $request->all()));
    }
}
