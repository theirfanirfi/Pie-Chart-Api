<html>

<head>

<!--Load the AJAX API-->

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script type="text/javascript">

 

    // Load the Visualization API and the piechart package.

    google.charts.load('current', {'packages':['corechart']});

 

    // Set a callback to run when the Google Visualization API is loaded.

   google.charts.setOnLoadCallback(pie_chart);

 

    function pie_chart() {

      var jsonData = $.ajax({

          url: "pie_chart.php",

          dataType: "json",

          async: false

          }).responseText;

 

    // Create our data table out of JSON data loaded from server.

   // alert(jsonData);return false;

    var data = new google.visualization.DataTable(jsonData);

 

      // Instantiate and draw our chart, passing in some options.

    var chart = new google.visualization.PieChart(document.getElementById('piechart_div'));

      chart.draw(data, {width: 400, height: 240});

    }

 

</script>

</head>

<body><?php

include('db.php');


if(isset($_POST['sbtBtn'])) {
  if(isset($_POST['php'])) {
      $sql = 'UPDATE courses
      SET number='.$_POST['php'].'
      WHERE course_name="PHP" ';  

      $query = mysql_query($sql) or die(mysql_error());
  }

  if(isset($_POST['java'])) {
      $sql = 'UPDATE courses
      SET number='.$_POST['java'].'
      WHERE course_name="JAVA" ';  

      $query = mysql_query($sql) or die(mysql_error());
  }

  if(isset($_POST['jquery'])) {
      $sql = 'UPDATE courses
      SET number='.$_POST['jquery'].'
      WHERE course_name="JQUERY" ';  

      $query = mysql_query($sql) or die(mysql_error());
  }

  if(isset($_POST['javascript'])) {
      $sql = 'UPDATE courses
      SET number='.$_POST['javascript'].'
      WHERE course_name="JAVASCRIPT" ';  

      $query = mysql_query($sql) or die(mysql_error());
  }
  

  

}

?>

<form action="" method="post">
  PHP:<br>
  <input type="text" name="php" required="">
  <br>
  JAVA:<br>
  <input type="text" name="java" required=""> <br>
  JQUERY:<br>
  <input type="text" name="jquery"  required=""> <br>
  JAVASCRIPT:<br>
  <input type="text" name="javascript" required="">

  <br><br>
  <input type="submit" name="sbtBtn" value="Submit">
</form> 


<!--Div that will hold the pie chart-->



</body>

</html>
