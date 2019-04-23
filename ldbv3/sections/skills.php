<?php
$services = array("Web Design/Development"=>"<i class='fas fa-globe'></i>", "Website Updates"=>"<i class='fas fa-wrench'></i>","Database Management"=>"<i class='fas fa-database'></i>","HTML Email"=>"<i class='fas fa-envelope'></i>","Graphic Work"=>"","Campaign Help"=>"");
$marketing = array("XMPie", "Circle","MindFire","Photoshop","Illustrator","InDesign","GIMP","Litmus","MJML","HEML");
$programming = array("HTML"=>"<i class='fab fa-html5'></i>", "CSS"=>"<i class='fab fa-css3-alt'></i>", "SASS/SCSS"=>"<i class='fab fa-sass'></i>","Javascript"=>"<i class='fab fa-js'></i>","JQuery"=>"","Ruby"=>"<i class='far fa-gem'></i>","Rails"=>"","Python"=>"<i class='fab fa-python'></i>","Django"=>"","PHP"=>"","Laravel"=>"","SQL/mySQL"=>"","Bootstrap 3 & 4"=>"","MaterializeCSS"=>"","WordPress"=>"<i class='fab fa-wordpress'></i>");
?>
<section id="skills">
	<div class="container">
		<div class="row">
			<h2 class="center-align">My <span style="font-weight:900">SKILLS</span></h2>
			<hr><br>
			<div class="col s12 m6 l4 center-align">
				<i class="fas fa-cog fa-7x fa-spin"></i><br>
				<h3 class="skillHeader">Services</h3>
				<?php
					foreach ($services as $s=>$s_icon){
						echo "<div class='chip'>".$s_icon." <span class='chip-txt'>".$s."</span></div>";
					}
				?>
			</div>

			<div class="col s12 m6 l4 center-align">
		 		<i class="far fa-lightbulb fa-7x animated flash"></i><br>
		 		<h3 class="skillHeader">Marketing</h3>
				<?php
					foreach ($marketing as $m){
						echo "<div class='chip'><span class='chip-txt'>".$m."</span></div>";
					}
				?>
			</div>

			<div class="col s12 m12 l4 center-align">
				<i class="fas fa-code fa-7x"></i><br>
				<h3 class="skillHeader">Programming<span class="animated flash infinite">_</span></h3>
				<?php
					foreach ($programming as $p=>$p_icon){
						echo "<div class='chip'>".$p_icon." <span class='chip-txt'>".$p."</span></div>";
					}
				?>
			</div>

		</div>
		<div class="row center-align center-block">
			<button class="btn triBlue-btn modal-trigger hide-on-small-only" data-target="collab" style="display:none;">Interested in Collaborating?</button>
			<button class="btn triBlue-btn modal-trigger show-on-small hide-on-med-and-up center-block" data-target="collab" style="display:none;">Contact</button>
		</div>
	</div>
</section>


<!--Collaboration Modal-->
<div id="collab" class="modal bottom-sheet flow-text triBlue-Light" style="background:#74C4E2 url('../img/pattern_footer.png') no-repeat center;color:white !important;">
	<div class="modal-content">
		<div class="container">
			<h4 class="center-align" style="font-weight: 900;">Collaboration</h4>
			<div class="row">
				<div class="col">
					<p>Interested in a new small business website or personal portfolio? Or maybe you're interested in getting some of those marketing emails for an upcoming client.</p><p>Well, you are in luck!! I am a developer specializing in the design and development of web applilcations and emails. As an added bonus, I can even code your HTML email footers! If you have any questions, please do not hesitate to <a href="mailto:info@ldbennett.com">contact me.</a></p>
				</div>
			</div>
			<div class="row center-align" id="collabFollow">
				<div class="col s12">
					<h5>Follow Me:</h5>
					<a href="https://www.facebook.com/ldbennett" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>
					<a class="" href="https://www.twitter.com/leibenoit" target="_blank"><i class="fab fa-twitter-square fa-2x"></i></a>
					<a class="" href="https://www.linkedin.com/in/ldbennett" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
					<a class="" href="https://www.instagram.com/leibenoit/" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
					<a class="" href="https://www.youtube.com/user/DigitalNinjaLee" target="_blank"><i class="fab fa-youtube-square fa-2x"></i></a>
					<a href="mailto:ldbennett@gmail.com?Subject=E-mail%20from%20website%20ldbennett.com" class=""><i class="fas fa-envelope fa-2x"></i></a><br>
				</div>
			</div>
			<div class="row">
				<div class="col">
				<h6>~~~~For Those Who Are Interested~~~</h6>
				<h6>My Current Dev Environment-<br>OS: Ubuntu 17.10 | Stack: LAMP | SASS: Koala | Editor: Brackets | Browser: Chrome</h6>
				</div>
			</div>
		</div>
	</div>
</div>
