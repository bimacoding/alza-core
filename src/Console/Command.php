<?php

namespace Alza\Console;

use Alza\Kernel\Application;
use Symfony\Component\Console\Command\Command as SymfonyCommand;

class Command extends SymfonyCommand
{
    /**
     * @var Application Application
     */
    protected $alza;

    public function __construct(Application $app)
    {
        $this->alza = $app;

        parent::__construct();
    }

}
