<?php

require_once "traits/testCode.php";
require_once "traits/communicationWithManager.php";
require_once "traits/setTasks.php";
require_once "Employee.php";

class Tester extends Employee
{
    use testCode;
    use communicationWithManager;
    use setTasks;
}