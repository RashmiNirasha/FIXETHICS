
<!DOCTYPE html>
<head>
    <title>Help</title>
    <link rel="stylesheet" type="text/css" href="st1.css" />
    <link rel="stylesheet" type="text/css" href="assets\css\footer.css" />

    <script>
        function validateForm() {
            var x = document.forms["contactForm"]["email"].value;
            if (x == "") {
                alert("Please enter your email address");
                return false;
            }
        }
    </script>


</head>
<body>
<?php include 'files\navbar.php';?>

    <div class="section1">
        <div class="text">
            <section class="sec1">
                <div class="content">
                    <h2>Contact Us</h2>
                    <p>You are about to receive the best customer care out there</p>
                </div>
            </section>

            <center>
                <table>
                    <tr>
                        <td rowspan="2">
                            <div class="container1">
                                <div class="accordion">
                                    <div class="accordion-item" id="q1">
                                        <a class="accordion-link" href="#q1">
                                            Can I change my personal details
                                            <img src=assets/img/ico/click.png width="30" height="25">
                                        </a>
                                        <div class="answer">
                                            <p>Yes you can.Go to customer dashboard, settings edit to change personal details.</p>
                                        </div>
                                    </div>

                                    <div class="accordion-item" id="q2">
                                        <a class="accordion-link" href="#q2">
                                            How do I delete my account?
                                            <img src=assets/img/ico/click.png width="30" height="25">
                                        </a>
                                        <div class="answer">
                                            <p>In order to delete your account, simply contact us,
                                                via the online platform and the contact form on our site.
                                                Important: When we delete your account, we will no longer hold any information about your account</p>
                                        </div>
                                    </div>

                                    <div class="accordion-item" id="q3">
                                        <a class="accordion-link" href="#q3">
                                            How do i contact a high level manager?
                                            <img src=assets/img/ico/click.png width="30" height="25">
                                        </a>
                                        <div class="answer">
                                            <p>It is possible to be connected with their personal Emails.<br> When you add the Email we will keep in touch with you</p>
                                        </div>
                                    </div>

                                    <div class="accordion-item" id="q4">
                                        <a class="accordion-link" href="#q4">
                                            What do I do if my order is damaged?
                                            <img src=assets/img/ico/click.png width="30" height="25">
                                        </a>
                                        <div class="answer">
                                            <p>We are so sorry to hear that your order arrived in less than pristine condition!
                                                Please let us make it right.
                                                Our customer service team will be more than happy to assist with processing a replacement order or issuing a refund.</p>
                                        </div>
                                    </div>

                                    <div class="accordion-item" id="q5">
                                        <a class="accordion-link" href="#q5">
                                            How long does it take for delivery
                                            <img src=assets/img/ico/click.png width="30" height="25">
                                        </a>
                                        <div class="answer">
                                            <p>Your goods will be delivered within 3-5 working days.</p>
                                        </div>
                                    </div>
                                    <div class="accordion-item" id="q6">
                                        <a class="accordion-link" href="#q6">
                                            How do I get to know about special offers?
                                            <img src=assets/img/ico/click.png width="30" height="25">
                                        </a>

                                        <div class="answer">
                                            <p>Our customers are our priority. We will notify you via email on all new promotions.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </td>

                        <td>
                            <div class="contact">
                                <h3>Still didn't get your question answered?</h3><br>
                                <p>Please get in touch with us using one of the options below.You will receive a response within 24 hrs by email</p>
                            </div>
                            <center>
                                <form name="contactForm" action="files\help.php" onsubmit="return validateForm()" method="post">
                                    <h1>Contact Us</h1><br>
                                    <div>
                                        <select id="issue" name="issue">
                                            <option value="" disabled selected>What is your issue</option>
                                            <option value="Product Related">Product Related</option>
                                            <option value="Order Enquiry">Order Enquiry</option>
                                            <option value="General Enquiry">General Enquiry</option>
                                        </select>
                                    </div>
                                    <div class="info">
                                        <input id="fullname" type="text" name="fullname" placeholder="Full name">
                                        <input id="email" type="text" name="email" placeholder="Email">
                                        <input id="telephone" type="text" name="telephone" placeholder="Phone number">
                                    </div>
                                    <p class="msg">
                                    <h4 style = "font-size: 15px;
    padding: 0px 10px;
    margin-top: 0px;
    margin-bottom: 0px;">Message<h4>
                                            </p>
                                            <div class="con">
                                                <textarea id="promessage" name="promessage" rows="4"></textarea>
                                            </div>
                                            <button type="submit" value="Submit" name="submit">Submit</button>
                                </form>
                            </center>
        </div>
        </td>
    </div>
    </tr>
    </table>
    </center>
    </div>
    </div>
    <center>
        <div class="container4">
            <table class="ctable">
                <tr>
                    <td><b>Telephone No:</b> +94 11 233 5632</td>
                    <td rowspan="3">
                        <b>Address</b><br>
                        258/3, 7th Lane <br>
                        Park Street <br>
                        Colombo 07<br>
                        Sri Lanka
                    </td>
                </tr>
                <tr>
                    <td><b>Fax:</b> +94 11 233 5632</td>
                </tr>
                <tr>
                    <td><b>Email:</b> abc@hotmail.com</td>
                </tr>
            </table>
        </div>
    </center>

    <footer>
        <p>Copyright ©2022 | All Rights Reserved | Website Design & Developed by Group 12​<br>
      </footer>

</body>