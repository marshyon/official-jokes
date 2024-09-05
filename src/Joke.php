<?php

namespace Marshyon\OfficialJokes;

use Illuminate\Support\Facades\Http;

class Joke {
    public function justDoIt() {
        // $response = Http::get('https://api.chucknorris.io/jokes/random');
        $response = Http::get('https://official-joke-api.appspot.com/jokes/random');


        /*
            {"type":"general","setup":"How many tickles does it take to tickle an octopus?","punchline":"Ten-tickles!","id":143}
        */

        return $response['type'] . ' -' . $response['setup'] . ' - ' . $response['punchline'];
    }
}