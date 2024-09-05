# Simple Laravel package that gets jokes

uses 
```php
$response = Http::get('https://official-joke-api.appspot.com/jokes/random');
```

to get a random ( hopefully work safe ) random joke

a route of `/joke` is then available to get a random joke and display it using the following structure

```bash
src/
├── Controllers
│   └── JokesController.php
├── Joke.php
├── Providers
│   └── JokesProvider.php
├── resources
│   └── views
│       └── index.blade.php
└── routes
    └── web.php
```

to install add this to `compose.json` :

```json
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/marshyon/official-jokes.git"
        }
    ],
```

and set the following also in `composer.json` :

```json
    "minimum-stability": "dev",
```

following this with 

```bash
composer require marshyon/official-jokes
```

and then try to get to the `http://laravel.test/joke` route of your running Laravel app, substituing this path to suit your environment

