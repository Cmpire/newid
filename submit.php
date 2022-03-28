<?php
  $receiving_email_address = 'computerempire0101@gmail.com';

  if( file_exists($php_email_form = 'submit.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

 $contact = new PHP_Email_Form;
  $contact->ajax = true;

 /*
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['matric'];
  $contact->from_email = $_POST['email'];
  $contact->from_phone = $_POST['phone'];
  $contact->from_address = $_POST['address'];
  $contact->from_file = $_POST['file'];
*/

?>