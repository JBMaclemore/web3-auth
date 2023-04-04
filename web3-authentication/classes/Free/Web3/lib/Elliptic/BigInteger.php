<?php


namespace BI;

if (defined("\x53\137\x4d\x41\124\110\137\102\111\x47\x49\x4e\x54\105\x47\105\x52\137\x4d\x4f\104\105")) {
    goto jk;
}
if (extension_loaded("\x67\x6d\x70")) {
    goto RY;
}
if (extension_loaded("\x62\x63\155\141\x74\150")) {
    goto O6;
}
if (defined("\123\x5f\x4d\x41\x54\x48\x5f\x42\x49\107\111\116\x54\105\107\x45\x52\x5f\121\125\x49\x45\124")) {
    goto R8;
}
wp_die("\117\165\162\x20\x57\x65\142\63\40\101\x75\x74\150\x65\x6e\164\151\143\141\x74\x69\x6f\x6e\x20\x70\154\165\x67\151\x6e\x20\x72\x65\x71\x75\151\162\x65\x73\x20\x3c\x61\40\150\x72\145\146\x3d\47\x68\164\x74\160\163\72\x2f\57\x77\167\167\56\x70\150\160\56\x6e\x65\164\x2f\x6d\x61\156\x75\141\x6c\57\145\x6e\57\142\157\157\153\x2e\x67\155\160\x2e\x70\x68\160\47\x20\164\141\162\147\145\164\x3d\47\137\142\x6c\141\x6e\x6b\47\x3e\x20\147\x6d\x70\x20\74\57\141\x3e\x20\x6f\162\x20\74\141\40\150\162\145\146\x3d\x27\150\164\x74\x70\163\72\57\57\x77\x77\167\x2e\x70\x68\160\x2e\x6e\145\x74\x2f\155\x61\x6e\x75\141\x6c\x2f\x65\156\x2f\142\157\x6f\153\x2e\142\143\56\x70\150\x70\x27\40\x74\x61\x72\147\x65\164\75\47\137\142\x6c\141\x6e\153\47\76\40\142\x63\155\141\x74\x68\x20\x3c\x2f\x61\x3e\x20\x50\x48\120\40\145\x78\164\145\156\x73\x69\157\x6e\40\x74\157\40\x62\145\x20\151\x6e\163\x74\141\x6c\x6c\145\144\40\157\156\x20\171\157\165\x72\x20\127\157\x72\144\120\162\145\163\163\40\163\145\162\166\x65\x72\x2e");
R8:
goto aD;
O6:
define("\x53\137\115\x41\x54\110\137\102\x49\x47\111\x4e\124\x45\107\x45\122\x5f\115\117\x44\105", "\142\143\x6d\141\x74\150");
aD:
goto b4;
RY:
define("\123\x5f\115\x41\x54\x48\137\x42\x49\x47\111\116\124\105\x47\105\x52\137\115\x4f\104\105", "\147\155\x70");
b4:
jk:
if (S_MATH_BIGINTEGER_MODE == "\x67\x6d\160") {
    goto DA;
}
if (S_MATH_BIGINTEGER_MODE == "\142\143\155\x61\x74\150") {
    goto vJ;
}
if (defined("\x53\x5f\x4d\x41\124\x48\137\x42\111\x47\x49\116\124\105\x47\105\122\137\x51\125\111\x45\124")) {
    goto wO;
}
throw new \Exception("\125\156\x73\165\160\x70\x6f\x72\x74\x65\x64\40\123\137\x4d\101\x54\x48\137\102\111\107\x49\x4e\124\x45\107\x45\x52\x5f\x4d\117\x44\105\x20" . S_MATH_BIGINTEGER_MODE);
wO:
goto O4;
vJ:
if (extension_loaded("\142\x63\x6d\x61\x74\150")) {
    goto nE;
}
throw new \Exception("\x45\x78\164\x65\x6e\x73\151\157\x6e\40\142\x63\x6d\x61\164\150\40\156\157\x74\40\154\157\141\x64\x65\x64");
nE:
class BigInteger
{
    public static $chars = "\x30\61\62\x33\x34\x35\x36\x37\x38\71\x41\102\103\104\105\x46\x47\x48\111\112\x4b\x4c\x4d\116\x4f\120\121\x52\x53\x54\x55\x56\127\130\x59\x5a\141\142\143\144\x65\x66\147\x68\x69\x6a\153\154\x6d\x6e\157\x70\161\162\163\x74\165\x76";
    public $value;
    public function __construct($V7 = 0, $Re = 10)
    {
        $this->value = $Re === true ? $V7 : BigInteger::getBC($V7, $Re);
    }
    public static function createSafe($V7 = 0, $Re = 10)
    {
        try {
            return new BigInteger($V7, $Re);
        } catch (\Exception $Y3) {
            return false;
        }
    }
    public static function checkBinary($Hg)
    {
        $Or = strlen($Hg);
        $AQ = 0;
        Jw:
        if (!($AQ < $Or)) {
            goto W6;
        }
        $v7 = ord($Hg[$AQ]);
        if (!(($AQ != 0 || $v7 != 45) && ($v7 < 48 || $v7 > 49))) {
            goto Pu;
        }
        return false;
        Pu:
        Y0:
        $AQ++;
        goto Jw;
        W6:
        return true;
    }
    public static function checkDecimal($Hg)
    {
        $Or = strlen($Hg);
        $AQ = 0;
        Hd:
        if (!($AQ < $Or)) {
            goto rr;
        }
        $v7 = ord($Hg[$AQ]);
        if (!(($AQ != 0 || $v7 != 45) && ($v7 < 48 || $v7 > 57))) {
            goto e1;
        }
        return false;
        e1:
        gd:
        $AQ++;
        goto Hd;
        rr:
        return true;
    }
    public static function checkHex($Hg)
    {
        $Or = strlen($Hg);
        $AQ = 0;
        hB:
        if (!($AQ < $Or)) {
            goto vi;
        }
        $v7 = ord($Hg[$AQ]);
        if (!(($AQ != 0 || $v7 != 45) && ($v7 < 48 || $v7 > 57) && ($v7 < 65 || $v7 > 70) && ($v7 < 97 || $v7 > 102))) {
            goto mE;
        }
        return false;
        mE:
        xp:
        $AQ++;
        goto hB;
        vi:
        return true;
    }
    public static function getBC($V7 = 0, $Re = 10)
    {
        if (!$V7 instanceof BigInteger) {
            goto v9;
        }
        return $V7->value;
        v9:
        $qO = gettype($V7);
        if (!($qO == "\x69\x6e\164\145\147\x65\162")) {
            goto rI;
        }
        return strval($V7);
        rI:
        if (!($qO == "\163\x74\162\151\156\147")) {
            goto H2;
        }
        if (!($Re == 2)) {
            goto Na;
        }
        $V7 = str_replace("\40", '', $V7);
        if (BigInteger::checkBinary($V7)) {
            goto Qx;
        }
        throw new \Exception("\111\156\x76\141\154\151\x64\40\x63\150\x61\162\141\x63\164\145\x72\163");
        Qx:
        $YZ = $V7[0] == "\x2d";
        if (!$YZ) {
            goto MV;
        }
        $V7 = substr($V7, 1);
        MV:
        $Or = strlen($V7);
        $b2 = 1;
        $Oq = "\x30";
        $AQ = $Or - 1;
        w2:
        if (!($AQ >= 0)) {
            goto fC;
        }
        $ca = $AQ - 7 < 0 ? substr($V7, 0, $AQ + 1) : substr($V7, $AQ - 7, 8);
        $Oq = bcadd($Oq, bcmul(bindec($ca), $b2, 0), 0);
        $b2 = bcmul($b2, "\x32\x35\x36", 0);
        n2:
        $AQ -= 8;
        goto w2;
        fC:
        return ($YZ ? "\55" : '') . $Oq;
        Na:
        if (!($Re == 10)) {
            goto KU;
        }
        $V7 = str_replace("\40", '', $V7);
        if (BigInteger::checkDecimal($V7)) {
            goto Y8;
        }
        throw new \Exception("\111\156\166\x61\154\x69\144\x20\143\150\x61\x72\x61\143\164\x65\162\x73");
        Y8:
        return $V7;
        KU:
        if (!($Re == 16)) {
            goto iE;
        }
        $V7 = str_replace("\40", '', $V7);
        if (BigInteger::checkHex($V7)) {
            goto NT;
        }
        throw new \Exception("\x49\x6e\166\x61\154\x69\144\40\143\150\141\x72\141\x63\x74\x65\162\163");
        NT:
        $YZ = $V7[0] == "\x2d";
        if (!$YZ) {
            goto HO;
        }
        $V7 = substr($V7, 1);
        HO:
        $Or = strlen($V7);
        $b2 = 1;
        $Oq = "\x30";
        $AQ = $Or - 1;
        zu:
        if (!($AQ >= 0)) {
            goto ZO;
        }
        $ca = $AQ == 0 ? "\x30" . substr($V7, 0, 1) : substr($V7, $AQ - 1, 2);
        $Oq = bcadd($Oq, bcmul(hexdec($ca), $b2, 0), 0);
        $b2 = bcmul($b2, "\62\x35\x36", 0);
        o1:
        $AQ -= 2;
        goto zu;
        ZO:
        return ($YZ ? "\x2d" : '') . $Oq;
        iE:
        if (!($Re == 256)) {
            goto mw;
        }
        $Or = strlen($V7);
        $b2 = 1;
        $Oq = "\60";
        $AQ = $Or - 1;
        PO:
        if (!($AQ >= 0)) {
            goto zI;
        }
        $ca = $AQ - 5 < 0 ? substr($V7, 0, $AQ + 1) : substr($V7, $AQ - 5, 6);
        $Oq = bcadd($Oq, bcmul(base_convert(bin2hex($ca), 16, 10), $b2, 0), 0);
        $b2 = bcmul($b2, "\x32\70\x31\x34\x37\64\x39\67\x36\67\x31\60\x36\65\x36", 0);
        P2:
        $AQ -= 6;
        goto PO;
        zI:
        return $Oq;
        mw:
        throw new \Exception("\x55\156\x73\x75\x70\160\157\x72\164\145\x64\x20\102\151\x67\x49\156\164\145\147\x65\162\40\x62\141\x73\x65");
        H2:
        throw new \Exception("\x55\x6e\x73\x75\160\160\x6f\x72\164\145\x64\x20\x76\x61\154\x75\x65\54\x20\x6f\x6e\x6c\171\x20\x73\x74\162\x69\156\147\x20\141\x6e\144\x20\x69\x6e\164\145\x67\145\162\x20\141\162\145\x20\141\x6c\x6c\157\167\x65\144\54\40\162\x65\143\x65\x69\166\x65\40" . $qO . ($qO == "\x6f\142\152\145\x63\x74" ? "\54\40\143\x6c\x61\x73\x73\x3a\40" . get_class($V7) : ''));
    }
    public function toDec()
    {
        return $this->value;
    }
    public function toHex()
    {
        return bin2hex($this->toBytes());
    }
    public function toBytes()
    {
        $V7 = '';
        $Ci = $this->value;
        if (!($Ci[0] == "\55")) {
            goto kn;
        }
        $Ci = substr($Ci, 1);
        kn:
        b3:
        if (!(bccomp($Ci, "\60", 0) > 0)) {
            goto e8;
        }
        $Kz = bcmod($Ci, "\x32\70\61\x34\67\64\71\x37\x36\x37\x31\60\66\x35\x36");
        $V7 = hex2bin(str_pad(base_convert($Kz, 10, 16), 12, "\x30", STR_PAD_LEFT)) . $V7;
        $Ci = bcdiv($Ci, "\x32\70\61\64\67\x34\71\67\66\67\x31\60\66\x35\x36", 0);
        goto b3;
        e8:
        return ltrim($V7, chr(0));
    }
    public function toBase($Re)
    {
        if (!($Re < 2 || $Re > 62)) {
            goto YB;
        }
        throw new \Exception("\111\x6e\x76\x61\x6c\151\x64\40\142\141\x73\x65");
        YB:
        $V7 = '';
        $Ci = $this->value;
        $Re = BigInteger::getBC($Re);
        if (!($Ci[0] == "\55")) {
            goto WL;
        }
        $Ci = substr($Ci, 1);
        WL:
        iI:
        if (!(bccomp($Ci, "\60", 0) > 0)) {
            goto tC;
        }
        $PR = bcmod($Ci, $Re);
        $V7 = BigInteger::$chars[$PR] . $V7;
        $Ci = bcdiv($Ci, $Re, 0);
        goto iI;
        tC:
        return $V7;
    }
    public function toBits()
    {
        $XC = $this->toBytes();
        $Oq = '';
        $Or = strlen($XC);
        $AQ = 0;
        Ze:
        if (!($AQ < $Or)) {
            goto ls;
        }
        $lf = decbin(ord($XC[$AQ]));
        $Oq .= strlen($lf) != 8 ? str_pad($lf, 8, "\60", STR_PAD_LEFT) : $lf;
        pc:
        $AQ++;
        goto Ze;
        ls:
        $Oq = ltrim($Oq, "\60");
        return strlen($Oq) == 0 ? "\x30" : $Oq;
    }
    public function toString($Re = 10)
    {
        if (!($Re == 2)) {
            goto K7;
        }
        return $this->toBits();
        K7:
        if (!($Re == 10)) {
            goto p1;
        }
        return $this->toDec();
        p1:
        if (!($Re == 16)) {
            goto Sl;
        }
        return $this->toHex();
        Sl:
        if (!($Re == 256)) {
            goto B6;
        }
        return $this->toBytes();
        B6:
        return $this->toBase($Re);
    }
    public function __toString()
    {
        return $this->toString();
    }
    public function toNumber()
    {
        return intval($this->value);
    }
    public function add($c1)
    {
        return new BigInteger(bcadd($this->value, BigInteger::getBC($c1), 0), true);
    }
    public function sub($c1)
    {
        return new BigInteger(bcsub($this->value, BigInteger::getBC($c1), 0), true);
    }
    public function mul($c1)
    {
        return new BigInteger(bcmul($this->value, BigInteger::getBC($c1), 0), true);
    }
    public function div($c1)
    {
        return new BigInteger(bcdiv($this->value, BigInteger::getBC($c1), 0), true);
    }
    public function divR($c1)
    {
        return new BigInteger(bcmod($this->value, BigInteger::getBC($c1)), true);
    }
    public function divQR($c1)
    {
        return array($this->div($c1), $this->divR($c1));
    }
    public function mod($c1)
    {
        $p0 = BigInteger::getBC($c1);
        $AV = bcmod($this->value, $p0);
        if (!($AV[0] == "\55")) {
            goto yz;
        }
        $AV = bcadd($AV, $p0[0] == "\55" ? substr($p0, 1) : $p0, 0);
        yz:
        return new BigInteger($AV, true);
    }
    public function extendedGcd($dn)
    {
        $N9 = $this->value;
        $PR = (new BigInteger($dn))->abs()->value;
        $wT = "\x31";
        $lf = "\x30";
        $v7 = "\60";
        $ki = "\61";
        Uv:
        if (!(bccomp($PR, "\x30", 0) != 0)) {
            goto qy;
        }
        $kC = bcdiv($N9, $PR, 0);
        $Kz = $N9;
        $N9 = $PR;
        $PR = bcsub($Kz, bcmul($PR, $kC, 0), 0);
        $Kz = $wT;
        $wT = $v7;
        $v7 = bcsub($Kz, bcmul($wT, $kC, 0), 0);
        $Kz = $lf;
        $lf = $ki;
        $ki = bcsub($Kz, bcmul($lf, $kC, 0), 0);
        goto Uv;
        qy:
        $this->gcd = new BigInteger($N9, true);
        $this->x = new BigInteger($wT, true);
        $this->y = new BigInteger($lf, true);
    }
    public function gcd($c1)
    {
        $this->extendedGcd($c1);
        return $this->gcd;
    }
    public function modInverse($dn)
    {
        $dn = (new BigInteger($dn))->abs();
        if (!($this->sign() < 0)) {
            goto ex;
        }
        $Kz = $this->abs();
        $Kz = $Kz->modInverse($dn);
        return $dn->sub($Kz);
        ex:
        $this->extendedGcd($dn);
        if ($this->gcd->equals(1)) {
            goto lC;
        }
        return false;
        lC:
        $c1 = $this->x->sign() < 0 ? $this->x->add($dn) : $this->x;
        return $this->sign() < 0 ? $dn->sub($c1) : $c1;
    }
    public function pow($c1)
    {
        return new BigInteger(bcpow($this->value, BigInteger::getBC($c1), 0), true);
    }
    public function powMod($c1, $dn)
    {
        return new BigInteger(bcpowmod($this->value, BigInteger::getBC($c1), BigInteger::getBC($dn), 0), true);
    }
    public function abs()
    {
        return new BigInteger($this->value[0] == "\55" ? substr($this->value, 1) : $this->value, true);
    }
    public function neg()
    {
        return new BigInteger($this->value[0] == "\x2d" ? substr($this->value, 1) : "\55" . $this->value, true);
    }
    public function binaryAnd($c1)
    {
        $qz = $this->toBytes();
        $mg = (new BigInteger($c1))->toBytes();
        $tw = max(strlen($qz), strlen($mg));
        $qz = str_pad($qz, $tw, chr(0), STR_PAD_LEFT);
        $mg = str_pad($mg, $tw, chr(0), STR_PAD_LEFT);
        return new BigInteger($qz & $mg, 256);
    }
    public function binaryOr($c1)
    {
        $qz = $this->toBytes();
        $mg = (new BigInteger($c1))->toBytes();
        $tw = max(strlen($qz), strlen($mg));
        $qz = str_pad($qz, $tw, chr(0), STR_PAD_LEFT);
        $mg = str_pad($mg, $tw, chr(0), STR_PAD_LEFT);
        return new BigInteger($qz | $mg, 256);
    }
    public function binaryXor($c1)
    {
        $qz = $this->toBytes();
        $mg = (new BigInteger($c1))->toBytes();
        $tw = max(strlen($qz), strlen($mg));
        $qz = str_pad($qz, $tw, chr(0), STR_PAD_LEFT);
        $mg = str_pad($mg, $tw, chr(0), STR_PAD_LEFT);
        return new BigInteger($qz ^ $mg, 256);
    }
    public function setbit($eU, $eT = true)
    {
        $yO = $this->toBits();
        $yO[strlen($yO) - $eU - 1] = $eT ? "\x31" : "\60";
        return new BigInteger($yO, 2);
    }
    public function testbit($eU)
    {
        $XC = $this->toBytes();
        $z0 = intval($eU / 8);
        $Or = strlen($XC);
        $lf = $z0 >= $Or ? 0 : ord($XC[$Or - $z0 - 1]);
        $PR = 1 << $eU % 8;
        return ($lf & $PR) === $PR;
    }
    public function scan0($cq)
    {
        $yO = $this->toBits();
        $Or = strlen($yO);
        if (!($cq < 0 || $cq >= $Or)) {
            goto bG;
        }
        return -1;
        bG:
        $pB = strrpos($yO, "\60", -1 - $cq);
        return $pB === false ? -1 : $Or - $pB - 1;
    }
    public function scan1($cq)
    {
        $yO = $this->toBits();
        $Or = strlen($yO);
        if (!($cq < 0 || $cq >= $Or)) {
            goto wR;
        }
        return -1;
        wR:
        $pB = strrpos($yO, "\61", -1 - $cq);
        return $pB === false ? -1 : $Or - $pB - 1;
    }
    public function cmp($c1)
    {
        return bccomp($this->value, BigInteger::getBC($c1));
    }
    public function equals($c1)
    {
        return $this->value === BigInteger::getBC($c1);
    }
    public function sign()
    {
        return $this->value[0] === "\55" ? -1 : ($this->value === "\x30" ? 0 : 1);
    }
}
O4:
goto eS;
DA:
if (extension_loaded("\147\155\x70")) {
    goto jH;
}
throw new \Exception("\x45\x78\164\145\156\163\x69\x6f\x6e\x20\x67\x6d\160\40\156\x6f\x74\x20\x6c\x6f\141\x64\x65\144");
jH:
if (class_exists("\102\111\134\x42\x69\x67\x49\x6e\164\145\147\145\162")) {
    goto h_;
}
class BigInteger
{
    public $value;
    public $gcd, $x, $y;
    public function __construct($V7 = 0, $Re = 10)
    {
        $this->value = $Re === true ? $V7 : BigInteger::getGmp($V7, $Re);
    }
    public static function createSafe($V7 = 0, $Re = 10)
    {
        try {
            return new BigInteger($V7, $Re);
        } catch (\Exception $Y3) {
            return false;
        }
    }
    public static function isGmp($hY)
    {
        if (!is_resource($hY)) {
            goto SH;
        }
        return get_resource_type($hY) == "\107\x4d\x50\40\x69\156\164\145\x67\x65\162";
        SH:
        if (!(class_exists("\x47\115\120") && $hY instanceof \GMP)) {
            goto M2;
        }
        return true;
        M2:
        return false;
    }
    public static function getGmp($V7 = 0, $Re = 10)
    {
        if (!$V7 instanceof BigInteger) {
            goto GN;
        }
        return $V7->value;
        GN:
        if (!BigInteger::isGmp($V7)) {
            goto cp;
        }
        return $V7;
        cp:
        $qO = gettype($V7);
        if (!($qO == "\x69\x6e\x74\145\147\x65\162")) {
            goto cY;
        }
        $CI = gmp_init($V7);
        if (!($CI === false)) {
            goto ms;
        }
        throw new \Exception("\x43\x61\156\156\157\x74\x20\x69\156\x69\164\151\x61\x6c\151\x7a\145");
        ms:
        return $CI;
        cY:
        if (!($qO == "\163\x74\x72\151\x6e\147")) {
            goto s8;
        }
        if (!($Re != 2 && $Re != 10 && $Re != 16 && $Re != 256)) {
            goto BE;
        }
        throw new \Exception("\x55\156\x73\x75\160\x70\x6f\162\164\x65\x64\40\x42\151\x67\x49\x6e\x74\145\147\x65\162\40\142\x61\x73\145");
        BE:
        if (!($Re == 256)) {
            goto G_;
        }
        $V7 = bin2hex($V7);
        $Re = 16;
        G_:
        $XK = error_reporting();
        error_reporting(0);
        $CI = gmp_init($V7, $Re);
        error_reporting($XK);
        if (!($CI === false)) {
            goto iO;
        }
        throw new \Exception("\x43\x61\156\156\x6f\164\x20\x69\x6e\x69\x74\151\141\154\x69\x7a\145");
        iO:
        return $CI;
        s8:
        throw new \Exception("\x55\156\163\x75\x70\160\x6f\162\164\x65\x64\40\x76\141\154\x75\145\54\x20\x6f\x6e\154\171\x20\163\x74\x72\151\x6e\x67\40\x61\156\x64\40\x69\x6e\x74\145\147\145\162\40\x61\162\145\40\x61\154\x6c\157\167\x65\x64\54\x20\x72\145\x63\145\x69\166\145\x20" . $qO . ($qO == "\x6f\x62\152\145\x63\164" ? "\x2c\x20\x63\154\141\x73\x73\x3a\x20" . get_class($V7) : ''));
    }
    public function toDec()
    {
        return gmp_strval($this->value, 10);
    }
    public function toHex()
    {
        $ng = gmp_strval($this->value, 16);
        return strlen($ng) % 2 == 1 ? "\60" . $ng : $ng;
    }
    public function toBytes()
    {
        return hex2bin($this->toHex());
    }
    public function toBase($Re)
    {
        if (!($Re < 2 || $Re > 62)) {
            goto HV;
        }
        throw new \Exception("\x49\x6e\166\x61\154\151\x64\x20\142\x61\x73\145");
        HV:
        return gmp_strval($this->value, $Re);
    }
    public function toBits()
    {
        return gmp_strval($this->value, 2);
    }
    public function toString($Re = 10)
    {
        if (!($Re == 2)) {
            goto nW;
        }
        return $this->toBits();
        nW:
        if (!($Re == 10)) {
            goto I6;
        }
        return $this->toDec();
        I6:
        if (!($Re == 16)) {
            goto ZQ;
        }
        return $this->toHex();
        ZQ:
        if (!($Re == 256)) {
            goto ts;
        }
        return $this->toBytes();
        ts:
        return $this->toBase($Re);
    }
    public function __toString()
    {
        return $this->toString();
    }
    public function toNumber()
    {
        return gmp_intval($this->value);
    }
    public function add($c1)
    {
        return new BigInteger(gmp_add($this->value, BigInteger::getGmp($c1)), true);
    }
    public function sub($c1)
    {
        return new BigInteger(gmp_sub($this->value, BigInteger::getGmp($c1)), true);
    }
    public function mul($c1)
    {
        return new BigInteger(gmp_mul($this->value, BigInteger::getGmp($c1)), true);
    }
    public function div($c1)
    {
        return new BigInteger(gmp_div_q($this->value, BigInteger::getGmp($c1)), true);
    }
    public function divR($c1)
    {
        return new BigInteger(gmp_div_r($this->value, BigInteger::getGmp($c1)), true);
    }
    public function divQR($c1)
    {
        $Oq = gmp_div_qr($this->value, BigInteger::getGmp($c1));
        return array(new BigInteger($Oq[0], true), new BigInteger($Oq[1], true));
    }
    public function mod($c1)
    {
        return new BigInteger(gmp_mod($this->value, BigInteger::getGmp($c1)), true);
    }
    public function gcd($c1)
    {
        return new BigInteger(gmp_gcd($this->value, BigInteger::getGmp($c1)), true);
    }
    public function modInverse($c1)
    {
        $Oq = gmp_invert($this->value, BigInteger::getGmp($c1));
        return $Oq === false ? false : new BigInteger($Oq, true);
    }
    public function pow($c1)
    {
        return new BigInteger(gmp_pow($this->value, (new BigInteger($c1))->toNumber()), true);
    }
    public function powMod($c1, $dn)
    {
        return new BigInteger(gmp_powm($this->value, BigInteger::getGmp($c1), BigInteger::getGmp($dn)), true);
    }
    public function abs()
    {
        return new BigInteger(gmp_abs($this->value), true);
    }
    public function neg()
    {
        return new BigInteger(gmp_neg($this->value), true);
    }
    public function binaryAnd($c1)
    {
        return new BigInteger(gmp_and($this->value, BigInteger::getGmp($c1)), true);
    }
    public function binaryOr($c1)
    {
        return new BigInteger(gmp_or($this->value, BigInteger::getGmp($c1)), true);
    }
    public function binaryXor($c1)
    {
        return new BigInteger(gmp_xor($this->value, BigInteger::getGmp($c1)), true);
    }
    public function setbit($eU, $eT = true)
    {
        $kQ = gmp_init(gmp_strval($this->value, 16), 16);
        gmp_setbit($kQ, $eU, $eT);
        return new BigInteger($kQ, true);
    }
    public function testbit($eU)
    {
        return gmp_testbit($this->value, $eU);
    }
    public function scan0($cq)
    {
        return gmp_scan0($this->value, $cq);
    }
    public function scan1($cq)
    {
        return gmp_scan1($this->value, $cq);
    }
    public function cmp($c1)
    {
        return gmp_cmp($this->value, BigInteger::getGmp($c1));
    }
    public function equals($c1)
    {
        return $this->cmp($c1) === 0;
    }
    public function sign()
    {
        return gmp_sign($this->value);
    }
}
h_:
eS:
