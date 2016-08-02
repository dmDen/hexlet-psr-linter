<?php

namespace HexletPsrLinter;

class MyLinter
{
    private $source;

    public function __construct($source)
    {
        $this->source = $source;
    }

    public function validate()
    {
        return "Is valid";
    }
}
