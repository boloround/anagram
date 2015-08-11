<?php

    class AnagramGenerator
    {
        function makeAnagram($input_word, $input_list)
        {

            $input_list_array = explode(", ", $input_list);
            $output_list_array = array();

            $input_letters_array = str_split($input_word);
            sort($input_letters_array);

            foreach ($input_list_array as $word) {
                $word_array = str_split($word);
                sort($word_array);

                $difference = array_diff($word_array, $input_letters_array);
                if ($difference == array()) {
                    array_push($output_list_array, $word);
                }
            }
            
            if (empty($output_list_array)) {
                return array(["No Match!"]);
            } else {
             return $output_list_array;
            }
        }
    }
?>
