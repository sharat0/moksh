<?php
function sendMail($mail, $user_nm, $user_mail, $user_ph, $msg)
{

    $toEmail = $mail;
    $fromName = 'Moksh Fenster';
    $fromEmail = 'learnersbooth@gmail.com';
    $subject = 'New customer inquiry via Contact Us page';

    $htmlMessage = "
          <!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: rgb(231, 231, 231);
        }

        #home {
            min-width: 40%;
            width: 40%;
            margin-left: 30%;
        }

        #home img {
            width: 100%;
            height: 100%;
        }

        p {
            font-family: arial, helvetica, sans-serif;
            line-height: 140%;
            text-align: justify;
            word-wrap: break-word;
            padding: 10px;
            font-size: 1.1rem;
        }

        strong {
            display: block;
            padding: 10px 0 20px 0;
        }

        #home-text {
            background-color: #EDEBFF;
            padding: 50px 0;
        }

        #contact {
            background-color: #fff;
            padding: 30px 0;
        }

        .flex {
            display: flex;
        }

        .left {
            width: 50%;
        }

        .right {
            padding: 5% 10px;
        }

        #name {
            font-size: 1.6rem;
        }

        .right p {
            margin: 0;
            padding: 0;
            font-size: 1.1rem;
        }
        @media (min-width: 481px) and (max-width: 768px) {
            #home {
                min-width: 60%;
                width: 60%;
                margin-left: 20%;
            }
        }

        @media (min-width: 320px) and (max-width:780px){
            #home {
                min-width: 80%;
                width: 80%;
                margin-left: 10%;
            }
            .flex{
              display: block;
              text-align: center;
            }
            .left, .right{
              width: 100%;
            }
        }

    </style>
</head>

<body>
    <div id='home'>
        <div id='home-text'>
            <p>
                <strong>Hey there! </strong>
                I hope this email finds you well. I am writing to inform you that a new customer has tried to reach Moksh Fenster through the Contact Us page on our website.
</p>
<p>The customer, whose name is <b>$user_nm</b>, filled out the Contact Us form on our website on [Date]. They left their contact information, including their email address and phone number, along with a message inquiring about our product offerings and services.
</p>
<p>We take every inquiry from our customers seriously and strive to respond as quickly and thoroughly as possible. We appreciate your assistance in ensuring that we can provide a timely and effective response to this customer's inquiry.
</p>
<p>Please let me know if you have any questions or require any further information. Thank you for your attention to this matter.
            </p>

            <p>
                <strong>Details:</strong>
            </p>
            <p>
                <b>Name:</b> $user_nm
            </p>
            <p>
                <b>Email:</b> $user_mail
            </p>
            <p>
                <b>Phone:</b> $user_ph
            </p>
            <p>
                <b>Message:</b> $msg
            </p>

            
            <p>
                <strong>Best Regards,</strong>
                <strong style='font-family: Bitter; ' id='name'>Moksh Fenster</strong>
                    <p>+91-9986558189</p>
                    <p>mokshfensterh@gmail.com</p>
            </p>
        </div>
        
    </div>
</body>

</html>";
    $data = array(
        "sender" => array(
            "email" => $fromEmail,
            "name" => $fromName
        ),
        "to" => array(
            array(
                "email" => $toEmail,
            )
        ),
        "subject" => $subject,
        "htmlContent" => $htmlMessage
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.sendinblue.com/v3/smtp/email');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    $headers = array();
    $headers[] = 'Accept: application/json';
    $headers[] = 'Api-Key: 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';
    $headers[] = 'Content-Type: application/json';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($ch);
    curl_close($ch);


    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
}

?>