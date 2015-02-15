<?php

namespace jeslopcru\SimplySlug;

class SimplySlug
{
    public function drools($text)
    {
        $text = strtolower($text);

        return trim($text);
    }

}
