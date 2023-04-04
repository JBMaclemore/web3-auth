<?php


namespace MoWeb3\view\ButtonView;

class MoWeb3View
{
    public $util;
    public function __construct()
    {
        $this->util = new \MoWeb3\MoWeb3Utils();
        $e9 = 0;
        $Qw = false;
        add_action("\x6c\x6f\147\151\156\x5f\x66\157\x72\x6d", function () use($e9, $Qw) {
            $this->mo_web3_add_login_button($e9, $Qw);
        });
    }
    public function mo_web3_bootstrap_enqueue()
    {
        wp_enqueue_script("\x6d\x6f\137\x77\145\x62\x33\137\142\x6f\x6f\164\x73\x74\x72\x61\x70\x5f\x6d\151\x6e\137\152\163", MOWEB3_URL . \MoWeb3Constants::MoWeb3_RESOURCES . "\x6a\163\57\x62\157\x6f\x74\163\x74\x72\x61\160\57\142\x6f\x6f\x74\x73\164\162\141\160\56\x6a\x73", array(), $rm = "\61\x30\x2e\61\x2e\61", $Po = false);
        wp_enqueue_style("\x6d\x6f\137\x77\145\142\63\x5f\x73\x74\x79\x6c\145", MOWEB3_URL . \MoWeb3Constants::MoWeb3_RESOURCES . "\143\163\x73\57\x62\157\x6f\x74\163\x74\162\141\160\x2f\142\x6f\157\164\163\164\x72\141\x70\56\155\x69\x6e\x2e\143\x73\163", array(), $rm = "\x31\60\56\61\x2e\x31", $Po = false);
    }
    public function mo_web3_wp_enqueue()
    {
        wp_enqueue_script("\152\x71\x75\145\x72\x79");
        wp_enqueue_style("\155\157\x5f\167\145\x62\x33\x5f\x63\x75\163\x74\157\x6d\137\x73\x74\171\x6c\145", MOWEB3_URL . \MoWeb3Constants::MoWeb3_RESOURCES . "\143\163\x73\x2f\x73\x74\171\x6c\x65\163\56\x63\163\163", array(), $rm = "\61\60\56\x31\x2e\61", $Po = false);
        wp_enqueue_style("\155\x6f\137\167\x65\x62\63\x5f\163\x65\x6c\x65\143\164\x32\137\163\x74\x79\x6c\x65", MOWEB3_URL . \MoWeb3Constants::MoWeb3_RESOURCES . "\143\x73\163\57\x73\145\x6c\x65\143\164\62\x2f\x73\x65\154\x65\x63\x74\x32\56\x6d\151\156\56\143\163\163", array(), $rm = "\x31\x30\56\61\x2e\61", $Po = false);
        wp_enqueue_style("\x6d\x6f\x5f\x77\x65\142\63\x5f\x66\x6f\156\164\x5f\141\167\145\x73\x6f\155\x65", MOWEB3_URL . \MoWeb3Constants::MoWeb3_RESOURCES . "\146\x6f\x6e\x74\x73\x2f\x66\157\156\164\x2d\141\x77\x65\x73\157\155\145\x2e\x6d\x69\x6e\56\143\x73\163", array(), $rm = "\x31\x30\56\x31\56\61", $Po = false);
        wp_enqueue_style("\155\157\137\x77\x65\142\x33\x5f\155\x61\x74\x65\x72\x69\x61\154\x5f\151\143\x6f\x6e\x73", MOWEB3_URL . \MoWeb3Constants::MoWeb3_RESOURCES . "\146\x6f\156\x74\163\57\155\x61\164\x65\162\151\x61\x6c\x2b\151\143\x6f\x6e\x73\56\143\x73\x73", array(), $rm = "\x31\60\56\x31\56\x31", $Po = false);
        wp_enqueue_style("\x6d\x6f\x5f\167\x65\x62\63\x5f\x72\157\x62\x6f\164\x6f\x5f\x61\x6e\x64\137\x76\141\162\145\x6c\141", MOWEB3_URL . \MoWeb3Constants::MoWeb3_RESOURCES . "\146\x6f\x6e\164\163\57\162\x6f\x62\157\x74\x6f\x2d\x61\x6e\144\55\x76\x61\162\x65\154\141\x2b\x72\x6f\165\x6e\144\56\143\x73\163", array(), $rm = "\61\x30\56\x31\x2e\x31", $Po = false);
        wp_enqueue_script("\x6d\x6f\x5f\x77\145\x62\63\137\x70\x6f\x70\160\145\x72", MOWEB3_URL . \MoWeb3Constants::MoWeb3_RESOURCES . "\152\x73\57\x70\157\160\x70\x65\162\57\160\x6f\160\x70\x65\x72\56\x6d\x69\x6e\56\x6a\163", array(), $rm = "\61\60\56\61\x2e\61", $Po = false);
        wp_enqueue_script("\155\x6f\137\x77\x65\x62\x33\137\x77\141\154\x6c\x65\x74\x5f\154\x69\x6e\153", MOWEB3_URL . \MoWeb3Constants::MoWeb3_RESOURCES . "\x6a\163\x2f\167\145\142\x33\57\167\141\x6c\154\x65\164\55\x73\x64\153\x2d\x62\x75\x6e\x64\154\145\55\x77\x61\x6c\x6c\145\x74\x6c\151\156\153\56\x6a\x73", array(), $rm = "\x31\x30\56\x31\x2e\x31", $Po = false);
        wp_enqueue_script("\x6d\x6f\137\x77\x65\142\63\x5f\156\x66\164", MOWEB3_URL . \MoWeb3Constants::MoWeb3_RESOURCES . "\x6a\x73\57\167\145\142\x33\x2f\167\x65\x62\x33\x5f\x6e\x66\x74\56\152\163", array(), $rm = "\61\60\x2e\x31\x2e\61", $Po = false);
        wp_enqueue_script("\x6d\157\137\167\145\x62\63\137\x73\x6f\154\141\156\x61", MOWEB3_URL . \MoWeb3Constants::MoWeb3_RESOURCES . "\152\163\x2f\167\145\142\63\57\163\157\x6c\x61\156\141\137\x63\x6f\156\164\x72\x61\143\x74\x5f\154\151\x62\56\152\163", array(), $rm = "\x31\60\56\x31\x2e\x31", $Po = false);
        wp_enqueue_script("\155\x6f\x5f\x77\145\142\x33\x5f\163\150\157\167\137\x6e\x66\x74", MOWEB3_URL . \MoWeb3Constants::MoWeb3_RESOURCES . "\x6a\x73\57\x77\x65\142\x33\57\163\150\x6f\x77\137\156\146\164\x2e\152\x73", array(), $rm = "\61\60\56\61\56\x31", $Po = false);
        wp_enqueue_script("\x6d\157\x5f\x77\x65\142\x33\x5f\163\145\x6c\x65\143\164\62", MOWEB3_URL . \MoWeb3Constants::MoWeb3_RESOURCES . "\152\x73\x2f\x73\x65\x6c\x65\x63\164\62\57\x73\145\154\145\143\164\62\56\x6d\151\x6e\56\152\x73", array(), $rm = "\61\60\x2e\61\x2e\x31", $Po = false);
        wp_enqueue_script("\x6d\157\137\x77\x65\142\x33\x5f\x77\145\142\x33\115\x69\x6e", MOWEB3_URL . \MoWeb3Constants::MoWeb3_RESOURCES . "\152\163\x2f\x77\x65\x62\63\x2f\167\145\142\63\115\151\x6e\56\x6a\x73", array(), $rm = "\x31\x30\x2e\x31\56\x31", $Po = false);
        wp_enqueue_script("\x6d\x6f\137\167\145\142\x33\137\167\x65\x62\x33\115\x6f\144\141\x6c\x44\x69\x73\164\111\156\x64\145\x78", MOWEB3_URL . \MoWeb3Constants::MoWeb3_RESOURCES . "\152\x73\57\167\145\x62\x33\57\x77\145\142\x33\x4d\157\144\x61\154\x44\x69\x73\164\111\x6e\x64\x65\x78\56\x6a\x73", array(), $rm = "\x31\60\56\x31\56\x31", $Po = false);
        wp_enqueue_script("\x6d\x6f\137\x77\145\142\63\137\167\141\154\154\x65\164\x63\157\156\156\145\x63\x74", MOWEB3_URL . \MoWeb3Constants::MoWeb3_RESOURCES . "\x6a\163\x2f\x77\145\142\63\57\167\x65\142\x33\137\x77\141\154\x6c\145\164\x63\157\x6e\156\145\143\164\56\x6d\x69\x6e\x2e\152\x73", array(), $rm = "\x31\x30\x2e\x31\56\61", $Po = false);
        wp_enqueue_script("\155\x6f\137\x77\145\x62\63\x5f\x77\x65\x62\x33\137\154\157\147\x69\x6e", MOWEB3_URL . \MoWeb3Constants::MoWeb3_RESOURCES . "\152\163\x2f\167\x65\142\x33\57\x77\x65\142\x33\137\x6c\x6f\147\x69\156\56\x6a\163", array(), $rm = "\x31\x30\56\61\56\62", $Po = false);
        wp_enqueue_script("\x6d\157\x5f\167\x65\142\x33\137\x77\x65\142\x33\137\155\x6f\144\x61\x6c", MOWEB3_URL . \MoWeb3Constants::MoWeb3_RESOURCES . "\x6a\x73\57\x77\145\142\x33\57\x77\145\x62\x33\x5f\x6d\x6f\x64\x61\154\x2e\152\163", array(), $rm = "\x31\60\x2e\61\x2e\x31", $Po = false);
        wp_enqueue_script("\155\x6f\137\167\x65\142\63\137\x6d\171\141\154\147\157", MOWEB3_URL . \MoWeb3Constants::MoWeb3_RESOURCES . "\152\163\57\167\x65\142\x33\x2f\155\171\141\154\x67\157\56\155\x69\x6e\x2e\152\163", array(), $rm = "\61\x30\56\x31\56\61", $Po = false);
        $jp = array("\x61\152\x61\x78\x5f\165\162\x6c" => admin_url("\141\144\x6d\151\x6e\55\141\152\x61\170\56\160\x68\160"), "\x77\160\137\x6e\157\156\x63\x65" => wp_create_nonce("\155\x6f\x5f\x77\145\142\63\137\x77\160\x5f\156\x6f\x6e\x63\145"));
        wp_localize_script("\x6d\x6f\137\x77\145\x62\x33\x5f\x77\145\x62\63\x5f\x6c\x6f\x67\151\156", "\155\157\x5f\x77\x65\x62\63\x5f\165\x74\x69\x6c\151\164\171\137\x6f\x62\x6a\x65\x63\164", $jp);
        wp_print_scripts();
        wp_print_styles();
    }
    public function get_button_custom_text()
    {
        $V7 = $this->util->mo_web3_get_option("\155\157\137\167\145\142\x33\137\142\165\x74\164\157\x6e\137\143\165\x73\164\157\155\137\164\x65\x78\164");
        if ($V7) {
            goto LB;
        }
        $this->util->mo_web3_update_option("\x6d\157\x5f\167\145\x62\x33\x5f\142\x75\164\164\157\x6e\x5f\143\165\x73\x74\157\155\137\x74\145\x78\164", "\x4c\157\147\151\x6e\40\167\151\x74\150\x20\103\x72\171\x70\x74\157\x77\x61\x6c\154\x65\164");
        $this->get_button_custom_text();
        goto n7;
        LB:
        return $V7;
        n7:
    }
    public function isMobileDev()
    {
        if (empty($_SERVER["\110\124\x54\120\x5f\125\123\x45\122\x5f\x41\107\105\116\124"])) {
            goto L2;
        }
        $aC = $_SERVER["\x48\x54\124\120\137\x55\123\105\x52\x5f\x41\107\x45\x4e\x54"];
        if (!preg_match("\x2f\50\115\x6f\x62\151\x6c\x65\174\101\x6e\144\162\x6f\151\x64\x7c\124\x61\x62\x6c\x65\x74\174\107\157\x42\162\157\x77\x73\145\162\x7c\133\x30\x2d\71\135\170\x5b\x30\x2d\x39\135\52\174\165\132\141\162\144\127\145\142\134\x2f\174\x4d\151\156\151\174\104\x6f\162\151\163\134\x2f\x7c\x53\x6b\171\146\151\162\x65\134\57\174\x69\x50\150\157\x6e\x65\x7c\106\x65\156\156\145\143\x5c\x2f\174\115\x61\145\155\157\174\111\x72\151\x73\x5c\57\x7c\103\114\x44\103\134\55\174\115\x6f\142\151\x5c\57\x29\57\x75\151\x73", $aC)) {
            goto zb;
        }
        return true;
        zb:
        L2:
        return false;
    }
    public function mo_web3_add_login_button($e9 = 0, $Qw = false, $vc = null, $lO = null)
    {
        $this->mo_web3_wp_enqueue();
        global $V8;
        $i2 = '';
        $ga = $V8->get_multiple_crypto_wallet($Qw);
        $D4 = $this->util->mo_web3_get_option("\155\x6f\137\167\145\x62\63\137\x64\x69\x73\160\x6c\x61\171\137\155\x75\154\x74\151\x70\154\145\x5f\x62\x75\x74\x74\x6f\x6e");
        $pr = true;
        if (!$D4) {
            goto bp;
        }
        $kh = 0;
        foreach ($D4 as $Ky => $V7) {
            if (!($D4[$Ky] == '')) {
                goto Q1;
            }
            $kh++;
            Q1:
            kQ:
        }
        Ia:
        if (!($kh == sizeof($D4))) {
            goto yJ;
        }
        $pr = false;
        yJ:
        bp:
        if (!($pr == true)) {
            goto To;
        }
        $IA = "\155\x6f\x77\145\142\x33\x2d\142\x74\x6e\40\155\157\x77\145\142\x33\x2d\x62\164\x6e\x2d\160\x72\x69\x6d\141\162\x79";
        $j_ = $this->util->mo_web3_get_option("\155\157\x5f\167\x65\x62\63\x5f\154\x6f\x67\x69\x6e\x5f\x62\165\164\164\x6f\156\137\143\x75\163\164\157\155\137\x63\163\163");
        if (!$j_) {
            goto E8;
        }
        $i2 = "\74\x73\x74\171\154\145\76\x20" . $j_ . "\40\x3c\x2f\163\x74\171\x6c\x65\76";
        $IA = "\x6d\157\137\x77\x65\142\63\137\x6c\x6f\x67\151\156";
        E8:
        $i2 .= "\x3c\x62\165\164\164\157\x6e\40\151\x64\x3d\42\x6d\x6f\167\145\142\63\x42\x74\x6e\42\40\x73\164\171\x6c\145\x3d\x22\x6d\141\162\x67\151\x6e\55\x62\157\164\164\x6f\155\72\65\45\73\42\x20\157\x6e\x63\154\x69\x63\x6b\75\x22\143\x6c\x65\x61\x72\x4d\145\x73\x73\141\147\x65\x28\51\73\143\x75\x73\x74\157\155\127\141\154\x6c\145\x74\114\157\147\151\156\115\x6f\x64\x61\154\x28\x29\x3b\42\40\x74\x79\160\145\75\42\x62\x75\164\x74\x6f\x6e\42\x20\143\x6c\141\163\163\x3d\x22" . $IA . "\x22\76";
        if ($e9) {
            goto wh;
        }
        if (!empty($lO)) {
            goto b2;
        }
        $i2 .= esc_attr($this->get_button_custom_text());
        goto Yh;
        b2:
        $i2 .= $lO;
        Yh:
        goto Qn;
        wh:
        $i2 .= "\x54\145\163\x74\x20\127\x65\142\63\x20\x43\157\156\156\145\143\164\151\166\x69\164\171";
        Qn:
        $i2 .= "\74\x2f\142\x75\164\164\x6f\x6e\76";
        To:
        $i2 .= "\15\12\40\x20\40\40\74\41\55\x2d\x20\124\x72\x69\147\147\x65\162\x2f\117\160\x65\156\40\x54\x68\x65\40\155\157\x77\145\x62\63\x2d\155\157\x64\x61\154\40\x2d\55\x3e\15\12\15\xa\xd\12\x20\40\x20\x20\74\x21\x2d\x2d\x20\x54\150\145\x20\x6d\x6f\x77\145\x62\63\x2d\155\x6f\144\141\154\40\55\x2d\x3e\15\12\x20\x20\x20\40\74\144\151\x76\x20\40\163\x74\x79\x6c\145\75\42\155\x61\170\55\167\151\x64\x74\150\72\x31\x30\x30\45\42\40\143\154\x61\x73\x73\x3d\42\155\157\167\x65\x62\x33\x2d\155\157\x64\x61\x6c\x20\x22\x20\x69\x64\75\x22\x6d\157\x77\x65\142\63\x2d\155\157\x64\141\154\x2d\151\x64\x22\76\xd\xa\15\12\x20\x20\x20\40\40\40\x20\40\x3c\x64\x69\166\x20\143\154\x61\163\163\x3d\x22\x6d\x6f\x77\x65\x62\x33\x2d\155\x6f\144\x61\154\x2d\x64\151\141\154\x6f\x67\x22\76\15\xa\x20\40\x20\40\40\40\x20\x20\x20\40\x20\40\74\41\x2d\x2d\x20\155\x6f\x77\145\142\x33\55\155\157\x64\141\154\40\143\x6f\156\x74\145\x6e\x74\x20\55\55\76\xd\xa\40\x20\x20\40\40\x20\x20\x20\x20\x20\40\x20\x3c\144\151\166\x20\143\154\141\x73\163\x3d\x22\155\157\167\145\x62\63\x2d\x6d\x6f\144\141\154\55\143\x6f\x6e\x74\145\156\x74\x20\x22\76\xd\12\40\x20\x20\40\40\x20\x20\40\40\x20\40\x20\x20\x20\40\x20\74\x64\x69\166\x20\143\154\x61\163\163\x3d\x22\x6d\157\x77\145\142\x33\55\x6d\x6f\x64\x61\x6c\x2d\150\x65\x61\x64\x65\162\x22\x3e\xd\12\x20\x20\40\x20\40\40\x20\40\x20\40\40\40\40\x20\40\40\40\40\40\x20\74\x73\160\x61\156\x20\x6f\156\143\x6c\x69\143\153\x3d\42\x63\x6c\x6f\x73\x65\127\145\142\x33\x4d\157\144\141\x6c\x28\51\73\x22\x20\40\x63\154\x61\x73\x73\75\42\x6d\157\x77\x65\142\63\55\x63\154\x6f\x73\145\42\76\46\x74\x69\x6d\145\x73\73\74\57\163\160\141\x6e\x3e\15\xa\x20\x20\40\x20\40\40\40\40\x20\x20\40\40\x20\x20\x20\x20\40\x20\40\x20\x3c\150\x32\40\40\x63\154\141\x73\163\x3d\42\x6d\157\x77\x65\x62\63\x2d\150\62\42\x20\x73\x74\171\x6c\x65\x3d\42\146\157\x6e\x74\x2d\x73\151\172\x65\72\61\56\65\x72\x65\155\x22\x3e\103\x6f\156\156\145\143\164\40\164\x6f\x20\x79\x6f\165\x72\40\146\x61\166\157\165\162\151\164\145\x20\x43\x72\171\160\164\x6f\x57\x61\x6c\x6c\145\x74\40\x3c\57\150\62\x3e\xd\12\40\40\x20\x20\40\x20\40\x20\40\40\x20\40\x20\40\x20\40\x20\40\x20\40\74\160\40\x69\x64\75\42\155\x6f\167\x65\142\63\x43\165\163\164\157\155\105\x72\162\x6f\162\x4d\x65\163\x73\x61\x67\x65\x22\76\x3c\57\160\x3e\xd\xa\x20\40\x20\40\x20\x20\40\40\40\x20\40\40\40\40\40\40\74\57\144\151\x76\x3e\xd\xa\x20\40\40\x20\x20\x20\40\40\x20\x20\40\40\40\x20\x20\40\74\150\162\x20\143\x6c\141\163\x73\75\42\155\157\x77\x65\142\x33\55\x68\x72\x22\x3e\xd\xa\x20\x20\x20\40\40\40\x20\x20\x20\40\40\40\40\x20\40\x20\x3c\144\x69\166\40\151\x64\75\x22\155\x6f\x77\x65\x62\x33\x2d\x6d\157\x64\141\x6c\42\x20\x63\154\141\163\163\75\42\155\x6f\167\x65\142\63\x2d\155\x6f\144\141\154\x2d\142\x6f\144\x79\x22\x3e";
        $D4 = $this->util->mo_web3_get_option("\155\157\137\x77\145\x62\x33\x5f\x64\x69\x73\160\x6c\141\171\137\x6d\x75\x6c\x74\151\160\x6c\x65\x5f\142\165\x74\164\157\156");
        foreach ($ga as $Ky => $V7) {
            $WW = $V7["\151\x64"];
            $Ug = $e9 ? $V7["\x74\x65\x73\164\151\x6e\147\137\146\165\156\143\164\151\x6f\x6e"] : $V7["\146\165\x6e\x63\x74\x69\157\x6e"];
            $WZ = $WW;
            if (!(!$e9 && $Qw)) {
                goto Q7;
            }
            $Y8 = "\x29\73";
            $Ug = rtrim($Ug, $Y8);
            $Ug = $Ug . "\54" . "\x22" . esc_attr($vc) . "\42" . esc_attr($Y8);
            Q7:
            if (!($D4 && isset($D4[$WW]) && "\x63\150\145\143\x6b\x65\x64" == $D4[$WW])) {
                goto KM;
            }
            $Vt = $this->isMobileDev();
            if (!(("\x6d\x6f\167\145\142\x33\115\x65\x74\141\x4d\x61\163\153" === $WW || "\x6d\x6f\167\145\142\x33\x47\141\155\x65\123\164\157\x70" === $WW || "\155\157\x77\145\142\x33\103\157\x69\156\142\141\163\145" === $WW) && true === $Vt)) {
                goto kz;
            }
            goto RJ;
            kz:
            $i2 .= "\74\144\151\166\40\157\156\x63\x6c\x69\143\x6b\75\x22" . esc_attr($Ug) . "\42\x20\151\x64\x3d\42" . esc_attr($WZ) . "\x22\x20\143\x6c\141\163\x73\75\x22\155\x6f\167\145\x62\x33\55\x68\x6f\x76\145\x72\x20\x6d\x6f\167\145\142\63\55\141\144\x64\x2d\x70\141\144\x64\x69\x6e\x67\42\40\x3e\15\xa\15\xa\x20\x20\40\x20\x20\x20\x20\40\x20\x20\x20\x20\40\x20\40\x20\40\x20\x20\x20\x20\40\x20\x20\74\144\x69\x76\40\143\x6c\x61\x73\163\x3d\42\x6d\157\x77\145\142\63\x2d\x63\145\156\x74\x65\x72\x22\40\163\x74\171\154\x65\x3d\x22\155\x69\x6e\55\x68\145\x69\147\150\164\x3a\x35\60\x70\170\73\155\141\x72\147\x69\156\x2d\154\x65\x66\164\72\x34\65\x25\73\42\x3e";
            $nM = $V7["\154\157\x67\157"];
            $AQ = 0;
            LY:
            if (!($AQ < sizeof($nM))) {
                goto no;
            }
            $i2 .= "\x3c\x69\x6d\147\40\163\x74\171\154\x65\75\x22\160\141\144\x64\x69\156\x67\x3a\62\x25\x22\x20\167\151\144\164\150\75\42\63\x30\x22\40\x68\x65\151\147\x68\x74\x3d\x22\63\60\x22\x20\x73\162\143\75\x22" . esc_attr(MOWEB3_URL) . \MoWeb3Constants::MoWeb3_RESOURCES . "\151\x6d\x61\x67\145\163\57\143\162\171\x70\x74\x6f\x77\141\x6c\x6c\x65\x74\137\151\155\141\x67\x65\163\x2f" . esc_attr($nM[$AQ]) . "\x22\57\x3e\x26\x6e\142\163\160\73\46\x6e\142\163\160\x3b\46\x6e\142\163\x70\73";
            oW:
            $AQ++;
            goto LY;
            no:
            $i2 .= "\x3c\x2f\144\151\166\76\15\xa\x20\x20\x20\x20\x20\x20\40\40\x20\x20\x20\x20\40\40\x20\40\40\x20\40\x20\x20\x20\x20\x20\40\40\x20\40\74\x64\x69\166\40\143\x6c\x61\163\163\75\x22\155\x6f\x77\145\x62\x33\55\143\x65\x6e\164\145\162\x22\76\15\xa\40\40\x20\x20\x20\40\x20\x20\40\x20\x20\40\40\40\x20\x20\40\x20\40\40\40\40\40\40\x20\x20\x20\40\40\x20\x20\40\74\150\63\40\143\x6c\x61\163\x73\75\42\x6d\157\167\145\x62\63\x2d\x68\x33\42\40\163\x74\171\154\145\75\x22\146\x6f\x6e\x74\55\163\151\172\x65\x3a\61\x2e\x31\x37\x72\x65\155\42\x3e" . esc_attr($V7["\x64\x61\x74\141"]) . "\74\x2f\x68\63\x3e\15\xa\40\x20\40\x20\40\40\40\40\40\x20\x20\40\x20\x20\x20\x20\x20\x20\x20\x20\40\x20\x20\40\40\40\40\40\x3c\x2f\144\151\x76\76\15\xa\40\40\40\40\x20\40\40\40\40\x20\40\40\40\40\x20\x20\40\x20\x20\40\x20\40\40\40\x20\x20\40\x20\74\x64\x69\166\x20\x73\164\x79\x6c\x65\75\x22\143\157\154\x6f\x72\x3a\43\x42\62\102\x32\102\x32\42\x20\x63\154\141\163\163\75\42\x6d\x6f\x77\x65\x62\x33\x2d\x63\145\156\164\x65\162\x22\x3e\xd\xa\40\40\x20\x20\x20\x20\40\40\40\40\x20\x20\40\x20\x20\x20\x20\40\40\x20\x20\x20\40\x20\40\x20\40\x20\40\40\x20\40\74\x70\x20\163\x74\x79\154\x65\x3d\x22\155\141\162\x67\x69\156\x2d\142\x6c\x6f\x63\x6b\55\x73\x74\x61\162\x74\72\60\145\155\73\155\x61\162\x67\x69\156\55\142\154\x6f\x63\153\55\145\156\144\72\x30\145\x6d\x3b\x22\40\40\143\154\141\163\x73\x3d\x22\162\x65\x6d\157\166\x65\55\155\141\162\147\151\x6e\42\x20\163\x74\x79\x6c\145\75\42\x66\157\156\164\55\x73\x69\x7a\x65\72\x31\162\x65\x6d\73\x22\x3e\x43\157\x6e\x6e\145\x63\164\40\164\x6f\40\171\x6f\x75\x72\40" . esc_attr($V7["\144\x61\164\141"]) . "\x3c\57\160\x3e\15\xa\x20\x20\x20\x20\40\40\40\x20\x20\x20\x20\x20\x20\x20\x20\40\x20\x20\x20\x20\40\x20\40\40\40\x20\40\40\x3c\x2f\144\151\166\76\15\12\40\x20\40\x20\40\40\x20\x20\x20\x20\40\40\x20\x20\x20\x20\40\x20\x20\x20\x20\x20\x20\x20\x3c\57\144\x69\166\76\15\12\40\x20\40\40\x20\x20\40\x20\40\40\x20\x20\x20\40\40\40\40\x20\40\x20\40\x20\x20\40\74\150\x72\x20\x77\x69\x64\164\x68\x3d\x22\x31\60\x30\45\42\x20\143\154\141\163\163\x3d\42\155\157\x77\x65\142\x33\55\150\162\42\76";
            KM:
            RJ:
        }
        Px:
        $i2 .= "\x20\x20\xd\xa\x20\40\x20\x20\x20\40\x20\x20\40\x20\40\40\40\40\x20\40\x3c\57\x64\151\166\x3e\15\xa\40\40\40\40\40\x20\40\40\x20\40\x20\40\x3c\x2f\x64\x69\x76\x3e\xd\xa\15\xa\x20\x20\40\40\x20\40\x20\40\x3c\x2f\144\x69\166\x3e\xd\xa\xd\12\x20\40\40\x20\x3c\57\144\151\166\x3e";
        if (!$Qw) {
            goto Ws;
        }
        return $i2;
        Ws:
        echo $i2;
    }
}
