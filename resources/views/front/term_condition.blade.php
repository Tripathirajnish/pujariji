<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pujari ji Term & Condition</title>

    <link href="{{url('front/img/favicon.png')}}" rel="icon">
    <link href="{{url('front/img/favicon.png')}}" rel="pujarijii-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }

        header {
            background-color: #ff6300;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            background-color: #fff;
            position: relative;
            /* Change from absolute to relative */
        }

        h1,
        h2 {
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 15px;
        }

        ul,
        ol {
            margin-left: 30px;
        }

        p:last-child {
            margin-bottom: 40px;
        }

        footer {
            text-align: center;
            padding: 10px 0;
            background-color: #ff6300;
            color: #fff;
            width: 100%;
        }

        /* Responsive Styles */
        @media screen and (max-width: 600px) {
            .container {
                padding: 10px;
            }
        }

    </style>
</head>
<body>
    <header>
        <!-- Replace the img src with your logo URL -->
        <img src="{{url('front/img/logo-new.png')}}" style="max-width: 200px;">
        <h1 class=" animate__animated animate__backInDown" style="margin-top: -20px;">Pujari Ji- Term-Of-Services</h1>
    </header>
    <div class="container">
        <p id="editor">
            {!! $data->tc_content !!}
        </p>
    </div>
    <footer>
        <p>&copy; 2023 Pujari ji. All rights reserved.</p>
    </footer>

</body>
</html>
