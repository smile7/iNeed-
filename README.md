Requirements
========================

* Composer v1.3
* Symfony  v3.2
* npm      v3.10
* bower    v1.8

Installation
========================

Get [npm] (https://nodejs.org/en/download/) and [bower] (https://bower.io/#install-bower).


Follow [this guide] (https://getcomposer.org/download/) to install Composer. Then you can make it global by typing:

```shell
mv composer.phar /usr/local/bin/composer
```

Install dependencies

```shell
composer install
bower install
npm install
```

Configuration
========================

Database
------------------------

edit `app/config/parameters.yml`


Useful commmands
========================

* run web server

```shell
npm run server
```

* execute PHP Unit Tests

```shell
npm test
```

* update DB schema

```shell
npm run schema:update
```
