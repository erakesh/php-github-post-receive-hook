CarlosIO\GitHub
================

[![Build Status](https://secure.travis-ci.org/carlosbuenosvinos/php-github-post-receive-hook.png?branch=master)](http://travis-ci.org/carlosbuenosvinos/php-github-post-receive-hook)

CarlosIO\GitHub is a GitHub PHP API for creating GitHub Post Receive Hooks.

Documentation
=============

https://help.github.com/articles/post-receive-hooks

Installation
============

The best way to install the library is by using [Composer](http://getcomposer.org). Add the following to `composer.json` in the root of your project:

``` javascript
{
    "require": {
        "carlosio/github": "1.*"
    }
}
```

Then, on the command line:

``` bash
curl -s http://getcomposer.org/installer | php
php composer.phar install
```

Use the generated `vendor/autoload.php` file to autoload the library classes.
