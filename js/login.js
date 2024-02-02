function changeForm(number){
    var format = document.getElementsByClassName('forms');
    if(number == 0){
      format[0].classList.remove("hidden");
      format[0].classList.add("form-style");
      format[1].classList.add("hidden");
      format[1].classList.remove("form-style");
    }
    else if(number == 1){
      format[1].classList.remove("hidden");
      format[1].classList.add("form-style");
      format[0].classList.add("hidden");
      format[0].classList.remove("form-style");
    }
  }
  
  var inputElements = document.getElementsByClassName("input");
  var usernameValue = inputElements[0].value;
  var passwordValue = inputElements[1].value;
  console.log(inputElements);
  console.log("username "+usernameValue);
  console.log("password "+passwordValue);
  
  
  
  
  
  function validateRegistration() {
    const emri = document.querySelector("input[name='register-emri']").value;
    const mbiemri = document.querySelector("input[name='register-mbiemri']").value;
    const username = document.querySelector("input[name='register-username']").value;
    const password = document.querySelector("input[name='register-passwordi']").value;
  
    // Define the regular expressions for each field
    const emriRegex = /^[a-zA-Z]{3,30}$/;
    const mbiemriRegex = /^[a-zA-Z]{3,30}$/;
    const usernameRegex = /^[a-zA-Z0-9._-]{3,20}$/;
    const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
  
    // Check if each field matches its respective regex
    const isEmriValid = emriRegex.test(emri);
    const isMbiemriValid = mbiemriRegex.test(mbiemri);
    const isUsernameValid = usernameRegex.test(username);
    const isPasswordValid = passwordRegex.test(password);
  
  
  
    // Check if any field is empty
   if (!emri || !mbiemri || !username || !password) {
    alert("Please fill out all fields.");
    return false;
  }
    if (!isEmriValid) {
      alert("Please enter a valid first name (3-30 letters, no numbers or special characters).");
      return false;
    }
    if (!isMbiemriValid) {
      alert("Please enter a valid last name (3-30 letters, no numbers or special characters).");
      return false;
    }
    if (!isUsernameValid) {
      alert("Please enter a valid username (3-20 letters, numbers, periods, dashes, and underscores only).");
      return false;
    }
    if (!isPasswordValid) {
      alert("Please enter a valid password (at least 8 characters, one uppercase letter, one lowercase letter, and one number).");
      return false;
    }else{
      
    // If all fields are valid, return true to submit the form
      alert("You have been sucessfully registered,now you can log in!! ");
      return true;
    }
  
  }