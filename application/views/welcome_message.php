<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<script type="application/javascript" src="js/jquery.min.js"></script>

	<script src="js/easytimer.min.js"></script>
	<script type="application/javascript" src="js/script.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/examples.min.css">

	<meta charset="utf-8">
	<title>Welcome to Time Tracker</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	div{
		padding:5px;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Time Tracking System</h1>

	<div id="chronoExample">
		<div>Task</div><div> <select name="task" id="task">
				<?php
				foreach ($tasks as $row)
				{
					echo '<option value ="'.$row['id'].'">'.$row['title'].'</option>';
				}?>
			</select></div>
		<div class="values">00:00:00</div>
		<div>
			<button class="startButton">Start</button>
			<button class="pauseButton" >Pause</button>
			<button class="stopButton">Stop</button>
			<button class="resetButton">Reset</button>
		</div>
	</div>


	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>