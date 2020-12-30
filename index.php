<html>
<head>
    <title></title>
</head>
<body>
    <form method="post">
        <button type=submit name=submit class="btn">Grab it!</button>
    </form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$xml = file_get_contents("https://jobboards.phenommarket.com/feeds/oninglobal-en-global-feed-indeed"); 
file_put_contents("/Users/mbrownlee/php/xmlscrape/fileContents.txt", $xml); 
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