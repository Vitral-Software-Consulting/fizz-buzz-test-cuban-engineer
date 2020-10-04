<?php
	namespace VitralSolutions\UnitTest;
  	use VitralSolutions\Test\FizzBuzz;
  	class FizzBuzzTest extends \PHPUnit_Framework_TestCase
	{
	    private $FizzBuzzObject;
	 
	    public function setUp()
	    {
	        parent::setUp();
	        $this->FizzBuzzObject = new FizzBuzz();
	    }
	 
	    public function tearDown()
	    {
	        parent::tearDown();
	        unset($this->FizzBuzzObject);
	    }
	 
	    /**
	    * @test
	    */
	    public function object_can_created()
	    {
	        $FizzBuzzObject = new FizzBuzz();
	        $this->assertInstanceOf('VitralSolutions\Test\FizzBuzz', $FizzBuzzObject);
	    }
	 
	    /**
	    * @test
	    */
	    public function is_divisible_by_3()
	    {
	        $result = $this->FizzBuzzObject->FizzBuzzNumber(3);
	        $this->assertEquals('Fizz', $result);
	    }
	 
	    /**
	    * @test
	    */
	    public function is_divisible_by_5()
	    {
	        $result = $this->FizzBuzzObject->FizzBuzzNumber(5);
	        $this->assertEquals('Buzz', $result);
	    }
	    
	    /**
	    * @test
	    */
	    public function is_divisible_by_3_and_5()
	    {
	        $result = $this->FizzBuzzObject->FizzBuzzNumber(15);
	        $this->assertEquals('FizzBuzz', $result);
	    }
	    
	    /**
	    * @test
	    */
	    public function is_not_divisible_by_3_nor_5()
	    {
	        $result = $this->FizzBuzzObject->FizzBuzzNumber(11);
	        $this->assertEquals('11', $result);
	    }
	}

?>
