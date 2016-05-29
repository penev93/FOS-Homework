 $(".Loger").click(function () {
                if ($(".Loger").text() == "Logout") {
                    window.location.reload(false);
                };
                $("#loginForm").css("display", "block");
 });

            $("#login").click(function () {
                if ($(".Loger").text() == "Logout") {
                    window.location.reload(false);
                };
				
                var user = $("#username").val();
                var pass = $("#userpass").val();
				
				if(user=="" || pass==""){
					return false;
				}
                $(".User").text("Welcome, " + user);
                $(".Loger").text("Logout");
                if((user && pass) !=""){
                    $("#loginForm").css("display", "none");
                }
            });