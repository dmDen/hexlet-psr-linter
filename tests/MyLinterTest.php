<?php

namespace HexletPsrLinter;

class MyLinterTest extends \PHPUnit_Framework_TestCase
{
    public function testValidate()
    {
        $data = '<?php echo "hello world";';
        $linter = new MyLinter($data);

        $this->assertEquals('Is valid', $linter->validate());
    }
}
