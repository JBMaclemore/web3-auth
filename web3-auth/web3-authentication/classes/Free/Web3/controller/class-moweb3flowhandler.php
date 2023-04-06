<?php


namespace MoWeb3\controller;

require_once realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . "\56\56" . DIRECTORY_SEPARATOR . "\154\151\142" . DIRECTORY_SEPARATOR . "\x4b\145\143\143\x61\153" . DIRECTORY_SEPARATOR . "\x4b\x65\x63\143\x61\x6b\56\x70\x68\x70");
require_once realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . "\56\56" . DIRECTORY_SEPARATOR . "\154\x69\142" . DIRECTORY_SEPARATOR . "\x45\154\x6c\151\x70\164\x69\x63" . DIRECTORY_SEPARATOR . "\105\103\56\160\150\x70");
require_once realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . "\56\56" . DIRECTORY_SEPARATOR . "\154\151\x62" . DIRECTORY_SEPARATOR . "\105\154\154\x69\x70\164\151\x63" . DIRECTORY_SEPARATOR . "\103\x75\162\x76\x65\163\x2e\160\150\x70");
use Elliptic\EC;
use kornrunner\Keccak;
use MoWeb3\MoWeb3Utils;
use MoWeb3\view\ButtonView\MoWeb3View;
class MoWeb3FlowHandler
{
    private $data;
    private $request;
    private $utils;
    private $is_new_user;
    public $is_testing_wallet_address = false;
    public function __construct()
    {
        $this->utils = new \MoWeb3\MoWeb3Utils();
        add_action("\167\160\x5f\x61\x6a\141\x78\137\x6e\157\160\162\151\x76\x5f\164\171\160\x65\x5f\x6f\x66\137\162\x65\161\x75\x65\163\x74", array($this, "\x74\x79\x70\x65\x5f\x6f\x66\137\162\145\161\165\x65\163\x74"));
        add_action("\167\x70\x5f\x61\152\x61\170\137\164\171\x70\x65\137\x6f\146\x5f\162\x65\161\165\x65\x73\x74", array($this, "\x74\x79\x70\145\x5f\157\146\x5f\x72\145\161\165\145\x73\x74"));
        add_action("\x69\x6e\151\x74", array($this, "\x68\151\x64\144\x65\156\x5f\146\x6f\162\x6d\x5f\x64\141\x74\x61"));
        add_action("\x61\144\x6d\151\156\x5f\151\156\x69\x74", array($this, "\164\x6f\147\x67\154\x65\x5f\144\x69\163\160\154\141\171\x5f\142\x75\164\x74\157\x6e"));
        add_action("\x61\144\155\151\x6e\137\x69\156\x69\x74", array($this, "\164\x6f\x67\147\x6c\x65\137\x63\x72\x79\x70\164\157\x5f\x77\x61\x6c\x6c\145\x74\137\x62\x75\x74\x74\x6f\156\x5f\x64\x69\x73\160\x6c\x61\171"));
        add_action("\x61\x64\155\151\156\x5f\151\156\151\x74", array($this, "\154\157\x67\151\x6e\x5f\x77\141\x6c\x6c\145\x74\x5f\162\x65\163\164\x72\151\143\164\x69\157\156"));
        add_action("\x61\144\x6d\x69\156\x5f\x69\156\151\x74", array($this, "\x63\150\141\156\147\145\x5f\144\x69\x73\160\x6c\x61\x79\137\x62\x75\x74\164\x6f\x6e\137\x74\145\170\164"));
        add_action("\141\x64\155\x69\x6e\x5f\151\x6e\x69\164", array($this, "\156\x66\x74\137\163\x61\166\x65\x5f\163\145\x74\164\151\x6e\x67"));
        add_action("\141\144\155\x69\x6e\137\151\156\151\x74", array($this, "\143\x75\x73\164\x6f\155\x5f\x6c\x6f\x67\151\156\x5f\x62\165\164\164\157\x6e\x5f\163\141\166\145\137\163\x65\x74\164\x69\156\147"));
        add_action("\141\144\x6d\x69\x6e\x5f\x69\156\x69\x74", array($this, "\164\157\147\x67\154\145\x5f\x72\157\x6c\145\137\x6d\x61\160\160\151\x6e\x67"));
        add_action("\x61\x64\155\x69\156\137\151\x6e\x69\x74", array($this, "\163\141\166\145\137\x72\x6f\x6c\145\x5f\155\x61\160\160\x69\x6e\147"));
        add_action("\x61\144\155\151\x6e\x5f\151\x6e\151\164", array($this, "\x73\x61\x76\145\x5f\x63\x75\163\164\x6f\x6d\137\x69\x6e\154\151\156\145\x5f\146\x6f\x72\x6d\x5f\x73\145\x74\164\151\156\147\x73"));
        add_action("\x61\144\x6d\151\x6e\x5f\151\156\151\164", array($this, "\151\156\154\151\156\x65\x5f\x66\x6f\x72\x6d\137\x74\x6f\x67\147\x6c\145"));
        add_action("\167\x70", array($this, "\x69\x6e\151\x74\x69\x61\154\151\x7a\145\137\x74\157\x6b\x65\156\137\147\141\164\151\156\147\137\162\145\163\164\x72\x69\x63\164\x69\157\156"));
    }
    public function toggle_crypto_wallet_button_display()
    {
        if (!(isset($_POST["\x6d\157\137\x77\145\x62\x33\x5f\155\x75\x6c\x74\x69\160\x6c\145\137\x62\165\164\x74\157\156\x5f\144\x69\x73\160\x6c\141\171\137\x6e\x6f\156\x63\145"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\x6d\x6f\x5f\167\145\x62\63\x5f\155\165\154\164\x69\160\154\145\137\142\x75\164\x74\x6f\156\x5f\x64\x69\163\160\154\141\171\137\x6e\157\156\143\x65"])), "\155\x6f\x5f\x77\145\142\x33\x5f\x6d\x75\x6c\164\151\x70\x6c\145\137\x62\x75\x74\164\x6f\x6e\137\x64\151\163\x70\x6c\x61\171"))) {
            goto Ja;
        }
        $Fx = array();
        global $V8;
        $ga = $V8->get_multiple_crypto_wallet();
        foreach ($ga as $Ky => $V7) {
            $WW = $V7["\151\144"];
            $qH = isset($_POST[$WW]) ? sanitize_text_field(wp_unslash($_POST[$WW])) : '';
            $Fx[$WW] = $qH;
            EM:
        }
        G4:
        $this->utils->mo_web3_update_option("\155\x6f\137\167\145\x62\63\x5f\x64\151\163\x70\x6c\141\171\x5f\155\x75\x6c\x74\x69\x70\x6c\145\x5f\x62\x75\x74\164\157\x6e", $Fx);
        Ja:
    }
    public function inline_form_toggle()
    {
        global $V8;
        if (!(isset($_POST["\155\x6f\137\167\145\142\x33\137\x69\x6e\154\151\156\x65\137\x66\x6f\x72\x6d\x5f\x64\151\163\160\154\141\171\x5f\x74\x6f\x67\147\x6c\145\137\156\x6f\x6e\x63\x65"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\155\157\x5f\x77\145\x62\63\137\x69\x6e\x6c\151\156\145\x5f\146\157\162\155\x5f\x64\x69\163\x70\x6c\141\171\137\164\157\147\147\x6c\145\x5f\156\x6f\x6e\143\x65"])), "\155\x6f\137\x77\x65\x62\63\137\x69\156\x6c\x69\156\145\x5f\146\157\x72\x6d\137\x64\151\163\x70\x6c\x61\171\137\x74\x6f\147\x67\154\x65"))) {
            goto fd;
        }
        $ZX = isset($_POST["\155\x6f\137\x77\x65\142\x33\137\x69\x6e\x6c\x69\156\145\x5f\x66\157\x72\155\137\x64\151\x73\x70\x6c\141\171\x5f\164\x6f\x67\x67\154\145"]) ? sanitize_text_field(wp_unslash($_POST["\155\x6f\137\167\145\x62\63\x5f\151\x6e\x6c\151\x6e\x65\x5f\146\x6f\162\x6d\137\144\151\163\160\154\141\171\x5f\164\x6f\x67\x67\154\x65"])) : '';
        if ($ZX == "\x63\x68\x65\x63\x6b\145\144") {
            goto sx;
        }
        $V8->mo_web3_update_option("\155\157\137\x77\x65\x62\63\137\x69\x6e\x6c\x69\x6e\x65\137\146\x6f\x72\x6d\x5f\144\151\163\x70\154\141\x79\137\164\x6f\x67\x67\x6c\145", "\165\156\143\150\x65\x63\x6b\145\144");
        goto AK;
        sx:
        $V8->mo_web3_update_option("\155\x6f\137\x77\x65\x62\63\x5f\x69\x6e\x6c\151\x6e\x65\x5f\146\x6f\162\x6d\137\x64\151\x73\160\154\141\x79\137\164\x6f\147\x67\x6c\145", "\x63\x68\x65\143\153\x65\x64");
        AK:
        fd:
    }
    public function save_custom_inline_form_settings()
    {
        if (!(isset($_POST["\155\157\137\167\145\142\x33\x5f\x69\x6e\154\151\156\x65\137\146\x6f\x72\x6d\137\143\x6f\156\146\x69\147\x5f\156\157\x6e\x63\x65"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\x6d\157\x5f\167\145\142\63\137\x69\x6e\x6c\x69\x6e\145\x5f\146\x6f\x72\155\x5f\143\157\x6e\146\151\x67\x5f\156\x6f\x6e\x63\x65"])), "\155\157\x5f\x77\x65\142\x33\x5f\151\x6e\x6c\x69\x6e\145\137\146\x6f\162\x6d\x5f\143\x6f\156\146\151\x67"))) {
            goto Lt;
        }
        global $V8;
        $NI = isset($_POST["\x6c\x61\x62\x65\x6c"]) ? sizeof($_POST["\x6c\141\142\x65\154"]) : 0;
        $Pd = array();
        $dv = 0;
        $AQ = 0;
        dF:
        if (!($AQ < $NI)) {
            goto d5;
        }
        $Tr = false;
        if (!("\157\x6e" === sanitize_text_field($_POST["\162\x65\161\x75\151\x72\x65\x64"][$AQ + $dv + 1]))) {
            goto NW;
        }
        $dv++;
        $Tr = true;
        NW:
        $Pd[$AQ] = array("\x6c\x61\142\145\154" => sanitize_text_field($_POST["\x6c\141\x62\x65\154"][$AQ]), "\x74\x79\x70\145" => sanitize_text_field($_POST["\x74\171\x70\145"][$AQ]), "\155\145\x74\x61\x5f\153\x65\x79" => sanitize_text_field($_POST["\x6d\145\x74\x61\137\153\145\171"][$AQ]), "\162\145\x71\165\151\162\x65\x64" => $Tr);
        pz:
        $AQ++;
        goto dF;
        d5:
        $V8->mo_web3_update_option("\155\x6f\x5f\x77\x65\x62\63\x5f\x69\156\x6c\151\x6e\145\x5f\146\157\162\x6d\x5f\x73\x65\164\x74\x69\x6e\147\x73", json_encode($Pd), true);
        Lt:
    }
    public function is_curr_page_is_resricted_page($fL, $CC)
    {
        $Or = strlen($CC);
        $jr = strpos($fL, $CC);
        if (!($jr === false)) {
            goto ia;
        }
        return 0;
        ia:
        return 1;
    }
    public function change_display_button_text()
    {
        if (!(isset($_POST["\x6d\157\x5f\x77\x65\x62\x33\137\142\165\x74\x74\157\x6e\x5f\143\x75\163\x74\x6f\x6d\x5f\x74\145\x78\164\137\x6e\157\x6e\x63\145"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\x6d\157\x5f\167\x65\x62\63\137\x62\165\x74\164\x6f\x6e\137\143\x75\x73\x74\x6f\155\x5f\164\145\170\x74\137\x6e\157\x6e\x63\145"])), "\x6d\x6f\137\167\x65\x62\63\x5f\x62\x75\x74\164\157\156\137\143\x75\163\164\157\155\137\x74\x65\x78\164"))) {
            goto d6;
        }
        $Av = $_POST["\155\157\137\167\x65\x62\x33\x5f\142\165\x74\164\157\x6e\x5f\143\165\x73\x74\x6f\155\137\x74\145\170\x74"];
        $this->utils->mo_web3_update_option("\155\157\x5f\x77\145\x62\x33\x5f\142\165\164\x74\157\156\x5f\143\x75\163\164\x6f\x6d\137\x74\145\x78\x74", $Av);
        global $V8;
        $V8->mo_web3_update_option(\MoWeb3Constants::PANEL_MESSAGE_OPTION, "\114\157\147\151\156\40\x42\x75\164\164\x6f\156\40\x54\145\x78\x74\x20\103\150\x61\x6e\x67\x65\x64\x21");
        $V8->mo_web3_show_success_message();
        d6:
    }
    public function custom_login_button_save_setting()
    {
        global $V8;
        if (!(isset($_POST["\x6d\157\137\167\x65\x62\63\137\143\165\163\164\x6f\x6d\137\154\x6f\147\151\156\x5f\x62\x75\x74\164\157\156\137\156\x6f\x6e\143\145"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\x6d\157\x5f\167\x65\x62\x33\137\143\165\163\164\157\155\137\154\157\x67\151\156\137\142\x75\x74\x74\157\x6e\x5f\x6e\x6f\156\143\145"])), "\155\x6f\137\x77\x65\142\x33\x5f\x63\x75\163\x74\x6f\x6d\137\154\157\147\x69\156\x5f\x62\x75\x74\x74\x6f\156"))) {
            goto dP;
        }
        $vf = isset($_POST["\155\x6f\167\x65\x62\x33\x43\165\163\x74\157\155\103\x73\163"]) ? $_POST["\155\157\x77\145\x62\x33\103\x75\163\164\157\155\103\x73\163"] : '';
        $Av = $_POST["\155\x6f\137\167\145\x62\63\137\x62\x75\x74\164\x6f\156\137\143\165\163\164\x6f\x6d\137\164\145\x78\x74"];
        $vf = trim($vf ?? '');
        $V8->mo_web3_update_option("\x6d\x6f\137\167\145\x62\63\137\142\x75\164\164\157\x6e\x5f\143\165\163\164\x6f\155\x5f\x74\145\170\x74", $Av);
        $V8->mo_web3_show_success_message();
        if ('' == $vf || strlen($vf) < 5) {
            goto l1;
        }
        $V8->mo_web3_update_option("\155\157\x5f\167\x65\142\x33\137\154\x6f\x67\x69\156\x5f\x62\165\164\x74\x6f\156\137\143\165\163\164\x6f\x6d\137\x63\163\x73", $vf);
        goto Ln;
        l1:
        $V8->mo_web3_delete_option("\155\157\137\x77\x65\x62\63\x5f\154\157\147\x69\x6e\137\142\x75\164\x74\x6f\156\137\143\x75\163\164\157\x6d\x5f\143\163\163");
        Ln:
        $V8->mo_web3_update_option(\MoWeb3Constants::PANEL_MESSAGE_OPTION, "\x4c\x6f\147\x69\156\40\x42\x75\x74\x74\x6f\156\x20\123\145\164\x74\151\156\x67\40\123\x61\166\x65\x64\x21");
        dP:
        if (!(isset($_POST["\155\157\x5f\x77\145\x62\63\137\x63\165\163\x74\157\x6d\137\160\x72\x6f\x66\x69\154\145\137\143\x6f\155\160\x6c\x65\x74\151\x6f\156\x5f\162\x65\x64\x69\x72\145\x63\x74\137\165\162\154\x5f\x6e\157\x6e\x63\x65"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\155\x6f\x5f\167\x65\x62\63\x5f\143\x75\163\x74\x6f\x6d\x5f\x70\162\157\146\x69\x6c\x65\x5f\143\x6f\x6d\x70\154\145\x74\151\157\x6e\137\162\x65\144\x69\x72\145\x63\x74\x5f\165\162\x6c\137\x6e\157\156\143\145"])), "\x6d\x6f\x5f\x77\145\142\63\x5f\x63\x75\163\x74\157\x6d\137\160\x72\157\x66\x69\154\x65\x5f\143\x6f\155\x70\x6c\145\164\x69\x6f\x6e\x5f\x72\x65\x64\151\x72\x65\143\x74\x5f\x75\x72\154"))) {
            goto tl;
        }
        $dq = sanitize_url($_POST["\155\x6f\137\167\145\142\63\137\x63\165\x73\164\x6f\155\137\x70\162\157\x66\151\154\x65\137\x63\x6f\x6d\160\x6c\x65\x74\151\x6f\156\x5f\x72\x65\x64\151\x72\145\143\164\x5f\165\x72\154"], $Um = null);
        $nT = false;
        if (!isset($_POST["\155\x6f\137\167\145\142\63\137\165\163\145\x72\x6e\x61\x6d\145\x5f\163\160\x65\143\151\x66\x69\143\x61\x74\x69\157\x6e\137\x63\150\145\143\x6b"])) {
            goto Ep;
        }
        $nT = sanitize_text_field($_POST["\x6d\x6f\x5f\x77\x65\142\63\x5f\165\x73\x65\162\156\141\x6d\x65\x5f\163\160\145\x63\x69\x66\151\x63\141\164\x69\157\156\137\x63\x68\x65\143\x6b"]);
        Ep:
        $V8->mo_web3_update_option("\155\157\x5f\167\145\142\x33\x5f\x75\163\145\162\x6e\141\x6d\145\x5f\x73\x70\145\143\151\x66\x69\143\x61\164\x69\157\156", $nT);
        $V8->mo_web3_update_option("\x6d\157\x5f\167\x65\x62\x33\x5f\x63\x75\x73\x74\x6f\x6d\137\160\162\x6f\146\151\154\145\137\143\x6f\x6d\x70\x6c\145\x74\x69\x6f\156\x5f\162\x65\x64\151\x72\x65\x63\x74\137\165\162\x6c", $dq);
        tl:
    }
    public function get_curr_page_ID()
    {
        $post = get_post();
        return !empty($post) ? $post->ID : null;
    }
    public function get_curr_page_url()
    {
        $Ov = $this->get_curr_page_ID();
        if ($Ov) {
            goto tL;
        }
        return null;
        tL:
        $fL = get_permalink($Ov);
        return $fL;
    }
    public function error_page_html()
    {
        $i2 .= '';
        $i2 .= "\x3c\x64\x69\x76\40\40\163\164\171\154\145\x3d\42\164\x65\x78\164\55\141\x6c\151\147\x6e\x3a\x20\143\145\x6e\164\x65\x72\73\x22\x3e";
        $i2 .= "\x3c\x64\151\x76\76";
        $i2 .= "\x3c\x68\61\x20\163\x74\x79\x6c\145\75\42\146\157\156\x74\x2d\x73\x69\x7a\x65\72\40\61\x30\x30\60\x25\x3b\40\x6d\x61\x72\147\151\x6e\72\x30\160\x78\73\42\x3e\64\60\63\74\57\x68\x31\x3e";
        $i2 .= "\x3c\x68\x31\40\x20\x73\164\x79\154\145\x3d\42\x66\x6f\x6e\164\55\x73\151\x7a\x65\x3a\x20\x32\60\60\45\73\x6d\x61\162\x67\151\156\55\x74\157\160\72\60\x70\170\x3b\42\x3e\106\157\162\x62\151\x64\144\145\156\x3c\x2f\150\x31\x3e";
        $i2 .= "\74\x70\x3e\x41\143\x63\145\x73\x73\40\164\x6f\40\164\150\x69\163\x20\160\x61\x67\145\x20\x6f\x6e\x20\163\145\162\x76\145\162\40\163\x69\x64\x65\40\x69\x73\x20\144\145\x6e\151\145\144\74\57\x70\76";
        $i2 .= "\x3c\57\144\x69\x76\x3e";
        $i2 .= "\74\57\x64\x69\x76\x3e";
        return $i2;
    }
    public function display_crypto_button_for_token_gated_page($fL, $yh)
    {
        echo "\74\144\x69\x76\40\x20\163\x74\x79\154\x65\75\42\x64\x69\x73\160\154\141\171\72\x20\146\x6c\x65\x78\x3b\152\165\x73\164\x69\x66\x79\x2d\x63\157\x6e\x74\x65\x6e\164\x3a\40\143\145\x6e\x74\145\x72\73\x61\x6c\x69\x67\x6e\55\x69\x74\145\155\163\x3a\40\143\x65\x6e\164\x65\x72\x3b\150\145\151\147\150\164\x3a\40\x31\x30\x30\x25\73\x20\42\76";
        $LZ = '';
        $Av = '';
        if (0 == $yh) {
            goto dU;
        }
        global $V8;
        $KG = $V8->mo_web3_get_option("\155\157\137\167\145\142\x33\x5f\x62\165\164\x74\x6f\x6e\137\x63\165\163\x74\x6f\x6d\137\x74\145\x78\x74");
        $Av = $KG;
        goto N0;
        dU:
        $Av = "\103\157\156\156\x65\143\x74\40\x77\151\164\150\40\x43\162\171\x70\164\157\167\141\154\x6c\x65\164";
        N0:
        $LZ = "\133\x6d\157\137\167\145\142\63\137\154\x6f\x67\151\156\137\x62\x75\x74\x74\157\x6e\x5f\163\150\x6f\162\x74\x63\157\x64\x65\x20\x72\x65\x64\x69\x72\x65\x63\x74\151\157\x6e\x5f\x75\162\x6c\x3d\x22" . $fL . "\42\x20\164\x65\x78\x74\x5f\143\x6f\154\157\x72\75\x22\x62\x6c\141\143\x6b\x22\x20\142\165\x74\x74\x6f\156\137\x74\x65\170\x74\75\x22" . $Av . "\42\135";
        echo do_shortcode($LZ);
        echo "\74\57\144\x69\x76\x3e";
    }
    public function is_site_admin()
    {
        return in_array("\x61\144\x6d\151\x6e\x69\163\164\162\x61\x74\157\x72", wp_get_current_user()->roles);
    }
    public function initialize_token_gating_restriction()
    {
        global $V8;
        $UQ = $V8->mo_web3_get_option("\x6d\157\137\x77\145\x62\63\137\x63\157\156\x74\x65\x6e\x74\137\x67\141\164\x69\x6e\147\x5f\x63\x6f\156\x66\x69\147\137\x64\x65\x74\141\151\154\163\137\x73\x74\x6f\162\x65");
        $fL = $V8->get_current_page_url();
        if (!($UQ && $fL)) {
            goto Ry;
        }
        foreach ($UQ as $Ky => $V7) {
            $jm = $Ky;
            $mC = $V7["\x65\162\162\157\x72\125\x52\x4c"];
            $mo = $this->is_curr_page_is_resricted_page($fL, $jm);
            $I0 = get_current_user_id();
            $z_ = get_user_meta($I0, "\x6d\x6f\167\x65\x62\x33\x5f\167\x61\x6c\154\145\164\137\x61\144\x64\x72\x65\x73\163", true);
            $Ky = $I0 . "\137\157\167\156\145\144\x5f\x6e\146\164";
            $la = get_user_meta($I0, $Ky, true);
            $la = json_decode($la, TRUE);
            if (!$mo) {
                goto BD;
            }
            if (is_user_logged_in()) {
                goto sb;
            }
            $this->display_crypto_button_for_token_gated_page($fL, 1);
            exit;
            goto M7;
            sb:
            if (!$this->is_site_admin()) {
                goto LF;
            }
            goto HK;
            LF:
            if (!empty($z_)) {
                goto h0;
            }
            $this->display_crypto_button_for_token_gated_page($fL, 0);
            exit;
            h0:
            $Iz = explode("\x2c", $V7["\143\157\x6e\x74\x72\x61\x63\x74\x41\144\144\x72\x65\163\x73\116\141\155\x65"]);
            $I0 = get_current_user_id();
            $Ky = $I0 . "\137\x6f\x77\x6e\x65\144\x5f\164\x6f\x6b\x65\x6e\x73";
            $hD = get_user_meta($I0, $Ky, true);
            if (!(is_null($hD) && wp_redirect($mC))) {
                goto sX;
            }
            exit;
            sX:
            $F3 = false;
            $AQ = 0;
            Z0:
            if (!($AQ < sizeof($Iz))) {
                goto Ni;
            }
            $JC = $Iz[$AQ];
            if (!isset($hD[$JC])) {
                goto bJ;
            }
            $F3 = $F3 || $hD[$JC]["\150\x61\x73\x43\157\x6e\x74\x65\x6e\164\x41\x63\143\x65\163\163"];
            if (!$F3) {
                goto uN;
            }
            goto Ni;
            uN:
            bJ:
            wQ:
            $AQ++;
            goto Z0;
            Ni:
            if (!($F3 === false && wp_redirect($mC))) {
                goto iu;
            }
            exit;
            iu:
            HK:
            M7:
            BD:
            jy:
        }
        mX:
        Ry:
    }
    public function login_wallet_restriction()
    {
        if (!(isset($_POST["\155\157\137\x77\x65\x62\63\x5f\x6c\x6f\147\x69\156\x5f\167\141\154\154\x65\164\x5f\x72\x65\163\164\x72\x69\x63\164\151\157\x6e\x5f\x6e\x6f\x6e\x63\145"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\x6d\157\137\x77\x65\142\63\137\154\157\x67\151\x6e\137\x77\141\154\154\145\x74\137\162\145\163\164\x72\151\x63\x74\x69\157\x6e\x5f\x6e\157\156\x63\x65"])), "\155\x6f\x5f\x77\145\x62\63\x5f\x6c\x6f\x67\x69\156\x5f\x77\x61\154\154\145\164\x5f\162\x65\x73\x74\x72\151\143\164\x69\x6f\156"))) {
            goto Wm;
        }
        $qH = isset($_POST["\x6d\157\x5f\167\145\142\63\x5f\154\x6f\147\x69\156\x5f\167\141\x6c\x6c\x65\164\137\162\145\x73\x74\x72\151\x63\164\x69\x6f\156"]) ? sanitize_text_field(wp_unslash($_POST["\155\x6f\x5f\167\145\x62\63\137\154\x6f\x67\x69\x6e\x5f\167\x61\x6c\x6c\145\x74\137\x72\x65\163\x74\x72\151\x63\x74\151\x6f\156"])) : '';
        if ($qH == "\x63\x68\x65\143\x6b\145\x64") {
            goto Bb;
        }
        $this->utils->mo_web3_update_option("\x6d\157\137\x77\145\x62\x33\137\x6c\157\x67\x69\x6e\x5f\x77\141\x6c\x6c\x65\164\x5f\162\145\163\x74\x72\151\143\164\151\x6f\x6e", "\x75\156\143\x68\145\x63\x6b\x65\144");
        goto BF;
        Bb:
        $this->utils->mo_web3_update_option("\x6d\x6f\x5f\x77\x65\142\63\137\154\x6f\x67\151\156\137\167\x61\x6c\154\145\164\137\162\145\x73\x74\162\151\x63\x74\151\x6f\156", "\x63\x68\x65\x63\x6b\145\x64");
        BF:
        Wm:
    }
    public function toggle_display_button()
    {
        if (!(isset($_POST["\x6d\x6f\137\167\x65\142\63\x5f\142\x75\x74\164\x6f\156\x5f\x64\x69\163\x70\x6c\141\171\137\156\x6f\x6e\x63\x65"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\x6d\157\137\x77\x65\142\x33\137\x62\x75\164\x74\157\156\137\144\151\x73\160\154\141\x79\137\x6e\157\156\x63\145"])), "\155\x6f\x5f\x77\145\142\x33\137\142\x75\164\x74\157\156\137\x64\x69\163\x70\x6c\x61\171"))) {
            goto kx;
        }
        $qH = isset($_POST["\x6d\157\x5f\x77\x65\x62\63\x5f\x62\165\x74\164\157\156\137\x63\150\145\143\x6b"]) ? sanitize_text_field(wp_unslash($_POST["\155\157\x5f\167\x65\142\x33\137\x62\x75\164\164\157\x6e\x5f\143\x68\145\143\153"])) : '';
        if ($qH == "\143\150\x65\143\153\x65\x64") {
            goto ht;
        }
        $this->utils->mo_web3_update_option("\155\157\137\x77\145\x62\63\x5f\144\x69\x73\x70\154\x61\171\137\154\157\x67\151\x6e\x5f\142\165\x74\164\157\156", "\165\x6e\x63\x68\x65\x63\x6b\145\x64");
        goto Gq;
        ht:
        $this->utils->mo_web3_update_option("\155\x6f\137\x77\145\142\x33\137\144\x69\163\160\154\141\x79\137\154\x6f\x67\x69\x6e\x5f\x62\165\164\x74\157\x6e", "\143\x68\145\x63\153\145\x64");
        Gq:
        kx:
    }
    public function toggle_role_mapping()
    {
        global $V8;
        if (!(isset($_POST["\x6d\157\137\x77\x65\x62\63\x5f\145\x6e\x61\142\x6c\145\x5f\162\x6f\154\145\x5f\x6d\141\160\x70\151\x6e\x67\x5f\156\157\156\143\x65"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\x6d\x6f\137\x77\145\142\x33\137\x65\x6e\x61\x62\x6c\145\137\x72\157\x6c\145\x5f\155\x61\160\x70\151\x6e\x67\x5f\x6e\x6f\156\143\145"])), "\155\x6f\x5f\x77\x65\142\x33\x5f\145\x6e\x61\x62\x6c\145\137\162\157\x6c\145\137\155\141\x70\x70\x69\156\147"))) {
            goto VT;
        }
        $qH = isset($_POST["\x65\x6e\x61\x62\x6c\x65\137\162\x6f\154\145\137\x6d\141\160\160\x69\x6e\147"]) ? sanitize_text_field(wp_unslash($_POST["\x65\x6e\x61\142\154\x65\137\x72\x6f\x6c\x65\x5f\x6d\141\160\x70\x69\x6e\147"])) : false;
        $Js = $V8->mo_web3_get_option("\155\157\x5f\x77\x65\142\63\x5f\162\157\x6c\x65\137\x6d\141\160\x70\x69\x6e\147");
        $Js["\145\x6e\x61\142\154\145\x5f\x72\157\154\145\137\155\141\160\x70\x69\x6e\x67"] = $qH;
        $V8->mo_web3_update_option("\155\157\x5f\x77\x65\x62\x33\x5f\x72\157\154\145\137\155\141\x70\160\x69\156\147", $Js);
        VT:
    }
    public function save_role_mapping()
    {
        global $V8;
        if (!(isset($_POST["\x6d\x6f\x5f\x77\x65\x62\63\x5f\x73\141\166\x65\x5f\162\x6f\154\145\x5f\155\141\x70\160\x69\x6e\147\137\156\157\156\x63\x65"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\155\157\x5f\x77\x65\x62\x33\x5f\163\x61\x76\145\x5f\162\157\x6c\145\137\155\141\x70\x70\151\x6e\x67\x5f\x6e\x6f\x6e\143\x65"])), "\155\157\137\x77\x65\x62\x33\137\x73\141\166\x65\x5f\x72\x6f\154\145\137\155\x61\160\x70\151\156\x67"))) {
            goto zV;
        }
        $Js = $V8->mo_web3_get_option("\155\x6f\137\x77\x65\142\x33\x5f\162\157\x6c\145\137\x6d\141\160\x70\x69\156\147");
        $Js["\x72\x65\x73\x74\x72\x69\x63\164\x5f\x6c\x6f\x67\151\156\137\x66\x6f\x72\x5f\155\x61\160\x70\x65\x64\x5f\162\x6f\154\x65\163"] = isset($_POST["\x72\145\x73\164\162\x69\x63\164\137\154\x6f\147\151\156\x5f\x66\157\x72\x5f\155\x61\x70\x70\x65\x64\137\x72\x6f\154\x65\163"]) ? sanitize_text_field(wp_unslash($_POST["\162\145\163\164\x72\x69\x63\x74\x5f\154\157\x67\151\156\137\146\x6f\x72\137\155\x61\x70\x70\x65\144\x5f\x72\x6f\x6c\145\x73"])) : false;
        $Js["\153\x65\x65\x70\137\x65\170\x69\163\164\x69\x6e\147\137\165\163\x65\x72\x5f\162\x6f\x6c\145\x73"] = isset($_POST["\153\145\x65\x70\x5f\145\170\151\x73\164\x69\x6e\147\137\x75\x73\145\162\137\x72\157\x6c\145\163"]) ? sanitize_text_field(wp_unslash($_POST["\x6b\x65\x65\x70\137\145\170\151\163\164\x69\x6e\147\137\165\163\145\x72\137\162\157\x6c\x65\x73"])) : false;
        $Js["\144\x6f\x6e\x74\137\144\151\x73\164\165\x72\142\137\x65\170\x69\163\164\x69\x6e\x67\137\165\163\145\162\137\162\157\154\x65\163"] = isset($_POST["\x64\157\156\164\x5f\144\151\x73\164\165\162\x62\x5f\145\x78\151\163\x74\x69\156\x67\x5f\165\x73\x65\162\x5f\162\157\154\145\x73"]) ? sanitize_text_field(wp_unslash($_POST["\x64\x6f\156\x74\x5f\144\x69\x73\x74\165\x72\x62\x5f\145\170\x69\163\164\x69\x6e\x67\137\x75\x73\145\162\137\x72\x6f\154\145\163"])) : false;
        $Js["\137\x6d\141\160\x70\x69\x6e\147\x5f\166\x61\x6c\165\145\137\144\x65\146\x61\x75\154\x74"] = isset($_POST["\137\155\141\160\160\x69\156\147\137\166\x61\x6c\x75\145\x5f\x64\x65\146\141\x75\154\x74"]) ? sanitize_text_field(wp_unslash($_POST["\137\x6d\141\160\160\x69\156\x67\137\x76\141\154\165\145\x5f\x64\145\x66\x61\x75\x6c\x74"])) : "\x73\165\142\163\x63\x72\151\x62\x65\162";
        $gF = 100;
        $qu = 0;
        $sC = [];
        if (!isset($_POST["\x6d\x61\160\160\151\156\x67\x5f\153\x65\x79\137"])) {
            goto bZ;
        }
        $sC = array_map("\163\141\156\x69\x74\151\172\x65\137\164\145\x78\164\137\x66\151\145\x6c\144", wp_unslash($_POST["\x6d\x61\160\160\x69\156\x67\x5f\153\145\x79\x5f"]));
        bZ:
        $fw = count($sC);
        $h7 = 1;
        $Bh = 1;
        dt:
        if (!($Bh <= $fw)) {
            goto fE;
        }
        if (isset($_POST["\155\x61\160\x70\151\x6e\x67\137\x6b\x65\x79\137"][$h7])) {
            goto w4;
        }
        Su:
        if (!($h7 < 100)) {
            goto tt;
        }
        if (!isset($_POST["\155\x61\x70\x70\x69\x6e\147\137\153\145\x79\x5f"][$h7])) {
            goto V2;
        }
        if (!('' === $_POST["\x6d\x61\160\x70\x69\156\x67\x5f\153\x65\171\x5f"][$h7]["\166\141\x6c\x75\145"])) {
            goto bd;
        }
        $h7++;
        goto Su;
        bd:
        $Js["\x5f\x6d\x61\x70\160\151\156\x67\x5f\x6b\x65\x79\x5f" . $Bh] = sanitize_text_field(wp_unslash(isset($_POST["\155\141\160\x70\151\x6e\x67\x5f\153\145\x79\x5f"][$h7]) ? $_POST["\155\x61\160\160\151\x6e\x67\137\x6b\x65\x79\137"][$h7]["\x76\141\x6c\165\x65"] : ''));
        $Js["\137\155\x61\160\x70\151\156\x67\137\x76\141\154\x75\x65\x5f" . $Bh] = sanitize_text_field(wp_unslash(isset($_POST["\155\x61\160\160\151\x6e\147\x5f\x6b\x65\x79\137"][$h7]) ? $_POST["\x6d\x61\160\160\151\x6e\x67\x5f\153\145\x79\137"][$h7]["\x72\x6f\x6c\x65"] : ''));
        $qu++;
        $h7++;
        goto tt;
        V2:
        $h7++;
        goto Su;
        tt:
        goto Cf;
        w4:
        if (!('' === $_POST["\x6d\141\160\x70\x69\x6e\147\x5f\x6b\x65\x79\137"][$h7]["\x76\x61\154\165\x65"])) {
            goto to;
        }
        $h7++;
        goto m6;
        to:
        $Js["\137\x6d\x61\x70\x70\151\156\147\137\153\145\x79\137" . $Bh] = sanitize_text_field(wp_unslash(isset($_POST["\155\141\x70\160\x69\156\x67\137\x6b\x65\x79\x5f"][$h7]) ? $_POST["\x6d\141\160\x70\x69\156\x67\x5f\x6b\145\171\137"][$h7]["\166\141\x6c\165\145"] : ''));
        $Js["\x5f\x6d\141\x70\x70\x69\x6e\147\137\166\141\154\165\145\x5f" . $Bh] = sanitize_text_field(wp_unslash(isset($_POST["\x6d\141\x70\160\x69\156\x67\x5f\x6b\145\x79\137"][$h7]) ? $_POST["\155\141\160\160\x69\156\147\137\x6b\x65\x79\137"][$h7]["\162\157\154\x65"] : ''));
        $h7++;
        $qu++;
        Cf:
        m6:
        $Bh++;
        goto dt;
        fE:
        $Js["\162\157\154\145\137\155\141\160\160\151\156\147\x5f\143\157\165\156\x74"] = $qu;
        $jZ = $V8->mo_web3_update_option("\155\157\137\x77\x65\x62\63\137\x72\157\x6c\x65\x5f\x6d\141\160\160\151\156\147", $Js);
        zV:
    }
    public function nft_save_setting()
    {
        if (!(isset($_POST["\155\x6f\137\167\145\x62\x33\x5f\143\157\156\x74\x65\156\x74\x5f\162\145\x73\164\x72\151\x63\x74\151\157\x6e\137\156\x6f\156\143\145"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\155\157\x5f\167\x65\x62\63\x5f\143\x6f\x6e\164\x65\x6e\164\137\x72\x65\163\x74\162\151\143\x74\151\x6f\x6e\x5f\156\x6f\x6e\x63\x65"])), "\x6d\x6f\x5f\167\145\x62\x33\137\x63\x6f\x6e\164\145\x6e\164\x5f\162\145\163\164\162\x69\x63\x74\151\157\156"))) {
            goto CW;
        }
        $Fw = isset($_POST["\160\141\147\145\125\x72\154\x52\145\147\145\170"]) ? $_POST["\x70\x61\x67\145\125\162\154\122\x65\147\x65\170"] : [];
        $HE = isset($_POST["\x63\157\x6e\x74\162\141\143\x74\101\x64\x64\x72\145\163\163"]) ? $_POST["\143\x6f\156\164\162\141\x63\164\101\144\x64\162\x65\x73\x73"] : [];
        $DA = isset($_POST["\142\154\x6f\143\153\143\x68\141\x69\156"]) ? $_POST["\x62\154\157\x63\x6b\143\x68\x61\151\156"] : [];
        $mC = isset($_POST["\145\162\162\x6f\x72\125\x72\154"]) ? $_POST["\145\x72\162\x6f\162\x55\x72\154"] : [];
        $EA = array();
        $Fw = array_values($Fw);
        $HE = array_values($HE);
        $DA = array_values($DA);
        $mC = array_values($mC);
        foreach ($Fw as $WZ => $Ky) {
            $Ky = sanitize_text_field($Ky);
            $EA[$Ky] = array("\143\x6f\156\164\162\x61\x63\x74\101\144\x64\x72\145\163\163" => explode("\73", sanitize_text_field(wp_unslash($HE[$WZ]))), "\x62\x6c\x6f\143\x6b\x63\x68\141\x69\156" => sanitize_text_field(wp_unslash($DA[$WZ])), "\145\162\162\157\x72\x55\162\154" => sanitize_text_field($mC[$WZ]));
            MB:
        }
        hw:
        $this->utils->mo_web3_update_option("\155\x6f\x5f\x77\145\x62\63\x5f\156\146\x74\137\163\x65\164\x74\x69\x6e\147\x73", $EA);
        global $V8;
        $V8->mo_web3_update_option(\MoWeb3Constants::PANEL_MESSAGE_OPTION, "\116\x46\124\40\163\x65\164\164\151\156\147\x20\x73\141\166\145\144");
        $V8->mo_web3_show_success_message();
        CW:
    }
    public function hidden_form_data()
    {
        if (!(isset($_POST["\155\x6f\137\x77\145\142\x33\x5f\150\151\x64\144\x65\x6e\146\x6f\162\x6d\x5f\x6e\157\156\x63\145"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\155\x6f\137\x77\145\142\63\137\x68\x69\x64\x64\145\x6e\x66\x6f\x72\x6d\x5f\156\157\x6e\x63\x65"])), "\x6d\157\137\x77\145\142\63\x5f\x77\x70\137\156\x6f\x6e\143\x65"))) {
            goto gb;
        }
        $j1 = isset($_POST["\156\157\x6e\143\145"]) ? sanitize_text_field(wp_unslash($_POST["\x6e\157\x6e\x63\x65"])) : '';
        $S_ = isset($_POST["\141\x64\144\x72\145\x73\163"]) ? sanitize_text_field(wp_unslash($_POST["\x61\x64\144\x72\145\163\x73"])) : '';
        $rL = isset($_POST["\x63\150\x65\143\x6b\x4e\x66\x74"]) ? sanitize_text_field(wp_unslash($_POST["\143\150\x65\143\x6b\x4e\146\x74"])) : '';
        $NG = isset($_POST["\143\157\x6e\x74\x72\x61\x63\x74\x73"]) ? json_decode(stripslashes($_POST["\143\157\x6e\x74\162\141\143\164\x73"]), true) : '';
        $XS = isset($_POST["\164\157\153\x65\x6e\x43\x6f\x6e\x66\x69\x67\122\x65\x73\x75\154\x74\x73"]) ? json_decode(stripslashes($_POST["\x74\157\x6b\145\x6e\x43\157\x6e\146\x69\x67\x52\x65\x73\165\154\x74\x73"]), true) : '';
        $sm = isset($_POST["\x72\145\144\151\162\x65\143\x74\151\157\x6e\125\x72\154"]) ? sanitize_text_field(wp_unslash($_POST["\x72\x65\144\x69\162\x65\143\x74\151\x6f\156\x55\162\x6c"])) : site_url();
        $BC = isset($_POST["\167\x61\154\x6c\145\164\124\x79\160\145"]) ? sanitize_text_field(stripslashes($_POST["\167\x61\x6c\154\x65\x74\x54\171\x70\x65"])) : '';
        $Kp = $this->utils->mo_web3_get_transient($S_);
        if (!("\123\151\147\x6e\x65\144\x41\x75\x74\x68" == $BC)) {
            goto fa;
        }
        if (!($j1 != $Kp)) {
            goto eL;
        }
        wp_send_json("\x45\x72\x72\x6f\x72\x20\151\156\x20\x73\x69\147\x6e\141\164\165\162\145");
        eL:
        fa:
        if (!$this->is_testing_wallet_address) {
            goto iX;
        }
        $S_ = $this->is_testing_wallet_address;
        iX:
        $f4 = array("\155\145\x74\141\x5f\x6b\x65\171" => "\155\157\167\145\x62\63\x5f\x77\141\154\154\x65\164\x5f\141\144\144\x72\x65\163\x73", "\x6d\x65\164\x61\x5f\166\141\154\165\x65" => $S_);
        $user = false;
        $Eh = is_user_logged_in();
        $B6 = get_users($f4);
        $sU = count($B6);
        $yv = false;
        if (0 == $sU && false === $Eh) {
            goto db;
        }
        if ($sU > 1) {
            goto Np;
        }
        $user = $B6[0];
        goto Hi;
        Np:
        wp_send_json("\111\156\x76\141\154\151\x64\x20\122\x65\x71\x75\145\x73\x74");
        Hi:
        goto fs;
        db:
        $yv = true;
        fs:
        $Hv = '';
        if (true === $Eh) {
            goto XU;
        }
        if (!$yv) {
            goto wG;
        }
        $user = $this->utils->mo_web3_get_user($S_);
        wG:
        if (!(false === $user)) {
            goto sT;
        }
        apply_filters("\x6d\x6f\x5f\x77\x65\142\x33\137\156\157\x5f\x77\x61\x6c\154\145\x74\137\162\145\144\x69\x72\x65\143\164\x5f\x75\x72\x6c", false);
        sT:
        $Hv = $user->ID;
        clean_user_cache($user->ID);
        wp_clear_auth_cookie();
        wp_set_current_user($user->ID);
        wp_set_auth_cookie($user->ID, true);
        update_user_caches($user);
        do_action("\167\x70\x5f\154\x6f\x67\x69\156", $user->data->user_login, $user);
        goto Ug;
        XU:
        $sp = get_current_user_id();
        $Hv = $sp;
        if (!($user && $sp != $user->ID)) {
            goto xi;
        }
        wp_send_json("\x45\x72\x72\157\162\x3a\x20\124\150\151\x73\x20\x77\141\154\x6c\145\164\x20\x69\163\40\x61\154\162\145\141\x64\x79\x20\x69\x6e\x20\165\163\x65\x20\x62\x79\40\141\156\x6f\164\150\145\x72\40\x75\x73\x65\x72\56");
        xi:
        Ug:
        update_user_meta($Hv, "\x6d\x6f\x77\145\142\63\x5f\167\141\x6c\154\145\x74\137\x61\x64\144\162\x65\x73\x73", $S_);
        $Ky = $Hv . "\x5f\157\x77\156\145\x64\137\164\157\153\x65\156\163";
        update_user_meta($Hv, $Ky, $XS);
        $this->apply_role_mapping($user, $NG);
        do_action("\155\x6f\137\x77\145\x62\63\137\x6c\144\x5f\x63\157\165\162\x73\x65\x5f\155\x61\x70\160\151\x6e\147", $XS);
        do_action("\155\157\137\x77\x65\x62\63\137\167\x63\137\x63\157\x75\160\157\156\137\x6d\x61\160\160\x69\x6e\x67", $XS);
        do_action("\155\157\x5f\167\145\142\63\137\x62\142\137\x70\x72\157\x66\151\x6c\x65\137\x6d\x61\x70\x70\151\x6e\x67", $XS);
        do_action("\x6d\157\137\167\145\x62\63\137\x6d\x65\155\142\x65\162\x70\x72\x65\163\x73\x5f\x6d\x65\155\x62\x65\x72\x73\150\151\160\137\x6d\141\x70\x70\151\156\147", $XS);
        if (!$yv) {
            goto J8;
        }
        $yr = array("\111\104" => $user->ID);
        $Pd = json_decode($this->utils->mo_web3_get_option("\155\x6f\x5f\x77\145\x62\63\x5f\151\x6e\x6c\151\x6e\145\137\146\x6f\x72\x6d\x5f\x73\145\164\x74\151\x6e\x67\x73"), true);
        if (!is_array($Pd)) {
            goto Ex;
        }
        foreach ($Pd as $Ky => $V7) {
            if (!isset($_POST[$V7["\155\145\164\141\137\153\x65\171"]])) {
                goto Og;
            }
            if (in_array($V7["\x6d\x65\x74\141\137\x6b\x65\171"], $this->utils->get_wp_user_profile_attributes())) {
                goto TV;
            }
            update_user_meta($user->ID, $V7["\x6d\x65\164\141\x5f\x6b\145\x79"], sanitize_text_field($_POST[$V7["\155\145\164\141\137\x6b\x65\171"]]));
            goto sJ;
            TV:
            $yr[$V7["\x6d\145\164\x61\137\x6b\x65\171"]] = sanitize_text_field($_POST[$V7["\155\x65\164\x61\x5f\x6b\x65\x79"]]);
            sJ:
            Og:
            R3:
        }
        mm:
        $yr = wp_update_user($yr);
        if (is_wp_error($yr)) {
            goto D7;
        }
        goto Bi;
        D7:
        die;
        Bi:
        Ex:
        $VE = $this->utils->mo_web3_get_option("\155\x6f\x5f\x77\145\x62\63\x5f\x63\x75\x73\x74\x6f\x6d\137\x70\x72\x6f\x66\151\154\x65\x5f\x63\x6f\155\160\154\x65\x74\151\x6f\x6e\137\x72\x65\x64\x69\162\145\143\x74\x5f\165\x72\154");
        if (!$VE) {
            goto up;
        }
        wp_redirect($VE);
        exit;
        up:
        J8:
        do_action("\155\157\x5f\x77\145\142\x33\137\x63\x68\145\x63\153\137\x62\141\x6e\156\x65\144\137\x6e\x69\143\153\x6e\141\x6d\x65\163", $Hv);
        if ($sm) {
            goto w3;
        }
        wp_send_json("\116\x4f\x54\40\101\x42\x4c\x45\40\124\x4f\40\x52\x45\x44\111\x52\x45\x43\x54");
        goto rg;
        w3:
        wp_redirect($sm);
        die;
        rg:
        exit;
        gb:
    }
    public function apply_role_mapping($ws, $NG)
    {
        global $V8;
        $Js = $V8->mo_web3_get_option("\155\157\137\167\x65\x62\63\x5f\x72\157\154\145\137\155\141\x70\160\x69\156\x67");
        if (!(!$this->is_new_user && isset($Js["\153\145\x65\x70\137\145\x78\x69\163\x74\151\x6e\147\x5f\165\163\145\162\x5f\x72\x6f\x6c\x65\x73"]) && true === boolval($Js["\x6b\x65\x65\x70\x5f\145\170\151\163\164\x69\x6e\x67\x5f\165\x73\145\x72\137\x72\x6f\x6c\x65\163"]))) {
            goto EO;
        }
        return;
        EO:
        $ws = new \WP_User($ws->ID);
        if (!(isset($Js["\x65\156\x61\x62\x6c\x65\137\162\x6f\154\145\137\155\x61\160\x70\151\156\x67"]) && !boolval($Js["\x65\156\141\x62\154\x65\137\162\x6f\x6c\x65\x5f\155\141\160\x70\151\156\147"]))) {
            goto Ao;
        }
        $ws->set_role('');
        return;
        Ao:
        $UF = 0;
        $RQ = isset($Js["\162\x6f\x6c\x65\x5f\155\x61\x70\160\x69\x6e\147\137\143\157\x75\x6e\x74"]) ? intval($Js["\x72\157\x6c\145\x5f\155\x61\x70\x70\x69\156\x67\137\x63\157\x75\x6e\x74"]) : 0;
        $Nt = [];
        $AQ = 1;
        eC:
        if (!($AQ <= $RQ)) {
            goto I2;
        }
        $k8 = isset($Js["\137\x6d\x61\160\160\x69\x6e\x67\x5f\153\145\171\x5f" . $AQ]) ? $Js["\137\x6d\141\160\x70\151\x6e\147\x5f\x6b\x65\171\137" . $AQ] : '';
        array_push($Nt, $k8);
        foreach ($NG as $TE) {
            $sb = explode("\54", $k8);
            $UJ = isset($Js["\137\155\141\x70\x70\x69\156\147\x5f\x76\x61\154\x75\145\137" . $AQ]) ? $Js["\137\155\x61\160\x70\x69\x6e\147\x5f\x76\x61\154\x75\145\137" . $AQ] : '';
            if (!in_array($TE, $sb)) {
                goto yF;
            }
            if (!$k8) {
                goto c5;
            }
            if (!(0 === $UF)) {
                goto wK;
            }
            if (!($this->is_new_user || isset($Js["\x64\157\156\x74\137\x64\151\163\x74\165\x72\142\x5f\145\170\151\163\164\x69\156\x67\137\165\x73\x65\x72\137\162\x6f\x6c\x65\163"]) && !boolval($Js["\x64\157\x6e\164\137\144\151\163\x74\x75\162\x62\137\145\x78\x69\163\164\x69\156\x67\x5f\x75\x73\x65\x72\x5f\162\x6f\154\145\x73"]))) {
                goto CX;
            }
            $ws->set_role('');
            CX:
            wK:
            $ws->add_role($UJ);
            $UF++;
            c5:
            yF:
            wN:
        }
        uH:
        ss:
        $AQ++;
        goto eC;
        I2:
        if (!(0 === $UF && isset($Js["\137\x6d\141\x70\160\151\x6e\x67\137\x76\141\x6c\x75\x65\137\x64\145\146\x61\165\154\x74"]) && '' !== $Js["\137\155\141\x70\160\151\156\x67\137\166\x61\x6c\165\145\x5f\x64\x65\x66\x61\165\x6c\164"])) {
            goto hv;
        }
        $ws->set_role($Js["\137\155\x61\x70\x70\151\x6e\147\137\166\141\154\x75\145\x5f\x64\145\146\141\x75\154\164"]);
        hv:
        $dw = 0;
        if (!(isset($Js["\x72\x65\163\164\162\151\143\164\x5f\x6c\x6f\x67\151\156\137\146\157\162\x5f\x6d\141\x70\160\145\144\x5f\x72\x6f\x6c\145\x73"]) && boolval($Js["\x72\145\163\164\x72\x69\x63\164\x5f\154\x6f\147\151\x6e\x5f\146\157\162\x5f\155\x61\x70\160\x65\x64\137\162\x6f\x6c\145\163"]))) {
            goto iy;
        }
        foreach ($NG as $TE) {
            if (!in_array($TE, $Nt, true)) {
                goto E7;
            }
            $dw = 1;
            E7:
            mk:
        }
        Nf:
        if (!($dw !== 1)) {
            goto w1;
        }
        require_once ABSPATH . "\x77\160\55\x61\x64\155\x69\x6e\57\151\156\x63\154\165\x64\145\x73\57\x75\x73\x65\162\x2e\x70\150\x70";
        \wp_delete_user($ws->ID);
        $kR = "\x59\x6f\x75\x20\x64\157\x20\x6e\157\x74\40\150\x61\166\x65\40\160\145\x72\x6d\151\x73\x73\151\x6f\156\x73\x20\164\x6f\40\x6c\157\147\151\x6e\x20\167\x69\164\x68\40\x79\x6f\165\x72\40\x63\165\162\x72\145\156\x74\x20\162\x6f\x6c\x65\x73\56\40\x50\x6c\x65\x61\x73\145\40\143\157\156\x74\x61\x63\164\x20\164\x68\x65\x20\101\x64\155\x69\x6e\x69\163\x74\x72\x61\164\x6f\x72\56";
        wp_die($kR);
        w1:
        iy:
    }
    public function get_solana_api_data($z_, $Lr, $M8)
    {
        $Bb = null;
        $hF = null;
        $f4 = array("\x68\x65\x61\x64\x65\162\x73" => array("\x43\157\156\164\x65\156\164\55\x54\x79\x70\145" => "\x61\x70\160\154\151\143\141\x74\x69\x6f\156\57\x6a\163\x6f\156", "\101\165\x74\x68\x6f\x72\x69\x7a\141\164\x69\157\156" => \MoWeb3Constants::NFT_PORT_AUTHORIZATION_Key));
        if ("\x73\157\x6c\x61\x6e\x61\x4d\x69\x6e\x74\x41\x64\144\162\145\163\x73" == $Lr) {
            goto Ms;
        }
        if (!("\163\157\x6c\141\x6e\x61\103\157\x6c\154\x65\x63\x74\x69\157\156\x49\x44" == $Lr || "\x73\x6f\x6c\141\156\141\x43\157\154\x6c\x65\x63\164\151\x6f\156\113\145\171" == $Lr)) {
            goto fm;
        }
        $Bb = \MoWeb3Constants::NFT_PORT_API . "\163\x6f\154\141\x6e\x61\x2f\x6e\x66\x74\x73\x2f{$M8}";
        fm:
        goto jt;
        Ms:
        $Bb = \MoWeb3Constants::NFT_PORT_API . "\163\x6f\x6c\x61\156\141\57\x6e\146\164\57{$M8}";
        jt:
        $hF = wp_remote_get($Bb, $f4);
        return $hF;
    }
    public function get_token_data_through_api($vN, $z_, $YV, $Lr = null, $M8 = null)
    {
        $Bb = null;
        $YV = strtolower($YV);
        $hF = null;
        switch ($YV) {
            case "\163\x6f\154\x61\x6e\141":
                $hF = $this->get_solana_api_data($z_, $Lr, $M8);
                goto Uf;
            default:
                $hF = array("\145\162\x72\157\x72" => "\151\x6e\x76\141\154\151\x64\x20\143\x61\x73\145\41\x21");
                wp_send_json_error($hF, 500);
        }
        o0:
        Uf:
        if (!is_wp_error($hF)) {
            goto sH;
        }
        $Au = $hF->get_error_message();
        $Au = "\x53\157\155\x65\x74\150\151\x6e\x67\40\x77\145\x6e\x74\x20\167\162\157\x6e\147\x3a\40" . esc_attr($Au);
        $hF = array("\x65\162\162\x6f\x72" => $Au);
        wp_send_json_error($hF, 500);
        sH:
        $hF = wp_remote_retrieve_body($hF);
        wp_send_json($hF);
    }
    public function get_cronos_balance($z_, $vN)
    {
        $Bb = null;
        $hF = null;
        $Bb = \MoWeb3Constants::CRONOS_SCAN_API . "\x26\x63\x6f\156\164\x72\141\x63\x74\x61\144\144\162\145\163\x73\75{$vN}\x26\x61\144\144\x72\145\163\x73\75{$z_}\x26\164\141\147\x3d\154\141\164\145\x73\164\46\141\x70\151\153\x65\x79\75" . \MoWeb3Constants::CRONOS_SCAN_API_KEY;
        $hF = wp_remote_get($Bb);
        if (!is_wp_error($hF)) {
            goto fv;
        }
        $Au = $hF->get_error_message();
        $Au = "\123\157\155\x65\x74\x68\151\156\x67\40\x77\145\156\164\x20\167\x72\157\156\x67\x3a\40" . esc_attr($Au);
        $hF = array("\145\x72\162\x6f\x72" => $Au);
        wp_send_json_error($hF, 500);
        fv:
        $hF = wp_remote_retrieve_body($hF);
        wp_send_json($hF);
    }
    public function type_of_request()
    {
        if (!(wp_verify_nonce(sanitize_text_field(wp_unslash($_REQUEST["\155\157\x5f\167\145\x62\x33\137\x76\145\x72\x69\x66\171\137\x6e\x6f\156\143\145"])), "\x6d\x6f\137\x77\x65\x62\63\137\167\x70\x5f\x6e\157\156\x63\145") && isset($_REQUEST["\162\145\161\165\x65\x73\x74"]))) {
            goto q_;
        }
        $cr = sanitize_text_field(wp_unslash($_REQUEST["\x72\x65\x71\x75\145\163\x74"]));
        if ($cr == "\x6c\157\x67\x69\x6e") {
            goto Kf;
        }
        if ($cr == "\x61\x75\164\150") {
            goto hx;
        }
        if ($cr == "\x63\x68\145\143\x6b\111\x6e\x70\165\x74\x46\151\x65\154\144\x73") {
            goto oS;
        }
        if ($cr == "\147\x65\x74\x41\x64\x6d\151\156\103\157\156\146\151\147\165\x72\x65\144\116\x66\x74\104\141\x74\141") {
            goto tJ;
        }
        if ($cr == "\x67\145\164\x55\x73\145\162\x48\x6f\x6c\x64\x4e\x46\124\x44\x61\164\141") {
            goto Oh;
        }
        if ($cr == "\163\x68\x6f\x77\x4e\x66\164\x44\x61\164\141") {
            goto ES;
        }
        if ("\147\145\164\x5f\143\157\156\146\x69\x67\x75\162\x61\164\x69\157\156" == $cr) {
            goto kp;
        }
        if ("\x67\145\164\x41\154\147\x6f\162\x61\156\x64\x42\141\x6c\x61\156\x63\145" == $cr) {
            goto VY;
        }
        if ("\x67\145\x74\x53\x6f\154\x61\156\x61\124\157\x6b\x65\x6e\x44\x65\x74\141\x69\x6c\163" == $cr) {
            goto He;
        }
        if ("\147\x65\164\x4c\157\x6f\x70\162\151\156\147\102\x61\154\x61\x6e\143\x65" == $cr) {
            goto i3;
        }
        if ("\x67\145\164\103\x72\x6f\x6e\157\163\102\141\154\141\x6e\143\x65" == $cr) {
            goto mq;
        }
        goto dX;
        Kf:
        $this->handle_login_request();
        goto dX;
        hx:
        $this->handle_auth_request();
        goto dX;
        oS:
        $this->check_input_fields();
        goto dX;
        tJ:
        $this->get_admin_configured_nft_data();
        goto dX;
        Oh:
        $vN = isset($_REQUEST["\143\157\x6e\x74\x72\141\143\x74\x41\x64\144\162\x65\x73\x73\x65\163"]) ? sanitize_text_field(wp_unslash($_REQUEST["\143\157\156\164\x72\141\x63\x74\x41\144\x64\x72\x65\x73\x73\x65\x73"])) : null;
        $YV = isset($_REQUEST["\x62\154\157\143\x6b\143\150\x61\x69\156"]) ? sanitize_text_field(wp_unslash($_REQUEST["\142\154\x6f\143\153\143\150\x61\151\x6e"])) : null;
        $z_ = isset($_REQUEST["\x77\x61\154\154\145\164\x5f\141\144\144\x72\x65\163\x73"]) ? sanitize_text_field(wp_unslash($_REQUEST["\167\141\154\154\x65\164\137\141\144\144\x72\x65\163\163"])) : null;
        $W0 = isset($_REQUEST["\x69\x73\x4d\x75\154\x74\151\x70\x6c\x65\124\x6f\x6b\145\x6e"]) ? sanitize_text_field(wp_unslash($_REQUEST["\x69\x73\x4d\165\x6c\164\151\160\154\x65\124\157\153\145\x6e"])) : null;
        $AE = isset($_REQUEST["\160\x61\x67\145\113\x65\x79"]) ? sanitize_text_field(wp_unslash($_REQUEST["\x70\x61\147\x65\113\x65\171"])) : null;
        $this->get_user_nft_using_api($vN, $z_, $YV, $W0, $AE);
        goto dX;
        ES:
        $ui = $_REQUEST["\156\x66\x74\x44\x61\164\141\125\162\x69"];
        $this->display_nft_data($ui);
        goto dX;
        kp:
        $this->get_configuration();
        goto dX;
        VY:
        $z_ = sanitize_text_field(wp_unslash($_REQUEST["\167\141\x6c\154\x65\164\x41\144\x64\x72\145\x73\x73"]));
        $Dj = sanitize_text_field(wp_unslash($_REQUEST["\164\157\153\x65\156\111\104"]));
        $this->get_algorand_balance($z_, $Dj);
        goto dX;
        He:
        $z_ = isset($_POST["\x77\141\x6c\x6c\145\x74\101\x64\144\162\x65\x73\163"]) ? sanitize_text_field(wp_unslash($_REQUEST["\x77\141\154\154\145\164\101\144\x64\162\x65\163\x73"])) : null;
        $pM = isset($_POST["\x66\x69\145\x6c\x64\126\141\x6c\x75\145"]) ? sanitize_text_field(wp_unslash($_REQUEST["\x66\x69\x65\x6c\x64\x56\x61\154\x75\x65"])) : null;
        $tm = isset($_POST["\146\151\x65\x6c\144\113\145\x79"]) ? sanitize_text_field(wp_unslash($_REQUEST["\x66\x69\145\154\x64\x4b\x65\x79"])) : null;
        $YV = "\163\157\x6c\x61\156\x61";
        $this->get_token_data_through_api(null, $z_, $YV, $tm, $pM);
        goto dX;
        i3:
        $z_ = isset($_POST["\167\141\x6c\154\x65\x74\x41\144\x64\x72\x65\x73\163"]) ? sanitize_text_field(wp_unslash($_REQUEST["\x77\141\x6c\154\145\164\x41\144\144\162\x65\x73\163"])) : null;
        $vN = isset($_POST["\x63\157\156\x74\162\141\x63\x74\101\144\x64\x72\x65\x73\x73"]) ? sanitize_text_field(wp_unslash($_REQUEST["\143\x6f\156\x74\162\x61\143\164\101\144\x64\162\x65\x73\163"])) : null;
        $Dj = isset($_POST["\164\x6f\153\145\x6e\x49\x44\x73"]) ? sanitize_text_field(wp_unslash($_REQUEST["\x74\157\x6b\x65\156\111\104\x73"])) : null;
        $zR = $this->getLoopringAccountID($z_);
        $this->get_loopring_balance($z_, $vN, $Dj, $zR);
        goto dX;
        mq:
        $z_ = isset($_POST["\167\x61\154\154\145\164\x41\x64\x64\162\x65\163\x73"]) ? sanitize_text_field(wp_unslash($_REQUEST["\167\141\154\154\x65\x74\101\144\144\162\x65\x73\x73"])) : null;
        $vN = isset($_POST["\143\x6f\156\164\x72\141\x63\164\x41\144\144\x72\145\x73\163"]) ? sanitize_text_field(wp_unslash($_REQUEST["\x63\157\156\x74\162\141\x63\x74\x41\144\x64\x72\145\x73\x73"])) : null;
        $this->get_cronos_balance($z_, $vN);
        dX:
        q_:
    }
    public function get_algorand_balance($z_, $Dj)
    {
        $Bb = \MoWeb3Constants::ALGORAND_API . "{$z_}\57\141\x73\163\x65\164\163\x2f{$Dj}";
        $this->display_nft_data($Bb);
    }
    public function getLoopringAccountID($z_)
    {
        global $V8;
        $zR = $V8->mo_web3_get_option("\155\157\x5f\154\x70\137" . $z_);
        if ($zR) {
            goto Gw;
        }
        $Bb = \MoWeb3Constants::LOOPRING_API . "\x61\143\x63\157\x75\x6e\164\x3f\157\x77\x6e\145\x72\75{$z_}";
        $hF = wp_remote_get($Bb);
        if (!is_wp_error($hF)) {
            goto lk;
        }
        $Au = $hF->get_error_message();
        $Au = "\123\x6f\155\x65\164\150\151\x6e\x67\40\x77\145\156\x74\40\x77\162\x6f\156\147\x3a\x20" . esc_attr($Au);
        $hF = array("\145\162\x72\157\162" => $Au);
        wp_send_json_error($hF, 500);
        lk:
        $hF = wp_remote_retrieve_body($hF);
        $hF = json_decode($hF);
        $zR = $hF->accountId;
        $V8->mo_web3_update_option("\x6d\x6f\137\154\160\137" . $z_, $zR);
        Gw:
        return $zR;
    }
    public function get_loopring_balance($z_, $vN, $i8, $zR)
    {
        global $V8;
        $vC = $V8->mo_web3_get_option("\x6d\157\x5f\x77\145\142\63\x5f\154\x6f\x6f\160\162\151\x6e\x67\x5f\141\x70\151\x5f\x6b\145\171");
        $f4 = array("\x68\145\141\144\145\162\x73" => array("\x58\x2d\101\120\111\55\113\x45\x59" => $vC));
        $yX = 0;
        $Mv = 0;
        HY:
        $Bb = \MoWeb3Constants::LOOPRING_API . "\x75\163\145\x72\57\156\146\164\x2f\x62\141\154\x61\156\143\x65\x73\77\141\x63\143\157\165\156\164\x49\x64\75{$zR}\46\164\x6f\153\145\x6e\x41\144\144\x72\x73\75{$vN}\x26\x6f\146\x66\x73\x65\164\75{$yX}\46\x6c\151\155\151\164\75\x31\x30\x30";
        $hF = wp_remote_get($Bb, $f4);
        if (!is_wp_error($hF)) {
            goto zC;
        }
        $Au = $hF->get_error_message();
        $Au = "\x53\x6f\155\145\x74\150\x69\156\x67\x20\167\145\156\x74\x20\x77\x72\157\156\x67\x3a\x20" . esc_attr($Au);
        $hF = array("\145\162\x72\x6f\x72" => $Au);
        wp_send_json_error($hF, 500);
        zC:
        $hF = wp_remote_retrieve_body($hF);
        $hF = json_decode($hF);
        $vA = $hF->totalNum;
        $hF = $hF->data;
        $vN = strtolower($vN);
        if (false == $V8->mo_web3_check_empty_or_null($i8)) {
            goto vB;
        }
        foreach ($hF as $ox) {
            $ox->tokenAddress = strtolower($ox->tokenAddress);
            if (!($ox->tokenAddress == $vN)) {
                goto Gx;
            }
            $Mv = $Mv + $ox->total;
            Gx:
            V8:
        }
        h1:
        goto Uo;
        vB:
        $i8 = explode("\54", $i8);
        foreach ($i8 as $Dj) {
            foreach ($hF as $ox) {
                if (!($Dj == $ox->nftId)) {
                    goto cT;
                }
                $Mv = $Mv + $ox->total;
                cT:
                C7:
            }
            YI:
            mv:
        }
        qs:
        Uo:
        $yX = $yX + 100;
        if ($yX <= $vA) {
            goto HY;
        }
        Cm:
        wp_send_json($Mv);
    }
    public function get_configuration()
    {
        $S_ = isset($_REQUEST["\141\144\144\162\145\163\x73"]) ? sanitize_text_field(wp_unslash($_REQUEST["\x61\x64\x64\162\x65\163\163"])) : '';
        $pA = $this->utils->mo_web3_get_option("\155\157\x5f\167\145\142\63\x5f\156\x66\164\x5f\x73\145\x74\164\x69\156\x67\x73");
        $J4 = $this->utils->mo_web3_get_option("\x6d\157\x5f\167\x65\x62\x33\x5f\164\157\x6b\145\156\x5f\x63\157\156\146\151\147\x5f\x64\x65\x74\141\x69\x6c\x73\x5f\x73\164\x6f\x72\145");
        $GW = $this->utils->mo_web3_get_option("\155\x6f\x5f\x77\x65\142\x33\137\x72\157\x6c\x65\137\155\x61\x70\160\x69\x6e\147");
        $xl = $this->utils->mo_web3_get_option("\155\x6f\x5f\167\145\x62\63\137\151\x6e\x6c\x69\156\x65\x5f\146\157\x72\x6d\137\x73\145\164\164\x69\156\147\x73");
        if (!($pA && !is_null($pA))) {
            goto Pr;
        }
        $hF["\141\144\155\151\x6e\116\146\164\x53\x65\x74\x74\x69\x6e\147"] = $pA;
        Pr:
        if (!($J4 && !is_null($J4))) {
            goto i4;
        }
        $hF["\x74\157\x6b\145\156\103\x6f\x6e\146\x69\147\x44\x65\164\x61\x69\154\163"] = $J4;
        i4:
        $yy = md5($S_);
        $yx = false;
        if (is_user_logged_in()) {
            goto ya;
        }
        $yx = username_exists($S_) ? false : (username_exists($yy) ? false : true);
        ya:
        $hk = $this->utils->mo_web3_get_option("\x6d\x6f\x5f\167\x65\x62\63\137\x63\x75\x73\164\x6f\155\x5f\x70\162\x6f\146\151\x6c\145\x5f\x63\157\x6d\x70\x6c\145\x74\x69\157\156\x5f\x72\145\144\x69\x72\x65\143\164\x5f\x75\162\x6c");
        if (filter_var($hk, FILTER_VALIDATE_URL)) {
            goto fc;
        }
        $hF["\x63\165\163\164\x6f\155\x5f\160\x72\157\x66\151\x6c\x65\137\x63\x6f\x6d\160\x6c\x65\x74\151\x6f\x6e\x5f\162\x65\x64\151\x72\x65\143\x74\137\165\162\154"] = null;
        goto qG;
        fc:
        $hF["\x63\x75\x73\164\x6f\x6d\x5f\160\162\x6f\146\151\154\x65\x5f\x63\157\155\160\154\x65\164\151\157\156\137\162\x65\x64\x69\162\145\143\164\137\x75\x72\x6c"] = $hk;
        qG:
        $hF["\x6e\145\x77\x55\163\145\x72\x52\x65\147\x69\x73\164\145\x72\141\x74\x69\157\x6e"] = $yx;
        $hF["\x72\157\x6c\145\115\x61\x70\x70\151\156\147\123\x65\x74\164\151\x6e\x67"] = $GW;
        $hF["\x69\156\x6c\151\156\x65\x46\157\162\155\x53\x65\x74\x74\x69\156\x67"] = json_decode($xl);
        $hF["\151\x6e\x6c\151\x6e\x65\137\x66\x6f\x72\155\137\164\x6f\147\x67\x6c\145"] = $this->utils->mo_web3_get_option("\x6d\157\x5f\167\145\x62\63\137\x69\156\x6c\x69\x6e\x65\137\x66\157\x72\155\x5f\x64\x69\x73\x70\154\141\171\x5f\x74\x6f\x67\x67\154\145");
        wp_send_json($hF);
    }
    public function display_nft_data($ui)
    {
        $aw = wp_remote_get($ui);
        $aw = wp_remote_retrieve_body($aw);
        wp_send_json($aw);
    }
    public function get_admin_configured_nft_data()
    {
        $pA = $this->utils->mo_web3_get_option("\155\157\x5f\167\145\x62\63\x5f\x6e\x66\x74\137\163\145\164\x74\151\156\147\x73");
        wp_send_json($pA);
    }
    public function get_user_nft_using_api($vN, $z_, $YV, $W0, $AE)
    {
        $f4 = array("\150\145\x61\144\x65\162\x73" => array("\103\x6f\156\164\x65\x6e\164\x2d\124\x79\x70\145" => "\x61\160\x70\x6c\x69\x63\141\164\x69\157\156\57\x6a\x73\157\x6e", "\101\165\164\x68\157\x72\x69\172\141\x74\x69\x6f\x6e" => \MoWeb3Constants::NFT_PORT_AUTHORIZATION_Key));
        $YV = strtolower($YV);
        $Bb = '';
        if ("\145\164\150\145\162\x65\x75\x6d" == $YV || "\160\x6f\154\171\147\x6f\x6e" == $YV) {
            goto kJ;
        }
        if ("\141\x6c\x67\x6f\x72\x61\x6e\144" == $YV) {
            goto Rr;
        }
        if (!("\x73\157\154\141\156\141" == $YV)) {
            goto Hn;
        }
        $Bb = \MoWeb3Constants::MORALIS_SOLANA_API . "\57\141\x63\x63\x6f\x75\156\x74\x2f\x6d\141\151\156\x6e\x65\x74\57{$z_}\x2f\x6e\146\x74";
        $f4["\150\145\x61\x64\145\162\x73"]["\x58\x2d\101\120\111\55\113\145\x79"] = \MoWeb3Constants::MORALIS_API_Key;
        $f4["\150\145\141\x64\145\162\163"]["\x61\143\143\x65\x70\x74"] = "\x61\x70\160\154\x69\143\141\x74\151\x6f\x6e\x2f\152\163\157\x6e";
        $hF = wp_remote_get($Bb, $f4);
        Hn:
        goto jR;
        Rr:
        $Bb = \MoWeb3Constants::ALGORAND_API . "{$z_}";
        $hF = wp_remote_get($Bb);
        jR:
        goto MK;
        kJ:
        if ($W0) {
            goto xA;
        }
        $Bb = \MoWeb3Constants::NFT_PORT_API . $z_ . "\x3f\x63\x68\x61\x69\156\75" . $YV . "\46\x63\x6f\156\x74\x72\141\x63\164\137\x61\x64\x64\x72\145\163\163\x3d" . $vN;
        goto vS;
        xA:
        $Bb = \MoWeb3Constants::ALCHEMY_API_ETH . "\x67\145\164\116\x46\124\163\x3f\x6f\x77\x6e\145\x72\75{$z_}\x26\x63\x6f\156\164\162\x61\143\164\101\144\x64\162\145\163\163\x65\x73\x3d{$vN}\x26\167\x69\164\x68\115\145\164\141\144\x61\x74\x61\75\146\141\154\163\145";
        if (!("\x70\157\154\171\147\157\156" == $YV)) {
            goto Mi;
        }
        $Bb = \MoWeb3Constants::ALCHEMY_API_POLYGON . "\147\x65\x74\x4e\106\x54\x73\77\157\x77\156\x65\162\x3d{$z_}\46\143\157\x6e\164\162\x61\143\x74\x41\144\144\162\x65\163\x73\x65\x73\75{$vN}\x26\x77\151\x74\x68\x4d\x65\x74\141\144\x61\x74\x61\75\x66\141\x6c\163\145";
        Mi:
        if (!$AE) {
            goto g3;
        }
        $Bb = $Bb . "\46\x70\141\x67\145\113\x65\x79\75{$AE}";
        g3:
        vS:
        $hF = wp_remote_get($Bb, $f4);
        MK:
        if (!is_wp_error($hF)) {
            goto Gm;
        }
        $Au = $hF->get_error_message();
        $Au = "\x53\157\x6d\145\164\x68\151\156\x67\x20\167\145\x6e\x74\40\167\162\157\156\x67\x3a\40" . esc_attr($Au);
        $hF = array("\x65\162\x72\157\162" => $Au);
        wp_send_json_error($hF, 500);
        Gm:
        $hF = wp_remote_retrieve_body($hF);
        wp_send_json($hF);
    }
    public function check_for_valid_nickname($lw)
    {
        $kI = $this->utils->mo_web3_get_option("\155\157\x5f\x77\x65\x62\63\x5f\x61\154\x6c\x6f\x77\x5f\x75\x6e\x69\x71\165\x65\x5f\x6e\x69\143\153\156\141\155\145");
        if (!("\x63\150\145\143\x6b\x65\144" === $kI)) {
            goto cV;
        }
        $bR = get_users(array("\146\151\x65\x6c\144\x73" => array("\144\x69\163\x70\x6c\x61\x79\x5f\156\141\x6d\x65")));
        foreach ($bR as $PD) {
            $PD = $PD->display_name;
            if (!($lw === $PD)) {
                goto V1;
            }
            wp_send_json("\144\x75\x70\154\151\143\x61\164\x65\x20\144\x69\163\x70\x6c\x61\x79\40\x6e\x61\155\145");
            V1:
            MD:
        }
        ZE:
        cV:
        $Ha = $this->utils->mo_web3_get_option("\155\157\x5f\167\145\142\63\137\x62\141\156\156\x65\x64\x5f\x6e\151\143\153\156\x61\155\x65\x73");
        foreach ($Ha as $Pv) {
            if (!str_contains($lw, $Pv)) {
                goto sp;
            }
            wp_send_json("\x69\156\x76\x61\x6c\151\144\40\144\151\163\160\154\x61\171\40\x6e\141\155\145");
            sp:
            yf:
        }
        pe:
    }
    public function check_input_fields()
    {
        $yB = isset($_REQUEST["\x65\x6d\x61\151\x6c"]) ? sanitize_text_field(wp_unslash($_REQUEST["\x65\155\x61\x69\154"])) : '';
        $EA = email_exists($yB);
        $lw = isset($_REQUEST["\144\x69\163\x70\154\x61\x79\137\x6e\x61\155\145"]) ? sanitize_text_field(wp_unslash($_REQUEST["\144\x69\x73\x70\154\x61\171\137\156\141\x6d\145"])) : '';
        if (!$EA) {
            goto WA;
        }
        wp_send_json("\144\x75\160\x6c\x69\x63\x61\164\x65\x20\145\x6d\141\151\x6c");
        WA:
        $this->check_for_valid_nickname($lw);
        if ($EA) {
            goto te;
        }
        wp_send_json("\163\165\143\143\145\163\163");
        te:
    }
    public function handle_login_request()
    {
        $S_ = isset($_REQUEST["\141\144\144\x72\x65\163\x73"]) ? sanitize_text_field(wp_unslash($_REQUEST["\x61\x64\x64\x72\145\x73\163"])) : '';
        $j1 = $this->utils->mo_web3_get_transient($S_);
        if ($j1) {
            goto Dr;
        }
        $j1 = uniqid();
        $RP = 24 * 60 * 60;
        $this->utils->mo_web3_set_transient($S_, $j1, $RP);
        wp_send_json("\x53\151\x67\156\40\x74\150\151\x73\40\155\x65\x73\163\x61\147\x65\40\x74\x6f\40\x76\141\154\x69\144\x61\x74\x65\40\x74\x68\x61\x74\40\x79\157\x75\x20\141\162\x65\40\x74\150\x65\40\157\167\x6e\x65\162\40\x6f\x66\x20\x74\150\145\x20\141\143\143\x6f\165\x6e\x74\56\x20\x52\141\x6e\x64\x6f\x6d\x20\163\164\162\x69\156\x67\72\x20" . $j1);
        goto K1;
        Dr:
        wp_send_json("\123\x69\147\156\x20\x74\x68\151\x73\40\x6d\145\x73\x73\x61\147\x65\40\164\157\x20\166\x61\154\151\x64\141\x74\x65\x20\164\x68\x61\x74\x20\x79\157\x75\x20\141\162\x65\40\164\x68\x65\x20\x6f\167\156\x65\162\x20\157\146\40\164\x68\145\x20\x61\x63\143\157\165\x6e\164\56\40\x52\141\156\144\157\x6d\40\163\164\162\151\x6e\147\x3a\40" . $j1);
        K1:
    }
    public function pub_key_to_address($Y7)
    {
        return "\x30\170" . substr(Keccak::hash(substr(hex2bin($Y7->encode("\150\x65\x78")), 1), 256), 24);
    }
    public function verify_signature($Oi, $ed, $S_)
    {
        $cB = strlen($Oi);
        $Xl = Keccak::hash("\x19\x45\164\x68\x65\162\x65\165\x6d\x20\x53\x69\x67\x6e\145\144\x20\115\x65\163\x73\x61\x67\145\72\12{$cB}{$Oi}", 256);
        $h5 = ["\x72" => substr($ed, 2, 64), "\x73" => substr($ed, 66, 64)];
        $jW = ord(hex2bin(substr($ed, 130, 2))) - 27;
        if (!($jW != ($jW & 1))) {
            goto d9;
        }
        if (preg_match("\57\60\60\44\57", $ed)) {
            goto wi;
        }
        if (preg_match("\x2f\x30\61\44\57", $ed)) {
            goto JH;
        }
        return 0;
        goto uJ;
        JH:
        $jW = 1;
        uJ:
        goto c2;
        wi:
        $jW = 0;
        c2:
        d9:
        $Sf = new EC("\x73\145\x63\160\x32\65\x36\x6b\x31");
        $Y7 = $Sf->recoverPubKey($Xl, $h5, $jW);
        return $S_ == $this->pub_key_to_address($Y7);
    }
    public function handle_auth_request()
    {
        $S_ = isset($_REQUEST["\141\x64\x64\162\145\163\x73"]) ? sanitize_text_field(wp_unslash($_REQUEST["\x61\144\x64\162\x65\163\x73"])) : '';
        $ed = isset($_REQUEST["\x73\x69\147\x6e\x61\x74\x75\162\145"]) ? sanitize_text_field(wp_unslash($_REQUEST["\x73\x69\147\x6e\x61\164\x75\162\x65"])) : '';
        $tl = isset($_REQUEST["\x77\x61\154\x6c\145\164\137\x72\145\x73\164\x72\151\x63\164\x69\157\x6e"]) ? sanitize_text_field(wp_unslash($_REQUEST["\167\141\x6c\154\145\x74\x5f\162\145\163\x74\162\151\143\x74\151\x6f\x6e"])) : '';
        $j1 = $this->utils->mo_web3_get_transient($S_);
        $Oi = "\x53\x69\x67\x6e\x20\164\150\151\163\40\x6d\145\x73\163\141\147\145\x20\x74\x6f\x20\x76\x61\154\151\144\x61\x74\x65\x20\164\150\x61\x74\x20\171\157\x75\x20\141\162\x65\x20\x74\150\x65\40\157\x77\x6e\145\x72\x20\x6f\146\40\164\x68\x65\40\141\143\143\157\165\156\x74\56\40\122\x61\x6e\144\157\155\x20\163\x74\x72\x69\x6e\147\x3a\x20" . $j1;
        if ($this->verify_signature($Oi, $ed, $S_)) {
            goto X0;
        }
        $hF = array("\151\x73\123\151\147\x6e\141\x74\165\x72\x65\x56\x65\x72\151\x66\151\x65\x64" => 0, "\x6e\x6f\156\x63\145" => null);
        wp_send_json($hF);
        goto Uc;
        X0:
        $j1 = uniqid();
        $RP = 24 * 60 * 60;
        $this->utils->mo_web3_set_transient($S_, $j1, $RP);
        $hF = array("\151\163\123\151\x67\x6e\141\x74\x75\162\145\x56\145\162\151\x66\x69\x65\144" => 1, "\156\157\156\143\x65" => $j1);
        $bL = $this->utils->mo_web3_get_option("\155\157\x5f\x77\x65\142\x33\137\x6c\x6f\147\x69\x6e\137\167\x61\x6c\x6c\x65\x74\x5f\162\145\163\164\162\x69\143\164\151\157\156");
        if (!($bL === "\x63\x68\x65\x63\x6b\x65\x64" && $tl === "\x66\141\154\163\145")) {
            goto Td;
        }
        $hF["\145\162\162\x6f\162"] = "\117\156\154\x79\40\x6d\145\164\x61\155\141\163\153\x20\x77\x61\x6c\x6c\145\x74\x20\141\154\x6c\157\x77\x65\x64";
        Td:
        wp_send_json($hF);
        Uc:
    }
}
