<?php

    if(!empty($_POST)){
        foreach($_POST as $key=>$val)
        {
            $arr[]= $key.": ".$val."      " ;
        }
        $str=implode('',$arr);

        $to="contact@stockbenifits.com";
        $subject="Query On Website";
        $msg=$str;
        $header="Website Query";

        if(mail($to,$subject,$msg,$header))
        {
             echo "<script type='text/javascript'>window.location='thanks.php';</script>";
        }
        else
        {
            echo "<script type='text/javascript'> window.location='thanks.php';</script>";
        }
    }
