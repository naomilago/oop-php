<?php require('./objects/Objects.php') ?>
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
    <div class="login-page">
      <div class="form">
        <form class="login-form" action="./result.php" method="POST">
          <h1 style="font-size: 22pt; margin-bottom: 15px; text-align: center; color: rgb(253, 49, 212);">Car Registration</h1>
          
          <br>

          <input type="text" name="name" placeholder="Name"/>

          <br>

          <input type="text" name="color" placeholder="Color"/>

          <br>

          <div class="radioButtons">
            <h2 style="font-size: 16pt; margin-bottom: 15px; text-align: left; color: rgb(253, 49, 212);">Door:</h2>
            <label>
                <input type="radio" name="door" value="Opened"/>
                <span>Opened</span>
            </label>
            <label>
                <input type="radio" name="door" value="Closed"/>
                <span>Closed</span>
            </label>

            <h2 style="font-size: 16pt; margin-bottom: 15px; text-align: left; color: rgb(253, 49, 212);">Engine:</h2>
            <label>
                <input type="radio" name="engine"value="On"/>
                <span>On</span>
            </label>
            <label>
                <input type="radio" name="engine" value="Off"/>
                <span>Off</span>
            </label>

            <h2 style="font-size: 16pt; margin-bottom: 15px; text-align: left; color: rgb(253, 49, 212);">Key:</h2>
            <label>
                <input type="radio" name="key" value="Yes"/>
                <span>Yes</span>
            </label>
            <label>
                <input type="radio" name="key" value="No"/>
                <span>No</span>
            </label>
          </div>

          <br>

          <button type="submit">Show results</button>
          <p class="message">Made with &#x1F495; by <a target="_blank" href="https://abnerlago.com">Abner Lago</a></p>
        </form>
      </div>
    </div>
  </main>

	<img style="margin-top: 0px; margin-bottom: 50px;" class="bg-image" src="./assets/svg/off-road.svg" alt="car" srcset="">
	
	<script src="./assets/js/app.js"></script>

</body>
</html>