<?php
use Codeception\Util\Stub;
use AspectMock\Test as test;

class GreeterTest extends \Codeception\TestCase\Test
{
    /**
     * @var \CodeGuy
     */
    protected $codeGuy;

    /**
     * @dataProvider greetProvider
     */
    public function testGreet($hour, $greet)
    {
        test::double('\Greeter\Greeter', ['getHour' => $hour]);
        $greeter = new \Greeter\Greeter();
        $this->assertEquals($greet, $greeter->greet());
    }

    public function greetProvider()
    {
        return array(
            array(4, 'こんばんは'),
            array(5, 'おはようございます'),
            array(6, 'おはようございます'),
            array(11, 'おはようございます'),
            array(12, 'こんにちは'),
            array(13, 'こんにちは'),
            array(17, 'こんにちは'),
            array(18, 'こんばんは'),
            array(19, 'こんばんは'),
        );
    }

}