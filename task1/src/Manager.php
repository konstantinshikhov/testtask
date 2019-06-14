<?php

require_once "traits/setTasks.php";
require_once "Employee.php";

class Manager extends Employee
{
    use setTasks;

}