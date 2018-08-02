<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnlineApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('application_id');
            $table->string('full_name');
            $table->string('phone_number');
            $table->string('op_email_address');
            $table->string('date_of_birth');
            // $table->string("ssn");
            $table->string('number_to_occupy');
            $table->string('leasing_agent');
            $table->string('apply_pets');
            $table->string('pet_info');
            $table->string('oa_address_applied');
            $table->string('oa_unit_no_applied');
            $table->string('oa_bedrooms_no_applied');
            $table->string('oa_property_manager_applied');
            $table->string('oa_rent_amount_applied');
            $table->string('oa_leasing_start_applied');
            $table->string('oa_leasing_end_applied');
            $table->string('oa_address_current');
            $table->string('oa_city_current');
            $table->string('oa_state_current'); 
            $table->string('oa_zip_current');
            $table->string('oa_how_long_current'); 
            $table->string('oa_rent_amount_current'); 
            $table->string('oa_landlord_current');
            $table->string('oa_landlord_phone_current');
            $table->string('oa_address_previous');
            $table->string('oa_city_previous');
            $table->string('oa_state_previous'); 
            $table->string('oa_zip_previous');
            $table->string('oa_how_long_previous'); 
            $table->string('oa_rent_amount_previous'); 
            $table->string('oa_landlord_previous');
            $table->string('oa_landlord_phone_previous');
            $table->string('oa_name_employer');
            $table->string('oa_position_employer');
            $table->string('oa_gross_income_employer');
            $table->string('oa_address_employer');
            $table->string('oa_city_employer');
            $table->string('oa_state_employer');
            $table->string('oa_zip_employer');
            $table->string('oa_how_long_employer');
            $table->string('oa_supervisor_employer');
            $table->string('oa_supervisors_email_employer');
            $table->string('oa_supervisors_phone_employer');
            $table->string('oa_name_school');
            $table->string('oa_status_school');
            $table->string('oa_loan_amount_school');
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
        Schema::dropIfExists('online_applications');
    }
}
