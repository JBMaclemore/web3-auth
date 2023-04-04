<?php


namespace MoWeb3\Base;

use MoWeb3\Base\MoWeb3InstanceHelper;
use MoWeb3\MoWeb3Utils;
use MoWeb3\view\ContentRestrictionView\MoWeb3ContentRestriction;
use MoWeb3\view\ShortcodeInfoView\MoWeb3ShortcodeInfo;
use MoWeb3\view\InlineFormConfigView\MoWeb3InlineFormConfig;
use MoWeb3\view\ContractAddressView\MoWeb3ContractAddress;
use MoWeb3\view\LoginWalletRestriction\MoWeb3LoginWalletRestrictionView;
use MoWeb3\view\MultisiteSettingsView\MoWeb3MultisiteSettings;
class MoWeb3Loader
{
    private $instance_helper;
    private $moweb3_util;
    private $moweb3_guide;
    private $moweb3_content_restriction;
    private $moweb3_shortcode_info;
    private $moweb3_login_wallet_restriction;
    public function __construct()
    {
        add_action("\141\144\155\151\156\x5f\x65\x6e\x71\165\145\165\145\137\163\x63\162\x69\x70\164\x73", array($this, "\x70\x6c\165\x67\151\x6e\137\x73\x65\164\164\151\156\x67\x73\x5f\x73\x74\x79\x6c\145"));
        add_action("\141\144\155\x69\156\x5f\x65\156\161\165\145\165\x65\137\x73\x63\x72\151\x70\164\x73", array($this, "\x70\154\165\x67\151\x6e\137\x73\145\x74\164\151\x6e\147\x73\137\163\x63\162\151\160\164"));
        $this->moweb3_util = new MoWeb3Utils();
        $this->instance_helper = new MoWeb3InstanceHelper();
    }
    public function plugin_settings_style()
    {
        wp_enqueue_style("\x6d\x6f\137\x77\x65\x62\x33\x5f\x61\x64\x6d\151\x6e\137\x73\x65\164\164\x69\x6e\147\163\x5f\x73\x74\x79\154\145", MOWEB3_URL . "\x72\145\163\x6f\x75\162\x63\145\163\57\x63\163\x73\57\x73\x74\x79\x6c\x65\x5f\163\145\x74\164\151\x6e\147\x73\x2e\143\163\x73", array(), $rm = "\61\56\60\x2e\61", $Po = false);
        wp_enqueue_style("\155\x6f\137\x77\145\x62\63\x5f\141\144\x6d\151\156\137\163\145\164\164\151\156\147\163\137\x70\x68\x6f\156\145\137\x73\x74\171\154\x65", MOWEB3_URL . "\162\145\163\157\165\162\x63\145\163\57\x63\x73\163\x2f\x70\150\157\x6e\x65\x2e\143\163\163", array(), $rm = "\61\56\x30\x2e\61", $Po = false);
    }
    public function plugin_settings_script()
    {
        wp_enqueue_script("\x6d\157\137\x77\x65\142\63\x5f\141\x64\155\x69\x6e\x5f\x73\x65\x74\164\x69\x6e\147\163\137\163\x63\x72\x69\160\x74", MOWEB3_URL . "\162\x65\163\x6f\165\162\x63\145\163\57\152\163\57\x73\145\164\x74\x69\156\x67\x73\x2e\152\163", array(), $rm = "\x31\56\x30\56\61", $Po = false);
        wp_enqueue_script("\155\x6f\x5f\x77\145\142\63\x5f\141\144\x6d\151\x6e\x5f\x73\x65\164\x74\151\x6e\x67\163\137\160\150\157\x6e\x65\x5f\163\143\162\x69\160\x74", MOWEB3_URL . "\162\x65\x73\157\x75\x72\143\x65\163\x2f\x6a\163\57\x70\x68\157\x6e\145\x2e\x6a\163", array(), $rm = "\x31\x2e\x30\x2e\61", $Po = false);
        wp_enqueue_script("\155\157\x5f\167\x65\x62\63\137\x61\x64\x6d\151\156\x5f\163\145\164\x74\151\156\147\x73\137\x70\150\157\x6e\145\137\x73\x63\x72\151\160\164", MOWEB3_URL . "\162\x65\163\157\x75\162\143\145\x73\x2f\x6a\x73\x2f\x70\x68\157\x6e\145\x2e\x6a\x73", array(), $rm = "\61\x2e\60\x2e\x31", $Po = false);
    }
    public function load_current_tab($zi)
    {
        global $V8;
        $k9 = $this->instance_helper->get_accounts_instance();
        $x4 = $V8->mo_web3_is_clv();
        if ("\x61\143\x63\157\165\x6e\x74" === $zi || !$x4) {
            goto FP;
        }
        if ("\x63\157\x6e\146\x69\147" === $zi || '' === $zi) {
            goto dD;
        }
        if ("\x63\x6f\x6e\164\145\x6e\x74\137\162\145\x73\164\x72\x69\143\164\x69\x6f\156" === $zi) {
            goto Wn;
        }
        if ("\x73\150\x6f\162\x74\x63\x6f\144\x65\x5f\x69\x6e\146\x6f" === $zi) {
            goto aA;
        }
        if ("\x69\156\154\151\x6e\x65\x5f\146\157\x72\x6d\137\x63\x6f\156\146\151\x67" === $zi) {
            goto Zv;
        }
        if ("\143\157\x6e\164\x72\x61\143\x74\x5f\x61\x64\144\162\145\x73\163\x5f\143\157\x6e\x66\151\x67" === $zi) {
            goto oB;
        }
        if ("\154\x6f\x67\151\x6e\x5f\167\x61\154\154\x65\164\x5f\x72\145\163\164\x72\x69\x63\x74\x69\157\156" === $zi) {
            goto a1;
        }
        if ("\x6d\165\154\164\151\x73\x69\x74\x65\x5f\163\x65\x74\164\x69\x6e\x67\x73" === $zi) {
            goto O9;
        }
        goto Ai;
        FP:
        if ($V8->mo_web3_get_option("\155\x6f\x5f\167\x65\x62\63\137\x76\x65\162\151\146\171\x5f\x63\165\163\164\157\x6d\145\162") === "\164\x72\165\x65") {
            goto sa;
        }
        if (trim($V8->mo_web3_get_option("\x6d\x6f\x5f\x77\x65\142\63\137\x61\x64\155\151\156\x5f\x65\155\141\151\x6c") ?? '') !== '' && trim($V8->mo_web3_get_option("\155\x6f\137\167\x65\142\63\x5f\x61\x64\x6d\x69\156\x5f\141\x70\151\x5f\x6b\145\x79") ?? '') === '' && $V8->mo_web3_get_option("\x6d\157\x5f\x77\145\x62\63\137\x6e\x65\x77\x5f\x72\x65\x67\151\x73\x74\162\x61\x74\x69\x6f\x6e") !== "\164\162\165\145") {
            goto GY;
        }
        if (!$V8->mo_web3_is_clv() && $V8->mo_web3_is_customer_registered()) {
            goto TU;
        }
        $k9->register();
        goto xC;
        sa:
        $k9->verify_password_ui();
        goto xC;
        GY:
        $k9->verify_password_ui();
        goto xC;
        TU:
        $k9->mo_web3_lp();
        xC:
        goto Ai;
        dD:
        $this->instance_helper->get_config_instance()->render_ui();
        goto Ai;
        Wn:
        $this->moweb3_content_restriction = new MoWeb3ContentRestriction();
        $this->moweb3_content_restriction->view();
        goto Ai;
        aA:
        $this->moweb3_shortcode_info = new MoWeb3ShortcodeInfo();
        $this->moweb3_shortcode_info->view();
        goto Ai;
        Zv:
        $this->moweb3_inline_form_config = new MoWeb3InlineFormConfig();
        $this->moweb3_inline_form_config->view();
        goto Ai;
        oB:
        $this->moweb3_contract_address_config = new MoWeb3ContractAddress();
        $this->moweb3_contract_address_config->view();
        goto Ai;
        a1:
        $this->moweb3_login_wallet_restriction = new MoWeb3LoginWalletRestrictionView();
        $this->moweb3_login_wallet_restriction->view();
        goto Ai;
        O9:
        $this->mo_web3_multisite_settings = new MoWeb3MultisiteSettings();
        $this->mo_web3_multisite_settings->view();
        Ai:
    }
}
