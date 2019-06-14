<?php

require_once "traits/draw.php";
require_once "traits/communicationWithManager.php";
require_once "Employee.php";

class Designer extends Employee
{
    use draw;
    use communicationWithManager;
}