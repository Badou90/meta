Laravel meta-tags injector

## Installation

1. Require this package in your composer.json and run composer update:

		"badou90/meta": "dev-development"

2. After composer update, add service providers to the `config/app.php`

        'Badou\Meta\MetaTagsServiceProvider',

3. Add this to the facades in `config/app.php`:

       'Admin'         => 'SleepingOwl\Admin\Admin',
       'AdminAuth'     => 'SleepingOwl\AdminAuth\Facades\AdminAuth',
       'Column'        => 'SleepingOwl\Admin\Columns\Column',
       'ColumnFilter'  => 'SleepingOwl\Admin\ColumnFilters\ColumnFilter',
       'Filter'        => 'SleepingOwl\Admin\Filter\Filter',
       'AdminDisplay'  => 'SleepingOwl\Admin\Display\AdminDisplay',
       'AdminForm'     => 'SleepingOwl\Admin\Form\AdminForm',
       'AdminTemplate' => 'SleepingOwl\Admin\Templates\Facade\AdminTemplate',
       'FormItem'      => 'SleepingOwl\Admin\FormItems\FormItem',

4. Run this command in terminal (if you want to know what exactly this command makes, see [install command documentation](http://sleeping-owl.github.io/en/Commands/Install.html)):

       $ php artisan admin:install

## Documentation

Documentation can be found at [sleeping owl documentation](http://sleeping-owl.github.io/v3).
