<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        * {
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1300px;
            margin: auto;
            padding-left: 25px;
            padding-right: 25px;
        }
        .Home {
            background: radial-gradient(#fff,#ffd6d6);
            height: 110vh;
        }
        .HomeMain h1 {
            text-align: center;
            margin: 0 0;
            padding: 20px 0;
            color: #ff523b;
            position: relative;
        }
        .HomeMain h1::before{
            content: '';
            position: absolute;
            width: 52%;
            height: 3px;
            background-color: #ff523b;
            border-radius: 20px;
            bottom: 15px;
        }
        .HomeMain p {
            text-align: left;
            color: #555;
            font-size: 18px;
            margin: 0 7% 25px 7%;
            line-height: 22px;
            text-indent: 5%;
        }
        .domain {
            width: 200px;
            margin: 0 auto 20px;
        }
        .domain h2 {
            color: #ff523b;
            font-weight: bold;
            font-size: 30px;
            line-height: 40px;
            position: relative;
        }
        .domain h2::before{
            content: '';
            position: absolute;
            width: 58%;
            height: 3px;
            background-color: #ff523b;
            border-radius: 20px;
            bottom: 0;
        }
        .domain ol {
            margin-top: 10px;
        }
        .domain ol li {
            font-size: 18px;
            font-weight: 600;
            line-height: 21px;
            color: #000;
        }
        .images {
            display: flex;
            align-items: center;
            justify-content: space-around;
        }
        .images img {
            width: 300px;
            height: 300px;
            border-radius: 15px;
            border: 3px solid #ff523b;
            cursor: pointer;
            transition: all 05s;
        }
        .clicklogin {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px 0;
        }
        .clicklogin a {
            background-color: #ff523b;
            color: #fff;
            border: 1px solid #ff523b;
            padding: 10px;
            border-radius: 20px;
            font-size: 20px;
            font-weight: 600;
            text-decoration: none;
            text-transform: capitalize; 
        }
        .clicklogin a:hover {
            background-color: #fff;
            color: #ff523b;
            border: 1px solid #ff523b;
        }
    </style>
</body>
</html>