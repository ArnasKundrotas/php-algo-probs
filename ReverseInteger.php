/*
Given a 32-bit signed integer, reverse digits of an integer.

Note:
Assume we are dealing with an environment that could only store integers within the 32-bit signed integer range: [−231,  231 − 1]. For the purpose of this problem, assume that your function returns 0 when the reversed integer overflows.
*/


class Solution {

/**
 * @param Integer $x
 * @return Integer
 */
    function reverse($x) {
        
        
        $reverseStr =  $x < 0 ?  (int)strrev($x)*-1 : (int)strrev($x);
        $maxInt = 2147483648;
        
            if($reverseStr < $maxINt * -1  || $reverseStr > $maxInt - 1 ) {
                return 0;
            } else {
                return $reverseStr;
            }
                
    }
}