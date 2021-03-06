
/***********************************************************************************************/
/* Define some regular expressions */
/***********************************************************************************************/
var expEmail = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/,
  expLettersOnly = /^[a-zA-Z ]+$/,
  expLettersNumbers = /^[a-zA-Z0-9]*$/;

    

/***********************************************************************************************/
/* On form submit, call the validateForm() function */
/***********************************************************************************************/
$( "#form-new-account" ).submit(function() {
  return validateForm();
});



/***********************************************************************************************/
/* Validate form on typing */
/***********************************************************************************************/
$( "#form-new-account" ).on( "keyup", "input.validate-locally", function() {
  validateField( $(this) );
});

  

/***********************************************************************************************/
/* Function that checks if a field has the correct minimum length */
/***********************************************************************************************/
function validateLength( fieldValue, minLength ) {
  // We remove trailing and leading whitespace
  return ( $.trim( fieldValue ).length > minLength );
}


function validateSelect(field)
{

$a = field.attr( "name" );

  //if(document.Admission_form.Religion.value == "-1")
   
  if((eval('document.Admission_form.'+$a+'.value')) == "-1" )
  {
    return true ; 
  }
  
  return false ; 
}

 
/*
// Alternative way to create the array
 
var extensions = new Array();
 
extensions[1] = "jpg";
extensions[0] = "jpeg";
extensions[2] = "gif";
extensions[3] = "png";
extensions[4] = "bmp";
*/




/***********************************************************************************************/
/* Function that validates a field */
/***********************************************************************************************/
function validateField( field ) {
  var errorText = "",
    error = false,
    value = field.val(),
   siblings = field.siblings( ".demo-errors" );
   

switch ( field.attr( "name" ) ) {
  

       case "FirstName": 
      if ( !validateLength( value, 0 ) ) {
        error = true;
        errorText += "Please enter First Name ! <br />";
        
      }
      
      if ( !expLettersOnly.test( value ) ) {
        error = true;
        errorText += "The name can only contain letters and spaces!";
      }
       break ; 
    
 
       case "LastName": 
      if ( !validateLength( value, 0 ) ) {
        error = true;
        errorText += "Please enter Last Name ! <br />";
        
      }
      
      if ( !expLettersOnly.test( value ) ) {
        error = true;
        errorText += "The name can only contain letters and spaces!";
      }
       break ; 
    





    case "FName": 
      if ( !validateLength( value, 0 ) ) {
        error = true;
        errorText += "Please enter Father Name ! <br />";
      }
      
      if ( !expLettersOnly.test( value ) ) {
        error = true;
        errorText += "The name can only contain letters and spaces!";
      }

    



      break;

    case "MName": 
      if ( !validateLength( value, 0 ) ) {
        error = true;
        errorText += "The name is too short!<br />";
      }
      
      if ( !expLettersOnly.test( value ) ) {
        error = true;
        errorText += "The name can only contain letters and spaces!";
      }
  
      
      break;
 
    case "DOB": 
      if ( !validateLength( value, 0 ) ) {
        error = true;
        errorText += "Enter Date of Birth !<br />";
      }
    
       break ; 

    case "Cast_Category": 
            
             if(validateSelect( $( "#Cast_Category" ) ))
             {

                error = true;
               errorText += "Select Category<br />";
             }

       break ; 
    

      case "Religion": 
            
            
             if(validateSelect( $( "#Religion" ) ))
             {

                error = true;
               errorText += "Select Religion<br />";
             
             }

       break ; 
    
     case "Stu_Category": 
           
            
             if(validateSelect( $( "#Stu_Category" ) ))
             {
                    
                error = true;
               errorText += "Select Student Category<br />";
             
             }

       break ; 
    
 case "Email_id": 
    
     if ( !validateLength( value, 0 ) ) {
        error = true;
        errorText += "Enter Email_id !<br />";
   
      }
     

      if ( !expEmail.test( value ) ) {
        error = true;
        errorText += "The email address format is invalid!";
      }
      
      break;
    
    case "Mobile_no": 
    
     if ( !validateLength( value, 0 ) ) {
        error = true;
        errorText += "Enter Mobile Number !<br />";
   
      }
      break;

      case "Address": 
    
     if ( !validateLength( value, 0 ) ) {
        error = true;
        errorText += "Enter Address !<br />";
   
      }
      break;

      case "City": 
    
     if ( !validateLength( value, 0 ) ) {
        error = true;
        errorText += "Enter City !<br />";
   
      }
      break;
    
       case "Stu_Category": 
           
            
             if(validateSelect( $( "#state" ) ))
             {
                    
                error = true;
               errorText += "Select State<br />";
             
             }

       break ; 

       case "Course": 
           
            
             if(validateSelect( $( "#Course" ) ))
             {
                    
                error = true;
               errorText += "Select Course<br />";
             
             }

       break ; 

      case "Semester": 
           
            
             if(validateSelect( $( "#Semester" ) ))
             {
                    
                error = true;
               errorText += "Select Semester<br />";
             
             }

       break ; 

      case "amount": 
           
            
             if ( !validateLength( value, 0 ) ) 
                   {
                      error = true;
                     errorText += "Enter amount !<br />";
   
                   }

       break ; 

       case "Draft_no": 
           
            
             if ( !validateLength( value, 0 ) ) 
                   {
                      error = true;
                     errorText += "Enter Draft_no. !<br />";
   
                   }

       break ; 
        
        case "Draftdate": 
           
            
             if ( !validateLength( value, 0 ) ) 
                   {
                      error = true;
                     errorText += "Enter Draft_no. !<br />";
   
                   }

       break ; 

        case "Payable": 
           
            
             if ( !validateLength( value, 0 ) ) 
                   {
                      error = true;
                     errorText += "Enter Payable at : field !<br />";
   
                   }

       break ; 

       case "Bank1": 
           
            
             if(validateSelect( $( "#Bank1" ) ))
             {
                    
                error = true;
               errorText += "Select Bank<br />";
             
             }

       break ; 


}

siblings.html( errorText );
 
return !error;
}




