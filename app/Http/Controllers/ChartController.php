<?php

namespace App\Http\Controllers;

use App\Models\SO2Measurement;
use App\Models\NO2Measurement;
use App\Models\COMeasurement;
use App\Models\O3Measurement;
use App\Models\PM10Measurement;

class ChartController extends Controller
{
    /* public function showChart()
    {
        $data = SO2Measurement::select('date', 'value')->get();

        $chart = Charts::database($data, 'line', 'highcharts')
            ->elementLabel("Value")
            ->dimensions(1000, 500)
            ->responsive(true)
            ->groupByDay();

        return view('chart', compact('chart'));
    } */

    /* public function showMeasurements()
    {
        $measurements = SO2Measurement::all();

        return view('measurements', compact('measurements'));
    } */

    public function showSO2Measurements()
    {
        $measurements = SO2Measurement::all();

        $dates = $measurements->pluck('date');
        $values = $measurements->pluck('value');

        return view('so2measurements', compact('dates', 'values'));
    }

    public function showNO2Measurements()
    {
        $measurements = NO2Measurement::all();

        $dates = $measurements->pluck('date');
        $values = $measurements->pluck('value');

        return view('no2measurements', compact('dates', 'values'));
    }

    public function showCOMeasurements()
    {
        $measurements = COMeasurement::all();

        $dates = $measurements->pluck('date');
        $values = $measurements->pluck('value');

        return view('comeasurements', compact('dates', 'values'));
    }

    public function showO3Measurements()
    {
        $measurements = O3Measurement::all();

        $dates = $measurements->pluck('date');
        $values = $measurements->pluck('value');

        return view('o3measurements', compact('dates', 'values'));
    }

    public function showPM10Measurements()
    {
        $measurements = PM10Measurement::all();

        $dates = $measurements->pluck('date');
        $values = $measurements->pluck('value');

        return view('pm10measurements', compact('dates', 'values'));
    }
}
