<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

require_once __DIR__ . "/../Manager.php";
require_once __DIR__ . "/../Designer.php";
require_once __DIR__ . "/../Tester.php";
require_once __DIR__ . "/../Programmer.php";

class CompanyCommand extends Command
{
    protected function configure()
    {
        $this
            // имя команды (часть после "bin/console")
            ->setName('company:employee')
            // краткое описание, отображающееся при запуске "php bin/console list"
            ->setDescription('Show ability user developer.')
            // полное описание команды, отображающееся при запуске команды
            // с опцией "--help"
            ->setHelp('This command allows you to show a user developer ')
            ->addArgument('position', InputArgument::REQUIRED, 'The username of the user.');;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $temp = ucfirst(mb_strtolower($input->getArgument('position')));
        $employee = new $temp();
        foreach (class_uses($employee) as $item) {
            $output->writeln($employee->{$item}());
        }
    }
}