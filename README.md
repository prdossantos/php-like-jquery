[![Build Status](https://travis-ci.org/prdossantos/php-like-jquery.svg?branch=master)](https://travis-ci.org/prdossantos/php-like-jquery)
# PHP Like JQuery
Manipule o HTML de forma simples, como o JQuery

## Instalação
> Testes
```sh
  composer install
```
## Exemplos
Instanciando a classe
```php
  use PHPLJ\PLJ;
```
Todas as chamadas devem conter um html de entrada. Ex.:
```php
  $html = ' <div id="content">
              <p id="test" class="my-class">
                Lorem Ipsium
              </p>
            </div>';
```
attr()
```php
  //Utilizamos o html contido na variável $html acima.
  print PLJ::in($html)->find('#test')->attr('class');
  #output
  //Classe retornada
  my-class

  //Podemos setar uma classe passando o valor dela no segundo parâmetro
  print PLJ::in($html)->find('#test')->attr('class','black');
  #output
  //Classe reescrita
  <div id="content">
    <p id="test" class="black">  
      Lorem Ipsium
    </p>
  </div>
```
css()
```php
  print PLJ::in($html)->find('#test')->css(['color'=>'white'])->render();
  #output
  //Novo attr style adicionado no id=test
  <div id="content">
    <p id="test" class="my-class" style="color:white">
      Lorem Ipsium
    </p>
  </div>
```
addClass()
```php
  print PLJ::in($html)->find('#test')->addClass('white')->render();
  #output
  // Nova classe adicionada no id=test
  <div id="content">
    <p id="test" class="my-class white">  
      Lorem Ipsium
    </p>
  </div>
```
removeClass()
```php
  print PLJ::in($html)->find('#test')->removeClass('my-class')->render();
  #output
  // Classe "my-class" removida no id=test
  <div id="content">
    <p id="test" class="white">  
      Lorem Ipsium
    </p>
  </div>
```
hasClass()
```php
  $items = PLJ::in($html)->hasClass('white');
  #output
  // Retorna uma instancia com os itens que contém a classe "white"
  print $items->html();
  #output
  Lorem Ipsium
```
html()
```php
  print PLJ::in($html)->find('#test')->hasClass('white')->html();
  #output
  // Retorna o html contido na tag com a classe "white"  
  Lorem Ipsium
```
append()
```php
  print PLJ::in($html)->find('#test')->append('<em>asd</em>')->save();
  #output
  // Adiciona um conteúdo no final.
  <div id="content">
    <p id="test" class="my-class white">  
      Lorem Ipsium
      <em>asd</em>
    </p>
  </div>
```
prepend()
```php
  print PLJ::in($html)->find('#content')->prepend('<em>asd</em>')->save();
  #output
  // Adiciona um conteúdo no inicio.
  <div id="content">
    <em>asd</em>
    <p id="test" class="my-class white">  
      Lorem Ipsium
    </p>
  </div>
```
## Testes
```sh
  phpunit
```
