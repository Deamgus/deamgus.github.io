<?php
function sendmsg(&$msg) {
  echo $msg;
};

sendmsg($_POST['message']);
?>