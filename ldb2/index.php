<!DOCTYPE html>
<!--
* This is my personal webpage for Lee Bennett. It showcases all of my work
* that I have done in terms of web design thus far.  Enjoy!
-->
<html lang="en-US">
<head>
<?php include 'src/_meta_head.php';?>
</head>
<body>
  <header>
	<h1 style="display:none;">Lee Bennett, Pittsburgh web developer</h1>
    <div class='container'>
      <div class='row'>
        <div class='col'>
          <div class='header-content text-center'>
              <img src='img/lb_logo.png' class='img-fluid' alt='Lee Bennett Logo' longdesc='Logo created by Gauzong Yang'/>
              <p class='lead'><b> **<span class='hidden-md-down'>hover over</span><span class='hidden-lg-up'>click</span> clouds to see my work**</b></p>
              <p class='lead text-uppercase'><small>click <i class="fa fa-cog fa-spin fa-fw"></i> when visible</small></p>
          </div>
        </div>
      </div>
    </div>
  </header>
<br/>
<?php
include 'src/login.php';
include 'src/titleDisplay.php';
$sql = "SELECT * FROM portOld ORDER BY position ASC";
$result = $conn->query($sql) or die();
$portfolio = array(
    'position'=>array(),
    'title'=>array(),
    'des'=>array(),
    'link'=>array(),
    'image'=>array()
)
?>
<div class="container animated bounceInUp">
  <div class='row'>
  <?php
  $count = 0;
  if ($result->num_rows >0){
    while($row = $result->fetch_assoc()){
      $portfolio[] = array('position'=> $row['position'], 'title'=> $row['title'], 'des'=> $row['description'], 'link'=> $row['link'], 'image'=>$row['image']);
  ?>
    <div class="col-xs-12 col-sm-6 col-lg-4">
      <div class="hovereffect floating f<?php echo $count%4;?>" onclick="void(0)">
        <img class="img-fluid" src="img/c/cloud<?php echo $count%4;?>.png?v3" alt="Portfolio Cloud Image" tabindex="<?php echo $count+1;?>"/>
        <div class="overlay">
          <h2><?php echo titleDisplay($row['title']); ?></h2>
          <small><?php echo $row['title'];?></small><br/>
          <a data-toggle='modal' data-target='#Modal' class='getImg'>
              <div class='pos hidden-xs-up'><?php echo $row['position']; ?></div>
              <i class="fa fa-cog fa-spin fa-2x fa-fw"></i>
          </a>
        </div>
      </div>
    </div>
  <?php
      $count++;
    }
  }
  $json_port = json_encode($portfolio);
  mysqli_close($conn);
  ?>
    <!--Contact "Cloud" START-->
    <div class="col-xs-12 col-sm-6 col-lg-4">
      <div class="hovereffect floating f0" onclick="void(0)">
        <img class="img-fluid" src="img/c/cloud0.png?v3" alt="Portfolio Cloud Image">
        <div class="overlay">
          <h2>contact.me</h2>
          <small>contact me</small><br/>
          <a data-toggle='modal' data-target='#contact_modal' onclick='void(0)'>
              <i class="fa fa-cog fa-spin fa-2x fa-fw"></i>
          </a>
        </div>
      </div>
    </div>
    <!--Contact Cloud END-->

  </div>

</div>

<!--FOOTER-->
<footer class="footer-distributed">
    <div class="footer-right">
        <p>Follow Me:</p>
        <a href="https://www.linkedin.com/in/ldbennett" target='_blank'><i class='fa fa-linkedin'></i></a>
        <a href="https://www.facebook.com/LDBennett" target='_blank'><i class="fa fa-facebook"></i></a>
        <a href="https://www.twitter.com/leibenoit/" target='_blank'><i class="fa fa-twitter"></i></a>
        <a href="https://www.instagram.com/leibenoit/" target='_blank'><i class="fa fa-instagram"></i></a>
        <a href="https://www.youtube.com/user/DigitalNinjaLee" target='_blank'><i class="fa fa-youtube"></i></a>
    </div>
    <div class="footer-left">
      <p>Lee Bennett <i class='fa fa-copyright'></i> 2016 - 2017</p>
      <p class='muted'><a data-toggle='modal' data-target='#contact_modal' onclick='void(0)'><i class='fa fa-envelope-square'></i> contact</a></p>
    </div>
