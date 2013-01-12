<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="" />
        <title></title>
        <script type="text/javascript" src="jQuery.js"></script>
        <script type="text/javascript" src="d3.v2.js"></script>
        <!--<script src="http://d3js.org/d3.v3.min.js"></script>-->
        <script type="text/javascript">
            
        </script>
        <style type="text/css">
            body {
                font: 10px sans-serif;
            }

            .axis path,
            .axis line {
                fill: none;
                stroke: #000000;
                shape-rendering: crispEdges;
            }

            .bar {
                fill: steelblue;
            }

            .x.axis path {
                display: none;
            }
            
            /*
            .chart div {
                font: 10px sans-serif;
                background-color: steelblue;
                text-align: right;
                padding: 3px;
                margin: 1px;
                color: white;
            }
            #div-chart-1 div {
                font: 10px sans-serif;
                background-color: steelblue;
                text-align: right;
                padding: 3px;
                margin: 1px;
                color: white;
            }
            #div-chart-1 rect {
                stroke: white;
                fill: steelblue;
            }
            */
        </style>
        <?php
        $datas = array(
            'A' => .08167,
            'B' => .01492,
            'C' => .02780,
            'D' => .04253,
            'E' => .12702,
            'F' => .02288,
            'G' => .02022,
            'H' => .06094,
            'I' => .06973,
            'J' => .00153,
            'K' => .00747,
            'L' => .04025,
            'M' => .02517,
            'N' => .08167,
            'O' => .01492,
            'P' => .02780,
            'Q' => .04253,
            'R' => .12702,
            'S' => .02288,
            'T' => .02022,
            'U' => .06094,
            'V' => .06973,
            'X' => .205,
            'Y' => .00747,
            'Z' => .04025
        );
        ?>
    </head>
    <body>
        <div id="div-chart-1">
            <!--<script type="text/javascript" src="d3.basic.columns.js"></script>-->
        </div>
        <div id="div-chart-1">
            <!--<script type="text/javascript">-->
            <?php
//            echo "var data = [";
//            foreach ($datas as $key => $val) {
//                echo "{'keys': '".$key."', 'values': '".$val."'}," . PHP_EOL;
//            }
//            echo "];";
            $data = json_encode($datas);
            echo( $data );
            ?>
            <!--</script>-->
            <script type="text/javascript" src="d3.basic.columns.js"></script>
        </div>
    </body>

</html>