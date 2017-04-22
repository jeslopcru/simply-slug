# SimplySlug 
[![Build Status](https://travis-ci.org/jeslopcru/simply-slug.svg?branch=master)](https://travis-ci.org/jeslopcru/simply-slug)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/jeslopcru/simply-slug/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/jeslopcru/simply-slug/?branch=master)

SimplySlug is a Simple implementation for creating [slug](http://en.wikipedia.org/wiki/Semantic_URL#Slug) based on [keyvanakbary/slugifier](https://github.com/keyvanakbary/slugifier).


# Instalation

To install this package, run the command below and you will get the latest version
```
composer require jeslopcru/simply-slug
```

#Usage

```
<?php

$simplySlug =  new \SimplySlug();

echo $simplySlug->drools('JúST å fëw wørds'); // just-a-few-words

echo $simplySlug->drools('Hello WikiPeDiA StYle', '_'); // hello_wikipedia_style

```