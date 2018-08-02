<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OnlineApplication extends Model
{
    protected $fillable = [
        'application_id', 
        'full_name', 
        'phone_number', 
        'op_email_address', 
        'date_of_birth',
        // "ssn", 
        'number_to_occupy', 
        'leasing_agent', 
        'apply_pets', 
        'pet_info', 
        'oa_address_applied', 
        'oa_unit_no_applied', 
        'oa_bedrooms_no_applied', 
        'oa_property_manager_applied', 
        'oa_rent_amount_applied', 
        'oa_leasing_start_applied', 
        'oa_leasing_end_applied', 
        'oa_address_current', 
        'oa_city_current', 
        'oa_state_current', 
        'oa_zip_current', 
        'oa_how_long_current', 
        'oa_rent_amount_current', 
        'oa_landlord_current', 
        'oa_landlord_phone_current', 
        'oa_address_previous', 
        'oa_city_previous', 
        'oa_state_previous', 
        'oa_zip_previous', 
        'oa_how_long_previous', 
        'oa_rent_amount_previous', 
        'oa_landlord_previous', 
        'oa_landlord_phone_previous', 
        'oa_landlord_phone_current', 
        'oa_name_employer', 
        'oa_position_employer', 
        'oa_gross_income_employer', 
        'oa_address_employer', 
        'oa_city_employer', 
        'oa_state_employer', 
        'oa_zip_employer', 
        'oa_how_long_employer',
        'oa_supervisor_employer',
        'oa_supervisors_email_employer',
        'oa_supervisors_phone_employer',
        'oa_name_school',
        'oa_status_school',
        'oa_loan_amount_school'
    ];
}
