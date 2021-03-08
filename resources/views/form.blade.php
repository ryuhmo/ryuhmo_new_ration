<link rel="stylesheet" href="/css/form.css">
<style>
    input type{
       border:7px solid black;
    }
    </style>
        <h1 class="application">APPLICATION FOR ISSUANCE OF NEW RATION CARD</h1>
        
     
       <div class="form-border">
        <form action="/action" method="POST" enctype = "multipart/form-data" style=margin-left:8px>
        @csrf
        
            <fieldset>
                <legend>Applicant Address</legend>
            
            <label>Address - Door number :</label>
            <input type = "text" name="door" value  = "Enter Door no." required><br> 

            <label>Address - Sub locality 1: </label>
            <input type = "text" name="sub_local_1" value= "Enter Sub Locality 1." required>

            <span><label style="margin-left:45px">Address - Sub locality 2: </label>
            <input type = "text" name="sub_local_2" value= "Enter Sub Locality 2." value="local2" required></span>

            <p><label>Address- Ward Number:  </label>
            <input type = "number" name="Enter_Ward_number" value= "Enter Ward number"  required></p>

            <p><label>Address – Location:</label>
            <input type = "text" name="location"  value= "Enter Adrees-Location" style=margin-left:33px></p>
            
            <div class="address-sub=district">
                <label>Address_Sub_District:</label>
                    <select name="Sub_District" class="sub-select1"  style=margin-left:15px>
                        <option></option>
                        <option>Tuipang</option>
                        <option>Tlangnuam</option>
                        <option>Thingsulthliah</option>
                        <option>Aibawk</option>
                    </select>
            </div></br>
           
            
                <p>   <label>Address-District:</label>
                    <select name="Address_district" class="sub-select2" style=margin-left:56px>
                    <option></option>
                        <option>Lunglei</option>
                        <option>Saiha  </option>
                        <option>Mamit  </option>
                        <option>Kolasib</option>
                        <option>Serchip</option>
                    </select>

            <span><label style="margin-left:200px">Address -District code : </label>
            <input type = "text" name="District_pin_code"  value= "Enter District code" ></span></p>

            
                  <p><label>Address-State:</label>
                    <select name="Address_State" class="sub-select3" value="state" style=margin-left:66px>
                        <option></option>
                        <option>Mizoram</option>
                        <option>Assam</option>
                        <option>Tripura</option>
                        <option>Nagaland</option>
                        <option>Manipur</option>
                    </select>
                    <span><label style="margin-left:190px">Address-State-Pin code : </label>
            <input type = "text" name="State_pin_code"  value  = "Enter State Pin code" ></span></p>

            <div class="address-country">
                <label>Address-Country:</label>
                    <select name="address_country" class="sub-select4" name="country" style=margin-left:49px>
                        <option></option>
                        <option>Germany</option>
                        <option>Myanma<r/option>
                        <option>Canada</option>
                        <option>Russia</option>
                        <option>Japan</option>
                        <option>Pakistan</option>
                        <option>India</option>
                    </select>
            </div><br>   

            <p>
                <label class="address-police station">Address-Polic Station:</label>
                    <select name="address_police_station" id="police station" style=margin-left:20px>
                    <option></option>
                        <option>Bawngkawn police station</option>
                        <option>aizawl police station</option>
                        <option>Vaivakawn police station </option>
            
                        <option>Kulikawn police station</option>
                        <option>Saiha police station</option>
                        <option>Pakistan police station</option>
                        <option>India police station</option>
                    </select>
           </fieldset>
            
           <fieldset>
                <legend>Family Profile</legend>
            </p><br>
            <p><label class="New-ration">Services Request For New <br>Ration Card- APL (Urban/Rural) :</label>
            <label> Urban </label>
            <input type = "radio" name="urban" value = "urban" required>
            
            <label> rural </label>
            <input type = "radio" name="urban" value = "rural" required></p><br>
            
            <p>
            <label>Registration No.  : </label>
            <input type = "text" name="registration" value  = "Enter registration no." style="margin-left:42px" required>
            </p><br>
                
                
                <p>
            <label class="name of head of family">Name of Head of Family:   </label>
            <input type = "text" name="head_of_family"  value  = "Enter head of family" required >
            </p><br>

            <p>
            <label class="date of birth">Date of Birth:</label>
            <input type="date" name="Date_of_birth" value="Enter DOB" style=margin-left:77px>
            </p><br>
            
            <p>
            <label class="gender">Gender:</label>
                    <select name="Gender" class="sub-select" style=margin-left:110px>
                        <option>Female</option>
                        <option>Male</option>
                    </select>
                </p><br>

            <p>
            <label class="Relationship">Relationship:</label>
                    <select name="relationship" class="sub-select" style=margin-left:75px>
                        <ul><option></option>
                        <option>F/o</option>
                        <option>S/o</option>
                        <option>M/o</option>
                        <option>D/o</option>
                        <option>W/o</option>
                        <option>H/o</option></ul>
                    </select>
                       
                    </p>  <br>
                    

            <p class="Name of Family Members">
            <label>Name of Family Members:</label>

               
                                                      1.<input type="text" value="Enter family member" name="family_memeber" ><br></span>
                <span style="margin-left:180px";>     2.<input type="text" value="Enter family member" name="family_memeber" ><br></span>
                <span style="margin-left:180px";>      3.<input type="text" value="Enter family member" name="family_memeber" >  <br>  </span>                             
                <span style="margin-left:180px";>      4.<input type="text" value="Enter family member" name="family_memeber" ><br></span>
                <span style="margin-left:180px";>      5.<input type="text" value="Enter family member" name="family_memeber" ><br></span>
                <span style="margin-left:180px";>       6.<input type="text" value="Enter family member" name="family_memeber" ><br>
                 </span>
                
                </p> 
                </fieldset>
                
                <fieldset>
                <legend></legend>
                <br>    
            <p>
            <label>Relation With Head of Family:</label>
            
                <select name="Relation_with_head_of_Family" class="sub-select"  required>
                
                        <option></option>
                        <option>F/o</option>
                        <option>S/o</option>
                        <option>M/o</option>
                        <option>D/o</option>
                        <option>W/o</option>
                        <option>H/o</option>
                </select></p><br>

            <p>
            <label class="Monthly income of karta">Monthly Income of Karta:</label>
            
                <input type="number"name="monthly_income" value="35667" value="Enter Monthly Income" required>
                </p><br>

                <p>
            <label class="occupation">Occupation:</label>
            
                <select name="occupation"  required>
                        <option></option>
                        <option>Enter Occupation</option>
                        <option>Student</option>
                        <option>reporter</option>
                        <option>Bussinessman</option>
                        <option>Goverment servant</option>
                        <option>Teacher</option>
                        <option>Farmer</option>
                </select></p><br>
            
                <p>
            <label class="Religious">Religious:</label>
                <select name="Religious" class="sub-select5" required style=margin-left:14px>
                            <option></option>
                        <option>Religious</option>
                        <option>Christianity</option>
                        <option>Budhism</option>
                        <option>Muslim</option>
                        <option>Islam</option>
                        <option>Sikh</option>
                    </select></p><br>
            
            <p><label class="Electric connection">Electricity Connection :</label>
            <label> YES </label>
            <input type = "radio" name="YES"  value = "Yes" >
            <label> NO </label>
            <input type = "radio" name="YES"  value = "NO"></p><br>

            <p><label class="Cooking-gas">Cooking Gas :</label>
            <label> YES </label>
            <input type = "radio" name="yes" value = "yes" >
            <label> NO </label>
            <input type = "radio" name="yes" value = "no"></p><br>


            <p><label class="">Receipt of House Tax if Own: </label>
            <label> YES </label>
            <input type = "radio" name="House_tax_no"  value = "yes" >
            <label> NO </label>
            <input type = "radio" name="House_tax_yes"  value = "NO"> <br>
            </p><br>

            <p><label class="">Receipt of House Tax if Own: </label>
            <input type = "file" name="house_tax_file" required>
            <br>a House or Electricity bill
            </p><br>



            <p><label class="">Surrender Certificate if migrated: </label>
            <label> YES </label>
            <input type = "radio" name="Surrender"  value = "yes" >
            <label> NO </label>
            <input type = "radio" name="Surrender"  value = "NO">
            </p><br>
            <p><label class="">Surrender Certificate if migrated:: </label>
            
            <input type = "file" name="surrender_file" >
            
            </p><br>

           

        <p><label class="">Upload List of Scanned supporting Documents: </label>
            <input type = "file" name="support_document_file"  required>
            </p><br>
            <p>
            <label class="List of Scanned supporting Documents">List of Scanned supporting Documents:</label>
                <input type="number" name="support_document_number" value="Enter Documents" required>
                </p><br>

            <p>
            Remark (if any): <textarea class="remark" name="textarea" value="Enter remarks" required> </textarea>

            </p><br>
        
            <input type="submit" class="form-submit" name="submit">
            <fieldset>
        </form>
        </div>
    


    

    