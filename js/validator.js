$("#password").keyup(function () {
	 var pass = $(this).val();
	 
	 if (pass == "") {
	     $("#password").next().next().html("");
						  return true;
					  }

					  if (pass.indexOf(' ',0)>=0 ){
					      $("#password").next().next().html("Please remove empty space.");
					      return false;
					  } else {
					      $("#password").next().next().html("");
					      return true;
					  }

					  if (pass.length <= 4) {
					      $("#password").next().next().html("Password must be at least 5 characters .");
					      return false;
						  
					  } else {
					      $("#password").next().next().html("");
					      return true;
					  }
				  });
 $("#firstName").keyup(function () {
					  var firstName = $(this).val();
					  if (firstName == "") {
					      $("#firstName").next().next().html("")
						  return true;
					  }
					  var regex = /([A-Z][a-zA-Z]*)/;
					  if (regex.test(firstName)) {
						  return true;
					  }
					  else {
						  $("#firstName").next.next().html("Your name must contain only letters and it starts with Capital letter .");
						 return false;
					  }

				  });
         $("#lastName").keyup(function () {
					  var lastName = $(this).val();
					  if (lastName == "") {
					      $("#lastName").next().next().html("");
						  return true;
					  }
					  var regex = /([A-Z][a-zA-Z]*)/;
					  if (regex.test(lastName)) {
					      $("#lastName").next().next().html("");
						  return true;
					  }
					  else {
					      $("#lastName").next().next().html("Your name must contain only letters and it starts with Capital letter .");
					      return false;
					  }
                      
				  });
					$("#city").keyup(function () {
					  var city = $(this).val();
					  if (city == "") {
					      $("#city").next().next().html("");
						  return true;
					  }
					  var regex = /([A-Z][a-zA-Z]*)/;
					  if (regex.test(city)) {
					      $("#city").next().next().html("");
						  return true;
					  }
					  else {
						  $("#city").next().next().html("Your city name must contain only letters and it starts with Capital letter.");
						  return false;

					  }

				  });

					$("#Email").on("keyup", function () {
					    var etest = $("#Email").val();
					    var x = console.log(etest);
				      var regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                      
				      var emailElement = etest.indexOf("@", 0);
				      if ((/\S/.test(etest))) {
				          $("#Email").next().next().html("")
				      }
				      var spaceElement = etest.indexOf(" ", 0);
				      if (spaceElement >= 0) {
				          $("#Email").next().next().html("Please remove empty space \" \" .");
				          return false;
				      }

				      if ((email.length > 7) && (emailElement == -1)) {
				          $("#Email").next().next().html("It must contain @ .");
				          return false;
				      }
				      var test = regex.test(etest);
				      if (etest == "") {
					      $("#Email").next().next().html("");
						  return true;
					  }

					  if (test==true) {
					      $("#Email").next().next().html("");
					      return true;
					  }
					  
					  if (email.length <= 7) {
					      $("#Email").next().next().html("");
					      return true;
					  }
				  
					
				  });

				  
				  $("#repeatPass").keyup(function () {
					  var repeatPass = $(this).val();
					  if (repeatPass == "") {
					      $("#lastName").next().next().html("");
						  return true;
					  }
					  var currPass=$("#password").val();
					  if (repeatPass == currPass) {
					      $("#repeatPass").next().next().html("");
						  return true;
					  }
					  else {
					      $("#repeatPass").next().next().html("Password doesn't match !");
					      return false;
					  }
				  });
				  $(".submitButt").click(function () {
				      var elements = $("#signupForm input");
					/*HEllo what im doing*/  
					  for (var i = 0, length = elements.length; i < length ; i++) {
					      var val = elements[i].value;
					      var id = elements[i].id;
					      var x = $('#' + id + ' ~ ' + '.error').text();
                         
					      if(x != ""){
					          alert("Please enter correct details.");
					          return false
					      }

					       if (val == "") {
					          alert("Please fill the full form.");
					          return false;

					      }
					       
					  };
					  
                      

					  var email = elements[0].value;
					  var password = elements[1].value;
					  var firstName = elements[2].value;
					  var lastName = elements[5].value;
					  var sex = $("select").val();
					  var city = elements[3].value;


					  var register = window.open("", "blank", "width=600, height=200px");
					  register.document.write('<p>' + "E-mail: " + email + '<br/>'
                                   + "Password: " + password + '<br/>'
                                   + "First name: " + firstName + '<br/>'
                                   + "Last name: " + lastName + '<br/>'
                                   + "Sex: " + sex + '<br/>'
                                   + "City: " + city + '<br/>' + '</p>');
					  return true;
				  });