
function check(f){

    var email = f.email.value;
    var password = f.Password.value.length;

    var pass = f.Password.value;
    var cp = f.ConfirmPassword.value;
    var name = f.name.value;
    var dob = f.dob.value;
    var gender = f.gender.value;


 if( email=="" || pass==""|| cp==""|| name==""||dob==""|| gender==""){

//   alert("field cant be empty");
    
return;
         }


        if(password<6){

            // alert("Password should be greater than 6 digits");
             return;
            
        }

            if(pass!=cp){

            //    alert("Password  and current password not matched");
               return;


                    }


        }