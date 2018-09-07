Demo for current time
=======================

Install (Laravel)
-----------------
Add in composer.json,
```
"repositories": {
        "repo-name": {
            "type": "vcs",
            "url": "https://github.com/poojajadav3698/current-datetime"
        }
    },
    "require": {
        ...
        "obpdemo/datetime": "dev-master"
    },
```

Add Service Provider to `config/app.php` in `providers` section
```php
obpdemo\datetime\DatetimeServiceProvider::class,
```

Update your composer :
```
composer update
```
