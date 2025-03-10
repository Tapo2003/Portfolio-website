<!DOCTYPE html> 
<html lang="en" class="no-js"> 
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
@include('css')
<body id="body" data-spy="scroll" data-target="#navigation" data-offset="300">
    <!-- <i class= "fa fa-search"></i> -->
    <div class="preloader-area">
        <div class="loader">
            <div class="loader-inner"></div>
            <div class="loader-inner"></div>
            <div class="loader-inner"></div>
            <div class="loader-inner"></div>
            <div class="loader-inner"></div>
            <div class="loader-inner"></div>
            <div class="loader-inner"></div>
            <div class="loader-inner"></div>
        </div>
    </div> 
    
   <style>
    .logo h1{
        text-shadow: 2px 2px 4px black;
        color: white;
        text-transform: uppercase;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color:#90acd1;
        width:140px;
        border-radius: 60px;
        padding-left:20px;
       
        padding-top:10px;
        padding-bottom:10px;
        font-style: italic;
        font-size: 14px;
        font-weight: bolder;   
    }

    @media screen and (max-width: 440px){
        #heading{
           margin-top:50px;
           
        }
    }
    @media screen and (max-width: 313px){
        #heading{
           margin-top:100px;
           
        }
    }
   </style>
    @include('header')
      <section class="hero-area sky-blue d-flex align-items-center">
            <div class="container">
              <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12" id = "heading">
                        <div class="hero-caption">
                           <span class="subheading" style = "font-size:30px">HELLO! WE ARE</span>
                           <h1 style = "font-size: 35px; font-style: italic; font-weight: bold; font-family: georgia,sans-serif; color:black;
                            ">JAYPIZ TECH !</h1>
                           <div style = "font-size:27px">We <span class="txt-rotate" data-period="2000" data-rotate='[ "Build Responsive Website.", "Build Desktop Application.", "Design Website.", "Deliver Your Project On Time."]'></span></div><hr>
                           <p style = "font-style: italic">We specialize in creating custom websites that meet the unique needs of our clients. Our team is dedicated to delivering high-quality, functional, and user-friendly websites that help you stand out online.</p> 
                           <!-- <a href="#" class="btn radius-btn" >About Us</a> -->
                           
                           <a class="nav-link transition btn radius-btn" href="#about" style = "text-shadow: 2px 2px 4px black;">About Us</a>
                        </div>              
                    </div>
                    <!-- <div class="col-lg-6 col-md-6"> -->
                    <div class="col-lg-6 col-md-6 d-none d-lg-block">
                        <div class="hero-img"> <img src="{{url('assets/img/about-area/about-us1.jpg')}}" alt="Hero image" width = "400px" style = "border-radius:250px;border: 10px solid #90acd1;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-shape custom-animation"> 
                <img src="{{url('assets/img/welcome-area/hero-shape.png')}}" alt="animation shape">
                <img src="{{url('assets/img/welcome-area/hero-shape.png')}}" alt="animation shape">
            </div> 
        </section> 
        <section class="service-area section-padding" id="services">
            <div class="container" >
                <!-- <div class="row align-items-center">
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <div class="process-block pl-4"> 
                            <span class="text-uppercase text-sm letter-spacing">My Services</span>
                            <h2 class="service-title mb-4 mt-3">I can make this awesome things</h2>
                            <p>I understand what your business means to you,your requirements considering trends.Smet nemo excepturi voluptas eligendi .</p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="row"><div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="service-block text-center mb-4 mb-lg-0"> 
                                <i class="fa fa-lightbulb-o">

                                </i>
                                <h4>Data analysis</h4>
                                <p>A complete web app solution for business</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="service-block text-center mt-4 mb-4 mb-lg-0"> 
                                <i class="fa fa-dashboard"></i>
                                <h4>Web Development</h4>
                                <p>A complete web app solution for business</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="service-block text-center"> 
                                <i class="fa fa-diamond"></i>
                                <h4>Content Mangement</h4>
                                <p>A complete web app solution for business</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="service-block text-center mt-4">
                                 <i class="fa fa-bar-chart"></i>
                                 <h4>Mobility</h4><p>A complete web app solution for business</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div> 
        </section> 
        <section class="about-area section-padding sky-blue" id="about" >
            <div class="container" >
                <div class="row align-items-center">
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="img-about">
                            <img class="img-fluid" src="{{url('assets/img/about-area/about-us.jpg')}}" alt="abou me" style  = "height:500px">
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-12">
                        <div class="about-details">
                            <div class="section-title mb-50">
                                <h2>About Us</h2>
                            </div>
                            <p>At Jaypiz Tech, we believe that every project is unique, and so is every solution. Our mission is to create websites that not only meet the technical needs of our clients but also align with their core values and vision. We specialize in building custom websites from scratch, ensuring a seamless blend of aesthetics, functionality, and user experience. Whether it's an e-commerce platform, a blog, a corporate site, or a portfolio, we design and develop with a deep understanding of each client’s specific needs. Our team of two professionals collaborates closely with you at every stage of the project, transforming your ideas into digital realities. From startups to established businesses, we are committed to delivering top-tier results that drive impact and growth. With a commitment to quality and innovation, we approach every project with the same passion for detail, creating websites that are not only functional but also engaging, modern, and user-friendly.</p>
                            <!-- <ul class="about-info mt-4">
                                <li><span>Name:</span> 
                                    <span>Karim EzZat</span>
                                </li>
                                <li><span>Date of birth:</span> 
                                    <span>November 28, 1993</span>
                                </li>
                                <li><span>Address:</span> 
                                    <span>Mansoura El-Dakahlia, Egypt</span>
                                </li>
                                <li><span>Zip code:</span> 
                                    <span>1234</span>
                                </li>
                                <li><span>Email:</span>
                                     <span>karim@gmail.com</span>
                                </li>
                                    <li><span>Phone: </span> 
                                        <span>+1-2345-6789-0-0</span>
                                    </li>
                            </ul> -->
                            <div class="download-btn mt-5"> 
                                <a class="nav-link transition btn radius-btn" href="#resume">Skills</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div> 
        </section> 
        <section class="resume-area section-padding" id="resume">
            <div class="container">
                <div class="row mb-50">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Skills And Experience</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 d-none d-lg-block">
                        <nav id="navi">
                            <ul>
                                <li><a href="#page-1">Experience</a>
                                </li>
                                <li>
                                    <a href="#page-3">Skills</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                   
                    <div class="col-lg-9 col-md-12">
                        <div id="page-1" class="page one">
                            <h3 class="heading">Experience</h3>
                           
                            <div class="resume-wrap transition d-flex">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="icon-briefcase"></span>
                                </div>
                                <div class="text pl-3">
                                    <span class="date">2017</span>
                                    <h4>Fullstack Developer</h4>
                                     <span class="position">Freelance</span>
                                </div>
                            </div>
                            <div class="resume-wrap transition d-flex">
                                <div class="icon d-flex align-items-center justify-content-center"> 
                                    <span class="icon-briefcase">

                                    </span>
                                </div>
                                <div class="text pl-3">
                                    <span class="date">2018</span>
                                        <h4>Website Developer</h4>
                                    <span class="position">Freelance</span>
                                </div>
                            </div>
                            <div class="resume-wrap transition d-flex">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="icon-briefcase"></span>
                                </div>
                                <div class="text pl-3">
                                    <span class="date">2018-2019</span>
                                    <h4>Frontend/Backend Developer</h4>
                                    <span class="position">At Federal University Of Technology Akure</span>
                                    
                                </div>
                                
                            </div>
                            <div class="resume-wrap transition d-flex">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="icon-briefcase"></span>
                                </div>
                                <div class="text pl-3">
                                    <span class="date">2020-2021</span>
                                    <h4>Website Developer</h4>
                                    <span class="position">At Federal University Of Technology Akure</span>
                                    
                                </div>
                                
                            </div>
                            <div class="resume-wrap transition d-flex">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="icon-briefcase"></span>
                                </div>
                                <div class="text pl-3">
                                    <span class="date">2021-2022</span>
                                    <h4>Website Developer</h4>
                                    <span class="position">Freelance</span>
                                    
                                </div>
                                
                            </div>
                            <div class="resume-wrap transition d-flex">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="icon-briefcase"></span>
                                </div>
                                <div class="text pl-3">
                                    <span class="date">2023-2024</span>
                                    <h4>Website Developer</h4>
                                    <span class="position">Freelance</span>
                                    
                                </div>
                                
                            </div>
                        </div>
            
                        <div id="page-3" class="page three">
                            <h3 class="heading">Skills</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="progress-wrap">
                                        <h5>WEBSITE DEVELOPMENT</h5>
                                        <div class="progress"n, is dummy text used in laying out print, graphic or web designs.>
                                            <div class="progress-bar color-1" style="width:90%"> <span>90%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="progress-wrap">
                                        <h5>FULLSTACK DEVELOPMENT</h5>
                                        <div class="progress"n, is dummy text used in laying out print, graphic or web designs.>
                                            <div class="progress-bar color-1" style="width:90%"> <span>90%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="progress-wrap">
                                        <h5>FRONT END DEVELOPMENT</h5>
                                        <div class="progress"n, is dummy text used in laying out print, graphic or web designs.>
                                            <div class="progress-bar color-1" style="width:90%"> <span>90%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="progress-wrap">
                                        <h5>BACK END DEVELOPMENT</h5>
                                        <div class="progress"n, is dummy text used in laying out print, graphic or web designs.>
                                            <div class="progress-bar color-1" style="width:90%"> <span>90%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 animate-box">
                                    <div class="progress-wrap">
                                        <h5>DESKTOP APP DEVELOPMENT</h5>
                                        <div class="progress"n, is dummy text used in laying out print, graphic or web designs.>
                                            <div class="progress-bar color-1" style="width:90%"> <span>90%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div><br>
                            <h3 class="heading">Tech Stack</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="progress-wrap">
                                        <h5>PHP</h5>
                                        <div class="progress"n, is dummy text used in laying out print, graphic or web designs.>
                                            <div class="progress-bar color-1" style="width:90%"> <span>90%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="progress-wrap">
                                        <h5>LARAVEL</h5>
                                        <div class="progress"n, is dummy text used in laying out print, graphic or web designs.>
                                            <div class="progress-bar color-1" style="width:90%"> <span>90%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="progress-wrap">
                                        <h5>CODE IGNITER</h5>
                                        <div class="progress"n, is dummy text used in laying out print, graphic or web designs.>
                                            <div class="progress-bar color-1" style="width:90%"> <span>90%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 animate-box">
                                    <div class="progress-wrap">
                                        <h5>JAVASCRIPT</h5>
                                        <div class="progress">
                                            <div class="progress-bar color-6" style="width:80%"> <span>80%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 animate-box">
                                    <div class="progress-wrap">
                                        <h5>jQuery</h5>
                                        <div class="progress">
                                            <div class="progress-bar color-2" style="width:85%"> <span>85%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 animate-box">
                                    <div class="progress-wrap">
                                        <h5>Ajax</h5>
                                        <div class="progress">
                                            <div class="progress-bar color-2" style="width:85%"> <span>85%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 animate-box">
                                    <div class="progress-wrap">
                                        <h5>HTML</h5>
                                        <div class="progress">
                                            <div class="progress-bar color-3" style="width:95%"> <span>95%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 animate-box">
                                    <div class="progress-wrap">
                                        <h5>CSS</h5>
                                        <div class="progress">
                                            <div class="progress-bar color-4" style="width:90%"> <span>90%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 animate-box">
                                    <div class="progress-wrap">
                                        <h5>Bootstrap</h5>
                                        <div class="progress">
                                            <div class="progress-bar color-4" style="width:90%"> <span>90%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 animate-box">
                                    <div class="progress-wrap">
                                        <h5>SQL </h5>
                                        <div class="progress">
                                            <div class="progress-bar color-5" style="width:70%"> <span>70%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </section>
        <section class="works-area section-padding sky-blue" id="works">
            <div class="container">
                <div class="row mb-50">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Our Projects</h2>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-xs-12">
                        <div class="filters">
                            <ul>
                                <!-- <li class="active" data-filter=".all">All</li> -->
                                <!-- <li data-filter=".branding">Branding</li>
                                <li data-filter=".creative">Creative Work</li>
                                <li data-filter=".web-design">Web Design</li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="filters-content">
                    <div class="row grid">
                    
                        <div class="single-work col-lg-4 col-md-6 col-sm-12 all creative">
                            <div class="position-relative" style = "box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);">
                                <div class="thumb">
                                    <img class="image img-fluid" src="assets/img/works/janotrading.png" alt="work" style = "height:1000px">
                                </div>
                                <a class="overlay transition" href="https://janoktrading.com/">
                                    
                                </a><div class="short-info transition">
                                    <h4>JANO TRADING AND STORES</h4>
                                    <!-- <div class="cat">Client Project</div> -->
                                </div>
                            </div>
                        </div>
                        <div class="single-work col-lg-4 col-md-6 col-sm-12 all web-design branding">
                            <div class="position-relative" style = "box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);">
                                <div class="thumb">
                                    <img class="image img-fluid" src="assets/img/works/tenderbonds.png" alt="work">
                                </div>
                                <a class="overlay transition" href="https://tenderbondscareservices.com/">

                                </a>
                                <div class="short-info transition">
                                    <h4>Holistic Care Approach</h4>
                                    <!-- <div class="cat">Client Project</div> -->
                                </div>
                            </div>
                        </div>
                        <div class="single-work col-lg-4 col-md-6 col-sm-12 all branding web-design">
                            <div class="position-relative" style = "box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);">
                                <div class="thumb">
                                    <img class="image img-fluid" src="assets/img/works/mtlodonservice.png" alt="work" style = "height:1000px">
                                </div>
                                <a class="overlay transition" href="https://mtlondonservices.co.uk/"></a>
                                <div class="short-info transition">
                                    <h4>Mtlondonservices</h4>
                                    <!-- <div class="cat">Client Project</div> -->
                                </div>
                            </div>
                        </div>
                        
                        <div class="single-work col-lg-4 col-md-6 col-sm-12 all creative" >
                            <div class="position-relative" style = "box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);">
                                <div class="thumb">
                                    <img class="image img-fluid" src="assets/img/works/afrigroceries.png" alt="work" style = "height:1000px">
                                </div>
                                <a class="overlay transition" href="https://jaytec.com.ng/afrigroceries/">
                                    
                                </a><div class="short-info transition">
                                    <h4>Afrigroceries</h4>
                                    <!-- <div class="cat">Client Project</div> -->
                                </div>
                            </div>
                        </div>
                        <div class="single-work col-lg-4 col-md-6 col-sm-12 all web-design branding">
                            <div class="position-relative" style = "box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);">
                                <div class="thumb">
                                    <img class="image img-fluid" src="assets/img/works/onwardcars.png" alt="work">
                                </div>
                                <a class="overlay transition" href="https://jaytec.com.ng/onwardcars/ ">

                                </a>
                                <div class="short-info transition">
                                    <h4>Onward Cars</h4>
                                    <!-- <div class="cat">Client Project</div> -->
                                </div>
                            </div>
                        </div>
                        <div class="single-work col-lg-4 col-md-6 col-sm-12 all creative">
                            <div class="position-relative"  style = "box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);margin-top:30px">
                                <div class="thumb">
                                    <img class="image img-fluid" src="assets/img/works/arise-thrift.png" alt="work" style = "height:500px">
                                </div>
                                <a class="overlay transition" href="https://jaytec.com.ng/Arise-Thrift/">
                                    
                                </a><div class="short-info transition">
                                    <h4>Arise-Thrift Collection</h4>
                                    <!-- <div class="cat">Client Project</div> -->
                                </div>
                            </div>
                        </div>

                        <div class="single-work col-lg-4 col-md-6 col-sm-12 all web-design branding">
                            <div class="position-relative"  style = "box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);margin-top:30px">
                                <div class="thumb">
                                    <img class="image img-fluid" src="assets/img/works/online-exam.png" alt="work" style = "height:400px">    
                                </div>
                                <a class="overlay transition" href="https://jaytec.com.ng/OnlineExam/">

                                </a>
                                <div class="short-info transition">
                                    <h4>Online Exam</h4>
                                    <!-- <div class="cat">Client Project</div> -->
                                </div>
                            </div>
                        </div>

                        <div class="single-work col-lg-4 col-md-6 col-sm-12 all branding web-design" >
                            <div class="position-relative" style = "box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);margin-top:40px">
                                <div class="thumb">
                                    <img class="image img-fluid" src="assets/img/works/paragon-computer.png" alt="work" style = "height:500px">
                                </div>
                                <a class="overlay transition" href="https://jaytec.com.ng/Paragon-computer-ventures/"></a>
                                <div class="short-info transition">
                                    <h4>Paragon Computer Ventures</h4>
                                    <!-- <div class="cat">Client Project</div> -->
                                </div>
                            </div>
                        </div>

                        <div class="single-work col-lg-4 col-md-6 col-sm-12 all branding web-design" >
                            <div class="position-relative" style = "box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);margin-top:40px">
                                <div class="thumb">
                                    <img class="image img-fluid" src="assets/img/works/commodity-farmer.png" alt="work" style = "height:1000px">
                                </div>
                                <a class="overlay transition" href="https://southwestcommoditiesfarmersorganization.com.ng/southwestcommodityfarmersorganization/"></a>
                                <div class="short-info transition">
                                    <h4>Commodity Farmers</h4>
                                    <!-- <div class="cat">Client Project</div> -->
                                </div>
                            </div>
                        </div>

                        <div class="single-work col-lg-4 col-md-6 col-sm-12 all branding web-design" >
                            <div class="position-relative" style = "box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);margin-top:40px">
                                <div class="thumb">
                                    <img class="image img-fluid" src="assets/img/works/south-west-farmer.png" alt="work" style = "height:1500px">
                                </div>
                                <a class="overlay transition" href="https://jaytec.com.ng/southwestfarmers"></a>
                                <div class="short-info transition">
                                    <h4>South West Farmers</h4>
                                    <!-- <div class="cat">Client Project</div> -->
                                </div>
                            </div>
                        </div>

                        <div class="single-work col-lg-4 col-md-6 col-sm-12 all branding web-design" >
                            <div class="position-relative" style = "box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);margin-top:40px">
                                <div class="thumb">
                                    <img class="image img-fluid" src="assets/img/works/cafe-duke.png" alt="work" style = "height:1400px">
                                </div>
                                <a class="overlay transition" href="https://jaytec.com.ng/cafeduke/"></a>
                                <div class="short-info transition">
                                    <h4>Cafe Duke</h4>
                                    <!-- <div class="cat">Client Project</div> -->
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </section>
       
    <section class="hire-me-area section-padding" style = "background-color:black">
        <div class="container">
           
        </div>
    </div>
    </section>
