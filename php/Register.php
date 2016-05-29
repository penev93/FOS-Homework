	<?php
    include_once 'phpValidator.php';
    $email=$password=$repeatPass="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $isCorrect=test_input($_POST['Email']);


    }


    function test_input($data)
    {
        $mailValue = $data;
        $pattern = '/^\S+@\S+\.\S+$/';
        $isTrue = preg_match($pattern, $mailValue);
        if ($isTrue != 1) {
            return "Incorrect";
        } else {
            return Correct;
        }
    }

    ?>
					<div class="content">
			
				<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="signupForm" name="registration">

					<section class="leftSect">
						<section class="innerContent">
							<section class="splitter">
								<label for="Email">Email <span class="sparkle">*</span></label>
								<input type="email" id="Email" value='' name="Email"><br />
                                    <span class="error"></span>
							</section>
							<section class="splitter">
								<label for="password">Password <span class="sparkle">*</span></label>
								<input type="password" id="password" value="" name="password"><br />
                                <span class="error"></span>
							</section>
							<section class="splitter">
								<label for="firstName">First Name</label>
								<input type="text" id="firstName" value="" name="firstName"><br />
                                <span class="error"></span>
							</section>
							<section class="splitter">
								<label for="sex">Sex </label>
								<select id="sex" name="sex">
									<option name="male">male</option>
									<option name="female">female</option>
								</select>
							</section>
						</section>
					</section>


					<section class="rightSect">
						<section class="innerContent">
							<section class="splitter">
								<label for="city">City</label>
								<input type="text" name="city" value="" id="city" /><br />
                                <span class="error"></span>
							</section>
							<section class="splitter">
								<label for="repeatPass">Repeat password<span class="sparkle"> *</span></label>
								<input type="password" value="" name="repeatPass" id="repeatPass" /><br />
                                <span class="error"></span>
							</section>
							<section class="splitter">
								<label for="lastName">Last name</label>
								<input type="text" name="lastName" value="" id="lastName" /><br />
                                <span class="error"></span>
							</section>
							<section class="splitter">
								<button name="button" class="submitButt">Save</button>
							</section>
						</section>

					</section>

				</form>
			 </div>

		
