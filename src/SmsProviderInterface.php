<?php

namespace Bone\Sms;

interface SmsProviderInterface
{
    public function sendSms(string $to, string $sms): bool;
}