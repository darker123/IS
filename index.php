<!DOCTYPE html>
<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}
th, td {
    border-bottom: 1px solid #ddd;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
	<title>HOLA</title>
</head>
<body>
<h1>hola mundo</h1>
<?php  
	$a = 'hola mundo desde php';
	echo $a;
?>
<table style="width:50%">
  <tr>
    <th>Name</th>
    <th colspan="1">Telephone</th>
  </tr>
  <tr>
    <td>Bill Gates</td>
    <td>55577854</td>
  </tr>
</table>
</body>
</html>