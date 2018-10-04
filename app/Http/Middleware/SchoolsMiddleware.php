<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class SchoolsMiddleware
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
        $school = new \App\Models\School;
        if (!isset($school->name)) {
            $school = \App\Models\School::where('slug', $request->route('school'))->first();
        }
        if (!isset($school->name)) {
            $school = \App\Models\School::where('domain', $request->route('domain') . '.' . $request->route('tld'))->first();
        }
        if (!isset($school->name)) {
            abort(404);
        }
        Session::flash('school', $school);
        
        return $next($request);
    }
}
