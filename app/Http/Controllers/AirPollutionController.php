<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NO2Measurement;
use App\Models\COMeasurement;
use App\Models\O3Measurement;
use App\Models\PM10Measurement;
use App\Models\SO2Measurement;

class AirPollutionController extends Controller
{
    /**
     * Imports products from Excel file and stores in database
     */

    public function importCO(Request $request)
    {
        COMeasurement::truncate();
        $this->validate($request, [
            'file' => 'required|mimes:csv',
        ]);

        $file_name = $request->file('file')->getClientOriginalName();
        $moved_path = $request->file('file')->storeAs('measurements_Prilep', $file_name);
        $file = $request->file('file');
        $fileContents = file($file->getPathname());

        array_shift($fileContents); // Skip header
        array_shift($fileContents); // Skip separator

        foreach ($fileContents as $line) {
            $data = str_getcsv($line);
            $value = $data[1] !== '' ? $data[1] : null;
            $date = isset($data[0]) ? $data[0] : null;

            COMeasurement::create([
                'date' => $date,
                'value' => $value,
            ]);
        }
    }

    public function importNO2(Request $request)
    {
        NO2Measurement::truncate();
        $this->validate($request, [
            'file' => 'required|mimes:csv',
        ]);

        $file_name = $request->file('file')->getClientOriginalName();
        $moved_path = $request->file('file')->storeAs('measurements_Prilep', $file_name);
        $file = $request->file('file');
        $fileContents = file($file->getPathname());

        array_shift($fileContents); // Skip header
        array_shift($fileContents); // Skip separator

        foreach ($fileContents as $line) {
            $data = str_getcsv($line);
            $value = $data[1] !== '' ? $data[1] : null;
            $date = isset($data[0]) ? $data[0] : null;

            NO2Measurement::create([
                'date' => $date,
                'value' => $value,
            ]);
        }
    }

    public function importO3(Request $request)
    {
        O3Measurement::truncate();
        $this->validate($request, [
            'file' => 'required|mimes:csv',
        ]);

        $file_name = $request->file('file')->getClientOriginalName();
        $moved_path = $request->file('file')->storeAs('measurements_Prilep', $file_name);
        $file = $request->file('file');
        $fileContents = file($file->getPathname());

        array_shift($fileContents); // Skip header
        array_shift($fileContents); // Skip separator

        foreach ($fileContents as $line) {
            $data = str_getcsv($line);
            $value = $data[1] !== '' ? $data[1] : null;
            $date = isset($data[0]) ? $data[0] : null;

            O3Measurement::create([
                'date' => $date,
                'value' => $value,
            ]);
        }
    }

    public function importPM10(Request $request)
    {
        PM10Measurement::truncate();
        $this->validate($request, [
            'file' => 'required|mimes:csv',
        ]);

        $file_name = $request->file('file')->getClientOriginalName();
        $moved_path = $request->file('file')->storeAs('measurements_Prilep', $file_name);
        $file = $request->file('file');
        $fileContents = file($file->getPathname());

        array_shift($fileContents); // Skip header
        array_shift($fileContents); // Skip separator

        foreach ($fileContents as $line) {
            $data = str_getcsv($line);
            $value = $data[1] !== '' ? $data[1] : null;
            $date = isset($data[0]) ? $data[0] : null;

            PM10Measurement::create([
                'date' => $date,
                'value' => $value,
            ]);
        }
    }

    public function importSO2(Request $request)
    {
        SO2Measurement::truncate();
        $this->validate($request, [
            'file' => 'required|mimes:csv',
        ]);

        $file_name = $request->file('file')->getClientOriginalName();
        $moved_path = $request->file('file')->storeAs('measurements_Prilep', $file_name);
        $file = $request->file('file');
        $fileContents = file($file->getPathname());

        array_shift($fileContents); // Skip header
        array_shift($fileContents); // Skip separator

        foreach ($fileContents as $line) {
            $data = str_getcsv($line);
            $value = $data[1] !== '' ? $data[1] : null;
            $date = isset($data[0]) ? $data[0] : null;

            SO2Measurement::create([
                'date' => $date,
                'value' => $value,
            ]);
        }
    }
}
