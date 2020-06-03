<html>
<head>
<meta charset="utf-8">
<title>test cookie</title>
</head>
<body>

<?php
if (isset($_COOKIE["user"]))
    echo "welcome " . $_COOKIE["user"] . "!<br>";
else
    echo "no cookies<br>";
?>

</body>
</html>