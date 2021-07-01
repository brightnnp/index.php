
<?php
    $curlSession = curl_init();
    curl_setopt($curlSession, CURLOPT_URL, 'https://ip-api.com/#124.121.22.124');
    curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
    curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);

    $jsonData = json_decode(curl_exec($curlSession));
    $lat = $jsonData->lat;
    $lon = $jsonData->lon;
    echo json_encode(array(
        'lat' => $lat,
        'lon' => $lon
    ));
    curl_close($curlSession);
?>