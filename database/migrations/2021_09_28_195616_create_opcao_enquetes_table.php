<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpcaoEnquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opcao_enquetes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('alternativa');
            $table->timestamps();
            $table->foreignId('enquetes_id')->constrained();
        });

        DB::table('opcao_enquetes')->insert(
            array([
                'id' => 1,
                'alternativa' => 'Motorista',
                'enquetes_id' => 1
            ],[
                'id' => 2,
                'alternativa' => 'Cobrador',
                'enquetes_id' => 1
            ],[
                'id' => 3,
                'alternativa' => 'Vendedor',
                'enquetes_id' => 1
            ],[
                'id' => 4,
                'alternativa' => 'Estoquista',
                'enquetes_id' => 1
            ],[
                'id' => 5,
                'alternativa' => 'Maria',
                'enquetes_id' => 2
            ],[
                'id' => 6,
                'alternativa' => 'José',
                'enquetes_id' => 2
            ],[
                'id' => 7,
                'alternativa' => 'Daniel',
                'enquetes_id' => 2
            ],[
                'id' => 8,
                'alternativa' => 'Daniel',
                'enquetes_id' => 2
            ],[
                'id' => 9,
                'alternativa' => 'Abacaxi',
                'enquetes_id' => 4
            ],[
                'id' => 10,
                'alternativa' => 'Acerola',
                'enquetes_id' => 4
            ],[
                'id' => 11,
                'alternativa' => 'Goiaba',
                'enquetes_id' => 4
            ],[
                'id' => 12,
                'alternativa' => 'Ameixa',
                'enquetes_id' => 4
            ],[
                'id' => 13,
                'alternativa' => 'Uva',
                'enquetes_id' => 4
            ],[
                'id' => 14,
                'alternativa' => 'Cinema',
                'enquetes_id' => 3
            ],[
                'id' => 15,
                'alternativa' => 'Viagem',
                'enquetes_id' => 3
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
        Schema::dropIfExists('opcao_enquetes');
    }
}
