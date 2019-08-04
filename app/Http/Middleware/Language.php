<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function __construct(Redirector $redirector) {
        // $this->app = $app;
        $this->redirector = $redirector;
        // $this->request = $request;
    }

    public function handle($request, Closure $next)
    {
        return $next($request);
        $segments = $request->segments();
        $locale = $segments[0];
        if ($locale == "admin"){
            return $next($request);
        }
        $languages = ['id','en'];
        if (!in_array($locale, $languages)) {
            $segments = array_merge(['id'], $segments);
            return $this->redirector->to(implode('/', $segments));
        }

        return $next($request);
    }
}