<!-- <section class="testimonial-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-12">
                <div class="test-slider">
                    <div class="test-item">
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus.</p>
                        <div class="author-info">
                            <img src="{{url('assets/img/testimonial/c1.jpg')}}" alt="client">
                            <h4>Soura</h4>
                            <div class="position">Project Manager <span>Karmen</span>
                            </div>
                        </div>
                    </div>
                    <div class="test-item">
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus.</p>
                        <div class="author-info">
                            <img src="{{url('assets/img/testimonial/c2.jpg')}}" alt="client">
                            <h4>Sara Ezzat</h4>
                            <div class="position">Project Manager <span>Ask</span>
                            </div>
                        </div>
                    </div>
                    <div class="test-item">
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus.</p>
                        <div class="author-info">
                            <img src="{{url('assets/img/testimonial/c3.jpg')}}" alt="client">
                            <h4>Ahmed Ezzat</h4>
                            <div class="position">Project Manager <span>Twitter</span>
                            </div>
                        </div>
                    </div>
                    <div class="test-item">
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus.</p>
                        <div class="author-info">
                            <img src="{{url('assets/img/testimonial/c4.jpg')}}" alt="client">
                            <h4>Karim Ezzat</h4>
                            <div class="position">Project Manager <span>Facebook</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<section class="blog-area section-padding sky-blue" id="blog">
    <div class="container">
    
    </div>
