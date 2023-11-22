<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class TerminateLoggingMiddleware
{
    public function handle($request, Closure $next)
    {
        return $next($request);
    }

    public function terminate($request, $response)
    {
        $route = $request->route()->getName(); 
        $status = $response->status();
        $content = $response->content();

        Log::info("Route: $route, Status: $status");
        Log::info("Response Content:\n$content");
    }
}

