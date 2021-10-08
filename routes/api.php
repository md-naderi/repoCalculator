<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperationController;

Route::middleware('two_expression_validation')->group(function () {
   Route::post("sum", [OperationController::class, "summation"]);
   Route::post("sub", [OperationController::class, "subtraction"]);
   Route::post("mul", [OperationController::class, "multiplication"]);
});

Route::middleware('one_expression_validation')->group(function () {
   Route::post("derivative", [OperationController::class, "derivative"]);
   Route::post("calculate", [OperationController::class, "calculation"]);
});
