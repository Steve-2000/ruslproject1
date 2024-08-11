 // Get the form element from the document
 var form = document.getElementById("form");

 // Add an event listener to the form submit event
 form.addEventListener("submit", function(event) {
   // Prevent the default form submission behavior
   event.preventDefault();

   // Get the input values from the form
   var name = document.getElementById("name").value;
   var age = document.getElementById("age").value;
   var gender = document.getElementById("gender").value;
   var email = document.getElementById("email").value;
   var phone = document.getElementById("phone").value;

   // Create an object to store the user details
   var user = {
     name: name,
     age: age,
     gender: gender,
     email: email,
     phone: phone
   };

   // Convert the user object to a JSON string
   var userJSON = JSON.stringify(user);

   // Save the user JSON string in the local storage with a key "user"
   localStorage.setItem("user", userJSON);

   // Alert the user that the registration is successful
   alert("Registration successful!");
   
   // Clear the form fields
   form.reset();
 });



 
  
 
  
