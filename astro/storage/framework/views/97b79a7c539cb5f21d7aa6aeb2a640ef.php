<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Merchant Check Out Page</title>
</head>

<body>
    <center>
        <h1>Please do not refresh this page...</h1>
    </center>

    <form method="post" action="<?php echo $paymentData['payUTxnUrl'] ?>" name="f1">

        <table border="1">
            <tbody>
                <?php
                foreach ($paymentData as $name => $value) {
                    echo '<input type="hidden" name="' . $name . '" value="' . $value . '">';
                }
    ?>
            </tbody>
        </table>
        <script type="text/javascript">
            document.f1.submit();
        </script>
    </form>
</body>

</html><?php /**PATH /var/www/vhosts/astroway.diploy.in/httpdocs/resources/views/payment/payu-merchant-form.blade.php ENDPATH**/ ?>