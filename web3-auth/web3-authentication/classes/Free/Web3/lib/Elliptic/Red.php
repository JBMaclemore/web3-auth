<?php


namespace BN;

use Exception;
use BI\BigInteger;
class Red
{
    public $m;
    function __construct($b2)
    {
        if (is_string($b2)) {
            goto vI;
        }
        $this->m = $b2;
        goto OQ;
        vI:
        $this->m = Red::primeByName($b2);
        OQ:
        if ($this->m->gtn(1)) {
            goto Xd;
        }
        throw new Exception("\x4d\157\x64\x75\x6c\x75\x73\40\155\x75\163\164\40\x62\145\x20\x67\x72\145\x61\x74\x65\x72\40\x74\x68\141\x6e\40\61");
        Xd:
    }
    public static function primeByName($WW)
    {
        switch ($WW) {
            case "\153\62\x35\x36":
                return new BN("\146\146\146\x66\x66\146\x66\146\x20\146\x66\x66\x66\146\146\146\x66\40\146\146\146\x66\x66\146\146\146\40\146\146\x66\x66\146\146\x66\146\40\146\146\x66\x66\x66\146\146\x66\40\x66\x66\x66\146\x66\x66\146\146\x20\146\146\x66\146\146\146\146\145\40\x66\x66\146\x66\x66\x63\x32\146", 16);
            case "\x70\62\62\64":
                return new BN("\146\146\146\x66\146\x66\146\x66\40\x66\146\x66\146\x66\146\146\146\x20\x66\146\x66\146\146\x66\x66\146\40\146\x66\x66\x66\146\x66\146\x66\x20\60\60\60\x30\x30\60\x30\60\x20\60\x30\60\60\60\x30\x30\x30\40\60\x30\60\x30\x30\60\60\61", 16);
            case "\160\61\71\x32":
                return new BN("\146\146\146\146\146\x66\x66\x66\x20\x66\146\x66\x66\x66\x66\x66\x66\x20\146\146\x66\146\x66\x66\x66\146\x20\146\146\146\x66\x66\146\146\145\40\146\x66\x66\146\x66\x66\x66\146\x20\x66\146\146\146\x66\146\146\x66", 16);
            case "\160\x32\x35\65\61\71":
                return new BN("\67\146\146\146\x66\146\x66\146\x66\x66\146\x66\x66\x66\146\146\x20\146\146\x66\x66\x66\146\146\x66\146\146\x66\146\x66\146\146\x66\40\x66\x66\x66\x66\146\146\x66\146\146\146\146\146\146\x66\x66\146\x20\146\x66\146\x66\146\146\146\x66\x66\x66\146\146\x66\146\145\x64", 16);
            default:
                throw new Exception("\125\x6e\x6b\x6e\157\167\x6e\x20\160\162\151\155\145\x20\156\141\x6d\x65\x20" . $WW);
        }
        Fv:
        AB:
    }
    public function verify1(BN $I4)
    {
        if (!assert_options(ASSERT_ACTIVE)) {
            goto vv;
        }
        assert(!$I4->negative());
        vv:
        assert($I4->red);
    }
    public function verify2(BN $wT, BN $lf)
    {
        if (!assert_options(ASSERT_ACTIVE)) {
            goto iV;
        }
        assert(!$wT->negative() && !$lf->negative());
        iV:
        assert($wT->red && $wT->red == $lf->red);
    }
    public function imod(BN &$wT)
    {
        return $wT->umod($this->m)->_forceRed($this);
    }
    public function neg(BN $wT)
    {
        if (!$wT->isZero()) {
            goto tX;
        }
        return $wT->_clone();
        tX:
        return $this->m->sub($wT)->_forceRed($this);
    }
    public function add(BN $wT, BN $lf)
    {
        $this->verify2($wT, $lf);
        $Oq = $wT->add($lf);
        if (!($Oq->cmp($this->m) >= 0)) {
            goto rs;
        }
        $Oq->isub($this->m);
        rs:
        return $Oq->_forceRed($this);
    }
    public function iadd(BN &$wT, BN $lf)
    {
        $this->verify2($wT, $lf);
        $wT->iadd($lf);
        if (!($wT->cmp($this->m) >= 0)) {
            goto Gb;
        }
        $wT->isub($this->m);
        Gb:
        return $wT;
    }
    public function sub(BN $wT, BN $lf)
    {
        $this->verify2($wT, $lf);
        $Oq = $wT->sub($lf);
        if (!$Oq->negative()) {
            goto QT;
        }
        $Oq->iadd($this->m);
        QT:
        return $Oq->_forceRed($this);
    }
    public function isub(BN &$wT, $lf)
    {
        $this->verify2($wT, $lf);
        $wT->isub($lf);
        if (!$wT->negative()) {
            goto Jd;
        }
        $wT->iadd($this->m);
        Jd:
        return $wT;
    }
    public function shl(BN $wT, $I4)
    {
        $this->verify1($wT);
        return $this->imod($wT->ushln($I4));
    }
    public function imul(BN &$wT, BN $lf)
    {
        $this->verify2($wT, $lf);
        $Oq = $wT->imul($lf);
        return $this->imod($Oq);
    }
    public function mul(BN $wT, BN $lf)
    {
        $this->verify2($wT, $lf);
        $Oq = $wT->mul($lf);
        return $this->imod($Oq);
    }
    public function sqr(BN $wT)
    {
        $Oq = $wT->_clone();
        return $this->imul($Oq, $wT);
    }
    public function isqr(BN &$wT)
    {
        return $this->imul($wT, $wT);
    }
    public function sqrt(BN $wT)
    {
        if (!$wT->isZero()) {
            goto Gg;
        }
        return $wT->_clone();
        Gg:
        $Km = $this->m->andln(3);
        assert($Km % 2 == 1);
        if (!($Km == 3)) {
            goto xs;
        }
        $L1 = $this->m->add(new BN(1))->iushrn(2);
        return $this->pow($wT, $L1);
        xs:
        $kC = $this->m->subn(1);
        $pU = 0;
        N9:
        if (!(!$kC->isZero() && $kC->andln(1) == 0)) {
            goto jU;
        }
        $pU++;
        $kC->iushrn(1);
        goto N9;
        jU:
        if (!assert_options(ASSERT_ACTIVE)) {
            goto zN;
        }
        assert(!$kC->isZero());
        zN:
        $h0 = (new BN(1))->toRed($this);
        $Ig = $h0->redNeg();
        $FG = $this->m->subn(1)->iushrn(1);
        $Fr = $this->m->bitLength();
        $Fr = (new BN(2 * $Fr * $Fr))->toRed($this);
        A8:
        if (!($this->pow($Fr, $FG)->cmp($Ig) != 0)) {
            goto Uy;
        }
        $Fr->redIAdd($Ig);
        goto A8;
        Uy:
        $v7 = $this->pow($Fr, $kC);
        $YU = $this->pow($wT, $kC->addn(1)->iushrn(1));
        $tA = $this->pow($wT, $kC);
        $b2 = $pU;
        FG:
        if (!($tA->cmp($h0) != 0)) {
            goto eY;
        }
        $mw = $tA;
        $AQ = 0;
        OO:
        if (!($mw->cmp($h0) != 0)) {
            goto ou;
        }
        $mw = $mw->redSqr();
        v6:
        $AQ++;
        goto OO;
        ou:
        if (!($AQ >= $b2)) {
            goto Ee;
        }
        throw new \Exception("\101\x73\163\x65\162\164\x69\157\156\x20\146\141\x69\154\145\144");
        Ee:
        if ($b2 - $AQ - 1 > 54) {
            goto R0;
        }
        $lf = clone $v7;
        $lf->bi = $v7->bi->powMod(1 << $b2 - $AQ - 1, $this->m->bi);
        goto L6;
        R0:
        $lf = $this->pow($v7, (new BN(1))->iushln($b2 - $AQ - 1));
        L6:
        $YU = $YU->redMul($lf);
        $v7 = $lf->redSqr();
        $tA = $tA->redMul($v7);
        $b2 = $AQ;
        goto FG;
        eY:
        return $YU;
    }
    public function invm(BN &$wT)
    {
        $Oq = $wT->invm($this->m);
        return $this->imod($Oq);
    }
    public function pow(BN $wT, BN $I4)
    {
        $YU = clone $wT;
        $YU->bi = $wT->bi->powMod($I4->bi, $this->m->bi);
        return $YU;
    }
    public function convertTo(BN $I4)
    {
        $YU = $I4->umod($this->m);
        return $YU === $I4 ? $YU->_clone() : $YU;
    }
    public function convertFrom(BN $I4)
    {
        $Oq = $I4->_clone();
        $Oq->red = null;
        return $Oq;
    }
}
