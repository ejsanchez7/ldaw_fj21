<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrivilegesRolesTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('privileges_roles', function (Blueprint $table) {

            $table->id();

            $table->foreignId("privilege_id")
                ->constrained()
                ->onDelete("cascade")
                ->onUpdate("cascade");

            $table->foreignId("role_id")
                ->constrained()
                ->onDelete("cascade")
                ->onUpdate("cascade");

            //Llave única compuesta
            $table->unique(["privilege_id","role_id"]);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('privileges_roles');
    }
}
