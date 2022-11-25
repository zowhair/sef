<div class="theme-1 white_bg">
    <!--::::: MENU AREA START  :::::::-->
    <div class="main-menu">
      <div class="main-nav clearfix  ">
        <div class="container">
          <div class="row justify-content-between">
            <nav class="navbar navbar-expand-lg col-lg-12 align-self-center">
              <div class="site-nav-inner">
                <!--::::: mobile toggle  :::::::-->
                <button class="offcanvas__menu__open__trigger header__style__1" id="offcanvas__menu__open__trigger">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 64H448v64H0V64zM0 224H448v64H0V224zM448 384v64H0V384H448z"/></svg>
                </button>
                <div id="navbarSupportedContent" class="collapse navbar-collapse navbar-responsive-collapse">
                  <div id="primary-nav" class="menu-main-menu-container">
                    <ul id="menu-main-menu" class="nav navbar-nav">
                      <li id="menu-item-3222"
                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children menu-item-3222 nav-item dropdown">
                        <a href="/" class="nav-link has-child dropdown-toggle" data-toggle="dropdown">Home</a>
                      </li>
                      <li id="menu-item-3152"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3152 nav-item dropdown">
                        <a href="#" class="nav-link has-child dropdown-toggle" data-toggle="dropdown">About Us</a>
                        <ul class="dropdown-menu">
                          <li id="menu-item-5275"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5276 nav-item  ">
                            <a href="#" class=" dropdown-item">Introduction</a>
                          </li>
                          <li id="menu-item-5276"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5276 nav-item  ">
                            <a href="#" class=" dropdown-item">Educational FrameWork</a>
                          </li>
                          <li id="menu-item-5276"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5276 nav-item  ">
                            <a href="#" class=" dropdown-item">Organogram</a>
                          </li>
                          <li id="menu-item-5277"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5277 nav-item dropdown-submenu ">
                            <a href="#" class=" dropdown-item">Department</a>
                            <ul class="dropdown-menu">
                              
                              @foreach($cat as $row)
                              <li id="menu-item-5294"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5294 nav-item">
                                <a href="/department/{{$row->id}}" class=" dropdown-item">{{$row->title}}</a>
                                @endforeach
                              
                              <!-- <li id="menu-item-5277"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5277 nav-item dropdown-submenu ">
                                <a href="#" class=" dropdown-item">Unit and Cells</a>
                                <ul class="dropdown-menu">
                                  <li id="menu-item-5289"
                                    class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5289 nav-item">
                                    <a href="/monitoring-and-evaluation-cell" class=" dropdown-item">Monitoring and Evaluation Cell</a>
                                  </li>
                                </ul>
                              </li> -->
                            </ul>
                          </li>
                          <li id="menu-item-5277"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5277 nav-item dropdown-submenu ">
                            <a href="#" class=" dropdown-item">Management Team</a>
                            <ul class="dropdown-menu">
                              <li id="menu-item-5289"
                                class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5289 nav-item">
                                <a href="/head-office"
                                  class=" dropdown-item">Head Office</a>
                              <li id="menu-item-5274"
                                class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5274 nav-item">
                                <a href="/regional-office"
                                  class=" dropdown-item">Regional Office</a>
                              <li id="menu-item-5282"
                                class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5282 nav-item">
                                <a href="/district-office"
                                  class=" dropdown-item">District Office</a>
                              </li>
                            </ul>
                          </li>
                          <li id="menu-item-5276"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5276 nav-item  ">
                            <a href="#" class=" dropdown-item">BOG</a>
                          </li>
                          <li id="menu-item-5276"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5276 nav-item  ">
                            <a href="#" class=" dropdown-item">Finance Committe</a>
                          </li>
                          <li id="menu-item-5278"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5278 nav-item dropdown-submenu ">
                            <a href="#" class=" dropdown-item">Message</a>
                            <ul class="dropdown-menu">
                              <li id="menu-item-5285"
                                class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5285 nav-item">
                                <a href=""
                                  class=" dropdown-item">Message of Honable Minister Sindh</a>
                              <li id="menu-item-5287"
                                class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5287 nav-item">
                                <a href=""
                                  class=" dropdown-item">Message of Managing Director Sindh</a>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li id="menu-item-3151"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3151 nav-item dropdown">
                        <a href="#" class="nav-link has-child dropdown-toggle" data-toggle="dropdown">Programs</a>
                        <ul class="dropdown-menu">
                          <li id="menu-item-5264"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5264 nav-item">
  
                            <a href="/altp" class=" dropdown-item">AALTP</a>
                          <li id="menu-item-5265"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5265 nav-item">
                            <a href="/aasp" class=" dropdown-item">AASP</a>
                          </li>
                          <li id="menu-item-5277"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5277 nav-item dropdown-submenu ">
                            <a href="#" class=" dropdown-item">Initiatives</a>
                            <ul class="dropdown-menu">
                              <li id="menu-item-5289"
                                class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5289 nav-item">
                                <a href="/initiative-install" class=" dropdown-item">INSTAL</a>
                              </li>
                              <li id="menu-item-5274"
                                class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5274 nav-item">
                                <a href="/teach-for-change" class=" dropdown-item">Teach For Change</a>
                              </li>
                            </ul>
                          </li>
                          <li id="menu-item-5268"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5268 nav-item">
                            <a href="/fas" class=" dropdown-item"> Foundation Assisted Schools</a>
                          <li id="menu-item-5269"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5269 nav-item">
                            <a href="/comprehensive-school" class=" dropdown-item">Comprehensive School</a>
                        </ul>
                      </li>
                      <li id="menu-item-3151"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3151 nav-item dropdown">
                        <a href="#" class="nav-link has-child dropdown-toggle" data-toggle="dropdown">Advertisement</a>
                        <ul class="dropdown-menu">
                          <li id="menu-item-5264"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5264 nav-item">
                            <a href="/tender" class=" dropdown-item">Tender</a>
                        </ul>
                      </li>
                      <li id="menu-item-3151"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3151 nav-item dropdown">
                        <a href="#" class="nav-link has-child dropdown-toggle" data-toggle="dropdown">Scholarship</a>
                        <ul class="dropdown-menu">
                          <li id="menu-item-5264"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5264 nav-item">
                            <a href="/scholarship" class=" dropdown-item">Introduction</a>
                          <li id="menu-item-5265"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5265 nav-item">
                            <a href="/partner-institution" class=" dropdown-item">Partner Institutions</a>
                          </li>
                          <li id="menu-item-5265"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5265 nav-item">
                            <a href="/annoncements" class=" dropdown-item">Announcemnets</a>
                          </li>
                          <li id="menu-item-5265"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5265 nav-item">
                            <a href="/alumni" class=" dropdown-item">Alumni</a>
                          </li>
                        </ul>
                      </li>
                      <li id="menu-item-3151"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3151 nav-item dropdown">
                        <a href="#" class="nav-link has-child dropdown-toggle" data-toggle="dropdown">Resources</a>
                        <ul class="dropdown-menu">
                          <li id="menu-item-5264"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5264 nav-item">
                            <a href="../category/business/" class=" dropdown-item">Act and Rules</a>
                          <li id="menu-item-5264"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5264 nav-item">
                            <a href="/care-for-life" class=" dropdown-item">Care for Life Education</a>
  
                          <li id="menu-item-5277"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5277 nav-item dropdown-submenu ">
                            <a href="#" class=" dropdown-item">Publications</a>
                            <ul class="dropdown-menu">
                              <li id="menu-item-5289"
                                class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5289 nav-item">
                                <a href="/anunal_report" class=" dropdown-item">Anunnal Report</a>
                              </li>
                              <li id="menu-item-5274"
                                class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5274 nav-item">
                                <a href="/news_letters" class=" dropdown-item">Newsletter</a>
                              </li>
                              <li id="menu-item-5274"
                                class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5274 nav-item">
                                <a href="/research_studies" class=" dropdown-item">Research Studies</a>
                              </li>
                              <li id="menu-item-5274"
                                class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5274 nav-item">
                                <a href="/sujaags" class=" dropdown-item">Sujaag</a>
                              </li>
                            </ul>
                          </li>
                          <li id="menu-item-5277"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5277 nav-item dropdown-submenu ">
                            <a href="#" class=" dropdown-item">Assessment Material</a>
                            <ul class="dropdown-menu">
                              <li id="menu-item-5289"
                                class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5289 nav-item">
                                <a href=""
                                  class=" dropdown-item">Assessment Guideline</a>
                              </li>
                              <li id="menu-item-5274"
                                class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5274 nav-item">
                                <a href=""
                                  class=" dropdown-item">Assessment Reports</a>
                              </li>
                              <li id="menu-item-5274"
                                class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5274 nav-item">
                                <a href=""
                                  class=" dropdown-item">Modal Paper</a>
                              </li>
                            </ul>
                          </li>
                          <li id="menu-item-5265"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5265 nav-item">
                            <a href="" class=" dropdown-item">Acution Notices</a>
                          </li>
                          <li id="menu-item-5265"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5265 nav-item">
                            <a href="/notification" class=" dropdown-item">Notification</a>
                          </li>
                          <li id="menu-item-5265"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5265 nav-item">
                            <a href="" class=" dropdown-item">Policies</a>
                          </li>
                          <li id="menu-item-5265"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5265 nav-item">
                            <a href="" class=" dropdown-item">Request For Proposal</a>
                          </li>
                          <li id="menu-item-5265"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5265 nav-item">
                            <a href="/school-data" class=" dropdown-item">School Data</a>
                          </li>
                          <li id="menu-item-5265"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5265 nav-item">
                            <a href="" class=" dropdown-item">SOPs Microsoft 360</a>
                          </li>
                          <li id="menu-item-5265"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5265 nav-item">
                            <a href="" class=" dropdown-item">SOS Part II January to Apirl 2021</a>
                          </li>
                          <li id="menu-item-5265"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5265 nav-item">
                            <a href="" class=" dropdown-item">Health Insurance Formats</a>
                          </li>
                        </ul>
                      </li>
                      <li id="menu-item-5292"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5292 nav-item">
                        <a href="/news_and_updates" class="nav-link">News & Updates</a>
                      </li>
                      <li id="menu-item-5292"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5292 nav-item">
                        <a href="../career/" class="nav-link">Careers</a>
                      </li>
  
                      <li id="menu-item-5292"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5292 nav-item">
                        <a href="../contact/" class="nav-link">Contact Us</a>
                      </li>
  
                    </ul>
                  </div>
                </div>
              </div>
            </nav>
  
  
          </div>
        </div>
      </div>
    </div>
    <!--::::: MENU AREA END :::::::-->
  </div>
  <!-- Offcanvas Menu Start -->
  <div class="offcanvas__mobile__menu__main__wrapper" id="offcanvas__mobile__menu__main__wrapper">
    <a href="#" class="offcanvas__menu__close__trigger" id="offcanvas__menu__close__trigger">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M294.6 166.6L317.3 144 272 98.7l-22.6 22.6L160 210.7 70.6 121.4 48 98.7 2.7 144l22.6 22.6L114.7 256 25.4 345.4 2.7 368 48 413.3l22.6-22.6L160 301.3l89.4 89.4L272 413.3 317.3 368l-22.6-22.6L205.3 256l89.4-89.4z"/></svg>
    <noscript><img alt="close"
          src="../wp-content/themes/newsprk/assets/img/icon/cross.svg" /></noscript>
    </a>
    <div class="offcanvas__menu__wrapper">
      <div class="offcanvas__menu__inner__content">
        <nav class="offcanvas__navigation">
          <ul>
            <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-3222">
              <a href="/">Home</a>
  
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3152">
              <a href="#">About Us</a>
              <ul class="sub-menu">
                <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-5275">
                  <a href="#">Introduction</a>
  
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-5275">
                  <a href="#">Education FrameWork</a>
  
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-5275">
                  <a href="#">Organogram</a>
  
                </li>
                <li id="menu-item-5293"
                  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5293">
                  <a href="#">Department</a>
                  <ul class="sub-menu">
                    <li id="menu-item-5294"
                      class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5294 nav-item">
                      <a href="/communication-and-research" class=" dropdown-item">Communication and Research</a>
                    <li id="menu-item-7367"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7367 nav-item">
                      <a href="/finance-and-audit" class=" dropdown-item">Finance and Audit</a>
                    <li id="menu-item-7420"
                      class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7420 nav-item">
                      <a href="/general-administrator" class=" dropdown-item">General Administration</a>
                    </li>
                    <li id="menu-item-7421"
                      class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7421 nav-item">
                      <a href="/human-resource" class=" dropdown-item">Human Resource</a>
                    </li>
                    <li id="menu-item-5296"
                      class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5296 nav-item">
                      <a href="/information-tech" class=" dropdown-item">Informaton Technology</a>
                    </li>
                    <li id="menu-item-5296"
                      class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5296 nav-item">
                      <a href="/planing-and-program" class=" dropdown-item">Planning And Programs</a>
                    </li>
                    <li id="menu-item-5296"
                      class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5296 nav-item">
                      <a href="/training-and-assessment" class=" dropdown-item">Training and Assessment</a>
                    </li>
                    <li id="menu-item-5277"
                      class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5277 ">
                      <a href="#">Unit and Cells</a>
                      <ul class="sub-menu">
                        <li id="menu-item-5289"
                          class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5289 nav-item">
                          <a href="/monitoring-and-evaluation-cell" class=" dropdown-item">Monitoring and Evaluation Cell</a>
                        </li>
                      </ul>
                    </li>
  
                  </ul>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5276">
                  <a href="#">Management Team</a>
                  <ul class="sub-menu">
                    <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5281">
                      <a href="/head-office">Head Office </a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5272">
                      <a href="/regional-office">Regional Office</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5291">
                      <a href="/district-office">District Office</a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-5275">
                  <a href="#">BOD</a>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-5275">
                  <a href="#">Finance Committe</a>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5277">
                  <a href="#">Message</a>
                  <ul class="sub-menu">
                    <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5289">
                      <a href="">Message of Honable Minister Sindh</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5274">
                      <a href="">Message of Managing Director Sindh</a>
                    </li>
  
                  </ul>
                </li>
  
              </ul>
            </li>
  
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3151">
              <a href="#">Programs</a>
              <ul class="sub-menu">
                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5264">
                  <a href="/altp">AALTP</a>
                </li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5265">
                  <a href="/aasp">AASP</a>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5277">
                  <a href="#">Initiatives</a>
                  <ul class="sub-menu">
                    <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5289">
                      <a href="/initiative-install">INSTAL</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5274">
                      <a href="/teach-for-change">Teach For Change</a>
                    </li>
  
                  </ul>
                </li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5268">
                  <a href="/fas">Foundation Assisted Schools</a>
                </li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5269">
                  <a href="/functionalization-govt-school-building">GOVT School Buidlings</a>
                </li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5269">
                  <a href="/comprehensive-school">Comprehensive School</a>
                </li>
              </ul>
            </li>
            <li id="menu-item-3151"
              class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3151">
              <a href="#">Advertisement</a>
              <ul class="sub-menu">
                <li id="menu-item-5264"
                  class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5264 nav-item">
                  <a href="/tender" class=" dropdown-item">Tender</a>
  
              </ul>
            </li>
            <li id="menu-item-3151"
              class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3151">
              <a href="#">Scholarship</a>
              <ul class="sub-menu">
                <li id="menu-item-5264"
                  class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5264 nav-item">
                  <a href="/scholarship" class=" dropdown-item">Introduction</a>
                <li id="menu-item-5265"
                  class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5265 nav-item">
                  <a href="/partner-institution" class=" dropdown-item">Partner Institutions</a>
                </li>
                <li id="menu-item-5265"
                  class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5265 nav-item">
                  <a href="/annoncements" class=" dropdown-item">Announcemnets</a>
  
                </li>
                <li id="menu-item-5265"
                  class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5265 nav-item">
                  <a href="/alumni" class=" dropdown-item">Alumni</a>
                </li>
              </ul>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3151  ">
              <a href="#">Resources</a>
              <ul class="sub-menu">
                <li id="menu-item-5264"
                  <a href="../category/business/" class=" dropdown-item">Act and Rules</a>
                <li id="menu-item-5264"
                  class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5264 nav-item">
                  <a href="/care-for-life" class=" dropdown-item">Care for Life Education</a>
                <li id="menu-item-5277"
                  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5277  ">
                  <a href="#" class=" dropdown-item">E-Publications</a>
                  <ul class="sub-menu">
                    <li id="menu-item-5289"
                      class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5289 nav-item">
                      <a href="/anunal_report" class=" dropdown-item">Anunnal Report</a>
                    </li>
                    <li id="menu-item-5274"
                      class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5274 nav-item">
                      <a href="news_letters" class=" dropdown-item">Newsletter</a>
                    </li>
                    <li id="menu-item-5274"
                      class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5274 nav-item">
                      <a href="/research_studies" class=" dropdown-item">Research Studies</a>
                    </li>
                    <li id="menu-item-5274"
                      class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5274 nav-item">
                      <a href="/sujaags" class=" dropdown-item">Sujaag</a>
                    </li>
                  </ul>
                </li>
                <li
                  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5277 ">
                  <a href="#">Assessment Material</a>
                  <ul class="sub-menu">
                    <li id="menu-item-5289"
                      class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5289 nav-item">
                      <a href=""
                        class=" dropdown-item">Assessment Guideline</a>
                    </li>
                    <li id="menu-item-5274"
                      class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5274 nav-item">
                      <a href=""
                        class=" dropdown-item">Assessment Reports</a>
                    </li>
                    <li id="menu-item-5274"
                      class="menu-item menu-item-type-post_type menu-item-object-post menu-item-5274 nav-item">
                      <a href=""
                        class=" dropdown-item">Modal Paper</a>
                    </li>
                  </ul>
                </li>
                <li id="menu-item-5265"
                  class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5265 nav-item">
                  <a href="" class=" dropdown-item">Acution Notices</a>
                </li>
                <li id="menu-item-5265"
                  class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5265 nav-item">
  
                  <a href="/notification" class=" dropdown-item">Notification</a>
  
                </li>
                <li id="menu-item-5265"
                  class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5265 nav-item">
                  <a href="" class=" dropdown-item">Policies</a>
                </li>
                <li id="menu-item-5265"
                  class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5265 nav-item">
                  <a href="" class=" dropdown-item">Request For Proposal</a>
                </li>
                <li id="menu-item-5265"
                  class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5265 nav-item">
                  <a href="" class=" dropdown-item">School Data</a>
                </li>
                <li id="menu-item-5265"
                  class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5265 nav-item">
                  <a href="" class=" dropdown-item">SOPs Microsoft 360</a>
                </li>
                <li id="menu-item-5265"
                  class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5265 nav-item">
                  <a href="" class=" dropdown-item">SOS Part II January to Apirl 2021</a>
                </li>
                <li id="menu-item-5265"
                  class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5265 nav-item">
                  <a href="" class=" dropdown-item">Health Insurance Formats</a>
                </li>
              </ul>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-7431">
              <a href="/news_and_updates">News & Updates</a>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-7431">
              <a href="../">Careers</a>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-7431">
              <a href="../">Contact Us</a>
            </li>
          </ul>
        </nav>
        <div class="offcanvas__mobile__menu__about">
          <div class="logo">
            <a href="#" target="_blank">
              <img data-src="../sef_logo.svg" class="logo lazyload" src="../sef_logo.svg">
            </a>
          </div>
          <p>Do am he horrible distance marriage so throughout. Afraid assure square so happenmr an before.
            His many same been well can high that.</p>
  
          <div class="contact-info">
  
            <div class="single_contact">
              <a href="../contact/"> <i class="fas fa-phone-volume"> </i>
                On Your Mobile</a>
            </div>
  
            <div class="single_contact">
              <a href="../contact/"> <i class="fas fa-microphone"> </i> On
                Smart Speakers</a>
            </div>
  
            <div class="single_contact">
              <a href="../contact/"> <i class="fas fa-envelope"> </i>
                Contact Newsprk</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Offcanvas Menu End -->
  </div>
  