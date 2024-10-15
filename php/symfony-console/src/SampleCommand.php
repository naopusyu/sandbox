<?php

declare(strict_types=1);

namespace Sample;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'sample',
    description: 'サンプルコマンド'
)]
class SampleCommand extends Command
{
    protected function configure()
    {
        $this->addArgument('text', InputArgument::REQUIRED)
            ->addArgument('sub-text', InputArgument::OPTIONAL, '', 'empty');

    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Sample Command!');

        $output->writeln($input->getArgument('text'));

        $output->writeln($input->getArgument('sub-text'));

        return Command::SUCCESS;
    }
}
