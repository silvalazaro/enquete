<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enquetes', function (Blueprint $table) {
            $table->id();
            $table->string('pergunta');
            $table->boolean('ativa');
        });

        DB::table('enquetes')->insert(
            array([
                'id' => 1,
                'pergunta' => 'Qual dessas profissões é a mais desejada?',
                'ativa' => true
            ], [
                'id' => 2,
                'pergunta' => 'Qual desses nomes é mais marcante?',
                'ativa' => true
            ],[
                'id' => 3,
                'pergunta' => 'Melhor passatempo?',
                'ativa' => true
            ],[
                'id' => 4,
                'pergunta' => 'Escolha sua fruta preferida',
                'ativa' => true
            ])
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enquetes');
    }
}
