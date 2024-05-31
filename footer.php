<footer class="footer-div">  
    <div class="footer-div-in"> 
        <div class="newletter-back-div" data-aos="fade-in" data-aos-duration="800">
            <div class="inner-div">
                <div class="left-div">
                    <h3>Join Our Newsletter </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore </p> 
                </div>

                <div class="right-div">
                    <input type="text" class="text_field" id="email" title="Enter Your Email Address" placeholder="Enter Your Email Address">                           
                    <div class="btn-div">
                        <a href="<?php echo $website_url?>" title="Subscribe">
                        <button class="btn" title="Subscribe">Subscribe</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="segment-back-div">
            <div class="segment-div left-segment" data-aos="fade-up" data-aos-duration="1000">
                <div class="logo-div"><img src="<?php echo $website_url?>/all-images/images/logo.png" alt="<?php $thename?> Logo"></div>
                <p>Lorem ipsum dolor sit amet, consectet adipiscing elit, sed do eiusmod </p>           
                 
                <div class="address-back-div">
                    <div class="address-div">
                        <div class="icon-div">
                            <i class="bi-geo-alt"></i>
                        </div>

                        <div class="text-div">
                            <p> 12, Kotco Road, Off Lagos-Ibadan Express Way, Ode Remo, Ogun State.</p>
                        </div> 
                    </div>

                    <div class="address-div">
                        <div class="icon-div">
                            <i class="bi-envelope-fill"></i>
                        </div>

                        <div class="text-div">
                            <p>gethostel@gmail.com</p>
                        </div> 
                    </div>

                    <div class="address-div">
                        <div class="icon-div">
                            <i class="bi-telephone-fill"></i>
                        </div>

                        <div class="text-div">
                            <<p>+234 8050881905</p>
                        </div> 
                    </div>
                </div>
            </div>

            <div class="segment-div" data-aos="fade-up" data-aos-duration="1200">
                <h3>Quick Link</h3>
                <ul>
                    <a href="#">
                    <li>About Us</li></a>
                    <a href="#">
                    <li>Hostels</li></a>
                    <a href="#">
                    <li>Blog & Articles</li></a>
                    <a href="#">
                    <li>Frequently Asked Questions</li></a>
                    <a href="#">
                    <li>Contact Us</li></a>
                </ul>
            </div>

            <div class="segment-div" data-aos="fade-up" data-aos-duration="1400">
                <h3>Official Links</h3>
                <ul>
                    <a href="#">
                    <li>Terms & Condition</li></a>
                    <a href="#">
                    <li>Privacy Policy</li></a>
                    <a href="#">
                    <li>Cookies Policy</li></a> 
                </ul>                
            </div>

            <div class="segment-div left-segment" data-aos="fade-up" data-aos-duration="1500">
                <h3>Working Hours</h3>

                <div class="address-back-div">
                    <div class="address-div">
                        <div class="icon-div">
                            <i class="bi-clock"></i>
                        </div>

                        <div class="text-div">
                            <p>Available 24/7</p>
                        </div> 
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectectur adipiscing elit, sed do eiusmod tempor </p>                
                </div>          
            </div>
        </div>
    </div>

    <div class="main-bottom-div">
        <div class="inner-container">
            <p>Developed by: <a href="https://www.afootechglobal.com" title="About Us"><span class="text">Afootech Global IT Solution</span></a></p>
            <p>&copy; 2022 - <?php echo date("Y") ?> <span><?php echo $thename?></span>. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<?php include 'bottom-scripts.php'?>