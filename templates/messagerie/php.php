<?php
    session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    }
    else
    {
    // Mauvaise méthode
    http_response_code(405);
    echo json_encode(['message' => 'Mauvaise méthode'])
    ;
}
   