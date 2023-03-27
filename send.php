<?
if ($_POST['code'] != 'NOSPAM') {
  exit;
}
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' && !empty($_POST['name'])) {
    $message = 'Name: ' . addslashes($_POST['name']) . ' ';
    $message .= 'Tel: ' . addslashes($_POST['phone']) . ' ';
     $message .= 'Adr: ' . addslashes($_POST['adr']) . ' ';
     $message .= 'Second adr: ' . addslashes($_POST['adr2']) . ' ';
     $message .= 'IP: ' . $_SERVER['REMOTE_ADDR'] . ' ';
$fd = fopen("logform.txt", 'w') or die("ooops...");
fwrite($fd, $message);
fclose($fd);
}
?>