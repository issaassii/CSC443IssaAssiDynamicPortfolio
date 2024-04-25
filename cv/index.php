<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('Location: ../login.php');
        exit();
    }
?>

<html>
	<head>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<link rel="stylesheet" href="/dynamic/fe/css/cv.css">
	</head>
	<body>
    	<?php require_once('../fe/core/nav.php'); ?>
		<div class="main">
			<div class="sidebar">
				<div class="image"></div>
				<div class="issa-text" id="side">
					<span class="mini-title">EDUCATION</span><br>
					<div class="mini-body">BS in Computer Science at Lebanese American University</div>
					<div class="mini-body">IB Diploma Certificate at Wellspring Learning Community</div>
				</div>
				<div class="issa-text" id="side">
					<span class="mini-title">CONTACT INFO</span><br>
					<div class="mini-body"><b>Phone</b>: <br>+96176029385</div>
					<div class="mini-body"><b>Email</b>: <br>issa.assi@lau.edu</div>
					<div class="mini-body"><b>LinkedIn</b>: <br><a target="_blank" href="https://linkedin.com/in/issaassi">in/issaassi</a></div>
					<div class="mini-body"><b>Github</b>: <br><a target="_blank" href="https://github.com/issaassii">issaassii</a></div>
				</div>
			</div>
			<div class="issa-content">
				<div class="issa-title">
					<span id="issa-title">Issa Assi</span><br>
					<span id="issa-title2">Computer Science Student</span>
				</div>
				<div class="issa-text">
					<span class="mini-title">ABOUT ME</span><br>
					<div class="mini-body">My name is Issa Assi, a second year student at Lebanese American University studying Computer Science. I grew up with computers and technology all my life which built my interest in this topic. I love football. </div>
				</div>
				<div class="issa-text">
					<span class="mini-title">EXPERIENCE</span><br>
					<div class="mini-body">I have been an intern at many different associations providing my valuable skills and insights when needed. I also played golf for Kuwait national team KGNT.</div>
				</div>
				<div class="issa-text">
					<span class="mini-title">SKILLS</span><br>
					<div class="mini-body">Java</div>
					<div class="mini-body">JavaScript</div>
					<div class="mini-body">Python</div>
					<div class="mini-body">C++</div>
					<div class="mini-body">SQL</div>
					<div class="mini-body">CSS</div>
					<div class="mini-body">HTML</div>
					<div class="mini-body">PHP</div>
					<div class="mini-body">MatLab</div>
					<div class="mini-body">Golf</div>
				</div>
			</div>
		</div>
	</body>
</html>