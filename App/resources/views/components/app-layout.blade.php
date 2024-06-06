<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        body {
          background: #16151d;
          font-size: 14px;
          line-height: 1.5;
          color: #b8b8b8;
          margin: 0 auto;
          font-family: 'Poppins', sans-serif;
          position: relative;
          min-height: 100%;
      }
      </style>
</head>
</div>
<body class="darkmode" itemscope="itemscope" itemtype="http://schema.org/WebPage">
    <div class="d-flex flex-column justify-content-center align-items-center">
            {{ $slot }}
    </body>
</html>
