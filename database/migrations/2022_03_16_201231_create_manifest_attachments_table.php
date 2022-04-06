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
        Schema::create('manifest_attachments', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('file');
            $table->bigInteger('attachment_type_id')
                ->references('id')
                ->on('manifest_attachment_types')
                ->constrained()
                ->cascadeOnDelete();
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
        Schema::dropIfExists('manifest_attachments');
    }
};
