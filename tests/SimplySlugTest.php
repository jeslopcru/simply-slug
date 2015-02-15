<?php

namespace jeslopcru\SimplySlug\tests;

use jeslopcru\SimplySlug\SimplySlug;

class SimplySlugTest extends \PHPUnit_Framework_TestCase
{
    /** @var  SimplySlug */
    protected $simplySlug;

    public function setUp()
    {
        $this->simplySlug = new SimplySlug();
    }
    public function testCreateASlugFromString()
    {
        $this->assertEquals('world', $this->simplySlug->drools('World'));
    }

    public function testCreateASlugFromTwoString()
    {
        $this->assertEquals('hello-world', $this->simplySlug->drools('Hello World'));
    }
}
