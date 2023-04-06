<?php


namespace Elliptic;

require_once "\x4b\x65\171\x50\141\151\162\56\x70\x68\x70";
require_once "\x53\x69\147\x6e\141\x74\x75\162\145\56\160\x68\160";
require_once "\102\116\x2e\160\x68\160";
use Elliptic\Curve\PresetCurve;
use Elliptic\EC\KeyPair;
use Elliptic\EC\Signature;
use BN\BN;
class EC
{
    public $curve;
    public $n;
    public $nh;
    public $g;
    public $hash;
    function __construct($ts)
    {
        if (!is_string($ts)) {
            goto BP;
        }
        $ts = Curves::getCurve($ts);
        BP:
        if (!$ts instanceof PresetCurve) {
            goto vw;
        }
        $ts = array("\x63\165\162\x76\145" => $ts);
        vw:
        $this->curve = $ts["\x63\165\162\x76\145"]->curve;
        $this->n = $this->curve->n;
        $this->nh = $this->n->ushrn(1);
        $this->g = $ts["\x63\x75\162\x76\145"]->g;
        $this->g->precompute($ts["\143\x75\162\166\x65"]->n->bitLength() + 1);
        if (isset($ts["\150\141\x73\150"])) {
            goto FI;
        }
        $this->hash = $ts["\x63\165\162\166\145"]->hash;
        goto W0;
        FI:
        $this->hash = $ts["\150\x61\163\150"];
        W0:
    }
    public function keyPair($ts)
    {
        return new KeyPair($this, $ts);
    }
    public function keyFromPrivate($gt, $dB = false)
    {
        return KeyPair::fromPrivate($this, $gt, $dB);
    }
    public function keyFromPublic($RS, $dB = false)
    {
        return KeyPair::fromPublic($this, $RS, $dB);
    }
    public function genKeyPair($ts = null)
    {
        $Sv = new HmacDRBG(array("\x68\141\163\x68" => $this->hash, "\160\145\x72\x73" => isset($ts["\160\145\162\x73"]) ? $ts["\160\145\162\163"] : '', "\145\156\164\162\x6f\160\171" => isset($ts["\145\x6e\x74\162\x6f\160\171"]) ? $ts["\145\x6e\164\162\157\160\171"] : Utils::randBytes($this->hash["\x68\x6d\x61\x63\x53\x74\x72\x65\x6e\147\x74\x68"]), "\x6e\157\x6e\x63\145" => $this->n->toArray()));
        $XC = $this->n->byteLength();
        $Lx = $this->n->sub(new BN(2));
        IT:
        if (!true) {
            goto Os;
        }
        $gt = new BN($Sv->generate($XC));
        if (!($gt->cmp($Lx) > 0)) {
            goto XH;
        }
        goto IT;
        XH:
        $gt->iaddn(1);
        return $this->keyFromPrivate($gt);
        goto IT;
        Os:
    }
    private function _truncateToN($TY, $Ny = false)
    {
        $So = intval($TY->byteLength() * 8 - $this->n->bitLength());
        if (!($So > 0)) {
            goto js;
        }
        $TY = $TY->ushrn($So);
        js:
        if (!($Ny || $TY->cmp($this->n) < 0)) {
            goto KZ;
        }
        return $TY;
        KZ:
        return $TY->sub($this->n);
    }
    public function sign($TY, $Ky, $dB = null, $ts = null)
    {
        if (is_string($dB)) {
            goto ZZ;
        }
        $ts = $dB;
        $dB = null;
        ZZ:
        $Ky = $this->keyFromPrivate($Ky, $dB);
        $TY = $this->_truncateToN(new BN($TY, 16));
        $XC = $this->n->byteLength();
        $Ui = $Ky->getPrivate()->toArray("\x62\145", $XC);
        $j1 = $TY->toArray("\142\x65", $XC);
        $pG = null;
        if (isset($ts["\153"])) {
            goto Lf;
        }
        $Sv = new HmacDRBG(array("\x68\141\x73\150" => $this->hash, "\x65\x6e\164\x72\x6f\160\x79" => $Ui, "\156\157\156\143\145" => $j1, "\x70\145\162\163" => isset($ts["\x70\145\162\163"]) ? $ts["\x70\145\162\x73"] : '', "\160\145\x72\x73\x45\156\143" => isset($ts["\x70\145\x72\x73\105\x6e\143"]) ? $ts["\160\145\162\163\x45\x6e\143"] : false));
        $pG = function ($LT) use($Sv, $XC) {
            return new BN($Sv->generate($XC));
        };
        goto CG;
        Lf:
        $pG = $ts["\x6b"];
        CG:
        $fu = $this->n->sub(new BN(1));
        $Bt = isset($ts["\143\141\x6e\x6f\x6e\151\143\141\x6c"]) ? $ts["\x63\x61\156\157\156\x69\143\x61\154"] : false;
        $LT = 0;
        jN:
        if (!true) {
            goto ey;
        }
        $Qs = $pG($LT);
        $Qs = $this->_truncateToN($Qs, true);
        if (!($Qs->cmpn(1) <= 0 || $Qs->cmp($fu) >= 0)) {
            goto cL;
        }
        goto Iy;
        cL:
        $eO = $this->g->mul($Qs);
        if (!$eO->isInfinity()) {
            goto PL;
        }
        goto Iy;
        PL:
        $Sg = $eO->getX();
        $YU = $Sg->umod($this->n);
        if (!$YU->isZero()) {
            goto Va;
        }
        goto Iy;
        Va:
        $pU = $Qs->invm($this->n)->mul($YU->mul($Ky->getPrivate())->iadd($TY));
        $pU = $pU->umod($this->n);
        if (!$pU->isZero()) {
            goto DZ;
        }
        goto Iy;
        DZ:
        $aA = ($eO->getY()->isOdd() ? 1 : 0) | ($Sg->cmp($YU) !== 0 ? 2 : 0);
        if (!($Bt && $pU->cmp($this->nh) > 0)) {
            goto Cw;
        }
        $pU = $this->n->sub($pU);
        $aA ^= 1;
        Cw:
        return new Signature(array("\x72" => $YU, "\163" => $pU, "\x72\145\143\157\x76\145\x72\x79\120\141\x72\x61\x6d" => $aA));
        Iy:
        $LT++;
        goto jN;
        ey:
    }
    public function verify($TY, $ed, $Ky, $dB = false)
    {
        $TY = $this->_truncateToN(new BN($TY, 16));
        $Ky = $this->keyFromPublic($Ky, $dB);
        $ed = new Signature($ed, "\150\145\x78");
        $YU = $ed->r;
        $pU = $ed->s;
        if (!($YU->cmpn(1) < 0 || $YU->cmp($this->n) >= 0)) {
            goto gu;
        }
        return false;
        gu:
        if (!($pU->cmpn(1) < 0 || $pU->cmp($this->n) >= 0)) {
            goto ii;
        }
        return false;
        ii:
        $Wh = $pU->invm($this->n);
        $lZ = $Wh->mul($TY)->umod($this->n);
        $zA = $Wh->mul($YU)->umod($this->n);
        if ($this->curve->_maxwellTrick) {
            goto Yx;
        }
        $GM = $this->g->mulAdd($lZ, $Ky->getPublic(), $zA);
        if (!$GM->isInfinity()) {
            goto ui;
        }
        return false;
        ui:
        return $GM->getX()->umod($this->n)->cmp($YU) === 0;
        Yx:
        $GM = $this->g->jmulAdd($lZ, $Ky->getPublic(), $zA);
        if (!$GM->isInfinity()) {
            goto gp;
        }
        return false;
        gp:
        return $GM->eqXToP($YU);
    }
    public function recoverPubKey($TY, $ed, $ID, $dB = false)
    {
        assert((3 & $ID) === $ID);
        $ed = new Signature($ed, $dB);
        $Y3 = new BN($TY, 16);
        $YU = $ed->r;
        $pU = $ed->s;
        $Cv = ($ID & 1) == 1;
        $Ec = $ID >> 1;
        if (!($YU->cmp($this->curve->p->umod($this->curve->n)) >= 0 && $Ec)) {
            goto zi;
        }
        throw new \Exception("\125\x6e\141\x62\x6c\x65\40\x74\x6f\x20\x66\x69\156\144\x20\x73\145\143\x6f\x6e\144\x20\153\145\x79\x20\143\x61\156\x64\151\x6e\x61\164\x65");
        zi:
        if ($Ec) {
            goto xV;
        }
        $YU = $this->curve->pointFromX($YU, $Cv);
        goto de;
        xV:
        $YU = $this->curve->pointFromX($YU->add($this->curve->n), $Cv);
        de:
        $Ux = $this->n->sub($Y3);
        $yF = $ed->r->invm($this->n);
        return $this->g->mulAdd($Ux, $YU, $pU)->mul($yF);
    }
    public function getKeyRecoveryParam($Y3, $ed, $a7, $dB = false)
    {
        $ed = new Signature($ed, $dB);
        if (!($ed->recoveryParam != null)) {
            goto Xw;
        }
        return $ed->recoveryParam;
        Xw:
        $AQ = 0;
        Ml:
        if (!($AQ < 4)) {
            goto Jp;
        }
        $oH = null;
        try {
            $oH = $this->recoverPubKey($Y3, $ed, $AQ);
        } catch (\Exception $Y3) {
            goto G8;
        }
        if (!$oH->eq($a7)) {
            goto f2;
        }
        return $AQ;
        f2:
        G8:
        $AQ++;
        goto Ml;
        Jp:
        throw new \Exception("\x55\156\141\x62\154\145\x20\x74\157\40\x66\151\x6e\x64\x20\166\141\154\x69\x64\40\x72\x65\143\157\166\145\162\171\40\146\x61\143\164\x6f\x72");
    }
}
