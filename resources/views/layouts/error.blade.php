<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <style>
        /*! Dekstop Normal */*{margin: 0;padding: 0;box-sizing: border-box;}body {font-family: 'Fredoka One', sans-serif;display: flex;flex-direction: column;justify-content: space-between;align-items: center}.container {width: 100%;display: flex;flex-direction: column;justify-content: space-between;align-items: center;}.error {width: 50%;display: flex;flex-direction: column;justify-content: center;align-items: center;}.error-img {width: 100%;display: flex;justify-content: center;align-items: center}img{width: 100%;pointer-events: none;}.batas {width: 30%;margin-top: 30px;border: .2rem solid #5145ff;border-radius: 30px;}.error-info{width: 100%;display: flex;justify-content: center;align-items: center;}h1 {margin-top: 30px;font-size: 2rem;text-align: center;color: #57B894;letter-spacing: 2px;}/*! Extra small devices (phones, 600px and down) */@media only screen and (max-width: 650px) {.container { margin-top: 4rem;}.error-img {width: 110%;}h1{font-size: 1.5rem;}}
    </style>

    <title>{{ config('app.name') }}</title>
</head>
<body>
    <div class="container">
        <div class="error">
            <div class="error-img">
                {{ $img }}
            </div>
            <div class="batas"></div>
            <div class="error-info">
                <h1>
                    {{ $message }}
                </h1>
            </div>
        </div>
    </div>
</body>
</html>
