#!/usr/bin/php
<?php
echo "Test de validare a unui CNP: ";
$cnp=fgets(STDIN);
$sex=$cnp[0]; 
$an=$cnp[1];
$cnp[2];
$luna=$cnp[3];
$cnp[4];
$ziua=$cnp[5];
$cnp[6]; 
$judet=$cnp[7];
$cnp[8];
$NNN=$cnp[9];
$cnp[10];
$cnp[11]; 
$C=$cnp[12];
$suma=0; $uncod="279146358279";
for ($i = "0"; $i <= "11"; $i++)
		$suma += $cnp[$i] * $uncod[$i];
	$control_bun = $suma % 11;
while ($cnp!=0) {
if (strlen($cnp)-1!="13")
      echo "Acest CNP nu este valid,incearca altul(esti naspa) ! \n";
elseif ($sex<"1" || $S>"2")
      echo "Acest CNP nu este valid,incearca altul(esti naspa) ! \n";
elseif ($an>"99")
      echo "Acest CNP nu este valid,incearca altul(esti naspa) ! \n";
elseif ($luna<"1" || $luna>"12")
      echo "Acest CNP nu este valid,incearca altul(esti naspa) ! \n";
elseif ($ziua<"1" || $ziua>"31")
      echo "Acest CNP nu este valid,incearca altul(esti naspa) ! \n";
elseif ($judet<"1" || $judet>"46")
      echo "Acest CNP nu este valid,incearca altul(esti naspa)! \n";
elseif ($NNN<"1" || $NNN>"999")
      echo "Acest CNP nu este valid,incearca altul(esti naspa) ! \n";
elseif ($C1=="10" && $C!="1" || $C1!="10" && $C!=$C1)
     echo "CNP-ul nu este valid,incerca altul(esti naspa)! \n";
else
      echo "Acest CNP este valid(esti un boss) ! \n";
$cnp=fgets(STDIN);
}
?>