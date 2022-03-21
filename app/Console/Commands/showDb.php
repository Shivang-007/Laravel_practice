<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class showDb extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'showDb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'show current database';

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
     * @return int
     */
    public function handle()
    {    
        // echo "hello";
        // $this->info('show output');
        // $this->warn('show output');
        // $this->error('show output');
        
           //$this->info('Your current database is: '.DB::connection()->getDatabaseName());
           $this->info('Your current database is: '.DB::connection('mysql2')->getDatabaseName());
 
    }
}
