<?php

namespace Bone\Test\Sms;

use Bone\Sms\SmsService;
use Codeception\TestCase\Test;

class SmsProviderTest extends Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    /**
     * @var SmsService
     */
    protected $sms;

    protected function _before()
    {
        $provider = new FakeProvider();
        $this->sms = new SmsService($provider);
    }

    protected function _after()
    {
        // unset the blank class after each test
        unset($this->sms);
    }

    /**
     * Check tests are working
     */
    public function testSendMessage()
    {
        $this->assertTrue($this->sms->sendSms(
            '00447984098877',
            'Here is your confirmation code - XXXXX'
        ));
    }


    /**
     * Check tests are working
     */
    public function testSendMulti()
    {
        $this->assertTrue($this->sms->sendBatchSms(
            ['00447984098877'],
            'Here is your confirmation code - XXXXX'
        ));
    }
}
