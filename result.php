<?php require('./objects/Objects.php') ?>
<?php 

  $formCar = new Car;
    // $formCar->name = $_POST['name'];
    // $formCar->color = $_POST['color'];

    // $doorValue = $_POST['door'];
    // $engineValue = $_POST['engine'];
    // $keyValue = $_POST['key'];

    $nameValue = (isset($_POST['name'])) ? $_POST['name'] : 'Please enter your car name';
    $colorValue = (isset($_POST['color'])) ? $_POST['color'] : 'Please enter your car color';
    
    $doorValue = (isset($_POST['door'])) ? $_POST['door'] : 'Please select your door state';
    $engineValue = (isset($_POST['engine'])) ? $_POST['engine'] : 'Please select your engine state';
    $keyValue = (isset($_POST['key'])) ? $_POST['key'] : 'Please select your key state';

    $formCar->name = $nameValue;
    $formCar->color = $colorValue;
    
    ($doorValue == "Opened") ? $formCar->door = true : $formCar->door = false;
    ($engineValue == "On") ? $formCar->engineIsOn = true : $formCar->engineIsOn = false;
    ($keyValue == "Yes") ? $formCar->key = true : $formCar->key = false;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/global.css">
  <link rel="shortcut icon" href="./assets/svg/off-road.svg" type="image/x-icon">
  <title>Dashboard</title>
