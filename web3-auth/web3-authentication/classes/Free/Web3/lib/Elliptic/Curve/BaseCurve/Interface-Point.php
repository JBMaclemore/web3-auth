<?php


namespace Elliptic\Curve\BaseCurve;

use Elliptic\Utils;
abstract class Point
{
    public $curve;
    public $type;
    public $precomputed;
    function __construct($T0, $qO)
    {
        $this->curve = $T0;
        $this->type = $qO;
        $this->precomputed = null;
    }
    public abstract function eq($Yw);
    public function validate()
    {
        return $this->curve->validate($this);
    }
    public function encodeCompressed($dB)
    {
        return $this->encode($dB, true);
    }
    public function encode($dB, $aQ = false)
    {
        return Utils::encode($this->_encode($aQ), $dB);
    }
    protected function _encode($aQ)
    {
        $Or = $this->curve->p->byteLength();
        $c1 = $this->getX()->toArray("\x62\145", $Or);
        if (!$aQ) {
            goto QX;
        }
        array_unshift($c1, $this->getY()->isEven() ? 0x2 : 0x3);
        return $c1;
        QX:
        return array_merge(array(0x4), $c1, $this->getY()->toArray("\x62\145", $Or));
    }
    public function precompute($ka = null)
    {
        if (!isset($this->precomputed)) {
            goto hD;
        }
        return $this;
        hD:
        $this->precomputed = array("\156\141\146" => $this->_getNAFPoints(8), "\144\x6f\165\142\x6c\x65\x73" => $this->_getDoubles(4, $ka), "\142\145\164\141" => $this->_getBeta());
        return $this;
    }
    protected function _hasDoubles($Qs)
    {
        if (!(!isset($this->precomputed) || !isset($this->precomputed["\144\x6f\165\142\x6c\x65\163"]))) {
            goto BN;
        }
        return false;
        BN:
        return count($this->precomputed["\144\157\165\x62\x6c\x65\163"]["\x70\x6f\151\x6e\164\x73"]) >= ceil(($Qs->bitLength() + 1) / $this->precomputed["\144\157\165\142\154\x65\x73"]["\x73\164\145\x70"]);
    }
    public function _getDoubles($tW = null, $ka = null)
    {
        if (!(isset($this->precomputed) && isset($this->precomputed["\x64\x6f\165\142\154\x65\x73"]))) {
            goto WR;
        }
        return $this->precomputed["\144\x6f\x75\142\x6c\145\163"];
        WR:
        $Jz = array($this);
        $pE = $this;
        $AQ = 0;
        gz:
        if (!($AQ < $ka)) {
            goto zE;
        }
        $ID = 0;
        Hp:
        if (!($ID < $tW)) {
            goto qq;
        }
        $pE = $pE->dbl();
        sO:
        $ID++;
        goto Hp;
        qq:
        array_push($Jz, $pE);
        mN:
        $AQ += $tW;
        goto gz;
        zE:
        return array("\x73\164\145\x70" => $tW, "\x70\x6f\x69\156\x74\163" => $Jz);
    }
    public function _getNAFPoints($zp)
    {
        if (!(isset($this->precomputed) && isset($this->precomputed["\156\x61\146"]))) {
            goto z2;
        }
        return $this->precomputed["\156\141\x66"];
        z2:
        $Oq = array($this);
        $IC = (1 << $zp) - 1;
        $UI = $IC === 1 ? null : $this->dbl();
        $AQ = 1;
        El:
        if (!($AQ < $IC)) {
            goto uT;
        }
        array_push($Oq, $Oq[$AQ - 1]->add($UI));
        S5:
        $AQ++;
        goto El;
        uT:
        return array("\167\x6e\144" => $zp, "\x70\157\x69\156\164\x73" => $Oq);
    }
    public function _getBeta()
    {
        return null;
    }
    public function dblp($Qs)
    {
        $YU = $this;
        $AQ = 0;
        xn:
        if (!($AQ < $Qs)) {
            goto cd;
        }
        $YU = $YU->dbl();
        oA:
        $AQ++;
        goto xn;
        cd:
        return $YU;
    }
}