</section>
<section class="contact-area section-padding" id="contact">
    <div class="container">
        <div class="row mb-50">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Contact Me</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 mb-5 mb-lg-0">
                <div class="contact-left">
                    <div class="media align-items-center">
                        <div class="media-icon">
                            <i class="icon-envelope-letter"></i>
                        </div>
                        <div class="media-body">
                            <h4>Email</h4>
                            <span>toyinafepeace@gmail.com</span>
                            <span>Your@gmail.com</span>
                        </div>

                        <!-- <a href="https://wa.me/+2348062965917" target="_blank">Message Me on WhatsApp</a> -->
                    </div>
                    <div class="media align-items-center">
                        <div class="media-icon">
                            <i class="icon-screen-smartphone"></i>
                        </div>
                        <div class="media-body">
                            <h4>Phone</h4>
                            <span>08062965917</span>
                            <span>08143737391</span>
                        </div>
                    </div>

                    <div class="media align-items-center">
                        <div class="media-icon">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>
                        <div class="media-body">
                        <h4>Contact</h4>
                        <!-- <span>08062965917</span> -->
                             <a href="https://wa.me/+2348062965917" target="_blank" style  = "color:#90acd1">08062965917</a>
                             <a href="https://wa.me/+2348143737391" target="_blank" style  = "color:#90acd1">08143737391</a>
                        </div>
                    </div>
                    <!-- <div class="media align-items-center">
                        <div class="media-icon">
                            <i class="icon-social-skype"></i>
                        </div>
                        <div class="media-body">
                            <h4>Skype</h4>
                            <span>Yuor Skype</span>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-7 offset-lg-2 col-md-8">
                                <form class="row contact-form" action="/upload" method="POST" id = "sendmessage">
                                    @csrf                                    
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter your name" name = "name" id = "name" autofocus>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id = "email" placeholder="Your email address">
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="title" id = "title" placeholder="Enter the discussion title">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" class="form-control" placeholder="Write your message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="button-field">
                                            <button type="button" class="btn radius-btn" onclick = "ContactUs()">Send Message now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <footer class="footer-area sky-blue">
                    <div class="container">
                    
                        <div class="row footer-bottom text-center justify-content-center">
                            <p class="col-lg-8 col-sm-12 footer-text"> Copyright © <?php echo date('Y'); ?> All Rights Reserved by Piz_tech</p>
                        </div>
                    </div>
                </footer>
                <script src="{{url('assets/js/jquery-3.2.0.min.js')}}">
                </script>
                <script src="{{url('assets/js/popper.min.js')}}"></script>
                <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
                <script src="{{url('assets/js/jquery.slicknav.min.js')}}"></script>
                <script src="{{url('assets/js/isotope.pkgd.min.js')}}"></script>
                <script src="{{url('assets/js/owl.carousel.min.js')}}"></script>
                <script src="{{url('assets/js/slick.min.js')}}"></script>
                <script src="{{url('assets/js/jquery.scrollUp.min.js')}}"></script>
                <script src="{{url('assets/js/main.js')}}"></script>
                <script>
                    function ContactUs(){
                        var name            = $("#name").val().trim();
                        var email           = $("#email").val().trim();
                        var emailPattern    = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
                        var title           = $("#title").val().trim();
                        var message         = $('#message').val().trim();
                        
                        if(name == '' || email == '' || title == '' || message == ''){
                            alert("Please fill up the form");
                        }else if(!emailPattern.test(email)){
                            alert('This email is not valid');
                        }else{
                            var response = confirm("Are You Sure You Want To Send Us A Message ?");
                            if(response = true){
                                var formdata = $("form#sendmessage").serialize();
                                $.post("{{url('upload')}}",formdata).done(function(returndata){
                                    if(returndata == 1){
                                        alert("You have successfully gotten in touch with us.");
                                        Clearfields();
                                    }else{
                                        alert(returndata);            
                                    }
                                });
                            }
                        }
                    }


                    function Clearfields(){
                        $("#name").val('');
                        $("#email").val('');
                        $("#title").val('');
                        $("#message").val('');
                    }
                </script>
            </body>

</html>