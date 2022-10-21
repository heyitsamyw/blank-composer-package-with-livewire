# Blank Composer Package With Livewire

A blank composer package set up with livewire components.

## To install for development:
- Clone the repo into the root of your Laravel installation
- In the Laravel composer.json 

```
    "require": {
        "php": "^8.0.2",
        "guzzlehttp/guzzle": "^7.2",
        "laravel/framework": "^9.19",
        "laravel/sanctum": "^3.0",
        "laravel/tinker": "^2.7",
        "blankpackage/blank": "@dev"
    },
```
 
```
 "repositories": [
        {
            "type": "path",
            "url": "./blankpackage"
        }
    ]
```

Make sure to add the livewire styles and scripts requirements to the base layout template in your Laravel installation.

@livewireStyles
@livewirecripts


## For more information and help on creating composer packages for Laravel

- https://laravelpackage.com
- https://medium.com/@francismacugay/build-your-own-laravel-package-in-10-minutes-using-composer-867e8ef875dd
- https://laravel.com/docs/9.x/packages
- https://laravel-news.com/building-your-own-laravel-packages
