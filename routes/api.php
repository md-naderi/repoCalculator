<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperationController;

Route::middleware('two_expression_validation')->group(function () {
   Route::post("sum", [OperationController::class, "summation"]);
   Route::post("sub", [OperationController::class, "subtraction"]);
   Route::post("mul", [OperationController::class, "multiplication"]);
});

Route::post("derivative", [OperationController::class, "derivative"])->middleware('one_expression_validation');

Route::post("calculate", [OperationController::class, "calculation"])->middleware('calculation_validation');