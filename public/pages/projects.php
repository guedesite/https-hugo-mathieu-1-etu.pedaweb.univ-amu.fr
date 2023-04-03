
<header id="home" class="ytback">

    <?php include("public/entete.php")?>

    <div class="row banner" >
        <div class="banner-text">
            <h1 class="responsive-headline" data-trad="entete-titre">My Projects</h1>
        </div>
    </div>


    <div id="bgndVideo" data-property="{videoURL:'https://www.youtube.com/watch?v=UeK_WhqUdrY',containment:'.ytback',optimizeDisplay:true,stopMovieOnBlur:false,loop:true,showYTLogo:false,addRaster:false,showControls:false,autoPlay:true, mute:true, startAt:31, opacity:1}"></div>
</header>
<div class="scrolldown">
    <a class="smoothscroll" href="#about" data-demo="5">
        <span></span>
    </a>
</div>

<section id="about">

    <div class="row">

        <div class="three columns">

            <img class="profile-pic"  src="public/assets/img/profilepic.jpg" alt="" />

        </div>

        <div class="nine columns main-col">

            <h2>My Projects</h2>

            <p>Throughout my academic year, I had the chance to be involved in projects that integrated multiple concepts, including networking, computer science, and electronics. I thrived in these projects, pushing my skills to their limits, and here is a summary:</p>

        </div> <!-- end .main-col -->

    </div>

</section> <!-- About Section End-->


<!-- Resume Section
================================================== -->
<section id="resume" >

    <div class="row" id="sport" data-demo="6">

        <div class="five columns header-col">
            <img class="zoom-image" style="float:left;margin-bottom:20px;margin-left:5%;" src="https://i.imgur.com/3nZcKWP.png" >
        </div>

        <div class="five columns header-col">


            <div class="row item">

                <div class="twelve columns">

                    <h3 style="text-align:center;"> <i class="fa-solid fa-house"></i> Connected greenhouse</h3>
                    <p style="text-align:center;">
                        The aim of this project was to combine and apply the various skills and knowledge acquired during the school year. As a result, we decided to create a connected greenhouse system, which was based on a master-slave relationship between a Raspberry Pi, acting as the master, and Arduino devices connected to the Raspberry Pi using the ISM band provided by the NRF24L01 electronic module</p>

                </div>

            </div> <!-- item end -->

        </div> <!-- main-col end -->

    </div>
    <div class="row" >

        <div class="five columns header-col">
            <div class="row item">

                <div class="twelve columns">
                    <p style="text-align:center;">
                        Each Arduino device was self-sufficient, capable of reaching a range of up to 1 km, making this solution suitable for large-scale implementation. Each device featured a battery with a one-week autonomy, a humidity and temperature sensor, and a motion sensor that allowed for the integration of an alarm system. The devices would send various data to the Raspberry Pi every second, which then acted as an aggregator, redirecting the data stream to a remote MQTT server. On this server, a PHP and Ajax-based solution was installed to dynamically display the acquired information from the various Arduino devices on a Chart.JS graph.</p>

                </div>

            </div>
        </div>

        <div class="five columns header-col" >
            <img class="zoom-image" style="float:right;margin-right:5%;margin-bottom:20px;" src="https://i.imgur.com/v5I4ywe.png" >
        </div>
    </div>
    <div class="row" id="sport" data-demo="6">

        <div class="five columns header-col">
            <img class="zoom-image" style="float:left;margin-bottom:20px;margin-left:5%;" src="https://i.imgur.com/mXCom2U.jpg" >
        </div>

        <div class="five columns header-col">


            <div class="row item">

                <div class="twelve columns">

                    <p style="text-align:center;">
                        This project was a great personal and professional success, and many insights were gained, particularly regarding data transmission through radio waves and the implementation of the MQTT server, as well as the full potential offered by this solution.
                </div>

            </div> <!-- item end -->

        </div> <!-- main-col end -->

    </div>
    <hr style="margin-top:50px; margin-bottom:60px;width:60%;margin-left:20%;margin-right:20%"></hr>


    <div class="row" id="sport" data-demo="6">


        <div class="five columns header-col">


            <div class="row item">

                <div class="twelve columns">

                    <h3 style="text-align:center;"> <i class="fa-solid fa-car-on"></i>RC-Car Project</h3>
                    <p style="text-align:center;">
                        This project, like the previous one, aimed to consolidate and apply as much knowledge and skills acquired in our coursework as possible. However, this time we wanted to push our limits even further. The previous project was halted and did not progress beyond the prototype stage on a breadboard due to hardware and circumstantial constraints. This time, we decided to take the project as far as possible and create the most professional solution possible, this time on a PCB.
                </div>

            </div> <!-- item end -->

        </div> <!-- main-col end -->

        <div class="five columns header-col">
            <img class="zoom-image" style="float:left;margin-bottom:20px;margin-left:5%;" src="https://i.imgur.com/zza4ytj.png" >
        </div>

    </div>
    <div class="row" >

        <div class="five columns header-col" >
            <img class="zoom-image" style="float:right;margin-right:5%;margin-bottom:20px;" src="https://i.imgur.com/Sypfeel.png" >
        </div>

        <div class="five columns header-col">
            <div class="row item">

                <div class="twelve columns">
                    <p style="text-align:center;">
                        We chose to build a remote-controlled car, but not just any ordinary remote-controlled car; we wanted to come as close as possible to a Formula 1 car model. That's why the car is equipped with various sensors to analyze its behavior. The car's chassis is a combination of salvaged and improved components, capable of reaching a top speed of 100 km/h. The remote control is a Chinese product purchased online, from which we only used the shell and created a custom PCB with the same dimensions to fit inside the remote control. This allowed us to use the remote control for our project with our own PCB. The communication is based on the NRF24L01 module, allowing for a communication distance of over 1 km under optimal conditions.
                </div>

            </div>
        </div>

    </div>
    <div class="row" id="sport" data-demo="6">



        <div class="five columns header-col">


            <div class="row item">

                <div class="twelve columns">

                    <p style="text-align:center;">
                        To further expand our knowledge, we based the project on an STM32 F103, one of the most well-documented and easily accessible STM microcontrollers available online. In order to analyze the various data, we set up a web server that allowed real-time display and historical storage of the collected statistics. This information was gathered and received by a Java socket server, which served as an aggregator for the different devices. Each device, i.e., each remote control, sent the car's received statistics to the server, either through a 2G module with the user providing a SIM card or via an Android app that served as a bridge between the remote control and the socket server. The app connected to the remote control via Bluetooth. </div>

            </div> <!-- item end -->

        </div> <!-- main-col end -->

        <div class="five columns header-col">
            <img class="zoom-image" style="float:left;margin-bottom:20px;margin-left:5%;" src="https://i.imgur.com/YVuYyvP.png" >
        </div>

    </div>
    <div class="row" >
        <div class="five columns header-col" >
            <iframe style="float:right;margin-right:5%;margin-bottom:20px;min-height: 400px" class="zoom-image" src="https://www.youtube.com/embed/Ofj8YCo1dkk" title="RC-CAR  Project ..." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

        <div class="five columns header-col">
            <div class="row item">

                <div class="twelve columns">
                    <p style="text-align:center;">
                        This project is a source of pride for us, as the car still exists and is displayed as a trophy. Many new insights were gained, and a lot of passion was put into this project, which took six months of work. We are proud to have seen it through to completion.

                </div>

            </div>
        </div>


    </div>
</section> <!-- Resume Section End-->


 