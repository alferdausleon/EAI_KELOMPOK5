<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class EkskulServices
{
    public function fetchData()
    {
        $response = Http::withHeaders([
            'x-hasura-admin-secret' => env('JgAEPLhK6f3cvP0DsDMFQuo9t6Rh3VBZvT1NBwP4abBSXP3B0pXjMnxTWgXY0uDH'),
        ])->post('https://deep-gorilla-57.hasura.app/v1/graphql', [
            'query' => 'query MyQuery {
  Ekskul {
    Anggota
    Deskripsi
    Kategori
    Pembimbing
    Nama_Ekskul
    Kode_ekskul
  }
}
',
        ]);

        return $response->json();
    }
}
