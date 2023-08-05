<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CategoryFaq;
use App\Models\CategoryForum;
use App\Models\CategoryNew;
use App\Models\Client;
use App\Models\Departement;
use App\Models\Diplome;
use App\Models\Faq;
use App\Models\Forum;
use App\Models\NewComment;
use App\Models\News;
use App\Models\Notation;
use App\Models\Pays;
use App\Models\Recompense;
use App\Models\Secteur;
use App\Models\Service;
use App\Models\TypeClient;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        User::factory(10)->create();
        CategoryFaq::factory(10)->create();
        CategoryNew::factory(10)->create();
        CategoryForum::factory(10)->create();
        //TypeClient::factory()->create(['libelle' => 'PARTICULIER']);
        //TypeClient::factory()->create(['libelle' => 'ENTREPRISE']);
        //Client::factory(10)->create();
        // TypeClient::factory(10)->create();
        // Client::factory(10)->create();
        //Departement::factory(10)->create();
        Diplome::factory(10)->create();
        Secteur::factory(15)->create();
        Faq::factory(10)->create();
        Forum::factory(10)->create();
        //News::factory(10)->create();
        //NewComment::factory(10)->create();
        Service::factory(30)->create();
        Pays::factory(10)->create();
        //Notation::factory(10)->create();
        //Recompense::factory(10)->create();

    }
}
