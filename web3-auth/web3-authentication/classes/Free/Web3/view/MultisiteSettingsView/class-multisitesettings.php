<?php


namespace MoWeb3\view\MultisiteSettingsView;

class MoWeb3MultisiteSettings
{
    public function __construct()
    {
        wp_enqueue_style("\x6d\x6f\137\167\145\142\x33\137\143\x75\163\x74\x6f\155\x5f\163\164\x79\x6c\x65", MOWEB3_URL . \MoWeb3Constants::MoWeb3_RESOURCES . "\143\x73\x73\57\163\164\x79\154\145\x73\56\x63\x73\163", array(), $rm = "\x31\x30\x2e\x31\x2e\61", $Po = false);
        wp_enqueue_style("\x6d\157\137\x77\145\142\x33\x5f\x73\164\x79\154\x65", MOWEB3_URL . \MoWeb3Constants::MoWeb3_RESOURCES . "\x63\x73\x73\57\142\x6f\157\164\x73\x74\162\141\160\57\142\157\x6f\164\x73\164\x72\x61\x70\x2e\155\x69\x6e\x2e\143\x73\x73", array(), $rm = "\61\x30\x2e\61\x2e\x31", $Po = false);
    }
    public function view()
    {
        global $V8;
        if (is_multisite()) {
            goto CD;
        }
        return;
        CD:
        $mb = $V8->mo_web3_get_option("\x6d\x6f\137\x77\145\x62\x33\x5f\156\157\x5f\x6f\x66\137\x73\x75\142\x73\151\x74\x65\163");
        $aS = array();
        $He = get_sites(["\156\165\x6d\142\x65\x72" => 1000]);
        echo "\x20\40\x20\40\x20\40\x20\15\xa\11\x9\x3c\x64\x69\x76\x20\x63\x6c\141\163\x73\75\x22\x6d\x6f\137\164\x61\x62\x6c\x65\x5f\154\141\171\x6f\x75\164\42\76\15\12\11\x9\11\74\144\x69\x76\x20\143\x6c\x61\x73\x73\x3d\42\155\157\137\167\160\156\163\x5f\x73\x6d\x61\154\x6c\x5f\x6c\141\x79\157\x75\164\x22\76\15\xa\11\x9\x9\x9\74\144\151\x76\40\x73\164\x79\154\x65\75\x22\142\x61\x63\x6b\147\x72\x6f\x75\156\x64\55\x63\x6f\154\157\x72\x3a\x20\43\145\x30\145\x36\x65\145\x3b\40\x62\157\x72\144\x65\x72\x2d\x6c\145\x66\164\x3a\x20\x34\160\170\40\163\157\x6c\x69\144\40\x23\61\x31\70\66\x65\67\x3b\40\167\x69\144\164\150\x3a\x20\71\x35\45\73\x20\x70\x61\x64\144\x69\156\147\72\40\65\x70\170\x3b\x22\76\74\163\164\162\157\x6e\147\x3e\116\157\x74\x65\72\74\57\x73\164\x72\x6f\x6e\147\x3e\x20\127\x65\x62\x33\40\x41\165\164\x68\145\x6e\164\151\x63\141\x74\151\157\156\x20\x63\x61\156\x20\x62\145\40\141\x63\x74\x69\x76\141\x74\145\144\40\157\156\x6c\171\40\x66\157\x72\40\x6e\165\155\142\145\x72\x20\x6f\146\x20\163\x75\142\163\151\x74\145\163\40\167\x69\164\x68\40\x74\150\x65\40\163\x65\154\145\143\164\145\x64\x20\160\x6c\141\x6e\56\x20\116\x75\x6d\x62\x65\x72\40\157\x66\40\163\165\x62\x73\x69\x74\x65\x73\40\146\157\x72\x20\x74\x68\x69\x73\x20\163\x69\164\145\40\151\x73\40\74\x73\164\162\157\156\x67\76";
        echo count($He);
        echo "\x3c\x2f\163\164\x72\x6f\x6e\x67\x3e\x2e\40\116\165\155\142\145\162\40\x6f\x66\40\x73\x75\142\163\151\164\145\x73\x20\x61\154\x6c\157\167\145\x64\x20\167\x69\164\x68\x20\x74\150\151\163\x20\155\x75\x6c\x74\151\x73\151\x74\x65\x20\160\x6c\x61\x6e\40\151\163\74\163\164\162\x6f\156\x67\x3e\x20";
        echo esc_attr($mb);
        echo "\x3c\57\163\x74\162\157\156\147\76\40\x3c\x2f\144\151\166\76\74\142\x72\x3e\x3c\x62\162\76\15\xa\x9\x9\11\x9\74\146\x6f\162\x6d\40\x61\x63\164\151\x6f\156\75\42\x22\x20\x6d\x65\164\x68\157\x64\x3d\42\x70\157\x73\x74\42\76\15\12\11\11\11\x9\x9\x3c\x69\x6e\160\x75\164\x20\x74\171\160\x65\x3d\x22\x68\151\x64\x64\145\156\x22\x20\x6e\x61\155\x65\75\x22\x6f\160\x74\x69\157\156\x22\40\x76\x61\x6c\165\145\x3d\x22\x6d\157\137\x77\x65\x62\x33\x5f\x73\x61\x76\x65\137\x73\x75\142\x73\151\x74\x65\163\x5f\157\160\164\x69\157\156\x22\x20\x2f\76\15\12\11\11\x9\x9\x9";
        wp_nonce_field("\155\157\x5f\167\145\x62\63\x5f\163\x61\x76\x65\x5f\164\x68\145\137\163\165\142\x73\151\164\145\163\x5f\x6f\x70\164\151\x6f\156", "\155\x6f\x5f\167\x65\142\x33\x5f\x73\141\166\145\137\164\150\x65\137\x73\x75\142\163\151\x74\145\x73\x5f\x6f\x70\x74\151\x6f\x6e\137\x6e\x6f\x6e\x63\145");
        echo "\11\x9\11\11\11\xd\12\x9\11\x9\11\x9\x3c\x64\x69\166\x20\x69\144\x3d\42\x48\151\144\x64\145\156\111\x6e\x70\x75\x74\106\x69\x65\x6c\144\x44\x69\166\42\x3e\15\12\x9\x9\x9\x9\x9\74\57\x64\x69\166\76\15\xa\11\11\11\x9\11\74\x73\x63\162\151\160\164\76\15\12\11\11\x9\x9\x9\x9\x66\x75\x6e\x63\164\x69\x6f\x6e\40\101\144\144\110\151\x64\x64\x65\x6e\x49\156\160\165\x74\x53\x75\142\x73\x69\164\145\50\40\166\x61\154\x75\145\54\x63\x68\x65\x63\153\145\x64\x3d\x22\x63\x68\145\143\x6b\145\x64\42\x20\x29\173\15\xa\x9\11\x9\x9\x9\11\11\15\12\11\x9\11\11\11\x9\11\166\x61\x72\x20\x48\151\x64\x64\x65\156\x49\156\x70\x75\x74\x44\x69\x76\40\75\40\144\x6f\143\x75\155\x65\156\x74\56\x67\145\x74\105\x6c\x65\x6d\145\156\x74\x42\x79\111\144\50\x27\110\151\x64\x64\x65\x6e\111\x6e\160\x75\x74\x46\x69\x65\154\144\104\151\166\x27\51\73\15\12\x9\x9\11\11\11\11\x9\x69\146\50\x63\x68\x65\x63\153\x65\144\75\x3d\42\165\156\x63\150\x65\x63\153\x65\144\42\40\x26\46\x20\144\157\x63\165\x6d\145\x6e\164\x2e\147\145\164\x45\x6c\145\155\x65\x6e\x74\102\171\x49\x64\50\166\x61\154\165\145\x29\51\xd\12\11\x9\11\11\11\x9\x9\173\xd\xa\11\x9\11\11\x9\x9\11\x9\144\x6f\x63\x75\x6d\145\156\x74\56\x67\145\164\x45\x6c\x65\155\145\156\x74\102\171\111\144\50\x76\141\x6c\165\145\51\56\x72\145\155\157\x76\145\x28\51\x3b\15\xa\11\x9\x9\x9\x9\11\x9\x7d\xd\xa\11\x9\x9\x9\11\11\11\x69\x66\x28\143\x68\145\x63\153\x65\144\75\x3d\42\143\x68\145\x63\153\145\144\42\x20\x26\x26\x20\41\x64\157\143\x75\155\145\x6e\164\x2e\147\145\164\105\x6c\145\x6d\145\156\164\x42\x79\111\x64\50\x76\141\x6c\x75\x65\x29\51\15\12\x9\x9\x9\11\x9\x9\x9\x7b\15\12\x9\11\11\11\x9\x9\x9\11\x76\x61\x72\x20\x49\x6e\x70\165\164\106\x69\x65\x6c\x64\40\75\40\x22\x3c\x69\x6e\x70\165\164\40\x74\171\160\x65\75\x27\150\x69\x64\144\145\156\47\x20\151\144\x3d\47\42\53\x76\x61\154\165\145\53\x22\x27\40\156\141\x6d\145\x3d\47\163\x75\x62\163\151\164\x65\133\x5d\47\40\166\141\154\x75\145\x3d\x27\x22\53\x76\x61\x6c\x75\145\x2b\x22\x27\x3e\42\x3b\xd\12\11\x9\x9\x9\11\x9\11\x9\x48\151\x64\144\145\156\x49\x6e\160\x75\164\104\151\x76\56\151\x6e\x6e\145\162\x48\124\115\x4c\x20\x3d\x20\110\151\144\x64\145\x6e\111\x6e\x70\165\164\104\151\x76\x2e\x69\156\x6e\x65\162\x48\x54\115\x4c\x2b\40\111\156\x70\165\x74\106\151\x65\x6c\x64\73\15\12\xd\12\11\x9\11\x9\x9\11\x9\x7d\xd\xa\11\11\x9\x9\11\11\175\xd\12\x9\11\x9\x9\11\x3c\x2f\163\143\x72\x69\160\x74\76\xd\xa\11\x9\x9\x9\11\xd\xa\11\x9\x9\x9\11\x3c\x74\141\142\154\145\40\x69\x64\x3d\42\x6d\x6f\137\167\145\142\63\137\x74\141\x62\154\x65\111\104\x22\40\x63\154\141\163\163\75\x22\155\157\137\x77\145\142\63\x5f\x73\x75\x62\x73\x69\x74\x65\163\x5f\x73\x65\164\x74\x69\156\147\163\x5f\x74\141\x62\154\145\42\40\163\164\x79\154\145\75\x22\167\151\x64\164\150\72\61\x30\60\45\x22\76\xd\12\11\11\11\11\11\11\x3c\x74\x68\145\x61\x64\40\76\15\xa\x9\x9\x9\11\11\x9\x9\x3c\x74\x72\76\x3c\164\x68\x3e\123\151\164\145\40\x4e\x61\155\145\x3c\x2f\164\150\76\74\x74\x68\x3e\x53\x69\x74\x65\x20\125\122\x4c\74\57\x74\150\x3e\74\x74\150\76\105\x6e\141\142\x6c\145\40\x57\x65\142\x33\40\x41\165\164\150\x65\x6e\164\x69\143\x61\164\151\157\x6e\74\57\164\150\76\x3c\x2f\164\162\76\15\xa\11\x9\x9\11\11\x9\74\x2f\164\150\x65\141\x64\x3e\xd\xa\15\12\11\x9\11\x9\x9\11";
        foreach ($He as $Ky => $hn) {
            $tr = get_blog_details(array("\x62\154\x6f\x67\x5f\151\144" => $hn->blog_id))->blogname;
            echo "\x9\11\x9\11\11\x9\xd\xa\11\11\11\11\x9\11\x9\x3c\164\x72\76\74\x74\144\76";
            echo esc_attr($tr);
            echo "\74\57\164\x64\76\x3c\164\x64\x3e";
            echo esc_attr($hn->domain);
            echo esc_attr($hn->path);
            echo "\74\x2f\164\144\x3e\15\12\x9\x9\11\x9\11\11\11\x3c\164\x64\x3e\74\151\156\160\165\x74\40\x74\171\160\145\x3d\42\x63\x68\x65\x63\x6b\x62\x6f\170\42\x20\40";
            echo esc_attr(is_array($aS) && in_array($hn->blog_id, $aS) ? "\x63\x68\145\143\x6b\x65\144" : '');
            echo "\x20\40\x76\141\x6c\x75\145\75\42";
            echo esc_attr($hn->domain);
            echo esc_attr($hn->path);
            echo "\x22\x3c\57\164\144\x3e\74\x2f\x74\x72\x3e\xd\xa\11\x9\11\11\11\x9";
            if (is_array($aS) && in_array($hn->blog_id, $aS)) {
                goto t4;
            }
            echo "\74\163\x63\x72\x69\160\x74\76\x20\101\x64\144\x48\151\x64\144\x65\156\x49\x6e\x70\x75\x74\123\165\x62\163\x69\164\x65\50\x27" . esc_attr($hn->domain) . esc_attr($hn->path) . "\47\x2c\47\x75\156\143\150\145\x63\153\x65\x64\47\51\x20\x3c\57\x73\143\162\x69\x70\164\x3e";
            goto F0;
            t4:
            echo "\x3c\x73\x63\x72\151\160\164\76\x20\x41\x64\144\110\x69\x64\x64\145\156\x49\x6e\x70\165\164\x53\165\x62\x73\151\x74\145\x28\x27" . esc_attr($hn->domain) . esc_attr($hn->path) . "\47\51\40\74\57\163\143\162\x69\160\x74\76";
            F0:
            In:
        }
        P9:
        echo "\x9\11\x9\11\11\x3c\x2f\164\141\x62\154\x65\76\15\12\11\x9\x9\x9\11\xd\xa\x9\x9\x9\x9\15\12\11\x9\11\x9\x9\74\x62\162\76\x3c\142\162\76\74\151\x6e\x70\165\164\40\143\x6c\x61\x73\163\x3d\x22\x62\x75\164\x74\157\x6e\x20\142\x75\x74\164\157\x6e\55\160\162\x69\155\x61\162\x79\40\142\x75\x74\x74\x6f\156\55\x6c\141\162\147\145\42\x20\164\x79\x70\145\75\x22\163\x75\x62\x6d\x69\164\x22\x20\156\141\155\x65\x3d\42\163\x75\142\155\151\164\x22\x20\x76\141\154\x75\x65\75\x22\123\x61\x76\145\42\x3e\15\12\11\11\x9\x9\11\74\x73\143\162\x69\x70\164\x3e\xd\xa\11\x9\11\11\x9\11\xd\xa\11\x9\x9\11\11\11\152\121\165\x65\162\171\50\x27\151\156\160\x75\164\x5b\164\x79\160\x65\75\x22\x63\x68\145\x63\x6b\142\x6f\170\x22\x5d\x27\51\56\143\x6c\151\143\x6b\50\146\x75\x6e\143\x74\151\x6f\x6e\50\x29\173\xd\12\x9\x9\x9\11\11\x9\x9\x9\x69\x66\50\152\121\165\145\162\x79\x28\x74\150\151\163\51\56\x70\162\157\x70\50\x22\143\x68\145\x63\153\x65\144\x22\51\x20\75\x3d\x20\164\162\x75\x65\x29\173\xd\xa\11\11\x9\x9\11\x9\11\x9\x9\x41\x64\x64\110\151\144\x64\145\156\111\x6e\x70\x75\164\x53\165\x62\x73\151\164\x65\50\x74\x68\151\163\x2e\166\141\154\165\x65\x2c\x22\x63\150\x65\143\153\145\144\x22\51\x3b\15\12\11\x9\x9\x9\x9\11\11\11\x7d\xd\xa\x9\11\x9\11\11\11\11\x9\x65\154\x73\x65\173\xd\xa\x9\x9\x9\x9\11\11\11\11\11\x41\x64\x64\110\151\x64\x64\x65\156\x49\x6e\160\x75\x74\123\165\142\163\151\x74\145\50\x74\150\151\163\x2e\x76\141\x6c\x75\x65\x2c\x22\x75\x6e\x63\x68\x65\x63\153\x65\144\42\51\x3b\xd\12\40\x20\40\40\40\x20\40\x20\x20\x20\x20\x20\11\x9\x9\11\11\x7d\15\12\11\11\11\11\11\x9\11\175\51\73\15\12\x20\40\40\40\40\40\40\40\40\40\x20\40\x20\x20\x20\40\40\40\40\40\x20\40\x20\x20\11\xd\12\15\12\x20\x20\x20\x20\11\x9\11\11\74\57\x73\143\x72\x69\160\164\76\15\xa\x9\11\11\x9\74\57\x66\x6f\162\x6d\x3e\xd\12\x9\11\x9\74\x2f\144\x69\x76\76\xd\12\x9\11\x3c\x2f\x64\151\x76\76\15\xa\15\xa\x20\40\x20\40\x20\40\40\40";
    }
}