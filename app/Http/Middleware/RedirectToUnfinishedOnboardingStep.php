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
            );
        }

        return $next($request);
    }
}
