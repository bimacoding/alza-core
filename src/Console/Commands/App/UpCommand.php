<?php

namespace Alza\Console\Commands\App;

use Alza\Console\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class UpCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('app:up')
            ->setDescription("Bring the application out of maintenance mode.");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $file = storage_path('app.down');
        if (file_exists($file)) {
            unlink($file);
            $output->writeln('<info>+Success!</info> Alza Application was started.');
            return 0;
        }

        $output->writeln("<error>+Error!</error> Alza Application's already started.");
        return 1;
    }
}
