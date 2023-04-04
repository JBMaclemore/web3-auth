<?php


namespace MoWeb3\Base;

class MoWeb3InstanceHelper
{
    private $current_version = "\106\122\105\x45";
    private $utils;
    public function __construct()
    {
        $this->utils = new \MoWeb3\MoWeb3Utils();
        $this->current_version = $this->utils->get_versi_str();
    }
    public function get_accounts_instance()
    {
        return new \MoWeb3\MoWeb3Accounts();
    }
    public function get_all_method_instances()
    {
        $SR = get_declared_classes();
        $ae = array_filter($SR, function ($hY) {
            return stripos($hY, "\x4d\x6f\x57\145\142\63\134\115\x65\164\x68\157\x64\163") !== false;
        });
        unset($ae[array_search("\x4d\157\127\x65\x62\63\134\115\x65\x74\150\x6f\x64\163", $ae, true)]);
        return $ae;
    }
    public function get_settings_instance()
    {
        if (class_exists("\x4d\x6f\x57\x65\142\63\134\x4d\x6f\127\145\x62\x33\x46\x65\x65\x64\x62\x61\x63\x6b\123\145\164\x74\x69\x6e\x67\x73")) {
            goto Ip;
        }
        wp_die("\x50\x6c\x65\x61\163\145\40\103\150\x61\x6e\147\145\x20\124\x68\145\40\x76\x65\162\163\x69\157\156\x20\142\x61\x63\x6b\40\x74\x6f\x20\x77\x68\x61\164\40\151\164\40\162\145\141\154\x6c\x79\40\x77\141\x73");
        exit;
        goto Si;
        Ip:
        return new \MoWeb3\MoWeb3FeedbackSettings();
        Si:
    }
    public function get_config_instance()
    {
        if (!class_exists("\115\157\127\x65\142\x33\134\x4d\x6f\127\x65\x62\63\115\x65\164\150\x6f\x64\x56\x69\x65\x77\x48\141\x6e\x64\x6c\145\x72")) {
            goto F3;
        }
        return new \MoWeb3\MoWeb3MethodViewHandler();
        F3:
    }
    public function get_utils_instance()
    {
        return $this->utils;
    }
}
