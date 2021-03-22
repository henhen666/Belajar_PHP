<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman 1</title>
    <style>
        body{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: rgb(120, 33, 179);
            color: white;}
        .header{
            padding: 25px;
            color: ;
            background-color: rgb(212, 0, 255);
        }
        ul{
            display: flex;
            justify-content: space-around;
            color: white;
        }
        ul li{
            list-style:none;
            justify-content: space-around;
            color: white;
        }
        .footer{
        background-color: rgb(140, 0, 255);
        color: rgb(255, 0, 212);}
        .column {
                float: left;
                width: 33.33%;
                padding: 15px;
                color: rgb(255, 0, 200);
                text-align: justify;
                }
        .row:after {
                content: "";
                display: table;
                clear: both;}
        @media screen and (max-width:600px) {
        .column {
        width: 100%;}}
        input{
            color: white;
            background-color: rgb(212, 0, 255); 
            border-color: white;
        }
        button{
        width: 35%;
        padding: 5px 0;
        border: none;
        background-color:#a200ff;
        font-size: 18px;
        color: #00ccff;
        cursor: pointer;}
    </style>
</head>
<body align="center">
    <?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if ($username == $password) {
        echo "Username dan Password Benar!";
    }
    else{
        echo "Username dan Password Salah!";
    }
    ?>
    <br>
    <br>
    <div class="header" style="padding: 25px;" align="center" id="Home">
        <h1>Selamat datang, <?php echo $username ?>!</h1>
    </div>
    <h3>
        <ul>
            <a href="#Home"><li>Home</li></a> 
            <a href="https://www.instagram.com/_henz.g/"><li>About</li></a> 
            <a href=""><li>Contact Us</li></a> 
        </ul>
    </h3>
    <br> <br>
    Silakan masukkan infromasi anda di bawah ini!
    <form action="akhir.php" method="POST">
    <div class="row">
        <div class="column">
            <h2>Biodata</h2>
            <p><input type="text" id="Biodata" name="Biodata" required></p>
        </div>

    <div class="column">
        <h2>Pengalaman Hidup</h2>
        <p><input type="text" id="Pengalaman Hidup" name="Pengalaman Hidup" required></p>
    </div>

    <div class="column">
        <h2>Kelebihan dan Kekurangan</h2>
        <p><input type="text" id="Kelebihan dan Kekurangan" name="Kelebihan dan Kekurangan" required></p>
    </div>
</div>
    <button>Submit</button>
    </form>

    <br> <br>
    <div class="footer" align="center" style="padding: 10px;">
        <h3>COPYRIGHT © by HENRY SALIM</h3>
    </div>
</body>
</html>

