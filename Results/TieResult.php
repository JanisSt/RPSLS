<?php

class TieResult implements Result
{

    public function getMessage(): string
    {
        return '0' . PHP_EOL;
    }
}