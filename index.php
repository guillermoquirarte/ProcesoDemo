<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
	<link rel="stylesheet" href="assets/css/style.css" />
    <title>Sample PHP | AWS Cloud</title>
  </head>
  <body>
	<table>
		<tr>
			<td><img src="images/startup_banner.jpg" alt=""/></td>
		</tr>
		<tr><td><h3>Instance ID:</h3><p><?php echo exec('curl http://169.254.169.254/latest/meta-data/instance-id'); ?></p></td></tr>
		<tr><td><h3>Public Hostname:</h3><p><?php echo exec('curl http://169.254.169.254/latest/meta-data/public-hostname'); ?></p></td></tr>
		<tr><td><h3>Public IP Address:</h3><p><?php echo exec('curl http://169.254.169.254/latest/meta-data/public-ipv4'); ?></p></td></tr>
		<tr><td><h3>Instance Type:</h3><p><?php echo exec('curl http://169.254.169.254/latest/meta-data/instance-type'); ?></p></td></tr>
		<tr><td><h3>Zone:</h3><p><?php echo exec('curl http://169.254.169.254/latest/meta-data/placement/availability-zone'); ?></p></td></tr>
	</table>
  </body>
</html>