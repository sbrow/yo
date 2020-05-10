<?php

namespace Yo\Commands;

use Illuminate\Console\Command;

class Yo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'yo {who?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sets up laravel packages.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $features = $this->choice('Select features to install (use commas to separate)', ['Horizon', 'InertiaJS'], null, null, true);
        $this->info("The following features will be installed: " . implode(', ', $features) . '.');
//        $who = $this->argument('who');
//        while (!$who) {
//            $who = $this->ask('Who are you?'/*, "Spencer"*/);
//        }
//        $this->info("Hello, $who");
    }
}
