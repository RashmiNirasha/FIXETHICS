
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="assets\css\about.css">
    
    <link
    rel="stylesheet"
    href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'files\navbar.php';?>
        <!--body-->
        <div class="body1">
            <div class="right_body">
                <h1 style="padding:10px 30px 10px 30px; text-align: center; color: azure;">
                    A FEW WORDS ABOUT US
                </h1>
                <hr style="border: 1px dashed #AB7878;"/>
                <p style="padding:10px 30px 10px 30px;text-align: center; color: azure; font-size: large;">
                    Fixetics offers computer solutions that are appropriate for both your business and your home.
                    Based on many years of experience in Laptop & Desktop PC servicing and repairs, technical
                    support, maintenance, and networking, we launched our business providing comprehensive 
                    ON SITE computer services to home and business PC users. We provide low-cost, high-quality
                    remote services via the internet to resolve the majority of typical problems.
                </p>
                <p style="padding:0px 30px 10px 30px;text-align: center; color: azure;font-size: large;">
                    We aim to grow alongside our clients, so we expanded our business to encompass 
                    web development and marketing, data recovery services, and intelligence services,
                    and we started providing cost-effective solutions throughout Sri Lanka.
                </p>
                    
            </div>
            <div class="left_body">
                <img src="assets\img\shop.png" style="padding: 30px 10px 10px 30px;display: block;margin-left: auto;margin-right: auto;height: 500px;">
            </div>
        </div>

        <div class="body2">
           <div style="border: white solid 2px;">
            <h1 style="padding:10px 0px 0px 0px; text-align: center; color: azure;">
                    WHY CHOOSE US?
                </h1>
                <ul style="list-style-type:circle; color: azure; font-size: large;width: 400px; margin-left: auto; margin-right: auto;">
                    <li>We place a premium on minimalism.</li>
                    <li>We are cost-effective.</li>
                    <li>We are a friendly business to work with.</li>
                    <li>We only charge you when we do work for you.</li>
                    <li>We’re honest.</li>
                    <li>You’re the boss.</li>
                </ul>
            </div> 
        </div>

        <!--reviews-->
        <div class="review">
            <h2 style=" text-align: left; color: azure; padding: 10px;">WANT MORE REASONS?</h2>
            <p style="padding:0px 30px 10px 30px; color: azure;font-size: large;">
                Why don't we give our customers the opportunity to speak for themselves? 
                Here are some of our valued clients' experiences, which will give you on more reasons to choose us.
            </p>
            <hr style="border: 1px solid #AB7878;"/>
        </div> 
        <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="flex">
                        <div class="comments">
                        Very happy I took my MacBook to these people. They were professional and honest and did a great job. I definitely would go back but I hope I never have to
                        </div>
                        <div class="profile">
                            <img src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                            <a href="#">Kangara Perera</a>
                            <span>12.02.2022</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex">
                        <div class="comments">
                        Fixetics did such a great job fixing my laptop with water damage for a great price. Anywhere else would have scammed me- as a college student, I really appreciate it. Thanks guys!
                         </div>
                        <div class="profile">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                            <a href="#">Sara Sanmugam</a>
                            <span>10.01.2022</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="flex">
                        <div class="comments">
                        When I first started getting familiar with computers I did a lot of messy things to my computer. I looked around for a business that could help me fix the errors I created. I decided on Fixetics. And was so happy with my choice.The first time using Fixetics was a wonderful experience as well as affordable.They helped me all the way through the repair, it took them two days of continuous work but he did it without complaint. I have gone back since the first time which was in 2010. Thank you Fixetics!
                        </div>
                        <div class="profile">
                            <img src="https://images.unsplash.com/photo-1503185912284-5271ff81b9a8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                            <a href="#">Sangeerthana Saitharshan</a>
                            <span>20.12.2021</span>
                        </div>
                    </div>
                </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
        
            </div>      

        <!--footer-->
        <div class="copyrights" style=" width: 100%;">
            <p>Copyright © 2022 | All Rights Reserved | Website Designed & Developed by Group 12​</p>
        </div>
    </div>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="./main.js"></script>
</body>
</html>