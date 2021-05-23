# sms
[![Build Status](https://travis-ci.com/delboy1978uk/sms.png?branch=master)](https://travis-ci.com/delboy1978uk/sms) [![Code Coverage](https://scrutinizer-ci.com/g/delboy1978uk/sms/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/delboy1978uk/sms/?branch=master) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/delboy1978uk/sms/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/delboy1978uk/sms/?branch=master) <br />
Sms gateway provider service
## installation
Install via composer
```
composer require delboy1978uk/sms
```
## Usage
Create a provider, passing in the necessary config, and create the service, passing in the provider adapter:
```php
<?php

use SomeProvider;
use SmsService;

$config = [
    'client_id' => 'whatever',
    'client_secret' => 'whatever',
    'api_url' => 'https://whatever',
    'authentication_url' => '/authorize',
    'tokenurlurl' => '/token',
];

$adapter = new SomeProvider($config);
$smsService = new SmsService($adapter);
```
### sending a text
```php
$number = '00447123456789';
$message = 'Your delivery is about to arrive!';
$smsService->sendSms($number, $message);
```
### sending to a group of people
```php
$numbers = ['00447123456789', '0032123123456'];
$message = 'The latest and greatest version of X is out now!!';
$smsService->sendGroupSms($numbers, $message);
```