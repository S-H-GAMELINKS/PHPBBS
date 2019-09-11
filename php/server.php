<?php

    $all_text = file_get_contents('text.json');

    $array = json_decode($all_text);

    $array[] = [
        'No' => count($array),
        'Content' => $_REQUEST['post']
    ];

    file_put_contents('text.json', json_encode($array));

    header('Location: /', true, 301);
?>