<?php
$data = $_REQUEST['file'];
if(isset($data)){
  echo file_get_contents($data);
}
