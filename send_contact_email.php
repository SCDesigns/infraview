<?php
if(isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "sales@jnt-tech-serv.com";
    $email_subject = "Interested in Your Services";

    function died($error) {
        // error code
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }


    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['company'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');
    }

    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // required
    $company = $_POST['company']; // required
    $title = $_POST['title']; // not required
    $address = $_POST['address']; // not required
    $city = $_POST['city']; // not required
    $state = $_POST['state']; // not required
    $zip = $_POST['zip']; // not required
    $found = $_POST['found']; // not required
    $contact_send_lit = $_POST['contact_send_lit']; // not required
    $contact_call_me = $_POST['contact_call_me']; // not required
    $facility = $_POST['facility']; // not required
    $facility_details = $_POST['facility_details']; // not required
    $use_start = $_POST['use_start']; // not required
    $use_nox = $_POST['use_nox']; // not required
    $use_soot = $_POST['use_soot']; // not required
    $use_urea = $_POST['use_urea']; // not required
    $use_slag = $_POST['use_slag']; // not required
    $use_other = $_POST['use_other']; // not required
    $comments = $_POST['comments']; // not required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }

    $string_exp = "/^[A-Za-z .'-]+$/";

  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }

  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }

  if(!preg_match($string_exp,$comp)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }

  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }

  if(strlen($error_message) > 0) {
    died($error_message);
  }

    $email_message = "Form details below.\n\n";

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Company: ".clean_string($company)."\n";
    $email_message .= "Title: ".clean_string($title)."\n";
    $email_message .= "Address: ".clean_string($address)."\n";
    $email_message .= "City: ".clean_string($city)."\n";
    $email_message .= "State: ".clean_string($state)."\n";
    $email_message .= "Zip: ".clean_string($zip)."\n";
    $email_message .= "How Did You Find Us?: ".clean_string($found)."\n";
    $email_message .= "Send Literature: ".clean_string($contact_send_lit)."\n";
    $email_message .= "Call Me: ".clean_string($contact_call_me)."\n";
    $email_message .= "Facility: ".clean_string($facility)."\n";
    $email_message .= "Facility Details: ".clean_string($facility_details)."\n";
    $email_message .= "Use Start: ".clean_string($use_start)."\n";
    $email_message .= "Use Nox: ".clean_string($use_nox)."\n";
    $email_message .= "Use Soot: ".clean_string($use_soot)."\n";
    $email_message .= "Use Urea: ".clean_string($use_urea)."\n";
    $email_message .= "Use Slag: ".clean_string($use_slag)."\n";
    $email_message .= "Use Other: ".clean_string($use_other)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";

// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
?>

<!--  email success response  -->

Thank you for contacting us. We will be in touch with you very soon.

<?php

}
?>
