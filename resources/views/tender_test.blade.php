
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('b5/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>new site</title>
    <style>
        .header1 li{
    list-style: none;
}
.header1 ul{
    padding-left: 0px;
}
.header1{
    background-color: #e9ede9;
}
.cantainer{
    max-width: 90%;
    margin: 0 auto;
}
.header2 .class1{
    display: flex;
    list-style: none;
    margin: 0px;
    padding-left: 0px;
}
.header2 li{
    padding: 25px 20px;
}
.header2 a{
    text-decoration: none;
    color: black;
    font-family: arial;
    font-size: 16px;
}
.hea-menu1{
    display: none;
}
.header2 ul li:hover .hea-menu1{
    margin-top: 25px;
    margin-left: -15px;
    display: block;
    position: absolute;
    border: 1px solid black;
}
.header2 ul li:hover .hea-menu1 ul{
    display: block;
}
.header2 ul li:hover .hea-menu1 ul li{
    width: 230px;
    border-bottom: 1px solid;
    color: black;
    padding: 10px 0px 10px 15px;
}

.hea-in1{
    display: none;
}
.hover-me:hover .hea-in1{
    display: block;
    position: absolute;
    border: 1px solid black;
    margin-left: 230px;
    margin-top: -30px;
}
.hea-in2{
    display: none;
}
.hover-me1:hover .hea-in2{
    display: block;
    position: absolute;
    border: 1px solid black;
    margin-left: 230px;
    margin-top: -30px;
}
.hea-in3{
    display: none;
}
.hover-me2:hover .hea-in3{
    display: block;
    position: absolute;
    border: 1px solid black;
    margin-left: 230px;
    margin-top: -30px;
}
.hea-in4{
    display: none;
}
.hover-me3:hover .hea-in4{
    display: block;
    position: absolute;
    border: 1px solid black;
    margin-left: 230px;
    margin-top: -30px;
}
    </style>
</head>
<body>
    <main>
        <header class="header">
            <!-- header top announcement content -->
            <div class="header-top">
                <div class="container">
                    <div class="header-row">

                    <div class="header-top-strip">
                    <div class="header-top-left">
                        <div class="header-top-button">
                            <span>Announcement</span>
                        </div>
                        <div class="header-top-left-text">
                            <marquee>This is announcement and we are announcing right now</marquee>
                        </div>
                        <div class="header-top-left-nav-icons">
                            <span> < </span>
                            <span> > </span>
                        </div>
                        <div class="header-top-right">
                            <div class="header-top-right-row">
                                <div class="header-top-right-count">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                      <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                      <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </div>
                                <span class="block"> | </span>
                                
                                <div class="header-top-right-icons-wrapper">
                                    <div class="header-top-right-icons">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="bi bi-google"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                            <i class="bi bi-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="bi bi-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="bi bi-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                </div>
                </div>
            </div>
                
                
                

                <!-- mid top logos -->
                <div class="header-mid-logos">
                    <div class="container">
                        <div class="header-mid-row">
                            <div class="header-mid-logo-left">
                            <div class="left-logo">
                                <a href="/">
                                    <img data-src="{{asset('img/sef_logo.svg')}}" class="logo lazyload" src="{{asset('img/sef_logo.svg')}}" >
                                </a>
                            </div>
                        </div>
                        <div class="header-mid-logo-center">
                            <div class="center-logo">
                                <h4>Sindh Education Foundation,
                                </h4>
                                <h4> Government of Sindh.
                                </h4>
                            </div>
                        </div>
                        <div class="header-mid-logo-right">
                            <div class="right-logo">
                                <a href="/">
                                    <img data-src="{{asset('img/sef_logo2.svg')}}" class="lazyload" src="{{asset('img/sef_logo2.svg')}}" >
                                </a>
                            </div>
                        </div>
                        </div>
                    </div>
                    
                    
                </div>
                <!-- navigation bar -->
                <div class="header1">
        <div class="cantainer">
            <div class="header2">
                    <ul class="class1">
                        <li><a href="">Home</a></li>
                        
                        <li><a href="">About Us</a>
                            <div class="hea-menu1">
                                <ul>
                                    <li><a href="">Intorduction</a></li>
                                    <li><a href="">Educational FrameWork</a></li>
                                    <li><a href="">Organogram</a></li>
                                    <li class="hover-me"><a href="">Department</a>
                                        <div class="hea-in1">
                                            <ul>
                                                <li><a href="">Comunication and Research</a></li>
                                                <li><a href="">Comunication and Research</a></li>
                                                <li><a href="">Comunication and Research</a></li>
                                                <li><a href="">Comunication and Research</a></li>
                                                <li><a href="">Comunication and Research</a></li>
                                                <li><a href="">Comunication and Research</a></li>
                                                <li><a href="">Comunication and Research</a></li>
                                                <li class="hover-me1"><a href="">Comunication and Research</a>
                                                    <div class="hea-in2">
                                                        <ul>
                                                            <li><a href="">Comunication and Research</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="hover-me2"><a href="">Comunication and Research</a>
                                        <div class="hea-in3">
                                            <ul>
                                                <li><a href="">Comunication and Research</a></li>
                                                <li><a href="">Comunication and Research</a></li>
                                                <li><a href="">Comunication and Research</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="">Comunication and Research</a>
                                    <li><a href="">Comunication and Research</a>
                                    <li class="hover-me3"><a href="">Comunication and Research</a>
                                        <div class="hea-in4">
                                            <ul>
                                                <li><a href="">Comunication and Research</a></li>
                                                <li><a href="">Comunication and Research</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="">Programs</a></li>
                        <li><a href="">Advertisement</a></li>
                        <li><a href="">Soholarship</a></li>
                        <li><a href="">Resource</a></li>
                        <li><a href="">News & Updates</a></li>
                        <li><a href="">Careers</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
            </div>
        </div>
    </div>

                <!-- programs -->
                <div class="programs-section">
                    <div class="container">
                    <h1>Programs</h1>

                        <div class="bottom-programs-slider">
                              <!-- first card -->
                              <div class="bottom-programs-slider-card">
                                <div class="slider-card-box one">
                                    <div class="bottom-programs-slider-card-logo">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stack" viewBox="0 0 16 16">
                                      <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"/>
                                      <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"/>
                                    </svg>
                                  </div>
                                   <div class="bottom-programs-slider-card-heading">
                                          <h6 class="bottom-programs-slider-card-heading-wrap">Adolescent and Adult Learning and Training Program (AALTP)</h6>
                                  </div>
                                  <div class="bottom-programs-slider-card-text">
                                      <p class="bottom-programs-slider-card-text-wrap">Adolescent and Adult Learning and Training Program (AALTP), for adolescents and adults who have missed an opportunity to avail education.</p>

                                  </div>
                                </div>
                              </div>
                              <!-- second card -->
                              <div class="bottom-programs-slider-card">
                                <div class="slider-card-box two">
                                    <div class="bottom-programs-slider-card-logo">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stack" viewBox="0 0 16 16">
                                      <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"/>
                                      <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"/>
                                    </svg>
                                  </div>
                                   <div class="bottom-programs-slider-card-heading">
                                          <h6 class="bottom-programs-slider-card-heading-wrap">Adopt-A-School-Program (AASP)</h6>
                                  </div>
                                  <div class="bottom-programs-slider-card-text">
                                      <p class="bottom-programs-slider-card-text-wrap">Sindh Education Foundation has been a pioneer in effectively engaging the private sector and communities in government school revival through the Adopt-A-School-Program (AASP)</p>
                                  </div>
                                </div>
                              </div>
                              <!-- third card -->
                              <div class="bottom-programs-slider-card">
                                <div class="slider-card-box three">
                                    <div class="bottom-programs-slider-card-logo">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stack" viewBox="0 0 16 16">
                                      <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"/>
                                      <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"/>
                                    </svg>
                                  </div>
                                   <div class="bottom-programs-slider-card-heading">
                                          <h6 class="bottom-programs-slider-card-heading-wrap">Adolescent and Adult Learning and Training Program (AALTP)</h6>
                                  </div>
                                  <div class="bottom-programs-slider-card-text">
                                      <p class="bottom-programs-slider-card-text-wrap">Adolescent and Adult Learning and Training Program (AALTP), for adolescents and adults who have missed an opportunity to avail education.</p>
                                  </div>
                                </div>
                              </div>


                              <!-- fourth -->
                              <div class="bottom-programs-slider-card">
                                <div class="slider-card-box four">
                                    <div class="bottom-programs-slider-card-logo">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stack" viewBox="0 0 16 16">
                                      <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"/>
                                      <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"/>
                                    </svg>
                                  </div>
                                   <div class="bottom-programs-slider-card-heading">
                                          <h6 class="bottom-programs-slider-card-heading-wrap">Adolescent and Adult Learning and Training Program (AALTP)</h6>
                                  </div>
                                  <div class="bottom-programs-slider-card-text">
                                      <p class="bottom-programs-slider-card-text-wrap">Adolescent and Adult Learning and Training Program (AALTP), for adolescents and adults who have missed an opportunity to avail education.</p>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
                

                <footer>
                   <div class="footer">
                        <div class="footer-top">
                            <div class="container">
                                <div class="footer-row">
                                    <div class="footer-top-row">
                                        <div class="footer-upper-first-row">
                                            <div class="upper-first-left">
                                                <div class="first-left-logo">
                                                    <a href="/">
                                                        <img data-src="{{asset('img/sef_logo.svg')}}" class="logo lazyload" src="{{asset('img/sef_logo.svg')}}" width="150px">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="upper-first-right">
                                                <div class="first-right-input">
                                                    <input type="email" name="email" placeholder="email@example.com">
                                                </div>
                                                <div class="first-right-button">
                                                    <a href="#">SIGN UP</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer-upper-second-row">
                                            <div class="upper-second-left">
                                                <div class="second-left-icons">
                                                    <div class="left-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve">
                                                            <g id="XMLID_834_">
                                                                <path id="XMLID_835_" d="M81.703,165.106h33.981V305c0,2.762,2.238,5,5,5h57.616c2.762,0,5-2.238,5-5V165.765h39.064   c2.54,0,4.677-1.906,4.967-4.429l5.933-51.502c0.163-1.417-0.286-2.836-1.234-3.899c-0.949-1.064-2.307-1.673-3.732-1.673h-44.996   V71.978c0-9.732,5.24-14.667,15.576-14.667c1.473,0,29.42,0,29.42,0c2.762,0,5-2.239,5-5V5.037c0-2.762-2.238-5-5-5h-40.545   C187.467,0.023,186.832,0,185.896,0c-7.035,0-31.488,1.381-50.804,19.151c-21.402,19.692-18.427,43.27-17.716,47.358v37.752H81.703   c-2.762,0-5,2.238-5,5v50.844C76.703,162.867,78.941,165.106,81.703,165.106z"/>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            </svg>
                                                    </div>
                                                </div>
                                                <div class="second-left-icons">
                                                    <div class="left-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve">
                                                            <g id="XMLID_834_">
                                                                <path id="XMLID_835_" d="M81.703,165.106h33.981V305c0,2.762,2.238,5,5,5h57.616c2.762,0,5-2.238,5-5V165.765h39.064   c2.54,0,4.677-1.906,4.967-4.429l5.933-51.502c0.163-1.417-0.286-2.836-1.234-3.899c-0.949-1.064-2.307-1.673-3.732-1.673h-44.996   V71.978c0-9.732,5.24-14.667,15.576-14.667c1.473,0,29.42,0,29.42,0c2.762,0,5-2.239,5-5V5.037c0-2.762-2.238-5-5-5h-40.545   C187.467,0.023,186.832,0,185.896,0c-7.035,0-31.488,1.381-50.804,19.151c-21.402,19.692-18.427,43.27-17.716,47.358v37.752H81.703   c-2.762,0-5,2.238-5,5v50.844C76.703,162.867,78.941,165.106,81.703,165.106z"/>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            </svg>
                                                    </div>
                                                </div>
                                                <div class="second-left-icons">
                                                    <div class="left-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve">
                                                            <g id="XMLID_834_">
                                                                <path id="XMLID_835_" d="M81.703,165.106h33.981V305c0,2.762,2.238,5,5,5h57.616c2.762,0,5-2.238,5-5V165.765h39.064   c2.54,0,4.677-1.906,4.967-4.429l5.933-51.502c0.163-1.417-0.286-2.836-1.234-3.899c-0.949-1.064-2.307-1.673-3.732-1.673h-44.996   V71.978c0-9.732,5.24-14.667,15.576-14.667c1.473,0,29.42,0,29.42,0c2.762,0,5-2.239,5-5V5.037c0-2.762-2.238-5-5-5h-40.545   C187.467,0.023,186.832,0,185.896,0c-7.035,0-31.488,1.381-50.804,19.151c-21.402,19.692-18.427,43.27-17.716,47.358v37.752H81.703   c-2.762,0-5,2.238-5,5v50.844C76.703,162.867,78.941,165.106,81.703,165.106z"/>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            </svg>
                                                    </div>
                                                </div>
                                                <div class="second-left-icons">
                                                    <div class="left-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve">
                                                            <g id="XMLID_834_">
                                                                <path id="XMLID_835_" d="M81.703,165.106h33.981V305c0,2.762,2.238,5,5,5h57.616c2.762,0,5-2.238,5-5V165.765h39.064   c2.54,0,4.677-1.906,4.967-4.429l5.933-51.502c0.163-1.417-0.286-2.836-1.234-3.899c-0.949-1.064-2.307-1.673-3.732-1.673h-44.996   V71.978c0-9.732,5.24-14.667,15.576-14.667c1.473,0,29.42,0,29.42,0c2.762,0,5-2.239,5-5V5.037c0-2.762-2.238-5-5-5h-40.545   C187.467,0.023,186.832,0,185.896,0c-7.035,0-31.488,1.381-50.804,19.151c-21.402,19.692-18.427,43.27-17.716,47.358v37.752H81.703   c-2.762,0-5,2.238-5,5v50.844C76.703,162.867,78.941,165.106,81.703,165.106z"/>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            <g>
                                                            </g>
                                                            </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="upper-second-right">We hate spam as much as you do</div>
                                        </div>
                                    </div>
                                    <div class="footer-bottom-row">
                                        <div class="footer-bottom-row-left">
                                            <div class="row-left-first  rl">
                                                <h3 class="rl-title">About Sef</h3>
                                                <p class="rl-text">The Sindh Education Foundation (SEF), was established under the Sindh Education Foundation Act, 1992 as a semi-autonomous organization with a mandate to support education in the province through multifarious interventions.</p>
                                            </div>
                                            <div class="row-left-second rl">
                                                <h3 class="rl-title">Quick Links</h3>
                                                <ul>
                                                <li>
                                                    <a href="">Eduction & Literacy Dept.</a>
                                                </li> 
                                                    <li>
                                                        <a href="">Punjab Education Foundation</a>
                                                </li>
                                                    <li>
                                                        <a href="">Balochistan Education Foundation</a>
                                                </li>
                                                    <li>
                                                        <a href="">KPK Education Foundation</a>
                                                </li>
                                                </ul>
                                            </div>
                                            <div class="row-left-third rl">
                                                <h3 class="rl-title">Important Link</h3>
                                                <ul>
                                                <li>
                                                    <a href="">ABOUT SEF</a>
                                                </li> 
                                                    <li>
                                                        <a href="">IMAGE GALLERIES</a>
                                                </li>
                                                    <li>
                                                        <a href="">NEWS & UPDATES</a>
                                                </li>
                                                    <li>
                                                        <a href="">ANNOUNCEMENTS</a>
                                                </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="footer-bottom-row-right">
                                            <div class="bottom-adress-wrapper">
                                                <div class="bottom-row-right-address brra-title">
                                                <div class="b-rra-addresss-icon">
                                                    <i class="bi bi-house-door"></i>
                                                </div>
                                                <div class="b-rra-address-title ">
                                                        Address
                                                    </div>
                                                </div>
                                                <p class="b-rra-rich-text">
                                                    NICL Building, 1st Floor, Survey No.183/4, Abbasi Shaheed Road, Karachi Cantonment Area.
                                                </p>
                                            </div>

                                            <div class="bottom-adress-wrapper">
                                                <div class="bottom-row-right-address">
                                                <div class="b-rra-addresss-icon">
                                                    <i class="bi bi-phone"></i>
                                                </div>
                                                <div class="b-rra-address-title">
                                                        Phone
                                                    </div>
                                                </div>
                                                <p class="b-rra-rich-text">
                                                    021-99333244-8
                                                </p>
                                            </div>

                                            <div class="bottom-adress-wrapper">
                                                <div class="bottom-row-right-address">
                                                <div class="b-rra-addresss-icon">
                                                    <i class="bi bi-envelope"></i>
                                                </div>
                                                <div class="b-rra-address-title">
                                                        Email
                                                    </div>
                                                </div>
                                                <p class="b-rra-rich-text">
                                                    info@sef.org.pk
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-bottom">
                            <div class="container">
                                <div class="footer-bottom-wrapp">
                                    <div class="alpha">
                                    2022 © Sindh Education Foundation, Government of Sindh All Rights Reserved.
                                    </div>
                                    <div class="beta">
                                        <a href="" class="bottom-footer-main-links">INSTALL</a>
                                        <a href="" class="bottom-footer-main-links">Teach for Change</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            
        </header>
    </main>


<script type="text/javascript" src="{{ asset('b5/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>


    <script>
        $('.bottom-programs-slider').slick({
          infinite: true,
          arrows:true,
          slidesToShow: 3,
          slidesToScroll: 3
        });
    </script>
</body>
</html>
