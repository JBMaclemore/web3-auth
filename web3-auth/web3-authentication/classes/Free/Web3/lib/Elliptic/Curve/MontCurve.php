<?php


namespace Elliptic\Curve;

require_once "\x4d\x6f\156\x74\103\165\x72\166\x65\57\x50\157\151\156\164\x2e\x70\150\160";
use Elliptic\Curve\MontCurve\Point;
use Elliptic\Utils;
use BN\BN;
class MontCurve extends BaseCurve
{
    public $a;
    public $b;
    public $i4;
    public $a24;
    function __construct($Mm)
    {
        parent::__construct("\x6d\157\156\164", $Mm);
        $this->a = (new BN($Mm["\141"], 16))->toRed($this->red);
        $this->b = (new BN($Mm["\142"], 16))->toRed($this->red);
        $this->i4 = (new BN(4))->toRed($this->red)->redInvm();
        $this->a24 = $this->i4->redMul($this->a->redAdd($this->two));
    }
    public function validate($Qm)
    {
        $c1 = $Qm->normalize()->x;
        $Ro = $c1->redSqr();
        $IN = $Ro->redMul($c1)->redAdd($Ro->redMul($this->a))->redAdd($c1);
        $Zp = $IN->redSqr();
        return $Zp->redSqr()->cmp($IN) === 0;
    }
    public function decodePoint($XC, $dB = false)
    {
        return $this->point(Utils::toArray($XC, $dB), 1);
    }
    public function point($c1, $Fr)
    {
        return new Point($this, $c1, $Fr);
    }
    public function pointFromJSON($nW)
    {
        return Point::fromJSON($this, $nW);
    }
}
