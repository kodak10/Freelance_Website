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
        User::factory(50)->create();
        CategoryFaq::factory(50)->create();
        CategoryNew::factory(50)->create();
        CategoryForum::factory(50)->create();
        TypeClient::factory(50)->create();
        Client::factory(50)->create();
        Departement::factory(50)->create();
        Diplome::factory(50)->create();
        Secteur::factory(50)->create();
        Faq::factory(50)->create();
        Forum::factory(50)->create();
        News::factory(50)->create();
        NewComment::factory(50)->create();
        Service::factory(50)->create();
        Pays::factory(50)->create();
        Notation::factory(50)->create();
        Recompense::factory(50)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
