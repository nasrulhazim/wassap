<?php

namespace Wassap;

use Wassap\Supports\OperatingSystem as OS;

/**
 * Send Messages to WhatsApp
 */
class Wassap
{
    public static function send($phone_no, $text)
    {
        $os   = OS::get();
        $text = urlencode($text);
        if (in_array($os, array('Android', 'iPhone', 'Blackberry', 'Mobile'))) {
            header('Location:whatsapp://send?text=' . $text . '&phone=+' . $phone_no);
        } else {
            header('Location:https://web.whatsapp.com/send?text=' . $text . '&phone=+' . $phone_no);
        }
    }
}
