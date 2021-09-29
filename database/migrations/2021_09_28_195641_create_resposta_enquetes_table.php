<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespostaEnquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resposta_enquetes', function (Blueprint $table) {
            $table->foreignId('enquetes_id')->constrained();
            $table->foreignId('opcao_enquetes_id')->constrained();
        });
        DB::table('resposta_enquetes')->insert(array(
            ['enquetes_id' => 1, 'opcao_enquetes_id' => 1],
            ['enquetes_id' => 1, 'opcao_enquetes_id' => 1]
        ));
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resposta_enquetes');
    }
}
