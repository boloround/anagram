<?php
    require_once "src/AnagramGenerator.php";

    class AnagramGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_makeAnagram_singleLetterWord()
        {
            //Arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $input_1 = "a";
            $input_2 = ["a"];

            //Act
            $result = $test_AnagramGenerator->makeAnagram($input_1, $input_2);

            //Assert
            $this->assertEquals(["a"], $result);
        }
    }
?>
