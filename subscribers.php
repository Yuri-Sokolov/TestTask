<?php

require_once "./api/dbconnect.php";

$conn = createDBConnection();


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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribers</title>
    <link rel="stylesheet" href="./stylesSubscribers.css">
</head>

<body>
    <h1 class="pageTitle">Subscribers table</h1>
    <div class="content-container container">
        <div class="container__subscribers">
            <h3 class="container__subscribers-title container__title">Emails from "Subscribe" form</h3>
            <div id="emailContainer" class="container__subscriber-emails-list">
                <?php foreach ($emails as $email): ?>
                    <p class="subscriber-email"><?= $email["email"] ?></p>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="container__partners">
            <h3 class="container__partners-title container__title">Request the data of the selected email from the "Partners" database</h3>
            <form class="container__partners-form requestForm" action="" id="requestForm">
                <input name="email" class="requestForm__input" id="requestFormInput" type="email" placeholder="<-- Choose an email (just click on it) or enter" />
                <label for="requestFormInput" class="requestForm__input-error" id="emailError"></label>
                <button class="requestForm__button" id="requestFormSubmit" type="submit">Запросить данные</button>
            </form>
            <div class="response">
                <h3 class="response__title container__title">Database response</h3>
                <div id="responseOk" class="response__ok hidden">
                    <div class="responseOk__item">
                        <p class="responseOk__table" id="companyName">Company name</p>
                        <p class="responseOk__table-value" id="companyNameValue"></p>
                    </div>
                    <div class="responseOk__item">
                        <p class="responseOk__table" id="email">Email</p>
                        <p class="responseOk__table-value" id="emailValue"></p>
                    </div>
                    <div class="responseOk__item">
                        <p class="responseOk__table" id="phone">Phone</p>
                        <p class="responseOk__table-value" id="phoneValue"></p>
                    </div>
                    <div class="responseOk__item">
                        <p class="responseOk__table" id="description">Description</p>
                        <p class="responseOk__table-value" id="descriptionValue"></p>
                    </div>
                </div>
                <h3 id="responseNotOk" class="response__not-ok error-title hidden">This email is not registered in the database</h3>
            </div>
        </div>
    </div>
    <script src="./script/scriptSubscribers.js"></script>
</body>

</html>