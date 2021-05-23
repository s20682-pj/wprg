<html>
<head>
<body>
<?php
if (!$db = mysqli_connect("localhost", "root", "root","wpr")) {
	exit("Nie udało się połączyć");
}
else {
	echo "Udało się połączyć";
}
echo "</br>";
$query = 'select * from test';
if(!$result = mysqli_query($db,$query)){
    echo "Nie udało się";
}
else{
    echo "Udało się";
}
echo "</br>";
while($rows = mysqli_fetch_row($result)){
    foreach ($rows as $row){
        echo $row;
        echo "</br>";
    }
}

if ($result = mysqli_query($db, $query)) {
    $row_cnt = mysqli_num_rows($result);
    printf("Jest %d rekordów\n", $row_cnt);
}

echo "</br>";
    
$result = mysqli_query($db,$query);
while($r=mysqli_fetch_array($result))
{
echo $r['id']."<br/>";
}


echo "</br>";
$insert = 'insert into test (id) values (4)';
if(mysqli_query($db, $insert)){
    echo "Udało się dodać rekord";
} else{
    echo "ERROR";
}
echo "</br>";
$rowsno = mysqli_affected_rows($db);
echo "Liczba dodanych rekordów: $rowsno"
?>
</body>
</head>
</html>
