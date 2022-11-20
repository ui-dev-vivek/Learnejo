<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
    :root {
        --pale-blue: hsl(225, 100%, 94%);
        --bright-blue: hsl(245, 75%, 52%);
        --very-pale-blue: hsl(225, 100%, 98%);
        --desaturated-blue: hsl(224, 23%, 55%);
        --dark-blue: hsl(223, 47%, 23%);
    }

    body {
        font-family: 'Red Hat Display', sans-serif;
        font-size: 16px;
        position: relative;
        width: 100%;
        height: 100vh;
        padding: 0px;
        margin: 0px;
        background: var(--pale-blue);
    }

    body::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        width: 100%;
        height: 100%;
        background: url(https://rvs-order-summary-component.netlify.app/images/pattern-background-desktop.svg);
        background-repeat: no-repeat;
        background-size: contain;
        background-position: top;
        z-index: -1;
    }

    main {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    .card {
        width: 320px;
        min-height: 400px;
        margin: 60px auto;
        border-radius: 10px;
        background: white;
    }

    .card .card-header {
        width: 100%;
        height: 156px;
        border-radius: 10px 10px 0px 0px;
    }

    .card .card-header img {
        width: 100%;
        border-radius: 10px 10px 0px 0px;
    }

    .card .card-body {
        width: 100%;
        height: auto;
        padding: 25px;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .card .card-body .card-title {
        width: 100%;
        font-weight: 900;
        color: var(--dark-blue);
        text-align: center;
        /* padding: 15px; */
        box-sizing: border-box;
    }

    .card .card-body .card-text {
        width: 100%;
        color: var(--desaturated-blue);
        text-align: left;
        /* line-height: 8px; */
        /* padding: 15px 0px; */
        box-sizing: border-box;
    }

    .card .card-body .card-plan {
        display: flex;
        flex-direction: row;
        align-items: center;
        column-gap: 15px;
        background: var(--very-pale-blue);
        border-radius: 10px;
        padding: 15px;
        box-sizing: border-box;
    }

    .card .card-body .card-plan .card-plan-img {
        flex-grow: 1;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
    }

    .card .card-body .card-plan .card-plan-text {
        flex-grow: 6;
        display: flex;
        flex-direction: column;
        row-gap: 4px;
    }

    .card .card-body .card-plan .card-plan-text .card-plan-title {
        color: var(--dark-blue);
        font-weight: 900;
        font-size: 14px;
    }

    .card .card-body .card-plan .card-plan-text .card-plan-price {
        color: var(--desaturated-blue);
        font-size: 14px;
    }

    .card .card-body .card-plan .card-plan-link {
        flex-grow: 1;
    }

    .card .card-body .card-plan .card-plan-link a {
        color: var(--bright-blue);
        font-weight: 700;
        font-size: 14px;
        cursor: pointer;
    }

    .card .card-body .card-plan .card-plan-link a:hover {
        color: #766cf1;
        text-decoration: none;
        ;
    }

    .card .card-body .card-payment-button {
        padding: 25px 0px 15px;
        box-sizing: border-box;
    }

    .card .card-body .card-payment-button button {
        width: 100%;
        height: 50px;
        border: 0;
        background: var(--bright-blue);
        color: white;
        font-weight: 700;
        border-radius: 10px;
        box-shadow: 0px 10px 20px 0px hsl(245deg 75% 52% / 44%);
        cursor: pointer;
    }

    .card .card-body .card-payment-button button:hover {
        background: #766cf1;
    }

    .card .card-body .card-cancel-button {
        padding: 15px 0px;
        box-sizing: border-box;
    }

    .card .card-body .card-cancel-button button {
        width: 100%;
        border: 0;
        background: none;
        color: var(--desaturated-blue);
        font-weight: 900;
        text-align: center;
        cursor: pointer;
    }

    .card .card-body .card-cancel-button button:hover {
        color: var(--dark-blue);
    }


    @media (max-width: 375px) {
        body {
            height: auto;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: url(https://rvs-order-summary-component.netlify.app/images/pattern-background-mobile.svg);
            background-repeat: no-repeat;
            background-size: contain;
            background-position: top;
            z-index: -1;
        }

    }
</style>

<body>
    <main>
        <div class="card">
            <div class="card-header">
                <img src="https://rvs-order-summary-component.netlify.app/images/illustration-hero.svg" alt="">
            </div>
            <div class="card-body">
                <div class="card-title">Order Summary</div>
                <div class="card-text">
                    <h4 class="h4">Python Interview Questions and Answer.</h4>
                    <h5 class="h5">Vivek Kumar Yadav</h5>
                    <h5 class="h5">+91-7619876239</h5>
                    <h5 class="h5">vivek@gmail.com</h5>
                </div>
                <div class="card-plan">
                    <div class="card-plan-img"><i class="fa fa-inr fa-2x" aria-hidden="true"></i>
                    </div>
                    <div class="card-plan-text">
                        <div class="card-plan-title">Amount</div>
                        <div class="card-plan-price">Rs. 15</div>
                    </div>

                </div>
                <div class="card-payment-button">
                    <button id="rzp-button1">Proceed to Payment</button>
                </div>
                <div class="card-cancel-button">
                    <button>Cancel Order</button>
                </div>
            </div>
        </div>
    </main>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        var options = {
            "key": "rzp_test_GbeYE8650HETh2", // Enter the Key ID generated from the Dashboard
            "amount": "50000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            // "name": "Acme Corp",
            "description": "Python Interview Question Answers.",
            // "image": "https://example.com/your_logo",
            // "order_id": "hi", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
            "handler": function(response) {
                // alert(response.razorpay_payment_id);
                // alert(response.razorpay_order_id);
                // alert(response.razorpay_signature)
                alert("Success");
            },
            "prefill": {
                "name": "Anshika Singh",
                "email": "anshika@gmail.com",
                "contact": "7071023897"
            },
            "notes": {
                "address": "Razorpay Corporate Office"
            },
            "theme": {
                "color": "#32c552"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.on('payment.failed', function(response) {
            alert(response.error.code);
            alert(response.error.description);
            alert(response.error.source);
            alert(response.error.step);
            alert(response.error.reason);
            alert(response.error.metadata.order_id);
            alert(response.error.metadata.payment_id);
        });
        document.getElementById('rzp-button1').onclick = function(e) {
            rzp1.open();
            e.preventDefault();
        }
    </script>
</body>

</html>
