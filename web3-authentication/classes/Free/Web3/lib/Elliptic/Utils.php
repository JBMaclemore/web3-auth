<?php


namespace Elliptic;

use Exception;
use BN\BN;
class Utils
{
    public static function toArray($TY, $dB = false)
    {
        if (!is_array($TY)) {
            goto O3;
        }
        return array_slice($TY, 0);
        O3:
        if ($TY) {
            goto kL;
        }
        return array();
        kL:
        if (is_string($TY)) {
            goto E3;
        }
        throw new Exception("\116\x6f\164\x20\151\155\160\x6c\x65\x6d\x65\156\164\145\x64");
        E3:
        if ($dB) {
            goto ws;
        }
        return array_slice(unpack("\103\x2a", $TY), 0);
        ws:
        if (!($dB === "\150\x65\x78")) {
            goto Lv;
        }
        return array_slice(unpack("\x43\52", hex2bin($TY)), 0);
        Lv:
        return $TY;
    }
    public static function toHex($TY)
    {
        if (!is_string($TY)) {
            goto n_;
        }
        return bin2hex($TY);
        n_:
        if (is_array($TY)) {
            goto EZ;
        }
        throw new Exception("\x4e\x6f\164\40\151\155\x70\x6c\145\x6d\x65\x6e\164\x65\144");
        EZ:
        $Z3 = call_user_func_array("\x70\141\143\x6b", array_merge(["\x43\52"], $TY));
        return bin2hex($Z3);
    }
    public static function toBin($TY, $dB = false)
    {
        if (!is_array($TY)) {
            goto xj;
        }
        return call_user_func_array("\x70\141\x63\153", array_merge(["\103\x2a"], $TY));
        xj:
        if (!($dB === "\150\145\x78")) {
            goto GF;
        }
        return hex2bin($TY);
        GF:
        return $TY;
    }
    public static function encode($Ax, $dB)
    {
        if (!($dB === "\x68\x65\x78")) {
            goto zg;
        }
        return self::toHex($Ax);
        zg:
        return $Ax;
    }
    public static function getNAF($I4, $Rf)
    {
        $GL = array();
        $kS = 1 << $Rf + 1;
        $Qs = clone $I4;
        Qo:
        if (!($Qs->cmpn(1) >= 0)) {
            goto NQ;
        }
        if (!$Qs->isOdd()) {
            goto mL;
        }
        $AV = $Qs->andln($kS - 1);
        $Fr = $AV;
        if (!($AV > ($kS >> 1) - 1)) {
            goto ZC;
        }
        $Fr = ($kS >> 1) - $AV;
        ZC:
        $Qs->isubn($Fr);
        array_push($GL, $Fr);
        goto H7;
        mL:
        array_push($GL, 0);
        H7:
        $d3 = !$Qs->isZero() && $Qs->andln($kS - 1) === 0 ? $Rf + 1 : 1;
        $AQ = 1;
        E4:
        if (!($AQ < $d3)) {
            goto WT;
        }
        array_push($GL, 0);
        oz:
        $AQ++;
        goto E4;
        WT:
        $Qs->iushrn($d3);
        goto Qo;
        NQ:
        return $GL;
    }
    public static function getJSF($Pz, $Pt)
    {
        $Cj = array(array(), array());
        $Pz = $Pz->_clone();
        $Pt = $Pt->_clone();
        $gQ = 0;
        $Xf = 0;
        ua:
        if (!($Pz->cmpn(-$gQ) > 0 || $Pt->cmpn(-$Xf) > 0)) {
            goto m_;
        }
        $sI = $Pz->andln(3) + $gQ & 3;
        $lI = $Pt->andln(3) + $Xf & 3;
        if (!($sI === 3)) {
            goto UZ;
        }
        $sI = -1;
        UZ:
        if (!($lI === 3)) {
            goto QS;
        }
        $lI = -1;
        QS:
        $lZ = 0;
        if (!(($sI & 1) !== 0)) {
            goto F6;
        }
        $SE = $Pz->andln(7) + $gQ & 7;
        $lZ = ($SE === 3 || $SE === 5) && $lI === 2 ? -$sI : $sI;
        F6:
        array_push($Cj[0], $lZ);
        $zA = 0;
        if (!(($lI & 1) !== 0)) {
            goto mZ;
        }
        $SE = $Pt->andln(7) + $Xf & 7;
        $zA = ($SE === 3 || $SE === 5) && $sI === 2 ? -$lI : $lI;
        mZ:
        array_push($Cj[1], $zA);
        if (!(2 * $gQ === $lZ + 1)) {
            goto Da;
        }
        $gQ = 1 - $gQ;
        Da:
        if (!(2 * $Xf === $zA + 1)) {
            goto IA;
        }
        $Xf = 1 - $Xf;
        IA:
        $Pz->iushrn(1);
        $Pt->iushrn(1);
        goto ua;
        m_:
        return $Cj;
    }
    public static function intFromLE($XC)
    {
        return new BN($XC, "\x68\145\x78", "\x6c\x65");
    }
    public static function parseBytes($XC)
    {
        if (!is_string($XC)) {
            goto yW;
        }
        return self::toArray($XC, "\150\x65\170");
        yW:
        return $XC;
    }
    public static function randBytes($fw)
    {
        $Oq = '';
        $AQ = 0;
        z7:
        if (!($AQ < $fw)) {
            goto wL;
        }
        $Oq .= chr(rand(0, 255));
        aH:
        $AQ++;
        goto z7;
        wL:
        return $Oq;
    }
    public static function optionAssert(&$Qh, $Ky, $V7 = false, $Tr = false)
    {
        if (!isset($Qh[$Ky])) {
            goto oh;
        }
        return;
        oh:
        if (!$Tr) {
            goto wr;
        }
        throw new Exception("\x4d\151\x73\163\151\x6e\x67\x20\157\x70\x74\x69\x6f\156\40" . $Ky);
        wr:
        $Qh[$Ky] = $V7;
    }
}
