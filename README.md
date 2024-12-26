## Description
This package was developed during my learning path in the COURSE
[PHP Course - beginner to Advanced]

It's a simple Router for PHP to handle Requests.

## Installation
You can install the package via composer:

```bash
composer require Aminedev\PhpSimpleRouter
```

## Usage

You need to have a .htaccess file to redirect everything to your index.php

```bash
RewriteEngine On
RewriteBase /YourSRC
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.+)$ index.php [QSA,L]

```
then inside the index.php you can use the router to handle or get/post/put/patch/delete

```php
Router::handle("GET", "/contact", "contact.php");
```

or 

```php
Router::get("/contact", "contact.php");
```

or you can use predefined or anonymous functions

```php
function testMe(){
    echo "this works as well!";
}
Router::get('/test', 'testMe'); 
```

or

```php
 Router::get('/test', function(){
    echo "I'm in the function";
});
```
## LIVE USAGE
- Composer Usage:
<img src = "https://github.com/AminebajjiDEV/PHP_SIMPLE_ROUTER/blob/main/Composer%20commande.png" style = "float: left"/>

- Working Package:
<img src = "https://github.com/AminebajjiDEV/PHP_SIMPLE_ROUTER/blob/main/Working%20Package.png" style = "float: left"/>


## Testing

this was developed for learning purposes. No tests have been written
```bash
composer test
```

## Changelog

Please see [CHANGELOG](./CHANGELOG.md) for more informations.

## Contributing

You can fork this project and add new features and send me pull requests.

## License

MIT License
