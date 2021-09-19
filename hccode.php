<?php
/**************************
 * 
 * CC BY-SA 4.0 LICENSE
 * 
 * (C)HetetoCraft Studio
 *    2020~2021
 * 
 * > HeteroCraft CODE
 * 
 * EZ CODE, HCCODE.
 * 
 * Clone & Star it:
 * > https://github.com/HeteroCraft/HCCODE
 * 
 * 
 * 
 ***************************/

$copyright = 
'<!--
    This text was spawned by HeteroCraft Code.
    HeteroCraft Code, a EZ code.
    Try it online:
        https://program.heterocraft.com/hccode/hccode.php
    Clone & Star it:
        https://github.com/HeteroCraft/HCCODE
    
    If you like, give us a star!
-->';
if ($_GET['code']){
    $code = $_GET['code'];
}

$final = str_replace(PHP_EOL, '<br />', str_replace('[br]', '<br />', str_replace('[/i]', '</i>', str_replace('[i]', '<i>', str_replace('[/link]', '">Website Link</a>', str_replace('[link]', '<a rel="noopener" target="_blank" href="', str_replace('[/img]', '"/>', str_replace('[img]', '<img src="', str_replace('[/b]', '</b>', str_ireplace('[b]', '<b>', str_ireplace('>', '&gt;', str_ireplace('<', '&lt;', $code))))))))))));
exit ($copyright.$final);
?>
