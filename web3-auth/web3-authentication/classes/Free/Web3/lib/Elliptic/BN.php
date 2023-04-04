<?php


namespace BN;

require_once "\102\x69\x67\x49\156\164\x65\x67\x65\x72\56\x70\150\x70";
require_once "\122\x65\144\x2e\160\x68\x70";
use JsonSerializable;
use Exception;
use BI\BigInteger;
class BN implements JsonSerializable
{
    public $bi;
    public $red;
    function __construct($cL, $Re = 10, $W1 = null)
    {
        if (!$cL instanceof BN) {
            goto B8;
        }
        $this->bi = $cL->bi;
        $this->red = $cL->red;
        return;
        B8:
        $this->red = null;
        if (!$cL instanceof BigInteger) {
            goto nJ;
        }
        $this->bi = $cL;
        return;
        nJ:
        if (!is_array($cL)) {
            goto dr;
        }
        $cL = call_user_func_array("\x70\x61\143\153", array_merge(array("\103\52"), $cL));
        $cL = bin2hex($cL);
        $Re = 16;
        dr:
        if (!($Re == "\x68\145\170")) {
            goto aj;
        }
        $Re = 16;
        aj:
        if (!($W1 == "\x6c\145")) {
            goto EB;
        }
        if (!($Re != 16)) {
            goto l3;
        }
        throw new \Exception("\x4e\157\164\40\x69\x6d\160\154\145\155\145\x6e\x74\145\x64");
        l3:
        $cL = bin2hex(strrev(hex2bin($cL)));
        EB:
        $this->bi = new BigInteger($cL, $Re);
    }
    public function negative()
    {
        return $this->bi->sign() < 0 ? 1 : 0;
    }
    public static function isBN($I4)
    {
        return $I4 instanceof BN;
    }
    public static function max($qz, $mg)
    {
        return $qz->cmp($mg) > 0 ? $qz : $mg;
    }
    public static function min($qz, $mg)
    {
        return $qz->cmp($mg) < 0 ? $qz : $mg;
    }
    public function copy($XJ)
    {
        $XJ->bi = $this->bi;
        $XJ->red = $this->red;
    }
    public function _clone()
    {
        return clone $this;
    }
    public function toString($Re = 10, $km = 0)
    {
        if (!($Re == "\150\x65\x78")) {
            goto Co;
        }
        $Re = 16;
        Co:
        $Hg = $this->bi->abs()->toString($Re);
        if (!($km > 0)) {
            goto GE;
        }
        $Or = strlen($Hg);
        $AV = $Or % $km;
        if (!($AV > 0)) {
            goto VW;
        }
        $Or = $Or + $km - $AV;
        VW:
        $Hg = str_pad($Hg, $Or, "\60", STR_PAD_LEFT);
        GE:
        if (!$this->negative()) {
            goto Ft;
        }
        return "\55" . $Hg;
        Ft:
        return $Hg;
    }
    public function toNumber()
    {
        return $this->bi->toNumber();
    }
    public function jsonSerialize() : mixed
    {
        return $this->toString(16);
    }
    public function toArray($W1 = "\142\x65", $tw = -1)
    {
        $ng = $this->toString(16);
        if (!($ng[0] === "\x2d")) {
            goto v1;
        }
        $ng = substr($ng, 1);
        v1:
        if (!(strlen($ng) % 2)) {
            goto Nv;
        }
        $ng = "\x30" . $ng;
        Nv:
        $XC = array_map(function ($PR) {
            return hexdec($PR);
        }, str_split($ng, 2));
        if (!($tw > 0)) {
            goto ne;
        }
        $fw = count($XC);
        if (!($fw > $tw)) {
            goto vN;
        }
        throw new Exception("\x42\171\x74\x65\x20\141\x72\x72\141\171\x20\x6c\x6f\156\147\145\162\40\x74\150\x61\x6e\x20\144\145\163\x69\162\x65\x64\40\x6c\x65\156\x67\x74\150");
        vN:
        $AQ = $fw;
        s_:
        if (!($AQ < $tw)) {
            goto RV;
        }
        array_unshift($XC, 0);
        Sj:
        $AQ++;
        goto s_;
        RV:
        ne:
        if (!($W1 === "\154\x65")) {
            goto IM;
        }
        $XC = array_reverse($XC);
        IM:
        return $XC;
    }
    public function bitLength()
    {
        $sK = $this->toString(2);
        return strlen($sK) - ($sK[0] === "\x2d" ? 1 : 0);
    }
    public function zeroBits()
    {
        return $this->bi->scan1(0);
    }
    public function byteLength()
    {
        return ceil($this->bitLength() / 8);
    }
    public function isNeg()
    {
        return $this->negative() !== 0;
    }
    public function neg()
    {
        return $this->_clone()->ineg();
    }
    public function ineg()
    {
        $this->bi = $this->bi->neg();
        return $this;
    }
    public function iuor(BN $I4)
    {
        $this->bi = $this->bi->binaryOr($I4->bi);
        return $this;
    }
    public function ior(BN $I4)
    {
        if (!assert_options(ASSERT_ACTIVE)) {
            goto P0;
        }
        assert(!$this->negative() && !$I4->negative());
        P0:
        return $this->iuor($I4);
    }
    public function _or(BN $I4)
    {
        if (!($this->ucmp($I4) > 0)) {
            goto ze;
        }
        return $this->_clone()->ior($I4);
        ze:
        return $I4->_clone()->ior($this);
    }
    public function uor(BN $I4)
    {
        if (!($this->ucmp($I4) > 0)) {
            goto Eg;
        }
        return $this->_clone()->iuor($I4);
        Eg:
        return $I4->_clone()->ior($this);
    }
    public function iuand(BN $I4)
    {
        $this->bi = $this->bi->binaryAnd($I4->bi);
        return $this;
    }
    public function iand(BN $I4)
    {
        if (!assert_options(ASSERT_ACTIVE)) {
            goto OW;
        }
        assert(!$this->negative() && !$I4->negative());
        OW:
        return $this->iuand($I4);
    }
    public function _and(BN $I4)
    {
        if (!($this->ucmp($I4) > 0)) {
            goto Ei;
        }
        return $this->_clone()->iand($I4);
        Ei:
        return $I4->_clone()->iand($this);
    }
    public function uand(BN $I4)
    {
        if (!($this->ucmp($I4) > 0)) {
            goto QQ;
        }
        return $this->_clone()->iuand($I4);
        QQ:
        return $I4->_clone()->iuand($this);
    }
    public function iuxor(BN $I4)
    {
        $this->bi = $this->bi->binaryXor($I4->bi);
        return $this;
    }
    public function ixor(BN $I4)
    {
        if (!assert_options(ASSERT_ACTIVE)) {
            goto AN;
        }
        assert(!$this->negative() && !$I4->negative());
        AN:
        return $this->iuxor($I4);
    }
    public function _xor(BN $I4)
    {
        if (!($this->ucmp($I4) > 0)) {
            goto vt;
        }
        return $this->_clone()->ixor($I4);
        vt:
        return $I4->_clone()->ixor($this);
    }
    public function uxor(BN $I4)
    {
        if (!($this->ucmp($I4) > 0)) {
            goto LH;
        }
        return $this->_clone()->iuxor($I4);
        LH:
        return $I4->_clone()->iuxor($this);
    }
    public function inotn($CY)
    {
        assert(is_integer($CY) && $CY >= 0);
        $DD = false;
        if (!$this->isNeg()) {
            goto MG;
        }
        $this->negi();
        $DD = true;
        MG:
        $AQ = 0;
        dd:
        if (!($AQ < $CY)) {
            goto tj;
        }
        $this->bi = $this->bi->setbit($AQ, !$this->bi->testbit($AQ));
        AC:
        $AQ++;
        goto dd;
        tj:
        return $DD ? $this->negi() : $this;
    }
    public function notn($CY)
    {
        return $this->_clone()->inotn($CY);
    }
    public function setn($bG, $VZ)
    {
        assert(is_integer($bG) && $bG > 0);
        $this->bi = $this->bi->setbit($bG, !!$VZ);
        return $this;
    }
    public function iadd(BN $I4)
    {
        $this->bi = $this->bi->add($I4->bi);
        return $this;
    }
    public function add(BN $I4)
    {
        return $this->_clone()->iadd($I4);
    }
    public function isub(BN $I4)
    {
        $this->bi = $this->bi->sub($I4->bi);
        return $this;
    }
    public function sub(BN $I4)
    {
        return $this->_clone()->isub($I4);
    }
    public function mul(BN $I4)
    {
        return $this->_clone()->imul($I4);
    }
    public function imul(BN $I4)
    {
        $this->bi = $this->bi->mul($I4->bi);
        return $this;
    }
    public function imuln($I4)
    {
        assert(is_numeric($I4));
        $D8 = intval($I4);
        $Oq = $this->bi->mul($D8);
        if (!($I4 - $D8 > 0)) {
            goto Xo;
        }
        $ur = 10;
        $ja = ($I4 - $D8) * $ur;
        $D8 = intval($ja);
        mA:
        if (!($ja - $D8 > 0)) {
            goto Ye;
        }
        $ur *= 10;
        $ja *= 10;
        $D8 = intval($ja);
        goto mA;
        Ye:
        $mw = $this->bi->mul($D8);
        $mw = $mw->div($ur);
        $Oq = $Oq->add($mw);
        Xo:
        $this->bi = $Oq;
        return $this;
    }
    public function muln($I4)
    {
        return $this->_clone()->imuln($I4);
    }
    public function sqr()
    {
        return $this->mul($this);
    }
    public function isqr()
    {
        return $this->imul($this);
    }
    public function pow(BN $I4)
    {
        $Oq = clone $this;
        $Oq->bi = $Oq->bi->pow($I4->bi);
        return $Oq;
    }
    public function iushln($yO)
    {
        assert(is_integer($yO) && $yO >= 0);
        if ($yO < 54) {
            goto aC;
        }
        $this->bi = $this->bi->mul((new BigInteger(2))->pow($yO));
        goto ND;
        aC:
        $this->bi = $this->bi->mul(1 << $yO);
        ND:
        return $this;
    }
    public function ishln($yO)
    {
        if (!assert_options(ASSERT_ACTIVE)) {
            goto MC;
        }
        assert(!$this->negative());
        MC:
        return $this->iushln($yO);
    }
    public function iushrn($yO, $oZ = 0, &$ME = null)
    {
        if (!($oZ != 0)) {
            goto PE;
        }
        throw new Exception("\116\x6f\164\x20\x69\x6d\x70\154\145\x6d\145\x6e\164\145\x64");
        PE:
        assert(is_integer($yO) && $yO >= 0);
        if (!($ME != null)) {
            goto gR;
        }
        $ME = $this->maskn($yO);
        gR:
        if ($yO < 54) {
            goto YP;
        }
        $this->bi = $this->bi->div((new BigInteger(2))->pow($yO));
        goto X6;
        YP:
        $this->bi = $this->bi->div(1 << $yO);
        X6:
        return $this;
    }
    public function ishrn($yO, $oZ = null, $ME = null)
    {
        if (!assert_options(ASSERT_ACTIVE)) {
            goto CF;
        }
        assert(!$this->negative());
        CF:
        return $this->iushrn($yO, $oZ, $ME);
    }
    public function shln($yO)
    {
        return $this->_clone()->ishln($yO);
    }
    public function ushln($yO)
    {
        return $this->_clone()->iushln($yO);
    }
    public function shrn($yO)
    {
        return $this->_clone()->ishrn($yO);
    }
    public function ushrn($yO)
    {
        return $this->_clone()->iushrn($yO);
    }
    public function testn($bG)
    {
        assert(is_integer($bG) && $bG >= 0);
        return $this->bi->testbit($bG);
    }
    public function imaskn($yO)
    {
        assert(is_integer($yO) && $yO >= 0);
        if (!assert_options(ASSERT_ACTIVE)) {
            goto oC;
        }
        assert(!$this->negative());
        oC:
        $Nq = '';
        $AQ = 0;
        BH:
        if (!($AQ < $yO)) {
            goto ZP;
        }
        $Nq .= "\61";
        EN:
        $AQ++;
        goto BH;
        ZP:
        return $this->iand(new BN($Nq, 2));
    }
    public function maskn($yO)
    {
        return $this->_clone()->imaskn($yO);
    }
    public function iaddn($I4)
    {
        assert(is_numeric($I4));
        $this->bi = $this->bi->add(intval($I4));
        return $this;
    }
    public function isubn($I4)
    {
        assert(is_numeric($I4));
        $this->bi = $this->bi->sub(intval($I4));
        return $this;
    }
    public function addn($I4)
    {
        return $this->_clone()->iaddn($I4);
    }
    public function subn($I4)
    {
        return $this->_clone()->isubn($I4);
    }
    public function iabs()
    {
        if (!($this->bi->sign() < 0)) {
            goto Fq;
        }
        $this->bi = $this->bi->abs();
        Fq:
        return $this;
    }
    public function abs()
    {
        $Oq = clone $this;
        if (!($Oq->bi->sign() < 0)) {
            goto wk;
        }
        $Oq->bi = $Oq->bi->abs();
        wk:
        return $Oq;
    }
    public function div(BN $I4)
    {
        if (!assert_options(ASSERT_ACTIVE)) {
            goto kK;
        }
        assert(!$I4->isZero());
        kK:
        $Oq = clone $this;
        $Oq->bi = $Oq->bi->div($I4->bi);
        return $Oq;
    }
    public function mod(BN $I4)
    {
        if (!assert_options(ASSERT_ACTIVE)) {
            goto Y5;
        }
        assert(!$I4->isZero());
        Y5:
        $Oq = clone $this;
        $Oq->bi = $Oq->bi->divR($I4->bi);
        return $Oq;
    }
    public function umod(BN $I4)
    {
        if (!assert_options(ASSERT_ACTIVE)) {
            goto nK;
        }
        assert(!$I4->isZero());
        nK:
        $mw = $I4->bi->sign() < 0 ? $I4->bi->abs() : $I4->bi;
        $Oq = clone $this;
        $Oq->bi = $this->bi->mod($mw);
        return $Oq;
    }
    public function divRound(BN $I4)
    {
        if (!assert_options(ASSERT_ACTIVE)) {
            goto p7;
        }
        assert(!$I4->isZero());
        p7:
        $UR = $this->negative() !== $I4->negative();
        $Oq = $this->_clone()->abs();
        $Ax = $Oq->bi->divQR($I4->bi->abs());
        $Oq->bi = $Ax[0];
        $mw = $I4->bi->sub($Ax[1]->mul(2));
        if (!($mw->cmp(0) <= 0 && (!$UR || $this->negative() === 0))) {
            goto Mw;
        }
        $Oq->iaddn(1);
        Mw:
        return $UR ? $Oq->negi() : $Oq;
    }
    public function modn($I4)
    {
        assert(is_numeric($I4) && $I4 != 0);
        return $this->bi->divR(intval($I4))->toNumber();
    }
    public function idivn($I4)
    {
        assert(is_numeric($I4) && $I4 != 0);
        $this->bi = $this->bi->div(intval($I4));
        return $this;
    }
    public function divn($I4)
    {
        return $this->_clone()->idivn($I4);
    }
    public function gcd(BN $I4)
    {
        $Oq = clone $this;
        $Oq->bi = $this->bi->gcd($I4->bi);
        return $Oq;
    }
    public function invm(BN $I4)
    {
        $Oq = clone $this;
        $Oq->bi = $Oq->bi->modInverse($I4->bi);
        return $Oq;
    }
    public function isEven()
    {
        return !$this->bi->testbit(0);
    }
    public function isOdd()
    {
        return $this->bi->testbit(0);
    }
    public function andln($I4)
    {
        assert(is_numeric($I4));
        return $this->bi->binaryAnd($I4)->toNumber();
    }
    public function bincn($I4)
    {
        $mw = (new BN(1))->iushln($I4);
        return $this->add($mw);
    }
    public function isZero()
    {
        return $this->bi->sign() == 0;
    }
    public function cmpn($I4)
    {
        assert(is_numeric($I4));
        return $this->bi->cmp($I4);
    }
    public function cmp(BN $I4)
    {
        return $this->bi->cmp($I4->bi);
    }
    public function ucmp(BN $I4)
    {
        return $this->bi->abs()->cmp($I4->bi->abs());
    }
    public function gtn($I4)
    {
        return $this->cmpn($I4) > 0;
    }
    public function gt(BN $I4)
    {
        return $this->cmp($I4) > 0;
    }
    public function gten($I4)
    {
        return $this->cmpn($I4) >= 0;
    }
    public function gte(BN $I4)
    {
        return $this->cmp($I4) >= 0;
    }
    public function ltn($I4)
    {
        return $this->cmpn($I4) < 0;
    }
    public function lt(BN $I4)
    {
        return $this->cmp($I4) < 0;
    }
    public function lten($I4)
    {
        return $this->cmpn($I4) <= 0;
    }
    public function lte(BN $I4)
    {
        return $this->cmp($I4) <= 0;
    }
    public function eqn($I4)
    {
        return $this->cmpn($I4) === 0;
    }
    public function eq(BN $I4)
    {
        return $this->cmp($I4) === 0;
    }
    public function toRed(Red &$mD)
    {
        if (!($this->red !== null)) {
            goto Jy;
        }
        throw new Exception("\101\154\x72\x65\x61\144\171\40\x61\x20\156\x75\x6d\142\x65\162\40\x69\156\40\162\145\144\x75\143\164\151\157\156\40\143\x6f\x6e\164\x65\x78\164");
        Jy:
        if (!($this->negative() !== 0)) {
            goto C6;
        }
        throw new Exception("\162\145\x64\40\167\x6f\x72\153\163\40\157\x6e\x6c\171\40\x77\x69\x74\x68\40\160\x6f\x73\x69\x74\x69\x76\x65\x73");
        C6:
        return $mD->convertTo($this)->_forceRed($mD);
    }
    public function fromRed()
    {
        if (!($this->red === null)) {
            goto gt;
        }
        throw new Exception("\x66\x72\x6f\155\122\145\144\40\x77\x6f\162\153\x73\x20\x6f\x6e\154\171\40\x77\151\x74\x68\40\156\165\155\142\x65\x72\x73\x20\x69\156\x20\x72\145\144\165\143\164\151\157\156\40\143\x6f\156\x74\x65\170\x74");
        gt:
        return $this->red->convertFrom($this);
    }
    public function _forceRed(Red &$mD)
    {
        $this->red = $mD;
        return $this;
    }
    public function forceRed(Red &$mD)
    {
        if (!($this->red !== null)) {
            goto L3;
        }
        throw new Exception("\101\154\162\145\x61\x64\171\x20\x61\x20\156\x75\155\142\145\x72\40\151\x6e\40\162\145\144\x75\x63\x74\151\157\156\x20\143\x6f\x6e\164\x65\170\x74");
        L3:
        return $this->_forceRed($mD);
    }
    public function redAdd(BN $I4)
    {
        if (!($this->red === null)) {
            goto TM;
        }
        throw new Exception("\x72\x65\144\101\x64\144\x20\x77\x6f\162\153\x73\40\x6f\156\154\171\x20\x77\x69\164\x68\40\x72\x65\144\x20\156\165\x6d\x62\x65\162\163");
        TM:
        $Oq = clone $this;
        $Oq->bi = $Oq->bi->add($I4->bi);
        if (!($Oq->bi->cmp($this->red->m->bi) >= 0)) {
            goto Cg;
        }
        $Oq->bi = $Oq->bi->sub($this->red->m->bi);
        Cg:
        return $Oq;
    }
    public function redIAdd(BN $I4)
    {
        if (!($this->red === null)) {
            goto ow;
        }
        throw new Exception("\162\x65\144\111\101\144\x64\x20\x77\157\162\x6b\x73\x20\x6f\x6e\x6c\171\x20\x77\151\x74\x68\40\x72\145\144\40\156\165\155\142\145\162\163");
        ow:
        $Oq = $this;
        $Oq->bi = $Oq->bi->add($I4->bi);
        if (!($Oq->bi->cmp($this->red->m->bi) >= 0)) {
            goto xt;
        }
        $Oq->bi = $Oq->bi->sub($this->red->m->bi);
        xt:
        return $Oq;
    }
    public function redSub(BN $I4)
    {
        if (!($this->red === null)) {
            goto Ak;
        }
        throw new Exception("\x72\145\x64\123\165\x62\40\167\x6f\x72\153\x73\40\x6f\x6e\154\171\40\x77\x69\x74\x68\x20\162\145\144\x20\156\165\x6d\x62\x65\162\163");
        Ak:
        $Oq = clone $this;
        $Oq->bi = $this->bi->sub($I4->bi);
        if (!($Oq->bi->sign() < 0)) {
            goto Fc;
        }
        $Oq->bi = $Oq->bi->add($this->red->m->bi);
        Fc:
        return $Oq;
    }
    public function redISub(BN $I4)
    {
        if (!($this->red === null)) {
            goto oF;
        }
        throw new Exception("\162\145\x64\111\x53\165\x62\x20\x77\x6f\x72\x6b\163\x20\157\x6e\154\x79\40\167\151\164\150\x20\162\145\x64\40\156\x75\x6d\x62\x65\x72\x73");
        oF:
        $this->bi = $this->bi->sub($I4->bi);
        if (!($this->bi->sign() < 0)) {
            goto th;
        }
        $this->bi = $this->bi->add($this->red->m->bi);
        th:
        return $this;
    }
    public function redShl(BN $I4)
    {
        if (!($this->red === null)) {
            goto Cu;
        }
        throw new Exception("\x72\145\144\123\150\x6c\x20\167\157\162\153\x73\40\157\x6e\154\x79\40\x77\x69\x74\150\x20\162\x65\144\40\x6e\165\155\x62\x65\x72\x73");
        Cu:
        return $this->red->shl($this, $I4);
    }
    public function redMul(BN $I4)
    {
        if (!($this->red === null)) {
            goto w8;
        }
        throw new Exception("\x72\x65\x64\x4d\x75\x6c\x20\167\157\162\x6b\x73\x20\157\156\x6c\x79\40\x77\x69\x74\150\40\162\145\x64\x20\156\x75\x6d\x62\145\x72\163");
        w8:
        $Oq = clone $this;
        $Oq->bi = $this->bi->mul($I4->bi)->mod($this->red->m->bi);
        return $Oq;
    }
    public function redIMul(BN $I4)
    {
        if (!($this->red === null)) {
            goto v7;
        }
        throw new Exception("\162\x65\x64\111\x4d\165\154\x20\x77\157\x72\x6b\x73\x20\x6f\x6e\154\x79\x20\x77\x69\x74\x68\x20\x72\x65\x64\40\156\x75\x6d\142\x65\x72\163");
        v7:
        $this->bi = $this->bi->mul($I4->bi)->mod($this->red->m->bi);
        return $this;
    }
    public function redSqr()
    {
        if (!($this->red === null)) {
            goto Gy;
        }
        throw new Exception("\x72\x65\x64\x53\161\162\x20\167\157\x72\x6b\163\40\157\x6e\x6c\x79\x20\167\x69\x74\150\x20\x72\145\x64\40\156\165\155\142\x65\162\x73");
        Gy:
        $Oq = clone $this;
        $Oq->bi = $this->bi->mul($this->bi)->mod($this->red->m->bi);
        return $Oq;
    }
    public function redISqr()
    {
        if (!($this->red === null)) {
            goto uK;
        }
        throw new Exception("\x72\x65\144\x49\x53\x71\x72\40\x77\157\162\x6b\x73\x20\x6f\156\x6c\x79\x20\167\151\164\x68\x20\162\145\x64\40\156\165\x6d\x62\x65\x72\x73");
        uK:
        $Oq = $this;
        $Oq->bi = $this->bi->mul($this->bi)->mod($this->red->m->bi);
        return $Oq;
    }
    public function redSqrt()
    {
        if (!($this->red === null)) {
            goto mx;
        }
        throw new Exception("\162\x65\x64\123\x71\162\x74\x20\x77\157\162\x6b\x73\40\157\156\x6c\x79\40\x77\151\164\150\x20\x72\145\144\40\x6e\x75\155\142\x65\x72\163");
        mx:
        $this->red->verify1($this);
        return $this->red->sqrt($this);
    }
    public function redInvm()
    {
        if (!($this->red === null)) {
            goto ck;
        }
        throw new Exception("\162\145\144\x49\156\166\x6d\x20\167\157\x72\153\x73\40\x6f\156\x6c\x79\x20\167\x69\x74\x68\x20\162\x65\x64\40\156\165\x6d\x62\x65\x72\163");
        ck:
        $this->red->verify1($this);
        return $this->red->invm($this);
    }
    public function redNeg()
    {
        if (!($this->red === null)) {
            goto rt;
        }
        throw new Exception("\x72\145\x64\x4e\x65\x67\40\167\157\x72\x6b\163\x20\x6f\x6e\154\171\40\x77\151\x74\150\x20\x72\x65\x64\40\x6e\165\155\142\145\162\163");
        rt:
        $this->red->verify1($this);
        return $this->red->neg($this);
    }
    public function redPow(BN $I4)
    {
        $this->red->verify2($this, $I4);
        return $this->red->pow($this, $I4);
    }
    public static function red($I4)
    {
        return new Red($I4);
    }
    public static function mont($I4)
    {
        return new Red($I4);
    }
    public function inspect()
    {
        return ($this->red == null ? "\x3c\x42\x4e\x3a\x20" : "\x3c\x42\116\x2d\122\x3a\40") . $this->toString(16) . "\76";
    }
    public function __debugInfo()
    {
        if ($this->red != null) {
            goto st;
        }
        return ["\x42\x4e" => $this->toString(16)];
        goto Wj;
        st:
        return ["\x42\116\x2d\122" => $this->toString(16)];
        Wj:
    }
}