</head>
<body>

  <main>
    <table class="content">
      <thead>
        <tr>
          <th class="item">Name</th>
          <th class="item">Color</th>
          <th class="item">Key</th>
          <th class="item">Open</th>
          <th class="item">Turned On</th>
        </tr>
      </thead>
      <tbody>

				<!-- FIRST CAR -->

        <tr>
            <td class="var"><?php echo $firstCar->name; ?></td>
            <td class="var"><?php echo $firstCar->color; ?></td>
            <td class="var"><?php
              if ($firstCar->key == true) {
                echo "Yes";
              } else {
                echo "No";
              }
            ?></td>
            <td class="var"><?php
              if ($firstCar->open == true) {
                echo "Yes";
              } else {
                echo "No";
              }
            ?></td>
            <td class="var"><?php
              if ($firstCar->engineIsOn == true) {
                echo "Yes";
              } else {
                echo "No";
              }
            ?></td>
					</tr>
					
					<!-- SECOND CAR -->

					<tr>
            <td class="var"><?php echo $secondCar->name; ?></td>
            <td class="var"><?php echo $secondCar->color; ?></td>
            <td class="var"><?php
              if ($secondCar->key == true) {
                echo "Yes";
              } else {
                echo "No";
              }
            ?></td>
            <td class="var"><?php
              if ($secondCar->open == true) {
                echo "Yes";
              } else {
                echo "No";
              }
            ?></td>
            <td class="var"><?php
              if ($secondCar->engineIsOn == true) {
                echo "Yes";
              } else {
                echo "No";
              }
            ?></td>
					</tr>
					
					<!-- THIRD CAR -->

					<tr>
            <td class="var"><?php echo $thirdCar->name; ?></td>
            <td class="var"><?php echo $thirdCar->color; ?></td>
            <td class="var"><?php
              if ($thirdCar->key == true) {
                echo "Yes";
              } else {
                echo "No";
              }
            ?></td>
            <td class="var"><?php
              if ($thirdCar->open == true) {
                echo "Yes";
              } else {
                echo "No";
              }
            ?></td>
            <td class="var"><?php
              if ($thirdCar->engineIsOn == true) {
                echo "Yes";
              } else {
                echo "No";
              }
            ?></td>
          </tr>

					<!-- FOURTH CAR -->

					<tr>
            <td class="var"><?php echo $fourthCar->name; ?></td>
            <td class="var"><?php echo $fourthCar->color; ?></td>
            <td class="var"><?php
              if ($fourthCar->key == true) {
                echo "Yes";
              } else {
                echo "No";
              }
            ?></td>
            <td class="var"><?php
              if ($fourthCar->open == true) {
                echo "Yes";
              } else {
                echo "No";
              }
            ?></td>
            <td class="var"><?php
              if ($fourthCar->engineIsOn == true) {
                echo "Yes";
              } else {
                echo "No";
              }
            ?></td>
          </tr>

				  <!-- FIFTH CAR -->

					<tr>
            <td class="var"><?php echo $fifthCar->name; ?></td>
            <td class="var"><?php echo $fifthCar->color; ?></td>
            <td class="var"><?php
              if ($fifthCar->key == true) {
                echo "Yes";
              } else {
                echo "No";
              }
            ?></td>
            <td class="var"><?php
              if ($fifthCar->open == true) {
                echo "Yes";
              } else {
                echo "No";
              }
            ?></td>
            <td class="var"><?php
              if ($fifthCar->engineIsOn == true) {
                echo "Yes";
              } else {
                echo "No";
              }
            ?></td>
          </tr>

          <!-- FIFTH CAR -->

					<tr>
            <td class="var"><?php echo $fifthCar->name; ?></td>
            <td class="var"><?php echo $fifthCar->color; ?></td>
            <td class="var"><?php
              if ($fifthCar->key == true) {
                echo "Yes";
              } else {
                echo "No";
              }
            ?></td>
            <td class="var"><?php
              if ($fifthCar->open == true) {
                echo "Yes";
              } else {
                echo "No";
              }
            ?></td>
            <td class="var"><?php
              if ($fifthCar->engineIsOn == true) {
                echo "Yes";
              } else {
                echo "No";
              }
            ?></td>
          </tr>

          <!-- FORM CAR -->

					<tr>
            <td class="var"><?php echo $formCar->name; ?></td>
            <td class="var"><?php echo $formCar->color; ?></td>
            <td class="var"><?php
              if ($formCar->key == true) {
                echo "Yes";
              } else {
                echo "No";
              }
            ?></td>
            <td class="var"><?php
              if ($formCar->open == true) {
                echo "Yes";
              } else {
                echo "No";
              }
            ?></td>
            <td class="var"><?php
              if ($formCar->engineIsOn == true) {
                echo "Yes";
              } else {
                echo "No";
              }
            ?></td>
          </tr>

        </tbody>
      </table>
	</main>

  <a href="./index.php">
    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
    width="64" height="64"
    viewBox="0 0 172 172"
    style=" fill:#000000;"><g class="goBack" fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g class="goBack" fill="#fd31d4"><path d="M86,8.13074c-19.95469,0 -39.90938,7.59114 -55.09375,22.77551c-14.78125,14.64688 -22.84375,34.26563 -22.84375,55.09375c0,20.82813 8.0625,40.44687 22.84375,55.09375c15.18437,15.18437 35.20625,22.84375 55.09375,22.84375c20.02188,0 39.90937,-7.65938 55.09375,-22.84375c14.78125,-14.78125 22.84375,-34.26562 22.84375,-55.09375c0,-20.82812 -8.0625,-40.44687 -22.84375,-55.09375c-15.18438,-15.18437 -35.13906,-22.77551 -55.09375,-22.77551zM86,16.125c17.87188,0 35.7448,6.85208 49.45105,20.42395c13.16875,13.30312 20.42395,30.77292 20.42395,49.45105c0,18.67813 -7.2552,36.14792 -20.42395,49.45105c-27.27812,27.27812 -71.62187,27.27812 -98.76562,0c-13.30313,-13.30312 -20.56042,-30.77292 -20.56042,-49.45105c0,-18.67812 7.2552,-36.14792 20.42395,-49.45105c13.70625,-13.57187 31.57917,-20.42395 49.45105,-20.42395zM79.23138,61.8125c-1.02461,0 -2.03242,0.40365 -2.77148,1.2099l-20.15625,20.15625c-1.6125,1.6125 -1.6125,4.16457 0,5.6427l20.15625,20.15625c0.80625,0.80625 1.88072,1.2099 2.82135,1.2099c0.94062,0 2.0151,-0.40365 2.82135,-1.2099c1.6125,-1.6125 1.6125,-4.16457 0,-5.6427l-13.30365,-13.30365h41.38855c2.28437,0 4.03125,-1.74688 4.03125,-4.03125c0,-2.28437 -1.74688,-4.03125 -4.03125,-4.03125h-41.38855l13.30365,-13.30365c1.6125,-1.6125 1.6125,-4.16457 0,-5.6427c-0.80625,-0.80625 -1.84661,-1.2099 -2.87121,-1.2099z"></path></g></g></svg>
  </a>
  
	<img style="margin-top: 0px; margin-bottom: 50px;" class="bg-image" src="./assets/svg/off-road.svg" alt="car" srcset="">
	
	<script src="./assets/js/app.js"></script>

</body>
</html>