?>
<a id="mysubmissions"></a>
<!--Header-->
<div id="header">
	<div id="nav">
		<a href="http://rafaeldejongh.com" target="_blank"><img src="http://files.gamebanana.com/bitpit/logo_18.png" id="logo" alt="Rafael De Jongh"/></a>
<ul>	
	<li><a href="#mysubmissions" target="_self">SUBMISSIONS</a></li>
	<li><a href="#aboutme" target="_self">ABOUT</a></li>
	<li><a href="#contactme" target="_self">CONTACT</a></li>
</ul>
	</div>
</div>
<!--Submissions-->
<div class="article">
	<div id="submissions">
		<h1>Submissions</h1>
		<?= $d["_aModules"]["_sSkinSubmissions"] ?>
		<?= $d["_aModules"]["_sWipSubmissions"] ?>
		<?= $d["_aModules"]["_sModelSubmissions"] ?>
		<?= $d["_aModules"]["_sTextureSubmissions"] ?>
	</div>
</div>
<!--About-->
<a id="aboutme"></a>
<div class="article">
  <div id="about">
	<div id="aboutcontent">
	<h1>About Me</h1>
	<?= $d["_aModules"]["_sStaffProfile"] ?>
	<img src="http://files.gamebanana.com/bitpit/rafael.jpg" class="imgcv" alt="Rafael De Jongh"/>
	<p id="meinfo">
		My name is Rafaël De Jongh, I am 20 years old and I am a 2D & 3D artist.<br>
		I've been doing game modification for a good six years now and I'm specialized in Texturing.<br>
		Besides game modification I also really enjoy making websites with HTML5, CSS3, PHP and MySQL.<br>
		<br>
		More information about myself can be found in my Curriculum Vitae.
	</p>
	<a href="http://rafaeldejongh.com/images/CV/curriculumvitae.pdf" target="_blank" class="button">View CV Online</a>
    <a href="http://rafaeldejongh.com/images/CV/curriculumvitae.docx" class="button">Download CV</a>
	</div>
  </div>
</div>
<!--Contact-->
<a id="contactme"></a>
<div class="article">
	<div id="contact">
	<h1>Contact Me</h1>
	  <?= $d["_aModules"]["_sPmMe"] ?>
	  <?= $d["_aModules"]["_sPostAddFormRequester"] ?>
	  <?= $d["_aModules"]["_sProfileMessages"] ?> 
	</div>
</div>

<div id="footer">
	<p>Copyright © 2015 | Rafaël De Jongh | <a href="http://rafaeldejongh.com" target="_blank">www.rafaeldejongh.com</a> | info@rafaeldejongh.com</p>
</div>
<?