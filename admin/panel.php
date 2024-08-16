<!DOCTYPE html>
<html>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
	<?php include '../template/_imports.php';?>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script>
    function openCity(cityName) {
      var i;
      var x = document.getElementsByClassName("city");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      document.getElementById(cityName).style.display = "block";  
    }

    function getText() {
      alert('hahaha');
      let x = document.getElementById('testtxt').value;
      alert(x);
    }

    setTimeout(() => {
      openCity('about');
    }, 5);
  </script>
  <head>
    <title>TEAMCORP - Panel</title>
  </head>
  <body class="w3-animate-opacity">
    <?php include '../template/_header.php';?>

    <div class="w3-container" style="margin-top:180px">
      <div class="w3-card w3-white tta-header-card">
        <div class="w3-container">
          <h2 class="w3-padding header-title">Control Panel</h2>
        </div>
        <div class="w3-row-padding">
          <div class="w3-col">
            <div class="w3-white w3-card w3-padding">
              <p>Tabs are perfect for single page web applications, or for web pages capable of displaying different subjects. Click on the links below.</p>
            </div>
          </div>
        </div>

        <div class="w3-bar w3-black">
          <button class="w3-bar-item w3-button" onclick="openCity('home')">Home</button>
          <button class="w3-bar-item w3-button" onclick="openCity('about')">About</button>
          <button class="w3-bar-item w3-button" onclick="openCity('services')">Services</button>
          <button class="w3-bar-item w3-button" onclick="openCity('projects')">Projects</button>
          <button class="w3-bar-item w3-button" onclick="openCity('contacts')">Contacts</button>
        </div>

        <div id="home" class="w3-container city">
          <div class="w3-row-padding">
            <h2 class="w3-padding header-title">Home</h2>
          </div>
          <div class="w3-row-padding">
            <div class="w3-half">
              <div class="w3-white w3-card w3-padding">
                <p>We are a engineering consultancy incorporated in Mandaluyong City in 2015, Philippines. We are specialist in MEPF engineering design, BIM modelling, Testing and Commissioning.</p>
                <p>Our team are experts in their respective field having work both local and overseas. We are well versed in using Philippines Codes and Standards,  BS, US, AS, Singapore, HK and Vietnam Standards.</p>
                <p>Our Team has 35 years from overseas with international consultants.</p>
                <p>Our team are Consultant Engineers, Architects, CAD and BIM Technicians who fully understand the needs of the prospective Architects, Engineers and Consultants. </p>
                <p><i>You may contact us by filling the contact form provided on our website. We can assure you we shall response in the earliest time.</i></p>
              </div>
            </div>
            <div class="w3-half">
              <div class="w3-card-8">
                <img src="../img/about-us.jpg" style="width:100%">
              </div>
            </div>
          </div>
        </div>

        <div id="about" class="w3-container city" style="display:none">
          <div class="w3-row-padding">
            <h2 class="w3-padding header-title">About</h2>
          </div>
          <div class="w3-row-padding">
            <div class="w3-half">
              <div class="w3-white w3-card w3-padding">
                <textarea id="testtxt"></textarea>
                <button type="submit" id="testbtn" onclick="getText()" class="w3-btn w3-right tta-blue">Submit</button>
                <p>We are a engineering consultancy incorporated in Mandaluyong City in 2015, Philippines. We are specialist in MEPF engineering design, BIM modelling, Testing and Commissioning.</p>
                <p>Our team are experts in their respective field having work both local and overseas. We are well versed in using Philippines Codes and Standards,  BS, US, AS, Singapore, HK and Vietnam Standards.</p>
                <p>Our Team has 35 years from overseas with international consultants.</p>
                <p>Our team are Consultant Engineers, Architects, CAD and BIM Technicians who fully understand the needs of the prospective Architects, Engineers and Consultants. </p>
                <p><i>You may contact us by filling the contact form provided on our website. We can assure you we shall response in the earliest time.</i></p>
              </div>
            </div>
            <div class="w3-half">
              <div class="w3-card-8">
                <img src="../img/about-us.jpg" style="width:100%">
              </div>
            </div>
          </div>
        </div>

        <div id="services" class="w3-container city" style="display:none">
          <div class="w3-row-padding">
            <h2 class="w3-padding header-title">Services</h2>
          </div>
          <div class="w3-row-padding">
            <div class="w3-half">
              <div class="w3-white w3-card w3-padding">
                <p>We are a engineering consultancy incorporated in Mandaluyong City in 2015, Philippines. We are specialist in MEPF engineering design, BIM modelling, Testing and Commissioning.</p>
                <p>Our team are experts in their respective field having work both local and overseas. We are well versed in using Philippines Codes and Standards,  BS, US, AS, Singapore, HK and Vietnam Standards.</p>
                <p>Our Team has 35 years from overseas with international consultants.</p>
                <p>Our team are Consultant Engineers, Architects, CAD and BIM Technicians who fully understand the needs of the prospective Architects, Engineers and Consultants. </p>
                <p><i>You may contact us by filling the contact form provided on our website. We can assure you we shall response in the earliest time.</i></p>
              </div>
            </div>
            <div class="w3-half">
              <div class="w3-card-8">
                <img src="../img/about-us.jpg" style="width:100%">
              </div>
            </div>
          </div>
        </div>

        <div id="projects" class="w3-container city" style="display:none">
          <div class="w3-row-padding">
            <h2 class="w3-padding header-title">Projects</h2>
          </div>
          <div class="w3-row-padding">
            <div class="w3-half">
              <div class="w3-white w3-card w3-padding">
                <p>We are a engineering consultancy incorporated in Mandaluyong City in 2015, Philippines. We are specialist in MEPF engineering design, BIM modelling, Testing and Commissioning.</p>
                <p>Our team are experts in their respective field having work both local and overseas. We are well versed in using Philippines Codes and Standards,  BS, US, AS, Singapore, HK and Vietnam Standards.</p>
                <p>Our Team has 35 years from overseas with international consultants.</p>
                <p>Our team are Consultant Engineers, Architects, CAD and BIM Technicians who fully understand the needs of the prospective Architects, Engineers and Consultants. </p>
                <p><i>You may contact us by filling the contact form provided on our website. We can assure you we shall response in the earliest time.</i></p>
              </div>
            </div>
            <div class="w3-half">
              <div class="w3-card-8">
                <img src="../img/about-us.jpg" style="width:100%">
              </div>
            </div>
          </div>
        </div>

        <div id="contacts" class="w3-container city" style="display:none">
          <div class="w3-row-padding">
            <h2 class="w3-padding header-title">Contacts</h2>
          </div>
          <div class="w3-row-padding">
            <div class="w3-half">
              <div class="w3-white w3-card w3-padding">
                <p>We are a engineering consultancy incorporated in Mandaluyong City in 2015, Philippines. We are specialist in MEPF engineering design, BIM modelling, Testing and Commissioning.</p>
                <p>Our team are experts in their respective field having work both local and overseas. We are well versed in using Philippines Codes and Standards,  BS, US, AS, Singapore, HK and Vietnam Standards.</p>
                <p>Our Team has 35 years from overseas with international consultants.</p>
                <p>Our team are Consultant Engineers, Architects, CAD and BIM Technicians who fully understand the needs of the prospective Architects, Engineers and Consultants. </p>
                <p><i>You may contact us by filling the contact form provided on our website. We can assure you we shall response in the earliest time.</i></p>
              </div>
            </div>
            <div class="w3-half">
              <div class="w3-card-8">
                <img src="../img/about-us.jpg" style="width:100%">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div style="margin-top:350px">
				<img src="../img/tc-background.png" />
			</div>
    </div>
    

    <?php include '../template/_footer.php';?>
  </body>
</html>
