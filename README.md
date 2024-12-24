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
RewriteBase /PHP_COURSE/FIRST_PACKAGE/
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

Copyright (c) [2025] [AmineBajjiDev]

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

