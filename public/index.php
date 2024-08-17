<?php

use ResolverUrlPortal\Infraestructure\Resolver\GetUrlPortalResolver;

require __DIR__ . '/../vendor/autoload.php';

$url = GetUrlPortalResolver::getUrlPortal('AL');

echo $url;
