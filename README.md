Requirements
========================

* Composer v1.3
* Symfony  v3.2
* npm      v3.10
* bower    v1.8

Installation
========================

Follow [this guide] (https://getcomposer.org/download/) to install Composer. Then you can make it global by typing:

```shell
mv composer.phar /usr/local/bin/composer
```

Get [npm] (https://nodejs.org/en/download/) and [bower] (https://bower.io/#install-bower) 


Install dependencies

```shell
composer install
bower install
```




Configuration
========================

Database
------------------------

edit this file: `app/config/parameters.yml`



List Symfony commmands
========================

```shell
php bin/console list
```

Run a web server
------------------------

```shell
php bin/console server:run
```
