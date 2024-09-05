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
