<?php


namespace MoWeb3;

use DateTime;
class MoWeb3Utils
{
    public function __construct()
    {
        remove_action("\x61\x64\x6d\x69\156\x5f\156\157\x74\x69\x63\145\x73", array($this, "\155\x6f\137\x77\x65\x62\x33\x5f\163\x75\x63\143\x65\163\163\x5f\x6d\145\163\x73\x61\147\145"));
        remove_action("\x61\144\155\x69\156\137\156\157\164\x69\143\145\x73", array($this, "\x6d\157\137\x77\145\x62\63\x5f\145\162\x72\157\x72\x5f\155\x65\x73\163\141\x67\145"));
        add_action("\155\x6f\x5f\167\145\142\63\x5f\x63\154\x65\141\162\x5f\x70\154\x75\147\137\143\x61\x63\150\x65", array($this, "\x6d\x61\x6e\141\x67\145\137\144\145\x61\x63\x74\151\x76\x61\164\145\137\x63\x61\x63\150\x65"));
    }
    public function get_multiple_crypto_wallet($Qw = false)
    {
        $ga = array("\x6d\145\164\x61\x6d\x61\x73\153" => array("\151\144" => "\155\x6f\x77\x65\x62\x33\115\145\x74\141\115\141\x73\153", "\x66\165\156\143\164\151\x6f\x6e" => "\165\x73\145\x72\114\157\147\x69\x6e\x4f\165\164\50\x30\54\x27\x6d\145\164\x61\x6d\141\x73\153\x27\x2c" . esc_attr((int) $Qw) . "\x29\x3b", "\164\x65\163\x74\x69\156\x67\x5f\146\x75\x6e\x63\x74\x69\157\156" => "\x75\163\x65\x72\114\x6f\147\151\x6e\x4f\165\164\50\61\x2c\x27\x6d\145\164\141\x6d\x61\163\153\x27\54\47\156\165\x6c\x6c\x27\51\73", "\x64\141\x74\x61" => "\115\145\164\x61\x6d\x61\x73\x6b", "\154\157\x67\x6f" => ["\155\x65\164\x61\155\x61\163\x6b\56\x70\x6e\x67"]), "\167\141\154\154\145\164\x43\x6f\x6e\156\x65\143\164" => array("\151\x64" => "\x6d\157\x77\x65\x62\63\x57\x61\154\154\x65\x74\x43\x6f\156\x6e\x65\x63\164", "\x66\x75\156\x63\x74\x69\x6f\x6e" => "\165\163\145\x72\x4c\x6f\147\151\x6e\117\165\164\50\x30\x2c\x27\x77\141\x6c\x6c\x65\x74\x43\x6f\x6e\x6e\x65\143\164\x27\54" . esc_attr((int) $Qw) . "\x29\73", "\x74\x65\163\x74\151\x6e\x67\137\x66\x75\156\x63\x74\x69\157\156" => "\x75\163\x65\162\114\x6f\x67\x69\x6e\117\165\x74\x28\61\54\x27\x77\x61\154\x6c\145\164\103\157\156\156\145\x63\x74\x27\54\47\x6e\x75\154\154\47\x29\x3b", "\x64\x61\x74\x61" => "\x57\x61\154\154\145\164\x20\x43\157\x6e\x6e\145\143\x74", "\154\x6f\x67\157" => ["\167\141\x6c\x6c\x65\164\143\x6f\156\156\x65\143\164\x2e\x70\x6e\147"]), "\143\x6f\151\x6e\142\x61\163\145" => array("\151\144" => "\155\157\167\x65\x62\x33\103\157\x69\x6e\x62\141\x73\145", "\146\165\x6e\x63\164\x69\157\x6e" => "\x75\163\145\162\x4c\x6f\x67\151\x6e\x4f\165\164\x28\60\54\x27\143\x6f\151\156\x62\141\163\x65\47\x2c" . esc_attr((int) $Qw) . "\x29\73", "\164\x65\163\164\x69\x6e\x67\137\146\165\156\143\x74\151\x6f\x6e" => "\x75\163\145\162\x4c\157\147\151\x6e\x4f\165\164\x28\61\x2c\47\143\157\x69\x6e\142\x61\x73\x65\47\54\x27\156\x75\x6c\x6c\47\51\73", "\x64\141\164\141" => "\x43\157\151\156\x62\141\x73\145\40\127\141\x6c\x6c\x65\164", "\154\x6f\147\157" => ["\143\x6f\x69\156\142\x61\x73\x65\x2e\160\x6e\147"]), "\x6d\171\x61\x6c\x67\x6f" => array("\x69\144" => "\155\x6f\167\145\x62\63\x4d\171\x61\154\147\157", "\146\x75\x6e\143\x74\x69\157\156" => "\x63\x6f\156\x6e\x65\143\164\124\x6f\115\x79\x41\x6c\x67\x6f\50\60\x2c" . esc_attr((int) $Qw) . "\x29\73", "\164\145\x73\x74\x69\x6e\147\137\146\165\x6e\x63\x74\x69\157\x6e" => "\143\x6f\x6e\x6e\x65\x63\164\124\157\115\x79\101\x6c\x67\157\x28\61\x29\73", "\144\x61\164\141" => "\115\171\101\154\147\157\x20\x57\141\x6c\x6c\145\x74", "\154\157\147\157" => ["\155\171\x61\154\147\157\x2e\160\x6e\x67"]), "\x70\x65\x72\141\167\141\x6c\154\x65\164" => array("\x69\x64" => "\155\x6f\x77\x65\x62\63\120\x65\162\141\x77\141\x6c\x6c\145\x74", "\146\165\156\x63\x74\x69\157\x6e" => "\x63\157\156\x6e\x65\143\164\124\157\x50\x65\162\x61\167\141\x6c\154\x65\164\x28\60\x2c" . esc_attr((int) $Qw) . "\51", "\164\145\163\164\151\x6e\x67\137\x66\165\x6e\143\x74\x69\157\156" => "\x63\157\x6e\156\x65\143\164\x54\x6f\120\145\x72\141\x77\x61\x6c\154\x65\164\x28\61\51", "\x64\141\164\141" => "\120\x65\x72\x61\x20\x57\x61\x6c\x6c\145\164", "\154\157\x67\157" => ["\x70\145\162\x61\x77\141\154\x6c\145\164\x2e\160\156\147"]), "\x70\x68\141\x6e\x74\x6f\155" => array("\x69\144" => "\x6d\157\167\x65\x62\x33\120\150\x61\156\164\157\155", "\146\x75\x6e\143\x74\x69\157\156" => "\147\145\x74\x41\143\x63\157\165\156\164\50\x30\x2c" . esc_attr((int) $Qw) . "\51\x3b", "\x74\x65\x73\x74\x69\x6e\x67\137\x66\x75\156\143\164\151\x6f\156" => "\x67\x65\x74\x41\x63\143\x6f\x75\156\164\x28\x31\51\x3b", "\x64\141\x74\141" => "\120\150\x61\x6e\164\157\x6d\40\x57\x61\154\x6c\x65\164", "\154\157\x67\157" => ["\160\150\141\x6e\164\157\155\x2e\160\x6e\147"]));
        return $ga;
    }
    public function trim_the_wallet_address($z_)
    {
        $Or = strlen($z_);
        $Fg = substr($z_, 0, 5);
        $Fg .= "\x2e\x2e\x2e";
        $Fg .= substr($z_, $Or - 4, 4);
        return $Fg;
    }
    public function authorize()
    {
        if (empty($this->mo_web3_get_option("\155\157\x5f\x77\x65\x62\x33\x5f\154\x65"))) {
            goto Oi;
        }
        $XB = $this->mo_web3_decrypt($this->mo_web3_get_option("\x6d\x6f\137\167\x65\x62\63\137\154\x65"));
        $XB = new DateTime($XB);
        $ag = new DateTime();
        $Tz = $XB->diff($ag);
        $Fe = $Tz->days;
        if (!($Fe === 0)) {
            goto IC;
        }
        return true;
        IC:
        return false;
        Oi:
        return false;
    }
    public function get_current_page_url()
    {
        $iO = "\150\164\164\160\x3a\x2f\x2f";
        $Pe = '';
        if (isset($_SERVER["\x53\x45\122\x56\x45\122\137\116\x41\x4d\x45"])) {
            goto mI;
        }
        global $RB;
        $Pe = $RB;
        goto Es;
        mI:
        if (!isset($_SERVER["\x48\124\x54\120\123"])) {
            goto gH;
        }
        $iO = "\150\x74\164\x70\163\x3a\x2f\57";
        gH:
        $Pe = sanitize_text_field($_SERVER["\123\105\122\126\x45\x52\x5f\x4e\101\115\x45"]);
        Es:
        $fE = isset($_SERVER["\x52\105\x51\125\105\123\x54\x5f\125\122\x49"]) ? sanitize_text_field($_SERVER["\x52\x45\x51\x55\105\123\124\x5f\x55\x52\x49"]) : '';
        $iO .= $Pe . $fE;
        return $iO;
    }
    public function mo_web3_is_clv()
    {
        $E0 = $this->mo_web3_get_option("\155\157\137\x77\x65\142\63\x5f\154\x6b");
        $B2 = $this->mo_web3_get_option("\155\157\137\x77\x65\x62\x33\137\x6c\x76");
        if (!$B2) {
            goto Rl;
        }
        $B2 = $this->mo_web3_decrypt($B2);
        Rl:
        if (!(!empty($E0) && $B2 == "\x74\162\165\x65")) {
            goto h6;
        }
        return 1;
        h6:
        return 0;
    }
    public function mo_web3_set_transient($Ky, $V7, $FQ)
    {
        return set_transient($Ky, $V7, $FQ);
    }
    public function mo_web3_get_transient($Ky)
    {
        return get_transient($Ky);
    }
    public function mo_web3_delete_transient($Ky)
    {
        return delete_transient($Ky);
    }
    public function manage_deactivate_cache()
    {
        $ri = new \MoWeb3\MoWeb3Customer();
        $ri->manage_deactivate_cache();
    }
    public function mo_web3_success_message()
    {
        $Rm = "\x75\160\144\141\164\145\x64";
        $Oi = $this->mo_web3_get_option(\MoWeb3Constants::PANEL_MESSAGE_OPTION);
        echo "\x3c\144\x69\166\x20\x63\x6c\x61\x73\x73\75\47" . esc_html($Rm) . "\x27\x3e\x20\74\160\76" . esc_html($Oi) . "\74\57\x70\76\x3c\57\x64\151\166\x3e";
    }
    public function mo_web3_error_message()
    {
        $Rm = "\145\162\x72\x6f\x72";
        $Oi = $this->mo_web3_get_option(\MoWeb3Constants::PANEL_MESSAGE_OPTION);
        echo "\74\144\x69\x76\x20\x63\154\141\163\x73\75\x27" . esc_html($Rm) . "\x27\x3e\x3c\160\x3e" . esc_html($Oi) . "\74\57\x70\x3e\74\x2f\x64\x69\x76\x3e";
    }
    public function mo_web3_show_success_message()
    {
        remove_action("\x61\x64\155\151\x6e\x5f\156\157\164\151\x63\x65\x73", array($this, "\x6d\x6f\137\x77\x65\142\x33\x5f\145\162\162\157\x72\x5f\155\x65\x73\163\x61\147\145"));
        add_action("\141\x64\155\x69\x6e\137\x6e\157\x74\x69\x63\145\163", array($this, "\155\157\x5f\x77\145\142\63\137\x73\165\143\x63\x65\163\x73\x5f\155\x65\163\x73\141\147\145"));
    }
    public function send_json_response($hF)
    {
        $YX = isset($hF["\x63\157\144\145"]) ? $hF["\x63\157\144\145"] : 302;
        wp_send_json($hF, $YX);
    }
    public function mo_web3_show_error_message()
    {
        remove_action("\x61\x64\155\151\x6e\137\x6e\157\164\151\143\145\163", array($this, "\x6d\157\x5f\167\145\x62\x33\x5f\x73\x75\143\143\x65\x73\x73\137\155\145\x73\163\x61\x67\145"));
        add_action("\x61\144\155\x69\156\x5f\x6e\x6f\164\x69\143\x65\163", array($this, "\x6d\x6f\x5f\167\x65\x62\63\137\x65\162\162\x6f\x72\137\155\145\x73\x73\141\x67\x65"));
    }
    public function mo_web3_license_expiry()
    {
        echo "\74\x64\151\x76\x20\151\x64\x3d\x22\155\145\163\163\x61\x67\x65\42\40\x73\164\171\154\x65\x3d\x22\x70\157\163\x69\x74\151\x6f\x6e\x3a\162\145\154\141\164\x69\x76\x65\42\40\143\154\141\163\x73\x3d\42\x6e\157\164\151\143\x65\x20\x6e\x6f\164\x69\x63\x65\40\156\x6f\x74\151\x63\x65\55\167\141\x72\x6e\x69\x6e\147\42\x3e\x3c\x62\162\40\x2f\x3e\74\163\160\141\x6e\x20\x63\x6c\141\x73\163\x3d\x22\x61\x6c\151\147\x6e\x6c\x65\x66\164\x22\40\163\x74\x79\154\145\75\42\x63\157\154\157\162\72\x23\x61\x30\60\x3b\146\x6f\x6e\164\55\146\141\155\x69\154\x79\72\x20\55\167\x65\142\x6b\x69\x74\55\160\x69\143\164\x6f\x67\162\141\160\x68\x3b\x66\157\x6e\164\x2d\163\151\x7a\x65\72\x20\62\x35\x70\x78\73\42\x3e\111\115\120\x4f\x52\x54\101\116\x54\x21\74\57\x73\160\x61\x6e\76\74\x62\x72\x20\57\x3e\x3c\x69\155\147\40\x73\x72\143\x3d\x22" . MOC_URL . "\x72\145\x73\157\x75\162\143\x65\x73\x2f\151\155\x61\x67\x65\x73\57\x6d\151\x6e\x69\157\x72\x61\156\x67\145\x2d\154\x6f\x67\x6f\56\x70\156\x67" . "\x22\x20\143\154\x61\163\x73\75\42\141\154\x69\x67\156\154\145\x66\164\42\x20\x68\145\151\147\x68\x74\75\x22\x38\x37\x22\40\x77\x69\144\164\150\75\x22\x36\x36\42\x20\x61\154\164\x3d\42\155\x69\156\151\117\162\141\156\x67\x65\40\x6c\x6f\147\x6f\x22\x20\x73\x74\171\x6c\x65\x3d\x22\x6d\x61\x72\x67\151\x6e\72\61\60\160\x78\40\61\x30\160\170\40\61\x30\x70\170\40\60\x3b\40\x68\x65\x69\x67\150\x74\x3a\x31\62\x38\160\x78\73\40\167\x69\144\x74\150\x3a\x20\61\62\70\x70\x78\73\x22\76\74\150\63\76\x6d\151\156\151\117\x72\x61\156\147\x65\40\x4f\101\165\x74\150\x20\x2f\x20\x4f\x70\145\156\x49\x44\x20\x43\x6f\x6e\x6e\145\x63\x74\40\62\x2e\x30\40\123\x69\x6e\x67\154\x65\x20\x53\x69\x67\x6e\x2d\x4f\x6e\x20\x53\x75\x70\160\x6f\162\x74\x20\46\x20\x4d\141\151\x6e\164\145\x6e\141\x6e\143\145\40\x4c\x69\x63\x65\156\x73\145\40\x45\x78\x70\x69\162\145\144\74\x2f\150\63\76\74\x70\x3e\x59\157\165\x72\40\x6d\x69\156\x69\x4f\162\x61\x6e\147\145\x20\x4f\x41\x75\x74\x68\40\x2f\x20\x4f\160\145\156\111\104\x20\103\157\x6e\x6e\x65\x63\x74\x20\123\151\156\x67\x6c\145\x20\123\151\x67\156\55\117\156\40\154\151\x63\145\x6e\163\145\40\151\163\40\x65\170\x70\151\x72\145\144\56\x20\x54\150\151\163\40\155\145\x61\156\x73\x20\x79\157\165\xe2\x80\x99\x72\x65\40\x6d\151\163\x73\151\156\x67\40\157\165\x74\x20\x6f\156\40\x6c\141\x74\x65\x73\x74\x20\x73\x65\x63\x75\x72\x69\x74\171\40\x70\141\164\x63\x68\x65\163\x2c\x20\x63\157\155\160\x61\x74\151\x62\x69\154\x69\164\x79\40\x77\x69\164\x68\x20\x74\150\x65\40\x6c\x61\164\145\x73\x74\40\120\x48\120\x20\166\x65\x72\x73\x69\157\156\x73\x20\x61\156\144\x20\x57\x6f\162\x64\160\x72\145\x73\163\56\x20\x4d\x6f\x73\164\40\151\155\160\x6f\x72\164\141\x6e\x74\154\171\x20\171\157\165\342\x80\231\154\x6c\x20\x62\x65\x20\x6d\151\x73\x73\x69\156\147\40\157\x75\164\40\157\156\x20\x6f\165\x72\40\141\x77\145\x73\157\x6d\x65\40\x73\165\160\x70\x6f\x72\x74\x21\40\x3c\x2f\160\x3e";
    }
    public function mo_web3_is_customer_registered()
    {
        $yB = $this->mo_web3_get_option("\155\x6f\137\167\145\142\63\x5f\x61\144\155\151\156\137\145\155\x61\x69\x6c");
        $xS = $this->mo_web3_get_option("\155\x6f\137\167\145\142\63\x5f\141\x64\x6d\x69\156\x5f\x63\x75\x73\x74\157\155\x65\162\137\153\145\x79");
        if (!$yB || !$xS || !is_numeric(trim($xS ?? ''))) {
            goto Im;
        }
        return 1;
        goto b_;
        Im:
        return 0;
        b_:
    }
    public function get_versi_str()
    {
        return "\106\122\x45\105";
    }
    public function get_plugin_config()
    {
        $bs = $this->mo_web3_get_option("\155\157\137\167\145\x62\x33\x5f\143\x6f\156\x66\151\x67\137\x73\145\x74\x74\151\156\x67\163");
        return !$bs || empty($bs) ? array() : $bs;
    }
    public function update_plugin_config($bs)
    {
        $this->mo_web3_update_option("\155\x6f\x5f\167\145\142\x33\x5f\143\x6f\156\x66\151\x67\137\x73\145\164\164\151\x6e\x67\x73", $bs);
    }
    public function mo_web3_decrypt($Hg)
    {
        $Hg = base64_decode($Hg);
        $R4 = $this->mo_web3_get_option("\x6d\157\137\x77\x65\142\63\137\143\165\163\164\157\x6d\x65\x72\137\164\157\153\145\156");
        if ($R4) {
            goto el;
        }
        return "\x66\x61\154\163\x65";
        el:
        $R4 = str_split(str_pad('', strlen($Hg), $R4, STR_PAD_RIGHT));
        $Nb = str_split($Hg);
        foreach ($Nb as $Qs => $PR) {
            $mw = ord($PR) - ord($R4[$Qs]);
            $Nb[$Qs] = chr($mw < 0 ? $mw + 256 : $mw);
            aG:
        }
        Ra:
        return join('', $Nb);
    }
    public function mo_web3_encrypt($Hg)
    {
        $R4 = $this->mo_web3_get_option("\155\x6f\x5f\x77\x65\x62\63\x5f\x63\165\x73\164\x6f\x6d\145\x72\x5f\164\x6f\x6b\145\x6e");
        $R4 = str_split(str_pad('', strlen($Hg), $R4, STR_PAD_RIGHT));
        $Nb = str_split($Hg);
        foreach ($Nb as $Qs => $PR) {
            $mw = ord($PR) + ord($R4[$Qs]);
            $Nb[$Qs] = chr($mw > 255 ? $mw - 256 : $mw);
            Th:
        }
        Jf:
        return base64_encode(join('', $Nb));
    }
    public function send_error_response_on_url($V7)
    {
        $MR = $this->get_current_url();
        $Yk = "\155\157\x5f\x77\x65\x62\x33\x5f\164\x6f\153\145\x6e\x3d" . sanitize_text_field($_GET["\x6d\x6f\137\x77\145\x62\63\137\x74\157\153\x65\156"]);
        if (!(strpos($MR, $Yk) != false)) {
            goto L5;
        }
        if (!($MR[strpos($MR, $Yk) - 1] == "\x26")) {
            goto Yc;
        }
        $Yk = "\46" . $Yk;
        Yc:
        $MR = str_replace($Yk, '', $MR);
        L5:
        $MR = strpos($MR, "\x3f") ? $MR . "\x26\x6d\157\137\x77\145\142\x33\x5f\145\x72\x72\x6f\x72\75" . $V7 : $MR . "\77\x6d\x6f\137\167\x65\x62\x33\137\x65\x72\162\x6f\x72\x3d" . $V7;
        wp_safe_redirect($MR);
        exit;
    }
    public function mo_web3_check_empty_or_null($V7)
    {
        if (!(!isset($V7) || empty($V7))) {
            goto fH;
        }
        return true;
        fH:
        return false;
    }
    public function mo_web3_is_curl_installed()
    {
        if (in_array("\143\165\x72\x6c", get_loaded_extensions())) {
            goto Vo;
        }
        return 0;
        goto K_;
        Vo:
        return 1;
        K_:
    }
    public function mo_web3_show_curl_error()
    {
        if (!($this->mo_web3_is_curl_installed() === 0)) {
            goto du;
        }
        $this->mo_web3_update_option(\MoWeb3Constants::PANEL_MESSAGE_OPTION, "\74\x61\x20\150\162\145\x66\x3d\x22\x68\164\164\x70\72\57\57\x70\x68\x70\x2e\156\145\x74\x2f\x6d\141\x6e\165\141\154\57\x65\x6e\x2f\x63\165\x72\154\56\x69\156\x73\x74\141\154\154\x61\164\x69\x6f\x6e\56\160\150\160\42\x20\x74\x61\162\147\x65\x74\x3d\x22\137\142\x6c\x61\x6e\153\42\x3e\x50\x48\120\40\103\x55\122\114\x20\x65\x78\x74\145\x6e\163\151\157\156\x3c\x2f\141\x3e\40\x69\163\40\156\x6f\x74\x20\x69\x6e\163\164\141\154\154\145\x64\x20\157\162\40\x64\151\163\x61\x62\154\145\144\56\40\120\x6c\145\x61\163\x65\40\145\x6e\141\142\154\145\x20\151\164\40\x74\157\x20\143\157\x6e\x74\151\x6e\165\145\x2e");
        $this->mo_web3_show_error_message();
        return;
        du:
    }
    public function mo_web3_get_option($Ky, $YR = false)
    {
        $IM = \MoWeb3Constants::PLAN_NAME;
        $Sn = strpos($IM, "\x6d\165\x6c\164\x69") !== false;
        $V7 = is_multisite() && $Sn ? get_site_option($Ky, $YR) : get_option($Ky, $YR);
        if (!(!$V7 || $YR === $V7)) {
            goto Ga;
        }
        return $YR;
        Ga:
        return $V7;
    }
    public function mo_web3_update_option($Ky, $V7)
    {
        $IM = \MoWeb3Constants::PLAN_NAME;
        $Sn = strpos($IM, "\x6d\x75\x6c\164\x69") !== false;
        return is_multisite() && $Sn ? update_site_option($Ky, $V7) : update_option($Ky, $V7);
    }
    public function mo_web3_delete_option($Ky)
    {
        $IM = \MoWeb3Constants::PLAN_NAME;
        $Sn = strpos($IM, "\x6d\x75\154\164\151") !== false;
        return is_multisite() && $Sn ? delete_site_option($Ky) : delete_option($Ky);
    }
    public function gen_rand_str($tw = 10)
    {
        $pN = "\141\x62\143\144\x65\146\x67\x68\x69\152\153\x6c\155\x6e\157\160\161\162\163\164\165\166\x77\170\x79\172\x41\x42\x43\104\105\106\x47\110\111\x4a\113\114\115\x4e\117\x50\121\122\x53\124\125\126\127\x58\x59\132";
        $wr = strlen($pN);
        $Cm = '';
        $AQ = 0;
        gw:
        if (!($AQ < $tw)) {
            goto an;
        }
        $Cm .= $pN[random_int(0, $wr - 1)];
        gX:
        $AQ++;
        goto gw;
        an:
        return $Cm;
    }
    public function parse_url($Bb)
    {
        $qx = array();
        $KK = explode("\77", $Bb);
        $qx["\x68\157\163\164"] = $KK[0];
        $qx["\x71\x75\145\162\171"] = isset($KK[1]) && '' !== $KK[1] ? $KK[1] : '';
        if (!(empty($qx["\x71\165\145\162\x79"]) || '' === $qx["\x71\165\x65\162\171"])) {
            goto Vj;
        }
        return $qx;
        Vj:
        $rR = [];
        foreach (explode("\x26", $qx["\x71\x75\x65\x72\x79"]) as $oq) {
            $KK = explode("\x3d", $oq);
            if (!(is_array($KK) && count($KK) === 2)) {
                goto MO;
            }
            $rR[str_replace("\x61\155\x70\x3b", '', $KK[0])] = $KK[1];
            MO:
            if (!(is_array($KK) && "\x73\x74\141\164\145" === $KK[0])) {
                goto uV;
            }
            $KK = explode("\163\164\x61\164\x65\75", $oq);
            $rR["\x73\164\x61\x74\x65"] = $KK[1];
            uV:
            ZN:
        }
        M5:
        $qx["\x71\165\145\x72\171"] = is_array($rR) && !empty($rR) ? $rR : [];
        return $qx;
    }
    public function generate_url($ji)
    {
        if (!(!is_array($ji) || empty($ji))) {
            goto jM;
        }
        return '';
        jM:
        if (isset($ji["\150\x6f\x73\164"])) {
            goto Bf;
        }
        return '';
        Bf:
        $Bb = $ji["\x68\157\163\164"];
        $Mw = '';
        $AQ = 0;
        foreach ($ji["\161\165\x65\162\171"] as $gk => $V7) {
            if (!(0 !== $AQ)) {
                goto Qb;
            }
            $Mw .= "\46";
            Qb:
            $Mw .= "{$gk}\x3d{$V7}";
            ++$AQ;
            bk:
        }
        KE:
        return $Bb . "\x3f" . $Mw;
    }
    public function get_current_url()
    {
        return (isset($_SERVER["\x48\x54\124\120\123"]) ? "\x68\164\164\x70\163" : "\x68\164\164\x70") . "\72\x2f\57" . sanitize_text_field(wp_unslash($_SERVER["\110\124\x54\x50\137\110\117\x53\x54"])) . sanitize_text_field(wp_unslash($_SERVER["\122\105\121\125\105\x53\x54\137\x55\x52\x49"]));
    }
    public function render_info_tooltip($Oi)
    {
        echo "\x9\x9\15\xa\x9\11\11\11\74\144\151\166\76\xd\xa\11\x9\x9\11\11\74\x73\x70\x61\156\x20\144\141\164\x61\x2d\x74\157\x67\147\154\145\75\42\x74\x6f\x6f\x6c\164\151\x70\42\x20\144\141\x74\x61\x2d\160\154\141\143\x65\155\145\x6e\164\x3d\42\x62\157\x74\x74\157\x6d\x22\40\x74\151\x74\x6c\x65\75\x22";
        echo esc_attr($Oi);
        echo "\x22\40\163\164\171\x6c\145\x3d\x22\167\151\144\164\150\72\x61\165\x74\x6f\73\42\x3e\xd\12\x9\x9\11\11\11\11\74\x73\160\x61\x6e\40\143\x6c\x61\163\163\75\x22\x6d\141\164\x65\x72\151\141\154\x2d\151\143\157\x6e\163\x22\x20\163\164\x79\x6c\145\x3d\x22\x63\157\x6c\157\162\72\144\x61\x72\153\x67\x72\x61\171\x22\76\15\12\x9\x9\11\11\x9\x9\x68\145\x6c\x70\137\x6f\x75\x74\154\151\x6e\145\xd\12\11\x9\11\x9\x9\11\74\x2f\163\x70\x61\x6e\x3e\15\12\x9\11\x9\x9\11\74\x2f\x73\x70\x61\x6e\76\15\12\x9\x9\x9\11\74\x2f\x64\x69\x76\76\15\xa\x9\x9\11\11\x3c\x73\143\162\151\x70\x74\76\15\xa\11\11\11\x9\152\121\165\x65\162\171\50\x64\157\143\x75\x6d\145\x6e\164\x29\x2e\x72\145\x61\x64\x79\50\x66\165\156\143\164\x69\x6f\x6e\x28\x29\173\xd\xa\x9\11\x9\11\x9\152\121\165\x65\x72\x79\x28\47\x5b\x64\141\164\x61\x2d\164\157\147\x67\154\145\x3d\42\164\x6f\157\x6c\164\151\x70\42\135\x27\51\56\164\x6f\157\154\x74\151\x70\50\x7b\x20\x63\x6f\156\164\x61\x69\x6e\145\162\x3a\x20\47\x62\157\x64\171\x27\175\51\73\15\xa\x9\11\x9\x9\175\x29\x3b\15\xa\11\x9\x9\11\x3c\x2f\x73\143\162\x69\160\x74\76\xd\xa\x9\x9";
    }
    public function mo_web3_get_user($S_)
    {
        $oB = $this->mo_web3_get_option("\155\x6f\x5f\167\145\142\x33\137\x75\x73\145\x72\x6e\x61\155\145\x5f\163\x70\x65\x63\151\146\151\143\x61\x74\x69\x6f\x6e");
        $yy = md5($S_);
        if ($oB) {
            goto ZT;
        }
        $p4 = $S_;
        goto K0;
        ZT:
        $p4 = $yy;
        K0:
        global $wpdb;
        $nL = $wpdb->prepare("\123\105\114\x45\103\124\x20\x43\x4f\x41\114\105\123\x43\x45\x28\x20\50\x20\123\x45\114\x45\x43\124\x20\165\x73\x65\x72\x5f\x69\144\x20\106\122\117\115\40{$wpdb->usermeta}\x20\x57\x48\105\x52\105\40\x6d\x65\x74\141\x5f\166\141\x6c\165\145\75\45\x73\x20\141\x6e\x64\40\x6d\x65\x74\141\x5f\153\x65\171\75\x27\x6d\157\167\145\142\63\137\x77\141\x6c\154\x65\164\x5f\x61\x64\x64\x72\145\163\163\x27\51\54\x30\x29\40\114\111\115\111\x54\40\61\73", $p4);
        $Hv = $wpdb->get_var($nL, 0, 0);
        if ($Hv > 0) {
            goto tk;
        }
        if (!apply_filters("\x6d\x6f\137\167\x65\142\x33\x5f\144\157\137\156\157\164\137\x63\162\145\x61\164\x65\137\x75\x73\145\x72", false)) {
            goto F8;
        }
        return false;
        F8:
        goto yM;
        tk:
        $user = get_user_by("\x49\x44", $Hv);
        return $user;
        yM:
        $p6 = '';
        $Ll = wp_generate_password($tw = 12, $ei = false);
        $Hv = wp_create_user($p4, $Ll, $p6);
        $user = get_user_by("\x6c\157\x67\x69\156", $p4);
        return $user;
    }
    public function deactivate_plugin()
    {
        $this->mo_web3_delete_option("\155\157\137\167\x65\x62\63\x5f\150\x6f\163\164\x5f\156\x61\155\x65");
        $this->mo_web3_delete_option("\155\x6f\x5f\167\x65\x62\63\x5f\x6e\145\x77\x5f\x72\145\x67\151\x73\164\162\141\x74\x69\157\156");
        $this->mo_web3_delete_option("\155\x6f\137\167\x65\x62\63\x5f\x61\x64\x6d\151\x6e\137\145\x6d\x61\151\x6c");
        $this->mo_web3_delete_option("\155\157\137\167\x65\x62\63\x5f\x61\144\155\151\x6e\137\160\150\157\x6e\x65");
        $this->mo_web3_delete_option("\155\x6f\x5f\167\145\142\x33\x5f\141\144\155\x69\x6e\137\x66\156\141\155\145");
        $this->mo_web3_delete_option("\155\157\x5f\167\145\x62\x33\x5f\141\x64\x6d\x69\156\137\154\x6e\141\155\x65");
        $this->mo_web3_delete_option("\x6d\x6f\137\x77\x65\142\x33\x5f\x61\x64\x6d\x69\156\137\143\157\155\160\141\156\x79");
        $this->mo_web3_delete_option(\MoWeb3Constants::PANEL_MESSAGE_OPTION);
        $this->mo_web3_delete_option("\x6d\157\137\x77\x65\142\63\x5f\141\x64\x6d\151\x6e\137\143\x75\163\x74\157\155\145\162\x5f\153\x65\x79");
        $this->mo_web3_delete_option("\x6d\157\x5f\167\145\142\63\137\141\144\x6d\151\x6e\137\141\160\x69\137\x6b\x65\x79");
        $this->mo_web3_delete_option("\x6d\157\x5f\x77\145\x62\63\137\156\145\x77\137\x63\165\x73\x74\157\155\x65\x72");
        $this->mo_web3_delete_option("\155\157\x5f\x77\145\x62\63\x5f\162\145\147\x69\163\x74\162\x61\164\151\x6f\x6e\x5f\163\x74\141\x74\x75\163");
        $this->mo_web3_delete_option("\x6d\157\x5f\167\x65\142\63\137\143\x75\163\164\157\x6d\x65\x72\137\164\x6f\153\145\x6e");
        $this->mo_web3_delete_option("\155\157\x5f\x77\x65\142\x33\x5f\154\x6b");
        $this->mo_web3_delete_option("\155\157\137\x77\x65\142\x33\x5f\154\166");
        $this->mo_web3_delete_option("\x6d\x6f\137\x77\145\x62\x33\137\156\x66\x74\x5f\x73\x65\x74\164\x69\x6e\147\163");
        $this->mo_web3_delete_option("\x6d\157\137\x77\x65\142\x33\x5f\154\157\147\x69\x6e\137\142\165\x74\164\x6f\156\x5f\x63\165\x73\164\157\155\x5f\143\163\163");
        $this->mo_web3_delete_option("\155\x6f\137\x77\145\x62\x33\137\142\165\x74\x74\157\156\137\143\165\x73\164\157\155\x5f\x74\x65\x78\164");
        $this->mo_web3_delete_option("\x6d\x6f\x5f\x77\x65\142\x33\x5f\144\151\163\x70\154\x61\171\x5f\154\157\147\151\x6e\x5f\x62\165\164\x74\x6f\x6e");
        $this->mo_web3_delete_option("\155\x6f\x5f\167\x65\142\x33\x5f\x6c\x65");
    }
    public function base64url_encode($jp)
    {
        return rtrim(strtr(base64_encode($jp), "\53\x2f", "\x2d\137"), "\x3d");
    }
    public function base64url_decode($jp)
    {
        return base64_decode(str_pad(strtr($jp, "\x2d\x5f", "\53\x2f"), strlen($jp) % 4, "\x3d", STR_PAD_RIGHT));
    }
    public function get_wp_user_profile_attributes()
    {
        return array("\x6e\x69\143\x6b\x6e\141\x6d\x65", "\146\x69\162\x73\164\137\156\x61\x6d\145", "\154\x61\163\164\x5f\x6e\x61\x6d\145", "\144\145\163\x63\x72\x69\160\x74\x69\157\x6e", "\162\x69\x63\150\137\145\x64\151\x74\151\x6e\147", "\165\x73\x65\162\137\156\x69\143\145\x6e\141\x6d\145", "\x75\x73\145\162\x5f\x65\x6d\141\x69\x6c", "\x64\x69\x73\x70\x6c\141\171\x5f\x6e\x61\x6d\x65", "\x74\x65\154\145\160\x68\157\x6e\145", "\141\x64\x64\162\145\x73\163");
    }
}
