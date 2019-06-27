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
        return view('user.index');
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
        $result = array_merge($indicators, $request->all());

        //статус collapse окна (открыто/закрыто)
        foreach ($request->only('name', 'academic_year', 'discipline','group') as $key => $value) {
            if ($value !== null) {
                $result['collapse'] = 'show';
            }
        }

        //выбор действия (подсчет/печать)
        if ($request->submit == 'calculate') {
            return view('user.index', $result);
        } elseif ($request->submit == 'print') {
            return view('user.print', $result);
        }
    }
}
