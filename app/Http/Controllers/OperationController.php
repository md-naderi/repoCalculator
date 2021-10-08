<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Utils\Analyzer;
use App\Services\Operation;
use App\Services\Utils\Poly;

class OperationController extends Controller
{
    public function summation(Request $request)
    {
        $wholeData = $request->post('poly');
        $first = $wholeData['first_poly'];
        $second = $wholeData['second_poly'];
        $firstMonosArray = (new Analyzer($first))->init();
        $secondMonosArray = (new Analyzer($second))->init();
        $firstPoly = (new Poly($firstMonosArray))->cleanup();
        $secondPoly = (new Poly($secondMonosArray))->cleanup();
        return response()->json(
            Operation::addition($firstPoly, $secondPoly)
        );
    }
    public function subtraction(Request $request)
    {
        $wholeData = $request->post('poly');
        $first = $wholeData['first_poly'];
        $second = $wholeData['second_poly'];
        $firstMonosArray = (new Analyzer($first))->init();
        $secondMonosArray = (new Analyzer($second))->init();
        $firstPoly = (new Poly($firstMonosArray))->cleanup();
        $secondPoly = (new Poly($secondMonosArray))->cleanup();
        return response()->json(
            Operation::subtraction($firstPoly, $secondPoly)
        );
    }
    public function multiplication(Request $request)
    {
        $wholeData = $request->post('poly');
        $first = $wholeData['first_poly'];
        $second = $wholeData['second_poly'];
        $firstMonosArray = (new Analyzer($first))->init();
        $secondMonosArray = (new Analyzer($second))->init();
        $firstPoly = (new Poly($firstMonosArray))->cleanup();
        $secondPoly = (new Poly($secondMonosArray))->cleanup();
        return response()->json(
            Operation::multiplication($firstPoly, $secondPoly)
        );
    }
    public function derivative(Request $request)
    {
        $wholeData = $request->post('poly');
        $first = $wholeData['first_poly'];
        $firstMonosArray = (new Analyzer($first))->init();
        $firstPoly = (new Poly($firstMonosArray))->cleanup();
        return response()->json(
            Operation::derivative($firstPoly)
        );
    }
    public function calculation(Request $request)
    {
        $wholeData = $request->post('poly');
        $first = $wholeData['first_poly'];
        $number = $wholeData['number'];
        $firstMonosArray = (new Analyzer($first))->init();
        $firstPoly = (new Poly($firstMonosArray))->cleanup();
        return response()->json(
            ["result" => Operation::calculateByX($firstPoly, $number)]
        );
    }
}