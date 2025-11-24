<?php

use Faisuc\SportsdataioPhpSdk\Client;
use Faisuc\SportsdataioPhpSdk\SportsdataioPhpSdk;

uses()->beforeEach(function () {
    $this->apiKey = getenv('SPORTSDATAIO_API_KEY') ?: 'test-api-key';
})->in(__DIR__);