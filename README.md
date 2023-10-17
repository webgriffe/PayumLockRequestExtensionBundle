# Payum Lock Request Extension Bundle

## Symfony bundle for Payum Lock Request extension library

Installation
============

Make sure Composer is installed globally, as explained in the
[installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Applications that use Symfony Flex
----------------------------------

Open a command console, enter your project directory and execute:

```console
$ composer require webgriffe/payum-lock-request-extension-bundle
```

Applications that don't use Symfony Flex
----------------------------------------

### Step 1: Download the Bundle

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require webgriffe/payum-lock-request-extension-bundle
```

### Step 2: Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles
in the `config/bundles.php` file of your project:

```php
// config/bundles.php

return [
    // ...
    Webgriffe\PayumLockRequestExtensionBundle\WebgriffePayumLockRequestExtensionBundle::class => ['all' => true],
];
```

Notice
------

This Payum extension should lock before every other Payum extension but release the lock at the end of every other Payum extension.
Unfortunately, this is not possible with Payum because extension are called in the same order in both onPreExecute and onPostExecute methods.
We choose to not prepend this extension in the list because it is more important that the lock is released as last operation.
