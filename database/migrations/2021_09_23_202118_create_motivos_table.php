<?php

use App\Models\motivo;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motivos', function (Blueprint $table) {
            $table->id();
            $table->string('motivo', 30);
            $table->timestamps();
        });

        /*
        Um das formas de popular a tabela é a seguinte mas vamos usar um seeder
        motivo::create(['motivo'=>'Dúvida']);
        motivo::create(['motivo'=>'Elogio']);
        motivo::create(['motivo'=>'Reclamação']);*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motivos');
    }
}
