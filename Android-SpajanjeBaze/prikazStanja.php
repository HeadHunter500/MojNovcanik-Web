<?php

$baza = mysqli_connect('sql5.freesqldatabase.com','sql578316','hM9%jX1!',"sql578316") or die("Neuspjelo spajanje na bazu!");

$ime=$_REQUEST['ime'];


$ukupanIznos=0;

$upit = "SELECT COUNT(korisnik) FROM uplata WHERE korisnik LIKE '".$ime."'";
				$rezultat = mysqli_query($baza, $upit);
				$brojRedova = mysqli_num_rows($rezultat);
				
				
				
				
				if($brojRedova == 0) 
				{
					$iznosUplata=0;
				}
				
				
				//ako postoji zbraja uplate
				
				else
				{
					$upitU = "SELECT SUM(iznos) FROM uplata WHERE korisnik LIKE '".$ime."'";
					$rezultatU = mysqli_query($baza, $upitU);
					$sumaUplata = mysqli_fetch_array($rezultatU);
					
					
					$iznosUplata = $sumaUplata[0];
				
				}
				
					
				//provjerava da li korisnik postoji, stavlja isplate na 0
				
				$upit1 = "SELECT COUNT(korisnik) FROM isplata WHERE korisnik LIKE '".$ime."'";
				$rezultat1 = mysqli_query($baza, $upit1);
				$brojRedova1 = mysqli_num_rows($rezultat1); 
				
				
				
				
				if($brojRedova1 == 0) 
				{
					$iznosIsplata=0;
				}
				
				//ako postoji zbraja isplate
				
				else
				{
					$upitI = "SELECT SUM(iznos) FROM isplata WHERE korisnik LIKE '".$ime."'";
					$rezultatI = mysqli_query($baza, $upitI);
					$sumaIsplata = mysqli_fetch_array($rezultatI);
					
					$iznosIsplata = $sumaIsplata[0];
				}
				
				
				$ukupanIznos = $iznosUplata - $iznosIsplata;





$output['iznos']=$ukupanIznos;

print(json_encode($output));
mysqli_close($baza);
?>