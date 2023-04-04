<?php


if (defined("\101\102\123\x50\x41\124\110")) {
    goto h9;
}
exit;
h9:
define("\115\x4f\127\105\x42\x33\137\x44\111\122", plugin_dir_path(__FILE__));
define("\115\x4f\127\x45\102\63\x5f\x55\x52\x4c", plugin_dir_url(__FILE__));
define("\115\x4f\127\105\102\x33\137\126\x45\x52\123\x49\x4f\116", "\155\x6f\137\167\x65\142\63\x5f\154\x6f\147\x69\x6e\x5f\x66\162\x65\145");
mo_web3_include_file(MOWEB3_DIR . DIRECTORY_SEPARATOR . "\143\154\x61\x73\163\x65\x73" . DIRECTORY_SEPARATOR . "\x63\x6f\x6d\x6d\157\x6e");
mo_web3_include_file(MOWEB3_DIR . DIRECTORY_SEPARATOR . "\143\x6c\x61\163\163\x65\x73" . DIRECTORY_SEPARATOR . "\120\162\x65\155\x69\x75\155");
mo_web3_include_file(MOWEB3_DIR . DIRECTORY_SEPARATOR . "\x63\154\x61\163\163\145\x73" . DIRECTORY_SEPARATOR . "\x46\x72\x65\145");
function mo_web3_get_dir_contents($Zv, &$vX = array())
{
    foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($Zv, RecursiveDirectoryIterator::KEY_AS_PATHNAME), RecursiveIteratorIterator::CHILD_FIRST) as $s_ => $gj) {
        if (!($gj->isFile() && $gj->isReadable())) {
            goto zP;
        }
        $vX[$s_] = realpath($gj->getPathname());
        zP:
        vg:
    }
    OI:
    return $vX;
}
function mo_web3_get_sorted_files($Zv)
{
    $wQ = mo_web3_get_dir_contents($Zv);
    $so = array();
    $ev = array();
    foreach ($wQ as $s_ => $aT) {
        if (!(strpos($aT, "\56\160\150\160") !== false)) {
            goto od;
        }
        if (strpos($aT, "\x49\x6e\x74\x65\162\146\x61\143\145") !== false) {
            goto I8;
        }
        $ev[$s_] = $aT;
        goto cI;
        I8:
        $so[$s_] = $aT;
        cI:
        od:
        Mz:
    }
    Rb:
    return array("\x69\156\164\x65\x72\146\x61\x63\145\163" => $so, "\143\x6c\141\x73\x73\x65\x73" => $ev);
}
function mo_web3_include_file($Zv)
{
    if (is_dir($Zv)) {
        goto z5;
    }
    return;
    z5:
    $Zv = mo_web3_sane_dir_path($Zv);
    $O0 = realpath($Zv);
    if (!(false !== $O0 && !is_dir($Zv))) {
        goto Er;
    }
    return;
    Er:
    $op = mo_web3_get_sorted_files($Zv);
    mo_web3_require_all($op["\151\156\x74\x65\x72\x66\141\143\145\x73"]);
    mo_web3_require_all($op["\143\154\x61\x73\163\145\x73"]);
}
function mo_web3_require_all($wQ)
{
    foreach ($wQ as $s_ => $aT) {
        require_once $aT;
        PK:
    }
    UY:
}
function mo_web3_is_valid_file($Wu)
{
    return '' !== $Wu && "\56" !== $Wu && "\56\56" !== $Wu;
}
function mo_web3_get_valid_html($f4 = array())
{
    $qx = array("\163\164\x72\x6f\x6e\x67" => array(), "\145\155" => array(), "\x62" => array(), "\151" => array(), "\141" => array("\150\162\x65\x66" => array(), "\164\141\x72\147\x65\x74" => array()));
    if (empty($f4)) {
        goto WV;
    }
    return array_merge($f4, $qx);
    WV:
    return $qx;
}
function mo_web3_get_version_number()
{
    $p3 = get_file_data(MOWEB3_DIR . DIRECTORY_SEPARATOR . "\155\151\156\151\x6f\162\141\156\147\145\x2d\x77\145\142\63\x2d\x6c\157\147\x69\156\x2d\163\x65\x74\x74\151\156\147\x73\56\x70\x68\x70", ["\126\x65\162\x73\x69\x6f\156"], "\160\154\165\x67\x69\x6e");
    $KP = isset($p3[0]) ? $p3[0] : '';
    return $KP;
}
function mo_web3_sane_dir_path($Zv)
{
    return str_replace("\x2f", DIRECTORY_SEPARATOR, $Zv);
}
function mo_web3_load_all_methods($fe)
{
    foreach ($fe as $Ru) {
        new $Ru();
        mt:
    }
    id:
}
