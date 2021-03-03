<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('urban')->nullable();
            $table->string('rural')->nullable();
            $table->string('registration')->nullable();
            $table->string('door')->nullable();
            $table->string('sub_local_1')->nullable();
            $table->string('sub_local_2')->nullable();
            $table->string('Enter_Ward_number')->nullable();
            $table->string('location')->nullable();
            $table->string('Sub_District')->nullable();
            $table->string('Address_district')->nullable();
            $table->string('District_pin_code')->nullable();
            $table->string('Address_State')->nullable();
            $table->string('State_pin_code')->nullable();
            $table->string('address_country')->nullable();
            $table->string('address_police_station')->nullable();
            $table->string('head_of_family')->nullable();
            $table->date('Date_of_birth')->nullable();
            $table->string('Gender')->nullable();
            $table->string('relationship')->nullable();
            $table->string('family_memeber')->nullable();
            $table->string('Relation_with_head_of_Family')->nullable();
            $table->string('monthly_income')->nullable();
            $table->string('occupation')->nullable();
            $table->string('Religious')->nullable();
            $table->string('Electricity_Connection')->nullable();
            $table->string('Cooking_Gas')->nullable();
            $table->date('date')->nullable();
            $table->string('status_forwarder')->nullable();
            $table->string('csc_status')->nullable();
            $table->string('new_ration_card')->nullable();
            $table->string('Surrender')->nullable();

            $table->string('house_tax_receipt')->nullable();
            $table->string('house_tax_file')->nullable();
  
           $table->string('surrender_file')->nullable()->nullable();
           $table->string('support_document_file')->nullable();
           $table->integer('support_document_number')->nullable();
            $table->string('Textarea')->nullable();
            
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
        Schema::dropIfExists('applications');
    }
}
