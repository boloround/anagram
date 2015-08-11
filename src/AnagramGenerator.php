<?php

    class AnagramGenerator
    {
        function makeAnagram($input_word, $input_list)
        {
            foreach ($input_list as $word) {
                if ($input_word == $word) {
                    return $word;
                }
            }
        }
    }
?>
