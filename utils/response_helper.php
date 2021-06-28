<?php
function responseDefault($status_code, $data, $message) {
    header('Content-Type: application/json');

    echo '{
        "status_code": "'.$status_code.'",
        "data": '.$data.',
        "message": "'.$message.'"
    }';
}