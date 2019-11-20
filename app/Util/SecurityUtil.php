<?php

namespace App\Util;

class SecurityUtils
{
    /**
     * Creates unique random alpha numeric text
     * @param Integer $length (Length of random text required).Default length is 17
     * @return String Unique random alpha numeric text of given length
     */
    public static function getRandomString($length = 17)
    {
        $aplhaNumericText = "";
        //mistakable characters like 1,l,I are removed.
        $unMistakableCharacterString = "23456789ABCDEFGHJKLMNPQRSTWXYZabcdefghijkmnopqrstuvwxyz";
        $max = strlen($unMistakableCharacterString);
    
        for ($i=0; $i < $length; $i++) {
            $aplhaNumericText .= $unMistakableCharacterString[random_int(0, $max-1)];
        }
    
        return $aplhaNumericText;
    }
}