$(".tab-button").on('click', function(e)
    

    {  
        e.preventDefault();
        
       var resultfName = validateField( $( "#fname" ) );
       var resultmName = validateField( $( "#mname" ) );
       var resultDOB = validateField( $( "#DOB" ) );
       var resultCourse = validateField( $( "#Course" ) );
       var resultSemester = validateField( $( "#Semester" ) );
       var resultCategory = validateField( $( "#Cast_Category" ) );
      var resultReligion = validateField( $( "#Religion" ) );
      var resultStu = validateField( $( "#Stu_Category" ) );
      var resultEmail = validateField( $( "#Email_id" ) );
      var resultMobile = validateField( $( "#Mobile_no" ) );
      var resultName = validateField( $( "#FirstName" ) ); 
      var resultLName = validateField( $( "#LastName" ) ); 
       if ( resultfName&&resultmName&&resultDOB&&resultCategory&&resultReligion&&resultStu&&resultEmail&&resultMobile&&resultName&&resultLName&&resultSemester&&resultCourse ) 
       {
$('.nav-tabs li:eq(1) a').tab('show');

        //$("[class='btn btn-large btn-block btn-success ']").removeClass("btn btn-large btn-block btn-success ");
       
        $('.nav-tabs li:eq(1) a').removeClass("btn btn-large btn-block btn-success disabled ");
         $('.nav-tabs li:eq(0) a').addClass("btn btn-large btn-block btn-success disabled  ");


    return true;
  }
  else
    return false ;                            
            }
);







$(".tab-button2").on('click', function(e)
    {

      e.preventDefault();
      console.log("click");
        $('.nav-tabs li:eq(2) a').tab('show');

       $('.nav-tabs li:eq(2) a').removeClass("btn btn-large btn-block btn-success disabled  ");
         $('.nav-tabs li:eq(1) a').addClass("btn btn-large btn-block btn-success disabled ");
    }
);


$(".tab-button4").on('click', function(e)
    {
      e.preventDefault();
        var resultBank = validateField( $( "#Bank1" ) );
       
        var resultamount = validateField( $( "#amount" ) );
       var resultDraft = validateField( $( "#Draft_no" ) );
       var resultDraftdate = validateField( $( "#Draftdate" ) );
       var resultPayable = validateField( $( "#Payable" ) );

      
     if(resultBank&&resultamount&&resultDraft&&resultDraftdate&&resultPayable)
     {


              

        $('.nav-tabs li:eq(3) a').tab('show');

       $('.nav-tabs li:eq(3) a').removeClass("btn btn-large btn-block btn-success disabled  ");
         $('.nav-tabs li:eq(2) a').addClass("btn btn-large btn-block btn-success disabled ");
         return true ; 
  }
  else
  {
    return false
  }
}

);












$(".submit").on('click', function(e)
    {
      e.preventDefault();
       var resultAddress = validateField( $( "#Address" ) );
       var resultState = validateField( $( "#state" ) );
       var resultcity = validateField( $( "#city" ) );
    
       if(resultAddress&&resultState&&resultcity)
      {
        $('.nav-tabs li:eq(4) a').tab('show');

       $('.nav-tabs li:eq(4) a').removeClass("btn btn-large btn-block btn-success disabled  ");
         $('.nav-tabs li:eq(3) a').addClass("btn btn-large btn-block btn-success disabled  ");
           return true ; 
    }
     else 
     {
        return false ; 
     }

  }
);





$(".tab-buttonb2").on('click', function(e)
    {
      e.preventDefault();
        $('.nav-tabs li:eq(0) a').tab('show');

       $('.nav-tabs li:eq(1) a').addClass("btn btn-large btn-block btn-success disabled  ");
         $('.nav-tabs li:eq(0) a').removeClass("btn btn-large btn-block btn-success disabled ");
    }
);
/*
$(".tab-buttonb3").on('click', function(e)
    {


      e.preventDefault();
        $('.nav-tabs li:eq(1) a').tab('show');

       $('.nav-tabs li:eq(3) a').addClass("btn btn-large btn-block btn-success disabled  ");
         $('.nav-tabs li:eq(1) a').removeClass("btn btn-large btn-block btn-success disabled ");
    }
);
*/
$(".tab-buttonb4").on('click', function(e)
    {
      e.preventDefault();
      console.log("click");
        $('.nav-tabs li:eq(1) a').tab('show');

       $('.nav-tabs li:eq(2) a').addClass("btn btn-large btn-block btn-success disabled  ");
         $('.nav-tabs li:eq(1) a').removeClass("btn btn-large btn-block btn-success disabled  ");
    }
);

$(".tab-buttonb5").on('click', function(e)
    {
      e.preventDefault();
      console.log("click");
        $('.nav-tabs li:eq(2) a').tab('show');

       $('.nav-tabs li:eq(4) a').addClass("btn btn-large btn-block btn-success disabled  ");
         $('.nav-tabs li:eq(3) a').removeClass("btn btn-large btn-block btn-success disabled  ");
    }
);








