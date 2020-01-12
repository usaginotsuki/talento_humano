<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class CheckRole {
	protected $auth;

	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next, $action)
	{ 
		if (! $request->auth->user()->authorizeAccion($action)) {
            return abort(401, 'Accion no autorizada');
        }

		return $next($request);
	}

}
