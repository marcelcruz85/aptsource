<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Store;

use Log;

use Mail;

class EmailController extends Controller
{
    //
    public function send(Request $request){

        $form_name = $request->input('form_name');
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $text = $request->input('text');
        $listing_id = $request->input('listing_id');

        $submit_address = $request->input('submit_address');
        $submit_address_unit = $request->input('submit_address_unit');
        $submit_name = $request->input('submit_name');
        $submit_email = $request->input('submit_email');
        $submit_phone = $request->input('submit_phone');        
        $submit_owner_info = $request->input('submit_owner_info');
        $submit_price = $request->input('submit_price');
        $submit_available = $request->input('submit_available');
        $submit_title = $request->input('submit_title');
        $submit_description = $request->input('submit_description');
        $submit_size = $request->input('submit_size');
        $submit_beds = $request->input('submit_beds');
        $submit_bath = $request->input('submit_bath');
        $submit_floor = $request->input('submit_floor');
        $submit_parking = $request->input('submit_parking');
        $submit_parking_include = $request->input('submit_parking_include');
        $submit_parking_price = $request->input('submit_parking_price');
        $submit_parking_type = $request->input('submit_parking_type');
        $submit_pets_dogs = $request->input('submit_pets_dogs');
        $submit_pets_cats = $request->input('submit_pets_cats');
        $submit_pets_no_pets = $request->input('submit_pets_no_pets');
        $submit_pets_fee = $request->input('submit_pets_fee');
        $submit_pets_deposit = $request->input('submit_pets_deposit');
        $submit_pets_price = $request->input('submit_pets_price');
        $submit_features = $request->input('submit_features');
        $submit_show = $request->input('submit_show');
        $submit_property_status = $request->input('submit_property_status');
        $submit_tenant_information = $request->input('submit_tenant_information');

        if($request->hasFile('submit_property_pictures'))
        {
         
            $images = array();
            $allowedfileExtension=['jpg','png']; 
            $files = $request->file('submit_property_pictures'); 
            foreach ($files as $file) {
  

                $filename = $file->getClientOriginalName(); 
                $extension = $file->getClientOriginalExtension(); 
                $check=in_array($extension,$allowedfileExtension); 

                Log::debug($check); 
                if($check) 
                { 
                    $path = $file->store('photos');
                    //Storage::disk('public_storage')->put($filename, $file);
                    $image = 'http://www.apartmentsourcechicago.com/storage/' . $path;
                    array_push($images, $image);
                    
                }
            }
            Log::debug($images); 

        }

        
        $data = [
            'form_name' => $form_name,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'text' => $text,
            'listing_id' => $listing_id,
            'submit_address' => $submit_address,
            'submit_address_unit' => $submit_address_unit,
            'submit_name' => $submit_name,
            'submit_email' => $submit_email,
            'submit_phone' => $submit_phone,
            'submit_owner_info' => $submit_owner_info,
            'submit_price' => $submit_price,
            'submit_available' => $submit_available,
            'submit_title' => $submit_title,
            'submit_description' => $submit_description,
            'submit_size' => $submit_size,
            'submit_beds' => $submit_beds,
            'submit_bath' => $submit_bath,
            'submit_floor' => $submit_floor,
            'submit_parking' => $submit_parking,
            'submit_parking_include' => $submit_parking_include,
            'submit_parking_price' => $submit_parking_price,
            'submit_parking_type' => $submit_parking_type,
            'submit_pets_dogs' => $submit_pets_dogs,
            'submit_pets_cats' => $submit_pets_cats,
            'submit_pets_no_pets' => $submit_pets_no_pets,
            'submit_pets_fee' => $submit_pets_fee,
            'submit_pets_deposit' => $submit_pets_deposit,
            'submit_pets_price' => $submit_pets_price,
            'submit_features' => $submit_features,
            'submit_show' => $submit_show,
            'submit_property_status' => $submit_property_status,
            'submit_tenant_information' => $submit_tenant_information,
            'images' => $images
        ];
    
        Mail::send('emails.contactemail', $data, function ($message) {
            $message->from('support@dotgital.com', 'Apartment Source Chicago');
            $message->subject('You received a message from the website.');
            $message->to('support@dotgital.com');
        });

        // return view($view, [
        //     'success' => $success,
        // ]);

        $response = array(
            'status' => 'success',
            'msg' => 'Setting created successfully',
        );
        //return \Response::json($response);

        return 'success';
    
    }
}