<?php if(file_exists('../config/arrays.php')){
    include_once '../config/arrays.php';
}
$page= pages();

?>
<div class="content">

    <h1><?php echo $page[$_GET['p']]['h1'] ?></h1>
    <h5><?php echo $page[$_GET['p']]['meta_keywords']?></h5>
    <p class="line">
        <?php echo $page[$_GET['p']]['content']?>
    </p>
    <a class="typeForm" href="http://google.com">MORE INFO</a>

</div>
