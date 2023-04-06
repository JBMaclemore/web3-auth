<?php
/**
 * Plugin Name: WEB3 authentication
 * Plugin URI: http://miniorange.com
 * Description: WordPress WEB3 authentication allows the functionality to auto login, auto register into WordPress using the WEB3 Crypto wallet like metamask.
 * Version: 11.0.2
 * Author: miniOrange
 * License: MIT/Expat
 * License URI: https://docs.miniorange.com/mit-license
 */


require "\x5f\141\x75\164\157\154\157\x61\144\56\160\x68\160";
use MoWeb3\Base\MoWeb3BaseStructure;
use MoWeb3\Base\MoWeb3InstanceHelper;
use MoWeb3\controller\MoWeb3FlowHandler;
use MoWeb3\view\ButtonView\MoWeb3View;
use MoWeb3\view\SettingsView\MoWeb3SettingsView;
global $V8;
$Tw = new MoWeb3InstanceHelper();
$Re = new MoWeb3BaseStructure();
$Tn = new MoWeb3FlowHandler();
$ZI = new MoWeb3View();
$BD = new MoWeb3SettingsView();
$V8 = $Tw->get_utils_instance();
$ab = $Tw->get_settings_instance();
$VU = $Tw->get_all_method_instances();
$xP = new \MoWeb3\Premium\settings\Moweb3PremiumSettings();
mo_web3_load_all_methods($VU);
add_shortcode("\155\157\137\167\x65\x62\63\137\x70\157\163\x74\137\x72\145\163\164\162\x69\x63\x74\x69\x6f\156\x5f\163\x68\x6f\162\164\143\x6f\x64\145", "\x6d\157\137\x77\x65\x62\x33\x5f\x70\157\163\164\x5f\x72\145\163\x74\162\151\x63\164\x69\x6f\156\137\163\150\x6f\x72\x74\x63\x6f\144\145");
add_shortcode("\x6d\157\137\167\145\142\63\x5f\x6c\157\147\151\156\x5f\142\165\164\164\157\156\x5f\x73\150\157\162\x74\x63\157\144\145", "\x6d\157\137\167\145\142\x33\137\x6c\157\147\x69\x6e\137\142\x75\x74\164\157\156\x5f\163\150\157\162\x74\143\157\x64\145");
add_shortcode("\155\157\137\x77\x65\x62\x33\x5f\163\150\x6f\x77\x5f\156\146\164\137\163\x68\x6f\162\164\143\157\144\145", "\155\x6f\x5f\167\x65\x62\63\x5f\x73\150\157\x77\137\156\146\164\137\x6f\x77\156\x5f\142\x79\x5f\x75\x73\x65\x72");
do_action("\155\x6f\137\167\x65\142\x33\x5f\x61\x6c\147\x6f\162\141\156\144\x5f\160\145\162\x61\167\x61\x6c\154\145\x74\137\x6a\x73");
function mo_web3_show_nft_own_by_user($ZP, $IJ = null)
{
    $IJ = '';
    $ZI = new MoWeb3View();
    $IJ .= "{$ZI->mo_web3_wp_enqueue()}";
    $IJ .= "\x3c\x62\x6f\144\x79\40\157\x6e\154\157\141\144\x3d\163\150\x6f\167\116\x66\x74\117\167\x6e\102\171\x55\x73\145\x72\x55\x73\151\x6e\147\x41\160\x69\x28\51\x3e";
    $IJ .= "\74\x64\x69\x76\40\x69\x64\75\47\x6e\146\x74\x73\47\x20\76\74\160\x20\x69\x64\x3d\x27\x6e\x66\x74\114\x6f\x61\144\115\x73\x67\47\x3e\x50\154\145\141\x73\145\40\167\x61\151\164\40\x77\150\151\x6c\145\40\x77\x65\40\141\x72\145\x20\x6c\x6f\x61\144\x69\156\x67\x20\171\x6f\165\162\x20\116\106\124\47\x73\74\57\160\x3e\x3c\57\x64\x69\x76\x3e";
    $IJ .= "\x3c\x2f\x62\x6f\x64\x79\76";
    return $IJ;
}
function mo_web3_post_restriction_shortcode($ZP, $IJ = null)
{
    global $V8;
    $fL = $V8->get_current_page_url();
    if (is_user_logged_in() && !is_null($IJ)) {
        goto qZ;
    }
    $IJ = '';
    $ZI = new MoWeb3View();
    $IJ = $ZI->mo_web3_add_login_button(0, true, $fL);
    return $IJ;
    goto RB;
    qZ:
    return $IJ;
    RB:
}
function mo_web3_login_button_shortcode($ze, $IJ = null)
{
    global $V8;
    $dS = $V8->mo_web3_get_option("\x6d\157\137\x77\145\x62\x33\137\142\x75\164\x74\157\x6e\x5f\x63\x75\x73\164\x6f\x6d\x5f\x74\x65\x78\x74");
    $f4 = shortcode_atts(array("\162\145\x64\x69\162\145\x63\x74\x69\157\x6e\x5f\165\162\154" => site_url(), "\x74\145\x78\x74\137\x63\x6f\x6c\157\162" => "\142\154\x61\x63\153", "\142\x75\164\164\x6f\x6e\137\164\145\x78\x74" => $dS), $ze);
    $TI = $f4["\x72\x65\x64\x69\162\x65\x63\164\x69\157\156\x5f\165\x72\154"];
    $Bw = $f4["\x74\145\170\x74\137\143\157\x6c\157\162"];
    $lO = $f4["\142\165\164\164\x6f\x6e\137\x74\145\x78\x74"];
    if (!is_user_logged_in()) {
        goto V9;
    }
    $I0 = get_current_user_id();
    $z_ = get_user_meta($I0, "\x6d\157\167\x65\x62\63\x5f\x77\141\x6c\x6c\145\x74\x5f\x61\x64\x64\x72\x65\163\x73", true);
    if (!(strlen($z_) > 0)) {
        goto yy;
    }
    $z_ = $V8->trim_the_wallet_address($z_);
    return "\x3c\x64\151\x76\x20\x20\163\x74\x79\154\x65\x3d\x27\x63\157\x6c\x6f\162\72{$Bw}\x27\x3e\x26\156\x62\163\160\73\x26\x6e\142\x73\x70\x3b" . $z_ . "\x3c\57\x64\151\166\76";
    yy:
    V9:
    $ZI = new MoWeb3View();
    $IJ = $ZI->mo_web3_add_login_button(0, true, $TI, $lO);
    return $IJ;
}
function mo_web3_deactivate()
{
    global $V8;
    do_action("\x6d\x6f\x5f\x77\145\142\63\137\143\x6c\x65\141\162\x5f\160\x6c\165\x67\x5f\x63\141\x63\x68\145");
    $V8->deactivate_plugin();
}
function moweb3_on_activation()
{
    global $V8;
    $Pd = array();
    $Pd[0] = array("\x6c\141\142\145\154" => "\x46\151\162\x73\164\40\x4e\141\155\145", "\164\171\x70\x65" => "\164\145\x78\164", "\155\145\x74\x61\x5f\153\145\x79" => "\x66\151\x72\x73\x74\x5f\156\141\x6d\x65", "\x72\145\161\x75\x69\162\145\x64" => true);
    $Pd[1] = array("\x6c\141\142\x65\x6c" => "\x4c\141\x73\x74\40\116\141\x6d\x65", "\x74\171\160\145" => "\x74\x65\170\x74", "\x6d\x65\164\x61\137\153\145\171" => "\154\x61\163\164\x5f\x6e\x61\x6d\145", "\x72\x65\161\165\151\x72\x65\144" => true);
    $Pd[2] = array("\x6c\x61\x62\x65\154" => "\x45\155\x61\151\154", "\x74\171\160\x65" => "\x65\x6d\x61\151\154", "\155\145\x74\141\137\153\145\x79" => "\x75\x73\x65\162\x5f\145\155\x61\151\x6c", "\x72\x65\161\165\x69\162\x65\x64" => true);
    $Pd[3] = array("\154\x61\x62\145\x6c" => "\x44\151\163\160\154\x61\x79\x20\x4e\x61\155\145", "\x74\x79\160\145" => "\164\145\170\x74", "\x6d\145\164\x61\x5f\153\x65\171" => "\144\x69\x73\160\x6c\x61\171\137\156\x61\155\x65", "\x72\x65\161\x75\x69\162\145\x64" => true);
    $V8->mo_web3_update_option("\155\x6f\x5f\x77\145\142\x33\x5f\151\x6e\x6c\x69\x6e\145\x5f\146\157\162\x6d\x5f\163\x65\x74\164\x69\156\x67\x73", json_encode($Pd));
    $D0 = $V8->mo_web3_get_option("\155\x6f\137\x77\145\142\63\137\x69\156\154\151\x6e\x65\x5f\x66\157\162\155\137\x64\x69\x73\160\154\x61\x79\x5f\164\157\x67\147\x6c\x65");
    if (!($D0 === false)) {
        goto TP;
    }
    $V8->mo_web3_update_option("\155\x6f\137\167\145\142\x33\137\x69\156\154\151\156\x65\x5f\x66\157\162\155\137\144\151\x73\x70\x6c\141\171\x5f\164\157\x67\147\x6c\x65", "\143\x68\145\143\x6b\x65\144");
    TP:
    $T8 = $V8->mo_web3_get_option("\x6d\x6f\x5f\x77\x65\x62\x33\x5f\144\151\163\160\154\141\171\137\155\x75\x6c\164\151\160\x6c\x65\x5f\x62\x75\x74\x74\x6f\156");
    if (!(false === $T8)) {
        goto PJ;
    }
    $U8 = array();
    $U8["\x6d\x6f\167\145\142\x33\x4d\x65\164\141\115\x61\x73\153"] = "\x63\150\145\x63\x6b\x65\x64";
    $U8["\x6d\x6f\167\x65\x62\63\x57\x61\x6c\154\x65\x74\103\x6f\156\x6e\145\x63\x74"] = "\x63\150\145\x63\153\145\x64";
    $U8["\x6d\x6f\167\x65\142\x33\103\157\x69\x6e\142\x61\163\x65"] = "\143\150\145\143\153\145\144";
    $V8->mo_web3_update_option("\155\157\x5f\x77\x65\x62\63\137\144\x69\163\160\154\141\171\x5f\x6d\x75\154\164\151\x70\154\145\137\x62\165\x74\x74\157\156", $U8);
    PJ:
}
function moweb3_activated_plugin_redirect($B1)
{
    if (!($B1 == plugin_basename(__FILE__))) {
        goto au;
    }
    if (!is_multisite()) {
        goto zS;
    }
    exit(wp_redirect(admin_url("\156\145\164\x77\x6f\x72\x6b\57\x61\x64\x6d\x69\x6e\x2e\160\150\160\x3f\160\x61\147\145\75\x6d\x6f\x5f\167\x65\142\63\x5f\163\145\x74\x74\151\156\x67\x73")));
    goto lE;
    zS:
    exit(wp_redirect(admin_url("\x61\144\x6d\x69\156\x2e\160\x68\160\77\x70\x61\147\145\75\x6d\x6f\137\167\145\x62\63\x5f\x73\x65\164\164\x69\156\147\x73")));
    lE:
    au:
}
add_action("\x61\143\164\151\x76\141\x74\x65\x64\x5f\160\154\x75\147\x69\x6e", "\x6d\157\167\x65\142\x33\137\x61\143\x74\151\166\x61\164\x65\144\x5f\160\x6c\165\x67\151\x6e\137\x72\145\x64\x69\x72\x65\x63\x74");
register_activation_hook(__FILE__, "\x6d\157\x77\145\x62\x33\137\157\x6e\x5f\x61\143\x74\x69\166\141\164\151\x6f\x6e");
register_deactivation_hook(__FILE__, "\x6d\x6f\137\x77\x65\142\63\x5f\x64\x65\141\x63\164\x69\166\141\164\x65");
