<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login And Registration </title>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            background-image: url(loginimage.jpeg);
            height:100vh;
            background-size: cover;
            background-position: center;

        }
        .login-page{
            width: 360px;
            padding: 10% 0 0;
            margin: auto;
        }
        .form{
            position: relative;
            z-index: 1;
            background: rgba(5,15,180,0.7);
            max-width: 360px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
        }
        .form input{
            font-family: sans-serif ;
            background: #f2f2f2;
            width: 100%;
            border: 0;
            margin: 0 0 15px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;

        }

        .form button{
            font-family: sans-serif;
            text-transform: uppercase;
            background: #4CAF50;
            width: 100%;
            border: 0;
            padding: 15px;
            color: #FFFFFF;
            font-size: 14px;
            cursor: pointer;
        }
        .form button:hover,.form button:active{
            background: #43A047;
        }
        .form .message{
            margin: 15px 0 0;
            color:aliceblue;
            font-size: 12px;
        }
        .form.message a{
            color: #4CAF50;
            text-decoration: none;
        }
        .form .register-form{
            display: none;
        }

    </style>
</head>
<body>
<div class="login-page">
    <div class="form">
        <form class="register-form">
            <input type="text" placeholder="User Name"/>
            <input type="password" placeholder="Password"/>
            <input type="text" placeholder="Email id"/>
            <button>Create</button>
            <p class="message">Already Registered? <a href="#">Login</a>
            </p>
        </form>

        <form class="login-form">
            <input type="text" placeholder="User Name"/>
            <input type="password" placeholder="Password"/>
            <button>login</button>
            <p class="message">Not Registered? <a href="#">Register</a> </p>
        </form>
    </div>
</div>
<script src='https://code.jquery.com/jquery-3.5.1.min.js'></script>

<script>
    $('.message a').click(function (){
        $('form').animate(innerHeight: "toggle", opacity: "toggle"},"slow");
    });

</script>
</body>
</html>