</footer>
<!--END FOOTER-->

<!--Picture Modal -->
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="PictureModal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h3 class='modal-header-txt modal-title' id='PictureModal'><!--Placeholder--></h3>
          <button type="button" class="close float-right" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body text-center">
          <a class='image-link' href='#placeholder.png' target='_blank'><img src= '#placeholder.png' class='modal-pic img-fluid img-rounded box-shadow--4dp' alt='Website Picture'/></a>
          <hr class='modal-hr'/>
          <p class='modal-body-inner'>
            <a data-toggle='modal' data-target='#contact_modal' class='btn btn-primary btn-block'><i class='fa fa-user'>  contact.me</i></a>
          </p>
      </div>
      <div class='modal-footer'>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">close</button>
          <a class='btn btn-primary' href='' role='button' target='_blank'> link.to </a>
      </div>
    </div>
  </div>
</div>

<!--Contact Modal -->
<div class="modal fade" id="contact_modal" tabindex="-1" role="dialog" aria-labelledby="EventModal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h2 id='EventModal' class='modal-title'>CONTACT ME</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <div class='row'>
        <div class="col col-lg-7">
          <form id="contact_form" method="post" target="_blank" action="contact/contact_submit.php">
            <fieldset>
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="First and Last Name (Or Username)"/>
              </div>
              <div class="form-group">
                <label for="email">E-Mail Address:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="EX: something@else.com" required/>
              </div>
              <div class="form-group">
                <label for="subject">Reason for Contact:</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="EX: Website Question, Twitch Request, etc." required/>
              </div>
              <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" rows="10" id="message" name="message" placeholder="Message/Description here" required></textarea>
              </div>
              <script src='https://www.google.com/recaptcha/api.js'></script>
              <div class="g-recaptcha" data-sitekey="6LdcZhAUAAAAAC2HOHBs03VrSEfmHSN89COTkQ93"></div>
              <br/>
              <button type="button" class='btn btn-default'data-dismiss="modal">close</button>
              <input id="submit" name="submit" type="submit" value="submit.information" class="btn btn-primary"/>
            </fieldset>
          </form>
        </div>
        <br/>
        <div class="col col-lg-5">
          <div class="list-group">
              <a class="list-group-item" href="mailto:ldbennett@gmail.com?Subject=E&#45;mail%20from%20website%20ldbennett&#46;com"><i class="fa fa-envelope-square fa-2x fa-fw" aria-hidden="true"></i>&nbsp; email.me</a>
              <a class="list-group-item" href="https://www.linkedin.com/in/ldbennett" target='_blank'><i class="fa fa-linkedin-square fa-2x fa-fw" aria-hidden="true"></i>&nbsp; linked.in</a>
              <a class="list-group-item" href="http://www.facebook.com/LDBennett" target='_blank'><i class="fa fa-facebook-square fa-2x fa-fw" aria-hidden="true"></i>&nbsp; fb.pro</a>
              <a class="list-group-item" href="https://www.twitter.com/leibenoit" target='_blank'><i class="fa fa-twitter-square fa-2x fa-fw" aria-hidden="true"></i>&nbsp; tw.pro</a>
              <a class="list-group-item" href="https://www.instagram.com/leibenoit" target='_blank'><i class="fa fa-instagram fa-2x fa-fw" aria-hidden="true"></i>&nbsp; ig.pro</a>
              <a class="list-group-item" href="https://www.youtube.com/user/DigitalNinjaLee" target='_blank'><i class="fa fa-youtube-square fa-2x fa-fw" aria-hidden="true"></i>&nbsp; yt.cha</a>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <?php include 'src/analyticstracking.php';?>
  <!--
  **********JAVASCRIPT************
  -->
  <!-- Core JQuery & Bootstrap JS Files-->
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

  <!--Custom JS Files-->
  <script>
      //Script for Modal
      $('.getImg').click(function(){
          var array = <?php echo $json_port ?>;
          var pos = $(this).find('.pos').text();
          var apos = pos-1;
          var image = "img/p/" + array[apos].image;
          $('.modal-pic').attr('src', image);
          $('.image-link').attr('href',array[apos].link);
          $('.modal-header-txt').text(array[apos].title);
          $('.modal-body-inner').html(array[apos].des);
          $('.modal-footer .btn').attr('href',array[apos].link);
      });
  </script>
</body>
</html>
