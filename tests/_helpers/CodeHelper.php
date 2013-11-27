<?php
namespace Codeception\Module;

// here you can define custom functions for CodeGuy 

class CodeHelper extends \Codeception\Module
{
    public function _after(\Codeception\TestCase $test)
    {
        \AspectMock\Test::clean();
    }
}
