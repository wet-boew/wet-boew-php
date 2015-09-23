<?php
/*!
 * Web Experience Toolkit (WET) / Boîte à outils de l'expérience Web (BOEW)
 * wet-boew.github.io/wet-boew/License-en.html / wet-boew.github.io/wet-boew/Licence-fr.html
 */
 
function is_dubious($input) {
    // remove things that:
    // - look, feel and smell like XSS
    $dubious = array('javascript', 'vbscript', 'expression', 'applet', 'meta',
                     'xml', 'blink', 'link', 'style', 'script', 'embed',
                     'object', 'iframe', 'frame', 'frameset', 'ilayer',
                     'layer', 'bgsound', 'title', 'base', 'onabort',
                     'onactivate', 'onafter', 'onbefore', 'onblur',
                     'onbounce', 'onclick', 'onchange', 'ondata', 'ondrag',
                     'ondrop', 'onload', 'onunload', 'onresize', 'onmouse',
                     'onselect', 'onkey', 'onlayout', 'oncontrol', 'onmove',
                     'ondbl', 'focus', 'onscroll', 'onrow', 'onpaste',
                     'onready', 'onreset', 'prompt',
                     '"', '\'', // remove single and double quotes
                     "\n", "\r", "\r\n", '%0d', '%0a'); // remove any CR LF

    foreach($dubious as $dub) {
        if (stristr($input, $dub)) {
            return TRUE;
        }
    }
    return FALSE;
}

if (empty($_SERVER['HTTP_REFERER'])) {
    // don't know how we got here, blacklist and early out
    header('HTTP/1.1 400 Bad Request', true, 400);
    exit();
}

// brute force check for XSS/CRLF/HTTP response splitting
if (is_dubious($_SERVER['HTTP_REFERER']) === TRUE || is_dubious($_SERVER['QUERY_STRING']) === TRUE) {
    // dubious request, blacklist and early out
    header('HTTP/1.1 400 Bad Request', true, 400);
    exit();
}
 
if ($_SERVER['HTTP_REFERER'] != "") {
    $q = $_SERVER['HTTP_REFERER'];
} else {
    $q = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['QUERY_STRING'];
}
$q = preg_replace('/#(.*)$/', '', $q);
if (preg_match('/_e\./', $q) > 0) {
    $q = preg_replace('/_e\./', '_f.', $q);
} else if (preg_match('/-en\./', $q) > 0) {
    $q = preg_replace('/-en\./', '-fr.', $q);
} else if (preg_match('/-eng\./', $q) > 0) {
    $q = preg_replace('/-eng\./', '-fra.', $q); 
} else if (preg_match('/_f\./', $q) > 0) {
    $q = preg_replace('/_f\./', '_e.', $q);
} else if (preg_match('/-fr\./', $q) > 0) {
    $q = preg_replace('/-fr\./', '-en.', $q);
} else if (preg_match('/-fra\./', $q) > 0) {
    $q = preg_replace('/-fra\./', '-eng.', $q); 
}
header("Location: " . $q . "\n\n");
exit();
?>
