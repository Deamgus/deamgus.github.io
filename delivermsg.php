<?php
function sendmsg(&$msg) {
  echo $msg;
};

sendmsg($_GET['message']);
?>