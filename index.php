<?php include 'config/config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include 'meta.php'?>
    <title><?php echo $thename?> - convenient and comfortable hostels</title>
    <meta name="keywords" content="Limo Rental, Limousine, Shuttle, Car Service, Limo Transportation, Limo Rental, Limo to Airport, Airport, Shuttle to Airport, Oakland International Airport, San Francisco International Airport, San Jose International Airport, Napa Airport, Sacramento International Airport, Wine Tour, Wine Tasting, Wine Tour and Tasting, Limo wine tour, Limousine Wine Tour, Napa Wine, Sonoma Wine Tour, Livermore Wine Tour, Russian River Wine Tour, Corporate Transportation Car  Service, Sports Event Limousine, Night Out Limo, Airport Limousine, Airport Car Service, Wedding Limousine, Prom Limousine, Birthday Limousine, Airport Transfer, Bay Area Limo, Limo in San Francisco, Sightseeing Limo, Airport Transportation, Airport Shuttle, Napa Valley Wine Tour, Sonoma Valley Wine Tour, Livermore Valley Wine Tour, Wine Country Tour, Transportation service, Shuttle Service, Limousine Service, Black Car Service, OAK, SFO, SJC, SMF, Hourly transportation, Day Trip, Day tour, Point-to-point transportation, Hourly Limousine Service, Hourly Car Service, Hourly Transportation Car Service, Charter Bus Service, Bay Area, limo rentals, party buses, classic cars, stretch limo rental services, California, 1st classic, first classic" />
    <meta name="description" content="Premier Airport Transportation Limousine Car service provider in San Francisco for Corporate Transportation, Wine Tour to Napa, Sonoma, Livermore Valley"/>

    <meta property="og:title" content="Worldwide Chauffeured Transportation - <?php echo $thename?>" />
    <meta property="og:image" content="<?php echo $website_url?>/all-images/plugin-pix/1st-classic.jpg"/>
    <meta property="og:description" content="Premier Airport Transportation Limousine Car service provider in San Francisco for Corporate Transportation, Wine Tour to Napa, Sonoma, Livermore Valley"/>

    <meta name="twitter:title" content="Worldwide Chauffeured Transportation - <?php echo $thename?>"/> 
    <meta name="twitter:card" content="<?php echo $thename?>"/> 
    <meta name="twitter:image"  content="<?php echo $website_url?>/all-images/plugin-pix/1st-classic.jpg"/> 
    <meta name="twitter:description" content="Premier Airport Transportation Limousine Car service provider in San Francisco for Corporate Transportation, Wine Tour to Napa, Sonoma, Livermore Valley"/>
   
    <link href="slide-property/engine/style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
  
	<?php include 'header.php'?>
    <?php include 'slide.php'?>

    <div class="slide-div">
        <div class="content-back-div">
            <div class="text-content-div" data-aos="fade-in" data-aos-duration="1400">
                <h1>Where comfort meets <br/><span class="type-text" id="page-title">convenience</span></h1>
                <p>Relax, you're home</p>

                <div class="slide-bottom-back-div">
                    <div class="slide-bottom-div">
                        <div class="icon-div">
                            <i class="bi-shield-check"></i>
                        </div>

                        <div class="text-div">
                            <p>Good Security</p>
                        </div>             
                    </div>

                    <div class="slide-bottom-div">
                        <div class="icon-div">
                            <i class="bi-shield-check"></i>
                        </div>

                        <div class="text-div">
                            <p>Good Security</p>
                        </div>             
                    </div>

                    <div class="slide-bottom-div">
                        <div class="icon-div">
                            <i class="bi-shield-check"></i>
                        </div>

                        <div class="text-div">
                        <p>Good Security</p>
                        </div>             
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
        // List of sentences
        var _CONTENT = [ "Convenience","Comfort","Secured"];
        // Current sentence being processed
        var _PART = 0;
        // Character number of the current sentence being processed 
        var _PART_INDEX = 0;
        // Element that holds the text
        var _ELEMENT = document.querySelector("#page-title");
        // Implements typing effect
        function Type() { 
            var text =  _CONTENT[_PART].substring(0, _PART_INDEX + 1);
            _ELEMENT.innerHTML = text;
            _PART_INDEX++;

            // If full sentence has been displayed then start to delete the sentence after some time
            if(text === _CONTENT[_PART]) {
                clearInterval(_INTERVAL_VAL);
                setTimeout(function() {
                    _INTERVAL_VAL = setInterval(Delete, 2);
                }, 5000);
            }
        }
        // Implements deleting effect
        function Delete() {
            var text =  _CONTENT[_PART].substring(0, _PART_INDEX - 1);
            _ELEMENT.innerHTML = text;
            _PART_INDEX--;

            // If sentence has been deleted then start to display the next sentence
            if(text === '') {
                clearInterval(_INTERVAL_VAL);

                // If last sentence then display the first one, else move to the next
                if(_PART == (_CONTENT.length - 1))
                    _PART = 0;
                else
                    _PART++;
                _PART_INDEX = 0;

                // Start to display the next sentence after some time
                setTimeout(function() {
                    _INTERVAL_VAL = setInterval(Type, 50);
                }, 100);
            }
        }
        // Start the typing effect on load
        _INTERVAL_VAL = setInterval(Type, 50);
        </script>
    </div>

    <section class="index-content-div">
        <section class="body-div">
            <div class="body-div-in">
                <div class="title-div">
                    <span>Our Hostels</span>
                    <h2>Our Latest Apartment</h2>
                    <p>Rest assured that our hostel provides a safe, welcoming and comfortable environment with friendly staff always avilable to assist </p>
                </div>
                
                <div class="house-list-div">
                    <div class="house-cont">
                        <div class="status-div">Available</div>
                        <div class="image-div">
                            <img src="<?php echo $website_url ?>/all-images/body-pix/background.jpg" alt="hostels for rent">                       
                        </div>

                        <div class="text-div">
                            <div class="text-inner-div">
                                <h2>Single Room</h2>
                                <p>Perfectly designed for solo students, providing everything you need for a restful and rejuvinating for......</p>

                                <div class="bottom-div">
                                    <h4>#150, 000 /<span>year</span></h4>
                                    <button class="btn" title="View Detail">View Detail</button>
                                </div>
                            </div>
                        </div> 
                    </div>

                    <div class="house-cont">
                        <div class="status-div">Available</div>
                        <div class="image-div">
                            <img src="<?php echo $website_url ?>/all-images/body-pix/house1.jpg" alt="hostels for rent">                       
                        </div>

                        <div class="text-div">
                            <div class="text-inner-div">
                                <h2>Mini Flat Apartment</h2>
                                <p>Perfectly designed for solo students, providing everything you need for a restful and rejuvinating for......</p>

                                <div class="bottom-div">
                                    <h4>#150, 000 /<span>year</span></h4>
                                    <button class="btn" title="View Detail">View Detail</button>
                                </div>
                            </div>
                        </div> 
                    </div>

                    <div class="house-cont">
                        <div class="status-div">Available</div>
                        <div class="image-div">
                            <img src="<?php echo $website_url ?>/all-images/body-pix/house5.jpg" alt="hostels for rent">                       
                        </div>

                        <div class="text-div">
                            <div class="text-inner-div">
                                <h2>Self Contained</h2>
                                <p>Perfectly designed for solo students, providing everything you need for a restful and rejuvinating for......</p>

                                <div class="bottom-div">
                                    <h4>#150, 000 /<span>year</span></h4>
                                    <button class="btn" title="View Detail">View Detail</button>
                                </div>
                            </div>
                        </div> 
                    </div>

                    <div class="house-cont">
                        <div class="status-div">Available</div>
                        <div class="image-div">
                            <img src="<?php echo $website_url ?>/all-images/body-pix/house4.jpg" alt="hostels for rent">                       
                        </div>

                        <div class="text-div">
                            <div class="text-inner-div">
                                <h2>Self Contained</h2>
                                <p>Perfectly designed for solo students, providing everything you need for a restful and rejuvinating for......</p>

                                <div class="bottom-div">
                                    <h4>#150, 000 /<span>year</span></h4>
                                    <button class="btn" title="View Detail">View Detail</button>
                                </div>
                            </div>
                        </div> 
                    </div>

                    <div class="house-cont">
                        <div class="status-div">Available</div>
                        <div class="image-div">
                            <img src="<?php echo $website_url ?>/all-images/body-pix/house3.avif" alt="hostels for rent">                       
                        </div>

                        <div class="text-div">
                            <div class="text-inner-div">
                                <h2>Single Room</h2>
                                <p>Perfectly designed for solo students, providing everything you need for a restful and rejuvinating for......</p>

                                <div class="bottom-div">
                                    <h4>#150, 000 /<span>year</span></h4>
                                    <button class="btn" title="View Detail">View Detail</button>
                                </div>
                            </div>
                        </div> 
                    </div>

                    <div class="house-cont">
                        <div class="status-div">Available</div>
                        <div class="image-div">
                            <img src="<?php echo $website_url ?>/all-images/body-pix/house2.jpg" alt="hostels for rent">                       
                        </div>

                        <div class="text-div">
                            <div class="text-inner-div">
                                <h2>Mini Flat Apartment</h2>
                                <p>Perfectly designed for solo students, providing everything you need for a restful and rejuvinating for......</p>

                                <div class="bottom-div">
                                    <h4>#150, 000 /<span>year</span></h4>
                                    <button class="btn" title="View Detail">View Detail</button>
                                </div>
                            </div>
                        </div> 
                    </div>
                    
                </div>
            </div> 
        </section>
    </section>

    <?php include 'bottom-scripts.php'?>
</body>
</html>