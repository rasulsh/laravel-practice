<html>

<head>
    <style>
        @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,700,900);

        * {
            padding: 0;
            margin: 0;
        }

        input {
            outline: none;
        }

        html,
        body {
            height: 100%;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background: -webkit-linear-gradient(45deg, rgba(4, 2, 96, 0.7), rgba(180, 49, 183, 0.9)), -webkit-linear-gradient(0deg, rgba(51, 136, 140, 0.3), rgba(87, 240, 240, 0.1));
            background: -moz-linear-gradient(45deg, rgba(4, 2, 96, 0.7), rgba(180, 49, 183, 0.9)), -moz-linear-gradient(0deg, rgba(51, 136, 140, 0.3), rgba(87, 240, 240, 0.1));
            background: -o-linear-gradient(45deg, rgba(4, 2, 96, 0.7), rgba(180, 49, 183, 0.9)), -o-linear-gradient(0deg, rgba(51, 136, 140, 0.3), rgba(87, 240, 240, 0.1));
            background: linear-gradient(45deg, rgba(4, 2, 96, 0.7), rgba(180, 49, 183, 0.9)), linear-gradient(90deg, rgba(51, 136, 140, 0.3), rgba(87, 240, 240, 0.1));
            overflow: hidden;
        }

        .panel {
            width: 400px;
            height: 500px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            -webkit-box-shadow: 0 0 10px black;
            -moz-box-shadow: 0 0 10px black;
            box-shadow: 0 0 10px black;
            background: #141519;
            margin: 100px auto;
            text-align: center;
        }

        .panel .state {
            margin-top: 5px;
            width: 100%;
            height: 155px;
            color: white;
            font-size: 20px;
        }

        .panel .state i.fa-ban {
            font-size: 40px;
        }

        .panel .state i.fa-unlock-alt {
            font-size: 25px;
            color: white;
            line-height: 33px;
            height: 30px;
            width: 30px;
            display: inline-block;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            border: 2px solid;
        }

        .panel .state h2 {
            font-weight: 400;
        }

        .panel .form {
            width: 340px;
            margin: 5px auto;
        }

        .panel .login {
            height: 45px;
            width: 100%;
            background-color: #8bc34a;
            -webkit-border-radius: 45px;
            -moz-border-radius: 45px;
            border-radius: 45px;
            position: relative;
            line-height: 45px;
            text-align: center;
            font-weight: bold;
            color: white;
            margin-top: 10px;
            -webkit-transition: background .2s;
            -moz-transition: background .2s;
            -o-transition: background .2s;
            transition: background .2s;
            cursor: pointer;
        }

        .panel .login:active {
            -webkit-transform: translateY(2px);
            -moz-transform: translateY(2px);
            -ms-transform: translateY(2px);
            -o-transform: translateY(2px);
            transform: translateY(2px);
        }

        .panel .login:hover {
            background-color: #599b2d;
        }

        .panel .login:after {
            content: "\f084";
            font-family: 'FontAwesome';
            position: absolute;
            width: 45px;
            height: 45px;
            background-color: #599b2d;
            color: #fff;
            text-shadow: 1px -1px #467a23, 2px -2px #487d24, 3px -3px #4a8025, 4px -4px #4b8326, 5px -5px #4d8627, 6px -6px #4f8928, 7px -7px #508c28, 8px -8px #528f29, 9px -9px #54922a, 10px -10px #55952b, 11px -11px #57982c;
            left: 0;
            top: 0;
            -webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            transform: rotate(90deg);
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            text-align: center;
            line-height: 45px;
        }

        .panel input[type='text'] {
            background-color: #22232a;
            -webkit-border-radius: 45px;
            -moz-border-radius: 45px;
            border-radius: 45px;
            font-size: 15px;
            height: 45px;
            border: none;
            padding-left: 15px;
            width: -webkit-calc(100% - 15px);
            width: -moz-calc(100% - 15px);
            width: calc(100% - 15px);
            margin-bottom: 10px;
        }

        .panel input[type='text'][placeholder] {
            color: #656d79;
            font-size: 15px;
            font-weight: 500;
        }

        .panel .fack {
            margin-top: 30px;
            font-size: 14px;
        }

        .panel .fack i.fa {
            text-decoration: none;
            color: #fff;
            vertical-align: middle;
            font-size: 20px;
            margin-right: 5px;
        }

        .panel .fack a:link {
            color: #616973;
        }

        .panel .fack a:visited {
            color: #555c65;
        }
    </style>
</head>

<body>
    <div class="panel">
        <div class="state"><br><i class="fa fa-unlock-alt"></i><br>
            <h1>Log in</h1>
        </div>
        <div class="form">
            <input placeholder='Email' type="text">
            <input placeholder='Password' type="text">
            <div class="login">Login</div>
        </div>
        <!-- <div class="fack"><a href="#"><i class="fa fa-question-circle"></i>Forgot password?</a></div> -->
    </div>

    <script>
        $(document).ready(function() {
            return $('.login').click(function(event) {
                if (false) {

                } else {
                    return $('.state').html(
                        '<br><i class="fa fa-ban"></i><br><h2>Error</h2>The email or password you entered is incorrect, please try again.'
                        ).css({
                        color: '#eb5638'
                    });
                }
            });
        });
    </script>
</body>

</html>
