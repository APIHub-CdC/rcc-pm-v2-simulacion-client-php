<?php

namespace RCCPMV2\Simulacion\MX\Client\Model;
use \RCCPMV2\Simulacion\MX\Client\ObjectSerializer;

class CatalogoPaisNacionalidad
{
    /**
     * Possible values of this enum
     */
    const MX = 'MX';
    const ZA = 'ZA';
    const AN = 'AN';
    const DW = 'DW';
    const AD = 'AD';
    const AO = 'AO';
    const AI = 'AI';
    const AG = 'AG';
    const NN = 'NN';
    const SA = 'SA';
    const DZ = 'DZ';
    const AT = 'AT';
    const AW = 'AW';
    const _AS = 'AS';
    const AU = 'AU';
    const DF = 'DF';
    const AX = 'AX';
    const BS = 'BS';
    const BH = 'BH';
    const BD = 'BD';
    const BB = 'BB';
    const BE = 'BE';
    const BZ = 'BZ';
    const BJ = 'BJ';
    const BU = 'BU';
    const BK = 'BK';
    const BO = 'BO';
    const BX = 'BX';
    const BW = 'BW';
    const BR = 'BR';
    const BN = 'BN';
    const BG = 'BG';
    const BF = 'BF';
    const BI = 'BI';
    const BM = 'BM';
    const CV = 'CV';
    const CM = 'CM';
    const CN = 'CN';
    const CU = 'CU';
    const CD = 'CD';
    const CL = 'CL';
    const CP = 'CP';
    const CY = 'CY';
    const VC = 'VC';
    const CB = 'CB';
    const CJ = 'CJ';
    const CG = 'CG';
    const CC = 'CC';
    const KX = 'KX';
    const KR = 'KR';
    const IC = 'IC';
    const HX = 'HX';
    const HR = 'HR';
    const DK = 'DK';
    const DJ = 'DJ';
    const DM = 'DM';
    const EC = 'EC';
    const EG = 'EG';
    const SV = 'SV';
    const UM = 'UM';
    const ES = 'ES';
    const US = 'US';
    const XN = 'XN';
    const SU = 'SU';
    const ET = 'ET';
    const FJ = 'FJ';
    const PH = 'PH';
    const FI = 'FI';
    const FR = 'FR';
    const GB = 'GB';
    const WT = 'WT';
    const GM = 'GM';
    const GH = 'GH';
    const GI = 'GI';
    const GD = 'GD';
    const GR = 'GR';
    const GE = 'GE';
    const GP = 'GP';
    const GT = 'GT';
    const GY = 'GY';
    const GF = 'GF';
    const GN = 'GN';
    const GW = 'GW';
    const GQ = 'GQ';
    const HA = 'HA';
    const NL = 'NL';
    const HN = 'HN';
    const HK = 'HK';
    const HU = 'HU';
    const IB = 'IB';
    const _IF = 'IF';
    const IR = 'IR';
    const IQ = 'IQ';
    const IE = 'IE';
    const IS = 'IS';
    const CI = 'CI';
    const LE = 'LE';
    const FA = 'FA';
    const FE = 'FE';
    const PS = 'PS';
    const RE = 'RE';
    const ST = 'ST';
    const SI = 'SI';
    const VG = 'VG';
    const IG = 'IG';
    const IT = 'IT';
    const JM = 'JM';
    const JP = 'JP';
    const JO = 'JO';
    const KA = 'KA';
    const OA = 'OA';
    const KE = 'KE';
    const KI = 'KI';
    const KW = 'KW';
    const LO = 'LO';
    const LS = 'LS';
    const LX = 'LX';
    const LB = 'LB';
    const LR = 'LR';
    const LV = 'LV';
    const CH = 'CH';
    const LT = 'LT';
    const LU = 'LU';
    const MJ = 'MJ';
    const MH = 'MH';
    const MG = 'MG';
    const MD = 'MD';
    const MY = 'MY';
    const MW = 'MW';
    const MV = 'MV';
    const ML = 'ML';
    const MT = 'MT';
    const RC = 'RC';
    const MQ = 'MQ';
    const MU = 'MU';
    const MR = 'MR';
    const AF = 'AF';
    const MC = 'MC';
    const MM = 'MM';
    const MK = 'MK';
    const MZ = 'MZ';
    const NA = 'NA';
    const NP = 'NP';
    const NI = 'NI';
    const NR = 'NR';
    const NO = 'NO';
    const NW = 'NW';
    const NZ = 'NZ';
    const OM = 'OM';
    const PK = 'PK';
    const PM = 'PM';
    const PG = 'PG';
    const PY = 'PY';
    const PU = 'PU';
    const PL = 'PL';
    const FP = 'FP';
    const PT = 'PT';
    const UK = 'UK';
    const CF = 'CF';
    const CS = 'CS';
    const GX = 'GX';
    const _DO = 'DO';
    const RO = 'RO';
    const RU = 'RU';
    const RW = 'RW';
    const WS = 'WS';
    const KN = 'KN';
    const SS = 'SS';
    const SP = 'SP';
    const SF = 'SF';
    const SH = 'SH';
    const LC = 'LC';
    const MP = 'MP';
    const SN = 'SN';
    const SX = 'SX';
    const SY = 'SY';
    const SO = 'SO';
    const LK = 'LK';
    const SB = 'SB';
    const SE = 'SE';
    const SW = 'SW';
    const SR = 'SR';
    const SZ = 'SZ';
    const TH = 'TH';
    const TW = 'TW';
    const TZ = 'TZ';
    const EM = 'EM';
    const TG = 'TG';
    const TA = 'TA';
    const TT = 'TT';
    const TD = 'TD';
    const TU = 'TU';
    const TC = 'TC';
    const TR = 'TR';
    const TV = 'TV';
    const UG = 'UG';
    const UA = 'UA';
    const UY = 'UY';
    const VU = 'VU';
    const VE = 'VE';
    const VN = 'VN';
    const YS = 'YS';
    const YE = 'YE';
    const ZR = 'ZR';
    const ZM = 'ZM';
    const ZW = 'ZW';
    const ND = 'ND';

