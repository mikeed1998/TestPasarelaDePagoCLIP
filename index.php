<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: system-ui;
            background: ##def2fa;
            color: black;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Página de pago de mi ecommerce</h1>
    <p> Aceptamos pagos con <b>Clip</b> </p>
    <button class="clipCheckoutButton"></button>

    <script 
        id="checkoutClipPlugin" 
        payment_request_id="a785022d-62f6-4544-b47a-75450d27876d" 
        type="module" 
        src="https://sdk.clip.mx/js/v1/checkout.js">
    </script>
    <script>
        document.getElementsByTagName("h1")[0].style.fontSize = "5.5vw";
        document.getElementsByTagName("p")[0].style.fontSize = "3.5vw";
    </script>
</body>
</html>