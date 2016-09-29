<html>
<head>
<title>M.Sadan</title>
</head>
<body bgcolor="#000000">


<table align="center" height="800" border="0" bgcolor="#000000">

<td width="100" bgcolor="000000" valign="top">
<table align="center" width="100" height="25" border="1" bgcolor="gray">

<tr><td><center><font color="blue" face="Kristen ITC"><b><a href="awal.php">HOME</a></b></font></center></td>
</tr>
<tr><td><center><font color="blue" face="Kristen ITC"><b><a href="balok.php">BALOK</a></b></font></center></td>
</tr>
<tr><td><center><font color="blue" face="Kristen ITC"><b><a href="bola.php">BOLA</a></b></font></center></td>
</tr>
<tr><td><center><font color="blue" face="Kristen ITC"><b><a href="prisma.php">PRISMA</a></b></font></center></td>
</tr>
<tr><td><center><font color="blue" face="Kristen ITC"><b><a href="tabung.php">TABUNG</a></b></font></center></td>
</tr>
<tr><td><center><font color="blue" face="Kristen ITC"><b><a href="kerucut.php">KERUCUT</a></b></font></center></td>
</tr>
<tr><td><center><font color="blue" face="Kristen ITC"><b><a href="limas.php">LIMAS</a></b></font></center></td>
</tr>
</td></table>
<td width="100" height="25">


<table align="center" height="800" border="2" bgcolor="white">


<tr>
<td height="200" colspan="2" align="center" bgcolor="#600000">
<img src="headerwow3.jpg" height="200" width="1000">
</tr><td width="100">




<table width="800" height="600" border="2">
<tr>
<td width="800"><center><?php
$r=$_POST['Jari-jari'];
$s=$_POST['garis_pelukis'];
$t=$_POST['tinggi_kerucut'];
$v=1/3*22/7*$r*$r*$t;
$lp=22/7*$r*$r+22/7*$r*$s;
echo" jari-jari=$r<br>
garis_pelukis=$s<br>
tinggi_kerucut=$t<hr>
volume=$v<br>
luas_permukaan=$lp
	 ";
?></center>
</td>
</tr>
</table>

<td width="350" valign="top">
<img src="/">



</td>

<tr>
<td  colspan="3" height="130"><center><table>
<tr><td>nama</td><td><input name=nama type=text></td></tr>
<tr><td>komentar</td><td><input name=komentar type=text></td></tr>
</table>
<input type=submit value=publikasi>
</form>
</td>

