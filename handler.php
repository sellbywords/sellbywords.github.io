<?php
if (!empty($_POST['key'])) {
  file_put_contents('test.txt', $_POST['key']);
}
