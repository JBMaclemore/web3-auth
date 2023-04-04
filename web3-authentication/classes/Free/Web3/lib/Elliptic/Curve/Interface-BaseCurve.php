<?php


namespace Elliptic\Curve;

require_once __DIR__ . "\57\56\56\x2f\102\116\56\160\150\160";
use Elliptic\Utils;
use Exception;
use BN\BN;
abstract class BaseCurve
{
    public $type;
    public $p;
    public $red;
    public $zero;
    public $one;
    public $two;
    public $n;
    public $g;
    protected $_wnafT1;
    protected $_wnafT2;
    protected $_wnafT3;
    protected $_wnafT4;
    public $redN;
    public $_maxwellTrick;
    function __construct($qO, $Mm)
    {
        $this->type = $qO;
        $this->p = new BN($Mm["\160"], 16);
        $this->red = isset($Mm["\x70\x72\x69\x6d\145"]) ? BN::red($Mm["\x70\x72\151\x6d\145"]) : BN::mont($this->p);
        $this->zero = (new BN(0))->toRed($this->red);
        $this->one = (new BN(1))->toRed($this->red);
        $this->two = (new BN(2))->toRed($this->red);
        $this->n = isset($Mm["\156"]) ? new BN($Mm["\156"], 16) : null;
        $this->g = isset($Mm["\x67"]) ? $this->pointFromJSON($Mm["\147"], isset($Mm["\x67\122\x65\x64"]) ? $Mm["\147\122\x65\x64"] : null) : null;
        $this->_wnafT1 = array(0, 0, 0, 0);
        $this->_wnafT2 = array(0, 0, 0, 0);
        $this->_wnafT3 = array(0, 0, 0, 0);
        $this->_wnafT4 = array(0, 0, 0, 0);
        $ug = $this->n != null ? $this->p->div($this->n) : null;
        if ($ug == null || $ug->cmpn(100) > 0) {
            goto br;
        }
        $this->redN = $this->n->toRed($this->red);
        $this->_maxwellTrick = true;
        goto ol;
        br:
        $this->redN = null;
        $this->_maxwellTrick = false;
        ol:
    }
    public abstract function point($c1, $Fr);
    public abstract function validate($Qm);
    public function _fixedNafMul($GM, $Qs)
    {
        assert(isset($GM->precomputed));
        $Jz = $GM->_getDoubles();
        $GL = Utils::getNAF($Qs, 1);
        $Tk = (1 << $Jz["\163\164\145\x70"] + 1) - ($Jz["\163\164\145\x70"] % 2 == 0 ? 2 : 1);
        $Tk = $Tk / 3;
        $y6 = array();
        $ID = 0;
        PI:
        if (!($ID < count($GL))) {
            goto Mo;
        }
        $F9 = 0;
        $Qs = $ID + $Jz["\x73\164\145\160"] - 1;
        qN:
        if (!($Qs >= $ID)) {
            goto mh;
        }
        $F9 = ($F9 << 1) + (isset($GL[$Qs]) ? $GL[$Qs] : 0);
        CK:
        $Qs--;
        goto qN;
        mh:
        array_push($y6, $F9);
        VH:
        $ID += $Jz["\x73\x74\x65\x70"];
        goto PI;
        Mo:
        $wT = $this->jpoint(null, null, null);
        $lf = $this->jpoint(null, null, null);
        $AQ = $Tk;
        jp:
        if (!($AQ > 0)) {
            goto o5;
        }
        $ID = 0;
        Vs:
        if (!($ID < count($y6))) {
            goto fQ;
        }
        $F9 = $y6[$ID];
        if ($F9 == $AQ) {
            goto wl;
        }
        if (!($F9 == -$AQ)) {
            goto Ur;
        }
        $lf = $lf->mixedAdd($Jz["\160\x6f\151\x6e\164\163"][$ID]->neg());
        Ur:
        goto JU;
        wl:
        $lf = $lf->mixedAdd($Jz["\x70\157\x69\156\x74\x73"][$ID]);
        JU:
        y3:
        $ID++;
        goto Vs;
        fQ:
        $wT = $wT->add($lf);
        bW:
        $AQ--;
        goto jp;
        o5:
        return $wT->toP();
    }
    public function _wnafMul($GM, $Qs)
    {
        $Rf = 4;
        $ZT = $GM->_getNAFPoints($Rf);
        $Rf = $ZT["\167\156\x64"];
        $zp = $ZT["\160\157\151\156\x74\x73"];
        $GL = Utils::getNAF($Qs, $Rf);
        $pE = $this->jpoint(null, null, null);
        $AQ = count($GL) - 1;
        SK:
        if (!($AQ >= 0)) {
            goto o8;
        }
        $Qs = 0;
        R9:
        if (!($AQ >= 0 && $GL[$AQ] == 0)) {
            goto N_;
        }
        $Qs++;
        Sf:
        $AQ--;
        goto R9;
        N_:
        if (!($AQ >= 0)) {
            goto y1;
        }
        $Qs++;
        y1:
        $pE = $pE->dblp($Qs);
        if (!($AQ < 0)) {
            goto US;
        }
        goto o8;
        US:
        $Fr = $GL[$AQ];
        assert($Fr != 0);
        if ($GM->type == "\141\146\x66\x69\x6e\145") {
            goto sz;
        }
        if ($Fr > 0) {
            goto nv;
        }
        $pE = $pE->add($zp[-$Fr - 1 >> 1]->neg());
        goto hb;
        nv:
        $pE = $pE->add($zp[$Fr - 1 >> 1]);
        hb:
        goto ng;
        sz:
        if ($Fr > 0) {
            goto Y9;
        }
        $pE = $pE->mixedAdd($zp[-$Fr - 1 >> 1]->neg());
        goto LR;
        Y9:
        $pE = $pE->mixedAdd($zp[$Fr - 1 >> 1]);
        LR:
        ng:
        OK:
        $AQ--;
        goto SK;
        o8:
        return $GM->type == "\141\146\x66\151\x6e\x65" ? $pE->toP() : $pE;
    }
    public function _wnafMulAdd($ia, $Yb, $EX, $Or, $fa = false)
    {
        $bl =& $this->_wnafT1;
        $zp =& $this->_wnafT2;
        $GL =& $this->_wnafT3;
        $IC = 0;
        $AQ = 0;
        XN:
        if (!($AQ < $Or)) {
            goto tc;
        }
        $GM = $Yb[$AQ];
        $ZT = $GM->_getNAFPoints($ia);
        $bl[$AQ] = $ZT["\x77\x6e\144"];
        $zp[$AQ] = $ZT["\x70\x6f\x69\156\x74\x73"];
        s4:
        $AQ++;
        goto XN;
        tc:
        $AQ = $Or - 1;
        yP:
        if (!($AQ >= 1)) {
            goto uM;
        }
        $wT = $AQ - 1;
        $lf = $AQ;
        if (!($bl[$wT] != 1 || $bl[$lf] != 1)) {
            goto yq;
        }
        $GL[$wT] = Utils::getNAF($EX[$wT], $bl[$wT]);
        $GL[$lf] = Utils::getNAF($EX[$lf], $bl[$lf]);
        $IC = max(count($GL[$wT]), $IC);
        $IC = max(count($GL[$lf]), $IC);
        goto dk;
        yq:
        $rJ = array($Yb[$wT], null, null, $Yb[$lf]);
        if ($Yb[$wT]->y->cmp($Yb[$lf]->y) == 0) {
            goto E_;
        }
        if ($Yb[$wT]->y->cmp($Yb[$lf]->y->redNeg()) == 0) {
            goto aP;
        }
        $rJ[1] = $Yb[$wT]->toJ()->mixedAdd($Yb[$lf]);
        $rJ[2] = $Yb[$wT]->toJ()->mixedAdd($Yb[$lf]->neg());
        goto fV;
        E_:
        $rJ[1] = $Yb[$wT]->add($Yb[$lf]);
        $rJ[2] = $Yb[$wT]->toJ()->mixedAdd($Yb[$lf]->neg());
        goto fV;
        aP:
        $rJ[1] = $Yb[$wT]->toJ()->mixedAdd($Yb[$lf]);
        $rJ[2] = $Yb[$wT]->add($Yb[$lf]->neg());
        fV:
        $eU = array(-3, -1, -5, -7, 0, 7, 5, 1, 3);
        $Cj = Utils::getJSF($EX[$wT], $EX[$lf]);
        $IC = max(count($Cj[0]), $IC);
        if ($IC > 0) {
            goto MH;
        }
        $GL[$wT] = [];
        $GL[$lf] = [];
        goto og;
        MH:
        $GL[$wT] = array_fill(0, $IC, 0);
        $GL[$lf] = array_fill(0, $IC, 0);
        og:
        $ID = 0;
        RT:
        if (!($ID < $IC)) {
            goto PN;
        }
        $Rq = isset($Cj[0][$ID]) ? $Cj[0][$ID] : 0;
        $BM = isset($Cj[1][$ID]) ? $Cj[1][$ID] : 0;
        $GL[$wT][$ID] = $eU[($Rq + 1) * 3 + ($BM + 1)];
        $GL[$lf][$ID] = 0;
        $zp[$wT] = $rJ;
        oP:
        $ID++;
        goto RT;
        PN:
        dk:
        $AQ -= 2;
        goto yP;
        uM:
        $pE = $this->jpoint(null, null, null);
        $mw =& $this->_wnafT4;
        $AQ = $IC;
        IH:
        if (!($AQ >= 0)) {
            goto fk;
        }
        $Qs = 0;
        lt:
        if (!($AQ >= 0)) {
            goto e2;
        }
        $dF = true;
        $ID = 0;
        sd:
        if (!($ID < $Or)) {
            goto vR;
        }
        $mw[$ID] = isset($GL[$ID][$AQ]) ? $GL[$ID][$AQ] : 0;
        if (!($mw[$ID] != 0)) {
            goto ok;
        }
        $dF = false;
        ok:
        AX:
        $ID++;
        goto sd;
        vR:
        if ($dF) {
            goto qU;
        }
        goto e2;
        qU:
        $Qs++;
        $AQ--;
        goto lt;
        e2:
        if (!($AQ >= 0)) {
            goto SN;
        }
        $Qs++;
        SN:
        $pE = $pE->dblp($Qs);
        if (!($AQ < 0)) {
            goto v2;
        }
        goto fk;
        v2:
        $ID = 0;
        md:
        if (!($ID < $Or)) {
            goto r5;
        }
        $Fr = $mw[$ID];
        $GM = null;
        if ($Fr == 0) {
            goto XE;
        }
        if ($Fr > 0) {
            goto YX;
        }
        if ($Fr < 0) {
            goto U3;
        }
        goto Qp;
        XE:
        goto eQ;
        goto Qp;
        YX:
        $GM = $zp[$ID][$Fr - 1 >> 1];
        goto Qp;
        U3:
        $GM = $zp[$ID][-$Fr - 1 >> 1]->neg();
        Qp:
        if ($GM->type == "\141\x66\146\x69\x6e\145") {
            goto XX;
        }
        $pE = $pE->add($GM);
        goto AR;
        XX:
        $pE = $pE->mixedAdd($GM);
        AR:
        eQ:
        $ID++;
        goto md;
        r5:
        JX:
        $AQ--;
        goto IH;
        fk:
        $AQ = 0;
        FF:
        if (!($AQ < $Or)) {
            goto en;
        }
        $zp[$AQ] = null;
        g9:
        $AQ++;
        goto FF;
        en:
        if ($fa) {
            goto Pb;
        }
        return $pE->toP();
        goto xe;
        Pb:
        return $pE;
        xe:
    }
    public function decodePoint($XC, $dB = false)
    {
        $XC = Utils::toArray($XC, $dB);
        $Or = $this->p->byteLength();
        $fw = count($XC);
        if (!(($XC[0] == 0x4 || $XC[0] == 0x6 || $XC[0] == 0x7) && $fw - 1 == 2 * $Or)) {
            goto N1;
        }
        if ($XC[0] == 0x6) {
            goto L1;
        }
        if ($XC[0] == 0x7) {
            goto bV;
        }
        goto Wu;
        L1:
        assert($XC[$fw - 1] % 2 == 0);
        goto Wu;
        bV:
        assert($XC[$fw - 1] % 2 == 1);
        Wu:
        return $this->point(array_slice($XC, 1, $Or), array_slice($XC, 1 + $Or, $Or));
        N1:
        if (!(($XC[0] == 0x2 || $XC[0] == 0x3) && $fw - 1 == $Or)) {
            goto R2;
        }
        return $this->pointFromX(array_slice($XC, 1, $Or), $XC[0] == 0x3);
        R2:
        throw new Exception("\x55\x6e\153\156\x6f\167\x6e\x20\x70\157\151\x6e\164\x20\x66\x6f\x72\155\141\x74");
    }
}
