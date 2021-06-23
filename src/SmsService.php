<?php

namespace Bone\Sms;

class SmsService
{
    private SmsProviderInterface $provider;

    /**
     * SmsService constructor.
     * @param SmsProviderInterface $provider
     */
    public function __construct(SmsProviderInterface $provider)
    {
        $this->provider = $provider;
    }

    /**
     * @param SmsProviderInterface $provider
     */
    public function setProvider(SmsProviderInterface $provider)
    {
        $this->provider = $provider;
    }
}