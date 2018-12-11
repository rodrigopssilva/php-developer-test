<?php

class Palindrome
{
    /**
     * Checks if the word passed is a palindrome
     *
     * @param string $word
     *
     * @return bool
     */
    public static function isPalindrome($word)
    {
        $lowerWord = strtolower($word);
        $lowerWordNoSpace = preg_replace('/\s/', '', $lowerWord);

        if ($lowerWordNoSpace == strrev($lowerWordNoSpace)) {
            return true;
        }

        return false;
    }
}