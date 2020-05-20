<?php

/**
 * Generate a phone
 *
 * @param $email
 * @return string
 */
function phone($s)
{
    $s = preg_replace("/\+/", "00", $s);
    $s = preg_replace("/[^0-9,.]/", "", $s);
    return $s;
}
