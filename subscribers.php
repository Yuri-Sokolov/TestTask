<?php

include "./api/dbconnect.php";
include "./api/subscribe.php";


$emails = getEmailsFromSubscribe($conn);

function getEmailsFromSubscribe(mysqli $conn): array
{
    $emails = [];
    $sql = "SELECT email FROM subscribe ORDER BY email";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $emails[] = $row;
        }
    } else {
        echo "0 results <br/>";
    }

    return $emails;
}

try {
    $conn = createDBConnection();
}catch (error) {
    echo (error.message)
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribers</title>
</head>
<body>
    <h1>Subscribers table</h1>
    <div class="content-container container">
        <div class="container__subscribers">
            <?php foreach ($emails as $email): ?>
                <p class="subscriber-email"><?= $email ?></p>
            <?php endforeach; ?>
        </div>
        <div class="container__partners">

        </div>
    </div>
</body>
</html>