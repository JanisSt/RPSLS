<?php

class WinResult implements Result
{

    public function getMessage(): string
    {
        return 'PS' . PHP_EOL;
    }
}