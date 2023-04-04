<?php


namespace MoWeb3;

class MoWeb3Customer
{
    public $email;
    public $phone;
    private $default_customer_key = "\61\66\65\x35\65";
    private $default_api_key = "\x66\106\x64\62\x58\x63\166\124\x47\x44\x65\x6d\132\166\x62\167\x31\x62\143\x55\x65\x73\x4e\112\x57\105\x71\113\x62\x62\125\x71";
    private $host_name = '';
    private $host_key = '';
    public function __construct()
    {
        global $V8;
        $this->host_name = $V8->mo_web3_get_option("\x6d\x6f\137\167\145\142\63\137\x68\157\x73\164\137\x6e\141\x6d\x65") ? $V8->mo_web3_get_option("\x6d\x6f\137\x77\145\142\x33\x5f\x68\157\163\x74\x5f\156\141\x6d\145") : "\x68\x74\164\x70\163\x3a\x2f\57\154\157\147\151\156\56\x78\145\143\x75\x72\x69\146\171\x2e\143\157\x6d";
        $this->email = $V8->mo_web3_get_option("\155\157\137\167\145\x62\63\137\141\144\x6d\151\156\x5f\x65\155\x61\151\154");
        $this->phone = $V8->mo_web3_get_option("\155\x6f\x5f\167\145\142\x33\x5f\x61\x64\x6d\x69\156\x5f\160\150\157\156\145");
        $this->host_key = $V8->mo_web3_get_option("\155\x6f\x5f\x77\x65\x62\63\x5f\x70\141\x73\x73\x77\157\x72\144");
    }
    public function mo_web3_XfsZkodsfhHJ($YX)
    {
        global $V8;
        $Bb = $this->host_name . "\x2f\155\157\141\163\57\x61\160\x69\x2f\142\141\143\153\165\160\143\157\x64\x65\x2f\x76\x65\x72\x69\x66\x79";
        $S7 = $V8->mo_web3_get_option("\x6d\x6f\x5f\x77\145\x62\x33\137\141\144\x6d\151\156\x5f\x63\165\163\x74\157\x6d\x65\x72\x5f\153\145\x79");
        $Wt = $V8->mo_web3_get_option("\x6d\157\137\167\x65\x62\x33\x5f\x61\144\155\x69\x6e\137\x61\x70\151\x5f\x6b\145\x79");
        $a8 = $V8->mo_web3_get_option("\x6d\157\137\x77\x65\x62\63\x5f\141\x64\155\151\x6e\137\145\155\x61\151\154");
        $Ab = round(microtime(true) * 1000);
        $Ab = number_format($Ab, 0, '', '');
        $w5 = $S7 . $Ab . $Wt;
        $cJ = hash("\x73\x68\x61\x35\61\62", $w5);
        $t8 = "\x43\x75\163\x74\157\x6d\x65\x72\55\113\x65\x79\x3a\x20" . $S7;
        $c7 = "\124\x69\x6d\145\163\164\141\x6d\160\72\40" . $Ab;
        $x6 = "\101\x75\164\150\x6f\162\151\x7a\141\x74\x69\x6f\156\72\x20" . $cJ;
        $Pd = array("\x63\157\x64\145" => $YX, "\143\x75\163\164\x6f\x6d\x65\x72\113\x65\171" => $S7, "\141\x64\x64\151\x74\151\x6f\x6e\x61\154\x46\151\145\x6c\144\163" => array("\x66\151\x65\154\x64\x31" => site_url()));
        $x2 = json_encode($Pd);
        $Zu = array("\x43\157\156\164\145\156\164\x2d\x54\171\x70\x65" => "\x61\160\x70\154\x69\x63\x61\x74\151\x6f\156\x2f\152\x73\x6f\156", "\103\165\163\164\x6f\155\x65\162\55\x4b\x65\x79" => $S7, "\124\151\155\x65\163\x74\141\x6d\x70" => $Ab, "\101\165\x74\x68\157\x72\x69\172\x61\x74\x69\157\x6e" => $cJ);
        $f4 = array("\155\x65\164\150\x6f\x64" => "\120\x4f\x53\x54", "\142\157\x64\171" => $x2, "\x74\x69\x6d\x65\x6f\165\164" => "\x35", "\162\x65\x64\x69\162\145\143\x74\x69\157\156" => "\x35", "\150\x74\x74\x70\166\145\162\163\151\157\x6e" => "\x31\56\60", "\x62\x6c\157\143\x6b\x69\156\147" => true, "\x68\x65\141\x64\145\x72\x73" => $Zu);
        $hF = wp_remote_post($Bb, $f4);
        if (!is_wp_error($hF)) {
            goto me;
        }
        $Au = $hF->get_error_message();
        echo "\123\157\155\145\164\x68\x69\156\147\x20\167\x65\156\x74\x20\x77\162\157\156\x67\72\40" . esc_attr($Au);
        exit;
        me:
        return wp_remote_retrieve_body($hF);
    }
    public function mo_web3_check_customer_ln()
    {
        global $V8;
        $Bb = $this->host_name . "\x2f\x6d\157\141\163\57\x72\x65\x73\164\57\x63\x75\163\x74\157\x6d\145\162\57\x6c\151\143\x65\156\x73\x65";
        $S7 = $V8->mo_web3_get_option("\x6d\x6f\137\x77\x65\x62\63\x5f\141\144\x6d\x69\156\x5f\x63\x75\x73\x74\x6f\x6d\x65\x72\x5f\153\x65\x79");
        $Wt = $V8->mo_web3_get_option("\155\157\137\167\x65\142\x33\x5f\141\x64\155\151\x6e\x5f\141\x70\x69\x5f\x6b\x65\x79");
        $Ab = round(microtime(true) * 1000);
        $w5 = $S7 . number_format($Ab, 0, '', '') . $Wt;
        $cJ = hash("\x73\150\141\65\x31\62", $w5);
        $t8 = "\x43\165\x73\x74\157\x6d\x65\162\55\113\145\x79\72\x20" . $S7;
        $c7 = "\124\151\x6d\145\x73\x74\x61\x6d\x70\72\x20" . $Ab;
        $x6 = "\x41\x75\164\150\x6f\x72\x69\172\x61\164\151\x6f\x6e\x3a\x20" . $cJ;
        $Pd = '';
        $Pd = array("\143\x75\163\x74\x6f\x6d\145\x72\111\144" => $S7, "\x61\160\x70\154\x69\143\x61\x74\151\x6f\x6e\x4e\x61\155\x65" => "\167\x70\x5f\157\141\165\164\x68\137\x77\x65\x62\x33\x5f\141\165\x74\150\x65\156\x74\151\x63\x61\164\151\157\156\137\x70\x72\x65\155\151\x75\x6d\137\x70\154\141\156");
        $x2 = json_encode($Pd);
        $Zu = array("\103\x6f\156\x74\145\x6e\x74\55\124\x79\160\145" => "\141\160\160\154\x69\143\141\164\151\157\x6e\x2f\152\x73\157\156", "\103\165\x73\x74\157\x6d\x65\162\55\x4b\145\171" => $S7, "\124\x69\x6d\x65\x73\x74\141\x6d\160" => $Ab, "\x41\x75\164\x68\x6f\162\x69\x7a\141\x74\151\x6f\156" => $cJ);
        $f4 = array("\x6d\145\164\x68\157\x64" => "\x50\117\x53\124", "\x62\157\x64\x79" => $x2, "\x74\151\x6d\x65\x6f\165\x74" => "\61\65", "\162\145\x64\151\x72\145\143\164\151\157\x6e" => "\65", "\150\164\x74\x70\166\145\162\x73\151\x6f\x6e" => "\x31\x2e\x30", "\x62\x6c\x6f\143\153\151\x6e\x67" => true, "\150\x65\x61\144\x65\x72\163" => $Zu);
        $hF = wp_remote_post($Bb, $f4);
        if (!is_wp_error($hF)) {
            goto q0;
        }
        $Au = $hF->get_error_message();
        echo "\123\157\155\145\164\x68\x69\x6e\147\40\167\x65\x6e\164\40\x77\x72\x6f\x6e\x67\72" . esc_attr($Au);
        exit;
        q0:
        return wp_remote_retrieve_body($hF);
    }
    public function create_customer()
    {
        global $V8;
        $Bb = $this->host_name . "\57\x6d\x6f\x61\163\x2f\x72\145\163\x74\57\x63\165\x73\x74\x6f\x6d\145\162\57\x61\x64\x64";
        $nU = $this->host_key;
        $Y5 = $V8->mo_web3_get_option("\x6d\x6f\x5f\167\x65\x62\63\137\x61\x64\155\x69\x6e\x5f\146\x6e\141\x6d\145");
        $fr = $V8->mo_web3_get_option("\155\x6f\137\x77\145\142\63\137\141\144\x6d\151\x6e\x5f\154\x6e\x61\155\x65");
        $PO = $V8->mo_web3_get_option("\x6d\157\x5f\x77\x65\142\63\x5f\141\144\155\151\x6e\x5f\x63\157\x6d\160\141\156\x79");
        $Pd = array("\143\157\x6d\160\141\156\x79\x4e\141\x6d\145" => $PO, "\141\x72\x65\141\x4f\146\x49\x6e\164\x65\162\x65\163\164" => "\127\x50\x20\127\145\x62\x20\63\56\x30\40\x4c\x6f\x67\151\x6e", "\146\151\x72\x73\164\x6e\141\155\145" => $Y5, "\154\141\163\x74\x6e\141\155\145" => $fr, \MoWeb3Constants::EMAIL => $this->email, "\x70\x68\x6f\x6e\x65" => $this->phone, "\160\x61\163\163\167\x6f\x72\x64" => $nU);
        $x2 = wp_json_encode($Pd);
        return $this->send_request([], false, $x2, [], false, $Bb);
    }
    public function get_customer_key()
    {
        global $V8;
        $Bb = $this->host_name . "\x2f\155\x6f\x61\x73\57\x72\145\x73\164\57\x63\165\x73\164\157\155\145\x72\57\x6b\x65\x79";
        $yB = $this->email;
        $nU = $this->host_key;
        $Pd = array(\MoWeb3Constants::EMAIL => $yB, "\160\141\x73\x73\x77\157\162\144" => $nU);
        $x2 = wp_json_encode($Pd);
        return $this->send_request([], false, $x2, [], false, $Bb);
    }
    public function add_web3_application($WW, $XU)
    {
        global $V8;
        $Bb = $this->host_name . "\x2f\155\157\x61\163\57\162\x65\163\x74\57\x61\x70\x70\154\151\143\x61\x74\151\157\x6e\x2f\141\x64\144\x6f\x61\x75\164\x68";
        $xS = $V8->mo_web3_get_option("\155\x6f\137\x77\x65\142\63\137\x61\x64\155\x69\x6e\x5f\x63\x75\x73\x74\x6f\x6d\145\162\137\x6b\145\x79");
        $dQ = $V8->mo_web3_get_option("\155\157\137\x77\x65\142\x33\137" . $WW . "\x5f\x73\143\157\x70\x65");
        $z5 = $V8->mo_web3_get_option("\155\157\137\167\x65\142\63\x5f" . $WW . "\137\x63\154\151\145\156\164\137\x69\144");
        $R6 = $V8->mo_web3_get_option("\x6d\x6f\x5f\167\x65\142\x33\137" . $WW . "\x5f\143\x6c\x69\x65\x6e\164\137\x73\x65\x63\x72\145\x74");
        if (false !== $dQ) {
            goto PX;
        }
        $Pd = array("\141\x70\x70\x6c\151\x63\141\x74\x69\x6f\156\116\141\x6d\145" => $XU, "\143\165\x73\164\157\155\145\162\111\144" => $xS, "\x63\154\x69\x65\x6e\164\111\144" => $z5, "\143\154\151\145\x6e\164\x53\145\x63\x72\x65\164" => $R6);
        goto hJ;
        PX:
        $Pd = array("\141\x70\x70\x6c\151\143\x61\x74\151\157\x6e\116\141\x6d\x65" => $XU, "\x73\x63\x6f\x70\x65" => $dQ, "\143\165\163\164\157\155\145\x72\x49\144" => $xS, "\143\154\x69\x65\x6e\164\x49\x64" => $z5, "\143\154\x69\145\x6e\x74\123\x65\x63\x72\x65\x74" => $R6);
        hJ:
        $x2 = wp_json_encode($Pd);
        return $this->send_request([], false, $x2, [], false, $Bb);
    }
    public function check_internet_connection()
    {
        return (bool) @fsockopen("\154\x6f\x67\x69\x6e\x2e\170\145\143\x75\162\151\146\171\x2e\x63\x6f\155", 443, $pb, $SZ, 5);
    }
    public function mo_web3_send_email_alert($yB, $E6, $Oi)
    {
        global $V8;
        if ($this->check_internet_connection()) {
            goto Sd;
        }
        return;
        Sd:
        $Bb = $this->host_name . "\x2f\x6d\x6f\x61\x73\x2f\141\x70\151\57\156\157\x74\151\146\x79\57\x73\145\156\144";
        global $user;
        $xS = $this->default_customer_key;
        $vC = $this->default_api_key;
        $MK = self::get_timestamp();
        $Gf = $xS . $MK . $vC;
        $MY = hash("\x73\x68\x61\65\x31\62", $Gf);
        $yD = $yB;
        $PZ = "\x57\x6f\162\x64\x50\162\x65\x73\x73\x20\x57\145\142\40\x33\x2e\60\40\x4c\x6f\147\x69\x6e\40\120\154\165\147\151\x6e";
        $C_ = site_url();
        $user = wp_get_current_user();
        $Ft = \ucwords(\strtolower($V8->get_versi_str())) != "\x46\162\145\145" ? \ucwords(\strtolower($V8->get_versi_str())) . "\40\x2d\40" . \mo_web3_get_version_number() : "\40\x2d\x20" . \mo_web3_get_version_number();
        $UV = "\x5b\40\x57\x50\x20\127\x65\x62\40\x33\x2e\x30\40\101\x75\x74\150\x65\x6e\x74\x69\x63\x61\164\151\157\156\40" . $Ft . "\40\x5d\x20\x3a\x20" . $Oi;
        $oC = isset($_SERVER["\x53\x45\122\x56\105\x52\137\x4e\x41\x4d\105"]) ? sanitize_text_field(wp_unslash($_SERVER["\x53\x45\x52\x56\x45\122\x5f\116\x41\115\105"])) : '';
        $IJ = "\x3c\144\x69\166\40\76\x48\145\154\154\x6f\54\x20\x3c\142\x72\x3e\74\x62\x72\76\x46\151\162\x73\x74\40\116\x61\155\x65\x20\x3a" . $user->user_firstname . "\x3c\x62\162\76\x3c\142\x72\76\x4c\x61\163\x74\x20\40\x4e\x61\155\145\40\x3a" . $user->user_lastname . "\x20\40\40\74\x62\162\x3e\x3c\x62\162\x3e\103\157\155\x70\141\x6e\x79\40\72\74\141\40\x68\162\145\146\75\x22" . $oC . "\x22\40\164\141\162\147\145\164\75\42\137\x62\154\x61\156\x6b\42\40\76" . $oC . "\x3c\57\x61\x3e\x3c\142\162\76\74\142\x72\x3e\120\150\157\x6e\x65\x20\116\165\x6d\142\x65\162\x20\72" . $E6 . "\x3c\x62\162\76\x3c\142\x72\76\105\155\x61\x69\154\40\x3a\74\141\x20\150\x72\x65\146\75\x22\155\x61\x69\154\x74\157\72" . $yD . "\x22\40\164\141\162\147\145\164\x3d\x22\137\142\x6c\141\156\153\x22\x3e" . $yD . "\x3c\x2f\x61\76\x3c\x62\162\76\x3c\142\x72\x3e\121\x75\x65\162\171\x20\72" . $UV . "\74\x2f\x64\x69\x76\x3e";
        $Pd = array("\143\x75\x73\x74\157\x6d\145\x72\113\x65\x79" => $xS, "\163\x65\156\144\105\155\x61\151\x6c" => true, \MoWeb3Constants::EMAIL => array("\143\165\x73\x74\x6f\x6d\x65\x72\113\x65\x79" => $xS, "\146\162\157\155\105\155\x61\x69\x6c" => $yD, "\x62\x63\143\105\155\x61\151\x6c" => "\151\156\x66\157\x40\170\x65\x63\x75\x72\151\146\171\56\x63\157\155", "\x66\x72\x6f\x6d\x4e\x61\155\145" => "\x6d\151\x6e\x69\x4f\162\x61\156\x67\x65", "\164\x6f\105\x6d\141\x69\x6c" => "\x77\x65\x62\63\x40\170\145\143\x75\162\151\x66\171\56\x63\157\155", "\164\x6f\116\141\x6d\145" => "\167\145\142\x33\100\x78\x65\x63\165\162\x69\146\x79\x2e\x63\157\155", "\x73\x75\x62\x6a\145\x63\164" => $PZ, "\143\x6f\156\x74\x65\156\164" => $IJ));
        $x2 = wp_json_encode($Pd);
        $Zu = array("\x43\x6f\x6e\x74\145\156\x74\55\x54\171\x70\x65" => "\141\160\x70\154\x69\x63\x61\x74\x69\157\156\57\152\163\x6f\156");
        $Zu["\103\165\x73\x74\x6f\x6d\x65\162\x2d\113\x65\171"] = $xS;
        $Zu["\124\151\x6d\145\x73\x74\x61\x6d\160"] = $MK;
        $Zu["\x41\x75\x74\150\157\162\151\172\141\x74\151\157\156"] = $MY;
        return $this->send_request($Zu, true, $x2, [], false, $Bb);
    }
    public function submit_contact_us($yB, $E6, $UV, $dA = true)
    {
        global $current_user;
        global $V8;
        wp_get_current_user();
        $xS = $this->default_customer_key;
        $vC = $this->default_api_key;
        $MK = time();
        $Bb = $this->host_name . "\57\155\157\x61\163\x2f\x61\160\151\57\x6e\x6f\x74\x69\x66\171\57\x73\145\156\144";
        $Gf = $xS . $MK . $vC;
        $MY = hash("\x73\150\x61\65\x31\62", $Gf);
        $yD = $yB;
        $Ft = \ucwords(\strtolower($V8->get_versi_str())) != "\x46\162\145\145" ? \ucwords(\strtolower($V8->get_versi_str())) . "\x20\x2d\x20" . \mo_web3_get_version_number() : "\40\55\40" . \mo_web3_get_version_number();
        $PZ = "\121\x75\145\x72\171\72\x20\127\x6f\x72\x64\x50\x72\145\163\x73\x20\127\x65\142\40\x33\56\60\40\114\x6f\147\151\156\x20\46\x20\122\x65\x67\x69\x73\x74\145\x72\40" . $Ft . "\40\x50\x6c\x75\147\x69\156";
        $UV = "\x5b\x57\x6f\x72\x64\120\x72\x65\163\163\40\x57\x65\142\40\x33\56\x30\x20\x4c\x6f\x67\151\156\40\46\40\122\x65\x67\151\x73\x74\x65\x72\40" . $Ft . "\x5d\40" . $UV;
        $oC = isset($_SERVER["\123\x45\122\x56\105\x52\x5f\116\x41\115\x45"]) ? sanitize_text_field(wp_unslash($_SERVER["\123\105\122\x56\105\122\x5f\116\x41\115\105"])) : '';
        $IJ = "\74\x64\x69\166\40\76\110\145\x6c\154\157\54\40\x3c\x62\x72\x3e\x3c\x62\x72\x3e\106\151\162\163\164\40\116\141\155\145\40\x3a" . $current_user->user_firstname . "\x3c\x62\162\76\74\142\162\x3e\114\141\x73\164\40\40\116\x61\x6d\145\40\x3a" . $current_user->user_lastname . "\x20\x20\x20\x3c\x62\x72\76\x3c\x62\162\x3e\x43\157\x6d\160\141\x6e\171\x20\x3a\x3c\141\40\150\162\145\146\75\42" . $oC . "\x22\x20\164\141\162\x67\x65\164\x3d\x22\x5f\142\x6c\x61\156\153\x22\x20\76" . $oC . "\x3c\57\x61\76\x3c\x62\162\x3e\74\142\162\x3e\120\150\x6f\x6e\145\x20\x4e\165\155\142\x65\162\40\72" . $E6 . "\74\x62\162\76\x3c\x62\162\x3e\105\155\141\x69\x6c\40\x3a\x3c\141\40\x68\162\145\146\x3d\x22\155\141\151\x6c\x74\157\x3a" . $yD . "\x22\x20\x74\x61\162\x67\145\164\x3d\x22\137\x62\154\x61\x6e\x6b\x22\76" . $yD . "\x3c\x2f\141\76\x3c\x62\162\x3e\74\142\x72\x3e\x51\165\145\x72\171\x20\x3a" . $UV . "\x3c\57\144\x69\166\76";
        $Pd = array("\143\x75\163\164\157\x6d\145\x72\x4b\x65\171" => $xS, "\x73\145\x6e\x64\105\x6d\141\151\x6c" => true, \MoWeb3Constants::EMAIL => array("\143\x75\163\x74\157\155\145\162\113\145\171" => $xS, "\x66\162\157\x6d\x45\x6d\x61\x69\154" => $yD, "\x62\x63\x63\105\155\141\151\x6c" => "\x77\x65\142\63\x40\170\x65\143\x75\162\x69\x66\171\56\x63\157\x6d", "\146\x72\157\155\x4e\x61\155\145" => "\x6d\x69\x6e\x69\x4f\x72\x61\x6e\x67\x65", "\x74\157\x45\x6d\141\151\154" => "\x77\145\x62\x33\100\x78\145\x63\x75\162\x69\146\x79\x2e\143\x6f\x6d", "\164\157\x4e\x61\155\145" => "\167\145\142\x33\x40\x78\x65\143\x75\162\x69\146\x79\x2e\x63\x6f\155", "\163\165\x62\152\x65\x63\x74" => $PZ, "\143\x6f\156\x74\145\156\x74" => $IJ));
        $x2 = json_encode($Pd, JSON_UNESCAPED_SLASHES);
        $Zu = array("\x43\x6f\156\164\145\156\x74\55\124\171\x70\145" => "\141\x70\x70\x6c\151\143\x61\x74\x69\x6f\156\57\152\163\x6f\x6e");
        $Zu["\x43\x75\x73\x74\157\155\x65\x72\x2d\113\x65\171"] = $xS;
        $Zu["\124\151\x6d\x65\163\x74\141\155\x70"] = $MK;
        $Zu["\101\x75\164\150\x6f\162\x69\x7a\x61\164\151\157\x6e"] = $MY;
        return $this->send_request($Zu, true, $x2, [], false, $Bb);
    }
    public function get_timestamp()
    {
        global $V8;
        $Bb = $this->host_name . "\x2f\155\157\141\163\x2f\x72\x65\x73\x74\57\x6d\x6f\x62\x69\154\145\x2f\x67\x65\x74\55\164\x69\155\145\x73\164\141\x6d\160";
        return $this->send_request([], false, '', [], false, $Bb);
    }
    public function check_customer()
    {
        global $V8;
        $Bb = $this->host_name . "\57\155\x6f\x61\163\x2f\162\145\x73\x74\x2f\143\165\x73\x74\x6f\155\x65\x72\57\x63\x68\x65\143\x6b\x2d\x69\x66\x2d\x65\170\x69\x73\x74\163";
        $yB = $this->email;
        $Pd = array(\MoWeb3Constants::EMAIL => $yB);
        $x2 = wp_json_encode($Pd);
        return $this->send_request([], false, $x2, [], false, $Bb);
    }
    private function send_request($jO = false, $H7 = false, $x2 = '', $sJ = false, $e1 = false, $Bb = '')
    {
        $Zu = array("\103\x6f\156\x74\145\156\164\x2d\x54\171\x70\x65" => "\141\x70\x70\x6c\151\x63\x61\x74\151\157\x6e\57\152\163\x6f\156", "\x63\x68\141\162\163\x65\x74" => "\x55\124\106\40\55\40\70", "\x41\x75\x74\x68\157\x72\151\172\x61\x74\151\x6f\x6e" => "\102\x61\x73\151\143");
        $Zu = $H7 && $jO ? $jO : array_unique(array_merge($Zu, $jO));
        $f4 = array("\155\145\164\150\x6f\x64" => "\120\x4f\x53\x54", "\142\157\144\171" => $x2, "\164\151\155\x65\157\165\x74" => "\x31\65", "\162\145\144\x69\x72\x65\143\164\151\x6f\x6e" => "\x35", "\150\164\164\160\166\x65\x72\x73\x69\157\x6e" => "\x31\x2e\x30", "\x62\x6c\x6f\x63\x6b\x69\156\147" => true, "\x68\x65\141\x64\x65\x72\163" => $Zu, "\163\163\154\166\145\x72\x69\x66\171" => true);
        $f4 = $e1 ? $sJ : array_unique(array_merge($f4, $sJ), SORT_REGULAR);
        $hF = wp_remote_post($Bb, $f4);
        if (!is_wp_error($hF)) {
            goto Ll;
        }
        $Au = $hF->get_error_message();
        echo wp_kses("\x53\x6f\155\145\x74\150\151\x6e\x67\40\x77\x65\x6e\164\40\167\x72\x6f\156\147\x3a\40{$Au}", \mo_web3_get_valid_html());
        exit;
        Ll:
        return wp_remote_retrieve_body($hF);
    }
    public function manage_deactivate_cache()
    {
        global $V8;
        $kq = $V8->mo_web3_get_option("\x6d\x6f\137\x77\145\142\x33\x5f\154\153");
        if (!(!$V8->mo_web3_is_customer_registered() || false === $kq || empty($kq))) {
            goto nR;
        }
        return;
        nR:
        $Bb = $this->host_name . "\57\x6d\157\x61\163\x2f\141\x70\x69\x2f\x62\x61\x63\x6b\x75\160\143\x6f\x64\x65\x2f\165\x70\144\x61\x74\x65\x73\x74\x61\x74\165\163";
        $xS = $V8->mo_web3_get_option("\x6d\157\x5f\x77\x65\142\63\x5f\141\144\155\x69\156\137\x63\x75\163\x74\157\155\145\162\137\153\145\x79");
        $vC = $V8->mo_web3_get_option("\155\x6f\137\x77\x65\142\63\x5f\x61\144\155\151\156\x5f\141\160\x69\x5f\153\145\x79");
        $YX = $V8->mo_web3_decrypt($kq);
        $MK = round(microtime(true) * 1000);
        $MK = number_format($MK, 0, '', '');
        $Gf = $xS . $MK . $vC;
        $MY = hash("\x73\150\x61\65\61\x32", $Gf);
        $Du = "\103\x75\x73\x74\157\x6d\x65\x72\x2d\113\x65\x79\x3a\40" . $xS;
        $uZ = "\x54\151\155\x65\x73\x74\x61\155\x70\72\x20" . $MK;
        $gD = "\101\165\164\x68\x6f\x72\151\172\x61\x74\x69\157\x6e\72\x20" . $MY;
        $Pd = '';
        $Pd = array("\143\x6f\x64\145" => $YX, "\143\165\x73\x74\x6f\x6d\145\x72\x4b\x65\x79" => $xS, "\141\x64\144\151\x74\x69\157\156\141\154\106\151\x65\x6c\144\163" => array("\x66\x69\145\x6c\144\x31" => site_url()));
        $x2 = wp_json_encode($Pd);
        $Zu = array("\103\x6f\x6e\164\x65\156\164\x2d\x54\171\160\x65" => "\141\x70\x70\154\151\143\141\164\151\157\156\57\152\x73\157\156");
        $Zu["\x43\x75\x73\164\x6f\x6d\145\x72\x2d\x4b\x65\171"] = $xS;
        $Zu["\x54\x69\x6d\x65\x73\x74\x61\155\x70"] = $MK;
        $Zu["\x41\165\x74\150\x6f\162\x69\x7a\141\x74\x69\157\156"] = $MY;
        $f4 = array("\155\x65\164\150\157\x64" => "\120\117\x53\x54", "\142\157\144\171" => $x2, "\164\151\155\x65\157\165\164" => "\x31\x35", "\x72\x65\144\x69\162\x65\143\x74\151\157\x6e" => "\65", "\x68\x74\x74\x70\x76\x65\x72\163\151\157\x6e" => "\61\56\x30", "\142\x6c\157\x63\153\151\x6e\x67" => true, "\150\145\141\x64\145\162\x73" => $Zu);
        $hF = wp_remote_post($Bb, $f4);
        if (!is_wp_error($hF)) {
            goto qi;
        }
        $Au = $hF->get_error_message();
        echo "\123\x6f\x6d\145\x74\150\x69\x6e\x67\40\167\145\156\x74\40\167\x72\x6f\156\x67\72" . esc_attr($Au);
        exit;
        qi:
        return wp_remote_retrieve_body($hF);
    }
}
