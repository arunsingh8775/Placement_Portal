  <?php
	session_start();
	require_once("includes/database.php");
	require_once("includes/settings.php");
	require_once("includes/functions/common.php");
	require_once("includes/classes/db.cls.php");
	require_once("includes/classes/sitedata.cls.php");

	$db = new SiteData();

	$sql = "SELECT * FROM verified_students";
	$res = $db->getData($sql);

	?>

  <?php include('includes/templates/header2.php'); ?>

  <body id="body">
      <!--header and top bar starts here-->
      <!-- <div class=" topBar affix-top" id="topbar" data-spy="affix" data-offset-top="0" > -->
      <div class="topBar affix-top" id="topbar">
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
                  <li><a href=https://twitter.com/IIT_Bhilai?lang=en-US target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
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
                              <span class="main-nav-link">Institute <b class="caret"></b>
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
                              <span class="main-nav-link">Recruitment <b class="caret"></b>
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
                              <span class="main-nav-link">Admissions <b class="caret"></b>
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
                              <span class="main-nav-link">Alumni <b class="caret"></b>
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
                              <span class="main-nav-link">Placement <b class="caret"></b>
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
                              <span class="main-nav-link">People <b class="caret"></b>
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
                              <span class="main-nav-link">Announcements <b class="caret"></b>
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
                          <style type="text/css">
                              .red {
                                  color: #f20000;
                              }

                              #webdet {
                                  display: none;
                              }
                          </style>
                          <div class="wrapper">
                              <div id="sub-header"></div>
                              <section class="content-header">
                                  <div class="row">
                                      <div class="col-md-12 col-sm-12">
                                          <div class="panel panel-default">
                                              <div class="panel-heading">
                                                  <h3 class="panel-title">Verified Students List</h3>
                                              </div>
                                              <div class="panel-body">
                                                  <div class="row">
                                                      &nbsp &nbsp &nbsp &nbsp &nbsp
                                                      <div class="col-md-3 col-xs-6 col-sm-3">
                                                          <input type="text" placeholder="Search by Name" id="search">
                                                      </div>
                                                      <div class="col-md-5 col-xs-6 col-sm-5">
                                                          <div class="form-row align-items-center">
                                                              <div class="col-auto my-1">
                                                                  <label for="PPT date"> &nbsp &nbsp &nbsp Sort Branch Wise &nbsp &nbsp </label>
                                                                  <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                                      <option selected>Sort Branch Wise</option>
                                                                      <option value="1">B.Tech CSE</option>
                                                                      <option value="2">B.Tech ME</option>
                                                                      <option value="3">B.Tech EE</option>
                                                                      <option value="1">M.Tech CSE</option>
                                                                      <option value="2">M.Tech ME</option>
                                                                      <option value="3">M.Tech EE</option>
                                                                  </select>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <br>
                                                  <div class="ex1 scrolling">
                                                      <style>
                                                          .scrolling {
                                                              overflow-y: auto;
                                                              max-height: 350px;
                                                          }
                                                      </style>

                                                      <table class="table table-striped table-hover" id="stdlist">
                                                          <thead>
                                                              <tr>
                                                                  <th>Student_ID</th>
                                                                  <th>Email</th>
                                                                  <th>Profile_Link</th>
                                                              </tr>
                                                          </thead>

                                                          <tbody id="myTable">
                                                              <?php for ($i = 0; $i < ($res['NO_OF_ITEMS']); $i++) { ?>

                                                              <tr>
                                                                  <td><?php echo $res['oDATA'][$i]['name'] ?></td>
                                                                  <td><?php echo $res['oDATA'][$i]['email_id'] ?></td>
                                                                  <td>

                                                                      <button type="button" data-toggle="modal" data-target="#john">View</button>

                                                                      <!-- Modal -->
                                                                      <div class="modal fade" id="john" role="dialog">
                                                                          <div class="modal-dialog">

                                                                              <!-- Modal content-->
                                                                              <div class="modal-content">
                                                                                  <div class="modal-header">
                                                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                      <h4 class="modal-title text-center">Student_ID</h4>
                                                                                  </div>
                                                                                  <div class="modal-body">
                                                                                      <table class="table table-hover table-striped table-bordered table-condensed">
                                                                                          <tr>
                                                                                              <th> Sr.</th>
                                                                                              <th>Field</th>
                                                                                              <th>Description</th>
                                                                                          </tr>
                                                                                          <tr>
                                                                                              <td>1.</td>
                                                                                              <td>Name</td>
                                                                                              <td><?php echo $res['oDATA'][$i]['name'] ?></td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                              <td>2.</td>
                                                                                              <td>Semester</td>
                                                                                              <td><?php echo $res['oDATA'][$i]['semester'] ?></td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                              <td>3.</td>
                                                                                              <td>Student ID</td>
                                                                                              <td><?php echo $res['oDATA'][$i]['student_id'] ?></td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                              <td>4.</td>
                                                                                              <td>Discipline</td>
                                                                                              <td><?php echo $res['oDATA'][$i]['discipline'] ?></td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                              <td>5.</td>
                                                                                              <td>Email-Id</td>
                                                                                              <td><?php echo $res['oDATA'][$i]['email_id'] ?></td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                              <td>6.</td>
                                                                                              <td>Age</td>
                                                                                              <td><?php echo $res['oDATA'][$i]['age'] ?></td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                              <td>7.</td>
                                                                                              <td>Contact-1</td>
                                                                                              <td><?php echo $res['oDATA'][$i]['contact_1'] ?></td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                              <td>8.</td>
                                                                                              <td>Contact-2</td>
                                                                                              <td><?php echo $res['oDATA'][$i]['contact_2'] ?></td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                              <td>9.</td>
                                                                                              <td>Program</td>
                                                                                              <td><?php echo $res['oDATA'][$i]['program'] ?></td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                              <td>10.</td>
                                                                                              <td>CGPA</td>
                                                                                              <td><?php echo $res['oDATA'][$i]['cgpa'] ?></td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                              <td>11.</td>
                                                                                              <td>Class XII School</td>
                                                                                              <td><?php echo $res['oDATA'][$i]['xii_school'] ?></td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                              <td>12.</td>
                                                                                              <td>Class XII percentage</td>
                                                                                              <td><?php echo $res['oDATA'][$i]['xii_percentage'] ?></td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                              <td>13.</td>
                                                                                              <td>Class X School</td>
                                                                                              <td><?php echo $res['oDATA'][$i]['x_school'] ?></td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                              <td>14.</td>
                                                                                              <td>Class X percentage</td>
                                                                                              <td><?php echo $res['oDATA'][$i]['x_percentage'] ?></td>
                                                                                          </tr>
                                                                                      </table>
                                                                                  </div>
                                                                                  <div class="modal-footer">
                                                                                      <button type="button" class="btn btn-info" data-dismiss="modal">Go to Page</button>
                                                                                  </div>
                                                                              </div>
                                                                          </div>
                                                                      </div>

                                                                  </td>
                                                              </tr>
                                                              <?php 
																														} ?>
                                                          </tbody>
                                                      </table>
                                                  </div>
        
                                              </div>
                                              <div class="form-group row">
                                                  <div class="col-sm-5"></div>
                                                  <div class="col-sm-7" ">
                              <button type=" submit" class="btn btn-primary" onclick="showRecord();">
                                                      &nbsp; Print
                                                      </button>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </section>
                          </div>
                          <script type="text/javascript">
                              var cd;
                              $(function() {
                                  CreateCaptcha();
                              });
                              // Create Captcha
                              function CreateCaptcha() {
                                  //$('#InvalidCapthcaError').hide();
                                  var alpha = new Array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
                                  var i;
                                  for (i = 0; i < 6; i++) {
                                      var a = alpha[Math.floor(Math.random() * alpha.length)];
                                      var b = alpha[Math.floor(Math.random() * alpha.length)];
                                      var c = alpha[Math.floor(Math.random() * alpha.length)];
                                      var d = alpha[Math.floor(Math.random() * alpha.length)];
                                      var e = alpha[Math.floor(Math.random() * alpha.length)];
                                      var f = alpha[Math.floor(Math.random() * alpha.length)];
                                  }
                                  cd = a + ' ' + b + ' ' + c + ' ' + d + ' ' + e + ' ' + f;
                                  $('#CaptchaImageCode').empty().append('<canvas id="CapCode" class="capcode" width="300" height="80"></canvas>')
                                  var c = document.getElementById("CapCode"),
                                      ctx = c.getContext("2d"),
                                      x = c.width / 2,
                                      img = new Image();
                                  img.src = "https://www.iitbhilai.ac.in/index.php?pid=img_captcha";
                                  img.onload = function() {
                                      var pattern = ctx.createPattern(img, "repeat");
                                      ctx.fillStyle = pattern;
                                      ctx.fillRect(0, 0, c.width, c.height);
                                      ctx.font = "46px Roboto Slab";
                                      ctx.fillStyle = '#ccc';
                                      ctx.textAlign = 'center';
                                      ctx.setTransform(1, -0.12, 0, 1, 0, 15);
                                      ctx.fillText(cd, x, 55);
                                  };
                              }
                              // Validate Captcha
                              function ValidateCaptcha() {
                                  var string1 = removeSpaces(cd);
                                  var string2 = removeSpaces($('#UserCaptchaCode').val());
                                  if (string1 == string2) {
                                      return true;
                                  } else {
                                      return false;
                                  }
                              }
                              // Remove Spaces
                              function removeSpaces(string) {
                                  return string.split(' ').join('');
                              }
                              // Check Captcha
                              function CheckCaptcha() {
                                  var result = ValidateCaptcha();
                                  if ($("#UserCaptchaCode").val() == "" || $("#UserCaptchaCode").val() == null || $("#UserCaptchaCode").val() == "undefined") {
                                      window.alert('Please enter captcha given below in a picture.');
                                      $('#UserCaptchaCode').focus();
                                      return false;
                                  } else {
                                      if (result == false) {
                                          window.alert('Invalid Captcha! Please try again.');
                                          CreateCaptcha();
                                          $('#UserCaptchaCode').focus();
                                          return false;
                                      } else {
                                          return true;
                                      }
                                  }
                              }
                          </script>
                          <script type="text/javascript">
                              function validateURL(url) {
                                  var pattern = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
                                  if (pattern.test(url)) {
                                      return true;
                                  }
                                  return false;

                              }
                          </script>
                          <script type="text/javascript">
                              function checkForm() {
                                  var cmp_name = document.forms["cmpReg"]["cmp_name"];
                                  var cmp_addr = document.forms["cmpReg"]["cmp_post_addr"];
                                  var cmp_url = document.forms["cmpReg"]["cmp_url"];
                                  var cmp_offc_phno = document.forms["cmpReg"]["cmp_offc_phno"];
                                  var fpoc_name = document.forms["cmpReg"]["fpoc_name"];
                                  var fpoc_desig = document.forms["cmpReg"]["fpoc_desig"];
                                  var fpoc_email = document.forms["cmpReg"]["fpoc_email"];
                                  var fpoc_phno = document.forms["cmpReg"]["fpoc_phno"];

                                  /*var cmp_desc_file = document.forms["cmpReg"]["cmp_desc_file"];*/
                                  var cmp_desc = document.forms["cmpReg"]["cmp_desc"];

                                  if (cmp_name.value.trim() == "") {
                                      window.alert("Please enter Name of the Company.");
                                      cmp_name.focus();
                                      return false;
                                  }
                                  if (cmp_desc.value.trim() == "") {
                                      window.alert("Please write about the Company");
                                      cmp_desc.focus();
                                      return false;
                                  }
                                  if (cmp_addr.value.trim() == "") {
                                      window.alert("Please enter Postal Address of HR / Hiring Office.");
                                      cmp_addr.focus();
                                      return false;
                                  }
                                  if (cmp_offc_phno.value.trim() == "") {
                                      window.alert("Please enter Office Phone Number.");
                                      cmp_offc_phno.focus();
                                      return false;
                                  }
                                  if (cmp_url.value.trim() == "") {
                                      window.alert("Please enter your company website.");
                                      cmp_url.focus();
                                      return false;
                                  } else {
                                      if (!validateURL(cmp_url.value)) {
                                          window.alert("Invali company website");
                                          cmp_url.focus();
                                          return false;
                                      }
                                  }
                                  if (fpoc_name.value.trim() == "") {
                                      window.alert("Please enter your first point of contact name.");
                                      fpoc_name.focus();
                                      return false;
                                  }
                                  if (fpoc_desig.value.trim() == "") {
                                      window.alert("Please enter your first point of contact designation.");
                                      fpoc_desig.focus();
                                      return false;
                                  }
                                  if (fpoc_email.value.trim() == "") {
                                      window.alert("Please enter your first point of contact email address.");
                                      fpoc_email.focus();
                                      return false;
                                  }
                                  if (fpoc_phno.value.trim() == "") {
                                      window.alert("Please enter your first point of contact number.");
                                      fpoc_phno.focus();
                                      return false;
                                  }
                                  if (CheckCaptcha()) {
                                      return true;
                                  } else {
                                      return false;
                                  }
                              }
                          </script>
                      </body>
                  </div>
                  <div class="col-md-3">
                      <!-- generated from related link file -->
                      <h3 class='mytitle'>placement</h3>
                      <ul class='mysidebar'>
                          <li class='active'><a href='index.php?pid=invi_letter_tnp' target='_self'> Placement Invitation</a></li>
                          <li class='active'><a href='index.php?pid=internship_procedure' target='_self'> Internship Procedure</a></li>
                          <li class='active'><a href='index.php?pid=placement_procedure' target='_self'> Placement Procedure</a></li>
                          <li class='active'><a href='index.php?pid=company_portal' target='_self'> Company Registration</a></li>
                          <li class='active'><a href='index.php?pid=placement_office' target='_self'> Placement Office</a></li>
                          <li class='active'><a href='' target=''></a></li>
                      </ul>
                      <h3 class="mytitle">Navigation</h3>
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



          <script>
              function blinker() {
                  $('.blink_me').fadeOut(500);
                  $('.blink_me').fadeIn(500);
              }

              setInterval(blinker, 2000);
          </script>
      </body>

      <!--footer section starts here-->
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
                                      <h4><a href="index.php?pid=students" style="color: white">Student</a></h4>
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
                              IIT Bhilai is striving for research-driven undergraduate and postgraduate education. Our objective is to create an education system with multifacet outcomes including research, entrepreneurship, technical leadership, and above all, responsible citizenship. <a href="index.php?pid=admin_messagefromdirector">Read More</a>
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
      <script>
          //google custom search engine
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
          $(document).ready(function() {
              $('ul.nav li.dropdown').hover(function() {
                  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
              }, function() {
                  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
              });
          });

          function btnHindiCulture() {
              var location = window.location.href;
              var new_location = location.split('&')[0];
              if (location.includes("culture"))
                  location = removeParam("culture", location);
              var url = new URL(location);
              if (url.searchParams.get("pid") != null)
                  window.location = location + "&culture=hi-IN"
              else {
                  if (window.location.href.includes("index.php"))
                      window.location = location + "?pid=home&culture=hi-IN";
                  else
                      window.location = location + "index.php?pid=home&culture=hi-IN"
              }
          }

          function btnEnglishCulture() {
              var location = window.location.href;
              var new_location = location.split('&')[0];
              if (location.includes("culture"))
                  location = removeParam("culture", location);
              var url = new URL(location);
              if (url.searchParams.get("pid") != null)
                  window.location = location + "&culture=en-US"
              else {
                  if (window.location.href.includes("index.php"))
                      window.location = location + "?pid=home&culture=en-US";
                  else
                      window.location = location + "index.php?pid=home&culture=en-US"
              }
          }

          function removeParam(key, URL) {
              var rtn = URL.split("?")[0],
                  param,
                  params_arr = [],
                  queryString = (URL.indexOf("?") !== -1) ? URL.split("?")[1] : "";
              if (queryString !== "") {
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

          function customizeFont(action) {
              current_size = parseInt($('#body').css('font-size'));
              current_box_height = parseInt($('.well').css('height'));
              new_size = 14;
              new_box_height = 200;
              if (action == 'up') {
                  new_size = Math.min(current_size + 2, 18);
                  new_box_height = Math.min(current_box_height + 50, 275)
              } else if (action == 'down') {
                  new_size = Math.max(current_size - 2, 10);
                  new_box_height = Math.max(current_box_height - 50, 200);
              }
              $('#body').css('font-size', new_size);
              new_box_height = new_box_height + 'px'
              $('.well').css('height', new_box_height);
              document.getElementById("card1").style.height = new_box_height;
              document.getElementById("card2").style.height = new_box_height;
              document.getElementById("card3").style.height = new_box_height;
          }
      </script>
  </body>