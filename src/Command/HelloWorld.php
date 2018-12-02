<?php
namespace Console\App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloWorld extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'hello-world';

    public function __construct()
    { 
        parent::__construct();
    }

    protected function configure()
    {
        $this
        ->setDescription('Buat user baru.')
        ->setHelp('Perintah konsole ini "kononnya" akan membuat user baru...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Hello world!");
    }
}
