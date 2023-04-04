<?php


namespace Elliptic\EC;

require_once "\x55\x74\151\x6c\x73\x2e\x70\150\160";
use Elliptic\Utils;
use BN\BN;
class Signature
{
    public $r;
    public $s;
    public $recoveryParam;
    function __construct($ts, $dB = false)
    {
        if (!$ts instanceof Signature) {
            goto aJ;
        }
        $this->r = $ts->r;
        $this->s = $ts->s;
        $this->recoveryParam = $ts->recoveryParam;
        return;
        aJ:
        if (!isset($ts["\162"])) {
            goto U1;
        }
        assert(isset($ts["\x72"]) && isset($ts["\x73"]));
        $this->r = new BN($ts["\x72"], 16);
        $this->s = new BN($ts["\163"], 16);
        if (isset($ts["\x72\x65\143\x6f\x76\145\x72\171\120\x61\x72\141\x6d"])) {
            goto aL;
        }
        $this->recoveryParam = null;
        goto r9;
        aL:
        $this->recoveryParam = $ts["\162\145\143\157\166\145\162\x79\120\141\x72\x61\155"];
        r9:
        return;
        U1:
        if ($this->_importDER($ts, $dB)) {
            goto X_;
        }
        throw new \Exception("\x55\x6e\x6b\x6e\x6f\167\156\x20\x73\151\x67\156\141\164\x75\x72\145\x20\146\157\162\155\x61\x74");
        X_:
    }
    private static function getLength($rb, &$pB)
    {
        $yt = $rb[$pB++];
        if ($yt & 0x80) {
            goto m5;
        }
        return $yt;
        m5:
        $nQ = $yt & 0xf;
        $VZ = 0;
        $AQ = 0;
        Ow:
        if (!($AQ < $nQ)) {
            goto wo;
        }
        $VZ = $VZ << 8;
        $VZ = $VZ | $rb[$pB];
        $pB++;
        cc:
        $AQ++;
        goto Ow;
        wo:
        return $VZ;
    }
    private static function rmPadding(&$rb)
    {
        $AQ = 0;
        $Or = count($rb) - 1;
        RK:
        if (!($AQ < $Or && !$rb[$AQ] && !($rb[$AQ + 1] & 0x80))) {
            goto EE;
        }
        $AQ++;
        goto RK;
        EE:
        if (!($AQ === 0)) {
            goto Cx;
        }
        return $rb;
        Cx:
        return array_slice($rb, $AQ);
    }
    private function _importDER($jp, $dB)
    {
        $jp = Utils::toArray($jp, $dB);
        $S0 = count($jp);
        $pW = 0;
        if (!($jp[$pW++] !== 0x30)) {
            goto sc;
        }
        return false;
        sc:
        $Or = self::getLength($jp, $pW);
        if (!($Or + $pW !== $S0)) {
            goto jG;
        }
        return false;
        jG:
        if (!($jp[$pW++] !== 0x2)) {
            goto Jj;
        }
        return false;
        Jj:
        $m9 = self::getLength($jp, $pW);
        $YU = array_slice($jp, $pW, $m9);
        $pW += $m9;
        if (!($jp[$pW++] !== 0x2)) {
            goto F_;
        }
        return false;
        F_:
        $n4 = self::getLength($jp, $pW);
        if (!($S0 !== $n4 + $pW)) {
            goto pb;
        }
        return false;
        pb:
        $pU = array_slice($jp, $pW, $n4);
        if (!($YU[0] === 0 && $YU[1] & 0x80)) {
            goto Wl;
        }
        $YU = array_slice($YU, 1);
        Wl:
        if (!($pU[0] === 0 && $pU[1] & 0x80)) {
            goto xB;
        }
        $pU = array_slice($pU, 1);
        xB:
        $this->r = new BN($YU);
        $this->s = new BN($pU);
        $this->recoveryParam = null;
        return true;
    }
    private static function constructLength(&$Ax, $Or)
    {
        if (!($Or < 0x80)) {
            goto vz;
        }
        array_push($Ax, $Or);
        return;
        vz:
        $TS = 1 + (log($Or) / M_LN2 >> 3);
        array_push($Ax, $TS | 0x80);
        gC:
        if (!--$TS) {
            goto oj;
        }
        array_push($Ax, $Or >> ($TS << 3) & 0xff);
        goto gC;
        oj:
        array_push($Ax, $Or);
    }
    public function toDER($dB = false)
    {
        $YU = $this->r->toArray();
        $pU = $this->s->toArray();
        if (!($YU[0] & 0x80)) {
            goto W3;
        }
        array_unshift($YU, 0);
        W3:
        if (!($pU[0] & 0x80)) {
            goto wz;
        }
        array_unshift($pU, 0);
        wz:
        $YU = self::rmPadding($YU);
        $pU = self::rmPadding($pU);
        TI:
        if (!(!$pU[0] && !($pU[1] & 0x80))) {
            goto fb;
        }
        array_slice($pU, 1);
        goto TI;
        fb:
        $Ax = array(0x2);
        self::constructLength($Ax, count($YU));
        $Ax = array_merge($Ax, $YU, array(0x2));
        self::constructLength($Ax, count($pU));
        $MV = array_merge($Ax, $pU);
        $Oq = array(0x30);
        self::constructLength($Oq, count($MV));
        $Oq = array_merge($Oq, $MV);
        return Utils::encode($Oq, $dB);
    }
}
