<!doctype html>
<html>
  <head>
    <title>Twilio Message Reader</title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <h1>Twilio Message Reader</h1>
    <div class='container'>
        <table class='table table-striped table-hover'>
          <tr>
            <td><strong>Date Sent</strong></td>
            <td><strong>Messages</strong></td>
            <td><strong>Sender</strong></td>
          </tr>
          <?php require_once("twilio.php"); ?>
          </table>
        </div>
  </body>
</html>