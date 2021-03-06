<?php 
  $currentPage = "Contact Form";
  include "inc/top.inc"; 
?>

<script type="text/javascript">

//Make sure the email is correct
   function validateEmail() {
      var emailID = document.myForm.email.value;
      atpos = emailID.indexOf("@");
      dotpos = emailID.lastIndexOf(".");
   
      if (atpos < 1 || ( dotpos - atpos < 2 )) {
         alert("Please enter a correct email address in the from: example@abc.com");
         document.myForm.email.focus() ;
         return false;
      }

      return(true);
   }

//Make sure the user is using the correct format for the phone
   function validatePhone(inputPhone) {
      var phoneChars = /^\(?([0-9]{3})\)?[-]?([0-9]{3})[-]?([0-9]{4})$/;  
      if (inputPhone.match(phoneChars)) {  
         return true;  
      }

      else {
         return false;  
      }  
   }

   //Validate all input
   function validate()
   {
   //check name
      if( document.myForm.name.value == "" ) {
         alert( "Please enter a name" );
         document.myForm.name.focus() ;
         return false;
      }
   
   //check email
      if(!validateEmail() || document.myForm.email.value == "") {
         document.myForm.email.focus();
         return false;
      }

   //check phone
      if(!validatePhone(document.myForm.phone.value) || document.myForm.phone.value == "") {
         alert("Please enter a phone number in the format: ###-###-####"); 
         document.myForm.phone.focus();
         return false;
      }        

      return (true);
   }

</script>



<?php 
   $currentPage = "contact";
   include "inc/nav.inc"; 
?>

<h2>Contact Form</h2>

   <form action="database-write.php" name="myForm" id="myForm" method="post" onsubmit="return(validate());">
      <table>
      
         <tr>
            <td>Name: <input type="text" name="name" placeholder="Name here" /></td>
         </tr>
      
         <tr>
            <td>Email: <input type="text" name="email" placeholder="abc@email.com" /></td>
         </tr>
      
         <tr>
            <td>Phone: <input type="text" name="phone" placeholder="###-###-####" /></td>
         </tr>
     
      </table>

      <input class="button" type="submit" value="Submit" />
   </form>

   <table>
      <tr>
         <td><p>Message:</p><textarea form="myForm" name="message" rows="10" cols="50" wrap="soft" placeholder="Your message here"></textarea></td>
      </tr>
   </table>

<?php
   include "inc/bottom.inc";
?>