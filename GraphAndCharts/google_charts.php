<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="" />
        <title></title>
        <script type="text/javascript" src="jQuery.js"></script>
        <script type="text/javascript">
            
        </script>
        <style type="text/css">
            
        </style>
    </head>
    <body>
        <?php
        $data1 = "20,100,120,160,80,110,60,100,120,120,140,120,140,130";
        $data2 = "10,50,60,80,40,60,30,50,60,100,40,20,40,30";

        $urlColumn = "//chart.googleapis.com/chart?chbh=a"
                    . "&chs=". (strlen($data1) - ((strlen($data1)/2) - 1)) * 30 ."x4900"
                    . "&cht=bvg"
                    . "&chco=ECECEC"
                    . "&chd=t:" .$data1
                    . "&chm=o,FF0000,0,-1,"
                    . (strlen($data1) - ((strlen($data1)/2)))
                    . "|D,4D89F9,0,1,5,"
                    . (strlen($data1) - ((strlen($data1)/2)));
                    
        
        $urlColumn2 = "//chart.googleapis.com/chart?chxt=y"
                    . "&chbh=a"
                    . "&chs=300x225"
                    . "&cht=bvg"
                    . "&chco=CCCCCC,ECECEC"
                    . "&chd=t:10,50,60,80,40,60,30|50,60,100,40,20,40,30"
                    . "&chtt=Vertical+bar+chart";
        ?>
        <div>
            <img src="<?php echo $urlColumn ?>" 
                 width="300" 
                 alt="Vertical bar chart" />
        </div>
        <div>
            <img src="<?php echo $urlColumn2 ?>" 
                 width="300" 
                 height="225" 
                 alt="Vertical bar chart" />
        </div>
        
    </body>

</html>
<script type="text/javascript">


</script>