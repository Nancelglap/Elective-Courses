<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class GetUserFromToken
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
        $auth = JWTAuth::parseToken();
        if (! $token = $auth->setRequest($request)->getToken()) {
            return response()->json([
                'code' => '',
                'message' => 'token_not_provided',
                'data' => '',
            ]);
        }
        
        try {
            $user = $auth->authenticate($token);
        } catch (TokenExpiredException $e) {
            return response()->json([
                'code' => '',
                'message' => 'token_expired',
                'data' => '',
            ]);
        } catch (JWTException $e) {
            return response()->json([
                'code' => '',
                'message' => 'token_invalid',
                'data' => '',
            ]);
        }
        if (! $user) {
            return response()->json([
                'code' => '',
                'message' => 'user_not_found',
                'data' => '',
            ]);
        }
        return $next($request);
    }
}
