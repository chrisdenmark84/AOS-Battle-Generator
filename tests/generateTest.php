<?php
use PHPUnit\Framework\TestCase;

class GenerateTest extends TestCase
{
    public function testArray(){
    	
    	require './src/generate.php';
        
        $gen = new generate;
        $result = $gen->generateBattle(1);

        // Check that this function is returning an array
        $this->assertEquals(is_array($result), 1, 'generate::generateBattle is not returning an array!');

        // Check all the keys are being populated in the array
        $this->assertEquals(array_keys($result[1])[0], 'battle_plan_name', 'generate::generateBattle is not returning battle_plan_name!');
        $this->assertEquals(array_keys($result[1])[1], 'battle_plan_book', 'generate::generateBattle is not returning battle_plan_book!');
        $this->assertEquals(array_keys($result[1])[2], 'realm_name', 	   'generate::generateBattle is not returning realm_name!');
        $this->assertEquals(array_keys($result[1])[3], 'count', 	       'generate::generateBattle is not returning count!');


        // Check its not allowing us to generate more than 10
		$this->assertEquals($gen->generateBattle(11), '<div class="result"><h3>Error</h3><p>No, only 10 battles or less silly!</p>');

    }

}
?>