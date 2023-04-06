<?php


namespace MoWeb3\Premium\settings;

class Moweb3PremiumSettings
{
    public function __construct()
    {
        add_action("\167\x70\137\141\x6a\x61\170\x5f\x74\x79\160\x65\x5f\157\146\x5f\x72\145\x71\x75\x65\163\x74", array($this, "\x6d\157\x77\145\x62\x33\137\x70\x72\x65\x6d\151\165\x6d\137\x73\145\164\x74\x69\156\147\x73"));
        add_action("\141\x64\x6d\x69\156\137\151\156\151\164", array($this, "\x6d\157\x77\x65\142\x33\x5f\x70\162\145\x6d\151\x75\x6d\x5f\163\x65\x74\x74\151\x6e\147\163"));
    }
    public function moweb3_premium_settings()
    {
        if (!(isset($_REQUEST["\x6d\x6f\137\167\x65\x62\63\137\x76\x65\162\x69\146\171\x5f\x6e\157\156\x63\145"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_REQUEST["\155\x6f\137\x77\145\142\63\x5f\x76\x65\162\x69\x66\x79\137\x6e\157\x6e\x63\145"])), "\x6d\157\137\x77\x65\142\x33\137\167\x70\x5f\156\157\x6e\143\145") && isset($_REQUEST["\162\145\161\165\145\x73\x74"]))) {
            goto Op;
        }
        global $V8;
        $cr = sanitize_text_field(wp_unslash($_REQUEST["\162\145\161\165\145\163\x74"]));
        if ($cr == "\x61\x64\x64\124\157\153\x65\x6e\104\145\x74\141\x69\154\x73") {
            goto IJ;
        }
        if ($cr == "\145\144\151\164\x54\157\153\145\x6e\104\145\164\x61\x69\x6c\x73") {
            goto m1;
        }
        if ($cr == "\x64\145\x6c\145\x74\x65\124\x6f\x6b\145\156\104\x65\164\141\x69\154\x73") {
            goto La;
        }
        if ($cr == "\141\x64\144\x43\157\156\164\x65\x6e\164\x47\141\x74\x69\x6e\147\104\x65\x74\x61\151\154\163") {
            goto hY;
        }
        if ($cr == "\x64\145\154\145\x74\145\103\157\156\x74\x65\156\164\x47\141\164\x69\x6e\x67\x44\145\164\x61\151\x6c\163") {
            goto WK;
        }
        if ($cr == "\147\145\164\x43\157\156\x74\x65\x6e\x74\x47\141\x74\151\156\147\x43\157\x6e\x66\x69\x67\104\145\164\141\151\x6c\x73") {
            goto xF;
        }
        if ("\141\144\x64\114\x6f\157\x70\162\151\156\147\104\145\x74\141\151\154\163" === $cr) {
            goto vc;
        }
        goto BG;
        xF:
        $this->getContentGatingConfigDetails();
        goto BG;
        vc:
        $this->saveLoopringAPIKey();
        BG:
        goto tv;
        WK:
        $this->deleteContentGatingDetails();
        tv:
        goto Dz;
        hY:
        $this->addContentGatingDetails();
        Dz:
        goto bD;
        La:
        $this->deleteTokenDetails();
        bD:
        goto VO;
        m1:
        $this->updateTokenDetails();
        VO:
        goto JF;
        IJ:
        $this->addTokenDetails();
        JF:
        Op:
    }
    public function saveLoopringAPIKey()
    {
        global $V8;
        $X5 = isset($_REQUEST["\x6c\x6f\157\160\x72\151\156\147\x44\x65\164\x61\x69\x6c\x73"]) ? $_REQUEST["\x6c\157\x6f\x70\x72\151\x6e\x67\x44\x65\164\x61\151\x6c\x73"] : null;
        $SC = isset($X5["\x6c\x6f\157\x70\x72\x69\x6e\147\x41\160\x69\x4b\145\171"]) ? $X5["\x6c\157\x6f\160\x72\151\156\147\101\160\x69\x4b\145\x79"] : null;
        $V8->mo_web3_update_option("\155\157\x5f\x77\145\142\x33\x5f\x6c\157\157\x70\162\151\156\147\x5f\141\160\x69\137\x6b\x65\x79", $SC);
        wp_send_json("\163\165\143\x63\145\x73\x73");
    }
    public function getContentGatingConfigDetails()
    {
        global $V8;
        $ej = $V8->mo_web3_get_option("\155\x6f\137\167\x65\142\63\x5f\x63\157\156\164\145\x6e\164\x5f\147\x61\164\x69\x6e\147\x5f\x63\x6f\156\x66\x69\x67\137\x64\145\x74\x61\151\154\x73\x5f\163\x74\157\162\x65");
        wp_send_json($ej);
    }
    public function addContentGatingDetails()
    {
        global $V8;
        $t7 = isset($_REQUEST["\143\157\x6e\x74\x65\x6e\x74\x47\141\x74\x69\156\x67\x44\145\164\x61\x69\x6c\x73"]) ? $_REQUEST["\x63\x6f\156\x74\x65\156\164\107\141\x74\x69\x6e\x67\x44\145\x74\141\x69\x6c\163"] : null;
        $q3 = array();
        foreach ($t7 as $Ky => $V7) {
            $Ky = isset($Ky) ? sanitize_text_field(wp_unslash($Ky)) : null;
            $V7 = isset($V7) ? sanitize_text_field(wp_unslash($V7)) : null;
            $q3[$Ky] = $V7;
            x1:
        }
        WW:
        $ej = $V8->mo_web3_get_option("\x6d\x6f\x5f\x77\x65\142\63\x5f\x63\157\156\x74\x65\x6e\164\x5f\147\141\164\151\x6e\x67\x5f\x63\157\x6e\x66\151\x67\x5f\x64\x65\164\x61\x69\x6c\x73\137\x73\164\157\162\145");
        $Qo = $q3["\160\141\x67\x65\125\122\114"];
        if ($ej) {
            goto pm;
        }
        $ej = array();
        pm:
        if (!array_key_exists($Qo, $ej)) {
            goto xT;
        }
        wp_send_json("\144\165\x70\154\151\x63\x61\x74\145\40\x65\156\x74\162\x79");
        xT:
        $ej[$Qo] = $q3;
        $V8->mo_web3_update_option("\155\157\x5f\x77\145\142\x33\x5f\143\x6f\156\164\145\156\164\x5f\147\x61\164\x69\156\x67\137\x63\x6f\x6e\x66\151\x67\x5f\144\145\164\x61\x69\154\163\x5f\163\164\x6f\162\x65", $ej);
        wp_send_json("\163\165\x63\143\x65\x73\163");
    }
    public function deleteContentGatingDetails()
    {
        global $V8;
        $t7 = isset($_REQUEST["\x63\x6f\156\x74\145\156\164\x47\x61\164\x69\x6e\147\x44\x65\x74\141\x69\154\x73"]) ? $_REQUEST["\143\x6f\x6e\x74\x65\x6e\164\107\x61\164\x69\156\147\104\x65\164\141\151\x6c\163"] : null;
        $t7 = $t7["\147\141\x74\x65\144\120\x61\x67\x65\125\122\x4c\x41\162\x72\x61\171"];
        $ej = $V8->mo_web3_get_option("\155\x6f\x5f\167\x65\142\x33\x5f\x63\x6f\156\x74\145\x6e\x74\137\x67\141\164\x69\x6e\x67\x5f\x63\157\156\146\x69\x67\137\x64\145\x74\141\151\154\163\137\x73\164\157\162\145");
        foreach ($t7 as $Ky => $V7) {
            $Ky = isset($Ky) ? sanitize_text_field(wp_unslash($Ky)) : null;
            $V7 = isset($V7) ? sanitize_text_field(wp_unslash($V7)) : null;
            $Qo = $V7;
            unset($ej[$Qo]);
            Z3:
        }
        kR:
        $V8->mo_web3_update_option("\155\x6f\137\x77\145\x62\63\137\x63\157\156\164\145\156\164\137\x67\x61\x74\x69\156\147\137\143\x6f\x6e\x66\151\147\137\x64\145\164\141\151\x6c\x73\x5f\163\x74\x6f\162\x65", $ej);
        wp_send_json("\x73\165\143\x63\x65\x73\163");
    }
    public function addTokenDetails()
    {
        global $V8;
        $NJ = isset($_REQUEST["\164\x6f\153\x65\156\104\x65\x74\141\151\x6c\x73"]) ? $_REQUEST["\164\157\153\x65\x6e\104\x65\x74\x61\151\x6c\x73"] : null;
        $k2 = array();
        foreach ($NJ as $Ky => $V7) {
            $Ky = isset($Ky) ? sanitize_text_field(wp_unslash($Ky)) : null;
            $V7 = isset($V7) ? sanitize_text_field(wp_unslash($V7)) : null;
            $V7 = str_replace("\x20", '', $V7);
            if (!($V7 == '')) {
                goto E9;
            }
            $V7 = null;
            E9:
            $k2[$Ky] = $V7;
            Ez:
        }
        fo:
        $J4 = $V8->mo_web3_get_option("\155\157\x5f\167\145\142\x33\137\164\x6f\x6b\145\156\x5f\143\157\156\146\x69\x67\x5f\144\x65\164\141\x69\154\x73\x5f\163\x74\157\162\x65");
        $JC = $k2["\x63\x6f\x6e\164\162\x61\143\164\101\144\144\x72\145\x73\x73\116\141\155\x65"];
        if ($J4) {
            goto tP;
        }
        $J4 = array();
        tP:
        if (!array_key_exists($JC, $J4)) {
            goto w_;
        }
        wp_send_json("\144\165\x70\154\151\x63\141\164\x65\x20\x65\156\x74\162\171");
        w_:
        $J4[$JC] = $k2;
        $V8->mo_web3_update_option("\x6d\157\137\x77\x65\142\x33\137\x74\157\153\x65\x6e\x5f\x63\157\156\146\x69\x67\137\x64\145\x74\141\x69\x6c\x73\x5f\163\164\x6f\x72\145", $J4);
        wp_send_json("\163\x75\143\143\145\163\x73");
    }
    public function updateTokenDetails()
    {
        global $V8;
        $NJ = isset($_REQUEST["\164\x6f\x6b\145\156\104\145\164\141\x69\x6c\163"]) ? $_REQUEST["\x74\x6f\x6b\x65\x6e\x44\145\x74\x61\x69\x6c\x73"] : null;
        $k2 = array();
        foreach ($NJ as $Ky => $V7) {
            $Ky = isset($Ky) ? sanitize_text_field(wp_unslash($Ky)) : null;
            $V7 = isset($V7) ? sanitize_text_field(wp_unslash($V7)) : null;
            $V7 = str_replace("\40", '', $V7);
            if (!($V7 == '')) {
                goto Ww;
            }
            $V7 = null;
            Ww:
            $k2[$Ky] = $V7;
            u0:
        }
        AD:
        $J4 = $V8->mo_web3_get_option("\x6d\157\137\167\145\142\63\137\164\x6f\x6b\145\x6e\x5f\x63\157\x6e\x66\x69\147\x5f\x64\145\164\x61\151\x6c\163\137\163\x74\x6f\162\x65");
        $JC = $k2["\x63\x6f\x6e\x74\x72\141\143\x74\101\144\x64\162\x65\x73\163\116\141\x6d\x65"];
        $J4[$JC] = $k2;
        $V8->mo_web3_update_option("\155\x6f\x5f\167\145\x62\63\137\x74\x6f\153\145\x6e\137\143\157\156\146\151\147\137\144\145\x74\x61\x69\x6c\163\x5f\163\164\x6f\x72\x65", $J4);
        wp_send_json("\163\x75\143\x63\145\x73\x73");
    }
    public function deleteTokenDetails()
    {
        global $V8;
        $NJ = isset($_REQUEST["\164\157\153\145\x6e\x44\145\x74\141\x69\154\x73"]) ? $_REQUEST["\164\x6f\153\x65\x6e\104\x65\x74\x61\x69\x6c\163"] : null;
        $NJ = $NJ["\143\x6f\x6e\164\x72\141\143\x74\x41\x64\x64\162\x65\163\163\116\141\155\145"];
        $J4 = $V8->mo_web3_get_option("\x6d\x6f\137\167\145\142\x33\137\x74\157\153\x65\156\x5f\x63\x6f\156\x66\x69\147\137\144\145\164\x61\x69\x6c\163\x5f\x73\164\x6f\x72\145");
        foreach ($NJ as $Ky => $V7) {
            $Ky = isset($Ky) ? sanitize_text_field(wp_unslash($Ky)) : null;
            $V7 = isset($V7) ? sanitize_text_field(wp_unslash($V7)) : null;
            $JC = $V7;
            unset($J4[$JC]);
            F1:
        }
        wp:
        $V8->mo_web3_update_option("\155\x6f\137\x77\x65\142\x33\137\164\157\153\x65\156\x5f\x63\157\156\146\151\147\x5f\x64\145\x74\x61\x69\x6c\163\137\x73\164\x6f\x72\x65", $J4);
        wp_send_json("\x73\x75\143\143\x65\x73\x73");
    }
}
