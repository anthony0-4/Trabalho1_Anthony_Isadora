<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('livrarias', function (Blueprint $table) {
            $table->id();
            $table->string("nome",100);
            $table->string("endereco",100);
            $table->string("cnpj",14);
            $table->string("cidade",14);
            $table->foreignId('estados_id')->nullable()
                     ->constrained('estados')->after('id');
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
        Schema::dropIfExists('livrarias');
    }
};
