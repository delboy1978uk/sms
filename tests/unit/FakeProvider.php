<?php

namespace Bone\Test\Sms;

use Bone\Sms\SmsProviderInterface;

class FakeProvider implements SmsProviderInterface
{
    public function sendSms(string $to, string $sms): bool
    {
        return true;
    }
}