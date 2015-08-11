<?php

    class AnagramGenerator
    {
        function makeAnagram($input_word, $input_list)
        {
            $input_list_array = explode(", ", $input_list);
            $output_list_array = array();
            foreach ($input_list_array as $word) {
                if ($input_word == $word) {
                    array_push($output_list_array, $word);
                }
            }
            return $output_list_array;
        }
    }
?>
