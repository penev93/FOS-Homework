<?php
if(file_exists('../config/functions.php')){
    include_once '../config/functions.php';
}
else {
    throw new Exception('404 Error : File not found.');
}
?>
			<div class="content">

                <?php echo reviewsPrint(); ?>

                    <section class="review">
                    <h2>Leave a review</h2>
                    <form action="_blank" method="post" name="review">
                        <div class="leftSect">
                            <section class="splitInput">
                                <label for="Email">E-mail<span class="sparkle"> *</span></label>
                                <input type="text" name="email" id="Email" />
                            </section>
                            <section class="splitInput">
                                <label for="Name">Name</label>
                                <input type="text" name="name" id="Name" />
                            </section>
                            <section class="splitInput">
                                <label for="Rate">Rate</label>
                                <select name="rate" id="Rate">
                                    <option value="" disabled selected>Choose Rate</option>
                                    <option value="very bad">very bad</option>
                                    <option value="bad">bad</option>
                                    <option value="good">good</option>
                                    <option value="excellent">excellent</option>
                                </select>
                            </section>

                        </div>

                        <div class="rightSect">
                            <section class="splitInput">
                                <label for="Comment">Comment<span class="sparkle"> *</span></label>
                                <textarea></textarea>
                            </section>

                        </div>
                        <section class="splitInput">
                            <input type="submit" class="submitButt" name="reviewSubmit" value="Send" />
                        </section>
                    </form>
                    </section>
            </div>

					
				

