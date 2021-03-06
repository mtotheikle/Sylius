Sylius [![Build status...](https://secure.travis-ci.org/Sylius/Sylius.png?branch=master)](http://travis-ci.org/Sylius/Sylius)
======

https://www.codeship.io/projects/fa8b6d70-079a-0131-0e8b-7a5ec01f4ad3/status

Sylius is an open source e-commerce solution for **PHP**, based on the [**Symfony2**](http://symfony.com) framework.

Ultimate goal of the project is to create a webshop engine, which is user-friendly, *loved* by developers and has a helpful community.

Sylius is constructed from fully decoupled components (bundles in Symfony2 glossary), which means that every feature (products catalog, shipping engine, promotions system...) can be used in any other application. 

We're using full-stack BDD methodology, with [phpspec](http://phpspec.net) and [Behat](http://behat.org).

Installation
------------

``` bash
$ wget http://getcomposer.org/composer.phar
$ php composer.phar create-project sylius/sylius -s dev
$ cd sylius
$ php app/console sylius:install
```

[Behat](http://behat.org) scenarios
-----------------------------------

You need to copy Behat default configuration file and enter your specific ``base_url``
option there.

```bash
$ cp behat.yml.dist behat.yml
$ vi behat.yml
```

Then download [Selenium Server](http://seleniumhq.org/download/), and run it.

```bash
$ java -jar selenium-server-standalone-2.11.0.jar
```

You can run Behat using the following command.

``` bash
$ bin/behat
```

Troubleshooting
---------------

If something goes wrong, errors & exceptions are logged at the application level.

````
tail -f app/logs/prod.log
tail -f app/logs/dev.log
````

Contributing
------------

All informations about contributing to Sylius can be found on [this page](http://docs.sylius.org/en/latest/contributing/index.html).

Sylius on twitter
-----------------

If you want to keep up with the updates, [follow the official Sylius account on twitter](http://twitter.com/Sylius).

Bug tracking
------------

Sylius uses [GitHub issues](https://github.com/Sylius/Sylius/issues).
If you have found bug, please create an issue.

MIT License
-----------

License can be found [here](https://github.com/Sylius/Sylius/blob/master/LICENSE).

Authors
-------

Sylius was originally created by [Paweł Jędrzejewski](http://pjedrzejewski.com).
See the list of [contributors](https://github.com/Sylius/Sylius/contributors).
