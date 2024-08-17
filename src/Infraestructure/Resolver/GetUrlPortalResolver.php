<?php
namespace ResolverUrlPortal\Infraestructure\Resolver;

use ResolverUrlPortal\Domain\Enum\UfEnum;

class GetUrlPortalResolver
{
    public static function getUrlPortal(string $uf): string
    {
        return UfEnum::getUrlPortal(UfEnum::AL->value);
    }
}
