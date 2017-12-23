<?php
/*
	$host='sql5.freesqldatabase.com';
	$uname='sql578316';
	$pwd='hM9%jX1!';
	$db='sql578316';
	*/

	$link = mysqli_connect('sql5.freesqldatabase.com','hM9%jX1!',"sql578316");
	mysqli_select_db('sql578316', $link);
	
	
	$ime=$_REQUEST['ime'];

	$pass1=$_REQUEST['pass1'];
	$pass2=$_REQUEST['pass2'];
	
	$hash1=md5($pass1);
	

	$result = mysqli_query("SELECT ime FROM korisnici where ime LIKE '".$ime."'", $link);
	$num_rows = mysqli_num_rows($result);

	

	if($num_rows > 0){
	$rez['rezultat']=0;
	}
	
	else if($num_rows == 0){
	
	$baza = mysqli_connect('sql5.freesqldatabase.com','sql578316','hM9%jX1!',"sql578316") or die("Neuspjelo spajanje na bazu!");
			
			
					$sql="INSERT INTO korisnici (ime, lozinka, vrijemeRegistracije) values (?, ?, NOW())";
					/* Inicijalizira statement objekt nad konekcijom */
					$stmt=mysqli_stmt_init($baza);
					/* Povezuje parametre statement objekt s upitom */
					if (mysqli_stmt_prepare($stmt, $sql)){
					/* Povezuje parametre i njihove tipove s statement objektom */
					mysqli_stmt_bind_param($stmt,'ss',$ime,$hash1);
					/* Izvršava pripremljeni upit */
					mysqli_stmt_execute($stmt);
					}
			
	$rez['rezultat']=1;
	
	}
	
	
	

	print(json_encode($rez));
	mysqli_close($link);
	
?>