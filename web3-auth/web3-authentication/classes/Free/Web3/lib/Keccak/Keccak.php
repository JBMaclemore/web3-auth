<?php


namespace kornrunner;

use Exception;
use function mb_strlen;
use function mb_substr;
final class Keccak
{
    private const KECCAK_ROUNDS = 24;
    private const LFSR = 0x1;
    private const ENCODING = "\x38\x62\151\164";
    private static $keccakf_rotc = [1, 3, 6, 10, 15, 21, 28, 36, 45, 55, 2, 14, 27, 41, 56, 8, 25, 43, 62, 18, 39, 61, 20, 44];
    private static $keccakf_piln = [10, 7, 11, 17, 18, 3, 5, 16, 8, 21, 24, 4, 15, 23, 19, 13, 12, 2, 20, 14, 22, 9, 6, 1];
    private static $x64 = PHP_INT_SIZE === 8;
    private static function keccakf64(&$Zg, $EZ) : void
    {
        $ge = [[0x0, 0x1], [0x0, 0x8082], [0x80000000, 0x808a], [0x80000000, 0x80008000], [0x0, 0x808b], [0x0, 0x80000001], [0x80000000, 0x80008081], [0x80000000, 0x8009], [0x0, 0x8a], [0x0, 0x88], [0x0, 0x80008009], [0x0, 0x8000000a], [0x0, 0x8000808b], [0x80000000, 0x8b], [0x80000000, 0x8089], [0x80000000, 0x8003], [0x80000000, 0x8002], [0x80000000, 0x80], [0x0, 0x800a], [0x80000000, 0x8000000a], [0x80000000, 0x80008081], [0x80000000, 0x8080], [0x0, 0x80000001], [0x80000000, 0x80008008]];
        $sA = [];
        $T7 = 0;
        Ky:
        if (!($T7 < $EZ)) {
            goto df;
        }
        $AQ = 0;
        D5:
        if (!($AQ < 5)) {
            goto tZ;
        }
        $sA[$AQ] = [$Zg[$AQ][0] ^ $Zg[$AQ + 5][0] ^ $Zg[$AQ + 10][0] ^ $Zg[$AQ + 15][0] ^ $Zg[$AQ + 20][0], $Zg[$AQ][1] ^ $Zg[$AQ + 5][1] ^ $Zg[$AQ + 10][1] ^ $Zg[$AQ + 15][1] ^ $Zg[$AQ + 20][1]];
        hV:
        $AQ++;
        goto D5;
        tZ:
        $AQ = 0;
        VV:
        if (!($AQ < 5)) {
            goto R6;
        }
        $tA = [$sA[($AQ + 4) % 5][0] ^ ($sA[($AQ + 1) % 5][0] << 1 | $sA[($AQ + 1) % 5][1] >> 31) & 0xffffffff, $sA[($AQ + 4) % 5][1] ^ ($sA[($AQ + 1) % 5][1] << 1 | $sA[($AQ + 1) % 5][0] >> 31) & 0xffffffff];
        $ID = 0;
        Qv:
        if (!($ID < 25)) {
            goto UL;
        }
        $Zg[$ID + $AQ] = [$Zg[$ID + $AQ][0] ^ $tA[0], $Zg[$ID + $AQ][1] ^ $tA[1]];
        UH:
        $ID += 5;
        goto Qv;
        UL:
        Mj:
        $AQ++;
        goto VV;
        R6:
        $tA = $Zg[1];
        $AQ = 0;
        Xf:
        if (!($AQ < 24)) {
            goto A_;
        }
        $ID = self::$keccakf_piln[$AQ];
        $sA[0] = $Zg[$ID];
        $dn = self::$keccakf_rotc[$AQ];
        $rz = $tA[0];
        $Dw = $tA[1];
        if (!($dn >= 32)) {
            goto rZ;
        }
        $dn -= 32;
        $rz = $tA[1];
        $Dw = $tA[0];
        rZ:
        $Zg[$ID] = [($rz << $dn | $Dw >> 32 - $dn) & 0xffffffff, ($Dw << $dn | $rz >> 32 - $dn) & 0xffffffff];
        $tA = $sA[0];
        En:
        $AQ++;
        goto Xf;
        A_:
        $ID = 0;
        Bk:
        if (!($ID < 25)) {
            goto ys;
        }
        $AQ = 0;
        n5:
        if (!($AQ < 5)) {
            goto T6;
        }
        $sA[$AQ] = $Zg[$ID + $AQ];
        u9:
        $AQ++;
        goto n5;
        T6:
        $AQ = 0;
        kM:
        if (!($AQ < 5)) {
            goto RC;
        }
        $Zg[$ID + $AQ] = [$Zg[$ID + $AQ][0] ^ ~$sA[($AQ + 1) % 5][0] & $sA[($AQ + 2) % 5][0], $Zg[$ID + $AQ][1] ^ ~$sA[($AQ + 1) % 5][1] & $sA[($AQ + 2) % 5][1]];
        DR:
        $AQ++;
        goto kM;
        RC:
        fA:
        $ID += 5;
        goto Bk;
        ys:
        $Zg[0] = [$Zg[0][0] ^ $ge[$T7][0], $Zg[0][1] ^ $ge[$T7][1]];
        Qz:
        $T7++;
        goto Ky;
        df:
    }
    private static function keccak64($aB, int $x1, int $rn, $oa, bool $d_) : string
    {
        $x1 /= 8;
        $aX = mb_strlen($aB, self::ENCODING);
        $HA = 200 - 2 * $x1;
        $MA = $HA / 8;
        $Zg = [];
        $AQ = 0;
        ut:
        if (!($AQ < 25)) {
            goto N6;
        }
        $Zg[] = [0, 0];
        pI:
        $AQ++;
        goto ut;
        N6:
        $TT = 0;
        YK:
        if (!($aX >= $HA)) {
            goto Dh;
        }
        $AQ = 0;
        vu:
        if (!($AQ < $MA)) {
            goto xx;
        }
        $tA = unpack("\x56\52", mb_substr($aB, $AQ * 8 + $TT, 8, self::ENCODING));
        $Zg[$AQ] = [$Zg[$AQ][0] ^ $tA[2], $Zg[$AQ][1] ^ $tA[1]];
        C_:
        $AQ++;
        goto vu;
        xx:
        self::keccakf64($Zg, self::KECCAK_ROUNDS);
        Tr:
        $aX -= $HA;
        $TT += $HA;
        goto YK;
        Dh:
        $Kz = mb_substr($aB, $TT, $aX, self::ENCODING);
        $Kz = str_pad($Kz, $HA, "\0", STR_PAD_RIGHT);
        $Kz[$aX] = chr($oa);
        $Kz[$HA - 1] = chr(ord($Kz[$HA - 1]) | 0x80);
        $AQ = 0;
        KQ:
        if (!($AQ < $MA)) {
            goto N3;
        }
        $tA = unpack("\x56\x2a", mb_substr($Kz, $AQ * 8, 8, self::ENCODING));
        $Zg[$AQ] = [$Zg[$AQ][0] ^ $tA[2], $Zg[$AQ][1] ^ $tA[1]];
        K4:
        $AQ++;
        goto KQ;
        N3:
        self::keccakf64($Zg, self::KECCAK_ROUNDS);
        $iX = '';
        $AQ = 0;
        xR:
        if (!($AQ < 25)) {
            goto Il;
        }
        $iX .= $tA = pack("\x56\52", $Zg[$AQ][1], $Zg[$AQ][0]);
        aZ:
        $AQ++;
        goto xR;
        Il:
        $YU = mb_substr($iX, 0, $rn / 8, self::ENCODING);
        return $d_ ? $YU : bin2hex($YU);
    }
    private static function keccakf32(&$Zg, $EZ) : void
    {
        $ge = [[0x0, 0x0, 0x0, 0x1], [0x0, 0x0, 0x0, 0x8082], [0x8000, 0x0, 0x0, 0x808a], [0x8000, 0x0, 0x8000, 0x8000], [0x0, 0x0, 0x0, 0x808b], [0x0, 0x0, 0x8000, 0x1], [0x8000, 0x0, 0x8000, 0x8081], [0x8000, 0x0, 0x0, 0x8009], [0x0, 0x0, 0x0, 0x8a], [0x0, 0x0, 0x0, 0x88], [0x0, 0x0, 0x8000, 0x8009], [0x0, 0x0, 0x8000, 0xa], [0x0, 0x0, 0x8000, 0x808b], [0x8000, 0x0, 0x0, 0x8b], [0x8000, 0x0, 0x0, 0x8089], [0x8000, 0x0, 0x0, 0x8003], [0x8000, 0x0, 0x0, 0x8002], [0x8000, 0x0, 0x0, 0x80], [0x0, 0x0, 0x0, 0x800a], [0x8000, 0x0, 0x8000, 0xa], [0x8000, 0x0, 0x8000, 0x8081], [0x8000, 0x0, 0x0, 0x8080], [0x0, 0x0, 0x8000, 0x1], [0x8000, 0x0, 0x8000, 0x8008]];
        $sA = [];
        $T7 = 0;
        Nk:
        if (!($T7 < $EZ)) {
            goto mV;
        }
        $AQ = 0;
        u2:
        if (!($AQ < 5)) {
            goto Lk;
        }
        $sA[$AQ] = [$Zg[$AQ][0] ^ $Zg[$AQ + 5][0] ^ $Zg[$AQ + 10][0] ^ $Zg[$AQ + 15][0] ^ $Zg[$AQ + 20][0], $Zg[$AQ][1] ^ $Zg[$AQ + 5][1] ^ $Zg[$AQ + 10][1] ^ $Zg[$AQ + 15][1] ^ $Zg[$AQ + 20][1], $Zg[$AQ][2] ^ $Zg[$AQ + 5][2] ^ $Zg[$AQ + 10][2] ^ $Zg[$AQ + 15][2] ^ $Zg[$AQ + 20][2], $Zg[$AQ][3] ^ $Zg[$AQ + 5][3] ^ $Zg[$AQ + 10][3] ^ $Zg[$AQ + 15][3] ^ $Zg[$AQ + 20][3]];
        KN:
        $AQ++;
        goto u2;
        Lk:
        $AQ = 0;
        rW:
        if (!($AQ < 5)) {
            goto H6;
        }
        $tA = [$sA[($AQ + 4) % 5][0] ^ ($sA[($AQ + 1) % 5][0] << 1 | $sA[($AQ + 1) % 5][1] >> 15) & 0xffff, $sA[($AQ + 4) % 5][1] ^ ($sA[($AQ + 1) % 5][1] << 1 | $sA[($AQ + 1) % 5][2] >> 15) & 0xffff, $sA[($AQ + 4) % 5][2] ^ ($sA[($AQ + 1) % 5][2] << 1 | $sA[($AQ + 1) % 5][3] >> 15) & 0xffff, $sA[($AQ + 4) % 5][3] ^ ($sA[($AQ + 1) % 5][3] << 1 | $sA[($AQ + 1) % 5][0] >> 15) & 0xffff];
        $ID = 0;
        Iw:
        if (!($ID < 25)) {
            goto At;
        }
        $Zg[$ID + $AQ] = [$Zg[$ID + $AQ][0] ^ $tA[0], $Zg[$ID + $AQ][1] ^ $tA[1], $Zg[$ID + $AQ][2] ^ $tA[2], $Zg[$ID + $AQ][3] ^ $tA[3]];
        k9:
        $ID += 5;
        goto Iw;
        At:
        pr:
        $AQ++;
        goto rW;
        H6:
        $tA = $Zg[1];
        $AQ = 0;
        LW:
        if (!($AQ < 24)) {
            goto Yv;
        }
        $ID = self::$keccakf_piln[$AQ];
        $sA[0] = $Zg[$ID];
        $dn = self::$keccakf_rotc[$AQ] >> 4;
        $b2 = self::$keccakf_rotc[$AQ] % 16;
        $Zg[$ID] = [($tA[(0 + $dn) % 4] << $b2 | $tA[(1 + $dn) % 4] >> 16 - $b2) & 0xffff, ($tA[(1 + $dn) % 4] << $b2 | $tA[(2 + $dn) % 4] >> 16 - $b2) & 0xffff, ($tA[(2 + $dn) % 4] << $b2 | $tA[(3 + $dn) % 4] >> 16 - $b2) & 0xffff, ($tA[(3 + $dn) % 4] << $b2 | $tA[(0 + $dn) % 4] >> 16 - $b2) & 0xffff];
        $tA = $sA[0];
        Ri:
        $AQ++;
        goto LW;
        Yv:
        $ID = 0;
        uO:
        if (!($ID < 25)) {
            goto z3;
        }
        $AQ = 0;
        wf:
        if (!($AQ < 5)) {
            goto Dg;
        }
        $sA[$AQ] = $Zg[$ID + $AQ];
        Sr:
        $AQ++;
        goto wf;
        Dg:
        $AQ = 0;
        fh:
        if (!($AQ < 5)) {
            goto GO;
        }
        $Zg[$ID + $AQ] = [$Zg[$ID + $AQ][0] ^ ~$sA[($AQ + 1) % 5][0] & $sA[($AQ + 2) % 5][0], $Zg[$ID + $AQ][1] ^ ~$sA[($AQ + 1) % 5][1] & $sA[($AQ + 2) % 5][1], $Zg[$ID + $AQ][2] ^ ~$sA[($AQ + 1) % 5][2] & $sA[($AQ + 2) % 5][2], $Zg[$ID + $AQ][3] ^ ~$sA[($AQ + 1) % 5][3] & $sA[($AQ + 2) % 5][3]];
        TX:
        $AQ++;
        goto fh;
        GO:
        rQ:
        $ID += 5;
        goto uO;
        z3:
        $Zg[0] = [$Zg[0][0] ^ $ge[$T7][0], $Zg[0][1] ^ $ge[$T7][1], $Zg[0][2] ^ $ge[$T7][2], $Zg[0][3] ^ $ge[$T7][3]];
        SC:
        $T7++;
        goto Nk;
        mV:
    }
    private static function keccak32($aB, int $x1, int $rn, $oa, bool $d_) : string
    {
        $x1 /= 8;
        $aX = mb_strlen($aB, self::ENCODING);
        $HA = 200 - 2 * $x1;
        $MA = $HA / 8;
        $Zg = [];
        $AQ = 0;
        pf:
        if (!($AQ < 25)) {
            goto SL;
        }
        $Zg[] = [0, 0, 0, 0];
        uj:
        $AQ++;
        goto pf;
        SL:
        $TT = 0;
        nz:
        if (!($aX >= $HA)) {
            goto OL;
        }
        $AQ = 0;
        Jk:
        if (!($AQ < $MA)) {
            goto Md;
        }
        $tA = unpack("\x76\x2a", mb_substr($aB, $AQ * 8 + $TT, 8, self::ENCODING));
        $Zg[$AQ] = [$Zg[$AQ][0] ^ $tA[4], $Zg[$AQ][1] ^ $tA[3], $Zg[$AQ][2] ^ $tA[2], $Zg[$AQ][3] ^ $tA[1]];
        Fw:
        $AQ++;
        goto Jk;
        Md:
        self::keccakf32($Zg, self::KECCAK_ROUNDS);
        p0:
        $aX -= $HA;
        $TT += $HA;
        goto nz;
        OL:
        $Kz = mb_substr($aB, $TT, $aX, self::ENCODING);
        $Kz = str_pad($Kz, $HA, "\0", STR_PAD_RIGHT);
        $Kz[$aX] = chr($oa);
        $Kz[$HA - 1] = chr((int) $Kz[$HA - 1] | 0x80);
        $AQ = 0;
        GH:
        if (!($AQ < $MA)) {
            goto YD;
        }
        $tA = unpack("\166\52", mb_substr($Kz, $AQ * 8, 8, self::ENCODING));
        $Zg[$AQ] = [$Zg[$AQ][0] ^ $tA[4], $Zg[$AQ][1] ^ $tA[3], $Zg[$AQ][2] ^ $tA[2], $Zg[$AQ][3] ^ $tA[1]];
        hn:
        $AQ++;
        goto GH;
        YD:
        self::keccakf32($Zg, self::KECCAK_ROUNDS);
        $iX = '';
        $AQ = 0;
        dv:
        if (!($AQ < 25)) {
            goto W8;
        }
        $iX .= $tA = pack("\x76\x2a", $Zg[$AQ][3], $Zg[$AQ][2], $Zg[$AQ][1], $Zg[$AQ][0]);
        L7:
        $AQ++;
        goto dv;
        W8:
        $YU = mb_substr($iX, 0, $rn / 8, self::ENCODING);
        return $d_ ? $YU : bin2hex($YU);
    }
    private static function keccak($aB, int $x1, int $rn, $oa, bool $d_) : string
    {
        return self::$x64 ? self::keccak64($aB, $x1, $rn, $oa, $d_) : self::keccak32($aB, $x1, $rn, $oa, $d_);
    }
    public static function hash($qL, int $xh, bool $d_ = false) : string
    {
        if (in_array($xh, [224, 256, 384, 512], true)) {
            goto SG;
        }
        throw new Exception("\x55\x6e\163\x75\x70\160\157\x72\164\x65\144\x20\113\145\x63\143\141\x6b\40\x48\x61\x73\150\x20\157\x75\x74\x70\x75\x74\x20\163\x69\172\x65\56");
        SG:
        return self::keccak($qL, $xh, $xh, self::LFSR, $d_);
    }
    public static function shake($qL, int $Yq, int $US, bool $d_ = false) : string
    {
        if (in_array($Yq, [128, 256], true)) {
            goto sK;
        }
        throw new Exception("\x55\156\x73\165\x70\x70\157\162\x74\x65\x64\x20\113\145\x63\x63\x61\x6b\40\x53\x68\141\x6b\x65\40\x73\x65\143\x75\x72\151\164\171\40\154\145\166\145\x6c\x2e");
        sK:
        return self::keccak($qL, $Yq, $US, 0x1f, $d_);
    }
}
