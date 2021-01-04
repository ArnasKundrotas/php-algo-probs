/* 

Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.

You may assume that each input would have exactly one solution, and you may not use the same element twice.

You can return the answer in any order.

*/

class Solution {

/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[]
 */

    function twoSum($nums, $target) {
        
        $arr_length = count($nums);
        
        for($i=0; $i < $arr_length; $i++) {
            
            for($j=$i+1; $j < $arr_length; $j++) {
                
                if ($nums[$j] + $nums[$i] === $target) {
                    
                    return array($i, $j);
                }
                                
            }
            
        }
    }
}