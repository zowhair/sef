<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnerInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partner_institutions', function (Blueprint $table) {
            $table->id();
            $table->string('image_path')->nullable();
            $table->text('institution_name')->nullable();
            $table->timestamp('date')->nullable();
            $table->text('catagory')->nullable();
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
        Schema::dropIfExists('partner_institutions');
    }
}
