<?php

declare(strict_types=1);

namespace DesignPatterns\HexagonalArchitecture\Step04\Infrastracture\Delivery\Console;

use DesignPatterns\HexagonalArchitecture\Step04\Application\Service\Idea\CreateIdeaRequest;
use DesignPatterns\HexagonalArchitecture\Step04\Application\Service\Idea\CreateIdeaService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateIdeaCommand extends Command
{
    private $ideaService;

    public function __construct(CreateIdeaService $ideaService)
    {
        parent::__construct();

        $this->ideaService = $ideaService;
    }

    protected function configure()
    {
        $this
            ->setName('app:create-idea')
            ->addArgument('title', InputArgument::REQUIRED, "Idea's title")
            ->addArgument('author', InputArgument::REQUIRED, "Idea's author")
            ->addArgument('description', InputArgument::OPTIONAL, "Idea's description", '');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $ideaId = $this->ideaService->execute(new CreateIdeaRequest(
            $input->getArgument('title'),
            $input->getArgument('author'),
            $input->getArgument('description')
        ));

        $output->write(sprintf("Idea created with Id %s\n", $ideaId));
    }
}
