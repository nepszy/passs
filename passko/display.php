<?php
echo '<h3 class="block-minorHeader">YOUR  THREAD</h3>';

$topic =$_POST['node_id'];
$title =$_POST['title'];
$message =$_POST['message'];

echo' TOPIC:';echo $topic;


echo' <br>';
echo' TITLE:--------';echo $title;
echo' <br>';
echo' MESSAGES:--------';echo $messages;

?>


