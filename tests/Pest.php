<?php

uses()->beforeEach(function () {
    $this->apiKey = getenv('SPORTSDATAIO_API_KEY') ?: 'test-api-key';
})->in(__DIR__);
