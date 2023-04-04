<?php


namespace Elliptic\Curve;

require_once "\x49\x6e\x74\x65\162\x66\141\143\x65\x2d\x42\141\x73\145\103\165\x72\166\x65\x2e\x70\150\160";
require_once "\x42\141\x73\x65\103\165\x72\x76\145\x2f\111\x6e\x74\145\x72\146\x61\143\145\x2d\120\x6f\151\x6e\x74\56\160\x68\x70";
require_once "\123\150\157\162\164\x43\165\x72\x76\x65\57\x50\157\x69\156\164\x2e\x70\150\x70";
require_once "\x53\x68\x6f\162\164\103\x75\x72\x76\x65\57\x4a\120\157\x69\156\x74\56\160\x68\160";
use Elliptic\Curve\ShortCurve\Point;
use Elliptic\Curve\ShortCurve\JPoint;
use BN\BN;
use Exception;
class ShortCurve extends BaseCurve
{
    public $a;
    public $b;
    public $tinv;
    public $zeroA;
    public $threeA;
    public $endo;
    private $_endoWnafT1;
    private $_endoWnafT2;
    function __construct($Mm)
    {
        parent::__construct("\x73\150\x6f\162\164", $Mm);
        $this->a = (new BN($Mm["\141"], 16))->toRed($this->red);
        $this->b = (new BN($Mm["\142"], 16))->toRed($this->red);
        $this->tinv = $this->two->redInvm();
        $this->zeroA = $this->a->fromRed()->isZero();
        $this->threeA = $this->a->fromRed()->sub($this->p)->cmpn(-3) === 0;
        $this->endo = $this->_getEndomorphism($Mm);
        $this->_endoWnafT1 = array(0, 0, 0, 0);
        $this->_endoWnafT2 = array(0, 0, 0, 0);
    }
    private function _getEndomorphism($Mm)
    {
        if (!(!$this->zeroA || !isset($this->g) || !isset($this->n) || $this->p->modn(3) != 1)) {
            goto lh;
        }
        return null;
        lh:
        $DC = null;
        $xQ = null;
        if (isset($Mm["\142\145\x74\x61"])) {
            goto uh;
        }
        $LB = $this->_getEndoRoots($this->p);
        $DC = $LB[0]->cmp($LB[1]) < 0 ? $LB[0] : $LB[1];
        $DC = $DC->toRed($this->red);
        goto iQ;
        uh:
        $DC = (new BN($Mm["\142\x65\x74\141"], 16))->toRed($this->red);
        iQ:
        if (isset($Mm["\x6c\x61\155\x62\144\141"])) {
            goto Pl;
        }
        $Yd = $this->_getEndoRoots($this->n);
        if ($this->g->mul($Yd[0])->x->cmp($this->g->x->redMul($DC)) == 0) {
            goto QR;
        }
        $xQ = $Yd[1];
        if (!assert_options(ASSERT_ACTIVE)) {
            goto xq;
        }
        assert($this->g->mul($xQ)->x->cmp($this->g->x->redMul($DC)) === 0);
        xq:
        goto Jg;
        QR:
        $xQ = $Yd[0];
        Jg:
        goto rq;
        Pl:
        $xQ = new BN($Mm["\x6c\x61\x6d\142\x64\141"], 16);
        rq:
        $JE = null;
        if (!isset($Mm["\x62\141\x73\151\163"])) {
            goto GW;
        }
        $Lp = function ($c4) {
            return array("\x61" => new BN($c4["\x61"], 16), "\x62" => new BN($c4["\x62"], 16));
        };
        $JE = array_map($Lp, $Mm["\142\141\x73\151\x73"]);
        goto lW;
        GW:
        $JE = $this->_getEndoBasis($xQ);
        lW:
        return array("\x62\145\x74\141" => $DC, "\154\141\155\x62\x64\x61" => $xQ, "\142\x61\163\151\x73" => $JE);
    }
    private function _getEndoRoots($I4)
    {
        $fg = $I4 === $this->p ? $this->red : BN::mont($I4);
        $fj = (new BN(2))->toRed($fg)->redInvm();
        $Td = $fj->redNeg();
        $pU = (new BN(3))->toRed($fg)->redNeg()->redSqrt()->redMul($fj);
        return array($Td->redAdd($pU)->fromRed(), $Td->redSub($pU)->fromRed());
    }
    private function _getEndoBasis($xQ)
    {
        $BI = $this->n->ushrn(intval($this->n->bitLength() / 2));
        $N9 = $xQ;
        $PR = $this->n->_clone();
        $N8 = new BN(1);
        $BK = new BN(0);
        $Ro = new BN(0);
        $qf = new BN(1);
        $z4 = 0;
        $RC = 0;
        $Ir = 0;
        $FJ = 0;
        $le = 0;
        $VT = 0;
        $jj = 0;
        $AQ = 0;
        $YU = 0;
        $c1 = 0;
        P_:
        if ($N9->isZero()) {
            goto mY;
        }
        $kC = $PR->div($N9);
        $YU = $PR->sub($kC->mul($N9));
        $c1 = $Ro->sub($kC->mul($N8));
        $Zp = $qf->sub($kC->mul($qf));
        if (!$Ir && $YU->cmp($BI) < 0) {
            goto pV;
        }
        if ($Ir && ++$AQ === 2) {
            goto e7;
        }
        goto iJ;
        pV:
        $z4 = $jj->neg();
        $RC = $N8;
        $Ir = $YU->neg();
        $FJ = $c1;
        goto iJ;
        e7:
        goto mY;
        iJ:
        $jj = $YU;
        $PR = $N9;
        $N9 = $YU;
        $Ro = $N8;
        $N8 = $c1;
        $qf = $BK;
        $BK = $Zp;
        goto P_;
        mY:
        $le = $YU->neg();
        $VT = $c1;
        $sO = $Ir->sqr()->add($FJ->sqr());
        $oL = $le->sqr()->add($VT->sqr());
        if (!($oL->cmp($sO) >= 0)) {
            goto qb;
        }
        $le = $z4;
        $VT = $RC;
        qb:
        if (!$Ir->negative()) {
            goto wj;
        }
        $Ir = $Ir->neg();
        $FJ = $FJ->neg();
        wj:
        if (!$le->negative()) {
            goto gq;
        }
        $le = $le->neg();
        $VT = $VT->neg();
        gq:
        return array(array("\141" => $Ir, "\x62" => $FJ), array("\x61" => $le, "\x62" => $VT));
    }
    public function _endoSplit($Qs)
    {
        $JE = $this->endo["\142\x61\163\151\x73"];
        $x9 = $JE[0];
        $jv = $JE[1];
        $ZD = $jv["\x62"]->mul($Qs)->divRound($this->n);
        $vt = $x9["\x62"]->neg()->mul($Qs)->divRound($this->n);
        $bH = $ZD->mul($x9["\x61"]);
        $db = $vt->mul($jv["\141"]);
        $EI = $ZD->mul($x9["\142"]);
        $jb = $vt->mul($jv["\142"]);
        $Pz = $Qs->sub($bH)->sub($db);
        $Pt = $EI->add($jb)->neg();
        return array("\x6b\61" => $Pz, "\153\x32" => $Pt);
    }
    public function pointFromX($c1, $cg)
    {
        $c1 = new BN($c1, 16);
        if ($c1->red) {
            goto UG;
        }
        $c1 = $c1->toRed($this->red);
        UG:
        $qf = $c1->redSqr()->redMul($c1)->redIAdd($c1->redMul($this->a))->redIAdd($this->b);
        $Zp = $qf->redSqrt();
        if (!($Zp->redSqr()->redSub($qf)->cmp($this->zero) !== 0)) {
            goto gV;
        }
        throw new Exception("\x49\156\166\141\x6c\151\144\40\x70\x6f\151\156\x74");
        gV:
        $HT = $Zp->fromRed()->isOdd();
        if (!($cg != $HT)) {
            goto G0;
        }
        $Zp = $Zp->redNeg();
        G0:
        return $this->point($c1, $Zp);
    }
    public function validate($Qm)
    {
        if (!$Qm->inf) {
            goto rS;
        }
        return true;
        rS:
        $c1 = $Qm->x;
        $Zp = $Qm->y;
        $ZB = $this->a->redMul($c1);
        $IN = $c1->redSqr()->redMul($c1)->redIAdd($ZB)->redIAdd($this->b);
        return $Zp->redSqr()->redISub($IN)->isZero();
    }
    public function _endoWnafMulAdd($Yb, $EX, $fa = false)
    {
        $f3 =& $this->_endoWnafT1;
        $xb =& $this->_endoWnafT2;
        $AQ = 0;
        kO:
        if (!($AQ < count($Yb))) {
            goto Gi;
        }
        $GT = $this->_endoSplit($EX[$AQ]);
        $GM = $Yb[$AQ];
        $DC = $GM->_getBeta();
        if (!$GT["\153\61"]->negative()) {
            goto SJ;
        }
        $GT["\153\x31"]->ineg();
        $GM = $GM->neg(true);
        SJ:
        if (!$GT["\x6b\62"]->negative()) {
            goto lQ;
        }
        $GT["\x6b\62"]->ineg();
        $DC = $DC->neg(true);
        lQ:
        $f3[$AQ * 2] = $GM;
        $f3[$AQ * 2 + 1] = $DC;
        $xb[$AQ * 2] = $GT["\x6b\61"];
        $xb[$AQ * 2 + 1] = $GT["\153\62"];
        KI:
        $AQ++;
        goto kO;
        Gi:
        $Oq = $this->_wnafMulAdd(1, $f3, $xb, $AQ * 2, $fa);
        $ID = 0;
        is:
        if (!($ID < 2 * $AQ)) {
            goto xH;
        }
        $f3[$ID] = null;
        $xb[$ID] = null;
        UK:
        $ID++;
        goto is;
        xH:
        return $Oq;
    }
    public function point($c1, $Zp, $DP = false)
    {
        return new Point($this, $c1, $Zp, $DP);
    }
    public function pointFromJSON($nW, $fg)
    {
        return Point::fromJSON($this, $nW, $fg);
    }
    public function jpoint($c1, $Zp, $Fr)
    {
        return new JPoint($this, $c1, $Zp, $Fr);
    }
}
