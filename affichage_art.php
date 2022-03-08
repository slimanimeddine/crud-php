<?php
include "header.php";
    include 'config.php';

    $sql = "SELECT * FROM type_art ";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
    $arrCpt = array();
    $arrSexe = array();
    $arrQueries = array();
    $arrCount = array();
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
             $arrSexe[] = $row;
        }
    }    
    foreach ($arrSexe as $arr) {
        array_push($arrCpt, $arr['art']);
    }
    foreach ($arrCpt as $key => $value) {
        $key += 1;
        $query = "SELECT COUNT(*) AS $value from student where sart=$key";
        $res = mysqli_query($conn, $query) or die("Query Unsuccessful.");
        if(mysqli_num_rows($res) > 0) {
            while($row0 = mysqli_fetch_assoc($res)) {
                array_push($arrCount, $row0);
            }
        }   
    }

    

    mysqli_close($conn);
?>

<?php
    
    $dataPoints = array();
    
    foreach($arrCount as $key0 => $value0) {
        foreach ($value0 as $key1 => $value1) {
            $item = array("label" => $key1, "y" => $value1);
            array_push($dataPoints, $item);
        }
    }
    
    ?>
    <!DOCTYPE HTML>
    <html>
    <head>


<script>
    window.onload = function() {
    
        var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        title: {
            text: ""
        },
        subtitles: [{
            text: ""
        }],
        data: [{
            type: "pie",
            yValueFormatString: "",
            indexLabel: "{label} ({y})",
            dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
        }]
    });
    chart.render();
    
    

    var chart = new CanvasJS.Chart("chartContainer0", {
        animationEnabled: true,
        theme: "light2",
        title:{
            text: ""
        },
        axisY: {
            title: ""
        },
        data: [{
            type: "column",
            yValueFormatString: "",
            dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
        }]
    });
    chart.render();
    
    }
</script>
    </head>
    <body>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <div id="chartContainer0" style="height: 370px; width: 100%;"></div>
    <script src="canvasjs.min.js"></script>
    </body>
    </html>                              