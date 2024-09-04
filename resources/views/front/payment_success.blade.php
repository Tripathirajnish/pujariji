
<!DOCTYPE html>
<html>
<head>
  <title>Payment Successful!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      width: 100%; /* Set the card width to 100% for responsiveness */
      max-width: 600px; /* Add a maximum width to the card */
      margin: auto;
      text-align: center;
      border-radius: 10px;
      background-color: #fff;
    }

    .card-header {
      color: white;
      background: #1ab394;
      padding: 20px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }

    .card-header i {
      font-size: 48px;
    }

    .card-body {
      padding-top: 30px;
      padding-bottom: 30px;
    }

    .card-body h2 {
      color: #1ab394;
      font-size: 28px;
      margin-bottom: 10px;
    }

    .card-body p {
      color: #333;
      font-size: 18px;
      line-height: 1.5;
    }

    .checkmark {
      animation: checkmark 0.6s ease-in-out;
    }

    @keyframes checkmark {
      0% {
        stroke-dasharray: 0 100;
      }
      100% {
        stroke-dasharray: 100 100;
      }
    }

    /* Responsive Styles */
    @media screen and (max-width: 768px) {
      .card {
        width: 90%; /* Adjust the card width for smaller screens */
      }

      .card-body h2 {
        font-size: 24px; /* Reduce the heading font size for smaller screens */
      }

      .card-body p {
        font-size: 16px; /* Reduce the paragraph font size for smaller screens */
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="card">
      <div class="card-header">
       <img src="{{url('front/img/Pujari_Ji-removebg-preview.png')}}" style="height:130px; width:140px">
      </div>
      <div class="card-body">
        <div class="checkmark" style="width: 80px; height: 80px; margin: 0 auto; ">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" style="fill:none;stroke:#1ab394;stroke-width:3px;">
            <circle cx="26" cy="26" r="25" fill="none" />
            <path d="M14 26.2l7.1 7.2 16.4-16.7" />
          </svg>
        </div>
        <h2>Cheers!</h2>
        <p>Payment Successful!</p>
        <p>Thank you for your payment.</p>
      </div>
    </div>
  </div>
</body>
</html>
