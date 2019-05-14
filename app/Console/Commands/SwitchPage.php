<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SwitchPage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'switch:page';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Swtich between the pages';

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
        
        $currenturl = url()->current();

        if($currenturl == "http://menustander.test:8080/dailydish")
        {
            return redirect()->action('WeekmenuController@index');
        }else
        {
            return redirect()->action('DailyController@index');
        }

    }
}
