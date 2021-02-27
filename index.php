<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

</head>
<body>

<?php
function censor($string, array $badWords, $character = '*') {
    $newBadWords = [];
    foreach ($badWords as $word) {
        $newBadWords[$word] = str_repeat($character, strlen($word));
    }
    return strtr($string, $newBadWords);
}
$badWords = ['stupid', 'fool you', 'foolish','Mani sha','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
$text = 'Hi Mani sha! How are you?';

$output = censor($text, $badWords, '#');
echo $output;

?>
</body>
</html>