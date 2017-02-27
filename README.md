# Font Awesome for Yii2

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install, either run

```
$ php composer.phar require "blackho1e/yii2-fontawesome" "*"
```

or add

```
"blackho1e/yii2-fontawesome" : "*"
```

to the ```require``` section of your `composer.json` file.


Assets
------
To include Font Awesome assets, you should register it in view :

```php
\blackho1e\fontawesome\FontAwesomeAsset::register($this);
```

Or as dependency in your app asset bundle :

```php
public $depends = [
    'blackho1e\fontawesome\FontAwesomeAsset',
];
```

Usage
-----

```php
use blackho1e\fontawesome\FontAwesome as FA;

// home icon : <i class="fa fa-home"></i>
echo FA::icon('home');

// 2x home icon : <i class="fa fa-home fa-2x"></i>
echo FA::icon('home 2x');

// fixed width home icon : <i class="fa fa-home fa-fw"></i>
echo FA::icon('home fw');
```
