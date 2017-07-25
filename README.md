# crud-generator-template

[![Latest Stable Version](https://poser.pugx.org/chewei05/crud-generator-template/v/stable)](https://packagist.org/packages/chewei05/crud-generator-template)
[![Total Downloads](https://poser.pugx.org/chewei05/crud-generator-template/downloads)](https://packagist.org/packages/chewei05/crud-generator-template)
[![Latest Unstable Version](https://poser.pugx.org/chewei05/crud-generator-template/v/unstable)](https://packagist.org/packages/chewei05/crud-generator-template)
[![License](https://poser.pugx.org/chewei05/crud-generator-template/license)](https://packagist.org/packages/chewei05/crud-generator-template)

    Traditional Chinese (zh-TW) Language for Laravel-AdminLTE with Laravel 5
    Laravel-AdminLTE 在 Laravel 5 的正體中文(繁體中文)語系檔.

## Requirements
    appzcoder/crud-generator: ^v2.0.0

## Installation
Open the root directory of your Laravel project in terminal(CLI), and follow the following steps.

1. Install [**appzcoder/crud-generator**](https://github.com/appzcoder/crud-generator) first.
    ```
    composer require jeroennoten/laravel-adminlte
    ```
2. Install this package **crud-generator-template**
    ```
    composer require chewei05/crud-generator-template
    ```
## Copy Language Files

### Via Yourself
* Files of templates are in "vendor/chewei05/crud-generator-template/src/crud-generator" directory
* Copy the folder of templates in the *resources/crud-generator* folder of your Laravel 5 project.

### Via Laravel Service Provider

1. Add service provider to **config/app.php**.
    ```php
    'providers' => [
        ...
        CheweiHu\CRUDGeneratorTemplate\CRUDGeneratorTemplateServiceProvider::class,
    ],
    ```
2. Run *composer dump-autoload* if composer went wrong.
    ```
    composer dump-autoload
    ```
3. Publish vendor files of this package.
    ```
    php artisan vendor:publish --provider="CheweiHu\CRUDGeneratorTemplate\CRUDGeneratorTemplateServiceProvider"
    ```
4. Done.
