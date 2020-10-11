<?php

class LoseResult implements Result
{

    public function getMessage(): string
    {
        return 'PC' . PHP_EOL;
    }
}