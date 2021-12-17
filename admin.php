<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 200px;
            background-color: grey;
            padding: 60px 20px 60px;
        }
        h1{
            margin-right: 40px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Masukan password Admin      :</h1>
        <p id="salah"></p>
        <input type="text" id="masukan">
        <button onclick="pencet()" id="try">hasil</button>
    </div>
    <script type="text/javascript" src="index.js"></script>
</body>
</html>