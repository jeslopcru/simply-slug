<?php

namespace jeslopcru\SimplySlug;

class SimplySlug
{
    const UNWANTED_CHARS = '/([^a-z0-9]|-)+/';

    public function drools($text, $separator = '-')
    {
        $text = strtolower($text);
        $text = $this->replaceUnwantedChars($text, $separator);

        return trim($text, $separator);
    }

    protected function replaceUnwantedChars($text, $separator)
    {
        return preg_replace(SimplySlug::UNWANTED_CHARS, $separator, $text);
    }
}
