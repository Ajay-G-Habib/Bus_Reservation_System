// Select all input elements for varification
const name = document.getElementById("fullname");
const userName = document.getElementById("uname");
const email = document.getElementById("email");
const phoneNumber = document.getElementById("phone");
var gender = document.getElementsByName("gender");
var password = document.getElementById("password");
var confirm_password = document.getElementById("confirm_password");

function formValidation(){
    if(name.value.length < 2 || name.value.length > 20){
        alert("name length should be less than 21 and grater than 1");
        name.focus();
        return false;
    }

    if(userName.value.length < 2 || userName.value.length > 30){
        alert("Username length should be less than 30 and grater than 1");
        userName.focus();
        return false;
    }

    if (!email.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
        alert("Please enter a valid email!");
        email.focus();
        return false;
      }

      if (!phoneNumber.value.match(/^[1-9][0-9]{9}$/)) {
        alert("Phone number must be 10 characters long number and first digit can't be 0!");
        phoneNumber.focus();
        return false;
      }

      if (password.value.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/)) {
        alert("Password must contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character, and must be between 8 and 15 characters long.");
        password.focus();
        return false;
      }  
      
      if((password).value!==(confirm_password).value){
          alert("password do not match");
          password.focus();
          confirm_password.focus();
          return false;
      }

      if (gender.checked==false) {
        alert("Please select your gender!");
        return false;
      }
    
      return true;

}