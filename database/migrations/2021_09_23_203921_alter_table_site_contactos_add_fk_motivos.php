<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AlterTableSiteContactosAddFkMotivos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('site_contactos', function (Blueprint $table) {
            $table->unsignedBigInteger('motivos_id');
        });

        DB::statement('update site_contactos set motivos_id=motivo');

        Schema::table('site_contactos', function (Blueprint $table) {
            $table->foreign('motivos_id')->references('id')->on('motivos');
            $table->dropColumn('motivo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('site_contactos', function (Blueprint $table) {
            $table->integer('motivo');
            $table->dropForeign('site_contactos_motivos_id_foreign');
        });

        DB::statement('update site_contactos set motivo=motivos_id');

        Schema::table('site_contactos', function (Blueprint $table) {
            $table->dropColumn('motivos_id');
        });
    }
}
