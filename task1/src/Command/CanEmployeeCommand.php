<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

require_once __DIR__ . "/../Manager.php";
require_once __DIR__ . "/../Designer.php";
require_once __DIR__ . "/../Tester.php";
require_once __DIR__ . "/../Programmer.php";

class CanEmployeeCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('employee:can')
            ->setDescription('Show ability user tester.')
            ->setHelp('This command allows you to show a user tester ')
            ->addArgument('position', InputArgument::REQUIRED, 'The position of the employee.')
            ->addArgument('ability', InputArgument::REQUIRED, 'The ability for check of the user.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $temp = ucfirst(mb_strtolower($input->getArgument('position')));
        $employee = new $temp();
        $output->writeln($employee->isUsingTrait($input->getArgument('ability')));
    }
}