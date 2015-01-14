Yii 2 Asset bundle with Imperavi WYSIWYG redactor
===============================
[![License](https://poser.pugx.org/rmrevin/yii2-imperavi-bundle/license.svg)](https://packagist.org/packages/rmrevin/yii2-imperavi-bundle)
[![Latest Stable Version](https://poser.pugx.org/rmrevin/yii2-imperavi-bundle/v/stable.svg)](https://packagist.org/packages/rmrevin/yii2-imperavi-bundle)
[![Latest Unstable Version](https://poser.pugx.org/rmrevin/yii2-imperavi-bundle/v/unstable.svg)](https://packagist.org/packages/rmrevin/yii2-imperavi-bundle)
[![Total Downloads](https://poser.pugx.org/rmrevin/yii2-imperavi-bundle/downloads.svg)](https://packagist.org/packages/rmrevin/yii2-imperavi-bundle)

Installation
------------
Add in `composer.json`:
```
{
    "require": {
        "rmrevin/yii2-imperavi-bundle": "1.0.4"
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