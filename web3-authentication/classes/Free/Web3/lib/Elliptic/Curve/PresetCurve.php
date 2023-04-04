<?php


namespace Elliptic\Curve;

require_once "\123\x68\x6f\x72\x74\x43\x75\162\x76\x65\56\160\150\160";
require_once "\115\157\156\164\103\165\x72\166\145\x2e\x70\150\160";
require_once "\105\x64\167\x61\x72\144\163\103\x75\162\166\145\56\x70\x68\160";
class PresetCurve
{
    public $curve;
    public $g;
    public $n;
    public $hash;
    function __construct($ts)
    {
        if ($ts["\164\x79\160\x65"] === "\163\150\x6f\x72\164") {
            goto tr;
        }
        if ($ts["\164\x79\x70\145"] === "\145\x64\167\x61\x72\x64\163") {
            goto JT;
        }
        $this->curve = new MontCurve($ts);
        goto sn;
        tr:
        $this->curve = new ShortCurve($ts);
        goto sn;
        JT:
        $this->curve = new EdwardsCurve($ts);
        sn:
        $this->g = $this->curve->g;
        $this->n = $this->curve->n;
        $this->hash = isset($ts["\x68\141\163\x68"]) ? $ts["\150\141\x73\x68"] : null;
    }
}
