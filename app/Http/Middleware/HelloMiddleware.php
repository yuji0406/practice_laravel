<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $data = [
            ['name' => 'taro', 'mail' => 'taro@sample.com'],
            ['name' => 'hanako', 'mail' => 'hanako@sample.com'],
            ['name' => 'jiro', 'mail' => 'jiro@sample.com'],
        ];
        $request->merge(['data' => $data]);
        return $next($request);
    }
}
