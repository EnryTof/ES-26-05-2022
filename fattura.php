<DOCTYPE! html>
<html>
<head >

</head>

<?php
$prodotto1=$_POST['prodotto1']; //servono per prendere i dati inseriti dall'utente
$prodotto2=$_POST['prodotto2']; //così tu sti dicendo:vai a prendere la variabile ['prodotto1'] del form e chiamala $prodotto1
$prodotto3=$_POST['prodotto3'];

$qta1=$_POST['qta1'];             // uguale ai commenti di prima per qta e per il resto
$qta2=$_POST['qta3'];                 
$qta3=$_POST['qta3'];

$PS1=$_POST['PS1'];
$PS2=$_POST['PS2'];
$PS3=$_POST['PS3'];

$iva1=$_POST['iva1'];
$iva2=$_POST['iva2'];
$iva3=$_POST['iva3'];

 
$TotMerce1=$qta1*$PS1;                              //crei una variabile TotMerce
$TotMerce2=$qta2*$PS2;
$TotMerce3=$qta3*$PS3;


if($iva1=10)                         
$somma1=$somma1+$TotMerce1;
else{    
$somma2=$somma2+$TotMerce1;
}

if($iva2=10)
$somma1=$somma1+$TotMerce2;
else{    
$somma2=$somma2+$TotMerce2;
}

if($iva3=10)
$somma1=$somma1+$TotMerce3;
else{    
$somma2=$somma2+$TotMerce3;
}

//con l'isutruzione di sotto stampi una nuova tabella
//va tutto in fila, da sinistra verso destra, ti crea una tabella in fila, l'importante è avere lo stesso numero di attributi

 
echo"<table border=2px align=center>           //stampo una tabella con tutte le variabili prese nel form 
<tr>
<td>prodotto</td>                            
<td>quantità</td>              
<td>prezzo singolo</td>
<td>costo tot merce</td>
<td>IVA %</td>
</tr>


<tr>
<td>$prodotto1</td>
<td>$qta1</td>
<td>$PS1</td>
<td>$TotMerce1</td>
<td>$iva1</td>
</tr>

<tr>
<td>$prodotto2</td>
<td>$qta2</td>
<td>$PS2</td>
<td>$TotMerce2</td>
<td>$iva2</td>
</tr>

<tr>
<td>$prodotto3</td>
<td>$qta3</td>
<td>$PS3</td>
<td>$TotMerce3</td>
<td>$iva3</td>
</tr>

<tr>
<td>tot merce</td>
<td> 10 </td>
<td> $somma1</td>
</tr>

<tr>
<td>tot merce</td>
<td> 22 </td>
<td> $somma2</td>
</tr>

</table>"

?>


</html>
