<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="A Spongebob horror game - Squidward has finally had enough.">
	<link rel="icon" type="image/icon" href="icon/icon.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Sinister Squidward by Rinbash</title>
</head>
<body>
	<div id="container">
		<div id="container2">
			<div id="image">
				<p style="margin: 0;">
					<img src="images/89BwbW.jpg" class="BwbW_image">
				</p>
			</div>
			<div id="left_sec">
				<p>A downloadable game for Windows, macOS, and Linux</p>
				<div id="download_sec">
					<a href="https://rinbash.itch.io/sinister-squidward" target="_blank"><button class="download_button">Download Now</button></a>
					<p style="float: left; margin-top: 7px; margin-left: 10px; opacity: .5;">Name your own price</p>
				</div>
				<p>What would happen if Squidward finally went insane and decided to wreak havoc on the residents of Bikini Bottom?</p>
				<p>Take control of the mean cashier as he transforms into a menacing monster armed with an AK-47, then play as Sandy to save Spongebob and Patrick from this tentacle horror!</p>
				<div id="plot_div">
					<p style="margin: 0;">
						<img src="images/plot.jpg" class="plot_img">
					</p>
				</div>
				<p>Embark on the twisted journey of Squidward as he takes you through his descent into madness, caused by years of working as a Krusty Krab cashier. You play through the tormented eyes of Squidward as he commits his crimes upon the people of Bikini Bottom.</p>
				<p>But the fun doesn't stop there! Step into the air-tight suit of Sandy as she embarks on a daring mission to save Spongebob and Patrick from the clutches of Squidward's manic mind. Brace yourself for a tale filled with cinematic cutscenes and horror as you interact with fan-favourite characters including Patrick, Mr. Krabs, and the one and only Spongebob. Get ready for a thrilling experience unlike any other in the world of Bikini Bottom!</p>
				<div id="controls_div">
					<p style="margin: 0;">
						<img src="images/controls.jpg" class="controls_img">
					</p>
				</div>
				<table>
					<tr>
						<th>Move</th>
						<th>W-A-S-D</th>
					</tr>
					<tr>
						<th>Run</th>
						<th>Shift + W-A-S-D</th>
					</tr>
					<tr>
						<th>Interact</th>
						<th>E</th>
					</tr>
					<tr>
						<th>Use Flashlight</th>
						<th>F</th>
					</tr>
					<tr>
						<th>Shoot</th>
						<th>Mouse L</th>
					</tr>
					<tr>
						<th>Pause/Settings</th>
						<th>Esc</th>
					</tr>
				</table>
				<div id="about_div">
					<p style="margin: 0;">
						<img src="images/about.jpg" class="about_img">
					</p>
				</div>
				<p>This work is a horror/comedy parody of the beloved Spongebob franchise, which is owned by Viacom International Inc. Note that I do not own any rights to the characters depicted in this game, so please don't sue me Viacom :)</p>
				<p>This game was crafted with love and the Unity game engine over the course of three months. It's all in good fun, so please don't take any of the themes depicted too seriously. If you are easily offended, maybe try playing a game where you can't see a starfish getting cut in half. I hope you enjoy playing it as much as I enjoyed creating it!</p>
				<p>Have Fun!</p>
				<h1>Download</h1>
				<div id="download_sec2">
					<a href="https://rinbash.itch.io/sinister-squidward" target="_blank"><button class="download_button">Download Now</button></a>
					<p style="float: left; margin-top: 7px; margin-left: 10px; opacity: .5;">Name your own price</p>
				</div>
				<p>Click download now to get access to the following files:</p>
				<div id="windows">
					<p style="float: left; margin: 0;">Sinister Squidward v1.1.zip</p>
					<span style="float: left; margin-left: 10px; opacity: .5;">956 MB<i class="fa fa-windows" style="margin-left: 5px;"></i><i class="fa fa-linux" style="margin-left: 5px;"></i><i class="fa fa-apple" style="margin-left: 5px;"></i></span>
				</div>
				<h1>Comments</h1>
				<div id="comments_div">
					<form action="index.php" method="POST">
						<input type="text" name="content" class="input_text" placeholder="Write your comment...">
						<input type="submit" class="input_submit" value="Post comment" name="submit">
					</form>
						<?php
							if (isset($_POST['content']) && $_POST['content'] !=""){
								$content = $_POST['content'];
								$base = mysqli_connect("localhost", "root", "", "squid");
								$que1 = "INSERT INTO data VALUES('1', '$content')";
								mysqli_query($base, $que1);
								mysqli_close($base);
							}
						?>
					<br>
					<div id="comments_div2">
						<?php
							$base = mysqli_connect("localhost", "root", "", "squid");
							$que2 = "SELECT * FROM data";
							$result = mysqli_query($base, $que2);
							while($a = mysqli_fetch_array($result)){
								echo "<img src='images/frog.png'> `Your Nick`<br>".$a['content']."<br><br>";
							}
							mysqli_close($base);
						?>
					</div>
				</div>
			</div>
			<div id="right_sec">
				<video width="100%" height="160px" controls>
					<source src="video/trailer.mp4" type="video/mp4">
				</video>
				<p style="margin-top: 10px;">
					<img src="images/ss1.jpg" width="100%" height="160">
				</p>
				<p style="margin-top: 10px;">
					<img src="images/ss2.jpg" width="100%" height="160">
				</p>
				<p style="margin-top: 10px;">
					<img src="images/ss3.jpg" width="100%" height="160">
				</p>
				<p style="margin-top: 10px;">
					<img src="images/ss4.jpg" width="100%" height="160">
				</p>
				<p style="margin-top: 10px;">
					<img src="images/ss5.jpg" width="100%" height="160">
				</p>
				<p style="margin-top: 10px;">
					<img src="images/ss6.jpg" width="100%" height="160">
				</p>
				<p style="margin-top: 10px;">
					<img src="images/ss7.jpg" width="100%" height="160">
				</p>
				<p style="margin-top: 10px;">
					<img src="images/ss8.jpg" width="100%" height="160">
				</p>
			</div>
		</div>
	</div>
</body>
</html>