<?php if (!defined('__ERROR__')) exit; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Flux Control Panel: Critical Error</title>
		<style type="text/css" media="screen">
			body {
				margin: 10px;
				padding: 0;
				font-family: "Lucida Grande", "Lucida Sans", sans-serif;
			}
			
			p {
				font-size: 85%;
			}
			
			pre {
				font-family: Monaco, "Lucida Console", monospace;
			}
			
			.heading {
				font-family: "Gill Sans", "Gill Sans MT", "Lucida Grande", "Lucida Sans", sans-serif;
				font-weight: normal;
				border-bottom: 1px solid #ddd;
			}
			
			.backtrace {
				font-size: 85%;
				border-spacing: 0;
				border-collapse: collapse;
				background-color: #fefefe;
			}
			
			.backtrace th, .backtrace td {
				padding: 5px;
				border: 1px solid #ccc;
			}
			
			.backtrace th {
				background-color: #eee;
			}
		</style>
	</head>
	
	<body>
		<h2 class="heading">Critical Error</h2>
		
		<p>An error was encountered during the lifetime of the application.</p>
		<p>This could be due to a variety of problems, such as a bug in the application.</p>
		<p><strong>However, normally it is caused by <em>misconfiguration</em>.</strong></p>
		
		<h2 class="heading">Exception Details</h2>
		<p>Error: <strong><?php echo get_class($e) ?></strong></p>
		<p>Message: <em><?php echo htmlspecialchars($e->getMessage()) ?></em></p>
		<p>File: <?php echo $e->getFile() ?>:<?php echo $e->getLine() ?></p>
		
		<?php if (count($e->getTrace())): ?>
		<!-- Exception Backtrace -->
		<table class="backtrace">
			<tr>
				<th>File</th>
				<th>Line</th>
				<th>Function/Method</th>
			</tr>
			<?php foreach ($e->getTrace() as $trace): ?>
			<tr>
				<td><?php echo $trace['file'] ?></td>
				<td><?php echo $trace['line'] ?></td>
				<td><?php echo isset($trace['class']) ? "$trace[class]::$trace[function]" : $trace['function'] ?>()</td>
			</tr>
			<?php endforeach ?>
		</table>
		
		<h2 class="heading">Exception Trace As String</h2>
		<pre><?php echo htmlspecialchars($e->getTraceAsString()) ?></pre>
		<?php endif ?>
	</body>
</html>