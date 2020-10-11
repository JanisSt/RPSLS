<?php

class Lizard extends AbstractElement implements ElementInterface
{

    protected array $beatable = [
        Scissors::class,
        Paper::class
    ];

}