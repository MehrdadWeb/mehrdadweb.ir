<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <?php
    function redirect($url)
    {

        if (!headers_sent()) {
            header("Location: $url");
        } else {
            echo "<script type='text/javascript'>
        window.location.href='$url'
        exit();
        </script>";
            echo "<noscript><meta  http-equiv='refresh' content='0;url='$url'/></noscript>";
        }
        exit;
    }
    // if($_GET['id'] == "URLShortener"){
    //     $url1="http://mehrdadweb.ir/URLShortener";
    //     redirect("$url1");
    // }
    //$_GET['id'] haman code 5 harfi mibashad ke az tarighe .htaccess be  page shortlinktolonglink.php enteghal dade shode
    echo "1: GET[id] is => ".$_GET['id']. "<br>";
    if (isset($_GET['id'])) {
        require 'config.php';
        $shortlink = "mehrdadweb.ir/";
        $shortlink .= $_GET['id'];
        $shortlink .= ".";
        echo "2: " . $shortlink . "<br>";
        $sql = "SELECT link FROM LINKSTABLE WHERE shortlink='$shortlink'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $longlink = $row["link"];
            echo "3: " . $longlink . "<br>";
            redirect("$longlink");
            $conn->close();
        } else {
            echo "4: 0 results in linkstable<br>";
        }
    }
    ?>

</body>

</html>