<?php
    include_once('conn.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->
    <style>
        /* CSS Counter */

body{
	/* font-family: 'Lobster Two', cursive; */
}

.kunjungan{
	/* background-color: red; */
	/* height: 400px; */
	/* width: 100%; */
	margin: auto;
	/* margin-top: 100px; */
	font-size: 20px;
	text-align: center;
    /* text-color:white; */
}
    </style>
    <title>Document</title>
</head>
<body>
    
<?php
		$query = mysqli_query($connection,"SELECT * FROM kunjungan ORDER BY id_kunjungan DESC");
	?>
	
	<div class="kunjungan">

    <table class="table" style="color:white;">
        <?php if(mysqli_num_rows($query)>0){ ?>
            <?php
                $no = 1;
                while($data = mysqli_fetch_array($query)){
        ?>
        <thead>
            <tr>
                <th scope="col" style="color:white;">Jumlah Pengunjung</th>
            </tr>
        </thead>
        <tbody>
            <th><?php echo $jml_baru;?></th>
        </tbody>
    </table>

	</div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>