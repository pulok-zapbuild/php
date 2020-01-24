<?php
    /*function sort_arr($arr)
    {
        for($i=0;$i<count($arr);$i++)
        {
            #echo $var[$i];
            
            for($j=$i+1;$j<count($var);$j++)
            {
                if($var[i]>$var[j])
                {
                    $x=$var[i];
                    $var[j]=$var[i];
                    $var[i]=$x;

                    /*$var[i]=$var[i]+$var[j];
                    $var[j]=$var[i]-$var[j];
                    $var[i]=$var[i]-$var[j];
                }
            }
        }
        print_r($arr);
    }*/

    $arr=array('23','22','3','45','27','87');
    $i=0;$j=0;

    for($i=0;$i<count($arr);$i++)
    {
        #echo $var[$i];
        
        for($j=$i+1;$j<count($arr);$j++)
        {
            if($arr[i]>$arr[j])
            {
                $x=$arr[i];
                $arr[j]=$arr[i];
                $arr[i]=$x;

                /*$var[i]=$var[i]+$var[j];
                $var[j]=$var[i]-$var[j];
                $var[i]=$var[i]-$var[j];*/
            }
        }
    }
    print_r($arr);
    #print_r(sort_arr($arr));
?>