<html>

<body>
    <form method="post">
        <button type=submit name=submit class="btn">Grab it!</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $getFile = "https://jobboards.phenommarket.com/feeds/oninglobal-en-global-feed-indeed";
        $find = "&nbsp";
        $place = " ";
        $setFile = "/Users/mbrownlee/php/xmlscrape/fileContents.txt";
        $xml = file_get_contents($getFile);
        $txtFile = str_replace($find, $place, $xml);
       
        file_put_contents($setFile, $txtFile);
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