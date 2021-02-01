La Ilustracion
========================

The "La Ilustracion" is a french-spanish blog .

Requirements
------------

  * PHP 7.2.9 or higher;
  * PDO-SQLite PHP extension enabled;
  * and the [usual Symfony application requirements][2].


Usage
-----

There's no need to configure anything to run the application. If you have
[installed Symfony][4] binary, run this command:

```bash
$ cd la_ilustracion/
$ symfony serve
```

Then access the application in your browser at the given URL (<https://localhost:8000> by default).

If you don't have the Symfony binary installed, run `php -S localhost:8000 -t public/`
to use the built-in PHP web server or [configure a web server][3] like Nginx or
Apache to run the application.

Tests
-----

Execute this command to run tests:

```bash
$ cd la_ilustracion/
$ ./bin/phpunit
```

[1]: https://symfony.com/doc/current/best_practices.html
[2]: https://symfony.com/doc/current/reference/requirements.html
[3]: https://symfony.com/doc/current/cookbook/configuration/web_server_configuration.html
[4]: https://symfony.com/download
