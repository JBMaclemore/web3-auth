<?php


namespace MoWeb3\view\InlineFormConfigView;

use MoWeb3\view\ButtonView\MoWeb3View;
class MoWeb3InlineFormConfig
{
    public $util;
    public $button_view;
    public $fields;
    public function __construct()
    {
        $this->util = new \MoWeb3\MoWeb3Utils();
        $this->button_view = new \MoWeb3\view\ButtonView\MoWeb3View();
        $this->button_view->mo_web3_wp_enqueue();
        $this->button_view->mo_web3_bootstrap_enqueue();
    }
    public function get_field_type_list()
    {
        return array("\164\x65\170\164", "\145\x6d\x61\x69\154", "\164\x65\154", "\x74\x65\170\164\141\162\x65\x61", "\156\x75\x6d\x62\145\x72", "\x70\x61\163\x73\x77\x6f\x72\x64");
    }
    public function render_field_card($Jl = '', $qO = '', $Oo = false, $Tr = '')
    {
        $It = $this->get_field_type_list();
        $oV = $this->util->get_wp_user_profile_attributes();
        echo "\74\x64\x69\x76\x20\143\x6c\141\163\x73\x3d\x22\143\x61\162\144\x20\x62\147\x2d\x6c\x69\x67\x68\164\x20\x6d\x2d\x33\x22\x20\163\x74\171\x6c\x65\75\42\167\151\x64\164\150\72\x20\x35\60\x72\145\155\73\42\76";
        echo "\x3c\x62\x75\x74\x74\x6f\156\40\164\x79\x70\x65\75\42\x62\x75\x74\164\157\x6e\x22\x20\x63\x6c\141\163\x73\x3d\x22\x63\x6c\x6f\x73\145\40\141\x6c\151\x67\x6e\55\x73\x65\x6c\146\x2d\x65\156\144\x22\40\141\x72\x69\x61\55\154\141\x62\x65\x6c\75\x22\103\154\x6f\163\145\42\x3e\x3c\x73\160\141\x6e\40\x61\x72\x69\x61\x2d\x68\x69\x64\144\x65\156\x3d\x22\164\x72\165\145\x22\76\x26\x74\151\x6d\x65\163\x3b\x3c\x2f\x73\160\141\x6e\x3e\x3c\57\142\165\164\x74\157\x6e\76";
        echo "\74\144\151\x76\x20\143\154\141\163\163\75\42\x63\x61\x72\x64\x2d\x62\157\144\x79\x22\76";
        echo "\74\x66\x6f\162\x6d\76";
        echo "\x3c\x64\x69\166\x20\x63\154\x61\163\x73\x3d\x22\x66\x6f\x72\x6d\55\x67\x72\x6f\x75\160\40\162\157\167\x22\x3e\74\154\x61\x62\x65\x6c\x20\x66\157\x72\75\x22\154\141\142\145\154\42\x20\x63\154\x61\x73\x73\x3d\x22\143\157\154\x2d\163\155\x2d\x33\x20\x63\157\154\55\146\x6f\162\155\55\154\141\142\145\x6c\42\76\x46\151\145\154\x64\x20\114\x61\142\x65\154\x20\74\x2f\x6c\141\x62\x65\154\76\74\144\x69\166\x20\143\x6c\141\163\163\x3d\42\x63\x6f\x6c\x2d\x73\x6d\x2d\71\42\x3e\x3c\151\156\x70\165\164\x20\166\141\154\165\145\75\42" . esc_attr($Jl) . "\x22\x20\164\171\x70\145\75\42\164\145\x78\164\42\x20\156\x61\x6d\x65\x3d\42\154\x61\x62\145\x6c\133\x5d\42\40\143\154\x61\x73\163\x3d\42\146\157\x72\155\55\x63\x6f\x6e\164\x72\x6f\x6c\x2d\160\x6c\x61\x69\x6e\164\x65\170\164\42\x20\x69\x64\75\x22\154\x61\142\145\x6c\42\x20\40\x70\154\x61\x63\145\150\x6f\x6c\x64\x65\162\75\x22\105\x78\x3a\x20\104\x69\x73\160\x6c\x61\171\40\116\x61\155\145\42\x3e\x3c\57\144\151\x76\x3e\x3c\x2f\x64\x69\166\76";
        echo "\x3c\144\151\x76\x20\143\154\141\163\163\x3d\42\x66\157\x72\155\55\147\162\x6f\165\x70\40\x72\x6f\167\42\76\74\154\x61\x62\145\x6c\40\x63\x6c\x61\x73\x73\x3d\x22\143\157\154\x2d\x73\155\x2d\63\x20\143\157\154\x2d\146\x6f\162\155\x2d\x6c\141\142\x65\154\x22\x20\x66\x6f\x72\x3d\x22\x74\x79\x70\145\42\x3e\106\151\x65\x6c\x64\40\124\x79\x70\x65\x3c\57\x6c\141\x62\x65\x6c\x3e\x3c\x73\x65\x6c\145\x63\x74\x20\x6e\141\155\145\x3d\x22\x74\x79\160\x65\x5b\x5d\42\40\x63\154\x61\x73\163\75\42\x63\165\163\164\157\x6d\x2d\x73\145\x6c\x65\143\164\40\143\157\x6c\55\x73\155\x2d\70\42\40\x73\x74\171\x6c\x65\75\x22\x6d\141\x72\147\x69\156\x3a\x30\x2e\x32\162\145\x6d\x20\x30\40\60\x20\60\x2e\x38\162\145\x6d\x22\x20\151\x64\x3d\42\x74\x79\160\x65\x22\76";
        foreach ($It as $Ky => $V7) {
            $g2 = $qO === $V7 ? "\x73\145\154\x65\143\x74\145\x64" : '';
            echo "\x3c\157\x70\x74\x69\157\x6e\x20\x20\166\x61\154\x75\145\75\42" . esc_attr($V7) . "\42\40" . esc_attr($g2) . "\x3e" . esc_attr($V7) . "\x3c\57\157\x70\x74\151\157\156\x3e";
            Nm:
        }
        cU:
        echo "\74\57\163\x65\154\145\x63\164\76";
        echo "\x3c\57\x64\x69\166\x3e";
        echo "\74\144\x69\166\40\143\x6c\x61\x73\x73\75\x22\146\157\x72\x6d\x2d\147\x72\x6f\165\x70\x20\162\x6f\167\42\x3e\74\154\141\142\x65\x6c\40\x63\154\141\163\x73\x3d\x22\x63\157\154\x2d\x73\155\x2d\x33\40\143\x6f\154\x2d\x66\x6f\162\x6d\x2d\154\141\x62\x65\154\x22\x20\146\x6f\162\75\42\153\x65\171\x22\76\113\145\x79\40\116\141\155\145\x20\74\57\154\141\x62\x65\154\x3e\74\151\156\x70\165\x74\40\164\171\x70\145\75\42\164\x65\170\x74\42\40\x63\154\141\x73\163\75\42\143\157\x6c\55\163\x6d\x2d\70\42\x20\163\164\171\x6c\145\75\42\x6d\x61\x72\x67\151\156\72\x30\56\64\x72\145\x6d\x20\x30\40\x30\40\x30\56\70\x72\x65\155\42\x20\156\141\155\145\x3d\42\x6d\x65\164\141\137\x6b\x65\171\x5b\135\x22\x20\x76\141\x6c\165\x65\x3d\x22" . esc_attr($Oo) . "\42\40\154\151\x73\164\75\42\153\x65\171\x22\x20\57\x3e\x3c\144\141\x74\x61\x6c\x69\x73\x74\40\40\151\x64\x3d\42\153\x65\x79\42\x3e";
        foreach ($oV as $Ky => $V7) {
            $g2 = $qO === $V7 ? "\x73\145\x6c\145\143\164\x65\x64" : '';
            echo "\74\x6f\x70\164\151\x6f\156\x20\x20\166\x61\x6c\165\145\75\x22" . esc_attr($V7) . "\x22\40" . esc_attr($g2) . "\76" . esc_attr($V7) . "\74\57\157\160\x74\151\157\156\x3e";
            y5:
        }
        Oo:
        echo "\74\x2f\x64\x61\164\x61\x6c\151\x73\164\76";
        echo "\x3c\x2f\x64\x69\x76\x3e";
        $Tr = $Tr ? "\143\x68\x65\143\153\x65\x64" : '';
        echo "\74\144\151\x76\40\143\154\141\x73\163\x3d\42\146\x6f\x72\x6d\55\x67\162\157\x75\160\40\162\157\x77\x22\76\74\x6c\141\x62\145\154\x20\143\x6c\141\x73\163\75\42\x63\x6f\x6c\55\163\x6d\x2d\x33\x20\143\157\154\55\x66\157\x72\x6d\55\154\x61\142\x65\154\x22\76\x20\x52\145\161\165\x69\162\145\x64\74\57\x6c\141\142\145\x6c\x3e\x3c\x69\156\x70\165\164\40\164\x79\160\145\x3d\42\150\151\144\x64\x65\156\x22\40\166\x61\x6c\165\145\x3d\x22\x30\42\40\x6e\141\155\x65\75\42\162\x65\161\165\151\x72\145\144\133\135\x22\x3e\74\151\156\x70\165\164\x20\143\154\x61\x73\x73\75\x22\143\157\x6c\x2d\x73\x6d\x2d\70\42\40\x73\164\x79\x6c\x65\75\42\155\x61\x72\147\151\156\72\40\60\x2e\70\x72\x65\x6d\73\x22\x20\156\141\x6d\145\x3d\x22\x72\x65\161\165\x69\162\x65\144\x5b\x5d\42\40\x74\x79\x70\145\75\x22\x63\150\x65\x63\x6b\142\x6f\170\42\40" . esc_attr($Tr) . "\76\74\57\x64\x69\166\x3e";
        echo "\74\57\x64\x69\x76\x3e";
        echo "\x3c\57\144\x69\166\x3e";
    }
    public function viewForm()
    {
        echo "{$this->button_view->mo_web3_bootstrap_enqueue()}";
        echo "\x3c\144\151\166\40\x63\154\141\163\x73\75\x22\x6d\157\144\x61\x6c\42\x20\151\144\75\x22\155\x6f\144\141\x6c\x57\151\x6e\x64\x6f\x77\x22\40\141\162\x69\141\x2d\x6c\141\x62\x65\154\x6c\x65\x64\142\171\x3d\42\145\x78\141\x6d\x70\154\145\115\157\144\141\154\x4c\x61\x62\145\x6c\x22\x20\141\162\x69\141\x2d\150\151\x64\144\145\156\75\x22\x74\162\x75\145\42\76";
        echo "\74\x64\x69\x76\x20\143\x6c\141\163\x73\75\x22\x6d\x6f\144\x61\154\55\x64\151\141\154\157\147\42\76";
        echo "\74\x64\151\x76\40\143\x6c\141\x73\x73\x3d\42\x6d\x6f\x64\141\x6c\55\x63\157\156\x74\x65\x6e\x74\42\x3e";
        echo "\x3c\x64\x69\166\40\143\154\x61\x73\163\75\42\x6d\157\x64\x61\154\55\x68\x65\141\144\x65\x72\x22\76";
        echo "\74\150\x35\x20\x63\154\141\163\163\75\x22\155\x6f\144\x61\154\55\164\151\x74\x6c\x65\x22\40\76\x50\x6c\145\x61\x73\x65\40\105\156\164\x65\162\x20\131\x6f\x75\x72\x20\x44\x65\x74\141\151\154\x73\x20\164\157\x20\x56\x65\162\151\146\x79\x20\131\x6f\x75\x72\x20\x41\143\x63\157\165\x6e\x74\74\x2f\x68\x35\x3e";
        echo "\x3c\x2f\x64\x69\166\76";
        echo "\74\144\151\x76\40\x63\154\141\163\x73\x3d\42\x6d\x6f\x64\x61\x6c\x2d\142\157\144\171\42\x3e";
        if (!is_array($this->fields)) {
            goto vX;
        }
        foreach ($this->fields as $Ky => $V7) {
            $Tr = $V7["\x72\145\161\165\151\162\x65\x64"] ? "\162\x65\161\165\x69\162\x65\144" : '';
            echo "\74\x64\151\166\x20\143\154\141\x73\163\75\x22\155\142\55\x33\42\x3e";
            echo "\x3c\154\x61\x62\x65\154\40\146\157\162\x3d\x22" . esc_attr($V7["\155\145\164\x61\137\153\x65\x79"]) . "\42\40\143\x6c\141\x73\163\x3d\42\143\157\154\x2d\146\x6f\x72\155\x2d\x6c\141\142\x65\x6c\42\x3e" . esc_attr($V7["\x6c\141\142\x65\x6c"]) . "\72\x3c\57\x6c\141\142\x65\x6c\76";
            echo "\74\x69\x6e\x70\165\x74\x20\164\x79\x70\145\x3d\x22" . esc_attr($V7["\164\171\160\145"]) . "\x22\x20\143\154\x61\163\163\75\42\x66\157\x72\155\55\x63\157\x6e\x74\162\157\x6c\42\x20\156\x61\155\x65\x3d\x22" . esc_attr($V7["\155\x65\164\x61\x5f\x6b\x65\x79"]) . "\42\x20" . esc_attr($Tr) . "\x3e";
            echo "\74\x2f\144\x69\x76\x3e";
            T7:
        }
        IW:
        vX:
        echo "\74\x62\x75\164\x74\x6f\156\x20\x74\x79\x70\x65\x3d\x22\x62\165\x74\164\157\x6e\42\40\143\x6c\141\163\x73\75\42\x62\x74\156\40\142\164\156\x2d\x70\162\151\x6d\x61\162\171\x22\76\123\x75\142\x6d\x69\x74\x3c\x2f\142\x75\164\x74\157\156\x3e";
        echo "\74\x2f\144\151\166\76";
        echo "\x3c\57\144\151\x76\x3e";
        echo "\74\x2f\x64\x69\x76\x3e";
        echo "\74\57\x64\x69\166\x3e";
    }
    public function inline_form_toggle()
    {
        echo "\40\x20\x20\x20\40\x20\40\40\x20\40\x20\x20\74\x66\x6f\162\x6d\x20\x69\144\x3d\x22\x6d\x6f\137\x77\x65\x62\x33\137\x69\156\x6c\x69\x6e\x65\x5f\146\157\162\x6d\137\x74\157\x67\x67\154\x65\42\40\155\145\164\x68\157\144\x3d\42\x70\157\x73\x74\x22\40\141\143\164\151\x6f\x6e\75\42\42\76\xd\12\x20\40\x20\40\x20\40\40\x20\40\x20\40\40\40\40\x20\x20\74\144\x69\x76\x20\143\154\141\x73\163\75\42\162\157\x77\x22\76\xd\xa\40\x20\40\x20\x20\40\40\x20\40\40\40\x20\40\x20\40\40\40\40\x20\x20\x3c\151\x6e\160\x75\164\40\164\x79\160\145\x3d\42\150\x69\x64\x64\x65\156\x22\x20\156\x61\x6d\145\x3d\x22\157\x70\164\x69\x6f\x6e\x22\40\166\x61\154\165\x65\x3d\42\x6d\157\137\167\145\142\x33\x5f\x69\156\154\x69\x6e\x65\137\146\x6f\162\x6d\137\x64\x69\163\x70\x6c\x61\x79\x5f\x74\x6f\x67\x67\x6c\145\x22\40\x2f\x3e\15\xa\40\x20\x20\40\40\40\40\x20\40\40\x20\40\x20\40\40\40\40\40\40\x20";
        wp_nonce_field("\x6d\157\137\167\x65\x62\x33\137\151\156\x6c\151\156\145\137\x66\x6f\162\x6d\137\144\x69\163\x70\x6c\141\171\137\x74\157\x67\x67\154\145", "\155\157\137\167\x65\x62\63\137\x69\156\x6c\x69\x6e\145\137\x66\157\x72\x6d\137\144\151\x73\160\154\141\x79\137\x74\157\147\147\154\145\x5f\x6e\157\156\x63\x65");
        echo "\40\x20\x20\x20\x20\40\40\x20\x20\40\40\x20\x20\40\40\40\x20\x20\x20\x20\74\144\151\x76\x20\x63\x6c\x61\x73\x73\75\42\143\x6f\x6c\55\x31\62\x20\x63\157\x6c\x2d\x73\x6d\x2d\61\42\40\x73\x74\x79\x6c\x65\x3d\x22\144\x69\x73\x70\x6c\x61\171\x3a\x20\146\x6c\x65\x78\73\x20\x6a\x75\163\x74\151\146\171\x2d\143\x6f\156\x74\145\156\x74\72\40\162\151\147\x68\x74\73\x20\x6d\141\162\x67\x69\x6e\55\164\x6f\x70\x3a\x31\60\x70\x78\73\42\x3e\15\xa\x20\40\40\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\40\x20\x20\x20\x20\x20\x20\x20\40\40\x20\74\x69\156\x70\165\x74\40\164\x79\160\145\75\x22\143\x68\x65\x63\153\142\x6f\170\x22\40\x69\144\x3d\x22\x6d\157\x5f\167\x65\x62\x33\x5f\x69\x6e\154\151\156\145\137\146\x6f\162\x6d\x5f\x64\x69\163\160\x6c\x61\171\137\x74\x6f\147\x67\154\145\42\40\x20\156\x61\155\x65\75\x22\155\x6f\x5f\x77\145\x62\63\x5f\151\156\x6c\x69\x6e\145\x5f\146\157\x72\155\x5f\144\151\163\160\154\141\x79\137\x74\x6f\x67\147\154\145\42";
        if (!($this->util->mo_web3_get_option("\x6d\x6f\137\167\x65\x62\x33\137\x69\x6e\154\x69\x6e\145\x5f\146\157\162\x6d\137\x64\x69\x73\x70\x6c\x61\x79\137\164\x6f\x67\x67\154\x65") == "\x63\150\x65\x63\x6b\145\x64")) {
            goto ax;
        }
        echo "\143\x68\145\x63\153\145\144";
        ax:
        echo "\76\15\xa\x20\x20\40\x20\x20\x20\40\x20\x20\40\40\x20\40\x20\40\40\x20\x20\x20\40\74\57\x64\151\x76\76\xd\12\40\x20\40\40\40\x20\x20\40\40\x20\x20\x20\x20\x20\40\x20\x20\40\40\x20\74\144\x69\166\40\x63\154\141\x73\x73\x3d\x22\143\157\154\x2d\x73\155\x2d\x31\x31\x22\76\15\xa\x20\x20\40\x20\x20\x20\x20\40\40\x20\40\40\x20\x20\40\40\x20\40\40\40\40\40\x20\x20\x3c\154\141\x62\x65\x6c\40\163\x74\x79\154\x65\x3d\42\144\x69\x73\160\x6c\x61\171\72\151\156\154\151\x6e\145\x22\40\146\157\162\75\42\143\150\145\x63\x6b\x62\157\170\x22\76\x4f\156\143\x65\40\145\x6e\x61\142\x6c\x65\x64\54\40\x69\156\154\151\156\145\40\146\157\x72\155\x20\167\x69\x6c\x6c\40\141\x70\x70\x65\141\x72\x20\146\157\162\x20\x6e\x65\x77\154\171\40\x72\x65\x67\151\x73\164\x65\162\x65\144\40\165\x73\x65\162\163\56\74\x2f\x6c\141\142\145\154\76\xd\xa\x20\40\x20\x20\x20\40\x20\40\x20\40\40\x20\x20\40\40\x20\40\x20\x20\x20\x3c\57\144\x69\x76\76\xd\xa\40\x20\x20\x20\x20\40\x20\40\x20\x20\x20\x20\x20\40\x20\x20\x3c\57\144\x69\166\x3e\15\xa\x20\40\x20\x20\x20\x20\x20\x20\40\40\x20\x20\74\57\146\157\x72\x6d\x3e\xd\12\x20\x20\40\40\40\x20\x20\x20\40\x20\x20\x20\74\x73\x63\162\151\160\x74\76\xd\xa\40\x20\x20\40\40\40\40\40\x20\x20\x20\40\40\40\x20\x20\155\x6f\137\167\x65\x62\63\137\x69\x6e\x6c\x69\x6e\145\x5f\146\x6f\x72\x6d\137\x64\151\163\160\154\141\x79\137\164\x6f\147\147\154\145\56\x6f\x6e\143\154\x69\143\153\x20\75\x20\146\x75\x6e\143\x74\151\x6f\156\50\x29\x20\173\15\xa\40\40\40\x20\40\x20\x20\x20\x20\x20\40\40\x20\40\x20\x20\x20\x20\x20\40\x76\141\x72\x20\151\156\154\x69\x6e\x65\x5f\146\157\x72\155\137\x63\x68\145\143\x6b\142\x6f\170\75\144\157\x63\x75\155\145\156\x74\56\x67\145\164\x45\154\x65\155\145\x6e\164\102\171\x49\x64\50\x22\155\157\137\167\145\142\63\137\151\x6e\154\x69\x6e\x65\137\x66\x6f\162\x6d\137\144\x69\163\x70\x6c\x61\x79\x5f\164\157\x67\147\x6c\145\42\51\x3b\xd\12\x20\40\x20\40\40\40\40\x20\40\40\40\x20\x20\x20\x20\40\x20\x20\x20\40\x69\x66\x28\151\156\x6c\151\x6e\x65\x5f\146\157\162\x6d\x5f\x63\150\x65\x63\153\x62\x6f\x78\56\143\x68\x65\143\x6b\145\144\x29\173\57\x2f\x20\x74\162\165\x65\x20\151\x66\40\143\150\145\x63\x6b\15\xa\x20\40\40\x20\40\x20\40\x20\40\40\40\x20\x20\40\x20\40\x20\x20\40\40\40\40\x20\40\x69\156\154\x69\156\x65\x5f\x66\157\162\x6d\x5f\143\x68\x65\143\x6b\x62\157\170\56\166\x61\154\x75\145\75\42\143\150\x65\143\153\145\x64\42\x3b\15\12\x20\x20\x20\40\x20\x20\x20\x20\x20\40\40\40\40\x20\x20\40\x20\x20\x20\x20\x7d\145\154\163\x65\173\xd\xa\40\40\40\x20\40\x20\x20\x20\x20\x20\40\x20\x20\40\40\x20\x20\x20\40\40\40\x20\40\x20\151\156\x6c\x69\x6e\x65\137\146\157\162\155\137\x63\150\145\x63\153\142\x6f\170\56\x76\x61\154\165\x65\75\42\x75\156\x63\150\145\143\x6b\145\x64\x22\x3b\xd\12\x20\40\x20\x20\x20\40\40\x20\40\x20\40\40\x20\x20\x20\x20\x20\x20\x20\x20\175\xd\xa\40\40\40\x20\40\x20\40\40\40\x20\x20\x20\x20\40\40\40\40\x20\x20\x20\152\121\x75\145\x72\x79\50\47\x23\155\157\137\167\145\x62\x33\x5f\151\x6e\154\x69\x6e\145\x5f\146\x6f\162\x6d\137\x74\x6f\147\x67\154\x65\x27\51\56\x73\x75\x62\x6d\151\164\50\x29\x3b\xd\12\40\40\40\x20\40\x20\40\x20\x20\x20\40\x20\40\40\x20\40\175\15\12\40\40\40\40\40\40\x20\40\x20\x20\x20\x20\x3c\x2f\163\x63\162\x69\160\x74\76\15\12\40\x20\x20\x20\x20\40\40\40";
    }
    public function view()
    {
        $this->fields = json_decode($this->util->mo_web3_get_option("\155\157\137\x77\x65\142\63\137\151\x6e\154\x69\156\x65\x5f\146\x6f\x72\x6d\x5f\163\145\x74\164\x69\156\147\163"), true);
        echo "\74\144\151\166\40\143\154\141\163\163\75\x22\x6d\157\x5f\163\165\x70\160\x6f\162\164\137\154\141\x79\x6f\165\164\x20\143\x6f\x6e\x74\x61\x69\156\x65\x72\42\x3e\xd\xa\40\40\x20\x20\x20\40\40\x20\40\40\40\40\74\x6c\x61\142\x65\154\40\163\164\x79\154\145\75\x22\144\151\x73\160\x6c\141\x79\x3a\156\157\156\145\73\x22\x3e\15\12\40\x20\40\x20\x20\40\40\x20\x20\x20\x20\40\40\x20\x20\40\x3c\151\x6e\x70\x75\x74\x20\x74\x79\x70\145\x3d\x22\164\145\170\164\42\40\x70\x6c\x61\143\145\x68\x6f\x6c\144\x65\162\x3d\42\117\164\150\145\x72\x22\76\x3c\57\x69\156\x70\x75\x74\76\xd\xa\40\40\40\x20\x20\40\40\x20\x20\40\x20\x20\x3c\57\x6c\x61\x62\x65\154\76\15\12\40\40\x20\x20\40\40\x20\x20\x20\x20\40\x20\74\144\151\166\x20\x63\154\x61\163\x73\75\42\162\x6f\167\x20\x6d\x62\55\64\42\x3e\xd\12\40\x20\40\x20\x20\40\x20\40\x20\40\x20\40\40\40\x20\x20\74\x64\x69\166\x20\x63\154\x61\x73\x73\x3d\42\x63\x6f\154\55\61\62\x20\x63\157\154\55\163\155\x2d\x34\x22\x3e\xd\xa\x20\40\x20\40\x20\40\x20\40\x20\x20\x20\40\40\x20\x20\x20\40\x20\x20\40\74\x68\66\x3e\105\156\141\142\154\x65\x20\x49\156\x6c\151\156\x65\40\106\157\x72\155\40\72\74\57\x68\66\x3e\15\12\40\x20\40\x20\x20\40\x20\40\x20\x20\x20\40\x20\40\x20\x20\74\57\144\151\166\76\xd\xa\40\40\40\x20\40\40\x20\40\x20\x20\x20\x20\x20\40\x20\40\x3c\x64\151\x76\x20\143\x6c\x61\x73\163\75\x22\x63\x6f\x6c\x2d\61\x32\x20\x63\157\x6c\55\x73\x6d\55\70\42\76\15\12\x20\40\x20\40\40\40\40\40\x20\40\40\x20\40\x20\x20\x20\40\x20\x20\x20";
        $this->inline_form_toggle();
        echo "\40\15\12\40\40\40\40\40\40\x20\x20\40\40\x20\x20\x20\40\40\x20\74\x2f\144\151\166\76\15\12\40\x20\x20\40\40\x20\x20\40\40\40\40\40\74\57\x64\151\x76\x3e\15\xa\x20\x20\40\40\40\x20\x20\40\x20\40\40\x20\x3c\146\x6f\x72\x6d\40\x61\143\164\x69\x6f\156\x3d\x22\42\40\x6d\x65\x74\x68\157\144\x3d\x22\x70\x6f\163\164\42\x3e\xd\12\x20\x20\40\x20\40\x20\40\x20\x20\40\x20\40\x20\40\40\40\74\x69\156\160\165\164\40\x74\x79\160\145\75\x22\150\x69\144\144\145\x6e\x22\40\156\x61\155\145\75\x22\x6f\x70\x74\151\157\x6e\x22\40\x76\x61\x6c\165\145\75\42\x6d\x6f\x5f\167\x65\x62\x33\137\x69\x6e\154\151\156\145\x5f\x66\x6f\162\x6d\x5f\x63\157\x6e\x66\x69\x67\42\40\57\x3e";
        wp_nonce_field("\155\157\137\167\x65\x62\63\137\151\156\154\x69\x6e\x65\x5f\146\157\162\x6d\137\143\x6f\x6e\x66\151\147", "\155\x6f\x5f\167\x65\142\63\x5f\151\156\x6c\x69\156\145\x5f\146\x6f\x72\x6d\137\x63\x6f\156\x66\151\147\137\156\x6f\x6e\143\145");
        echo "\x3c\144\x69\166\40\x20\151\x64\x3d\x22\x69\156\154\151\156\145\137\146\x6f\162\x6d\x5f\x63\157\156\x66\151\x67\137\x63\141\x72\x64\137\143\x6f\x6e\164\141\151\x6e\x65\162\x22\40\143\154\141\x73\163\75\42\x64\55\146\154\x65\170\40\x66\x6c\145\170\55\143\x6f\x6c\165\x6d\x6e\x20\x61\x6c\x69\x67\156\x2d\x69\x74\x65\x6d\x73\55\x63\x65\x6e\x74\x65\x72\40\142\144\x2d\150\151\147\x68\154\151\147\150\x74\x20\146\x6c\145\x78\x2d\167\x72\x61\x70\40\155\55\x33\42\76\15\xa\x9\x9";
        if (!is_array($this->fields)) {
            goto Rf;
        }
        foreach ($this->fields as $Ky => $V7) {
            $this->render_field_card($V7["\154\141\142\x65\154"], $V7["\x74\x79\160\x65"], $V7["\x6d\145\164\141\137\x6b\145\171"], $V7["\x72\145\161\x75\x69\162\145\x64"]);
            KL:
        }
        dJ:
        Rf:
        echo "\x9\x20\x20\40\x20\x3c\x2f\144\151\x76\x3e\x20\40\x20\x20\40\40\40\x20\x20\x20\x20\x20\x20\40\x20\40\15\xa\40\40\x20\40\40\x20\40\40\40\40\40\x20\40\x20\x20\40\74\x64\151\166\x20\143\154\x61\x73\163\x3d\x22\x72\157\x77\x20\42\x3e\xd\12\15\xa\x20\40\x20\40\40\x20\x20\40\40\x20\x20\40\40\40\40\40\40\x20\x20\40\x3c\x64\x69\166\x20\x20\x63\x6c\x61\163\x73\75\x22\143\x6f\154\x2d\x73\155\x2d\64\40\x66\157\x72\x6d\55\147\162\x6f\x75\x70\x20\x6d\x62\x2d\63\42\x3e\xd\xa\40\x20\40\40\40\40\40\40\40\40\x20\x20\40\40\40\x20\x20\x20\40\x20\40\40\x20\x20\x3c\151\x6d\x67\x20\x20\x77\151\144\164\150\75\42\63\65\x22\x20\163\162\143\75\42";
        echo esc_attr(MOWEB3_URL) . \MoWeb3Constants::MoWeb3_RESOURCES . "\151\x6d\x61\x67\x65\x73\57\x61\144\144\x2d\x70\154\165\163\55\151\143\x6f\x6e\x2e\x73\x76\147";
        echo "\42\40\151\x64\75\x22\x61\144\144\122\157\x77\42\40\57\76\xd\12\x20\40\x20\40\40\40\40\x20\x20\x20\40\40\40\x20\x20\x20\40\x20\x20\40\x3c\x2f\144\x69\x76\x3e\15\xa\15\12\40\x20\40\x20\40\x20\40\40\40\x20\40\40\40\x20\x20\40\x20\40\40\x20\x3c\x64\x69\166\40\x63\154\x61\163\x73\75\x22\x63\x6f\x6c\55\x73\x6d\x2d\64\40\x6d\x62\x2d\63\40\x6d\162\55\x30\x20\x70\162\55\60\42\76\15\xa\40\x20\40\40\40\40\40\x20\x20\x20\40\40\40\x20\40\40\40\40\x20\40\40\40\x20\40\x3c\142\x75\x74\164\x6f\156\x20\164\x79\160\x65\75\x22\x73\x75\142\x6d\x69\x74\42\40\x63\154\x61\163\163\75\x22\142\x74\x6e\40\x62\x74\x6e\55\160\162\151\x6d\141\x72\x79\x22\76\123\x61\x76\145\40\123\x65\164\164\151\x6e\x67\x73\74\57\142\165\x74\x74\x6f\x6e\x3e\15\12\x20\40\x20\40\40\x20\x20\40\x20\x20\x20\40\40\40\40\x20\40\x20\40\40\x3c\57\144\x69\x76\76\15\xa\xd\xa\40\x20\40\x20\x20\x20\40\x20\x20\x20\40\x20\x20\40\x20\x20\40\40\40\40\x3c\144\151\166\40\143\x6c\141\x73\163\x3d\42\x63\x6f\154\55\163\155\55\x34\40\x6d\x62\x2d\x33\x20\155\154\55\x30\40\160\154\55\60\x22\x3e\15\12\x20\40\x20\40\x20\40\40\40\40\40\x20\x20\40\x20\x20\x20\40\x20\40\x20\x20\40\40\40\x3c\142\165\164\x74\157\x6e\x20\x74\171\x70\x65\75\42\142\165\164\x74\157\156\42\40\x63\x6c\141\x73\163\x3d\x22\x62\x74\156\x20\x62\164\156\55\160\162\x69\x6d\141\162\171\x22\40\151\144\x3d\x22\155\x6f\167\145\x62\63\126\x69\x65\x77\x49\x6e\x6c\151\x6e\145\106\157\162\x6d\x42\165\164\164\157\x6e\42\76\126\151\145\x77\x20\106\x6f\x72\x6d\40\74\x2f\x62\x75\x74\x74\157\156\x3e\xd\12\40\40\x20\40\40\x20\x20\40\x20\40\x20\x20\x20\40\x20\40\40\40\40\40\x3c\57\144\x69\166\76\xd\12\15\xa\x20\40\x20\x20\40\40\x20\x20\40\40\x20\40\40\x20\40\x20\x3c\x2f\144\x69\166\x3e\xd\xa\x20\40\x20\40\40\x20\x20\x20\x20\x20\40\40\74\57\x66\157\x72\x6d\x3e\xd\xa\xd\xa\40\x20\40\x20\40\40\x20\40\x20\40\40\x20\xd\12\xd\xa\40\40\40\40\x20\40\x20\40\40\40\x20\40\74\x73\x63\162\151\x70\164\76\15\12\40\40\x20\x20\x20\x20\40\40\40\40\x20\x20\40\x20\40\x20\x6c\x65\x74\40\151\156\x6c\x69\x6e\145\x46\157\x72\155\x53\x65\x74\164\151\x6e\147\163\x20\75\x20\47";
        echo esc_attr(json_encode($this->fields));
        echo "\x27\73\xd\xa\x20\x20\40\x20\x20\40\x20\x20\x20\x20\x20\40\40\40\x20\40\x6c\145\x74\40\x61\x64\x64\103\141\x72\x64\102\165\x74\x74\x6f\x6e\40\75\x20\x64\157\143\165\155\x65\156\164\56\x67\145\x74\105\154\x65\x6d\x65\156\164\x42\x79\x49\x64\x28\42\141\x64\x64\x52\157\x77\x22\51\x3b\15\xa\x20\x20\x20\40\40\x20\40\x20\40\40\40\40\40\x20\40\40\154\145\164\x20\143\x61\x72\144\x43\157\156\x74\x61\x69\156\145\x72\40\75\x20\x64\157\x63\165\x6d\x65\156\164\56\x67\145\x74\105\x6c\x65\x6d\145\x6e\164\x42\x79\111\144\50\42\x69\156\154\151\156\x65\x5f\x66\x6f\x72\155\137\x63\x6f\156\x66\151\147\137\x63\x61\x72\x64\x5f\x63\x6f\x6e\x74\141\151\x6e\x65\x72\x22\51\x3b\xd\12\x20\x20\x20\40\40\40\40\40\40\x20\x20\x20\x20\40\x20\40\154\145\x74\40\154\141\x73\164\x63\150\151\154\144\x20\75\x20\143\141\162\x64\103\x6f\x6e\164\x61\151\156\x65\162\56\x6c\141\x73\164\x43\x68\151\x6c\x64\x3b\15\xa\15\xa\40\40\40\x20\x20\x20\40\40\x20\40\40\40\x20\x20\x20\40\x61\x64\x64\x43\x61\162\x64\x42\165\164\164\x6f\x6e\56\x61\x64\144\105\166\145\156\164\x4c\151\163\164\x65\156\145\x72\x28\x22\x63\x6c\151\x63\153\x22\54\x20\x28\51\x3d\x3e\173\15\12\x20\x20\40\x20\40\40\40\40\x20\40\x20\x20\40\40\40\x20\x20\x20\x20\x20\x6c\145\164\x20\150\x74\155\154\40\75\x20\x27";
        $this->render_field_card();
        echo "\47\x3b\xd\xa\40\40\40\40\x20\x20\x20\40\x20\40\40\x20\x20\40\x20\x20\40\x20\40\40\x63\141\x72\x64\x43\157\156\x74\x61\151\x6e\145\162\x2e\151\156\x6e\x65\x72\x48\124\115\x4c\53\x3d\x68\x74\x6d\x6c\73\40\40\x20\x20\40\40\40\x20\x20\40\x20\40\40\40\x20\x20\x20\x20\x20\40\15\12\40\x20\x20\40\x20\40\40\x20\40\x20\40\x20\40\40\x20\40\175\x29\x3b\xd\12\xd\xa\40\x20\x20\40\x20\x20\x20\40\40\x20\40\40\40\40\x20\x20\151\146\x28\41\x69\156\154\151\x6e\145\x46\157\x72\155\x53\145\x74\x74\151\x6e\x67\x73\51\x7b\15\12\40\x20\x20\40\40\40\40\40\x20\40\40\40\x20\x20\40\x20\x20\40\x20\x20\x61\x64\x64\x43\141\162\x64\x42\165\x74\x74\x6f\x6e\x2e\x63\x6c\151\143\153\x28\51\x3b\xd\12\x20\x20\x20\40\x20\x20\x20\40\x20\40\x20\x20\40\x20\40\40\x7d\15\12\40\x20\40\40\40\40\40\40\40\x20\x20\40\40\40\x20\40\15\xa\x20\x20\x20\x20\x20\x20\x20\x20\40\x20\40\40\40\x20\40\x20\x6a\x51\165\x65\x72\171\x28\x64\157\143\x75\x6d\x65\x6e\164\x29\56\157\x6e\x28\x27\143\154\x69\x63\153\47\54\40\47\43\155\x6f\x77\145\x62\63\126\151\x65\x77\111\x6e\x6c\x69\156\145\x46\157\x72\x6d\x42\x75\x74\x74\157\156\47\x2c\x20\x66\165\156\143\164\x69\x6f\x6e\40\x28\51\x20\173\15\xa\40\x20\40\x20\x20\40\x20\x20\40\40\x20\40\40\40\x20\40\40\x20\x20\40\x69\156\x6c\x69\156\145\106\157\162\x6d\x20\75\40\x27";
        $this->viewForm();
        echo "\47\x3b\xd\12\x20\x20\x20\40\x20\40\40\40\x20\x20\40\x20\x20\x20\40\x20\40\40\40\40\152\121\x75\x65\x72\x79\50\x64\x6f\x63\165\155\145\156\164\56\142\157\144\x79\x29\x2e\x61\x70\160\145\x6e\x64\50\151\x6e\154\x69\156\x65\x46\x6f\x72\155\51\x3b\15\xa\40\x20\40\x20\x20\40\40\40\40\40\x20\40\x20\x20\40\40\x20\x20\x20\x20\152\121\x75\145\162\x79\x28\x22\x23\x6d\157\144\x61\x6c\x57\151\156\x64\157\167\x22\x29\x2e\155\x6f\x64\141\x6c\x28\51\73\xd\xa\x20\40\x20\x20\40\40\40\40\40\x20\40\x20\x20\x20\40\40\x7d\x29\73\x20\xd\xa\x20\x20\40\40\x20\x20\x20\x20\x20\x20\40\x20\x20\x20\x20\40\x6a\121\165\x65\162\x79\50\x64\157\x63\165\x6d\x65\156\164\51\56\x6f\x6e\50\47\143\x6c\151\143\x6b\x27\x2c\x20\47\56\x63\x6c\157\x73\x65\47\54\x20\146\x75\156\143\x74\151\157\x6e\x20\50\51\x20\173\15\12\x20\40\40\40\40\40\40\x20\40\40\40\40\x20\40\x20\x20\40\40\40\x20\x6a\121\x75\x65\162\171\x28\x74\150\151\163\x29\56\143\x6c\157\163\x65\x73\164\50\47\56\143\x61\162\x64\x27\x29\56\162\145\155\x6f\x76\145\50\51\73\xd\12\x20\40\x20\40\x20\40\40\x20\x20\x20\40\x20\x20\x20\x20\40\x7d\51\73\40\40\40\40\40\x20\40\40\40\x20\x20\40\x20\x20\40\40\40\x20\x20\40\x20\40\40\40\40\x20\40\x20\40\x20\xd\12\x20\40\40\40\40\40\x20\x20\x20\40\40\x20\74\x2f\163\x63\x72\151\x70\x74\76\15\xa\40\x20\x20\x20\40\40\40\40\74\x2f\144\x69\166\x3e\xd\12\x20\x20\40\40\x20\40\40\40";
    }
}