<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class FetchHasuraData extends Command
{
    protected $signature = 'fetch:hasura-data';
    protected $description = 'Fetch data from Hasura';

    public function handle()
    {
        $response = Http::withHeaders([
            'x-hasura-admin-secret' => env('JgAEPLhK6f3cvP0DsDMFQuo9t6Rh3VBZvT1NBwP4abBSXP3B0pXjMnxTWgXY0uDH'),
        ])->get('https://deep-gorilla-57.hasura.app/v1/graphql', [
            'query' => 'your graphql query here',
        ]);

        $data = $response->json();
        
        // Output the data or process it as needed
        $this->info(print_r($data, true));
    }
}
