<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Services\Validation\Validation;
use Error;

class OneExpressionValidation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $error = response()->json(
            [
                "error" => "invalid expression!"
            ]
        );

        try {
            $wholeData = $request->post('poly');
            $number = $wholeData['number'];
            if (!is_numeric($number))
                return $error;
        } catch (\Throwable $th) {
            return response()->json(
                [
                    'error' => $th->getMessage()
                ]
            );
        } catch (\Exception $th) {
            return response()->json(
                [
                    'error' => $th->getMessage()
                ]
            );
        }


        $firstExpression = $wholeData['first_poly'];
        if (Validation::isValid($firstExpression)) 
        {
            return $next($request);
        }
        return $error;
    }
}
