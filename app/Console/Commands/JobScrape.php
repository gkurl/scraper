<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Weidner\Goutte\GoutteFacade;
use Weidner\Goutte;
use Weidner\Goutte\GoutteServiceProvider;


class JobScrape extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

    //Basic info variables

    protected $signature = 'scrape:job';
    protected $description = 'Job Site Scraper';

    /*Need to find following data from Indeed:
    Job Title, Company Name, Location, Salary, and Job Summary.*/

     protected $jobinfo = [

        'title',
        'company',
        'location',
        'salary',
        'summary'

    ];

    /**
     * The console command description.
     *
     * @var string
     */

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
        //
        foreach ($this->jobinfo as $job){
            $this->scrape($job);
        }
    }

    public static function scrape($collection){



    }
}
