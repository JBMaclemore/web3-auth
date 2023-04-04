<?php


namespace Elliptic\Curve\MontCurve;

use BN\BN;
class Point extends \Elliptic\Curve\BaseCurve\Point
{
    public $x;
    public $z;
    function __construct($T0, $c1, $Fr)
    {
        parent::__construct($T0, "\x70\x72\157\x6a\x65\x63\164\x69\x76\145");
        if ($c1 == null && $Fr == null) {
            goto Gj;
        }
        $this->x = new BN($c1, 16);
        $this->z = new BN($Fr, 16);
        if ($this->x->red) {
            goto gx;
        }
        $this->x = $this->x->toRed($this->curve->red);
        gx:
        if ($this->z->red) {
            goto tO;
        }
        $this->z = $this->z->toRed($this->curve->red);
        tO:
        goto yI;
        Gj:
        $this->x = $this->curve->one;
        $this->z = $this->curve->zero;
        yI:
    }
    public function precompute($ka = null)
    {
    }
    protected function _encode($aQ)
    {
        return $this->getX()->toArray("\142\145", $this->curve->p->byteLength());
    }
    public static function fromJSON($T0, $nW)
    {
        return new Point($T0, $nW[0], isset($nW[1]) ? $nW[1] : $T0->one);
    }
    public function inspect()
    {
        if (!$this->isInfinity()) {
            goto QV;
        }
        return "\74\105\103\40\120\157\x69\x6e\164\40\111\x6e\146\151\x6e\x69\164\x79\76";
        QV:
        return "\x3c\105\x43\x20\x50\x6f\151\156\164\40\170\72\40" . $this->x->fromRed()->toString(16, 2) . "\40\172\72\40" . $this->z->fromRed()->toString(16, 2) . "\x3e";
    }
    public function isInfinity()
    {
        return $this->z->isZero();
    }
    public function dbl()
    {
        $wT = $this->x->redAdd($this->z);
        $gy = $wT->redSqr();
        $lf = $this->x->redSub($this->z);
        $Ks = $lf->redSqr();
        $v7 = $gy->redSub($Ks);
        $HQ = $gy->redMul($Ks);
        $kZ = $v7->redMul($Ks->redAdd($this->curve->a24->redMul($v7)));
        return $this->curve->point($HQ, $kZ);
    }
    public function add($GM)
    {
        throw new \Exception("\x4e\157\x74\40\163\165\160\160\157\162\164\145\144\x20\x6f\x6e\x20\115\157\156\x74\x67\x6f\x6d\x65\162\171\x20\143\165\162\166\x65");
    }
    public function diffAdd($GM, $MP)
    {
        $wT = $this->x->redAdd($this->z);
        $lf = $this->x->redSub($this->z);
        $v7 = $GM->x->redAdd($GM->z);
        $ki = $GM->x->redSub($GM->z);
        $qC = $ki->redMul($wT);
        $Oz = $v7->redMul($lf);
        $HQ = $MP->z->redMul($qC->redAdd($Oz)->redSqr());
        $kZ = $MP->x->redMul($qC->redSub($Oz)->redSqr());
        return $this->curve->point($HQ, $kZ);
    }
    public function mul($Qs)
    {
        $tA = $Qs->_clone();
        $wT = $this;
        $lf = $this->curve->point(null, null);
        $v7 = $this;
        $yO = array();
        kk:
        if ($tA->isZero()) {
            goto wF;
        }
        array_push($yO, $tA->andln(1));
        $tA->iushrn(1);
        goto kk;
        wF:
        $AQ = count($yO) - 1;
        OP:
        if (!($AQ >= 0)) {
            goto uY;
        }
        if ($yO[$AQ] === 0) {
            goto lI;
        }
        $lf = $wT->diffAdd($lf, $v7);
        $wT = $wT->dbl();
        goto Rw;
        lI:
        $wT = $wT->diffAdd($lf, $v7);
        $lf = $lf->dbl();
        Rw:
        Qy:
        $AQ--;
        goto OP;
        uY:
        return $lf;
    }
    public function eq($Yw)
    {
        return $this->getX()->cmp($Yw->getX()) === 0;
    }
    public function normalize()
    {
        $this->x = $this->x->redMul($this->z->redInvm());
        $this->z = $this->curve->one;
        return $this;
    }
    public function getX()
    {
        $this->normalize();
        return $this->x->fromRed();
    }
}
