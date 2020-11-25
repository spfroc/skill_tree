<?php

namespace App\Console\Commands;

use GuzzleHttp\Client;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class TreeGrab extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tree:grab';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    protected $client = '';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->client = new Client();


    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $response = Http::withToken('yNrmFKCmveZ4sN97xM2GUXvJfxzA2eJd')->post('https://webapi.baibaoyun.com/api/v1/app/5a1b595e9f7e93926a417f81/entry/509425b46682407e9c4c59b5/widgets');

        dd($response);
        return 0;
    }
}
