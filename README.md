# SimplySlug 
[![Build Status](https://travis-ci.org/jeslopcru/simply-slug.svg?branch=master)](https://travis-ci.org/jeslopcru/simply-slug)

SimplySlug is a Simple implementation for creating [slug](http://en.wikipedia.org/wiki/Semantic_URL#Slug) based on [keyvanakbary/slugifier](https://github.com/keyvanakbary/slugifier).

*This is only a example of use composer for create a PHP package using "clean code" (PSR and PHP-CS-FIXER)

#Requirements
This package use [Yaml extensions](http://php.net/manual/en/intro.yaml.php)

For install this library:
```
sudo pecl install yaml
```

#Instalation

To install this package, run the command below and you will get the latest version
```
composer require jeslopcru/simply-slug
```

#Usage

```
<?php

$simplySlug =  new \SimplySlug();

echo $simplySlug->drools('JúST å fëw wørds'); // just-a-few-words

echo  $simplySlug->drools('Hello WikiPeDiA StYle', '_'); // hello_wikipedia_style

```
