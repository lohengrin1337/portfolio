<?php

return [
    "mode"         => "development",
    "image_path"   =>  __DIR__ . "/../../assets/img/",
    "cache_path"   =>  __DIR__ . "/../../cache/cimage/",
    "autoloader"   =>  __DIR__ . "/../../vendor/autoload.php",
    "windows2wsl"  => true,
    "shortcut" => array(
        "sepia" =>"&f=grayscale&f0=brightness, -10&f1=contrast,-20&f2=colorize,120,60,0,0&sharpen",
        "yellow" =>"&f=grayscale&f0=brightness, 20&f1=contrast,-40&f2=colorize,35,35,0,0&f3=gaussian_blur",
        "portrait" => "&w=440&crop-to-fit&aspect-ratio=!4:3&q=70&sharpen",
        "square-sm" => "&w=230&h=230&crop-to-fit&q=70&sharpen",
        "square-lg" => "&w=300&h=300&crop-to-fit&q=70&sharpen",
        "screenshot-sm" => "&w=440&h=224&crop-to-fit&crop=1200,600,left,top&save-as=jpg",
        "screenshot-lg" => "&w=610&h=224&crop-to-fit&crop=1200,430,left,top&save-as=jpg",
        "screenshot-sm2" => "&w=400&save-as=jpg&q=90&sharpen",
        "screenshot-lg2" => "&w=600&save-as=jpg&q=90&sharpen"
    ),
];
