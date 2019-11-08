<?php

use PHPUnit\Framework\TestCase;

use Hotmart\Request\RequestHelper;

class RequestHelperUnitTest extends TestCase
{
    public function testUnitRemoveEmptyKeys(): void
    {
        $testArray = [
            'first' => [],
            'second' => null,
            'third' => 'third',
            'fourth' => '',
            'fifth' => 1,
        ];

        $arrayWhithoutEmptyKeys = RequestHelper::removeEmptyKeys($testArray);

        $expectedResponseArray = [
            'first' => [],
            'third' => 'third',
            'fifth' => 1,
        ];

        $this->assertEquals($arrayWhithoutEmptyKeys, $expectedResponseArray);

        $this->assertArrayHasKey('first', $arrayWhithoutEmptyKeys);
        $this->assertArrayHasKey('third', $arrayWhithoutEmptyKeys);
        $this->assertArrayHasKey('fifth', $arrayWhithoutEmptyKeys);

        $this->assertArrayNotHasKey('second', $arrayWhithoutEmptyKeys);
        $this->assertArrayNotHasKey('fourth', $arrayWhithoutEmptyKeys);
    }

    public function testUnitGenerateUrlQueryString(): void
    {
        $queryParams = [];
        $queryString = RequestHelper::generateUrlQueryString($queryParams);
        $this->assertEquals('', $queryString);

        $queryParams = [
            'first' => 'first'
        ];
        $queryString = RequestHelper::generateUrlQueryString($queryParams);
        $this->assertEquals($queryString, '?first=first');

        $queryParams = [
            'first' => 'first',
            'second' => 'second'
        ];
        $queryString = RequestHelper::generateUrlQueryString($queryParams);
        $this->assertEquals($queryString, '?first=first&second=second');
    }
}
