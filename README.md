Fatcow Icons Bundle By JP Infinity
==================================

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/JPInfinity/FatcowIconsBundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/JPInfinity/FatcowIconsBundle/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/JPInfinity/FatcowIconsBundle/badges/build.png?b=master)](https://scrutinizer-ci.com/g/JPInfinity/FatcowIconsBundle/build-status/master)

3926 Free "Farm-Fresh Web Icons". Beautifully designed icons from FatCow Web Hosting! Icon set includes both 16 and 32 pixel versions of icons shown there : http://www.fatcow.com/free-icons.

Installation
============

### Step 1: Install FatcowIconsBundle

***Using Composer***

Add the following to the "require" section of your `composer.json` file:

```
    "jp-infinity/fatcow-icons-bundle": "dev-master"
```

And update your dependencies

```
    php composer.phar update
```


### Step 2: Enable the bundle

Registers the bundle in your `app/AppKernel.php`:

```php
<?php
...
public function registerBundles()
{
    $bundles = array(
        ...
        new JPInfinity\FatcowIconsBundle\FatcowIconsBundle(),
        ...
    );
...
```

### Step 3: Install assets

Install assets to your web dir :

```php
<?php
...
    php app/console assets:install [--symlink]
...
```

Usage
=====

Basics
------

This bundle is based on the [Fatcow Icons](http://www.fatcow.com/free-icons) library

Requirements
============


License
=======

This bundle is under CC license
