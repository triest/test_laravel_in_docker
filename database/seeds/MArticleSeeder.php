<?php

    use Illuminate\Database\Seeder;

    class MArticleSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //
            factory(App\MArticle::class, 15)->create()->each(function ($article) {

            });
        }
    }
