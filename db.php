// script au debut


<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');
$statusMessage = [];

if(isset($_POST['send'])){
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);

  $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name='$name' AND email ='$email' AND message='$message'") or die('query failed');

  if (mysqli_num_rows($select_message) > 0){
    $statusMessage[] = 'message sent already!';
  } else {
    mysqli_query($conn, "INSERT INTO `contact_form`(name, email, message) VALUES ('$name', '$email', '$message')") or die('query failed');
    $statusMessage[] = 'message sent successfully!';
  }

}

?>


//script au debut de body


<?php
  if(isset($statusMessage)){
  foreach($statusMessage as $message){
    echo '
    <div class="message">
      <span>'.$message.'</span>
      <button onclick="closeMessage(this)">X</button>
    </div>';
  }
}
