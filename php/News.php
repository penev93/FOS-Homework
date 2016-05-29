 <?php 
	$file="../config/functions.php";
	if(file_exists($file)) {
        include_once $file;
    }
    else {
        throw new Exception('404 Error : File not found.');
    }

?>
            <div class="content">
                <?php echo newsPrint();?>
                <section class="innerContent" style="">
                    <form method="post" action="_blank" name="viewer">
                        <label for="data">Choose date:</label>
                        <input type="text" id="data" name="viewer">
                        <input type="button" id="but" style=" background:#c41010;color:white;width:10%;" name="view" value="View">
                    </form>
					</section>
            </div>
