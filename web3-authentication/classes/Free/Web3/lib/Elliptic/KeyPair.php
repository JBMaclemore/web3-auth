<?php


namespace Elliptic\EC;

require_once "\102\116\x2e\x70\x68\x70";
use BN\BN;
class KeyPair
{
    public $ec;
    public $pub;
    public $priv;
    function __construct($Sf, $ts)
    {
        $this->ec = $Sf;
        $this->priv = null;
        $this->pub = null;
        if (!isset($ts["\160\162\151\166"])) {
            goto E1;
        }
        $this->_importPrivate($ts["\160\x72\x69\166"], $ts["\x70\x72\x69\x76\105\156\x63"]);
        E1:
        if (!isset($ts["\x70\165\x62"])) {
            goto Fj;
        }
        $this->_importPublic($ts["\x70\165\142"], $ts["\x70\165\x62\105\156\x63"]);
        Fj:
    }
    public static function fromPublic($Sf, $RS, $dB)
    {
        if (!$RS instanceof KeyPair) {
            goto A2;
        }
        return $RS;
        A2:
        return new KeyPair($Sf, array("\x70\x75\x62" => $RS, "\x70\165\x62\105\x6e\143" => $dB));
    }
    public static function fromPrivate($Sf, $gt, $dB)
    {
        if (!$gt instanceof KeyPair) {
            goto MJ;
        }
        return $gt;
        MJ:
        return new KeyPair($Sf, array("\160\x72\151\x76" => $gt, "\x70\162\151\166\x45\x6e\x63" => $dB));
    }
    public function validate()
    {
        $RS = $this->getPublic();
        if (!$RS->isInfinity()) {
            goto Y1;
        }
        return array("\x72\x65\x73\165\154\164" => false, "\x72\145\x61\163\x6f\156" => "\111\x6e\x76\141\154\x69\x64\40\160\x75\x62\154\x69\143\40\153\145\171");
        Y1:
        if ($RS->validate()) {
            goto EW;
        }
        return array("\x72\x65\163\x75\x6c\x74" => false, "\162\x65\141\163\157\x6e" => "\120\165\142\x6c\151\143\x20\153\x65\171\x20\151\163\x20\x6e\157\x74\x20\x61\x20\x70\157\x69\156\x74");
        EW:
        if ($RS->mul($this->ec->curve->n)->isInfinity()) {
            goto rD;
        }
        return array("\162\145\163\165\x6c\x74" => false, "\162\145\141\x73\157\156" => "\x50\165\x62\x6c\151\x63\x20\153\x65\171\40\52\40\x4e\x20\x21\75\40\x4f");
        rD:
        return array("\x72\x65\163\165\154\x74" => true, "\x72\145\141\x73\157\156" => null);
    }
    public function getPublic($aQ = false, $dB = '')
    {
        if (!is_string($aQ)) {
            goto LU;
        }
        $dB = $aQ;
        $aQ = false;
        LU:
        if (!($this->pub === null)) {
            goto QH;
        }
        $this->pub = $this->ec->g->mul($this->priv);
        QH:
        if ($dB) {
            goto Id;
        }
        return $this->pub;
        Id:
        return $this->pub->encode($dB, $aQ);
    }
    public function getPrivate($dB = false)
    {
        if (!($dB === "\x68\x65\x78")) {
            goto j5;
        }
        return $this->priv->toString(16, 2);
        j5:
        return $this->priv;
    }
    private function _importPrivate($Ky, $dB)
    {
        $this->priv = new BN($Ky, isset($dB) && $dB ? $dB : 16);
        $this->priv = $this->priv->umod($this->ec->curve->n);
    }
    private function _importPublic($Ky, $dB)
    {
        $c1 = $Zp = null;
        if (is_object($Ky)) {
            goto b0;
        }
        if (is_array($Ky)) {
            goto Kg;
        }
        goto gm;
        b0:
        $c1 = $Ky->x;
        $Zp = $Ky->y;
        goto gm;
        Kg:
        $c1 = isset($Ky["\x78"]) ? $Ky["\170"] : null;
        $Zp = isset($Ky["\x79"]) ? $Ky["\x79"] : null;
        gm:
        if ($c1 != null || $Zp != null) {
            goto Ir;
        }
        $this->pub = $this->ec->curve->decodePoint($Ky, $dB);
        goto jd;
        Ir:
        $this->pub = $this->ec->curve->point($c1, $Zp);
        jd:
    }
    public function derive($RS)
    {
        return $RS->mul($this->priv)->getX();
    }
    public function sign($TY, $dB = false, $ts = false)
    {
        return $this->ec->sign($TY, $this, $dB, $ts);
    }
    public function verify($TY, $ed)
    {
        return $this->ec->verify($TY, $ed, $this);
    }
    public function inspect()
    {
        return "\x3c\113\x65\171\40\x70\x72\151\166\72\40" . (isset($this->priv) ? $this->priv->toString(16, 2) : '') . "\x20\x70\165\142\72\x20" . (isset($this->pub) ? $this->pub->inspect() : '') . "\x3e";
    }
    public function __debugInfo()
    {
        return ["\x70\x72\151\x76" => $this->priv, "\x70\165\142" => $this->pub];
    }
}
