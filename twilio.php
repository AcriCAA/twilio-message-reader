<?php
$obj = json_decode(exec("curl -X GET 'https://api.twilio.com/2010-04-01/Accounts/{AccountSID}/Messages.json' \
-u {AccountSID}:{AuthToken}"), TRUE);
for($i=0; $i<count($obj['messages']); $i++) {
    $resultMessage = "" . $obj['messages'][$i]["body"] . "";
    $resultDateCreated = $obj['messages'][$i]["date_created"];
    $resultSender = $obj['messages'][$i]["from"];
    if ($obj['messages'][$i]["status"] == 'received') {
    echo "<tr>
            <td>Message " . $resultDateCreated . "</td>
            <td>" . $resultMessage . "</td>
            <td>" . $resultSender . "</td>
          </tr>";
    }
}
?>