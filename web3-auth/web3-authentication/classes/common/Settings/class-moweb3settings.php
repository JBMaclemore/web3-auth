<?php


namespace MoWeb3;

use MoWeb3\MoWeb3Utils;
class MoWeb3Settings
{
    public $config;
    public $util;
    public function __construct()
    {
        global $V8;
        $this->util = $V8;
        add_action("\x61\x64\155\151\156\137\151\156\151\x74", array($this, "\x6d\151\156\151\157\162\141\156\147\145\x5f\167\145\142\x33\x5f\163\x61\166\x65\x5f\163\145\164\x74\x69\x6e\147\x73"));
        $this->config = $this->util->get_plugin_config();
    }
    public function miniorange_web3_save_settings()
    {
        if (!(sanitize_text_field($_SERVER["\122\x45\x51\x55\105\123\124\137\115\105\124\x48\x4f\x44"]) === "\x50\117\x53\124" && current_user_can("\141\144\155\x69\156\151\163\x74\162\141\164\157\x72"))) {
            goto J3;
        }
        if (!(isset($_POST["\157\x70\164\151\x6f\x6e"]) and $_POST["\157\x70\164\x69\157\156"] == "\155\x6f\x5f\167\x65\142\63\x5f\x76\145\162\151\x66\x79\137\x6c\151\143\145\156\163\145")) {
            goto cP;
        }
        global $V8;
        if (!(!isset($_POST["\x6d\x6f\x5f\x77\145\142\63\137\154\x69\143\x65\x6e\163\145\x5f\153\x65\171"]) || empty($_POST["\x6d\x6f\137\x77\x65\x62\x33\x5f\154\151\x63\x65\x6e\163\x65\137\153\145\x79"]))) {
            goto WJ;
        }
        update_option("\x6d\x6f\137\167\145\x62\63\137\x6d\145\163\x73\x61\x67\145", "\x50\x6c\x65\141\163\145\x20\x65\156\164\x65\x72\x20\x76\141\154\151\144\x20\154\x69\143\x65\156\x73\x65\40\153\x65\171\56");
        $V8->mo_web3_show_error_message();
        return;
        WJ:
        $YX = trim($_POST["\x6d\157\137\167\145\142\63\x5f\x6c\x69\143\145\x6e\x73\145\137\153\x65\171"]);
        $ri = new \MoWeb3\MoWeb3Customer();
        $IJ = json_decode($ri->mo_web3_check_customer_ln(), true);
        $bo = isset($IJ["\x6c\x69\x63\145\x6e\x73\x65\x45\170\x70\151\x72\x79"]) ? $IJ["\x6c\151\x63\145\156\x73\145\x45\170\x70\x69\x72\171"] : '';
        $bo = date("\131\x2d\155\55\x64\40\110\72\x69\x3a\x73\x20\124", strtotime($bo . "\x2b\x20\61\x35\40\144\x61\x79\x73"));
        $V8->mo_web3_update_option("\x6d\157\x5f\167\x65\142\x33\137\154\145", $V8->mo_web3_encrypt($bo));
        $id = $V8->authorize();
        if (!($id === true)) {
            goto nu;
        }
        return;
        nu:
        if (strcasecmp($IJ["\163\x74\x61\164\165\x73"], "\x53\125\103\103\105\123\x53") == 0) {
            goto sE;
        }
        update_option("\x6d\157\137\x77\x65\142\63\137\x6d\x65\163\163\141\x67\145", "\111\156\166\141\154\x69\144\x20\x6c\x69\143\x65\x6e\163\x65\x2e\x20\120\x6c\x65\141\x73\x65\40\x74\162\171\x20\x61\147\141\151\x6e\x2e");
        $V8->mo_web3_show_error_message();
        goto mU;
        sE:
        $IJ = json_decode($ri->mo_web3_XfsZkodsfhHJ($YX), true);
        if (strcasecmp($IJ["\163\164\141\x74\165\163"], "\123\125\103\103\x45\x53\123") == 0) {
            goto a_;
        }
        if (strcasecmp($IJ["\x73\164\141\164\165\x73"], "\x46\x41\111\x4c\105\x44") == 0) {
            goto Ew;
        }
        update_option("\155\x6f\x5f\x77\x65\142\x33\137\155\x65\163\163\141\147\145", "\x41\x6e\x20\145\162\x72\157\162\40\x6f\143\143\x75\162\x65\144\x20\x77\x68\151\154\145\40\x70\162\x6f\x63\145\163\x73\151\156\x67\x20\171\x6f\165\162\x20\x72\145\161\165\145\163\164\56\x20\120\154\145\x61\x73\x65\40\124\162\171\x20\x61\x67\141\x69\156\x2e");
        $V8->mo_web3_show_error_message();
        goto Q6;
        Ew:
        update_option("\155\x6f\x5f\167\145\x62\63\137\x6d\145\163\163\x61\147\145", "\131\157\165\x20\150\141\x76\145\40\x65\x6e\x74\145\162\145\144\x20\141\x6e\x20\151\156\166\141\154\x69\144\40\x6c\x69\x63\x65\x6e\163\x65\x20\x6b\145\x79\56\x20\120\154\x65\x61\x73\145\x20\145\x6e\164\x65\162\40\141\40\x76\x61\x6c\x69\144\40\154\x69\143\145\156\163\145\x20\153\145\171\x2e");
        $V8->mo_web3_show_error_message();
        Q6:
        goto Fb;
        a_:
        $V8->mo_web3_update_option("\155\157\137\167\x65\142\63\x5f\x6c\153", $V8->mo_web3_encrypt($YX));
        $V8->mo_web3_update_option("\x6d\x6f\137\x77\x65\142\x33\137\x6c\166", $V8->mo_web3_encrypt("\x74\162\165\x65"));
        $V8->mo_web3_update_option("\x6d\x6f\x5f\167\145\142\63\137\x6d\145\x73\x73\141\147\x65", "\x59\x6f\165\x72\x20\x6c\151\143\x65\x6e\163\145\40\151\x73\x20\x76\145\162\151\146\x69\x65\x64\x2e\x20\x59\157\165\x20\x63\141\156\40\x6e\x6f\167\40\x73\145\x74\165\x70\x20\x74\150\145\x20\x70\154\x75\147\x69\156\x2e");
        $V8->mo_web3_show_success_message();
        Fb:
        mU:
        cP:
        if (!(isset($_POST["\x6d\x6f\x5f\167\145\x62\63\137\x63\x68\x61\x6e\x67\x65\137\x6d\151\156\151\157\162\141\x6e\147\145\x5f\156\157\156\x63\x65"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\x6d\157\137\167\x65\x62\x33\137\x63\150\141\156\x67\145\x5f\155\151\x6e\151\x6f\162\x61\x6e\x67\145\137\x6e\x6f\x6e\x63\x65"])), "\x6d\157\x5f\x77\145\x62\63\137\143\150\x61\156\147\145\137\155\x69\x6e\151\157\x72\x61\156\147\145") && isset($_POST[\MoWeb3Constants::OPTION]) && "\155\157\x5f\x77\145\x62\x33\x5f\x63\150\141\156\x67\x65\x5f\x6d\x69\156\151\x6f\x72\141\x6e\147\145" === sanitize_text_field($_POST[\MoWeb3Constants::OPTION]))) {
            goto p6;
        }
        mo_web3_deactivate();
        return;
        p6:
        if (!(isset($_POST["\x6d\x6f\x5f\167\145\x62\x33\137\x76\x65\162\x69\146\x79\x5f\143\165\x73\164\157\x6d\145\162\137\x6e\x6f\156\x63\x65"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\155\x6f\137\x77\145\x62\x33\137\166\x65\x72\151\146\x79\137\143\165\x73\x74\x6f\155\x65\x72\x5f\156\157\x6e\x63\145"])), "\155\x6f\137\167\145\142\x33\137\x76\x65\x72\x69\146\x79\x5f\x63\165\x73\164\x6f\x6d\145\162") && isset($_POST[\MoWeb3Constants::OPTION]) && "\155\157\x5f\x77\x65\x62\63\x5f\x76\145\x72\x69\146\171\137\143\165\x73\164\157\155\145\162" === sanitize_text_field($_POST[\MoWeb3Constants::OPTION]))) {
            goto x0;
        }
        if (!($this->util->mo_web3_is_curl_installed() === 0)) {
            goto yt;
        }
        return $this->util->mo_web3_show_curl_error();
        yt:
        $yB = isset($_POST["\145\x6d\x61\151\154"]) ? sanitize_email(wp_unslash($_POST["\x65\x6d\x61\x69\154"])) : '';
        $nU = isset($_POST["\x70\141\x73\x73\x77\157\x72\x64"]) ? sanitize_text_field($_POST["\160\141\163\x73\167\x6f\x72\144"]) : '';
        if (!($this->util->mo_web3_check_empty_or_null($yB) || $this->util->mo_web3_check_empty_or_null($nU))) {
            goto X5;
        }
        $this->util->mo_web3_update_option(\MoWeb3Constants::PANEL_MESSAGE_OPTION, "\101\x6c\x6c\x20\164\150\145\40\146\x69\145\x6c\x64\x73\x20\x61\x72\145\40\x72\x65\x71\165\x69\162\145\x64\x2e\40\x50\154\145\x61\163\x65\x20\x65\x6e\x74\145\162\40\x76\141\x6c\151\x64\40\x65\x6e\x74\x72\151\x65\x73\x2e");
        $this->util->mo_web3_show_error_message();
        return;
        X5:
        $this->util->mo_web3_update_option("\x6d\157\x5f\x77\x65\142\x33\x5f\141\x64\155\151\156\137\145\155\x61\151\154", $yB);
        $this->util->mo_web3_update_option("\x6d\157\x5f\167\145\x62\63\x5f\160\x61\x73\163\167\157\x72\x64", $nU);
        $ri = new MoWeb3Customer();
        $IJ = $ri->get_customer_key();
        $xS = json_decode($IJ, true);
        if (json_last_error() === JSON_ERROR_NONE) {
            goto Uu;
        }
        $this->util->mo_web3_update_option(\MoWeb3Constants::PANEL_MESSAGE_OPTION, "\x49\156\x76\141\x6c\151\144\40\165\x73\145\162\156\141\x6d\145\x20\157\162\x20\x70\x61\x73\x73\x77\x6f\162\x64\56\40\x50\154\x65\x61\x73\145\40\164\162\x79\40\x61\x67\141\x69\156\56");
        $this->util->mo_web3_show_error_message();
        goto LM;
        Uu:
        $this->util->mo_web3_update_option("\155\x6f\x5f\x77\145\142\x33\137\141\x64\x6d\x69\156\137\x63\x75\x73\x74\x6f\x6d\145\162\x5f\x6b\x65\171", $xS["\151\x64"]);
        $this->util->mo_web3_update_option("\155\157\137\167\x65\x62\x33\x5f\141\144\x6d\151\156\137\x61\160\x69\137\x6b\x65\x79", $xS["\141\x70\151\113\145\x79"]);
        $this->util->mo_web3_update_option("\x6d\157\137\x77\145\x62\x33\137\143\x75\x73\x74\157\x6d\145\x72\x5f\164\157\153\145\x6e", $xS["\164\157\153\145\156"]);
        if (!isset($S7["\x70\x68\x6f\x6e\x65"])) {
            goto gB;
        }
        $this->util->mo_web3_update_option("\x6d\x6f\137\x77\x65\142\x33\137\141\144\155\151\156\x5f\160\x68\157\156\x65", $xS["\160\150\x6f\156\145"]);
        gB:
        $this->util->mo_web3_delete_option("\155\157\x5f\x77\145\x62\63\137\160\141\163\163\167\x6f\x72\x64");
        $this->util->mo_web3_update_option(\MoWeb3Constants::PANEL_MESSAGE_OPTION, "\103\165\x73\x74\157\x6d\x65\162\x20\x72\145\x74\x72\x69\x65\x76\145\x64\40\163\165\x63\143\x65\x73\x73\x66\165\154\154\x79");
        $this->util->mo_web3_delete_option("\155\157\x5f\167\145\142\x33\x5f\166\145\x72\151\146\x79\x5f\143\x75\163\164\157\x6d\145\162");
        $this->util->mo_web3_show_success_message();
        LM:
        x0:
        if (!(isset($_POST["\x6d\157\x5f\167\145\x62\63\x5f\x63\x6f\x6e\164\x61\143\x74\137\165\x73\137\161\x75\145\x72\171\137\157\160\x74\x69\x6f\156\137\x6e\157\x6e\143\145"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\155\157\137\167\x65\x62\x33\x5f\143\157\x6e\x74\x61\x63\x74\x5f\x75\x73\137\161\165\145\162\171\137\x6f\x70\x74\x69\x6f\156\x5f\x6e\x6f\156\143\145"])), "\x6d\x6f\x5f\167\x65\x62\x33\x5f\x63\157\156\x74\141\143\164\x5f\x75\163\137\x71\x75\145\x72\171\x5f\x6f\x70\164\151\157\156") && isset($_POST[\MoWeb3Constants::OPTION]) && "\x6d\x6f\x5f\x77\145\x62\63\137\x63\157\x6e\x74\x61\143\x74\x5f\165\163\x5f\161\x75\145\162\x79\x5f\157\160\164\x69\157\156" === sanitize_text_field($_POST[\MoWeb3Constants::OPTION]))) {
            goto av;
        }
        if (!($this->util->mo_web3_is_curl_installed() === 0)) {
            goto sI;
        }
        return $this->util->mo_web3_show_curl_error();
        sI:
        $yB = isset($_POST["\155\x6f\137\167\145\x62\x33\137\143\x6f\x6e\164\x61\143\x74\137\x75\x73\x5f\145\x6d\141\x69\154"]) ? sanitize_text_field(wp_unslash($_POST["\155\x6f\137\167\145\x62\x33\x5f\143\x6f\156\164\141\143\x74\137\165\x73\x5f\x65\x6d\x61\151\154"])) : '';
        $E6 = isset($_POST["\x6d\157\x5f\167\x65\142\63\x5f\143\157\156\164\x61\x63\164\137\x75\163\x5f\160\x68\157\156\x65"]) ? sanitize_text_field(wp_unslash($_POST["\x6d\157\x5f\x77\x65\142\x33\137\143\157\156\164\141\x63\x74\137\165\x73\x5f\160\150\157\156\145"])) : '';
        $UV = isset($_POST["\x6d\157\137\167\145\142\x33\137\143\x6f\x6e\x74\x61\x63\164\137\x75\163\x5f\x71\165\145\x72\171"]) ? sanitize_text_field(wp_unslash($_POST["\x6d\x6f\137\167\145\x62\x33\x5f\x63\x6f\156\x74\141\143\x74\x5f\x75\163\137\161\165\x65\x72\x79"])) : '';
        $ri = new MoWeb3Customer();
        if ($this->util->mo_web3_check_empty_or_null($yB) || $this->util->mo_web3_check_empty_or_null($UV)) {
            goto qa;
        }
        $dA = false;
        $QU = $ri->submit_contact_us($yB, $E6, $UV, $dA);
        if (false === $QU) {
            goto Io;
        }
        $this->util->mo_web3_update_option(\MoWeb3Constants::PANEL_MESSAGE_OPTION, "\124\150\141\x6e\153\163\x20\x66\157\x72\x20\x67\145\x74\164\151\x6e\x67\x20\151\156\x20\x74\x6f\165\143\150\41\x20\x57\145\40\163\150\x61\x6c\154\x20\147\145\x74\40\x62\x61\143\x6b\x20\164\x6f\x20\x79\x6f\165\x20\163\150\157\x72\x74\x6c\x79\56");
        $this->util->mo_web3_show_success_message();
        goto t7;
        Io:
        $this->util->mo_web3_update_option(\MoWeb3Constants::PANEL_MESSAGE_OPTION, "\x59\x6f\165\162\x20\161\165\x65\x72\171\40\143\x6f\165\154\144\40\x6e\157\164\x20\x62\x65\x20\163\x75\x62\155\x69\x74\164\x65\x64\x2e\40\120\x6c\145\x61\163\x65\40\x74\162\x79\x20\141\x67\x61\151\x6e\56");
        $this->util->mo_web3_show_error_message();
        t7:
        goto wX;
        qa:
        $this->util->mo_web3_update_option(\MoWeb3Constants::PANEL_MESSAGE_OPTION, "\120\x6c\x65\x61\x73\x65\40\x66\151\x6c\154\x20\x75\x70\x20\105\155\141\x69\x6c\x20\x61\156\x64\40\121\x75\x65\x72\171\40\x66\151\145\x6c\144\x73\x20\x74\157\x20\x73\165\x62\155\151\164\x20\171\157\x75\162\40\161\x75\x65\162\171\x2e");
        $this->util->mo_web3_show_error_message();
        wX:
        av:
        if (!(isset($_POST["\155\x6f\137\167\x65\142\63\x5f\162\145\147\151\163\164\x65\162\137\x63\x75\163\x74\157\x6d\145\x72\x5f\x6e\157\x6e\143\x65"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\x6d\157\x5f\x77\x65\x62\63\137\162\145\x67\x69\163\x74\x65\x72\137\x63\165\163\x74\x6f\x6d\145\162\x5f\x6e\157\x6e\143\x65"])), "\x6d\157\137\x77\145\x62\63\137\162\x65\x67\151\163\x74\x65\162\x5f\143\165\163\164\157\155\145\x72") && isset($_POST[\MoWeb3Constants::OPTION]) && "\155\x6f\x5f\x77\145\142\x33\137\162\x65\x67\151\x73\164\145\x72\x5f\143\x75\x73\x74\157\x6d\x65\162" === sanitize_text_field($_POST[\MoWeb3Constants::OPTION]))) {
            goto eu;
        }
        $yB = '';
        $E6 = '';
        $nU = '';
        $J6 = '';
        $nC = '';
        $PO = '';
        $G1 = '';
        if (!($this->util->mo_web3_check_empty_or_null(sanitize_text_field(wp_unslash($_POST["\145\155\141\x69\x6c"]))) || $this->util->mo_web3_check_empty_or_null(sanitize_text_field(wp_unslash($_POST["\x70\141\163\x73\x77\157\x72\x64"]))) || $this->util->mo_web3_check_empty_or_null(sanitize_text_field(wp_unslash($_POST["\x63\157\156\146\151\x72\155\x50\x61\x73\x73\167\x6f\x72\144"]))))) {
            goto VB;
        }
        $this->util->mo_web3_update_option(\MoWeb3Constants::PANEL_MESSAGE_OPTION, "\101\154\x6c\40\x74\150\145\x20\x66\151\x65\x6c\x64\x73\x20\x61\162\x65\x20\162\x65\161\165\151\x72\145\x64\56\x20\120\x6c\145\x61\x73\x65\x20\x65\156\x74\145\162\x20\166\141\x6c\x69\144\x20\145\x6e\164\162\x69\x65\163\x2e");
        $this->util->mo_web3_show_error_message();
        return;
        VB:
        if (strlen(sanitize_text_field(wp_unslash($_POST["\x70\x61\x73\x73\x77\x6f\x72\x64"]))) < 8 || strlen(sanitize_text_field(wp_unslash($_POST["\143\157\x6e\x66\x69\x72\x6d\120\x61\163\x73\x77\157\x72\x64"]))) < 8) {
            goto Rg;
        }
        $yB = sanitize_email($_POST["\145\x6d\141\x69\x6c"]);
        $E6 = sanitize_text_field(stripslashes($_POST["\x70\x68\157\156\145"]));
        $nU = sanitize_text_field(stripslashes($_POST["\x70\141\x73\163\167\x6f\162\144"]));
        $J6 = sanitize_text_field(stripslashes($_POST["\x66\x6e\x61\155\145"]));
        $nC = sanitize_text_field(stripslashes($_POST["\154\x6e\x61\155\x65"]));
        $PO = sanitize_text_field(stripslashes($_POST["\143\x6f\x6d\x70\x61\x6e\171"]));
        $G1 = sanitize_text_field(stripslashes($_POST["\x63\x6f\156\146\151\162\155\120\141\163\x73\x77\x6f\162\x64"]));
        goto D6;
        Rg:
        $this->util->mo_web3_update_option(\MoWeb3Constants::PANEL_MESSAGE_OPTION, "\x43\150\157\x6f\x73\x65\x20\x61\40\x70\x61\x73\163\167\x6f\162\144\x20\167\x69\164\150\40\155\x69\x6e\151\155\165\155\x20\154\x65\x6e\147\x74\x68\40\70\56");
        $this->util->mo_web3_show_error_message();
        return;
        D6:
        $this->util->mo_web3_update_option("\x6d\x6f\137\167\x65\142\63\137\x61\x64\155\x69\156\137\x65\155\x61\x69\x6c", $yB);
        $this->util->mo_web3_update_option("\x6d\x6f\x5f\167\145\x62\x33\x5f\x61\144\155\x69\156\137\160\x68\x6f\156\x65", $E6);
        $this->util->mo_web3_update_option("\155\157\137\167\x65\x62\x33\137\x61\x64\x6d\151\156\x5f\146\156\x61\155\145", $J6);
        $this->util->mo_web3_update_option("\155\157\137\x77\x65\x62\x33\137\141\144\x6d\151\x6e\137\x6c\156\141\155\145", $nC);
        $this->util->mo_web3_update_option("\x6d\x6f\x5f\x77\145\142\x33\x5f\141\144\155\x69\x6e\x5f\143\157\155\x70\x61\156\x79", $PO);
        if (!($this->util->mo_web3_is_curl_installed() === 0)) {
            goto OU;
        }
        return $this->util->mo_web3_show_curl_error();
        OU:
        if (strcmp($nU, $G1) === 0) {
            goto Ff;
        }
        $this->util->mo_web3_update_option(\MoWeb3Constants::PANEL_MESSAGE_OPTION, "\120\x61\x73\163\x77\x6f\162\x64\163\x20\x64\157\40\156\x6f\164\x20\155\x61\x74\x63\150\x2e");
        $this->util->mo_web3_update_option("\155\x6f\x5f\x77\x65\x62\63\x5f\166\145\x72\x69\146\x79\137\143\165\163\164\x6f\155\x65\162", false);
        $this->util->mo_web3_show_error_message();
        goto cr;
        Ff:
        $this->util->mo_web3_update_option("\x6d\x6f\x5f\167\x65\x62\63\137\160\141\x73\x73\x77\157\162\x64", $nU);
        $ri = new MoWeb3Customer();
        $yB = $this->util->mo_web3_get_option("\x6d\x6f\137\x77\x65\142\63\x5f\x61\144\155\151\156\x5f\145\x6d\141\x69\x6c");
        $IJ = json_decode($ri->check_customer(), true);
        if (strcasecmp($IJ["\163\x74\x61\x74\x75\163"], "\103\x55\x53\x54\x4f\115\105\x52\x5f\116\x4f\124\137\106\117\125\116\x44") === 0) {
            goto YZ;
        }
        $this->mo_web3_get_current_customer();
        goto Bq;
        YZ:
        $this->create_customer();
        Bq:
        cr:
        eu:
        J3:
    }
    public function mo_web3_get_current_customer()
    {
        $ri = new MoWeb3Customer();
        $IJ = $ri->get_customer_key();
        $xS = json_decode($IJ, true);
        if (json_last_error() === JSON_ERROR_NONE) {
            goto mj;
        }
        $this->util->mo_web3_update_option(\MoWeb3Constants::PANEL_MESSAGE_OPTION, "\x59\x6f\165\x20\x61\x6c\x72\145\x61\144\171\40\150\x61\166\145\40\141\x6e\x20\x61\143\143\157\165\156\x74\40\167\151\x74\x68\x20\x6d\151\x6e\x69\x4f\162\141\x6e\147\x65\x2e\40\120\154\x65\141\x73\145\40\x65\156\164\x65\162\40\x61\x20\166\141\x6c\x69\144\40\x70\141\x73\163\167\x6f\x72\x64\56");
        $this->util->mo_web3_update_option("\x6d\x6f\x5f\167\x65\x62\x33\x5f\166\x65\x72\x69\x66\x79\137\x63\x75\x73\164\157\x6d\x65\162", "\x74\162\x75\145");
        $this->util->mo_web3_show_error_message();
        goto GQ;
        mj:
        $this->util->mo_web3_update_option("\x6d\157\137\167\145\x62\63\137\x61\144\x6d\151\156\137\x63\x75\x73\164\x6f\x6d\145\x72\x5f\x6b\x65\x79", $xS["\151\144"]);
        $this->util->mo_web3_update_option("\x6d\157\137\167\x65\142\x33\137\x61\x64\x6d\x69\156\137\141\x70\x69\x5f\153\145\x79", $xS["\141\x70\151\113\145\171"]);
        $this->util->mo_web3_update_option("\155\157\137\167\x65\142\x33\x5f\x63\x75\x73\x74\x6f\155\x65\x72\137\x74\157\x6b\x65\156", $xS["\x74\x6f\153\145\156"]);
        $this->util->mo_web3_update_option("\x6d\157\x5f\167\145\142\x33\137\160\141\x73\163\x77\x6f\x72\x64", '');
        $this->util->mo_web3_update_option(\MoWeb3Constants::PANEL_MESSAGE_OPTION, "\x43\x75\163\x74\157\155\145\162\40\162\x65\x74\162\x69\145\x76\145\x64\x20\x73\165\143\x63\145\x73\163\x66\x75\154\x6c\171");
        $this->util->mo_web3_delete_option("\155\157\137\x77\x65\x62\63\x5f\x76\x65\x72\151\146\171\137\x63\165\x73\164\x6f\155\145\162");
        $this->util->mo_web3_delete_option("\155\157\137\x77\145\142\x33\137\156\145\167\x5f\162\x65\x67\x69\x73\x74\x72\x61\164\x69\x6f\156");
        $this->util->mo_web3_show_success_message();
        GQ:
    }
    public function create_customer()
    {
        global $V8;
        $ri = new MoWeb3Customer();
        $xS = json_decode($ri->create_customer(), true);
        if (strcasecmp($xS["\x73\164\141\164\165\x73"], "\103\x55\x53\124\x4f\115\x45\122\x5f\125\123\x45\x52\116\x41\x4d\105\137\x41\x4c\x52\x45\101\104\131\137\105\130\x49\123\x54\x53") === 0) {
            goto dL;
        }
        if (strcasecmp($xS["\x73\164\x61\164\x75\163"], "\x53\x55\x43\x43\105\x53\123") === 0) {
            goto NA;
        }
        goto XR;
        dL:
        $this->mo_web3_get_current_customer();
        $this->util->mo_web3_delete_option("\155\157\x5f\x77\145\142\x33\137\156\x65\167\137\143\x75\163\x74\x6f\155\145\162");
        goto XR;
        NA:
        $this->util->mo_web3_update_option("\155\x6f\137\x77\145\x62\63\137\141\x64\x6d\x69\156\x5f\x63\x75\x73\x74\x6f\155\145\x72\x5f\153\145\171", $xS["\x69\x64"]);
        $this->util->mo_web3_update_option("\155\x6f\137\x77\145\142\63\x5f\141\x64\155\x69\x6e\137\141\160\x69\137\x6b\145\171", $xS["\x61\160\151\x4b\x65\171"]);
        $this->util->mo_web3_update_option("\x6d\157\137\x77\145\142\63\137\x63\x75\163\x74\x6f\x6d\145\x72\137\164\157\153\145\156", $xS["\164\157\153\x65\156"]);
        $this->util->mo_web3_update_option("\x6d\x6f\x5f\167\x65\142\63\137\x70\x61\x73\x73\167\157\162\144", '');
        $this->util->mo_web3_update_option(\MoWeb3Constants::PANEL_MESSAGE_OPTION, "\122\x65\x67\151\163\x74\145\162\145\144\40\x73\x75\143\143\x65\x73\163\146\165\154\154\x79\56");
        $this->util->mo_web3_update_option("\x6d\x6f\x5f\x77\x65\142\63\137\x72\x65\147\x69\163\x74\162\x61\164\151\x6f\156\x5f\x73\164\x61\x74\x75\163", "\155\x6f\x5f\167\145\142\63\137\x52\105\107\x49\123\124\x52\x41\x54\111\117\116\x5f\103\x4f\115\120\114\x45\x54\105");
        $this->util->mo_web3_update_option("\x6d\157\137\x77\x65\142\63\x5f\156\145\167\137\x63\165\163\x74\157\x6d\145\162", 1);
        $this->util->mo_web3_delete_option("\x6d\x6f\x5f\167\145\142\x33\137\166\x65\x72\151\146\171\x5f\x63\165\x73\x74\157\155\145\162");
        $this->util->mo_web3_delete_option("\x6d\x6f\137\x77\x65\142\63\x5f\x6e\145\x77\x5f\162\145\147\x69\x73\x74\x72\141\x74\151\x6f\156");
        $this->util->mo_web3_show_success_message();
        XR:
    }
}
