<?php

namespace jeslopcru\SimplySlug\tests;

use jeslopcru\SimplySlug\SimplySlug;

class SimplySlugTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateASlugFromString()
    {
        $simplySlug = new SimplySlug();
        $this->assertEquals('world', $simplySlug->drools('World'));
    }
}
