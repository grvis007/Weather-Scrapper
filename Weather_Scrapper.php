<!doctype html>
<html>
<head>
<title>Weather Scrapper</title>

<meta charset="utf-8" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 center">
        <h1 class="center white">Weather Predictor</h1>
        <p class="lead center white">Enter your city below to get a weather</p>

        <form>
            <div class="form-group">
              <input type="text" class="form-control" name="city" id="city" placeholder="Eg. Chicago,London,Paris..." />
            </div>

            <button id="findmyweather" class="btn btn-success btn-lg">Find My Weather</button>
        </form>

        <div id="success" class="alert alert-success">Success!</div>

        <div id="fail" class="alert alert-danger">Could not find weather data for that city. Please try again.</div>

        <div id="noCity" class="alert alert-danger">Please enter a city!</div>

      </div>
    </div>
</div>
<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="weather.js"></script>
</body>
</html>
