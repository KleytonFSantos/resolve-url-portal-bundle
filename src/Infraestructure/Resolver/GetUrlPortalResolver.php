<?php


class GetUrlPortalResolver
{
    public function __invoke(string $uf): string
    {
        return UfEnum::getUrlPortal(UfEnum::AL->value);
    }
}
