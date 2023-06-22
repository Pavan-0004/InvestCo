<!DOCTYPE html>
<html lang="en">
<head>
    <!--  <meta charset="UTF-8"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>METROLIFE INVESTMENT</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<?php
		$host = "localhost";
        $dbusername = "metrolife_DB";
        $dbpassword = "Coffee$1Time";
        $dbname = "metrolife_DB";
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
$sql = "SELECT * from login";
$result = mysqli_query($conn, $sql);
?> 

<body>
<div class="container">
<table class = "left" align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="5"></th> 
		</tr> 
			  <th class="username"> USERS </th> 
              <th class="btc"> Gold</th>
			  <th class="gold"> Farm </th> 
			  <th class="petrol"> Oil </th> 
			  <th class="wheat"> Pharmaceuticals </th> 
			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> 
        <td class="username"><?php echo $rows['username']; ?></td> 
        <td class="gold"><?php echo $rows['gold']; ?></td>
		<td class="btc"><?php echo $rows['farm']; ?></td> 
		<td class="petrol"><?php echo $rows['oil']; ?></td> 
		<td class="wheat"><?php echo $rows['pharmaceuticals']; ?></td> 
		</tr> 
	<?php 
        } 
          ?> 

	</table>

    
        <form action="admindb.php" class="right" method="post" >
            <h1 class="text-center">METROLIFE INVESTMENT </h1>
            <h3 class="animate__animated animate__backInLeft">Investment System </h3>
            <p class="blanco">UserName <input type="text" placeholder="Enter  UserName" name="username" required></p>
            <p class="blanco">Change in Gold<input type="decimal" placeholder="Enter Change in Gold" name="cig" required></p>
			<p class="blanco">Change in Farm<input type="decimal" placeholder="Enter Change in Farm" name="cib" required></p>
			<p class="blanco">Change in Petrol<input type="decimal" placeholder="Enter Change in Petrol" name="cip" required></p>
			<p class="blanco">Change in pharmaceuticals<input type="decimal" placeholder="Enter Change in pharmaceuticals" name="ciw" required></p>
            <input class="btn btn-success" type="submit" value="Proceed" >
        </form>

    </div>
    


</body>

</html>
