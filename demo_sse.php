<?php
// Header สำหรับ SSE (ต้องมีเสมอ)
header("Content-Type: text/event-stream");
header("Cache-Control: no-cache");
header("Connection: keep-alive");

// ส่งข้อมูลทุก 1 วินาที
$counter = 1;

while (true) {

    $time = date("H:i:s");

    echo "data: Update #$counter - Time: $time\n\n";
    ob_flush();
    flush();

    $counter++;

    // หน่วงเวลา 1 วินาที
    sleep(1);
}