<!DOCTYPE HTML>
<?php 
						error_reporting(0);
session_start();
include("mysql_connect.inc.php");
						$dbc = sprintf("Select property_name, property_photo, property_value, property_area, property_desc from property;");
						$result = mysql_query($dbc);
									if(mysql_num_rows($result)>0){
									list($name,$image,$price,$area,$desc) = mysql_fetch_row($result);
									}
									
									
									$dbc2 = sprintf("Select support_id, support_title from support limit 5;");
						$result = mysql_query($dbc2);
									if(mysql_num_rows($result)>0){
									list($id, $title) = mysql_fetch_row($result);
									}
						
						?>
<html>

<?php include("include/header.php"); ?>
		<!-- Page Wrapper -->
		<div id="wrapper" class="container">

			<!-- Banner Content -->
<?php include("include/banner.php");?>

			<!-- Marketing Content -->
			<div id="marketing" class="row">

				<div class="3u">
					<section class="box">
					<?php


?>
						
						
						<?php 

						$username=$_SESSION['username'];
						if(isset($username)){
						echo '<h2>Member</h2>
						<p class="subtitle">Welcome</p>';
	echo '<table class="style1">
        <thead><tr>
          <td>'.$_SESSION['username'].'</td></tr>
		  
          <tr><td>
<ul class="style1">
		<li> <a href=salelet.php>For Sale / To let</a></li>
		<li> <a href="record.php" >My transaction records</a></li>
		<li> <a href="user.php" >My Account</a></li>
		<li> <a href=logout.php>Logout</a></li>
		</ul>
		 </td></tr>
		
		  <br\>
		  
	<tr><td></td></tr></thead></table>';
	
						}
						else{
						echo '<h2>Member</h2>
						<p class="subtitle"></p>';
						include("login.html");
					
						          echo'<tr><td><input class="button" type="reset" value="Reset"></td><td><input class="button" type="submit" value="Submit"></td>
        </tr></thead>
      </table>
	  
	  <br/>
      Do not have an account? <a href="register.php">click here</a> to register
    </form>
  </body>
</html>';}?>
					</section>
				</div>
				<div class="3u">
					<section class="box">
						<h2>News</h2>
						<p class="subtitle"></p>
						<ul class="style1">
							<li><a href="#"></a></li>
					
						</ul>
						<p><a href="#" class="button"><span>Read More</span></a></p>
					</section>
				</div>
				<div class="3u">
					<section class="box">
						<h2>Stocks Status</h2>
						<p class="subtitle"></p>
						<ul class="style1">
							<li><a href="#"></a></li>
							
						</ul>
						<p><a href="#" class="button"><span>Read More</span></a></p>
					</section>
				</div>
				<div class="3u">
					<section class="box">
						<h2>Support</h2>
						<p class="subtitle"></p>
						
						
						<ul class="style1">
						<?php 
						$sql="select * from support limit 5"; //use limit 5 show 5 supports on the homepage only
							$result=mysql_query($sql);
								while($row=mysql_fetch_row($result)){
								echo "<li><a href='#'>$row[1]</a></li>";
								}
						?>
							
						
						</ul>
						<p><a href="support.php" class="button"><span>More Support</span></a></p>
					</section>
				</div>
			
			</div>



			<!-- Page Content -->
			<div id="page" class="row">
				
				<!-- Content Area -->
				<div id="content" class="8u skel-cell-important">
					
					<!-- Main Content Area -->
					<section>
						<h2>Featuring Property</h2>
						
					
						<p><a href="#"><img src="<?php echo 'uploads/'.$image ;?>" alt=""></a></p>
						<p><strong><?php echo $name;?></strong>,<br/> 
						<?php echo $desc;?>
						</p>
						<ul>
						<li><strong>$<?php echo $price; ?></strong></li>
						<li><strong><?php echo $area; ?>(m2)</strong></li>
						</ul>
						<p><a href="#" class="button"><span>Read More</span></a></p>
					</section>
					
					
					<!-- Two Column Area -->
					<section>
						<div id="two-column" class="5grid">
							<div class="row">
								<div class="6u">
									<section>
						<h2>Latest's Property</h2>
						
					
						<p><a href="#"><img src="<?php echo 'uploads/'.$image ;?>" alt=""></a></p>
						<p><strong><?php echo $name; ?></strong>
						<br/><?php echo $desc;?></p>
						<ul>
						<li><strong>$<?php echo $price; ?></strong></li>
						<li><strong><?php echo $area; ?>(m2)</strong></li>
						</ul>
						<p><a href="#" class="button"><span>Read More</span></a></p>
					</section>
								</div>
								<div class="6u">
									<section>
						<h2>Recommended Property</h2>
						
					
						<p><a href="#"><img src="<?php echo 'uploads/'.$image ;?>" alt=""></a></p>
						<p><strong><?php echo $name; ?></strong>
						<br/><?php echo $desc;?></p>
						<ul>
						<li><strong>$<?php echo $price; ?></strong></li>
						<li><strong><?php echo $area; ?>(m2)</strong></li>
						</ul>
						<p><a href="#" class="button"><span>Read More</span></a></p>
					</section>
								</div>
							</div>
						</div>					
					</section>			

	
				</div>
	
				<!-- Sidebar Area -->
				<div id="sidebar" class="4u">
				
					<!-- Sidebar Section 1 -->
					<section id="box1">
						
						<!-- Two Column Content Area -->
						<div class="5grid">
							<div class="row">
								<div class="6u">
									<section>
										
									</section>
								</div>
								<div class="6u">
									<section>
									
									</section>
								</div>
							</div>
						</div>
						<!-- Two Column Content Area Ends Here -->
					
					</section>
	
					<!-- Sidebar Section 2 -->
					<section id="box2">
						<h2>Agents</h2>
						<ul class="style2">
						
						<?php $sql="select * from agent LIMIT 1";
							$result=mysql_query($sql);



								while($row=mysql_fetch_row($result)){

									echo '<li class="first">';
									echo "<p><a href='#'><img src='images/$row[5]' alt='' height='80' width='80'>$row[1],
									<br> Tel: $row[2] </a></p>
									
									</li>";
								}
						?>
						</ul>
							
							
								
							
						<p><a href="agents.php" class="button"><span>More Agents</span></a></p>
					</section>


				</div>
				
			</div>
			<!-- Page Content -->


		</div>
		<!-- Wrapper Ends Here -->


	
		<!-- Copyright -->
		<div id="copyright">
			<div class="container">
			</div>
		</div>
		
</body>
</html>
