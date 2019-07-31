<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class RedirectToUnfinishedOnboardingStep
{
    public function handle($request, Closure $next)
    {
        if (Auth::user()->onboarding()->inProgress()) {
            return redirect()->to(
                Auth::user()->onboarding()->nextUnfinishedStep()->link
            );
        }

        return $next($request);
    }
}
