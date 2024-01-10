<?php

namespace Pratik Kuikel\Wasabi\Commands;

use Illuminate\Console\Command;

class WasabiCommand extends Command
{
    public $signature = 'wasabi';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
