<html>
<head>
    <title></title>
</head>
<body>
    <form method="post">
        <button type=submit name=submit class="btn">Grab it!</button>
    </form>
<?php
$getFile = "https://jobboards.phenommarket.com/feeds/oninglobal-en-global-feed-indeed";
$setFile = "/Users/mbrownlee/php/xmlscrape/fileContents.txt";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$xml = file_get_contents($getFile); 
file_put_contents($setFile, $xml); 
echo "Success";
}

?>
</body>
<style>
    .btn {
        background-color: purple;
        color: white;
    }
    </style>
</html>