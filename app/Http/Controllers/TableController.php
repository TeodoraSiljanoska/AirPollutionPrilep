<?php

namespace App\Http\Controllers;

use App\Models\PM10Measurement;
use App\Models\NO2Measurement;
use App\Models\COMeasurement;
use App\Models\O3Measurement;
use App\Models\SO2Measurement;

class TableController extends Controller
{
    public function showNO2MeasurementTable()
    {
        $measurements = NO2Measurement::all();

        return view('no2measurementstable', compact('measurements'));
    }

    public function showPM10MeasurementTable()
    {
        $measurements = PM10Measurement::all();

        return view('pm10measurementstable', compact('measurements'));
    }

    public function showCOMeasurementTable()
    {
        $measurements = COMeasurement::all();

        return view('comeasurementstable', compact('measurements'));
    }

    public function showO3MeasurementTable()
    {
        $measurements = O3Measurement::all();

        return view('o3measurementstable', compact('measurements'));
    }

    public function showSO2MeasurementTable()
    {
        $measurements = SO2Measurement::all();

        return view('so2measurementstable', compact('measurements'));
    }
}
