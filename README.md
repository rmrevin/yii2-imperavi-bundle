Yii 2 Asset bundle with Imperavi WYSIWYG redactor
===============================
[![License](https://poser.pugx.org/rmrevin/yii2-imperavi/license.svg)](https://packagist.org/packages/rmrevin/yii2-imperavi)
[![Latest Stable Version](https://poser.pugx.org/rmrevin/yii2-imperavi/v/stable.svg)](https://packagist.org/packages/rmrevin/yii2-imperavi)
[![Latest Unstable Version](https://poser.pugx.org/rmrevin/yii2-imperavi/v/unstable.svg)](https://packagist.org/packages/rmrevin/yii2-imperavi)
[![Total Downloads](https://poser.pugx.org/rmrevin/yii2-imperavi/downloads.svg)](https://packagist.org/packages/rmrevin/yii2-imperavi)

Installation
------------
Add in `composer.json`:
```
{
    "require": {
        "rmrevin/yii2-imperavi": "1.0.3"
    }
}
```

Usage
-----
In view
```php
<?
// ...

rmrevin\yii\imperavi\AssetBundle::register($this);

```

or as dependency in your asset bundle
```php
<?
// ...

class AppAsset extends AssetBundle
{
	// ...

	public $depends = [
		// ...
		'\rmrevin\yii\imperavi\AssetBundle'
	];
}

```