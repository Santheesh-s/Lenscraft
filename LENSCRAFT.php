
<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lenscraft";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_SESSION['email'];
$pass=$_SESSION['password'];
$sql = "SELECT USERNAME FROM login WHERE EMAIL='$email' AND PASSWORD='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $fname = $row['USERNAME'];
    echo "Welcome, " . $fname;
} else {
    echo "Error retrieving fname";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LENSCRAFT</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-warning" data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <a class="navbar-brand" href="#"><img src="logo.jpg"width="40"height="40"style="border-radius:50%"></a><marquee direction="left" behaviour ="scroll">
<p> You're Login With the Email : <?php echo htmlspecialchars($email); ?></p>
</marquee>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="LENSCRAFT.php"><h5>HOME</h5> <span class="sr-only ">(current)</span></a>
      </li>
	<li class="nav-item ">
        <a class="nav-link" href="login.php"><h5>LOGIN</h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php"><h5>CONTACT</h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="feedback.php"><h5>FEEDBACK</h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php"><h5>ABOUT</h5></a>
      </li>
    </ul>
  </div>
</nav>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#section1">Types Of Shots</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#section2">Basic Needs Of Film</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#section3">List Of Shots</a>
      </li>
    </ul>
  </div>
</nav>
<center>
<h2><font color="green">Introduction:</font></h2>

Welcome to the captivating world of Lenscraft—a pioneering company at the forefront of cinematic innovation and storytelling mastery. In this short film, we delve deep into the soul of Lenscraft, exploring its rich history, groundbreaking techniques, and unwavering commitment to pushing the boundaries of visual storytelling.

As the opening credits roll, we are transported into the heart of Lenscraft's creative hub—a bustling hive of activity where artists, technicians, and visionaries converge to breathe life into their cinematic dreams. From the meticulous design of cutting-edge lenses to the intricate choreography of camera movements, every aspect of the filmmaking process is infused with a passion for excellence and a relentless pursuit of perfection.

But Lenscraft is more than just a company—it's a beacon of inspiration, a testament to the power of human ingenuity and imagination. As we journey through the corridors of its headquarters, we are greeted by the hum of machinery, the click of cameras, and the whispered conversations of collaborators in creative communion.

In this short film, we explore Lenscraft's unique approach to storytelling, highlighting its signature visual style, innovative techniques, and unparalleled dedication to craftsmanship. Through a series of behind-the-scenes glimpses, interviews with key figures, and breathtaking footage of its most iconic projects, we uncover the secrets behind Lenscraft's success and the magic that propels its creations to new heights of cinematic excellence.

So join us as we embark on an unforgettable odyssey through the lens of Lenscraft—a journey where imagination knows no bounds, where creativity reigns supreme, and where the art of filmmaking transcends the ordinary to touch the very soul of humanity.</p>
<h2> <font color="red">Types of CAMERA SHOTS and ANGLES</font></h2>
<p>You’re looking for a list of the different camera angles in film, but you also want great examples that come with clear explanations of when and why to use specific camera shot angles. <br>Whether you want your characters to seem powerful, vulnerable, or intimate, the power of camera angles cannot be understated. <br>We’ll provide you with downloadable shot lists that feature all of the different types of camera shot angles in film. Lezgo.</p>
	  <h2><font color="red">The Complete Guide to Camera Shots</font></h2>
<p>Camera angles are very important in visual storytelling but they are just the beginning of the options available.<br> When you find yourself prepping a shot list, remember shot size, framing, focus, and camera movement.<br> When filmmakers can combine these elements into a single shot for the right reasons, that's when iconic moments in film are born.<br> If you'd like to see our entire list of camera shots in film, make sure to continue onto the next post. </p>
<br><br><br><br><br>
<div id="section1" class="container-fluid bg-success text-white" style="padding:100px 20px;">
<center><h2 style="color:red;">Types Of Shots</h2></center>
<center><br><caption><font color="green">Table of Contents</font></caption><br>
<br><table border="20" class="table-bordered table-info table-hover">

<thead class="table-dark"><tr><th>S.No</th><th>Types of Angles</th><th>Types of Camera</th></tr></thead>
<tr>
<td>1</td><td>Eye Level Shot</td><td>DSLR Cameras</td></tr>
<td>2</td><td>Low Angle Shot</td><td>MirrorLess Cameras</td></tr>
<td>3</td><td>High Angle Shot</td><td>Compact Cameras</td></tr>
<tr><td>4</td><td>Hip Level Shot</td><td>Bridge Cameras</td></tr>
<td>5</td><td>Knee Level Shot</td><td>Instant Cameras</td></tr>
<td>6</td><td>Ground Level Shot</td><td>Film Cameras</td></tr>
<tr><td>7</td><td>Shoulder Level Shot</td><td>Action Cameras</td></tr>
<td>8</td><td>Dutch Angle Shot</td><td>360 degree Cameras</td></tr>
<td>9</td><td>overhead Shot</td><td>UnderWater Cameras</td></tr>
<td>10</td><td>Aerial Shot</td><td>Medium Front Cameras</td></tr>
</table></center><br><br><br>
</div>
<div id="section2" class="container-fluid bg-success text-white" style="padding:100px 20px;">
<h2 style="color:red;">Basic Needs Of Film</h2>
<h2 style="color:cyan;">Subject:</h2>
<p>
The primary focus or central element of the shot, which could be a character, an object, or a group of subjects.
</p>
<h2 style="color:cyan;">Composition:</h2>
<p>
How the elements within the frame are arranged and positioned relative to each other. Composition can enhance the visual appeal and convey meaning or emotions.
</p>
<h2 style="color:cyan;">Background:</h2>
<p>
The area behind the main subject of the shot, which provides context and contributes to the overall atmosphere of the scene.
</p>
<h2 style="color:cyan;">Foreground:</h2>
<p>
The area in front of the main subject, which can contain additional elements that add depth and visual interest to the shot.
</p>
<h2 style="color:cyan;">Lighting:</h2>
<p>
The use of light sources to illuminate the scene and create specific moods or effects. Lighting can vary in intensity, direction, and color to evoke different emotions or enhance the visual storytelling.
</p>
<h2 style="color:cyan;">Focus:</h2>
<p>
The sharpness or clarity of the image, which can be adjusted to direct the viewer's attention to specific elements within the frame.
</p>
<h2 style="color:cyan;">Angle:</h2>
<p>
The position from which the shot is taken relative to the subject, such as eye level, high angle, or low angle. Different angles can convey different perspectives and emotions.
</p>
<h2 style="color:cyan;">Movement:</h2>
<p>
The motion within the shot, which can include camera movement, subject movement, or both. Movement can add dynamism, energy, and rhythm to the scene.
</p>
<h2 style="color:cyan;">Depth of Field:</h2>
<p>
The range of distances within the scene that appear acceptably sharp in the image. Depth of field can be shallow, with only the subject in focus, or deep, with multiple elements in focus.
</p>
<h2 style="color:cyan;">Aspect Ratio:</h2>
<p>
The proportional relationship between the width and height of the frame. Different aspect ratios can affect the composition and visual impact of the shot.
</p>
</div>
<br><br><br><br><br>
<div id="section3" class="container-fluid bg-success text-white" style="padding:100px 20px;">
<h2 style="color:red;">List Of Shots</h2><br><br>
<ul class="list-group">
<li class="list-group-item list-group-item-primary"><h3><a href="Eye Level Shot.php">Eye Level Shot</a></h3></li>
<li class="list-group-item list-group-item-primary"><h3><a href="Low Level Shot.php">Low Angle Shot</a></h3></li>
<li class="list-group-item list-group-item-primary"><h3><a href="High Level Shot.php">High Angle Shot</a></h3></li>
<li class="list-group-item list-group-item-primary"><h3><a href="Hip shot.php">Hip Level Shot</a></h3></li>
<li class="list-group-item list-group-item-primary"><h3><a href="Knee level shot.php">Knee Level Shot</a></h3></li>
<li class="list-group-item list-group-item-primary"><h3><a href="Ground shot.php">Ground Level Shot</a></h3></li>
<li class="list-group-item list-group-item-primary"><h3><a href="Shoulder level shot.php">Shoulder Level Shot</a></h3></li>
<li class="list-group-item list-group-item-primary"><h3><a href="Dutch shot.php">Dutch Shot</a></h3></li>
<li class="list-group-item list-group-item-primary"><h3><a href="Overhead shot.php">Overhead Shot</a></h3></li>
<li class="list-group-item list-group-item-primary"><h3><a href="Aerial shot.php">Aerial Shot</a></h3></li>
</ul>
</div><br><br><br>
<center><h4>Designed by LENSCRAFT</h4></center>


</body>
</html>