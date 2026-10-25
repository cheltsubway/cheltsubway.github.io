<?php
    $to = "ben.hamer@outlook.com";
    $subject = "Message from website";
    $fName = $_POST["fName"];
    $lName = $_POST["lName"];
    $email = $_POST["email"];
    $message = $_POST["issue"];
    $headers = "From: $email";

    $message = wordwrap($message,70);

    mail($to, $subject, $message, $headers);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact Us</title>
        <link rel="icon" type="image/x-icon" href="https://cdn.iconscout.com/icon/free/png-256/free-subway-logo-icon-svg-download-png-2875384.png">
        <style>
            body {
                padding-top: 2%;
                padding-left: 5%;
                padding-right: 5%;
                padding-bottom: 2%;
                font-family: Arial, Helvetica, sans-serif;
                background-color: #028940;
                color: black;
            }
            div {
                background-color: white;
                padding-left: 1%;
                padding-right: 1%;
                padding-bottom: 1%;
            }
            textarea {
                width: 80%;
                height: 100px;
                resize: none;
            }
            table {
                width: 80%%;
            }
            .button {
                background-color: #028940;
                color: white;
                font-weight: bold;
                font-size: larger;
                border: none;
            }
        </style>
    </head>

    <body>
        <div name="main">
            <div name="title" style="border-bottom: solid #028940">
                <table style="width: 100%;">
                    <tbody>
                        <tr>
                            <td style="width: 30%;">
                                <h1>Contact Us</h1>
                            </td>
                            <td>
                                <img style="width: 25%; float: right;" src="https://cdn.iconscout.com/icon/free/png-256/free-subway-logo-icon-svg-download-png-2875384.png">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <p>Thank you for submitting your issue. A response will be sent to you soon.</p>
            </div>
        </div>
    </body>
</html>