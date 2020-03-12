
<?php

if ($_POST['bmihin'])
{

	luettele(); 
}
	
function luettele()
{
    $n = $_POST['mihin'];
    for($i=1; $i<=$n; $i++)
	{
	if($i< $n)
	{
	echo "$i ";
	}
	else
	{
	echo "$i";
  }
}
}

if ($_POST['bmistamihin'])
{
   
	mistaMihin(); 
}

function mistaMihin()
{
	 $n = $_POST['mista'];
	$nn = $_POST['mihin2'];
	
	for($i=$n; $i<=$nn; $i++)
	{
	if($i< $nn)
	{
	echo "$i ";
	}
	else
	{
	echo "$i"."\n";
  }
}
}

if ($_POST['btahtia'])
{
   
	tahtia(); 
}

function tahtia()
{
	$n = $_POST['tahtia'];
   echo str_repeat("*",$n);
}

if ($_POST['bnelio'])
{
   
	nelio(); 
}
function nelio()
{
	$n = $_POST['nelio'];
    for($i=0;$i<$n;$i++)
{   
    for($ii=0;$ii<$n;$ii++)
    {
        echo "*";  
    }  
    echo "<br>";  
}
}
if ($_POST['bsuorakaide'])
{
   
	suorakaide(); 
}


function suorakaide()
{
	 $n = $_POST['korkeus']; 
	$nn = $_POST['leveys']; 
	
	for($i=0;$i<$n;$i++)
	{   
	echo "*";
	
		for($ii=1;$ii<$nn;$ii++)
		{
        echo "*";   
    } 
    echo "<br>";  
}
}

if ($_POST['bkolmio'])
{
   
	kolmio(); 
}
function kolmio()
{
	$n = $_POST['kolmio'];
    for ($i = 0; $i < $n; $i++) 
    { 
        for($j = 0; $j <= $i; $j++ ) 
        { 
            echo "* "; 
        } 
        echo "<br>"; 
    } 
}

if ($_POST['bsumma'])
{
   
	summa(); 
}

function summa()
{	 $alku = 0;
	$loppu = $_POST['summa'];


         $summa = 0;
         for ($i = $alku; $i <= $loppu; $i++) {
                     $summa += $i;
          }

          echo  $summa; 
}

if ($_POST['bkertoma'])
{
   
	kertoma(); 
}


function kertoma()
{
	 $kertoma = $_POST['kertoma'];
	 
    $apu = 1; 
    for ($i = 1; $i <= $kertoma; $i++){ 
      $apu = $apu * $i; 
    } 
    echo $apu; 
} 


?>


</body>
</html>