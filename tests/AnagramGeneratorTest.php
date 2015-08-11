<?php
    require_once "src/AnagramGenerator.php";

    class AnagramGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_makeAnagram_singleLetterWord()
        {
            //Arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $input_1 = "a";
            $input_2 = "a";

            //Act
            $result = $test_AnagramGenerator->makeAnagram($input_1, $input_2);

            //Assert
            $this->assertEquals(array("a"), $result);
        }

        function test_makeAnagram_twoSingleLetterWords()
        {
            //Arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $input_1 = "a";
            $input_2 = "a, a";

            //Act
            $result = $test_AnagramGenerator->makeAnagram($input_1, $input_2);

            //Assert
            $this->assertEquals(array("a", "a"), $result);
        }

        function test_makeAnagram_multiLetterWord()
        {
            //Arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $input_1 = "rat";
            $input_2 = "art, tar";

            //Act
            $result = $test_AnagramGenerator->makeAnagram($input_1, $input_2);

            //Assert
            $this->assertEquals(array("art", "tar"), $result);
        }

        function test_makeAnagram_noMatch()
        {
            //Arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $input_1 = "rat";
            $input_2 = "sit";

            //Act
            $result = $test_AnagramGenerator->makeAnagram($input_1, $input_2);

            //Assert
            $this->assertEquals("no match", $result);
        }

        function test_makeAnagram_fourLetterWords()
        {
            //Arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $input_1 = "rat";
            $input_2 = "art, ford";

            //Act
            $result = $test_AnagramGenerator->makeAnagram($input_1, $input_2);

            //Assert
            $this->assertEquals("art", $result);
        }

    }
?>
