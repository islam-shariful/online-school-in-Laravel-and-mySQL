<html>
    <head>
        <title>School Management App</title>
         <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="/student/css/index.css">
        <link rel="stylesheet" type="text/css" href="/student/css/bootstrap.min.css">
        
        <link href="/student/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="/student/css/app.min.css" rel="stylesheet" type="text/css" />

</head>
    <body>
        <header class="main-header" id="header">
            <div class="main">
                <div class="load">
            </div>
        
                <div class="top-nav-bar">
                    <div class="menu-bar">
                    <ul>
                        <li class="active"><a href="{{route('landing')}}">Home</a></li>
                        <li><a href="{{route('login')}}">login <span class="caret"></span></a></li>
                        <li><a href="#about">about</a></li>
                        
                        <li><a href="#contact">contact</a></li>
                    </ul>
                    </div>
                </div>
            </div>
        
        </header>
        
            <section class="section-padding" id="about">
                <div class="container">
                    <div class="row">
                        <div class="section-title">
                            <h2 class="head-title">Welcome to A High School</h2>
                            <hr class="line">
                            <p>A High School is a public secondary school in Bellevue, Washington. It serves students in grades 9–12 in the southern part of the Bellevue School District, including the neighborhoods of Eastgate, Factoria, Newport Hills, Newport Shores, Somerset, The Summit, and Sunset. As of the 2014-2015 school year, the principal is Dion Yahoudy. The mascot is the Knight, and the school colors are scarlet and gold.</p>
                        </div>
                    </div>
                </div>
            </section>
        
            <section class="section-padding" id="contact">
                <div class="container">
                    <div class="row">
        
                        <div class="section-title">
                            <h2 class="head-title">Contact Us</h2>
                            <hr class="line">
                            <p>We would be delighted to serve you with our services, just use the form below or choose the services you are interested in and we will be in touch with you in few hours..</p> 
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="col-md-4 col-sm-6">
                                <h3 class="cont-title">Email Us</h3>
                                <div class="contact-info">
                                    <form action="" method="post" role="form" class="contactForm">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                        </div>
                                        <button type="submit" name="submit"class="btn btn-send">Send</button>
                                    </form>
                                    
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                               <h3 class="cont-title">Visit Us</h3>
                               <div class="location-info">
                                    <p class="white"><span aria-hidden="true" class="fa fa-map-marker"></span>4333 Factoria Blvd SE, Bellevue, WA 98006</p>
                                    <p class="white"><span aria-hidden="true" class="fa fa-phone"></span>Phone: 677492151</p>
                                    <p class="white"><span aria-hidden="true" class="fa fa-envelope"></span>Email:<a href="" >Ekattor@example.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </body>
        <footer  id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 footer-copyright">
                        ABC- All rights reserved
                    </div>
                </div>
            </div>
        </footer>
    </html> 
    