<!DOCTYPE html>
<html>
<head><title>Grab Site</title>
<link rel="stylesheet" href="site_style.css">

</head>
<body>

<table align="center" border="0" width="30%" height="20%" class="table_corner">
<form method="get" action="">
<tr align="center">
<td> Enter Site:<input type=url name="site" placeholder="http://example.com" required /> </td></tr>
<tr align="center"><td> <input type="submit" value="grab" class="button1"/>
<input type="reset" value="clear" class="button1 button2"/></td></tr>
<div>
<table align="bottom" class="table1">
<tr><td><?php include 'grab_site.php'; ?></td></tr>
</table>
<div>

</form>
</table>
</body>
</html>

