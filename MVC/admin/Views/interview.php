<?php

include APP_ROOT.'/admin/config.php';
include APP_ROOT.'/admin/connection.php';

$sql = 'SELECT question, answer FROM interview';
$result = mysqli_query($mysqli, $sql);

foreach ($result as $key):
    ?> <h4> <?php echo $key['question']; ?> </h4> <?php
    ?> <p> <?php echo $key['answer']; ?> </p> <?php
endforeach;

mysqli_close($mysqli);
?>
<br><span class="interview-note"><p>NOTE:this isn't a real interview but all answers are derived from actual interviews and her FAQ-page</p></span>
