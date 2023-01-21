<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CheckToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        $token = $request->header('Authorization');
        // check token is valid
        if (!$this->isValidToken($token)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $next($request);
    }

    protected function isValidToken($token)
    {
        if(Hash::check($token,'$2y$10$a7gJVa9N7JpsQHPIqUWDYOUc0Ar2OkdaEBHajG3IWQP/N8SDTD4iS')){
            return true;
        }
        return false;
    }
}
