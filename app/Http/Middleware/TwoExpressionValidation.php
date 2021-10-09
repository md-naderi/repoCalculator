<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Services\Validation\Validation;

class TwoExpressionValidation
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
        try{
            $wholeData = $request->post('poly');
            $firstExpression = $wholeData['first_poly'];
            $secondExpression = $wholeData['second_poly'];
        }catch(\Throwable $th){
            return response()->json([
                "error" => $th->getMessage()
            ]);
        }
        if (
            Validation::isValid($firstExpression) &&
            Validation::isValid($secondExpression)
        ) 
        {
            return $next($request);
        }
        return response()->json(
            [
                "error" => "invalid expression!"
            ]
        );
    }
}
