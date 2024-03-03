<?php
$year=readline("enter year");
if(($year%4==0 &&$year%100!=0)||($year%400==0))
{
    echo"leap year";
}
else{
    echo"normal year";
}

?>