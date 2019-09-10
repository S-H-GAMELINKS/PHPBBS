<?php
    header('Content-Type: text/event-stream');
    header('Cache-Control: no-store');

while (true) {

    printf("data: %s\n\n", json_encode([
        'text' => 'Hello World',
    ]));

    ob_end_flush();
    flush();
    sleep(1);
}
