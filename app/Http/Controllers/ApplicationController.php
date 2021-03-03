<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;

class ApplicationController extends Controller
{
    
     public function show($id)
     {
       $var = Application::findOrFail($id);
        return view('retrieve', [
             'vars' => $var
        ]);
     }
     public function store(request $request)
    {
    
       // dd(request('urban'));
       $form = new Application();
       try{
      
            if(request('urban')=="urban"){
                $form->urban="yes";
                $form->rural="no";
        
            }else{
                $form->urban="no";
                $form->rural="yes";
            }
            $form->registration=request('registration');
            $form->door=request('door');
            $form->sub_local_1=request('sub_local_1');
            $form->sub_local_2=request('sub_local_2');
            $form->Enter_Ward_number=request('Enter_Ward_number');
            $form->location=request('location');
            $form->Sub_District=request('Sub_District');
            $form->Address_district=request('Address_district'); 
            $form->District_pin_code=request('District_pin_code');
            $form->Address_State=request('Address_State');
            $form->State_pin_code=request('State_pin_code');
            $form->address_country=request('address_country');
            $form->address_police_station=request('address_police_station');
            $form->head_of_family=request('head_of_family');
            $form->Date_of_birth=request('Date_of_birth');
            $form->Gender=request('Gender');
            $form->relationship=request('relationship');
            $form->family_memeber=request('family_memeber');
            $form->Relation_with_head_of_Family=request('occupation');
            $form->monthly_income=request('occupation');
            $form->occupation=request('occupation');
            $form->Religious=request('Religious');
            $form->Electricity_Connection=request('YES');
            $form->Cooking_Gas=request('yes');
            $form->Surrender=request('Surrender');

            
            $form->house_tax_receipt=request('House_tax_yes');
            $form->house_tax_file=request('house_tax_file');
            $form->surrender_file=request('surrender_file');
            $form->support_document_file=request('support_document_file');
            $form->support_document_number=request('support_document_number');
            $form->Textarea=request('textarea'); 
            $form->csc_status="submit";
            // $req->file->store('public');

            if($request->hasFile('house_tax_file'))
        {
            // return ('accesible');
            //get filename with extension
            $filenameWithExt = $request->file('house_tax_file')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            
            //get just ext
            $extension = $request->file('house_tax_file')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore1 = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path =  $request->file('house_tax_file')->StoreAs('documents',$fileNameToStore1);
            
        }
      
        
        //Stores the files in the database
        if($request->hasFile('house_tax_file'))
        {
            $form -> house_tax_file = $fileNameToStore1;

        }


        
        if($request->hasFile('surrender_file'))
        {
            // return ('accesible');
            //get filename with extension
            $filenameWithExt = $request->file('surrender_file')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('surrender_file')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore2 = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path =  $request->file('surrender_file')->StoreAs('mydoc',$fileNameToStore2);
        }
        
        //Stores the files in the database
        if($request->hasFile('surrender_file'))
        {
            $form -> surrender_file = $fileNameToStore2;

        }

        

        if($request->hasFile('support_document_file'))
        {
            // return ('accesible');
            //get filename with extension
            $filenameWithExt = $request->file('support_document_file')->getClientOriginalName();

            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            
            //get just ext
            $extension = $request->file('support_document_file')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore3 = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path =  $request->file('support_document_file')->StoreAs('/mydoc2',$fileNameToStore3);
        }
        
        //Stores the files in the database
        if($request->hasFile('support_document_file'))
        {
            $form -> support_document_file = $fileNameToStore3;

        }

        
            $form->save();
    }catch(Exception $e){
            error_log("Some Error: ".e);
    }
     

    return redirect('/submitsucess')->with('success', 'Successfully Submitted!!');
    }

    
}
 