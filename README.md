Fatcow Icons Bundle By JP Infinity
==================================

3926 Free "Farm-Fresh Web Icons". Beautifully designed icons from FatCow Web Hosting! Icon set includes both 16 and 32 pixel versions of icons shown there : http://www.fatcow.com/free-icons.

Installation
============

### Step 1: Install FatcowIconsBundle

***Using Composer***

Add the following to the "require" section of your `composer.json` file:

```
    "jp-infinity/fatcow-icons-bundle": "^1.0"
```

And update your dependencies

```
    php composer.phar update
```

### Step 2: Configure the Autoloader

If you use composer, you can skip this step.

Add it to your `autoload_namespace.php` :

```php
<?php
...
'JPInfinity\\FatcowIconsBundle' => array($vendorDir . '/jp-infinity/fatcow-icons-bundle'),
```

### Step 3: Enable the bundle

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

### Step 4: Install assets

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