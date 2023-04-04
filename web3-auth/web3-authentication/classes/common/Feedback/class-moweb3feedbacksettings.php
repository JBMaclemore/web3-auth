<?php


namespace MoWeb3;

use MoWeb3\MoWeb3Settings;
use MoWeb3\MoWeb3Customer;
class MoWeb3FeedbackSettings
{
    private $common_settings;
    public function __construct()
    {
        $this->common_settings = new MoWeb3Settings();
        add_action("\141\x64\x6d\151\156\137\x69\x6e\x69\164", array($this, "\155\x6f\137\167\x65\142\x33\x5f\x66\162\145\145\137\163\x65\x74\164\151\x6e\147\x73"));
        add_action("\x61\x64\155\151\x6e\137\x66\157\x6f\164\145\162", array($this, "\155\x6f\x5f\167\145\142\63\x5f\146\145\x65\x64\142\141\143\x6b\x5f\162\145\x71\x75\145\x73\164"));
    }
    public function mo_web3_free_settings()
    {
        global $V8;
        if (!(sanitize_text_field($_SERVER["\x52\105\x51\125\105\x53\x54\137\x4d\105\x54\110\117\x44"]) === "\120\x4f\123\x54" && current_user_can("\x61\x64\x6d\x69\156\x69\x73\164\162\x61\x74\x6f\162"))) {
            goto jX;
        }
        if (!(isset($_POST["\x6d\x6f\x5f\x77\145\x62\x33\137\x66\145\145\144\142\141\143\x6b\137\156\x6f\x6e\x63\145"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\x6d\157\x5f\167\145\x62\x33\x5f\x66\145\145\x64\x62\141\x63\153\137\156\x6f\156\143\145"])), "\x6d\157\137\x77\145\142\x33\137\x66\145\145\144\142\x61\x63\153") && isset($_POST[\MoWeb3Constants::OPTION]) && "\x6d\x6f\x5f\167\x65\x62\x33\x5f\146\x65\x65\144\x62\x61\x63\153" === sanitize_text_field($_POST[\MoWeb3Constants::OPTION]))) {
            goto EJ;
        }
        $user = wp_get_current_user();
        $Oi = "\120\154\x75\147\151\156\x20\104\x65\x61\x63\164\x69\x76\141\x74\145\144\x3a";
        $Mf = isset($_POST["\x6d\157\x5f\x77\145\142\x33\x5f\144\x65\x61\x63\164\151\166\141\164\x65\137\x72\x65\x61\x73\x6f\156\137\x72\x61\x64\x69\157"]) ? sanitize_text_field(wp_unslash($_POST["\155\157\x5f\x77\145\142\63\137\x64\145\x61\x63\164\151\166\x61\x74\145\x5f\x72\145\141\163\157\x6e\137\162\x61\144\151\x6f"])) : false;
        $J_ = isset($_POST["\x6d\157\137\167\145\142\63\137\x71\x75\x65\162\171\137\x66\145\x65\x64\x62\x61\143\153"]) ? sanitize_text_field(wp_unslash($_POST["\155\157\x5f\167\x65\x62\x33\x5f\x71\x75\145\x72\171\137\x66\145\x65\x64\142\x61\x63\x6b"])) : false;
        if ($Mf) {
            goto PV;
        }
        $V8->mo_web3_update_option(\MoWeb3Constants::PANEL_MESSAGE_OPTION, "\120\154\x65\141\x73\145\40\x53\x65\x6c\x65\x63\164\x20\157\156\145\40\x6f\x66\40\164\150\145\x20\x72\x65\141\x73\157\156\163\x20\x2c\151\146\x20\x79\157\165\x72\x20\x72\x65\x61\x73\157\x6e\40\x69\x73\x20\x6e\x6f\164\40\155\145\156\164\151\x6f\156\x65\144\40\160\154\x65\x61\163\145\x20\x73\x65\x6c\145\143\164\40\x4f\x74\x68\145\x72\40\122\145\x61\163\157\156\x73");
        $V8->mo_web3_show_error_message();
        PV:
        $Oi .= $Mf;
        if (!isset($J_)) {
            goto BO;
        }
        $Oi .= "\72" . $J_;
        BO:
        $yB = $V8->mo_web3_get_option("\x6d\157\137\x77\x65\142\63\x5f\141\x64\155\x69\x6e\x5f\145\155\141\151\154");
        if (!($yB == '')) {
            goto I0;
        }
        $yB = $user->user_email;
        I0:
        $E6 = $V8->mo_web3_get_option("\x6d\x6f\137\x77\145\x62\63\137\x61\x64\x6d\151\x6e\x5f\x70\x68\157\156\145");
        $Mr = new MoWeb3Customer();
        $QU = json_decode($Mr->mo_web3_send_email_alert($yB, $E6, $Oi), true);
        deactivate_plugins(MOWEB3_DIR . DIRECTORY_SEPARATOR . "\x6d\x69\x6e\151\157\x72\x61\x6e\x67\x65\55\167\x65\142\63\x2d\x6c\x6f\147\151\x6e\55\x73\145\164\x74\151\156\x67\x73\x2e\160\150\160");
        $V8->mo_web3_update_option(\MoWeb3Constants::PANEL_MESSAGE_OPTION, "\124\x68\141\x6e\x6b\x20\x79\157\165\x20\146\157\162\x20\x74\x68\x65\40\x66\x65\x65\144\x62\141\143\x6b\x2e");
        $V8->mo_web3_show_success_message();
        EJ:
        if (!(isset($_POST["\x6d\x6f\137\x77\x65\142\63\x5f\163\x6b\151\x70\x5f\146\x65\x65\x64\x62\x61\143\x6b\137\x6e\x6f\x6e\x63\x65"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\x6d\157\137\167\145\x62\x33\x5f\x73\153\x69\160\x5f\146\x65\x65\x64\x62\141\143\x6b\x5f\x6e\x6f\156\x63\145"])), "\155\x6f\137\x77\x65\x62\x33\x5f\163\x6b\151\160\x5f\x66\x65\x65\144\142\141\143\x6b") && isset($_POST["\157\160\x74\x69\157\x6e"]) && "\155\x6f\137\x77\x65\142\63\x5f\x73\x6b\151\x70\137\x66\x65\x65\144\x62\141\143\153" === sanitize_text_field($_POST["\157\x70\164\x69\157\156"]))) {
            goto Wb;
        }
        deactivate_plugins(MOWEB3_DIR . DIRECTORY_SEPARATOR . "\155\151\156\151\157\162\x61\x6e\147\145\x2d\x77\x65\x62\x33\55\x6c\x6f\x67\x69\x6e\x2d\163\x65\164\164\x69\156\147\x73\56\x70\150\x70");
        $V8->mo_web3_update_option(\MoWeb3Constants::PANEL_MESSAGE_OPTION, "\x50\x6c\165\147\x69\x6e\x20\104\x65\141\x63\164\x69\166\x61\x74\145\x64\x20\x53\165\143\x63\x65\163\x73\x66\165\154\x79\x2e\40\x57\x65\40\x77\x69\x6c\x6c\40\147\145\164\40\x62\141\x63\153\x20\x74\x6f\40\x79\157\165\x20\163\150\157\x72\x74\154\171\56");
        $V8->mo_web3_show_success_message();
        Wb:
        jX:
    }
    public function mo_web3_feedback_request()
    {
        $UE = new \MoWeb3\MoWeb3Feedback();
        $UE->show_form();
    }
}
