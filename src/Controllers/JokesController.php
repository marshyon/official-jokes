<?php
namespace Marshyon\OfficialJokes\Controllers;

use Marshyon\OfficialJokes\Joke;

class JokesController
{
    public function __invoke(Joke $joke) {
        $jokeText = $joke->justDoIt();

        return view('official-jokes::index', ['joke' => $jokeText]); 
    }
}
