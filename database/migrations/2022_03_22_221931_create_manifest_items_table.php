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
        Schema::create('manifest_items', function (Blueprint $table) {
            $table->foreignId('manifest_id')->constrained();
            $table->foreignId('waste_type_id')->constrained();
            $table->string('treatment')->nullable();
            $table->string('bin_location')->nullable();
            $table->string('bin_qty')->nullable();
            $table->string('bin_size')->nullable();
            $table->string('mass_kg')->nullable();
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
        Schema::dropIfExists('manifest_waste');
    }
};
