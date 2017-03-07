<?php
  require_once('../private/initialize.php');

  $plain_text = '';
  $encode_key = '';
  $encrypted_text = '';
  $cipher_text = '';
  $decode_key = '';
  $decrypted_text = '';
  $encode_algorithm;
  $decode_algorithm;
  $CIPHER_METHOD = array('AES-256-CBC', 'AES-192-CBC','AES-256-CBC', 'DES-EDE3-CBC', 'BF-CBC');
  if(isset($_POST['submit'])) {

    if(isset($_POST['encode_key'])) {
      // This is an encode request
      $plain_text = isset($_POST['plain_text']) ? h($_POST['plain_text']) : nil;
      $encode_key = isset($_POST['encode_key']) ? h($_POST['encode_key']) : nil;
      $encode_algorithm = isset($_POST['encode_algorithm']) ? h($_POST['encode_algorithm']) : nil;
      $encrypted_text = key_encrypt($plain_text, $encode_key, $encode_algorithm);
      $cipher_text = $encrypted_text;

    } else {

      // This is a decode request
      $cipher_text = isset($_POST['cipher_text']) ? h($_POST['cipher_text']) : nil;
      $decode_key = isset($_POST['decode_key']) ? h($_POST['decode_key']) : nil;
      $decode_algorithm = isset($_POST['decode_algorithm']) ? h($_POST['decode_algorithm']) : nil;
      $decrypted_text = key_decrypt($cipher_text, $decode_key, $decode_algorithm);

    }
  }

?>

<!doctype html>

<html lang="en">
  <head>
    <title>Symmetric Encryption: Encrypt/Decrypt</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <link rel="stylesheet" media="all" href="includes/styles.css" />
  </head>
  <body>

    <a href="index.php">Main menu</a>
    <br/>

    <h1>Symmetric Encryption</h1>

    <div id="encoder">
      <h2>Encrypt</h2>

      <form action="" method="post">
        <div>
          <label for="encode_algorithm">Algorithm</label>
          <select name="encode_algorithm">
            <?php if(isset($encode_algorithm)){
              echo "<option ";
              echo "value=";
              echo "\"" . $encode_algorithm . "\"" . ">";
              echo $encode_algorithm;
              echo "</option>";
            }?>
            <?php
            foreach( $CIPHER_METHOD as $method){
              if( $method == $encode_algorithm){
                continue;
              }
              echo "<option ";
              echo "value=";
              echo "\"" . $method . "\"" . ">";
              echo $method;
              echo "</option>";
            }
            ?>
          </select>
        </div>
        <div>
          <label for="plain_text">Plain text</label>
          <textarea name="plain_text"><?php echo h($plain_text); ?></textarea>
        </div>
        <div>
          <label for="encode_key">Key</label>
          <input type="text" name="encode_key" value="<?php echo h($encode_key); ?>" />
        </div>
        <div>
          <input type="submit" name="submit" value="Encrypt">
        </div>
      </form>

      <div class="result"><?php echo h($encrypted_text); ?></div>
      <div style="clear:both;"></div>
    </div>

    <hr />

    <div id="decoder">
      <h2>Decrypt</h2>

      <form action="" method="post">
        <div>
          <label for="decode_algorithm">Algorithm</label>
          <select name="decode_algorithm">
            <?php if(isset($encode_algorithm)){
              echo "<option ";
              echo "value=";
              echo "\"" . $encode_algorithm . "\"" . ">";
              echo $encode_algorithm;
              echo "</option>";
            }?>
            <?php
            foreach( $CIPHER_METHOD as $method){
              if( $method == $encode_algorithm){
                continue;
              }
              echo "<option ";
              echo "value=";
              echo "\"" . $method . "\"" . ">";
              echo $method;
              echo "</option>";
            }
            ?>
          </select>
        </div>
        <div>
          <label for="cipher_text">Cipher text</label>
          <textarea name="cipher_text"><?php echo h($cipher_text); ?></textarea>
        </div>
        <div>
          <label for="decode_key">Key</label>
          <input type="text" name="decode_key" value="<?php echo h($decode_key); ?>" />
        </div>
        <div>
          <input type="submit" name="submit" value="Decrypt">
        </div>
      </form>

      <div class="result"><?php echo h($decrypted_text); ?></div>
      <div style="clear:both;"></div>
    </div>

  </body>
</html>
