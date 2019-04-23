<?php
include 'src/login.php';

$sql = "SELECT * FROM port WHERE display = 1 ORDER BY position ASC";
$result = $conn->query($sql) or die();
?>

<section id="portfolio">
	<div class="container">
		<div class="row">
		<h2 class="center-align">My <span style="font-weight: 900">WORK</span></h2>
		
			<?php
				$c1=0;
				$c2=0;
				if ($result->num_rows >0){
    			while($row = $result->fetch_assoc()){?>
				<div class="col s12 m6 l4 <?php echo ($c1 <= 3 ? 'r'.$c2 : '') ?>">
					<div class="card medium hoverable card">
						<div class="card-image">
							<img class="activator" src="img/p/<?= $row['image'];?>" alt="<?= $row['title']?> Preview"/>
						</div>
						<div class="card-content">
							<span class="card-title"><?= $row['title']?></span>
							<p><?= $row['description'];?></p>
						</div>
						<div class="fadeout"></div>
						<div class="card-reveal">
							<span class="card-title"><?= $row['title']?><i class="material-icons right">close</i></span>
							<p><?= $row['description'];?></p>
							<?php 
								$tags = explode(",", $row['tags']);
								foreach($tags as $t) {    
										echo "<div class='chip'>".$t."</div>";    
								}	
							?>
							<br><br>
							<a href="<?= $row['link'];?>" target="_blank" style="float:right;"><span><i class="fas fa-external-link-alt animated rubberBand " style="color:white;"></i></span></a>
						</div>
						<div class="card-action right-align" style="display:none;">
							<span style="margin-right: 1em;"><i class="fas info-circle activator"></i></span>
							<a href="<?= $row['link'];?>" target="_blank"><span><i class="fas fa-external-link-alt animated rubberBand"></i></span></a>
						</div>
					</div>
				</div>		
			<?php
					$c1++;																 	
					if ($c1 == 3){
						$c2++;
						$c1 = 0;
					}
					}
				} 
			?>
		</div>
	</div>
</section>
