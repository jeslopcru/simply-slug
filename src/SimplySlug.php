<?php

namespace jeslopcru\SimplySlug;

use Symfony\Component\Yaml\Yaml;

class SimplySlug
{
    const UNWANTED_CHARS = '/([^a-z0-9]|-)+/';

    protected $charMap;

    public function __construct()
    {
        $this->charMap = Yaml::parse(file_get_contents(__DIR__ . '/charmap.yml'));
    }

    public function drools($text, $separator = '-')
    {
        $text = $this->normalize($text);
        $text = $this->replaceUnwantedChars($text, $separator);

        return trim($text, $separator);
    }

    protected function normalize($text)
    {
        return strtolower(strtr($text, $this->charMap));
    }

    protected function replaceUnwantedChars($text, $separator)
    {
        return preg_replace(SimplySlug::UNWANTED_CHARS, $separator, $text);
    }
}
