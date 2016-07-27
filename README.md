[![Build Status](https://travis-ci.org/prdossantos/php-like-jquery.svg?branch=master)](https://travis-ci.org/prdossantos/php-like-jquery)
# PHP Like JQuery
Manipule o HTML de forma simples, como o JQuery

## Instalação
> Testes
```sh
  composer install
```

## Testes
```sh
  phpunit
```

## Exemplos
Instanciando a classe
```php
  use PHPLJ\PLJ;
```
attr()
```php
  print PLJ::in(<div id="content"><p id="test" class="my-class">Lorem Ipsium</p></div>)->find('#test')->attr('class');
  #output
  my-class
```
css()
```php
  print PLJ::in(<div id="content"><p id="test" class="my-class">Lorem Ipsium</p></div>)->find('#test')->css(['color'=>'white'])->render();
  #output
  <div id="content"><p id="test" class="my-class" style="color:white">Lorem Ipsium</p></div>
```
addClass()
```php
  print PLJ::in(<div id="content"><p id="test" class="my-class">Lorem Ipsium</p></div>)->find('#test')->addClass('white')->render();
  #output
  <div id="content"><p id="test" class="my-class white">Lorem Ipsium</p></div>
```