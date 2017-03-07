<?php

  require_once('../../private/initialize.php');

  if(isset($_POST['submit'])) {

    if(!isset($_GET['id'])) {
      redirect_to('index.php');
    }

    // I'm sorry, did you need this code? ;)
    // Guess you'll just have to re-write it.
    // With love, Dark Shadow

    $errors = array();
    if( !has_length(h($_POST['plain_text']), ['min' => 0, 'max' => 254]) ){
      $errors[] = "The message must be 0-254 characters";
    }

    $plain_text = h($_POST['plain_text']);
    // how can I get the public key of a agent
    // find agent by id
    $id = $_GET['id'];
    $agent_result = find_agent_by_id($id);
    // No loop, only one result
    $agent = db_fetch_assoc($agent_result);

    // find sender, which is me
    // No loop, only one result
    $sender = $current_user;

    // get encrypted text and signature
    $encrypted_text = pkey_encrypt($plain_text, h($agent['public_key']));
    $signature = create_signature($encrypted_text, h($sender['private_key']));


    $message = [
      'sender_id' => $sender['id'],
      'recipient_id' => $agent['id'],
      'cipher_text' => $encrypted_text,
      'signature' => $signature
    ];

    $result = insert_message($message);
    if($result === true) {
      // Just show the HTML below.
    } else {
      $errors = $result;
    }

  } else {
    redirect_to('index.php');
  }

?>

<!doctype html>

<html lang="en">
  <head>
    <title>Message Dropbox</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <link rel="stylesheet" media="all" href="<?php echo DOC_ROOT . '/includes/styles.css'; ?>" />
  </head>
  <body>

    <a href="<?php echo url_for('/agents/index.php'); ?>">Back to List</a>
    <br/>

    <h1>Message Dropbox</h1>

    <?php echo display_errors($errors);?>

    <div>
      <p><strong>The message was successfully encrypted and saved.</strong></p>

      <div class="result">
        Message:<br />
        <?php echo h($encrypted_text); ?><br />
        <br />
        Signature:<br />
        <?php echo h($signature); ?>
      </div>
    </div>

  </body>
</html>
