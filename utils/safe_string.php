<?php
function xmlsafe ($s, $intoQuotes=0) {
    if ($intoQuotes)
        return str_replace(array('&','>','<','"'), array('&amp;','&gt;','&lt;','&quot;'), $s);
        // SAME AS htmlspecialchars($s)
    else
        return str_replace(array('&','>','<'), array('&amp;','&gt;','&lt;'), $s);
        // SAME AS htmlspecialchars($s,ENT_NOQUOTES)
}