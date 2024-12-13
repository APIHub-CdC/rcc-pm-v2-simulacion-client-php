<?php


namespace RCCPMV2\Simulacion\MX\Client\Model;
use \RCCPMV2\Simulacion\MX\Client\ObjectSerializer;


class CatalogoEstados
{
    /**
     * Possible values of this enum
     */
    const AGS = 'AGS';
    const BCN = 'BCN';
    const BCS = 'BCS';
    const CAM = 'CAM';
    const CHS = 'CHS';
    const CHI = 'CHI';
    const COA = 'COA';
    const COL = 'COL';
    const DF = 'DF';
    const DGO = 'DGO';
    const EM = 'EM';
    const GTO = 'GTO';
    const GRO = 'GRO';
    const HGO = 'HGO';
    const JAL = 'JAL';
    const MICH = 'MICH';
    const MOR = 'MOR';
    const NAY = 'NAY';
    const NL = 'NL';
    const OAX = 'OAX';
    const PUE = 'PUE';
    const QRO = 'QRO';
    const QR = 'QR';
    const SLP = 'SLP';
    const SIN = 'SIN';
    const SON = 'SON';
    const TAB = 'TAB';
    const TAM = 'TAM';
    const TLAX = 'TLAX';
    const VER = 'VER';
    const YUC = 'YUC';
    const ZAC = 'ZAC';
    
    public static function getAllowableEnumValues()
    {
        return [
            self::AGS,
            self::BCN,
            self::BCS,
            self::CAM,
            self::CHS,
            self::CHI,
            self::COA,
            self::COL,
            self::DF,
            self::DGO,
            self::EM,
            self::GTO,
            self::GRO,
            self::HGO,
            self::JAL,
            self::MICH,
            self::MOR,
            self::NAY,
            self::NL,
            self::OAX,
            self::PUE,
            self::QRO,
            self::QR,
            self::SLP,
            self::SIN,
            self::SON,
            self::TAB,
            self::TAM,
            self::TLAX,
            self::VER,
            self::YUC,
            self::ZAC
        ];
    }
}
