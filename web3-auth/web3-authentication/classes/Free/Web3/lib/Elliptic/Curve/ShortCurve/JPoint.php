<?php


namespace Elliptic\Curve\ShortCurve;

use BN\BN;
class JPoint extends \Elliptic\Curve\BaseCurve\Point
{
    public $x;
    public $y;
    public $z;
    public $zOne;
    function __construct($T0, $c1, $Zp, $Fr)
    {
        parent::__construct($T0, "\152\x61\143\x6f\x62\151\x61\156");
        if ($c1 == null && $Zp == null && $Fr == null) {
            goto Nl;
        }
        $this->x = new BN($c1, 16);
        $this->y = new BN($Zp, 16);
        $this->z = new BN($Fr, 16);
        goto lT;
        Nl:
        $this->x = $this->curve->one;
        $this->y = $this->curve->one;
        $this->z = new BN(0);
        lT:
        if ($this->x->red) {
            goto wP;
        }
        $this->x = $this->x->toRed($this->curve->red);
        wP:
        if ($this->y->red) {
            goto fg;
        }
        $this->y = $this->y->toRed($this->curve->red);
        fg:
        if ($this->z->red) {
            goto i6;
        }
        $this->z = $this->z->toRed($this->curve->red);
        i6:
        return $this->zOne = $this->z == $this->curve->one;
    }
    public function toP()
    {
        if (!$this->isInfinity()) {
            goto ka;
        }
        return $this->curve->point(null, null);
        ka:
        $gH = $this->z->redInvm();
        $vy = $gH->redSqr();
        $ZB = $this->x->redMul($vy);
        $sR = $this->y->redMul($vy)->redMul($gH);
        return $this->curve->point($ZB, $sR);
    }
    public function neg()
    {
        return $this->curve->jpoint($this->x, $this->y->redNeg(), $this->z);
    }
    public function add($GM)
    {
        if (!$this->isInfinity()) {
            goto An;
        }
        return $GM;
        An:
        if (!$GM->isInfinity()) {
            goto RO;
        }
        return $this;
        RO:
        $F0 = $GM->z->redSqr();
        $La = $this->z->redSqr();
        $lZ = $this->x->redMul($F0);
        $zA = $GM->x->redMul($La);
        $CM = $this->y->redMul($F0->redMul($GM->z));
        $mr = $GM->y->redMul($La->redMul($this->z));
        $ca = $lZ->redSub($zA);
        $YU = $CM->redSub($mr);
        if (!$ca->isZero()) {
            goto uL;
        }
        if (!$YU->isZero()) {
            goto Zc;
        }
        return $this->dbl();
        goto s7;
        Zc:
        return $this->curve->jpoint(null, null, null);
        s7:
        uL:
        $c9 = $ca->redSqr();
        $cW = $c9->redMul($ca);
        $PR = $lZ->redMul($c9);
        $HQ = $YU->redSqr()->redIAdd($cW)->redISub($PR)->redISub($PR);
        $iy = $YU->redMul($PR->redISub($HQ))->redISub($CM->redMul($cW));
        $kZ = $this->z->redMul($GM->z)->redMul($ca);
        return $this->curve->jpoint($HQ, $iy, $kZ);
    }
    public function mixedAdd($GM)
    {
        if (!$this->isInfinity()) {
            goto c6;
        }
        return $GM->toJ();
        c6:
        if (!$GM->isInfinity()) {
            goto oH;
        }
        return $this;
        oH:
        $La = $this->z->redSqr();
        $lZ = $this->x;
        $zA = $GM->x->redMul($La);
        $CM = $this->y;
        $mr = $GM->y->redMul($La)->redMul($this->z);
        $ca = $lZ->redSub($zA);
        $YU = $CM->redSub($mr);
        if (!$ca->isZero()) {
            goto Nr;
        }
        if (!$YU->isZero()) {
            goto KJ;
        }
        return $this->dbl();
        goto WS;
        KJ:
        return $this->curve->jpoint(null, null, null);
        WS:
        Nr:
        $c9 = $ca->redSqr();
        $cW = $c9->redMul($ca);
        $PR = $lZ->redMul($c9);
        $HQ = $YU->redSqr()->redIAdd($cW)->redISub($PR)->redISub($PR);
        $iy = $YU->redMul($PR->redISub($HQ))->redISub($CM->redMul($cW));
        $kZ = $this->z->redMul($ca);
        return $this->curve->jpoint($HQ, $iy, $kZ);
    }
    public function dblp($L1 = null)
    {
        if (!($L1 == 0 || $this->isInfinity())) {
            goto e5;
        }
        return $this;
        e5:
        if (!($L1 == null)) {
            goto XL;
        }
        return $this->dbl();
        XL:
        if (!($this->curve->zeroA || $this->curve->threeA)) {
            goto Xt;
        }
        $YU = $this;
        $AQ = 0;
        g4:
        if (!($AQ < $L1)) {
            goto m7;
        }
        $YU = $YU->dbl();
        s2:
        $AQ++;
        goto g4;
        m7:
        return $YU;
        Xt:
        $Ws = $this->x;
        $qj = $this->y;
        $oA = $this->z;
        $ip = $oA->redSqr()->redSqr();
        $l9 = $qj->redAdd($qj);
        $AQ = 0;
        Oc:
        if (!($AQ < $L1)) {
            goto kP;
        }
        $uN = $Ws->redSqr();
        $w_ = $l9->redSqr();
        $BY = $w_->redSqr();
        $v7 = $uN->redAdd($uN)->redIAdd($uN)->redIAdd($this->curve->a->redMul($ip));
        $Mk = $Ws->redMul($w_);
        $HQ = $v7->redSqr()->redISub($Mk->redAdd($Mk));
        $H9 = $Mk->redISub($HQ);
        $lz = $v7->redMul($H9);
        $lz = $lz->redIAdd($lz)->redISub($BY);
        $kZ = $l9->redMul($oA);
        if (!($AQ + 1 < $L1)) {
            goto aT;
        }
        $ip = $ip->redMul($BY);
        aT:
        $Ws = $HQ;
        $oA = $kZ;
        $l9 = $lz;
        OB:
        $AQ++;
        goto Oc;
        kP:
        return $this->curve->jpoint($Ws, $l9->redMul($this->curve->tinv), $oA);
    }
    public function dbl()
    {
        if (!$this->isInfinity()) {
            goto xE;
        }
        return $this;
        xE:
        if ($this->curve->zeroA) {
            goto Ut;
        }
        if ($this->curve->threeA) {
            goto Wk;
        }
        goto em;
        Ut:
        return $this->_zeroDbl();
        goto em;
        Wk:
        return $this->_threeDbl();
        em:
        return $this->_dbl();
    }
    private function _zOneDbl($L5)
    {
        $vM = $this->x->redSqr();
        $hV = $this->y->redSqr();
        $JS = $hV->redSqr();
        $pU = $this->x->redAdd($hV)->redSqr()->redISub($vM)->redISub($JS);
        $pU = $pU->redIAdd($pU);
        $b2 = null;
        if ($L5) {
            goto j9;
        }
        $b2 = $vM->redAdd($vM)->redIAdd($vM);
        goto oV;
        j9:
        $b2 = $vM->redAdd($vM)->redIAdd($vM)->redIAdd($this->curve->a);
        oV:
        $tA = $b2->redSqr()->redISub($pU)->redISub($pU);
        $w8 = $JS->redIAdd($JS);
        $w8 = $w8->redIAdd($w8);
        $w8 = $w8->redIAdd($w8);
        $iy = $b2->redMul($pU->redISub($tA))->redISub($w8);
        $kZ = $this->y->redAdd($this->y);
        return $this->curve->jpoint($tA, $iy, $kZ);
    }
    private function _zeroDbl()
    {
        if (!$this->zOne) {
            goto oc;
        }
        return $this->_zOneDbl(false);
        oc:
        $wT = $this->x->redSqr();
        $lf = $this->y->redSqr();
        $v7 = $lf->redSqr();
        $ki = $this->x->redAdd($lf)->redSqr()->redISub($wT)->redISub($v7);
        $ki = $ki->redIAdd($ki);
        $Y3 = $wT->redAdd($wT)->redIAdd($wT);
        $ud = $Y3->redSqr();
        $O3 = $v7->redIAdd($v7);
        $O3 = $O3->redIAdd($O3);
        $O3 = $O3->redIAdd($O3);
        $HQ = $ud->redISub($ki)->redISub($ki);
        $iy = $Y3->redMul($ki->redISub($HQ))->redISub($O3);
        $kZ = $this->y->redMul($this->z);
        $kZ = $kZ->redIAdd($kZ);
        return $this->curve->jpoint($HQ, $iy, $kZ);
    }
    private function _threeDbl()
    {
        if ($this->zOne) {
            goto g_;
        }
        $So = $this->z->redSqr();
        $TK = $this->y->redSqr();
        $DC = $this->x->redMul($TK);
        $eW = $this->x->redSub($So)->redMul($this->x->redAdd($So));
        $eW = $eW->redAdd($eW)->redIAdd($eW);
        $fp = $DC->redIAdd($DC);
        $fp = $fp->redIAdd($fp);
        $JA = $fp->redAdd($fp);
        $HQ = $eW->redSqr()->redISub($JA);
        $kZ = $this->y->redAdd($this->z)->redSqr()->redISub($TK)->redISub($So);
        $Jr = $TK->redSqr();
        $Jr = $Jr->redIAdd($Jr);
        $Jr = $Jr->redIAdd($Jr);
        $Jr = $Jr->redIAdd($Jr);
        $iy = $eW->redMul($fp->redISub($HQ))->redISub($Jr);
        goto Sv;
        g_:
        $vM = $this->x->redSqr();
        $hV = $this->y->redSqr();
        $JS = $hV->redSqr();
        $pU = $this->x->redAdd($hV)->redSqr()->redISub($vM)->redISub($JS);
        $pU = $pU->redIAdd($pU);
        $b2 = $vM->redAdd($vM)->redIAdd($vM)->redIAdd($this->curve->a);
        $tA = $b2->redSqr()->redISub($pU)->redISub($pU);
        $HQ = $tA;
        $w8 = $JS->redIAdd($JS);
        $w8 = $w8->redIAdd($w8);
        $w8 = $w8->redIAdd($w8);
        $iy = $b2->redMul($pU->redISub($tA))->redISub($w8);
        $kZ = $this->y->redAdd($this->y);
        Sv:
        return $this->curve->jpoint($HQ, $iy, $kZ);
    }
    private function _dbl()
    {
        $Ws = $this->x;
        $qj = $this->y;
        $oA = $this->z;
        $ip = $oA->redSqr()->redSqr();
        $uN = $Ws->redSqr();
        $pP = $qj->redSqr();
        $v7 = $uN->redAdd($uN)->redIAdd($uN)->redIAdd($this->curve->a->redMul($ip));
        $yV = $Ws->redAdd($Ws);
        $yV = $yV->redIAdd($yV);
        $Mk = $yV->redMul($pP);
        $HQ = $v7->redSqr()->redISub($Mk->redAdd($Mk));
        $H9 = $Mk->redISub($HQ);
        $iA = $pP->redSqr();
        $iA = $iA->redIAdd($iA);
        $iA = $iA->redIAdd($iA);
        $iA = $iA->redIAdd($iA);
        $iy = $v7->redMul($H9)->redISub($iA);
        $kZ = $qj->redAdd($qj)->redMul($oA);
        return $this->curve->jpoint($HQ, $iy, $kZ);
    }
    public function trpl()
    {
        if ($this->curve->zeroA) {
            goto LI;
        }
        return $this->dbl()->add($this);
        LI:
        $vM = $this->x->redSqr();
        $hV = $this->y->redSqr();
        $xT = $this->z->redSqr();
        $JS = $hV->redSqr();
        $b2 = $vM->redAdd($vM)->redIAdd($vM);
        $Px = $b2->redSqr();
        $Y3 = $this->x->redAdd($hV)->redSqr()->redISub($vM)->redISub($JS);
        $Y3 = $Y3->redIAdd($Y3);
        $Y3 = $Y3->redAdd($Y3)->redIAdd($Y3);
        $Y3 = $Y3->redISub($Px);
        $vz = $Y3->redSqr();
        $tA = $JS->redIAdd($JS);
        $tA = $tA->redIAdd($tA);
        $tA = $tA->redIAdd($tA);
        $tA = $tA->redIAdd($tA);
        $N9 = $b2->redAdd($Y3)->redSqr()->redISub($Px)->redISub($vz)->redISub($tA);
        $De = $hV->redMul($N9);
        $De = $De->redIAdd($De);
        $De = $De->redIAdd($De);
        $HQ = $this->x->redMul($vz)->redISub($De);
        $HQ = $HQ->redIAdd($HQ);
        $HQ = $HQ->redIAdd($HQ);
        $iy = $this->y->redMul($N9->redMul($tA->redISub($N9))->redISub($Y3->redMul($vz)));
        $iy = $iy->redIAdd($iy);
        $iy = $iy->redIAdd($iy);
        $iy = $iy->redIAdd($iy);
        $kZ = $this->z->redAdd($Y3)->redSqr()->redISub($xT)->redISub($vz);
        return $this->curve->jpoint($HQ, $iy, $kZ);
    }
    public function mul($Qs, $Bu)
    {
        return $this->curve->_wnafMul($this, new BN($Qs, $Bu));
    }
    public function eq($GM)
    {
        if (!($GM->type == "\x61\146\146\151\x6e\145")) {
            goto qM;
        }
        return $this->eq($GM->toJ());
        qM:
        if (!($this == $GM)) {
            goto wg;
        }
        return true;
        wg:
        $La = $this->z->redSqr();
        $F0 = $GM->z->redSqr();
        if ($this->x->redMul($F0)->redISub($GM->x->redMul($La))->isZero()) {
            goto iZ;
        }
        return false;
        iZ:
        $AR = $La->redMul($this->z);
        $kD = $F0->redMul($GM->z);
        return $this->y->redMul($kD)->redISub($GM->y->redMul($AR))->isZero();
    }
    public function eqXToP($c1)
    {
        $Yg = $this->z->redSqr();
        $QO = $c1->toRed($this->curve->red)->redMul($Yg);
        if (!($this->x->cmp($QO) == 0)) {
            goto NC;
        }
        return true;
        NC:
        $v_ = $c1->_clone();
        $tA = $this->curve->redN->redMul($Yg);
        J9:
        if (!true) {
            goto ml;
        }
        $v_->iadd($this->curve->n);
        if (!($v_->cmp($this->curve->p) >= 0)) {
            goto Km;
        }
        return false;
        Km:
        $QO->redIAdd($tA);
        if (!($this->x->cmp($QO) == 0)) {
            goto Rp;
        }
        return true;
        Rp:
        goto J9;
        ml:
    }
    public function inspect()
    {
        if (!$this->isInfinity()) {
            goto tQ;
        }
        return "\x3c\x45\103\x20\x4a\120\x6f\151\156\164\40\111\x6e\x66\151\156\151\x74\x79\76";
        tQ:
        return "\x3c\105\x43\40\112\120\157\x69\156\164\40\x78\x3a\40" . $this->x->toString(16, 2) . "\40\171\x3a\40" . $this->y->toString(16, 2) . "\40\x7a\x3a\40" . $this->z->toString(16, 2) . "\76";
    }
    public function __debugInfo()
    {
        return ["\105\x43\40\112\120\x6f\x69\156\164" => $this->isInfinity() ? "\x49\156\146\151\x6e\x69\x74\171" : ["\x78" => $this->x->toString(16, 2), "\x79" => $this->y->toString(16, 2), "\x7a" => $this->z->toString(16, 2)]];
    }
    public function isInfinity()
    {
        return $this->z->isZero();
    }
}
