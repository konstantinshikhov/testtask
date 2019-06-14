<?php

abstract class Employee
{
    public function isUsingTrait($trait)
    {
        return in_array($trait, array_keys((new \ReflectionClass($this))->getTraits())) ? "true" : "false";
    }
}