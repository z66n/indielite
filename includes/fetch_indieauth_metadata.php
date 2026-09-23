<?php
// includes/fetch_indieauth_metadata.php - fetch indieauth metadata

function fetch_indieauth_metadata($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($ch);
    if (!$res) return false;
    $data = json_decode($res, true);
    return $data;
}