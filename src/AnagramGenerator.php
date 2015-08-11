<?php

    class AnagramGenerator
    {
        function makeAnagram($input_word, $input_list)
        {
            $input_list_array = explode(", ", $input_list);
            $output_list_array = array();

            $input_letters_array = explode("", $input_word);
            $new_input_letters_array = sort($input_letters_array);

            foreach ($input_list_array as $word) {
                $word_array = explode("", $word);
                $new_word_array = sort($word_array);

                if ($new_input_letters_array == $new_word_array) {
                    array_push($output_list_array, $word);
                }
            }
            return $output_list_array;
        }
    }
?>
