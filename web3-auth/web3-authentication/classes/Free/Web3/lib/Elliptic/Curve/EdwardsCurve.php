<?php


namespace Elliptic\Curve;

require_once "\105\x64\167\x61\162\144\x73\103\x75\162\x76\145\57\x50\x6f\x69\x6e\x74\56\160\150\160";
use Elliptic\Curve\EdwardsCurve\Point;
use BN\BN;
class EdwardsCurve extends BaseCurve
{
    public $twisted;
    public $mOneA;
    public $extended;
    public $a;
    public $c;
    public $c2;
    public $d;
    public $d2;
    public $dd;
    public $oneC;
    function __construct($Mm)
    {
        $this->twisted = ($Mm["\x61"] | 0) != 1;
        $this->mOneA = $this->twisted && ($Mm["\141"] | 0) == -1;
        $this->extended = $this->mOneA;
        parent::__construct("\145\x64\167\141\x72\144", $Mm);
        $this->a = (new BN($Mm["\x61"], 16))->umod($this->red->m);
        $this->a = $this->a->toRed($this->red);
        $this->c = (new BN($Mm["\x63"], 16))->toRed($this->red);
        $this->c2 = $this->c->redSqr();
        $this->d = (new BN($Mm["\144"], 16))->toRed($this->red);
        $this->dd = $this->d->redAdd($this->d);
        if (!assert_options(ASSERT_ACTIVE)) {
            goto M9;
        }
        assert(!$this->twisted || $this->c->fromRed()->cmpn(1) == 0);
        M9:
        $this->oneC = ($Mm["\x63"] | 0) == 1;
    }
    public function _mulA($I4)
    {
        if ($this->mOneA) {
            goto jE;
        }
        return $this->a->redMul($I4);
        goto JZ;
        jE:
        return $I4->redNeg();
        JZ:
    }
    public function _mulC($I4)
    {
        if ($this->oneC) {
            goto NK;
        }
        return $this->c->redMul($I4);
        goto h8;
        NK:
        return $I4;
        h8:
    }
    public function jpoint($c1, $Zp, $Fr, $tA = null)
    {
        return $this->point($c1, $Zp, $Fr, $tA);
    }
    public function pointFromX($c1, $cg = false)
    {
        $c1 = new BN($c1, 16);
        if ($c1->red) {
            goto Ma;
        }
        $c1 = $c1->toRed($this->red);
        Ma:
        $Ro = $c1->redSqr();
        $IN = $this->c2->redSub($this->a->redMul($Ro));
        $Qf = $this->one->redSub($this->c2->redMul($this->d)->redMul($Ro));
        $qf = $IN->redMul($Qf->redInvm());
        $Zp = $qf->redSqrt();
        if (!($Zp->redSqr()->redSub($qf)->cmp($this->zero) != 0)) {
            goto PF;
        }
        throw new \Exception("\151\x6e\x76\x61\154\x69\144\x20\x70\x6f\151\x6e\x74");
        PF:
        $HT = $Zp->fromRed()->isOdd();
        if (!($cg && !$HT || !$cg && $HT)) {
            goto et;
        }
        $Zp = $Zp->redNeg();
        et:
        return $this->point($c1, $Zp);
    }
    public function pointFromY($Zp, $cg = false)
    {
        $Zp = new BN($Zp, 16);
        if ($Zp->red) {
            goto RD;
        }
        $Zp = $Zp->toRed($this->red);
        RD:
        $qf = $Zp->redSqr();
        $Qf = $qf->redSub($this->one);
        $IN = $qf->redMul($this->d)->redAdd($this->one);
        $Ro = $Qf->redMul($IN->redInvm());
        if (!($Ro->cmp($this->zero) == 0)) {
            goto gI;
        }
        if ($cg) {
            goto cD;
        }
        return $this->point($this->zero, $Zp);
        goto Ta;
        cD:
        throw new \Exception("\151\x6e\x76\x61\x6c\151\144\x20\x70\157\x69\x6e\x74");
        Ta:
        gI:
        $c1 = $Ro->redSqrt();
        if (!($c1->redSqr()->redSub($Ro)->cmp($this->zero) != 0)) {
            goto hd;
        }
        throw new \Exception("\x69\x6e\166\x61\x6c\x69\144\x20\160\157\x69\156\164");
        hd:
        if (!($c1->isOdd() != $cg)) {
            goto wa;
        }
        $c1 = $c1->redNeg();
        wa:
        return $this->point($c1, $Zp);
    }
    public function validate($Qm)
    {
        if (!$Qm->isInfinity()) {
            goto ZJ;
        }
        return true;
        ZJ:
        $Qm->normalize();
        $Ro = $Qm->x->redSqr();
        $qf = $Qm->y->redSqr();
        $Qf = $Ro->redMul($this->a)->redAdd($qf);
        $IN = $this->c2->redMul($this->one->redAdd($this->d->redMul($Ro)->redMul($qf)));
        return $Qf->cmp($IN) == 0;
    }
    public function pointFromJSON($nW)
    {
        return Point::fromJSON($this, $nW);
    }
    public function point($c1 = null, $Zp = null, $Fr = null, $tA = null)
    {
        return new Point($this, $c1, $Zp, $Fr, $tA);
    }
}
