/*
Write a function to find the longest common prefix string amongst an array of strings.

If there is no common prefix, return an empty string "".

 

Example 1:

Input: strs = ["flower","flow","flight"]
Output: "fl"
Example 2:

Input: strs = ["dog","racecar","car"]
Output: ""
Explanation: There is no common prefix among the input strings.
 

Constraints:

0 <= strs.length <= 200
0 <= strs[i].length <= 200
strs[i] consists of only lower-case English letters.
*/

class Solution {

/**
 * @param String[] $strs
 * @return String
 */
    function longestCommonPrefix($strs) {
        if(!$strs){
            return '';
        }
        $test = array_pop($strs); //$test -> last element from the $strs
        
        if(!$strs){
            return (string)$test;
        }
        $strCount = count($strs); // count $strs elements
        $strLen=strlen($test); // return $strs last element char count

        while ($strLen){
            $pre=substr($test,0,$strLen); 
            // $strs last element (flight) -> first character (0) -> first element len (6)
            // $pre equal to first char of the element str
            
            $count=0;
            foreach ($strs as $str){
                
                // if first char of every element str not equal break
                if($pre!=substr($str,0,$strLen)){
                    break;
                }
                
                $count++; // first itte -> 1
                
                
                if($count == $strCount){ // 
                    return $pre;
                }
            }
            $strLen--; // decrement // 6 -> 5 -> 4 -> 3 -> 2 -> 1 -> 0
            echo $strLen;
        }

        return '';
    }
}