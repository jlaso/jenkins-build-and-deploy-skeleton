<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class CleanCacheCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('clean:cache')
            ->setDescription('Clear cache folder for the env passed')
            ->addOption(
                'env',
                null,
                InputOption::VALUE_REQUIRED,
                'Environment'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $env = $input->getOption('env') ?: 'dev';

        $output->writeln("cleaning cache for env {$env} ...");
    }
}
