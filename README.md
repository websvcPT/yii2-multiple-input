# NOTICE

Forked from unclead/yii2-multiple-input (which is an excellent package!) in order to allow changes to work with `yii\bootstrap4\Widget` instead of `yii\bootstrap\Widget` as the original package does not work without the latest.

# Yii2 Multiple input widget.
Yii2 widget for handle multiple inputs for an attribute of model and tabular input for batch of models.

[![Latest Stable Version](https://poser.pugx.org/websvc/yii2-multiple-input/v/stable)](https://packagist.org/packages/websvc/yii2-multiple-input)
[![Total Downloads](https://poser.pugx.org/websvc/yii2-multiple-input/downloads)](https://packagist.org/packages/websvc/yii2-multiple-input)
[![Daily Downloads](https://poser.pugx.org/websvc/yii2-multiple-input/d/daily)](https://packagist.org/packages/websvc/yii2-multiple-input)
[![Latest Unstable Version](https://poser.pugx.org/websvc/yii2-multiple-input/v/unstable)](https://packagist.org/packages/websvc/yii2-multiple-input)
[![License](https://poser.pugx.org/websvc/yii2-multiple-input/license)](https://packagist.org/packages/websvc/yii2-multiple-input)


## Installation
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require  websvc/yii2-multiple-input "~2.0"
```

or add

```
"websvc/yii2-multiple-input": "~2.0"
```

to the require section of your `composer.json` file.

## Basic usage

![Single column example](./resources/images/single-column.gif?raw=true)

For example you want to have an ability of entering several emails of user on profile page.
In this case you can use yii2-multiple-input widget like in the following code

```php
use websvc\multipleinput\MultipleInput;

...

<?php
    echo $form->field($model, 'emails')->widget(MultipleInput::className(), [
        'max'               => 6,
        'min'               => 2, // should be at least 2 rows
        'allowEmptyList'    => false,
        'enableGuessTitle'  => true,
        'addButtonPosition' => MultipleInput::POS_HEADER, // show add button in the header
    ])
    ->label(false);
?>
```

## Documentation

You can find a full version of documentation [here](https://unclead.github.io/yii2-multiple-input/)

## License

**yii2-multiple-input** is released under the BSD 3-Clause License. See the bundled [LICENSE.md](./LICENSE.md) for details.
