<?php

namespace App\Tests;

use App\QuickStart;
use PHPUnit\Framework\TestCase;

class CalendarTest extends TestCase
{
    public function testGet()
    {
        $quickStart = new QuickStart();
        $quickStart->get();
    }
}