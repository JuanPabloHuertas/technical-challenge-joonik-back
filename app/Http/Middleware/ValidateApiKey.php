<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidateApiKey
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
        $apiKey = $request->header('X-API-Key');

        if (!$apiKey || $apiKey !== config('api.key')) {
            return response()->json([
                'error' => 'Invalid or missing API key',
                'status' => 'unauthorized'
            ], Response::HTTP_UNAUTHORIZED);
        }

        return $next($request);
    }
}
