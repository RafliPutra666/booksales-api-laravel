<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        try {
           $user = JWTAuth::parseToken()->authenticate();

           if (!in_array($user->role, $roles)) {
               return response()->json([
                'success' => false,
                'message' => 'Akses ditolak. Role tidak sesuai.'
            ], 403);
           }

           return $next($request);
        } catch (JWTException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Token tidak valid atau kedaluwarsa.'
            ], 401);
        }
    }
}
