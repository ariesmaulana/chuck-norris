<?php

namespace Ariesmaulana\ChuckNorris;

class JokeFactory
{
    protected $jokes = [
        'Chuck Norris doesn’t read books. He stares them down until he gets the information he wants.',
        'Chuck Norris has a mug of nails instead of coffee in the morning.',
        'Chuck Norris’ tears cure cancer. Too badls he has never cried.',
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
