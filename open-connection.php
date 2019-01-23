<html>
<head>
<title>Optima</title>
<link rel="stylesheet" href="/learning/styles/transition.css" media="screen" type="text/css">
</head>
<body class="bgwhite">
<p><blockquote>
&lt;?php
<br>
$connectstr_dbhost = '';
<br>
$connectstr_dbname = '';
<br>
$connectstr_dbusername = '';
<br>
$connectstr_dbpassword = '';
<br>
&nbsp;
<br>
foreach ($_SERVER as $key =&gt; $value) {
<br>
&nbsp;   if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
<br>
&nbsp;       continue;
<br>
&nbsp;   }
<br>
&nbsp;   
<br>
&nbsp;   $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
<br>
&nbsp;   $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
<br>
&nbsp;   $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
<br>
&nbsp;   $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
<br>
}
<br>
&nbsp;
<br>
echo "dbhost: ".$connectstr_dbhost."&lt;br&gt;";
<br>
echo "dbname: ".$connectstr_dbname."&lt;br&gt;";
<br>
echo "dbusername: ".$connectstr_dbusername."&lt;br&gt;";
<br>
echo "dbpassword: ".$connectstr_dbpassword."&lt;br&gt;";
<br>
&nbsp;
<br>
$link = mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,$connectstr_dbname);
<br>
&nbsp;
<br>
if (!$link) {
<br>
&nbsp;   echo "Error: Unable to connect to MySQL." . PHP_EOL;
<br>
&nbsp;   echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
<br>
&nbsp;   echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
<br>
&nbsp;   exit;
<br>
}
<br>
&nbsp;
<br>
echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
<br>
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
<br>
&nbsp;
<br>
mysqli_close($link);
<br>
?&gt;
<br>

</blockquote></p></body></html>
