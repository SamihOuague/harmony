<?php
$data = ["hello" => "Ok"];
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
if ((isset($_POST["prenom"])
    && isset($_POST["nom"])
    && isset($_POST["telephone"])
    && isset($_POST["email"])) 
    && !(empty($_POST["prenom"])
    && empty($_POST["nom"])
    && empty($_POST["telephone"])
    && empty($_POST["email"]))) {
    $email = 'api@harmony.getunlatch.com';
    $password = 'J6ZyirX26';

    $postData = array(
        'email' => $email,
        'password' => $password
    );

    $ch = curl_init('https://harmony.getunlatch.com/api/v1/key/');

    curl_setopt_array($ch, array(
        CURLOPT_POST => TRUE,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
        CURLOPT_POSTFIELDS => json_encode($postData)
    ));

    $response = curl_exec($ch);

    if($response === FALSE){
        die(curl_error($ch));
    }

    $array =  explode('"', $response);
    $token =  $array[3];

    $mediaref = "1484861048";



    if (isset($_POST["adresse"])){ $adresse = $_POST["adresse"]; }
    else { $adresse = ""; }

    if (isset($_POST["ville"])){ $ville = $_POST["ville"]; }
    else { $ville = ""; }

    if (isset($_POST["zip"])){ $zip = $_POST["zip"]; }
    else { $zip = ""; }

    if (isset($_POST["prenom"])){ $prenom = $_POST["prenom"]; }
    else { $prenom = ""; }

    if (isset($_POST["nom"])){ $nom = $_POST["nom"]; }
    else { $nom = ""; }

    if (isset($_POST["telephone"])){ $telephone = $_POST["telephone"]; }
    else { $telephone = ""; }

    if (isset($_POST["email"])){ $email = $_POST["email"]; }
    else { $email = ""; }

    if (isset($_POST["sujet"])){ $sujet = $_POST["sujet"]; }
    else { $sujet = ""; }

    if (isset($_POST["message"])){ $message = $_POST["message"]; }
    else { $message = ""; }

    if (isset($_POST["origine"])){ $origine = $_POST["origine"]; }
    else { $origine = ""; }

    $date = date('Y-m-d H:i');

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://test-harmony.getunlatch.com/api/v1/lead-import/');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"programIds\":[1600849836],\"MediaReference\":\"".$mediaref."\",\"address\":\"".$adresse."\",\"city\":\"".$ville."\",\"postal_code\":\"".$zip."\",\"country\":\"FR\",\"lastname\":\"".$nom."\",\"firstname\":\"".$prenom."\",\"company\":\"\",\"job\":\"\",\"mobile_phone\":\"".$telephone."\",\"landline_phone\":\"\",\"job_phone\":\"\",\"email\":\"".$email."\",\"subject\":\"".$sujet."\",\"message\":\"".$message."\",\"nationality\":\"\",\"origin\":\"".$origine."\",\"budget\":\"\",\"budget_max\":\"\",\"budget_min\":\"\",\"civility\":\"\",\"nbRoomsDesired\":[0],\"request_date\":\"".$date."\",\"newsletterAccepted\":true,\"custom_data\":{}}");

    $headers = array();
    $headers[] = 'Accept: application/json';
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'Authorization: Bearer '.$token;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    } else {
        echo json_encode($result, JSON_PRETTY_PRINT);
    }
    curl_close($ch);
} else {
    echo json_encode(["message" => "invalid data"], JSON_PRETTY_PRINT);
}