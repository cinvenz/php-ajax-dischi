<?php

include __DIR__ . '/includes/db/data.php';

header('Content-Type: application/json');
echo json_encode($arrDiscs);
