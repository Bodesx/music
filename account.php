<?php
include "sessionstart.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>View</title>
	<link rel="stylesheet" href="account.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body>

<header>
	<div>  <img src="assets/muzira-logo-icon/muzira-headphone2.png" width="200px" height="25px"
                    > <a href="index.html" id="home" ><span>Home</span></a> </div>
	<!-- <div><a href="index.html">Home</a></div> -->
	<div><a href="logout.php"> <i class="far fa-user"></i> <button>Log Out</button> </a></div>
</header>
	<a href="songs/index.php"><button id="button">UPLOAD</button></a>

	<div class="alb">
		<?php 
			include "header.php";
		 $sql = "SELECT * FROM audios ORDER BY id DESC";
		 $res = mysqli_query($connect, $sql);

		 if (mysqli_num_rows($res) > 0) {
		 	while ($audio = mysqli_fetch_assoc($res)) { 
		 ?>
		 	
	        <audio id="audio" src="songs/uploads/<?=$audio['audio_url']?>" 
	        	   controls >
	        	
	        </audio>

	    <?php 
	     }
		 }else {
		 	echo "<h1>Empty</h1>";
		 }

		 ?>


	</div>
	
	<?php   
$songs = mysqli_query($connect, 'SELECT * FROM audios');

?>

<table>
    <thead>
        <td>S/N</td>
        <td>Songs</td>
        <Td>Action</Td>

    </thead>
    <tbody>
        <?php
        foreach ($songs as $song): ?>
    <tr>
        <td><?= $song['id'] ?></td>
        <td><?= $song['audio_url'] ?></td>
    
        <td>
        <a id="del" href="songs/delete-audio.php?id=<?= $song['id'] ?>"> <i class="far fa-times-circle"></i></a>

        </td>

    </tr>
    <?php 
    endforeach;
     ?>
    </tbody>
</table>

</body>
</html>