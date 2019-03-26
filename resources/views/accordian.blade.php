<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Modern CSS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
        <!-- Styles -->
        <link href="css/normalize.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
        <link href="css/app.css" rel="stylesheet">
    </head>
    <body>
      <header class="section">
        <div  class="container">
          <div class="header-top">
            <h1>Splendido</h1>
              <a href="/login">Login</a>
          </div>
          <nav>
            <a href="/">Home</a>
            <a href="#">Accordian</a>
            <a href="#">ccc</a>
            <a href="#">ddd</a>
          </nav>
        </div>
      </header>

        <div class="section">
          <div id="app" >
          <h1> Accordian</h1>

            <accordian></accordian>
          </div>
        </div>



    </body>
</html>
