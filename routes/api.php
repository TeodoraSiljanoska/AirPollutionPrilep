<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AirPollutionController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\TableController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/import_no2', [AirPollutionController::class, 'importNO2']);
Route::post('/import_co', [AirPollutionController::class, 'importCO']);
Route::post('/import_o3', [AirPollutionController::class, 'importO3']);
Route::post('/import_pm10', [AirPollutionController::class, 'importPM10']);
Route::post('/import_so2', [AirPollutionController::class, 'importSO2']);
Route::get('/no2_chart', [ChartController::class, 'showNO2Measurements']);
Route::get('/co_chart', [ChartController::class, 'showCOMeasurements']);
Route::get('/o3_chart', [ChartController::class, 'showO3Measurements']);
Route::get('/pm10_chart', [ChartController::class, 'showPM10Measurements']);
Route::get('/so2_chart', [ChartController::class, 'showSO2Measurements']);
Route::get('/no2_table', [TableController::class, 'showNO2MeasurementTable']);
Route::get('/co_table', [TableController::class, 'showCOMeasurementTable']);
Route::get('/o3_table', [TableController::class, 'showO3MeasurementTable']);
Route::get('/pm10_table', [TableController::class, 'showPM10MeasurementTable']);
Route::get('/so2_table', [TableController::class, 'showSO2MeasurementTable']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
