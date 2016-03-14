<?php
  require('./vendor/mailchimp/mailchimp/src/MailChimp.php');
  try {
    $api = new MailChimp(getenv('26c5cb2164f8daa61a051400fedf89a9-us13'));
    $result = $api->lists->subscribe(getenv('2fa5ab92ec'),  array("email" => $_POST['email']), null, 'html', false, false, false, false);
  } catch (Exception $e) {
    error_log ('Exception while attempting to send email to ' . $_POST['email']);
  }
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- ... -->
        <body>
          <section class="legal">
            <article>
              <h1>Thank You!</h1>
              <p>Your free book is on its way!</p>
            </article>
          </section>
      </body>
  </html>






