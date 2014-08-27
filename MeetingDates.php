<?php
    $firstDate =$_GET['dateOne'];
    $secondDate =$_GET['dateTwo'];;
    $dateOne = new DateTime($firstDate);
    $dateTwo =  new DateTime($secondDate);
if (($dateOne<$dateTwo)==true) {
    $startDate =$dateOne ;
}
else{
    $startDate = $dateTwo;
}
    $diff = floor((strtotime($secondDate)-strtotime($firstDate))/(60*60*24));
$bool = true;
echo "<ol>\n";
for ($i = 0; $i < abs($diff); $i++) {
        $startDate->modify('+1 day');
    if(($startDate->format('D')=='Thu')){
        echo "<li>".$startDate->format("d-m-y")."</li>\n";
        $bool=false;
    }
}
echo "</ol>\n";
if ($bool=false) {
echo "<h2>No Thursdays</h2>";
}
?>