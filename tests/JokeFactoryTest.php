<?php

namespace Ariesmaulana\ChuckNorris\Tests;

use PHPUnit\Framework\TestCase;
use Ariesmaulana\ChuckNorris\JokeFactory;

class JokeFactoryTest extends TestCase
{

    /** @test */
    public function itRandomJoke()
    {
        $jokes = new JokeFactory([
            'This is a joke'
        ]);
        $joke = $jokes->getRandomJoke();
        $this->assertSame('This is a joke', $joke);
    }

    /** @test */
    public function anotherJoke()
    {
        $list_of_jokes = [
            'Chuck Norris doesn’t read books. He stares them down until he gets the information he wants.',
            'Chuck Norris has a mug of nails instead of coffee in the morning.',
            'Chuck Norris’ tears cure cancer. Too bad he has never cried.'
        ];
        $jokes = new JokeFactory();
        $joke = $jokes->getRandomJoke();
        $this->assertContains($joke, $list_of_jokes);
    }
}
