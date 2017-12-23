<?php


	
	
	$ime=$_REQUEST['ime'];

	$imeIsplate=$_REQUEST['imeIsplate'];
	
	$iznosIsplate=$_REQUEST['iznosIsplate'];
	
	
	
	
	

	

	$rez['rezultat']=0;
	
	
	
	$baza = mysqli_connect('sql5.freesqldatabase.com','sql578316','hM9%jX1!',"sql578316") or die("Neuspjelo spajanje na bazu!");
			
			
					$sql="INSERT INTO isplata (korisnik, nazivIsplate, iznos, vrijemeIsplate) values (?, ?, ?, NOW())";
					/* Inicijalizira statement objekt nad konekcijom */
					$stmt=mysqli_stmt_init($baza);
					/* Povezuje parametre statement objekt s upitom */
					if (mysqli_stmt_prepare($stmt, $sql)){
					/* Povezuje parametre i njihove tipove s statement objektom */
					mysqli_stmt_bind_param($stmt,'sss',$ime,$imeIsplate,$iznosIsplate);
					/* Izvršava pripremljeni upit */
					mysqli_stmt_execute($stmt);
					
					$rez['rezultat']=1;
					}
			
	
	

	
	
	

	print(json_encode($rez));
	mysqli_close($baza);
	

?>