<?php

    class AnagramGenerator
    {
        function makeAnagram($input_word, $input_list)
        {
            $output_list_array = array();
            foreach ($input_list as $word) {
                if ($input_word == $word) {
                    return array_push($output_list_array, $word);
                }
            }
        }
    }
?>
