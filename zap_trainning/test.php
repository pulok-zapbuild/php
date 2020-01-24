<?php       
$string="attention";

for($i=0;$i<strlen($string);$i++)
{
    $set=0;
    if($i==0)
        echo $string[$i];
    else
    {
        for($j=0;$j<$i;$j++)
        {
            
            if($string[$i]==$string[$j])
            {
                $set=1;
                
            }
        }
        if($set==0)
            echo $string[$i];
    }
}


?>