<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateMArticlesTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('articles', function (Blueprint $table) {
                $table->id();
                $table->string('title', 255);
                $table->longText('description');
                $table->bigInteger('liks')->default(0);
                $table->bigInteger('view')->default(0);
                $table->string('slug')->nullable()->index();
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('articles');
        }
    }
