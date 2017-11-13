<?php

class TestClass
{
    public $myPublic = 'Public';
    protected $myProtected = 'Protected';
    private $myPrivate = 'Private';

    function printValue()
    {
        echo $this->myPublic;
        echo $this->myProtected;
        echo $this->myPrivate;
    }
}

$obj = new TestClass();
echo $obj->myPublic; // Works
echo $obj->myProtected; // Fatal error: Cannot access protected property TestClass::$protected in
echo $obj->myPrivate; // Fatal error: Cannot access private property TestClass::$private in C:\wamp\www\arun\class\class.php on line 20
$obj->printValue(); // Shows Public, Protected and Private


?>