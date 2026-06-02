<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectWww
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $host = $request->header('host');

        if ($host && (str_starts_with($host, 'www.conference2026.nitra.ac.in'))) {
            $newHost = str_replace('www.conference2026.nitra.ac.in', 'conference2026.nitra.ac.in', $host);
            // Detect secure scheme or fallback to requested scheme
            $scheme = $request->secure() ? 'https' : 'http';
            // Under normal production, we prefer https if secure is enabled
            if ($request->header('X-Forwarded-Proto') === 'https') {
                $scheme = 'https';
            }
            
            return redirect()->to($scheme . '://' . $newHost . $request->getRequestUri(), 301);
        }

        return $next($request);
    }
}
