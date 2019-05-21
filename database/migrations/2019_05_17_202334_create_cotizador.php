<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCotizador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizador', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('monto', 8,2);

            $table->double('pago_quincenal6', 8,2);
            $table->double('monto_total6', 8,2);

            $table->double('pago_quincenal12', 8,2);
            $table->double('monto_total12', 8,2);

            $table->double('pago_quincenal18', 8,2);
            $table->double('monto_total18', 8,2);

            $table->double('pago_quincenal24', 8,2);
            $table->double('monto_total24', 8,2);

            $table->double('pago_quincenal30', 8,2);
            $table->double('monto_total30', 8,2);

            $table->double('pago_quincenal36', 8,2);
            $table->double('monto_total36', 8,2);

            $table->double('pago_quincenal42', 8,2);
            $table->double('monto_total42', 8,2);

            $table->double('pago_quincenal48', 8,2);
            $table->double('monto_total48', 8,2);

            $table->smallInteger('code');

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
        Schema::dropIfExists('cotizador');
    }
}
