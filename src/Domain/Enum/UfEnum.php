<?php
namespace ResolverUrlPortal\Domain\Enum;

enum UfEnum: string
{
    case AL = 'AL';
    case PB = 'PB';
    case PR = 'PR';
    case RN = 'RN';
    case MA = 'MA';
    case RO = 'RO';
    case TO = 'TO';
    case PI = 'PI';
    case GO = 'GO';
    case SE = 'SE';
    case ES = 'ES';

    case PORTAL_PB = 'redesim.pb.gov.br';
    case PORTAL_AL = 'facilita.al.gov.br';
    case PORTAL_PR = 'empresafacil.pr.gov.br';
    case PORTAL_RN = 'redesim.rn.gov.br';
    case PORTAL_MA = 'empresafacil.ma.gov.br';
    case PORTAL_RO = 'empresafacil.ro.gov.br';
    case PORTAL_TO = 'simplifica.to.gov.br';
    case PORTAL_PI = 'piauidigital.pi.gov.br';
    case PORTAL_GO = 'portaldoempreendedorgoiano.go.gov.br';
    case PORTAL_SE = 'agiliza.se.gov.br';
    case PORTAL_ES = 'simplifica.es.gov.br';


    public static function getUfLiberadas(): array
    {
        return [self::AL->value];
    }

    public static function getUrlPortal(string $uf): string
    {
        $portais = [
            self::PB->value => self::PORTAL_PB->value,
            self::AL->value => self::PORTAL_AL->value,
            self::PR->value => self::PORTAL_PR->value,
            self::RN->value => self::PORTAL_RN->value,
            self::MA->value => self::PORTAL_MA->value,
            self::RO->value => self::PORTAL_RO->value,
            self::TO->value => self::PORTAL_TO->value,
            self::PI->value => self::PORTAL_PI->value,
            self::GO->value => self::PORTAL_GO->value,
            self::SE->value => self::PORTAL_SE->value,
            self::ES->value => self::PORTAL_ES->value
        ];

        return $portais[$uf];
    }
}
