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

    /**
     * @dataProvider supportedStrings
     */
    public function testCreateASlugFromString($text, $expectedSlug)
    {
        $slug = $this->simplySlug->drools($text);

        $this->assertEquals($expectedSlug, $slug);
    }

    public function supportedStrings()
    {
        return [
            ['World', 'world'],
            ['Hello World', 'hello-world'],
            ['  more  trim  than    needed  ', 'more-trim-than-needed'],
            ['murciélago: lleva Acento', 'murcielago-lleva-acento'],
            ['J\'étudie le français', 'j-etudie-le-francais'],
        ];
    }

    public function testWikipediaStyleSlug()
    {
        $slug = $this->simplySlug->drools('Wikipedia Style', '_');

        $this->assertEquals('wikipedia_style', $slug);
    }
}
