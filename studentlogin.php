<?php include('includes/templates/header2.php'); ?>

<body id="body">
    <!--header and top bar starts here-->
    <!-- <div class=" topBar affix-top" id="topbar" data-spy="affix" data-offset-top="0" > -->
    <div class="topBar affix-top" id="topbar" >
        <div class="container">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="https://www.iitbhilai.ac.in:443/index.php?pid=reach_us"><i class="fa fa-map-marker" aria-hidden="true"></i><span class="hidden-xs">&nbsp;&nbsp;IIT Bhilai</span></a></li>
                <li><a href="https://www.iitbhilai.ac.in:443/index.php?pid=reach_us"><i class="fa fa-phone" aria-hidden="true"></i><span class="hidden-xs">&nbsp;&nbsp;+91-771-2973622 </span></a></li>
                <li><a href="mailto:administration@iitbhilai.ac.in"><i class="fa fa-envelope" aria-hidden="true"></i><span class="hidden-xs">&nbsp;&nbsp; administration@iitbhilai.ac.in </span></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right hidden-xs">
                <li><a onclick="btnHindiCulture();" style="cursor: pointer;">हिन्दी</a></li>
                <li><a onclick="btnEnglishCulture();" style="cursor: pointer;">English</a></li>
                <li><a href="index.php" onclick="customizeFont('down');return false;">A<sup>-</sup></a></li>
                <li><a href="index.php" onclick="customizeFont('default');return false;">A</a></li>
                <li><a href="index.php" onclick="customizeFont('up');return false;">A<sup>+</sup></a></li>
                <li><a href="https://www.facebook.com/iit.bh/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com/iitbhilai/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href= https://twitter.com/IIT_Bhilai?lang=en-US target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                <li>
                    <form class="navbar-form navbar-right" id="search_form" action="index.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="q" id="q" autocomplete="off" onkeydown="if(event.keyCode == 13) { SearchSite(); }" placeholder="Search">
                        </div>
                        <button type="button" class="btn btn-default" onclick="SearchSite();"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <!-- <nav class="navbar navbar-default affix-top" id="navigation" data-spy="affix" data-offset-top="20"> -->
    <nav class="navbar navbar-default" id="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img class="img-responsive" src="index.php?pid=img_logo" alt="">
                </a>
                &nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="index.php?pid=administration" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="main-nav-link">Institute                                   <b class="caret"></b>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="https://www.iitbhilai.ac.in:443/index.php?pid=admin_aboutiitbh">About IIT Bhilai</a>
                            </li>
                            <li>
                                <a href="https://www.iitbhilai.ac.in:443/index.php?pid=nav_administration">Administration</a>
                            </li>
                            <li>
                                <a href="https://www.iitbhilai.ac.in:443/index.php?pid=nav_department">Departments</a>
                            </li>
                            <li>
                                <a href="https://www.iitbhilai.ac.in:443/index.php?pid=institute_facility">Institute Facility</a>
                            </li>
                            <li>
                                <a href="https://www.iitbhilai.ac.in:443/index.php?pid=nav_academic">Academics</a>
                            </li>
                            <li>
                                <a href="https://www.iitbhilai.ac.in:443/index.php?pid=nav_research">Research and Development</a>
                            </li>
                            <li>
                                <a href="https://www.iitbhilai.ac.in:443/index.php?pid=distinguished_professor">Distinguished Professor</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <span class="main-nav-link">Recruitment                                 <b class="caret"></b>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="https://www.iitbhilai.ac.in:443/index.php?pid=rec_faculty">Faculty</a>
                            </li>
                            <li>
                                <a href="https://www.iitbhilai.ac.in:443/index.php?pid=rec_staff">Staff</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <span class="main-nav-link">Admissions                                  <b class="caret"></b>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="https://www.iitbhilai.ac.in:443/index.php?pid=adm_undergraduate">Undergraduate</a>
                            </li>
                            <li>
                                <a href="https://www.iitbhilai.ac.in:443/index.php?pid=adm_masters">Masters</a>
                            </li>
                            <li>
                                <a href="https://www.iitbhilai.ac.in:443/index.php?pid=adm_phd_new">PhD</a>
                            </li>
                            <li>
                                <a href="https://www.iitbhilai.ac.in:443/index.php?pid=adm_foreign">Foreign Students</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle">
                            <span class="main-nav-link">Alumni                                  <b class="caret"></b>
                            </span>
                        </a>
                            <!-- <ul class="dropdown-menu" style="display: none">
                                <li>
                                    <a href="https://www.iitbhilai.ac.in:443/index.php?pid=stu_people">Alumini Portal</a>
                                </li>
                            </ul> -->
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle">
                                <span class="main-nav-link">Placement                                   <b class="caret"></b>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="https://www.iitbhilai.ac.in:443/index.php?pid=placement">Placement</a>
                                </li>
                                <li>
                                    <a href="https://www.iitbhilai.ac.in:443/index.php?pid=company_portal">Company Registration</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown" style="display: none">
                            <a class="dropdown-toggle">
                                <span class="main-nav-link">People                                  <b class="caret"></b>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="https://www.iitbhilai.ac.in:443/index.php?pid=fac_faculty">Faculty</a>
                                </li>
                                <li style="display: none">
                                    <a href="https://www.iitbhilai.ac.in:443/index.php?pid=pla_student">Students</a>
                                </li>
                                <li>
                                    <a href="https://www.iitbhilai.ac.in:443/index.php?pid=fac_staff">Staff</a>
                                </li>
                                <li style="display: none">
                                    <a href="https://www.iitbhilai.ac.in:443/index.php?pid=pla_student">Admin</a>
                                </li>
                            </ul>
                        </li>
                        <li style="display: none">
                            <a href="https://www.iitbhilai.ac.in:443/index.php?pid=aca_admission">
                                <span class="main-nav-link">Admissions</span>
                            </a>
                        </li>
                        <li style="display: none">
                            <a href="https://www.iitbhilai.ac.in:443/index.php?pid=recruit_recruitments">
                                <span class="main-nav-link">Recruitment</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle">
                                <span class="main-nav-link">Announcements                                   <b class="caret"></b>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="https://www.iitbhilai.ac.in:443/index.php?pid=ann_tenders">Tenders</a>
                                </li>
                                <li>
                                    <a href="https://www.iitbhilai.ac.in:443/index.php?pid=holiday_2019">Holiday List Year 2019</a>
                                </li>
                                <li style="display: none">
                                    <a href="https://www.iitbhilai.ac.in:443/index.php?pid=news_seminar">Seminar</a>
                                </li>
                                <li style="display: none">
                                    <a href="https://www.iitbhilai.ac.in:443/index.php?pid=news_conference">Conferences</a>
                                </li>
                                <li style="display: none">
                                    <a href="https://www.iitbhilai.ac.in:443/index.php?pid=news_achievements">Achievements</a>
                                </li>
                            </ul>
                        </li>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>
            <!--header and top bar ends here-->
            <body>
                <div class="container">
                    <div class="row">
                        <div class="col-md-9" id="content">
                            <body id="content">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">login as</h3>
                                    </div>
                                    
                                    <div class="panel-body">
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="container-fluid">
                                                <br>
                                                <center>
                                                    
                                                </center>
                                                <div class="signin-form">
                                                    <form class="form-signin" method="post" action="">
                                                        
                                                        <div style=" margin-bottom: 20px; font-size: 20px ">login Here</div>
                                                        <center>
                                                            
                                                        </center>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Enter LDAP ID" name="username" />
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control" placeholder="Enter Password" name="password" />
                                                        </div>
                                                        <hr />
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary" id="btn-login">
                                                                <span class="glyphicon glyphicon-log-in"></span> &nbsp; <a href="student_workflow.html"> Login
                                                            </a></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        
                                    </div>
                                    
                                </div>
                                
                                
                            </body>
                        </div>
                        <div class="col-md-3">
                            <!-- generated from related link file -->
                            <h3 class='mytitle'>placement</h3>
                            <ul class='mysidebar'><li class='active'><a href='index.php?pid=invi_letter_tnp' target='_self'> Placement Invitation</a></li>
                                <li class='active'><a href='index.php?pid=internship_procedure' target='_self'> Internship Procedure</a></li>
                                <li class='active'><a href='index.php?pid=placement_procedure' target='_self'> Placement Procedure</a></li>
                                <li class='active'><a href='index.php?pid=company_portal' target='_self'> Company Registration</a></li>
                                <li class='active'><a href='index.php?pid=placement_office' target='_self'> Placement Office</a></li>
                                <li class='active'><a href='
                                    ' target=''></a></li>
                                </ul>                       <h3 class="mytitle">Navigation</h3>
                                <!--Tes-->
                                <ul class="mysidebar">
                                    <li><a href="https://www.iitbhilai.ac.in:443/index.php?pid=nav_department">Departments</a></li>
                                    <li><a href="https://www.iitbhilai.ac.in:443/index.php?pid=institute_facility">Facilities</a></li>
                                    <li><a href="https://www.iitbhilai.ac.in:443/index.php?pid=nav_research">Research and Development</a></li>
                                    <li><a href="https://www.iitbhilai.ac.in:443/index.php?pid=nav_academic">Academics</a></li>
                                    <li><a href="https://www.iitbhilai.ac.in:443/index.php?pid=nav_administration">Administration</a></li>
                                    <li><a href="https://www.iitbhilai.ac.in:443/index.php?pid=aca_admission">Admissions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    
                    <script>function blinker() {
                        $('.blink_me').fadeOut(500);
                        $('.blink_me').fadeIn(500);
                    }
                    setInterval(blinker, 2000);</script>
                </body>         <!--footer section starts here-->
                <div class="footersection">
                    <div class="topBar">
                        <div class="container">
                            <div class="row">
                                <div>
                                    <table style="table-layout: auto; width: 100%;">
                                        <tr style="white-space: nowrap; height: 40px;">
                                            <td style="vertical-align: middle; width: 1%">
                                                <h4><a href="index.php?pid=fac_department" style="color: white">Faculty</a></h4>
                                            </td>
                                            <td style="width: auto">
                                                &nbsp;
                                            </td>
                                            <td style="vertical-align: middle; width: 1%">
                                                <h4><a href="index.php?pid=pro_faculty" style="color: white">Prospective Faculty</a></h4>
                                            </td>
                                            <td style="width: auto">
                                                &nbsp;
                                            </td>
                                            <td style="vertical-align: middle; width: 1%">
                                                <h4><a href="index.php?pid=students" style="color: white" >Student</a></h4>
                                            </td>
                                            <td style="width: auto">
                                                &nbsp;
                                            </td>
                                            <td style="vertical-align: middle; width: 1%">
                                                <h4><a href="index.php?pid=pro_student" style="color: white">Prospective Students</a></h4>
                                            </td>
                                            <td style="width: auto">
                                                &nbsp;
                                            </td>
                                            <td style="vertical-align: middle; width: 1%">
                                                <h4><a style="color: white">Outreach</a></h4>
                                            </td>
                                            <td style="width: auto">
                                                &nbsp;
                                            </td>
                                            <td style="vertical-align: middle; width: 1%">
                                                <h4><a style="color: white">Media</a></h4>
                                            </td>
                                            <td style="width: auto">
                                                &nbsp;
                                            </td>
                                            <td style="vertical-align: middle; width: 1%">
                                                <h4><a style="color: white" href="index.php?pid=reach_us">Contact Us</a></h4>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 ">
                                <div class="footerright">
                                    <h4>Message From Director</h4>
                                    <p>
                                        IIT Bhilai is striving for research-driven undergraduate and postgraduate education. Our objective is to create an education system with multifacet outcomes including research, entrepreneurship, technical leadership, and above all, responsible citizenship.                                    <a href="index.php?pid=admin_messagefromdirector">Read More</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <h4>Institute</h4>
                                <ul class="footerlinks">
                                    <li><a href="/index.php?pid=happening_iit">All Stories</a></li>
                                    <li><a href="/index.php?pid=IITBhilai_Profile">Profile of IIT Bhilai</a></li>
                                    <!-- <li><a href="/index.php?pid=institutional_responsibilities">Institutional Responsibilites</a></li> -->
                                    <li><a href="/index.php?pid=iitbh_intranet">Intranet</a></li>
                                    <li><a href="https://aimsportal.iitbhilai.ac.in/iitbhAims/" target="_blank">AIMS Portal</a></li>
                                    <li><a href="/index.php?pid=rti">RTI</a></li>
                                </ul>
                            </div>
                            <div class="col-md-2 ">
                                <h4>Information</h4>
                                <ul class="footerlinks">
                                    <li><a href="/index.php?pid=info_gallery">Gallery</a></li>
                                    <li><a href="/index.php?pid=info_sitemap">Sitemap</a></li>
                                    <li><a href="https://polaris.iitbhilai.ac.in/" target="_blank">Polaris</a></li>
                                    <li><a href="/index.php?pid=info_directory" target="_blank">Directory</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h4><a href="/index.php?pid=newsletter">Newsletter</a></h4>
                                <p>Subscribe to our Newsletter and stay tuned.</p>
                                <form id="subscription_form" action="index.php" method="post">
                                    <input type="text" class="form-control" placeholder="your@email.com" name="email_id"><br>
                                    <button Text="Subscribe Now!" class="btn btn-large" onclick="">Subscribe Now!</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="topBar">
                    <div class="container">
                        <ul class="nav navbar-nav navbar-left">
                            <li><a href="index.php">Copyright © 2017 - All Rights Reserved - IIT Bhilai</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right ">
                            <!-- <li><a href="index.php?pid=faq">FAQ</a></li> -->
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;</li>
                            <!-- <li><a href="index.php?pid=reach_us">Contact Us</a></li> -->
                        </ul>
                    </div>
                </div>
                <script type="text/javascript" src="index.php?pid=js_bootstrapmin"></script>
        <script> //google custom search engine
            (function() {
                var cx = '002503337570983062401:y-x0lh4xq70';
                var gcse = document.createElement('script');
                gcse.type = 'text/javascript';
                gcse.async = true;
                gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(gcse, s);
            })();
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('ul.nav li.dropdown').hover(function () {
                    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
                }, function () {
                    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
                });
            });
            function btnHindiCulture()
            {
                var location = window.location.href;
                var new_location = location.split('&')[0];
                if (location.includes("culture"))
                    location = removeParam("culture", location);
                var url = new URL(location);
                if (url.searchParams.get("pid") != null)
                    window.location = location+"&culture=hi-IN"
                else
                {
                    if (window.location.href.includes("index.php"))
                        window.location = location +"?pid=home&culture=hi-IN";
                    else
                        window.location = location+"index.php?pid=home&culture=hi-IN"
                }
            }
            function btnEnglishCulture()
            {
                var location = window.location.href;
                var new_location = location.split('&')[0];
                if (location.includes("culture"))
                    location = removeParam("culture", location);
                var url = new URL(location);
                if (url.searchParams.get("pid") != null)
                    window.location = location+"&culture=en-US"
                else
                {
                    if (window.location.href.includes("index.php"))
                        window.location = location+"?pid=home&culture=en-US";
                    else
                        window.location = location+"index.php?pid=home&culture=en-US"
                }
            }
            function removeParam(key, URL)
            {
                var rtn = URL.split("?")[0],
                param,
                params_arr = [],
                queryString = (URL.indexOf("?") !== -1) ? URL.split("?")[1] : "";
                if (queryString !== "")
                {
                    params_arr = queryString.split("&");
                    for (var i = params_arr.length - 1; i >= 0; i -= 1) {
                        param = params_arr[i].split("=")[0];
                        if (param === key) {
                            params_arr.splice(i, 1);
                        }
                    }
                    rtn = rtn + "?" + params_arr.join("&");
                }
                return rtn;
            }
            function customizeFont(action)
            {
                current_size= parseInt($('#body').css('font-size'));
                current_box_height = parseInt($('.well').css('height'));
                new_size = 14;
                new_box_height = 200;
                if(action == 'up')
                {
                    new_size = Math.min(current_size+2,18);
                    new_box_height = Math.min(current_box_height+50,275)
                }
                else if (action == 'down')
                {
                    new_size = Math.max(current_size-2,10);
                    new_box_height = Math.max(current_box_height-50,200);
                }
                $('#body').css('font-size', new_size);
                new_box_height = new_box_height+'px'
                $('.well').css('height',new_box_height);
                document.getElementById("card1").style.height = new_box_height;
                document.getElementById("card2").style.height = new_box_height;
                document.getElementById("card3").style.height = new_box_height;
            }
        </script>
        <script>
            function validateForm() {
                var x = document.forms["myform"]["pptdate"].value;
                if (x == "") {
                    alert("date must be filled out");
                    return false;
                }
            }
        </script>
    </body>
    </html>