<?php
namespace CedricBlondeau\SimpleCustomXmlReader\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ReadXmlCommand extends Command
{
    /**
     * @var \CedricBlondeau\SimpleCustomXmlReader\Model\Reader
     */
    private $reader;

    /**
     * ReadXmlCommand constructor.
     * @param \CedricBlondeau\SimpleCustomXmlReader\Model\Reader $reader
     */
    public function __construct(\CedricBlondeau\SimpleCustomXmlReader\Model\Reader $reader)
    {
        $this->reader = $reader;
        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName("simplecustomxml:read");
        $this->setDescription('Read custom XML demo');
        parent::configure();
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $result = $this->reader->read();
        foreach ($result as $hello) {
            $output->writeln("<info>Hello {$hello}!</info>");
        }
        $output->writeln('<info>Done.</info>');
    }
}

