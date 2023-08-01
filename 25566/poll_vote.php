<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);

//put content in array
$array = explode("||||", $content[0]);
$yes = $array[0];
$no = $array[1];

if ($vote == 0) {
  $Матвей = $Матвей + 1;
}
if ($vote == 1) {
  $Саша = $Саша + 1;
}
if ($vote == 2) {
    $Гера = $Гера + 1;
  }
  if ($vote == 3) {
    $Коля = $Коля + 1;
  }

//insert votes to txt file
$insertvote = $Матвей."||".$Саша $Гера."||".$Коля;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<h2>Result:</h2>
<table>
<tr>
<td>Матвей:</td>
<td><img src="poll.gif"
width='<?php echo(100*round($Матвей/($Саша+$Матвей+$Гера+$Коля),2)); ?>'
height='20'>
<?php echo(100*round($Матвей/($Саша+$Матвей+$Гера+$Коля),2)); ?>%
</td>
</tr>
<tr>
<td>Саша:</td>
<td><img src="poll.gif"
width='<?php echo(100*round($Саша/($Саша+$Матвей+$Гера+$Коля),2)); ?>'
height='20'>
<?php echo(100*round($Саша/($Саша+$Матвей+$Гера+$Коля),2)); ?>%
</td>
</tr>
<tr>
<td>Гера:</td>
<td><img src="poll.gif"
width='<?php echo(100*round($Гера/($Саша+$Матвей+$Гера+$Коля),2)); ?>'
height='20'>
<?php echo(100*round($Гера/($Саша+$Матвей+$Гера+$Коля),2)); ?>%
</td>
</tr>
<tr>
<td>Коля:</td>
<td><img src="poll.gif"
width='<?php echo(100*round($Коля/($Саша+$Матвей+$Гера+$Коля),2)); ?>'
height='20'>
<?php echo(100*round($Коля/($Саша+$Матвей+$Гера+$Коля),2)); ?>%
</td>
</tr>
</table>