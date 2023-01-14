<!DOCTYPE html>
<html>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<?php include '../template/_imports.php';?>
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
	<script type='text/javascript'>
		function openModal(id) {
			document.getElementById(id).style.display="block";
		}

		function closeModal(id) {
			document.getElementById(id).style.display="none";
		}
	</script>
	<head>
		<title>TEAMCORP - Home</title>
	</head>
	<body class='w3-animate-opacity'>
		<?php include '../template/_header.php';?>
		
		<!-- Modal -->		
		<?php include '../template/_modals.php';?>
		
		<div class='w3-container' style='margin-top:180px'>
			<div class='w3-row-padding tta-header-card'>
				<div class='w3-row w3-white'>
					<div class='w3-half w3-padding'>
						 <div class='w3-padding w3-card'>
							<p><span class='tta-bold tta-text-blue w3-xlarge'>TEAMCORP</span> <span class='tta-bold tta-text-blue w3-medium'>CONSULTANCY INCORPORATED</span></p>
							<h6><i class='tta-text-blue w3-xlarge'></i> Mechanical Design</h6>
							<h6><i class='tta-text-blue w3-xlarge'></i> Electrical</h6>
							<h6><i class='tta-text-blue w3-xlarge'></i> Plumbing</h6>
							<h6><i class='tta-text-blue w3-xlarge'></i> Fire Protection</h6>
							<h6><i class='tta-text-blue w3-xlarge'></i> Structural</h6>
							<h6><i class='tta-text-blue w3-xlarge'></i> IES Energy Modelling</h6>
							<h6><i class='tta-text-blue w3-xlarge'></i> Testing and Commissioning</h6>
						</div>
						
						<div class='w3-padding w3-card w3-margin-top'>
							<h4 class="front-label">Who are <span class='tta-text-blue'><b>TEAMCORP</b></span><span class='tta-text-orange'><b><sup>+</sup></b></span></h4>
							<div class='w3-padding'>
								<p class='tta-paragraph'>We are a team of Professionals with many years of experience working with some of Asia's best Clients and Consultants.</p>
								<p class='tta-paragraph'>We believe the Role of the 21st Century Engineer is changing fundamentality; therefore, we strive to design in reliability and quality and drive out the cost.</p>
								<p class='tta-paragraph'>Using <span class=' tta-index-font tta-bold tta-text-blue'>TEAMCORP</span><span class='tta-bold tta-index-font tta-text-orange'><sup>+</sup></span>, we offer our Clients an engineering solution based purely on ingenuity derived from total experience.</p>
								<p class='tta-paragraph'>We believe in a collaborative team that works to generate great team spirit and total professionalism. As working together should be enjoyable whilst promoting a wealth of positive experience.</p>
								<p class='tta-paragraph'>As a collective, we understand that engineering solutions must be sustainable, and that environmental energy and life cycle costings are considered key factors in our design. </p>
								<p class='tta-paragraph'>Our pledge, inhouse expertise offers solutions that meet international design and quality standards with a Fee that is based on Commitment.</p>
								<p class='tta-paragraph'>We understand the Clients Commercial objectives and Capital expenditures requirements. We work together to offer respect for the Program whilst giving value engineering in case of conservatism</p>
							</div>	
						</div>
					</div>
					
					<div class='w3-half w3-padding-xlarge'>
						<div class='w3-center'>
							<h2 class='tta-bold header-title'>DESIGN AND BIM</h2>
						</div>
						<?php include '../template/_modal_buttons.php';?>
					</div>
				</div>
			</div>
			<div style='margin-top:350px'>
				<img src='../img/tc-background.png' />
			</div>
		</div>
		<?php include '../template/_footer.php';?>
	</body>
</html>
