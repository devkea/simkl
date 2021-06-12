<?php

namespace SocialiteProviders\Simkl;

use SocialiteProviders\Manager\SocialiteWasCalled;

class SimklExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('simkl', Provider::class);
    }
}
