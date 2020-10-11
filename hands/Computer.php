<?php

class Computer
{
    private int $random;


    public function __construct()
    {
        $this->random = rand(0, 4);
    }

    public function pcMove(): string
    {
        $Y = ['rock', 'paper', 'scissors', 'lizard', 'spock'];

        return $Y[$this->random];
    }


}