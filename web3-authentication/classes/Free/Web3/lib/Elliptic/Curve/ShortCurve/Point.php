<?php


namespace Elliptic\Curve\ShortCurve;

use JsonSerializable;
use BN\BN;
class Point extends \Elliptic\Curve\BaseCurve\Point implements JsonSerializable
{
    public $x;
    public $y;
    public $inf;
    function __construct($T0, $c1, $Zp, $DP)
    {
        parent::__construct($T0, "\141\146\146\151\156\145");
        if ($c1 == null && $Zp == null) {
            goto Vg;
        }
        $this->x = new BN($c1, 16);
        $this->y = new BN($Zp, 16);
        if (!$DP) {
            goto qK;
        }
        $this->x->forceRed($this->curve->red);
        $this->y->forceRed($this->curve->red);
        qK:
        if ($this->x->red) {
            goto Ic;
        }
        $this->x = $this->x->toRed($this->curve->red);
        Ic:
        if ($this->y->red) {
            goto bq;
        }
        $this->y = $this->y->toRed($this->curve->red);
        bq:
        $this->inf = false;
        goto u5;
        Vg:
        $this->x = null;
        $this->y = null;
        $this->inf = true;
        u5:
    }
    public function _getBeta()
    {
        if (isset($this->curve->endo)) {
            goto z0;
        }
        return null;
        z0:
        if (!(isset($this->precomputed) && isset($this->precomputed["\142\145\164\141"]))) {
            goto fi;
        }
        return $this->precomputed["\x62\x65\x74\141"];
        fi:
        $DC = $this->curve->point($this->x->redMul($this->curve->endo["\142\145\x74\x61"]), $this->y);
        if (!isset($this->precomputed)) {
            goto X9;
        }
        $cX = function ($GM) {
            return $this->curve->point($GM->x->redMul($this->curve->endo["\142\x65\164\141"]), $GM->y);
        };
        $DC->precomputed = array("\x62\x65\x74\x61" => null, "\x6e\141\146" => null, "\x64\x6f\x75\x62\154\145\x73" => null);
        if (!isset($this->precomputed["\156\141\146"])) {
            goto zo;
        }
        $DC->precomputed["\x6e\141\146"] = array("\x77\x6e\144" => $this->precomputed["\156\x61\146"]["\x77\156\x64"], "\160\157\x69\156\x74\x73" => array_map($cX, $this->precomputed["\156\141\146"]["\160\157\x69\156\164\x73"]));
        zo:
        if (!isset($this->precomputed["\144\157\165\x62\154\145\x73"])) {
            goto f3;
        }
        $DC->precomputed["\144\x6f\165\142\x6c\x65\x73"] = array("\163\164\145\160" => $this->precomputed["\144\157\165\x62\x6c\145\163"]["\x73\164\x65\160"], "\160\157\151\x6e\164\163" => array_map($cX, $this->precomputed["\144\x6f\x75\142\154\x65\163"]["\160\x6f\151\x6e\x74\163"]));
        f3:
        $this->precomputed["\142\x65\164\141"] = $DC;
        X9:
        return $DC;
    }
    public function jsonSerialize() : mixed
    {
        $Oq = array($this->x, $this->y);
        if (isset($this->precomputed)) {
            goto xN;
        }
        return $Oq;
        xN:
        $ay = array();
        $kk = false;
        if (!isset($this->precomputed["\144\x6f\165\142\x6c\145\163"])) {
            goto cJ;
        }
        $ay["\144\157\165\x62\x6c\145\163"] = array("\x73\x74\x65\x70" => $this->precomputed["\144\x6f\165\x62\x6c\145\163"]["\x73\x74\145\x70"], "\x70\x6f\x69\156\164\163" => array_slice($this->precomputed["\144\x6f\165\142\154\x65\163"]["\160\157\151\156\x74\163"], 1));
        $kk = true;
        cJ:
        if (!isset($this->precomputed["\156\141\x66"])) {
            goto Kv;
        }
        $ay["\x6e\x61\146"] = array("\156\141\x66" => $this->precomputed["\x6e\141\146"]["\x77\156\144"], "\160\x6f\151\x6e\x74\163" => array_slice($this->precomputed["\x6e\141\146"]["\160\157\151\x6e\164\x73"], 1));
        $kk = true;
        Kv:
        if (!$kk) {
            goto H0;
        }
        array_push($Oq, $ay);
        H0:
        return $Oq;
    }
    public static function fromJSON($T0, $nW, $fg)
    {
        if (!is_string($nW)) {
            goto q8;
        }
        $nW = json_decode($nW);
        q8:
        $Qm = $T0->point($nW[0], $nW[1], $fg);
        if (!(count($nW) === 2)) {
            goto h7;
        }
        return $Qm;
        h7:
        $ay = $nW[2];
        $Qm->precomputed = array("\x62\145\x74\141" => null);
        $zS = function ($nW) use($T0, $fg) {
            return $T0->point($nW[0], $nW[1], $fg);
        };
        if (!isset($ay["\x64\157\x75\142\154\145\163"])) {
            goto CP;
        }
        $mw = array_map($zS, $ay["\144\157\x75\142\x6c\145\163"]["\x70\157\x69\x6e\x74\163"]);
        array_unshift($mw, $Qm);
        $Qm->precomputed["\144\157\x75\142\x6c\x65\x73"] = array("\x73\164\145\x70" => $ay["\x64\x6f\x75\142\154\x65\x73"]["\163\164\145\160"], "\160\x6f\x69\156\164\163" => $mw);
        CP:
        if (!isset($ay["\156\141\x66"])) {
            goto FZ;
        }
        $mw = array_map($zS, $ay["\x6e\x61\146"]["\x70\x6f\x69\x6e\x74\x73"]);
        array_unshift($mw, $Qm);
        $Qm->precomputed["\x6e\x61\x66"] = array("\167\x6e\x64" => $ay["\x6e\x61\146"]["\167\156\x64"], "\x70\x6f\151\x6e\164\x73" => $mw);
        FZ:
        return $Qm;
    }
    public function inspect()
    {
        if (!$this->isInfinity()) {
            goto xl;
        }
        return "\x3c\105\103\x20\120\157\151\156\x74\40\111\156\x66\151\x6e\151\x74\171\x3e";
        xl:
        return "\74\105\103\x20\120\x6f\x69\156\x74\x20\170\x3a\40" . $this->x->fromRed()->toString(16, 2) . "\40\171\72\x20" . $this->y->fromRed()->toString(16, 2) . "\x3e";
    }
    public function __debugInfo()
    {
        return ["\105\103\40\x50\x6f\x69\156\x74" => $this->isInfinity() ? "\111\156\146\x69\156\151\164\171" : ["\170" => $this->x->fromRed()->toString(16, 2), "\171" => $this->y->fromRed()->toString(16, 2)]];
    }
    public function isInfinity()
    {
        return $this->inf;
    }
    public function add($Qm)
    {
        if (!$this->inf) {
            goto k2;
        }
        return $Qm;
        k2:
        if (!$Qm->inf) {
            goto sA;
        }
        return $this;
        sA:
        if (!$this->eq($Qm)) {
            goto Me;
        }
        return $this->dbl();
        Me:
        if (!$this->neg()->eq($Qm)) {
            goto H9;
        }
        return $this->curve->point(null, null);
        H9:
        if (!($this->x->cmp($Qm->x) === 0)) {
            goto pg;
        }
        return $this->curve->point(null, null);
        pg:
        $v7 = $this->y->redSub($Qm->y);
        if ($v7->isZero()) {
            goto zm;
        }
        $v7 = $v7->redMul($this->x->redSub($Qm->x)->redInvm());
        zm:
        $HQ = $v7->redSqr()->redISub($this->x)->redISub($Qm->x);
        $iy = $v7->redMul($this->x->redSub($HQ))->redISub($this->y);
        return $this->curve->point($HQ, $iy);
    }
    public function dbl()
    {
        if (!$this->inf) {
            goto Xn;
        }
        return $this;
        Xn:
        $Gg = $this->y->redAdd($this->y);
        if (!$Gg->isZero()) {
            goto Sp;
        }
        return $this->curve->point(null, null);
        Sp:
        $Ro = $this->x->redSqr();
        $B3 = $Gg->redInvm();
        $v7 = $Ro->redAdd($Ro)->redIAdd($Ro)->redIAdd($this->curve->a)->redMul($B3);
        $HQ = $v7->redSqr()->redISub($this->x->redAdd($this->x));
        $iy = $v7->redMul($this->x->redSub($HQ))->redISub($this->y);
        return $this->curve->point($HQ, $iy);
    }
    public function getX()
    {
        return $this->x->fromRed();
    }
    public function getY()
    {
        return $this->y->fromRed();
    }
    public function mul($Qs)
    {
        $Qs = new BN($Qs, 16);
        if ($this->_hasDoubles($Qs)) {
            goto Cy;
        }
        if (isset($this->curve->endo)) {
            goto NG;
        }
        goto Ru;
        Cy:
        return $this->curve->_fixedNafMul($this, $Qs);
        goto Ru;
        NG:
        return $this->curve->_endoWnafMulAdd(array($this), array($Qs));
        Ru:
        return $this->curve->_wnafMul($this, $Qs);
    }
    public function mulAdd($Pz, $db, $Pt, $ID = false)
    {
        $Yb = array($this, $db);
        $EX = array($Pz, $Pt);
        if (!isset($this->curve->endo)) {
            goto Od;
        }
        return $this->curve->_endoWnafMulAdd($Yb, $EX, $ID);
        Od:
        return $this->curve->_wnafMulAdd(1, $Yb, $EX, 2, $ID);
    }
    public function jmulAdd($Pz, $db, $Pt)
    {
        return $this->mulAdd($Pz, $db, $Pt, true);
    }
    public function eq($Qm)
    {
        return $this === $Qm || $this->inf === $Qm->inf && ($this->inf || $this->x->cmp($Qm->x) === 0 && $this->y->cmp($Qm->y) === 0);
    }
    public function neg($kA = false)
    {
        if (!$this->inf) {
            goto iU;
        }
        return $this;
        iU:
        $Oq = $this->curve->point($this->x, $this->y->redNeg());
        if (!($kA && isset($this->precomputed))) {
            goto hu;
        }
        $Oq->precomputed = array();
        $ay = $this->precomputed;
        $Aj = function ($Qm) {
            return $Qm->neg();
        };
        if (!isset($ay["\156\141\146"])) {
            goto gO;
        }
        $Oq->precomputed["\156\x61\146"] = array("\x77\156\144" => $ay["\x6e\141\146"]["\x77\x6e\144"], "\160\157\151\x6e\164\163" => array_map($Aj, $ay["\x6e\141\146"]["\x70\157\x69\x6e\164\163"]));
        gO:
        if (!isset($ay["\x64\157\x75\x62\x6c\x65\163"])) {
            goto FW;
        }
        $Oq->precomputed["\144\x6f\x75\142\154\x65\x73"] = array("\163\x74\x65\160" => $ay["\x64\157\165\x62\x6c\x65\163"]["\163\x74\145\x70"], "\x70\x6f\151\156\x74\x73" => array_map($Aj, $ay["\x64\x6f\165\x62\x6c\145\163"]["\160\x6f\x69\156\164\x73"]));
        FW:
        hu:
        return $Oq;
    }
    public function toJ()
    {
        if (!$this->inf) {
            goto b9;
        }
        return $this->curve->jpoint(null, null, null);
        b9:
        return $this->curve->jpoint($this->x, $this->y, $this->curve->one);
    }
}
