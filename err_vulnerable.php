<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script src="js/html5.js"></script>
<title>Server Conf. Error Vulnerable</title>
</head>
<body>
<div id="main">
    <center><h1>Find Sum</h1>

    <form action="<?php echo($_SERVER["SCRIPT_NAME"]);?>" method="GET">


        <input type="text" id="query" name="q" placeholder="Number-1"></p>


        <input type="text" id="query1" name="v" placeholder="Number-2"></p>
        <button type="submit" name="form" value="submit">Add</button>
    </form>
    <br />
<?php
if(isset($_GET["q"]) && isset($_GET["v"]))
{
    $n1 = $_GET["q"];
    $n2 = $_GET["v"];
    $a = $n1 + $n2;
    echo "<u>Answer</u> : <h3>" . $a. "</h3><br>" ;
}
?>
</html>
