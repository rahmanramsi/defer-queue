Defer Queue driver for Laravel
======================
Defer Queue driver for Laravel provides a deferred queue processing by deferring queue process after the response is sent to the browser.


## Installation

You can install this package via composer using this command:

```
composer require rahmanramsi/defer-queue
```

The package will automatically register itself.

### Configuration

Add connection to `config/queue.php`:

> This is the config for the defer connection/driver to work.

```php
'connections' => [
    // ...
    'defer' => [
        'driver' => 'defer',
    ],
    // ...    
],
```

## Usage
Change the default queue driver to `defer` in your `.env` file:

```env
QUEUE_CONNECTION=defer
```

If you do not know how to use the Queue API, please refer to the official Laravel documentation: http://laravel.com/docs/queues

## Contribution

You can contribute to this package by discovering bugs and opening issues. Please, add to which version of package you
create pull request or issue. (e.g. [5.2] How to handling Fatal error on deferred job)

## Credits

- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
