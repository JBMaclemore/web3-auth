<?php


namespace Elliptic\Curve\EdwardsCurve;

use BN\BN;
class Point extends \Elliptic\Curve\BaseCurve\Point
{
    public $x;
    public $y;
    public $z;
    public $t;
    public $zOne;
    function __construct($T0, $c1 = null, $Zp = null, $Fr = null, $tA = null)
    {
        parent::__construct($T0, "\160\x72\157\152\x65\143\164\151\x76\145");
        if ($c1 == null && $Zp == null && $Fr == null) {
            goto SM;
        }
        $this->x = new BN($c1, 16);
        $this->y = new BN($Zp, 16);
        $this->z = $Fr ? new BN($Fr, 16) : $this->curve->one;
        $this->t = $tA ? new BN($tA, 16) : null;
        if ($this->x->red) {
            goto V5;
        }
        $this->x = $this->x->toRed($this->curve->red);
        V5:
        if ($this->y->red) {
            goto fO;
        }
        $this->y = $this->y->toRed($this->curve->red);
        fO:
        if ($this->z->red) {
            goto Pn;
        }
        $this->z = $this->z->toRed($this->curve->red);
        Pn:
        if (!($this->t && !$this->t->red)) {
            goto u_;
        }
        $this->t = $this->t->toRed($this->curve->red);
        u_:
        $this->zOne = $this->z == $this->curve->one;
        if (!($this->curve->extended && !$this->t)) {
            goto IV;
        }
        $this->t = $this->x->redMul($this->y);
        if ($this->zOne) {
            goto zs;
        }
        $this->t = $this->t->redMul($this->z->redInvm());
        zs:
        IV:
        goto Tp;
        SM:
        $this->x = $this->curve->zero;
        $this->y = $this->curve->one;
        $this->z = $this->curve->one;
        $this->t = $this->curve->zero;
        $this->zOne = true;
        Tp:
    }
    public static function fromJSON($T0, $nW)
    {
        return new Point($T0, isset($nW[0]) ? $nW[0] : null, isset($nW[1]) ? $nW[1] : null, isset($nW[2]) ? $nW[2] : null);
    }
    public function inspect()
    {
        if (!$this->isInfinity()) {
            goto dZ;
        }
        return "\74\x45\103\x20\x50\x6f\x69\x6e\x74\x20\111\156\146\x69\x6e\x69\x74\x79\x3e";
        dZ:
        return "\x3c\105\x43\x20\120\x6f\x69\x6e\x74\40\x78\x3a\40" . $this->x->fromRed()->toString(16, 2) . "\x20\x79\x3a\x20" . $this->y->fromRed()->toString(16, 2) . "\40\172\72\40" . $this->z->fromRed()->toString(16, 2) . "\76";
    }
    public function isInfinity()
    {
        return $this->x->cmpn(0) == 0 && $this->y->cmp($this->z) == 0;
    }
    public function _extDbl()
    {
        $wT = $this->x->redSqr();
        $lf = $this->y->redSqr();
        $v7 = $this->z->redSqr();
        $v7 = $v7->redIAdd($v7);
        $ki = $this->curve->_mulA($wT);
        $Y3 = $this->x->redAdd($this->y)->redSqr()->redISub($wT)->redISub($lf);
        $gP = $ki->redAdd($lf);
        $ud = $gP->redSub($v7);
        $ca = $ki->redSub($lf);
        $HQ = $Y3->redMul($ud);
        $iy = $gP->redMul($ca);
        $Az = $Y3->redMul($ca);
        $kZ = $ud->redMul($gP);
        return $this->curve->point($HQ, $iy, $kZ, $Az);
    }
    public function _projDbl()
    {
        $lf = $this->x->redAdd($this->y)->redSqr();
        $v7 = $this->x->redSqr();
        $ki = $this->y->redSqr();
        if ($this->curve->twisted) {
            goto tG;
        }
        $Y3 = $v7->redAdd($ki);
        $ca = $this->curve->_mulC($this->c->redMul($this->z))->redSqr();
        $ID = $Y3->redSub($ca)->redSub($ca);
        $HQ = $this->curve->_mulC($lf->redISub($Y3))->redMul($ID);
        $iy = $this->curve->_mulC($Y3)->redMul($v7->redISub($ki));
        $kZ = $Y3->redMul($ID);
        goto w9;
        tG:
        $Y3 = $this->curve->_mulA($v7);
        $ud = $Y3->redAdd($ki);
        if ($this->zOne) {
            goto Be;
        }
        $ca = $this->z->redSqr();
        $ID = $ud->redSub($ca)->redISub($ca);
        $HQ = $lf->redSub($v7)->redISub($ki)->redMul($ID);
        $iy = $ud->redMul($Y3->redSub($ki));
        $kZ = $ud->redMul($ID);
        goto eo;
        Be:
        $HQ = $lf->redSub($v7)->redSub($ki)->redMul($ud->redSub($this->curve->two));
        $iy = $ud->redMul($Y3->redSub($ki));
        $kZ = $ud->redSqr()->redSub($ud)->redSub($ud);
        eo:
        w9:
        return $this->curve->point($HQ, $iy, $kZ);
    }
    public function dbl()
    {
        if (!$this->isInfinity()) {
            goto WM;
        }
        return $this;
        WM:
        if ($this->curve->extended) {
            goto AP;
        }
        return $this->_projDbl();
        goto Jc;
        AP:
        return $this->_extDbl();
        Jc:
    }
    public function _extAdd($GM)
    {
        $wT = $this->y->redSub($this->x)->redMul($GM->y->redSub($GM->x));
        $lf = $this->y->redAdd($this->x)->redMul($GM->y->redAdd($GM->x));
        $v7 = $this->t->redMul($this->curve->dd)->redMul($GM->t);
        $ki = $this->z->redMul($GM->z->redAdd($GM->z));
        $Y3 = $lf->redSub($wT);
        $ud = $ki->redSub($v7);
        $gP = $ki->redAdd($v7);
        $ca = $lf->redAdd($wT);
        $HQ = $Y3->redMul($ud);
        $iy = $gP->redMul($ca);
        $Az = $Y3->redMul($ca);
        $kZ = $ud->redMul($gP);
        return $this->curve->point($HQ, $iy, $kZ, $Az);
    }
    public function _projAdd($GM)
    {
        $wT = $this->z->redMul($GM->z);
        $lf = $wT->redSqr();
        $v7 = $this->x->redMul($GM->x);
        $ki = $this->y->redMul($GM->y);
        $Y3 = $this->curve->d->redMul($v7)->redMul($ki);
        $ud = $lf->redSub($Y3);
        $gP = $lf->redAdd($Y3);
        $mw = $this->x->redAdd($this->y)->redMul($GM->x->redAdd($GM->y))->redISub($v7)->redISub($ki);
        $HQ = $wT->redMul($ud)->redMul($mw);
        if ($this->curve->twisted) {
            goto kU;
        }
        $iy = $wT->redMul($gP)->redMul($ki->redSub($v7));
        $kZ = $this->curve->_mulC($ud)->redMul($gP);
        goto gc;
        kU:
        $iy = $wT->redMul($gP)->redMul($ki->redSub($this->curve->_mulA($v7)));
        $kZ = $ud->redMul($gP);
        gc:
        return $this->curve->point($HQ, $iy, $kZ);
    }
    public function add($GM)
    {
        if (!$this->isInfinity()) {
            goto pw;
        }
        return $GM;
        pw:
        if (!$GM->isInfinity()) {
            goto I5;
        }
        return $this;
        I5:
        if ($this->curve->extended) {
            goto QY;
        }
        return $this->_projAdd($GM);
        goto hN;
        QY:
        return $this->_extAdd($GM);
        hN:
    }
    public function mul($Qs)
    {
        if ($this->_hasDoubles($Qs)) {
            goto eO;
        }
        return $this->curve->_wnafMul($this, $Qs);
        goto sU;
        eO:
        return $this->curve->_fixedNafMul($this, $Qs);
        sU:
    }
    public function mulAdd($Pz, $GM, $Pt)
    {
        return $this->curve->_wnafMulAdd(1, [$this, $GM], [$Pz, $Pt], 2, false);
    }
    public function jmulAdd($Pz, $GM, $Pt)
    {
        return $this->curve->_wnafMulAdd(1, [$this, $GM], [$Pz, $Pt], 2, true);
    }
    public function normalize()
    {
        if (!$this->zOne) {
            goto sP;
        }
        return $this;
        sP:
        $UY = $this->z->redInvm();
        $this->x = $this->x->redMul($UY);
        $this->y = $this->y->redMul($UY);
        if (!$this->t) {
            goto Fp;
        }
        $this->t = $this->t->redMul($UY);
        Fp:
        $this->z = $this->curve->one;
        $this->zOne = true;
        return $this;
    }
    public function neg()
    {
        return $this->curve->point($this->x->redNeg(), $this->y, $this->z, $this->t != null ? $this->t->redNeg() : null);
    }
    public function getX()
    {
        $this->normalize();
        return $this->x->fromRed();
    }
    public function getY()
    {
        $this->normalize();
        return $this->y->fromRed();
    }
    public function eq($Yw)
    {
        return $this == $Yw || $this->getX()->cmp($Yw->getX()) == 0 && $this->getY()->cmp($Yw->getY()) == 0;
    }
    public function eqXToP($c1)
    {
        $QO = $c1->toRed($this->curve->red)->redMul($this->z);
        if (!($this->x->cmp($QO) == 0)) {
            goto pW;
        }
        return true;
        pW:
        $v_ = $c1->_clone();
        $tA = $this->curve->redN->redMul($this->z);
        Ux:
        $v_->iadd($this->curve->n);
        if (!($v_->cmp($this->curve->p) >= 0)) {
            goto lX;
        }
        return false;
        lX:
        $QO->redIAdd($tA);
        if (!($this->x->cmp($QO) == 0)) {
            goto AI;
        }
        return true;
        AI:
        c0:
        goto Ux;
        R7:
        return false;
    }
    public function toP()
    {
        return $this->normalize();
    }
    public function mixedAdd($GM)
    {
        return $this->add($GM);
    }
}
