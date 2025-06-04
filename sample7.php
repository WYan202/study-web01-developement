<?php
$array=['Apple' => 'りんご',
        'Lemon' => 'ぶどう',
        'Grape' => 'トマト'];

    foreach($array as $key => $value){
        print("英語：".$key."<br>");
        print("日本語：".$value."<br>");
    }
?>