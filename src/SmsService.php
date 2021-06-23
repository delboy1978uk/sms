<?php

namespace Bone\Sms;

use Closure;

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

    /**
     * @param string $to
     * @param string $sms
     * @return bool
     */
    public function sendSms(string $to, string $sms): bool
    {
        $this->provider->sendSms($to, $sms);

        return true;
    }

    /**
     * @param array $to
     * @param string $sms
     * @param Closure|null $callback
     * @return bool
     */
    public function sendBatchSms(array $to, string $sms, Closure $callback = null): bool
    {
        $originalText = $sms;

        foreach ($to as $recipient) {
            $sms = $callback ? $callback($originalText) : $originalText;
            $this->provider->sendSms($recipient, $sms);
        }

        return true;
    }
}