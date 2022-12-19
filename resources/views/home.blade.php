@extends('template')

@section('content')

<body id="page-top">
     
   
    <!-- Header-->
    <header class=" text-center text-white">
      
          
        <div class="masthead-content text-center  text-white " >
         
            
            <div class="container px-5">
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 130" class="lamp">
            <!-- bulb -->
          <g>
            <circle class="bulb" style="" cx="30" cy="109.3" r="10.7"/>
             <line style="fill:none;stroke:#D7D5AF;stroke-width:0.263;stroke-linecap:round;stroke-miterlimit:10;" x1="28.1" y1="108.1" x2="27.4" y2="113.4"/>
             <line style="fill:none;stroke:#D7D5AF;stroke-width:0.263;stroke-linecap:round;stroke-miterlimit:10;" x1="32" y1="108.1" x2="32.6" y2="113.4"/>
             <polyline style="fill:none;stroke:#D7D5AF;stroke-width:0.263;stroke-linecap:round;stroke-miterlimit:10;" points="27.8,113.5 28.3,112.8 28.8,113.5 29.6,112.8 30,113.5 30.7,112.9 31.2,113.5 31.8,112.8 32.3,113.5"/>
          </g>
          <!-- /bulb -->
            <rect x="20.7" y="66.7" style="fill:#2D2D2F;" width="18.6" height="15.6"/>
            <rect x="28.5" y="0" style="fill:#2D2D2F;" width="3" height="66.7"/>
            <path style="fill:#2D2D2F;" d="M30,80.3c-16.6,0-30,13.4-30,30h60C60,93.8,46.6,80.3,30,80.3z"/>
            <path style="fill:#2D2D2F;" d="M30,80.3c-16.6,0-30,13.4-30,30h60C60,93.8,46.6,80.3,30,80.3z"/>
        <!--
          <g class="switch">
            <line style="fill:none;stroke:#2D2D2F;stroke-width:0.5;stroke-miterlimit:10;" x1="49" y1="100" x2="49" y2="118"/>
            <circle style="fill:none;stroke:#2D2D2F;stroke-width:0.5;stroke-miterlimit:10;" cx="49" cy="120" r="1.6"/>
          </g>
        -->
        </svg>
          
                <h1 class="masthead-heading mb-0" style="font-size: 80px;">Turn off the light</h1>
                <h2 class="masthead-subheading mb-0" style="font-size: 50px;" >when outside it’s bright</h2>
                <a class="btn btn-success btn-xl rounded-pill mt-5" href="{{}}">Get Started</a>
            </div>
        </div>
      
    </header>
    <!-- Content section 1-->
    <section id="scroll">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"><img class="img-fluid rounded-circle" src="assets/images/image1.png" alt="..." /></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Check & Measure Your Electricity Usage ...</h2>
                        <p> Start saving energy and money today by using our website to compare the energy consumption of your devices and make smart, eco-friendly choices</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 2-->
    <section>
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="p-5"><img class="img-fluid rounded-circle" src="assets/images/image2.png" alt="..." /></div>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <h2 class="display-4"> Tips and Tricks Forum!</h2>
                        <p>share your energy and money saving tips with the community
                            Welcome to our energy saving tips forum! Here, you can share your best tips for reducing energy consumption and help others save on their energy bills. Got a tip that's too good to keep to yourself? Share it here and help make the world a more sustainable place. Let's start saving energy together!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 3-->
    <section>
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"><img class="img-fluid rounded-circle" src="assets/images/image3.jpg" alt="..." /></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Saving energy Gadgets</h2>
                        <p>Want to reduce your energy consumption without sacrificing performance? Check out our advice page for the most energy-efficient devices on the market. From refrigerators to lightbulbs, we've got you covered.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection