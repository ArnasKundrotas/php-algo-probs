/*
Determine whether an integer is a palindrome. An integer is a palindrome when it reads the same backward as forward.

Follow up: Could you solve it without converting the integer to a string?
*/

// --- Do NOT convert to String ---

class Solution {

/**
 * @param Integer $x
 * @return Boolean
 */
    function isPalindrome($x) {
        
        if($x < -2**31 || $x > 2**31 -1) {
            return 0;
        }
        
        $result = 0;
        $input = $x;
        while ($input != 0) {
            $lastNumber = $input % 10;
            $input = $input /10;
            $input = (int)$input;
            $result = $result * 10 + $lastNumber;
        }
        
        if ($x != $result || $x < 0) {
            return false;
        } else {
            return true;
        }
    }
}


// --- Convert to string solution ---

class Solution {

/**
 * @param Integer $x
 * @return Boolean
 */
    function isPalindrome($x) {
        $revIntStr = (int)strrev($x);
        if($x == $revIntStr) {
            return true;
        } else {
            return false;
        }
    }
}