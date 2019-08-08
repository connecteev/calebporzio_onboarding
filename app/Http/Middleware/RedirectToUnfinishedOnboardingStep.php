<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class RedirectToUnfinishedOnboardingStep
{
    public function handle($request, Closure $next)
    {
        if (auth()->user() && auth()->user()->onboarding()->inProgress()) {
            return redirect()->to(
                auth()->user()->onboarding()->nextUnfinishedStep()->link
                //. '?redirect_to=/' . $request->path()
                //. '?redirect_to=/' . $request->url()
            );
        }

        return $next($request);
    }
}
