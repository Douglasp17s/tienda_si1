<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('DETALLE_CARRITO', function (Blueprint $table) {
            $table->unsignedBigInteger('CARRITO');
            $table->unsignedBigInteger('PRODUCTO');
            $table->decimal('PRECIO', 10, 2);
            $table->integer('CANTIDAD');
            $table->timestamp('updated_at')->nullable()->default(null)->onUpdate(DB::raw('CURRENT_TIMESTAMP'));

            //LLAVES PRIMARIAS FORANEAS
            $table->primary(['CARRITO', 'PRODUCTO']);


            $table->foreign('CARRITO')->references('ID')->on('CARRITO')->onDelete('cascade')->onUpdate('cascade'); 
            $table->foreign('PRODUCTO')->references('ID')->on('PRODUCTO')->onDelete('cascade')->onUpdate('cascade'); 
            
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DETALLE_CARRITO');
   
    }
};
