<?php

require_once "traits/communicationWithManager.php";
require_once "traits/writeCode.php";
require_once "traits/testCode.php";
require_once "Employee.php";

class Programmer extends Employee
{
    use writeCode;
    use communicationWithManager;
    use testCode;
}