    public static function getAllowableEnumValues()
    {
        return [
            self::MX,
            self::ZA,
            self::AN,
            self::DW,
            self::AD,
            self::AO,
            self::AI,
            self::AG,
            self::NN,
            self::SA,
            self::DZ,
            self::AT,
            self::AW,
            self::_AS,
            self::AU,
            self::DF,
            self::AX,
            self::BS,
            self::BH,
            self::BD,
            self::BB,
            self::BE,
            self::BZ,
            self::BJ,
            self::BU,
            self::BK,
            self::BO,
            self::BX,
            self::BW,
            self::BR,
            self::BN,
            self::BG,
            self::BF,
            self::BI,
            self::BM,
            self::CV,
            self::CM,
            self::CN,
            self::CU,
            self::CD,
            self::CL,
            self::CP,
            self::CY,
            self::VC,
            self::CB,
            self::CJ,
            self::CG,
            self::CC,
            self::KX,
            self::KR,
            self::IC,
            self::HX,
            self::HR,
            self::DK,
            self::DJ,
            self::DM,
            self::EC,
            self::EG,
            self::SV,
            self::UM,
            self::ES,
            self::US,
            self::XN,
            self::SU,
            self::ET,
            self::FJ,
            self::PH,
            self::FI,
            self::FR,
            self::GB,
            self::WT,
            self::GM,
            self::GH,
            self::GI,
            self::GD,
            self::GR,
            self::GE,
            self::GP,
            self::GT,
            self::GY,
            self::GF,
            self::GN,
            self::GW,
            self::GQ,
            self::HA,
            self::NL,
            self::HN,
            self::HK,
            self::HU,
            self::IB,
            self::_IF,
            self::IR,
            self::IQ,
            self::IE,
            self::IS,
            self::CI,
            self::LE,
            self::FA,
            self::FE,
            self::PS,
            self::RE,
            self::ST,
            self::SI,
            self::VG,
            self::IG,
            self::IT,
            self::JM,
            self::JP,
            self::JO,
            self::KA,
            self::OA,
            self::KE,
            self::KI,
            self::KW,
            self::LO,
            self::LS,
            self::LX,
            self::LB,
            self::LR,
            self::LV,
            self::CH,
            self::LT,
            self::LU,
            self::MJ,
            self::MH,
            self::MG,
            self::MD,
            self::MY,
            self::MW,
            self::MV,
            self::ML,
            self::MT,
            self::RC,
            self::MQ,
            self::MU,
            self::MR,
            self::AF,
            self::MC,
            self::MM,
            self::MK,
            self::MZ,
            self::NA,
            self::NP,
            self::NI,
            self::NR,
            self::NO,
            self::NW,
            self::NZ,
            self::OM,
            self::PK,
            self::PM,
            self::PG,
            self::PY,
            self::PU,
            self::PL,
            self::FP,
            self::PT,
            self::UK,
            self::CF,
            self::CS,
            self::GX,
            self::_DO,
            self::RO,
            self::RU,
            self::RW,
            self::WS,
            self::KN,
            self::SS,
            self::SP,
            self::SF,
            self::SH,
            self::LC,
            self::MP,
            self::SN,
            self::SX,
            self::SY,
            self::SO,
            self::LK,
            self::SB,
            self::SE,
            self::SW,
            self::SR,
            self::SZ,
            self::TH,
            self::TW,
            self::TZ,
            self::EM,
            self::TG,
            self::TA,
            self::TT,
            self::TD,
            self::TU,
            self::TC,
            self::TR,
            self::TV,
            self::UG,
            self::UA,
            self::UY,
            self::VU,
            self::VE,
            self::VN,
            self::YS,
            self::YE,
            self::ZR,
            self::ZM,
            self::ZW,
            self::ND
        ];
    }
}
