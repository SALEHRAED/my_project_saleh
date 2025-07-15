<?php

use App\Http\Controllers\Api\ParentsApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\StudentApiController;
use App\Http\Controllers\Api\TeacherApiController;
use App\Http\Controllers\Api\GradeApiController;
use App\Http\Controllers\Api\SubjectApiController;
use App\Http\Controllers\Api\AttendanceApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('students', StudentApiController::class);
Route::apiResource('teachers', TeacherApiController::class);
Route::apiResource('grades', GradeApiController::class);
Route::apiResource('subjects', SubjectApiController::class);
Route::apiResource('attendances', AttendanceApiController::class);
Route::apiResource('parents', ParentsApiController::class);