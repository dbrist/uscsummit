<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <title>2013 USC Corporate Governance Summit</title>
    
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/site.css" media="screen" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700" />
    <link rel="stylesheet" href="css/flexslider.css" media="screen" />
    <link rel="stylesheet" href="css/jquery.fancybox.css" media="screen" />
    <link rel="stylesheet" href="css/jquery.fancybox.css" media="screen" />

      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <script src="jquery.tinyTips.js"></script>
      <script src="jquery.leftTips.js"></script>

    <script type="text/javascript">
               $(document).ready(function() {
                  $('img.lightTip').tinyTips('light', 'title');
                });

    </script>

    <script type="text/javascript">
            $(document).ready(function() {
              $('img.leftTip').leftTips('red', 'title');
            });


      /* close div box*/
            $(document).on('click','.close',function(){
            $(this).parent().fadeTo(300,0,function(){
          $(this).remove();
          });
            });   

    </script>

    <script type="text/javascript">

        var startY = 100;
        var stopY = 10000;
        
        $(window).scroll(function(){
               checkY();
            });
        
        function checkY() { 
            console.log($(window).scrollTop()); 
               if($(window).scrollTop() > startY && $(window).scrollTop() <= stopY)
                   { console.log("Show"); 
        
                  $('#fixed-banner').fadeIn("slow"); }
               else {
                     console.log("Hide"); 
                     $('#fixed-banner').fadeOut("slow"); }
         }        
        checkY();

    </script>
                                                   
     <script src="js/jquery.ui.widget.min.js"></script>
     <script src="js/jquery.ui.accordion.min.js"></script>
     <script src="js/jquery.ui.tabs.min.js"></script>
     <script src="js/jQuery.BlackAndWhite.min.js"></script>
     <script src="js/jquery.easing-1.3.min.js"></script>
     <script src="js/jquery.fitvid.js"></script>
     <script src="js/jquery.fancybox.pack.js"></script> 
     <script src="js/jquery.flexslider-min.js"></script>
     <script src="js/jquery.isotope.min.js"></script> 
     <script src="js/jquery.jcarousel.min.js"></script>
     <script src="js/jquery.jtweetsanywhere-1.3.1.min.js"></script>
     <script src="js/jquery.touchSwipe.min.js"></script>
     <script src="js/jquery.zflickrfeed.min.js"></script>
     <script src="js/respond.min.js"></script>
     <script src="js/selectnav.min.js"></script>
     <script src="js/custom.js"></script>
     <script src="js/jquery.cookie.js"></script>
     <script src="js/jquery.countdown.js"></script>
    <!--[if (gte IE 6)&(lte IE 8)]>
      <script type="text/javascript" src="js/selectivizr-min.js"></script>
      <noscript><link rel="stylesheet" href="[fallback css]" /></noscript>
    <![endif]-->

</head>

<body>

<!-- Main Container -->
<div id="body-wrapper">

     <div id="fixed-banner">

          <div id="content">
               <!-- Countdown Clock -->
                &nbsp;&nbsp;&nbsp;Summit Begins in
                <script language="JavaScript">
                    TargetDate = "11/14/2013 8:00 AM UTC-0800";
                    BackColor = "none";
                    ForeColor = "none";
                    CountActive = true;
                    CountStepper = -1;
                    LeadingZero = true;
                    DisplayFormat = "%%D%% Days ";
                    FinishMessage = "Conference has started.";
                </script>
                <script language="JavaScript" src="js/countdown.js"></script>           
                &nbsp;&nbsp;&nbsp;

                   <a target="_blank" href="https://www.regonline.com/Register/Checkin.aspx?EventID=1252367" class="ronline">REGISTER ONLINE</a>&nbsp;
                     <a target="_blank" href="Form2013.pdf" class="ronline">REGISTER BY FAX</a> 

                       
          </div>

            <a class="close">×</a><!-- close button -->

    </div>

    <!-- Header -->
   <div id="topbanner">

      <span style="color:#f79530;">USC</span><span style="color:#ffffff;"> Corporate Governance Summit</span>
      
         </div>
            <div id="header" class="container clearfix">

              <a href="index.php" id="logo"><img width="404px" height="52px" src="images/8th_logo.jpeg" alt="" /></a>

              <!-- Navigation -->
                <ul id="navigation">
                    <li><a href="index.php">Home</a></li>
                    <li ><a>About</a>
                      <ul>
                           <li><a href="#about">About the Summit</a></li>
                          <li><a href="#hotel">Hotel Information</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="#speakers">Speakers</a>
                  </li>
                  <li>
                      <a href="#schedule">Schedule</a>
                  </li>
                  <li>
                      <a>Register Now</a>
                        <ul>
                              <li><a href="https://www.regonline.com/Register/Checkin.aspx?EventID=1252367">Online Registration</a></li>
                              <li><a target="_blank" href="http://uscsummit.com/images/Form2013.pdf">By Fax</a></li>
                      </ul>
                  </li>
              </ul>
              
          </div><!-- /Header -->


    <!-- Image Slider -->
          <div id="content" class="container clearfix">
                <br />
              <!-- Slider -->
              <div id="main-slider" class="flexslider">
                  <ul class="slides">
                    <li>
                      <img src="images/third_image.png" alt="" />
                           <div class="flex-caption-left">
                                 <h3>The 8th Annual <br />USC Corporate Governance Summit</h3>
                    </li>

                       <li>
                           <img src="images/DavidsonSlide.jpg" alt="" />
                         <!--
                           <div class="flex-caption-right">
                                 <h3>November 14-15, 2013</h3> <p>University of Southern California <br /> Davidson Conference Center<br /> 3415 S Figueroa St, Los Angeles, CA 90089</p> 
                            </div>
                            -->
                        </li>

                       <li>
                         <img src="images/football.png" alt="" />
                           <div class="flex-caption-left">
                             <h3>Join Us for the Homecoming Game!</h3> <p>USC Trojans vs. Stanford Cardinal
                             <br /> November 16, 2013</p> 
                       </li>

                        <!-- Uncomment the bottom to add more photos -->

                     <!--    <li>
                         <img src="images/football_flipped.png" alt="" />
                           <div class="flex-caption-right">
                             <h3>Join Us for the Homecoming Game!</h3> <p>USC Trojans vs. Stanford Cardinal
                             <br /> November 16, 2013</p> 
                       </li>

                        <li>
                         <img src="images/football_flipped.png" alt="" />
                           <div class="flex-caption-left">
                             <h3>Join Us for the Homecoming Game!</h3> <p>USC Trojans vs. Stanford Cardinal
                             <br /> November 16, 2013</p> 
                       </li> -->

                  </ul>

          </div>
   
        <!-- /Image Slider -->

        <br />

<!-- Begin About  Page -->

    <div id="about" >

            <h2>About the Summit</h2>

               <p>
                     The 8th Annual USC Corporate Governance Summit brings together thought leaders from industry and academia across the United States. USC's program
                     teams with <a href="http://resourcesglobal.com">Resources Global Professionals</a>, <a href="https://www.unionbank.com/">Union Bank</a>, <a href="http://bingham.com">Bingham McCutchen</a>, <a href="http://www.omm.com">O'Melveny & Myers</a>, <a href="http://pearlmeyer.com">Pearl Meyer &amp; Partners</a>, <a href="http://www.aon.com/">Aon Risk Solutions</a>, <a href="http://cappellocorp.com">Cappello Capital Corp.</a>, <a href="http://lw.com">Latham &amp; Watkins</a>, and The Summit will present insight and commentary from corporate governance practitioners, and experts from the USC Marshall School of Business, USC Gould School of Law and the USC Leventhal School of Accounting.
               </p>
                  <br />
               <p>
                     The USC Corporate Governance Summit aims to create value, provide solutions, and cultivate successful leadership among our nation's top public and private companies. The Summit enables participants to develop board room best practices to effectively balance profitability with prudence and in turn become the stewards of sustainable business. The Summit is designed to give directors, officers, executives and other professionals the information they need to meet the challenges of governance today.
               </p>
               </table>

      </div>
            <br />
            <div id="copromote">
               <table>
                   <tr>
                     <td>
                        <a href="http://www.marshall.usc.edu/"><img target="_blank" width="345" height="96" src="images/s_marshall.png" alt="" /></a>
                     </td>
                     <td>
                        <a href="http://www.marshall.usc.edu/faculty/leventhal"><img target="_blank" width="345" height="96" src="images/s_leventhal.png" alt="" /></a>
                     </td>
                     <td cellpadding="5">
                        <a href="http://weblaw.usc.edu/"><img target="_blank" width="283" height="96" src="images/s_gould_cropped.png" alt="" /></a>
                     </td>
                  </tr>
               </table>
            </div>

<!-- End About  Page -->

<!-- Begin Speakers  Page -->

      <div id="speakers">
            <br />
                  <h2>Speakers <span style="font-size: 14px; "> (Invited or Confirmed)</span></h2>
                  <div class="boxsize">
                    <a href="bio-adams.php" />
                        <img class="lightTip" src="images/speakers/adams.gif"  
                        title="
                        <div>Guy Adams</div> 
                        <p>Managing Director of GWA Capital Parters, LLC. Serves on the board of directors of Vitesse Semiconductor </p>

                        "/>
                      </a>
                        <div class="speaker-name"> Adams  </div>
                        <div class="invited"></div>

                  </div>

                  <div class="boxsize">
                        <img class="lightTip" src="images/speakers/angeloff.gif" title="

                        <div>Dann V. Angeloff</div> 
                        <p>
                          <span>President, The Angeloff Company</span><br /> 
                              - Served on 50 boards of directors. <br />
                              - Current and recent ones: Bjurman Barry Funds, Electronic Recgclers luternational, Nicholas <br />
                              - Applegate Growth Equity Fund, Public Storage, Ready Pac Foods, Retirement Capital and SoftBrands, Inc. 
          
                        </p>
                          
                          " />
                        <div class="speaker-name"> Angeloff  </div>
                        <div class="invited">   </div>
                  </div>

                  <div class="boxsize">
                        <img src="images/speakers/ballhaus.gif"  class="lightTip"  title="
                        <div>William Ballhau</div>
                        <p>
                          <span>President and CEO (Ret.) The Aerospace Corporation </span> <br />
                            - Former Vice President Engineering and Technology Lockheed Martin <br /> 
                            - Former President of Martin Marietta's Aero and Naval Systems and Civil Space and Communications.
                        </p> "/>
                        <div class="speaker-name"> Ballhaus  </div>
                        <div class="invited">   </div>
                  </div>
              
                <div class="boxsize">
                        <img src="images/speakers/beatty.gif" class="lightTip"  title="
                        <div> Randolph Beatty </div>
                        <p> 
                          <span>Former Dean of the Leventhal School of Accounting</span><br />
                          - Accounting Circle Professor of Accounting in University of Southern California <br />
                          - One of twelve 'Masters of the Classroom' selected by Business Week."/>
                        <div class="speaker-name"> Beatty  </div>
                        <div class="invited"></div>
                  </div>

                  <div class="boxsize">
                        <img src="images/speakers/blumenthal.gif" class="lightTip"  title="
                        <div>Judith Blumenthal</div>
                        <p>
                          <span>Professor, Marshall School of Business</span><br />
                          - Member, Board of Directors of Guess<br />- Former Associate Dean, Marshall School of Business. </p>"/>
                        <div class="speaker-name"> Blumenthal  </div>
                        <div class="invited">   </div>
                  </div>

                <div class="boxsize">
                        <img src="images/speakers/bristow-1.gif" class="leftTip"  title="
                        <div>Duke Bristow</div>
                        <p>
                          <span>Economist, Marshall School of Business</span><br />
                          - SC Summit Chairman<br /> - Director Landec Corporation<br />- Directorship 100 Golden Apple Teaching Award. </p>"/>
                        <div class="speaker-name"> Bristow  </div>
                        <div class="invited">   </div>
                  </div>

                  <div class="boxsize">
                        <img src="images/speakers/brown.gif" class="leftTip"  title="
                        <div>Stephen Brown</div>
                        <p>
                          <span>Associate General Counsel, TIAA </span>
                          - CREF<br />- Named A Top 10 Global Rising Stars of Corporate Governance<br /> - Board Member of Harlem Renaissance Economic Development Corporation. </p>"/>
                        <div class="speaker-name"> Brown  </div>
                        <div class="invited">   </div>
                  </div>

                  <div class="boxsize">
                        <img src="images/speakers/byrd.gif" class="leftTip"  title="
                        <div>Francis H. Byrd</div>
                        <p>
                          <span>Leader- Laurel Hill Advisory Group's Corporate Governance/Risk Advisory Practice</span>
                          <br />- Vice President/Corporate Governance Specialist at Moody's Investors' Service <br />- Over 90 published corporate governance assessments.</p>"/>
                        <div class="speaker-name"> Bryd  </div>
                        <div class="invited">   </div>
                  </div>

                  <div class="boxsize">
                        <img src="images/speakers/campbell.gif"  class="lightTip"  title="
                        <div>The Honorable <br />Carlos C. Campbell</div>
                        <p>
                          <span>President, Global21 and Initiative Films</span>
                          <br />- Member Board of Directors: Resource American, Inc. (REXI/NASDAQ), and PICO Holdings, Inc. (PICO/NASDAQ) <br />- NACD Leadership Fellow and Directorship 100 <br />- Producer and Director 'Expect the Unexpected.</p>"/>
                        <div class="speaker-name"> Campbell  </div>
                        <div class="invited">   </div>
                  </div>

                  <div class="boxsize">
                        <img src="images/speakers/caplan.gif" class="lightTip"  title="
                        <div>Randi Caplan</div>
                        <p>
                          <span>Vice President of Marketing and Business Development, Farient Advisors, LLC.</span> </p>"/>
                        <div class="speaker-name"> Caplan  </div>
                        <div class="invited">   </div>
                  </div>

                  <div class="boxsize">
                        <img src="images/speakers/cappello.gif" class="lightTip"  title="
                        <div>Alexander Cappello</div>
                        <p>
                          <span>Lead Director Cheesecake Factory.</span><br />
                                          - Current or past boards of California Republic Bank, Inter-Tel, Koo Koo Roo, Cytrx Corp, Genius Products.<br />
                                          - USC Marshall Alumni. </p>"/>
                        <div class="speaker-name"> Cappello  </div>
                        <div class="invited">   </div>
                  </div>

                  <div class="boxsize">
                        <img src="images/speakers/cartwright.gif" class="lightTip"  title="
                        <div>Brian Cartwright</div>
                        <p>
                          <span> Senior Advisor Latham & Watkins LLP. </span> <br />
                                          - Fellow of the Arthur and Toni Rembe Rock Center for Corporate Governance at Stanford University.<br />
                                          - Former General Counsel to the Securities and Exchange Commission.</p>"/>
                        <div class="speaker-name"> Cartwright  </div>
                        <div class="invited">   </div>
                  </div>

                  <div class="boxsize">
                        <img src="images/speakers/champion.jpg" class="lightTip"  title="
                        <div>Laurie Champion</div>
                        <p>
                          <span> Leads Aon's US ERM/Governance Practice</span>
                          <br />- Previously Vice President Risk Management for Coca-Cola Enterprises <br /> - Previously Director Risk Management for Ford Motor Company.</p>"/>
                        <div class="speaker-name"> Champion  </div>
                        <div class="invited">   </div>
                  </div>

                  <div class="boxsize">
                        <img src="images/speakers/chang.gif" class="leftTip"  title="
                        <div>Vanessa C.L. Chang</div>
                        <p>
                          <span> Prinicipal in EL & EL Investments and an independent director of New Perspective Fund.</span></p>"/>
                        <div class="speaker-name"> Chang  </div>
                        <div class="invited">   </div>
                  </div>

                  <div class="boxsize">
                        <img src="images/speakers/coronoa.gif" class="leftTip"  title="
                        <div>Anne Corona</div>
                        <p>
                          <span>Senior Vice President Aon Financial Services Group and member of Aon's D&O Practice Group</span></p>"/>
                        <div class="speaker-name"> Corona  </div>
                        <div class="invited">   </div>
                  </div>

                  <div class="boxsize">
                        <img src="images/speakers/dibble.gif" class="leftTip"  title="
                        <div>Terrence Dibble</div>
                          <p>
                            <span> President and Chairman of the Board of Trustees, J.B and Emily Van Nuys Charities </span>
                            <br />- Member of the Board and former President of the Board, Richstone Family Center <br />- Retired National Partner in charge for Risk Management Advisory Services at KPMG.</p>"/>
                        <div class="speaker-name"> Dibble  </div>
                        <div class="invited">   </div>
                  </div>

                  <div class="boxsize">
                        <img src="images/speakers/dimick.gif" class="lightTip"  title="
                        <div> Neil Dimick</div>
                        <p>
                          <span>Serves as Audit Committee Chair for the Resources Global Professionals.</span>
                          <br />- Named Director of the Year for Corporate Leadership & Service<br />
                            - Served as corporate auditor with Deloitte & Touche LLP.</p>"/>
                        <div class="speaker-name"> Dimick  </div>
                        <div class="invited">   </div>
                  </div>


                  <div class="boxsize">
                        <img src="images/speakers/duchene.gif"  class="lightTip"  title="
                        <div>Kate Duchene</div>
                        <p>
                          <span>Chief Legal Officer and Executive VP of Human Resources of Resources Global Professionals</span>
                          <br />- President Elect on Board of Directors of Human Options. <br />- Previously practiced law for O'Melveny & Myers LLP.</p>"/>
                        <div class="speaker-name"> Duchene  </div>
                        <div class="invited">   </div>
                  </div>

                  <div class="boxsize">
                        <img src="images/speakers/eastham.gif" class="lightTip"  title="
                        <div>Karin Eastham</div>
                        <p>
                          <span> Serves as Director for Illumina, Inc., Geron Corporation, Trius Therapeutics, Inc. </span>
                          <br />- Author of 'Cook the Part: Delicious, Interactive and Fun Team Cooking'.</p>"/>
                        <div class="speaker-name"> Eastham  </div>
                        <div class="invited">   </div>
                  </div>
                  
                  <div class="boxsize">
                        <img src="images/speakers/easton.gif" class="lightTip"  title="
                        <div>Mark Easton</div>
                        <p><span>Partner and a member of the Mergers and Acquisitions Practice GroupO'Melveny & Myers.</span></p>"/>
                        <div class="speaker-name"> Easton  </div>
                        <div class="invited">   </div>
                  </div>

                  <div class="boxsize">
                        <img src="images/speakers/ellis.gif" class="lightTip"  title="
                        <div> Colonel Lee Ellis</div>
                        <p>
                          <span>Founder and President of Leadership Freedom.</span><br />- Leadership Consultant and Coach, Researcher/ Developer, Author/ Speaker, Educator, Air Force Officer and Pilot. </p>"/>
                        <div class="speaker-name"> Ellis  </div>
                        <div class="invited">   </div>
                  </div>

                  <div class="boxsize">
                        <img src="images/speakers/erickson.gif" class="leftTip"  title="
                        <div> John C. Erickson </div>
                          <p>
                            <span> Vice Chairman and Chief Corporate Banking Officer of Union Bank </span><br />- Served as Vice Chairman and Chief Risk Officer of UnionBanCal Corporation, Union Bank, N.A.<br /> - Senior Executive Vice President and Deputy Chief Risk Officer. </p>"/>
                        <div class="speaker-name"> Erickson  </div>
                        <div class="invited">   </div>
                  </div>

                  <div class="boxsize">
                        <img src="images/speakers/esser.gif" class="leftTip"  title="
                        <div>Michael T. Esser</div>
                        <p>
                          <span>Managing Director with Pearl Meyer & Partners </span>
                          <br />Certified Executive Compensation Professional (CECP), WorldatWork Society of Certified Professionals. </p>"/>
                        <div class="speaker-name"> Esser  </div>
                        <div class="invited">   </div>
                  </div>

                  <div class="boxsize">
                        <img src="images/speakers/feeney.gif" class="leftTip"  title="
                        <div>Fay Feeney</div><p><span>CEO, Risk for Good. Directorship 100 'People to Watch List.</span></p>"/>
                        <div class="speaker-name"> Feeney  </div>
                        <div class="invited">   </div>
                  </div>
                  
                   <div class="boxsize">
                        <img src="images/speakers/filippone.gif" class="lightTip"  title="
                        <div>John Filippone</div>
                        <p>
                          <span>Partner of Bingham McCutchen LLP. Member of Bingham's Southern California Regional Hiring Committee.</span></p>"/>
                        <div class="speaker-name"> Flippone  </div>
                        <div class="invited">   </div>
                  </div>
                  
                  <div class="boxsize">
                        <img src="images/speakers/greet.gif" class="lightTip"  title="
                        <div>Nick Greet</div>
                        <p>
                          <span>Managing Director of Aon Southern California. Primary Experience in Directors and Officers Liability.</span></p>"/>
                        <div class="speaker-name"> Greet  </div>
                        <div class="invited">   </div>
                  </div>
                  
                  <div class="boxsize">
                        <img src="images/speakers/herron.gif" class="lightTip"  title="
                        <div>Jay Herron</div>
                        <p>
                          <span> Partner in O'Melveny & Myers LLP and member of O'Melveny & Myers LLP's Mergers & Acquisitions Practice.</span></p>"/>
                        <div class="speaker-name"> Herron  </div>
                        <div class="invited">   </div>
                  </div>
                  
                  <div class="boxsize">
                        <img src="images/speakers/holder.gif" class="lightTip"  title="
                        <div>William Holder</div>
                        <p>
                          <span>Alan Casden Dean's Chair and Dean of USC Leventhal School of Accounting</span></p>"/>
                        <div class="speaker-name"> Holder  </div>
                        <div class="invited">   </div>
                  </div>
                  
                  <div class="boxsize">
                        <img src="images/speakers/johnson.gif" class="lightTip"  title="
                        <div>Michael O. Johnson</div>
                        <p>
                          <span>Named Chief Executive Officer of Herbalife and Chairman of the Herbalife Family Foundation </span></p>"/>
                        <div class="speaker-name"> Johnson  </div>
                        <div class="invited">   </div>
                  </div>
                  
                  <div class="boxsize">
                        <img src="images/speakers/laco.gif" class="leftTip"  title="
                        <div>John Laco</div>
                        <p>
                          <span> O'Melveny & Myers LLP Partner and Member of Mergers & Acquisitions Practice Group </span><br />- Recognized by The Legal 500 United States 2011 and 2010 Publication as a Private Equity Buyouts Leading Lawyer and by the 2011 International Financial Law Review 100 </p>"/>
                        <div class="speaker-name"> Laco  </div>
                        <div class="invited">   </div>
                  </div>
                  
                  <div class="boxsize">
                        <img src="images/speakers/lewis.gif" class="leftTip"  title="
                        <div>Christopher Lewis</div>
                        <p>
                          <span>Co-founded Riordan, Lewis & Haden in 1982 </span><br />- Three-time All-American in Tennis and winner of two NCAA National Championships <br />- Member of Los Angeles chapter of the World Presidents Organization. </p>"/>
                        <div class="speaker-name"> Lewis  </div>
                        <div class="invited">   </div>
                  </div>
                  
                  <div class="boxsize">
                        <img src="images/speakers/magnuson.gif" class="leftTip"  title="
                        <div>Robert Magnuson</div>
                        <p>
                          <span> CEO Magnuson & Company </span><br />- Previously Chief Operating Officer of Nicolas Holdings, LLC <br />- Served on Boards of Computer World, Network World, and CXO Media </p>"/>
                        <div class="speaker-name"> Magnuson  </div>
                        <div class="invited">   </div>
                  </div>
                  
                   <div class="boxsize">
                        <img src="images/speakers/mathaisel.gif" class="lightTip"  title="
                        <div> Bernard Mathaisel</div>
                        <p> <span> Executive Advisor of Achievo Corporation </span> <br />
                        - Previously Senior Vice President and CIO for Solectron Corporation.&lt;br/&gt
                        - Previously Global CIO at Ford Motor Company and The Walt Disney Company.&lt;br/&gt
                        - Board Member of E2Open, Baring Private Equity Asia, Packeteer, QD Technologies, AcXess. </p>"/>
                        <div class="speaker-name"> Mathaisel  </div>
                        <div class="invited">   </div>
                  </div>
                  
                   <div class="boxsize">
                        <img src="images/speakers/matsusaka.gif" class="lightTip"  title="
                        <div>John Matsusaka</div>
                        <p>
                          <span>Vice Dean for Faculty and Academic Affairs</span>
                          <br />- Charles F. Sexton Chair in American Enterprise. <br />- Professor of Finance and Business Economics. <br />- President of Initiative and Referendum Institute.</p>"/>
                        <div class="speaker-name"> Matsusaka  </div>
                        <div class="invited">   </div>
                  </div>
                  
                   <div class="boxsize">
                        <img src="images/speakers/mckee.gif" class="lightTip"  title="
                        <div>Mark McKee</div>
                        <p><span>Founder and President, Capital Alternatives, LLC</span><br />- Former President at Strome Investment Management <br />- Former Founder and President at Private Equity Risk Management. </p>"/>
                        <div class="speaker-name"> McKee  </div>
                        <div class="invited">   </div>
                  </div>
                  
                   <div class="boxsize">
                        <img src="images/speakers/merchant.gif" class="lightTip"  title="
                        <div>Ken Merchant</div>
                        <p><span>Chair in Accounting Deloitte & Touche LLP </span><br />- Professor at USC Marshall School of Business <br /> - Recipient of Three of the American Accounting Association's Notable Contributions to Research Awards.</p>"/>
                        <div class="speaker-name"> Merchant  </div>
                        <div class="invited">   </div>
                  </div>
                  
                   <div class="boxsize">
                        <img src="images/speakers/merino.gif" class="lightTip"  title="
                        <div>Ed Merino</div>
                        <p>
                          <span>Founder and CEO Officer of the Chairman </span><br /> - Served for Six Years as Director of Corporate Governance at a Big Four Accounting Firm's OC Regional Headquarters <br />- Chairman Emeritus of the Forum for Corporate Directors, Orange County.</p>"/>
                        <div class="speaker-name"> Merino  </div>
                        <div class="invited">   </div>
                  </div>
                  
                   <div class="boxsize">
                        <img src="images/speakers/miller.gif" class="leftTip"  title="
                        <div>Diane Miller</div>
                          <p>
                            <span>President and CEO of Wilcox Miller & Nelson</span><br />- Holds a Current Certificate of Director Education from NACD<br />
                        - Board Member on Audit and Compliance Committee and Vice Chair of Compensation Committee of Umpqua Holdings<br />
                        - Board Chair of NACD's Northern California Chapter Board.</p>"/>
                        <div class="speaker-name"> Miller  </div>
                        <div class="invited">   </div>
                  </div>
                  
                   <div class="boxsize">
                        <img src="images/speakers/mitchell.gif" class="leftTip"  title="
                        <div>M. Christian Mitchell</div>
                        <p>
                          <span>Vice Chairman of Marshall & Stevens' Board of Directors</span><br />- Director of Special Value Opportunties Fund LLC <br />
                        - Formerly Deloitte's National Managing Partner of the Mortgage Banking and Finance Companies Practice </p>"/>
                        <div class="speaker-name"> Mitchell  </div>
                        <div class="invited">   </div>
                  </div>
                  
                   <div class="boxsize">
                        <img src="images/speakers/murphy.gif" class="leftTip"  title="
                        <div>Kevin Murphy</div>
                          <p>
                            <span>Kenneth Trefftzs Chair in Finance </span><br />- Associate Editor for the Journal of Financial Economics and Corporate Finance<br />
                        - Previously Vice Dean For Faculty and Academic Affairs at USC Marshal </p>"/>
                        <div class="speaker-name"> Murphy  </div>
                        <div class="invited">   </div>
                  </div>
                  
                  <div class="boxsize">
                        <img src="images/speakers/nahas.gif" class="lightTip"  title="
                        <div>Caroline Nahas</div>
                          <p>
                            <span>Managing Director of Korn/Ferry International</span><br />- Serves on Board of Directors of DineEquity, Inc.</p><br />
                        - Received 'Legacy Award' from NAWBO-LA in 2010"/>
                        <div class="speaker-name"> Nahas  </div>
                        <div class="invited">   </div>
                  </div>
                  
                  <div class="boxsize">
                        <img src="images/speakers/niemann.gif" class="lightTip"  title="
                        <div>Patrick Niemann </div>
                        <p><span>Partner of Ernst & Young</span><br />- Ernst & Young's Americas Advisory Council</p>"/>
                        <div class="speaker-name"> Niemann  </div>
                        <div class="invited">   </div>
                  </div>
                  
                  <div class="boxsize">
                        <img src="images/speakers/palmer.gif" class="lightTip"  title="
                        <div> Pamela Palmer </div>
                          <p>
                            <span>Partner for Latham & Watkins LLP </span><br />- Named a Southern California Super Lawyer by Los Angeles Magazine Every Year Since 2005<br />
                        - Co-Chair of the Derivative Suits Committee of the American Bar Association's Class Actions & Derivative Suits Committee </p>"/>
                        <div class="speaker-name"> Palmer  </div>
                        <div class="invited">   </div>
                  </div>
                  
                  <div class="boxsize">
                        <img src="images/speakers/pizula.gif" class="lightTip"  title="
                        <div>Steve Pizula </div>
                          <p><span>Deloitte & Touche LLP, Partner</span> <br /> - Pizula graduated from USC in 1977 and joined Deloitte (then Haskins & Sells) <br />
                        - Steve has served on a number of Deloitte national committees, including partner admissions, audit quality, and well as a number of market focused initiatives.</p>"/>
                        <div class="speaker-name"> Pizula  </div>
                        <div class="invited">   </div>
                  </div>
                  
                  <div class="boxsize">
                        <img src="images/speakers/rasmussen.gif" class="lightTip"  title="
                        <div> Robert Rasmussen </div>
                          <p>
                            <span> USC Law Dean </span><br />- USC Law Carl Mason Franklin Chair in Law <br />- Professor of Law and Political Science at USC Gould School of Law </p>"/>
                        <div class="speaker-name"> Rasmussen  </div>
                        <div class="invited">   </div>
                  </div>
                  
                  <div class="boxsize">
                        <img src="images/speakers/rollo.gif" class="leftTip"  title="
                        <div>Robert Rollo</div>
                          <p>
                            <span>Heidrick and Struggles Partner </span><br />- Successfully Completed More Than 450 Senior-Level Executive Searches.<br />
                        - Previously Vice Chairman and Leader of Highland Partners' Specialty Practice Sector.<br />
                        - Chairman of Southern California Chapter NACD. </p>"/>
                        <div class="speaker-name"> Rollo  </div>
                        <div class="invited">   </div>
                  </div>
                  
                  <div class="boxsize">
                        <img src="images/speakers/sale.gif" class="leftTip"  title="
                        <div>Andy Sale</div>
                          <p>
                            <span>Leads Ernst & Young's practices</span><br />- Has served as the lead partner to many major clients.<br />
                        - Appointed by the Board of Governors of the Federal Reserve to serve as a Director of the Federal Reserve Bank of San Francisco.<br />
                        - Also passionate about community service</p>"/>
                        <div class="speaker-name"> Sale  </div>
                        <div class="invited">   </div>
                  </div>
                  
                  <div class="boxsize">
                        <img src="images/speakers/segil.gif" class="leftTip"  title="
                        <div>Larraine Segil</div>
                          <p><span>Board member of Frontier Communications</span><br />- Partner Emeritus and formerly owner and director of Vantage Partners<br />
                        - Senior research fellow at the IC2 Institute at the University of Texas, Austin<br />
                        - Entrepreneurs Board member for the UCLA Anderson School of Management<br />
                        -Regular commentator for CNN and CNBC </p>"/>
                        <div class="speaker-name"> Segil  </div>
                        <div class="invited">   </div>
                  </div>
                  
                  <div class="boxsize">
                        <img src="images/speakers/shima.gif" class="lightTip"  title="
                        <div>Wendy Shiba</div>
                          <p>
                              <span>Former Executive Vice President and General Counsel of KB Home </span><br />- Previous Chief Legal Officer of PolyOne Corporation<br />
                        - Vice Chair of Board of Trustees for the Japanese American National Museum</p>"/>
                        <div class="speaker-name"> Shiba  </div>
                        <div class="invited">   </div>
                  </div>
                  
                  <div class="boxsize">
                        <img src="images/speakers/singer.gif" class="lightTip"  title="
                        <div>Gary Singer</div>
                          <p>
                            <span> Partner, O'Melveny & Myers LLP </span><br />- Admitted to Practice at the US District Court, Central District of California<br />
                        - Former President of UC Irvine Chancellor's Club</p>"/>
                        <div class="speaker-name"> Singer  </div>
                        <div class="invited">   </div>
                  </div>
                  
                  <div class="boxsize">
                        <img src="images/speakers/smiechewicz.gif" class="lightTip"  title="
                        <div> Walter Smiechewicz</div>
                        <p>
                            <span>Managing Director, PwC Risk Assurance </span><br />- Previous Background at Deloitte & Touche <br />
                        - Member of Audit Integrity's Board of Advisors </p>"/>
                        <div class="speaker-name"> Smiechewicz  </div>
                        <div class="invited">   </div>
                  </div>
                  
                  <div class="boxsize">
                        <img src="images/speakers/steele.gif" class="lightTip"  title="
                        <div> Myron Steele </div>
                          <p>
                            <span>Chief Justice Delaware Supreme Court</span><br />- Previous Supreme Court Justice <br /> - Previous Vice Chancellor of the Court of Chancery </p>"/>
                        <div class="speaker-name"> Steele  </div>
                        <div class="invited">   </div>
                  </div>
                  
                  <div class="boxsize">
                        <img src="images/speakers/sussman.gif" class="lightTip"  title="
                        <div>Lester Sussman</div>
                          <p> 
                            <span>Senior Practice Leader of Resources Audit Solutions</span><br />- Audit Partner with Deloitte & Touche <br />
                        - Senior Vice President of Finance and Chief Accounting Officer of Gemstar TV Guide </p>"/>
                        <div class="speaker-name"> Sussman  </div>
                        <div class="invited">   </div>
                  </div>
                  
                  <div class="boxsize">
                        <img src="images/speakers/swartz.gif" class="leftTip"  title="
                        <div> Mick Swartz </div>
                          <p>
                            <span>Associate Professor of Clinical Finance and Business Economics</span><br />- Research published in the Journal of Accounting, Auditing and Finance and Financial Review </p>"/>
                        <div class="speaker-name"> Swartz  </div>
                        <div class="invited">   </div>
                  </div>
                  
                  <div class="boxsize">
                        <img src="images/speakers/tompkins.gif" class="leftTip"  title="
                        <div> Craig Tompkins </div>
                          <p><span>Executive Chairman and a Principal in Marshall & Stevens, Inc. </span><br />- President of an NYSE Listed Company <br /> - Chief Financial Officer of an AMEX Listed Company </p>"/>
                        <div class="speaker-name"> Tompkins  </div>
                        <div class="invited">   </div>
                  </div>
                  
                  <div class="boxsize">
                        <img src="images/speakers/Ukropina.jpg" class="leftTip"  title="
                        <div> James Ukropina</div>
                          <p>
                            <span> Counsel of O'Melveny & Myers LLP </span><br />- CEO of Directions, LLC <br />
                        - Member of Boards of Trust Company of the West, The WM Keck Foundation, and Central Natural Resources </p>"/>
                        <div class="speaker-name"> Ukropina  </div>
                        <div class="invited">   </div>
                  </div>
                  
                  <div class="boxsize">
                        <img src="images/speakers/waller.gif" class="lightTip"  title="
                        <div> Peter Waller </div>
                          <p>
                            <span>Independent Director of Websense Inc. </span><br />- Previous CEO of Corinthian Colleges<br />
                        - Previous President and COO of Corinthian Colleges </p> "/>
                        <div class="speaker-name"> Waller  </div>
                        <div class="invited">   </div>
                  </div>
                  
                  <div class="boxsize">
                        <img src="images/speakers/walton.gif" class="lightTip"  title="
                        <div> Nina Walton</div>
                          <p>
                            <span> Associate Professor of Law and Economics, USC Gould School of Law </span></p>"/>
                        <div class="speaker-name"> Walton  </div>
                        <div class="invited">   </div>
                  </div>
                  
                  <div class="boxsize">
                        <img src="images/speakers/welch.gif" class="lightTip"  title="
                        <div>Richard Welch </div> 
                          <p>
                            <span>Bingham McCutchen Partner </span><br />- Previous Managing Partner of Riordan & McKinzie </p>"/>
                        <div class="speaker-name"> Welch  </div>
                        <div class="invited">   </div>
                  </div>
                  
                  <div class="boxsize">
                        <img src="images/speakers/wetzel.gif" class="lightTip"  title="
                        <div>Daniel Wetzel </div>
                          <p><span>Managing Director, Pearl Meyer & Partners </span><br />- Previous Southern California Practice Leader for Executive & Incentive Pay at Watson Wyatt Worldwide <br />
                                          - Previous Consultant at KPMG LLP </p>"/>
                        <div class="speaker-name"> Wtezel  </div>
                        <div class="invited">   </div>
                  </div>
                  
                  <div class="boxsize">
                        <img src="images/speakers/yamarone.gif" class="lightTip"  title="
                        <div> Chuck Yamarone </div>
                          <p><span>Director, Houlihan Lokey’s Capital Markets Group</span><br />- Served as director of El Paso Electric Company <br />
                        - Served as director for many companies </p>"/>
                        <div class="speaker-name"> Yamarone  </div>
                        <div class="invited">   </div>
                  </div>
                  
                  <div class="boxsize">
                        <img src="images/speakers/zukis.gif" class="leftTip"  title="
                        <div>Norman Zukis</div>
                          <p><span>Partner of PricewaterhouseCoopers</span><br />- Author of Boards and a Social Networking Driven Future in NACD Directorships <br />
                        - On the Los Angeles Universal Preschool Corporate Council </p> "/>
                        <div class="speaker-name"> Zukis  </div>
                        <div class="invited">   </div>
                  </div>
                  <br /><br />

         </div>

<!-- End Speakers  Page -->

<!-- Begin Main Schedule -->

<div id="schedule-box" >

      <div id="schedule" class="grid_8" >
        <br /><br />
            <h2>Summit of the Year: The Election and the Economy</h2>
            <h3> <script>var pfHeaderImgUrl = '';var pfHeaderTagline = '';var pfdisableClickToDel = 0;var pfHideImages = 1;var pfImageDisplayStyle = 'right';var pfDisablePDF = 0;var pfDisableEmail = 1;var pfDisablePrint = 0;var pfCustomCSS = '';var pfBtVersion='1';(function(){var js, pf;pf = document.createElement('script');pf.type = 'text/javascript';if('https:' == document.location.protocol){js='https://pf-cdn.printfriendly.com/ssl/main.js'}else{js='http://cdn.printfriendly.com/printfriendly.js'}pf.src=js;document.getElementsByTagName('head')[0].appendChild(pf)})();</script><a href="http://www.printfriendly.com" style="color:#6D9F00;text-decoration:none;" class="printfriendly" onclick="window.print();return false;" title="Printer Friendly and PDF"><img style="border:none;-webkit-box-shadow:none;box-shadow:none;" src="http://cdn.printfriendly.com/button-print-blu20.png" alt="Print Friendly and PDF"/></a>
            Program Schedule <span style="font-size: 12px; font-style: italic;">(subject to change):</span></h3>
                  <span class="date-header">Thursday, November 14, 2013</span>

                  <div  id="schedule-list">
                        <ul>
                              <li>
                                    <span class="time">7:30-7:55</span>
                                          <span class="event">
                                          <strong>BREAKFAST WITH CHIEF JUSTICE STEELE</strong><br />
                                    </span>
                              </li>

                              <li>
                                    <span class="time">7:55-8:00</span>
                                    <span class="event">
                                          <strong>WELCOME</strong><br />
                                          <a href="http://uscsummit.com/bristow_bio.html">Duke Bristow</a> - Chairman, USC Corporate Summit<br/>
                                    </span>
                               </li>
                  
                              <li>
                                    <span class="time">8:00-9:00</span>
                                    <span class="event">
                                          <strong>INTRODUCTION & KEYNOTE ADDRESS</strong><br />
                                          <strong>Corporate Governance: What lies ahead?</strong><br />
                                          <a href="rasmussen_bio.html">Robert K. Rasmussen</a> - Dean, USC Gould  School of Law<br />
                                          <strong>KEYNOTE: Corporate Governance: What Lies Ahead?</strong><br />
                                          <a href="steele_bio.html">Myron T. Steele</a> - 7th Chief Justice of the Delaware Supreme Court 
                                          </span>
                               </li>
                  <li>

                        <span class="time">9:00-9:45</span>
                        <span class="event">
                              <strong>PLENARY SESSION: </strong><br/>
                              <strong>Q&amp;A with Chief Justice Steele</strong><br />
                              Moderator: <a href="http://marshallapps.usc.edu/portal/subapps/digitalmeasures/faculty.jsp?surveyId=48900">Duke Bristow</a> - Professor, Marshall School of Business<br />

                              <a href="http://www.lw.com/attorneys.aspx?page=attorneybio&attno=00751">Brian Cartwright</a> - 23<sup>rd</sup> General Counsel, SEC <br/>
                  <!--<a href="scrawford_bio.html">Susan J. Crawford</a> - Independent Director, Resources Connection, Inc.<br/> -->
                  <!--        <a href="sonsini_bio.html">Larry W. Sonsini</a> - Chairman, NYSE Commission on Corporate Governance<br /> -->
                              <a href="steele_bio.html">Myron T. Steele</a> - 7th Chief Justice of the Delaware Supreme Court<br/>
                        <a href="rasmussen_bio.html">Robert K. Rasmussen</a> - Dean, USC Gould School of Law<br/>
                        </span>
                  </li>
                  <li>
                        <span class="time">9:45-10:00</span>
                        <span class="event">
                              <strong>BREAK</strong>
                        </span>
                  </li>

                  <li>
                        <span class="time">10:00-11:00</span>
                        <span class="event">
                              <strong>BREAKOUT SESSION A:</strong><br />
                              <strong>New Threats to Audit Committees</strong><br />
                              Moderator: <a href="sussman_bio.html">Les Sussman</a> - Senior Practice Leader, Resources Global Professionals<br />

                              <!--<a href="cappello_bio.html">Alexander Cappello</a> - Chairman and CEO, Cappello Capital Corporation<br/>-->
                              <a href="dimick_bio.html">Neil Dimick</a> - Audit Committee Chair and Corporate Board Member, Resources Global Professionals<br />
                    <a href="eastham_bio.html">Karin Eastham</a> - Director, Illumina, Inc., Geron Corporation, Trius Therapeutics, Inc., and Morphosys AG<br />
                              <a href="holder_bio.html">William Holder</a> - Alan Casden Dean's Chair, USC Leventhal School of Accounting<br />
                    <br/>

                        <strong>BREAKOUT SESSION B:</strong><br />
                              <strong>Inside CEO &amp; Board Searches</strong><br />
                  <a href="nahas_bio.html">Caroline Nahas</a> - Managing Director, Korn/Ferry International<br/>
                    
                              <a href="rollo_bio.html">Robert S. Rollo</a> - Partner, Heidrick and Struggles<br /> 
                              <!--<a href="eisner_bio.html">Steven Eisner</a> - Senior Vice President, Fund General Counsel<br />
                              
                              <a href="lewis_bio.html">J. Christopher Lewis</a> - Managing Director, Riordan, Lewis & Haden<br /> -->
                              
                  <br />      
                              <strong>BREAKOUT SESSION C:</strong><br />
                              <strong>Governance Lessons From Private Equity</strong><br />
                              Moderator: <a href="welch_bio.html/">Richard Welch</a> - Partner, Bingham<br />

                              <a href="mckee_bio.html/">Mark McKee</a> -  President, Capital Alternatives, LLC<br />
                              <!--<a href="eisner_bio.html">Steven Eisner</a> - Senior Vice President, Fund General Counsel<br />-->
                              
                              <a href="lewis_bio.html">J. Christopher Lewis</a> - Managing Director, Riordan, Lewis & Haden<br />
                              <a href="cappello_bio.html">Alexander Cappello</a> - Chairman & CEO, Cappello Capital Corp.<br />
                    <br/>
                              <strong>BREAKOUT SESSION D:</strong><br />
                              <strong>The Opportunity and Risk Realities: IT Briefing</strong><br />
                              Moderator: <a href="mathiasel_bio.html">Bernard F. Mathaisel</a> - Executive Advisor, Achievo Corporation<br/>

         <!--<a href="caplan_bio.html">Randi Caplan</a> - Vice President Marketing & Business Development, Farient Advisors LLC<br />
         -->
                              <!--<a href="cunningham_bio.html">Colleen Cunningham</a> - VP and Controller, Zoetis, Inc.<br />-->
                  <a href="magnuson_bio.html">Robert Magnuson</a>- CEO, Magnuson & Company<br/>
         <!--   <a href="mathiasel_bio.html">Bernard F. Mathaisel</a> - Executive Advisor, Achievo Corporation<br/>
         -->
            <a href="zukis_bio.html">Norman Zukis</a> -  Partner, PricewaterhouseCoopers<br/>
            
                   Session Producer: <a href="feeney_bio.html"> Fay Feeney </a> - CEO, Risk for Good <br />

                           
                   </span>
                    
                    
                                  </li>

                  <li>
                        <span class="time">11:00-11:15</span>
                              <span class="event">
                              <strong>BREAK</strong></li>
                              
                  <li>
                        <span class="time">11:15-12:30</span>
                              <span class="event">
            
                              <strong>PLENARY SESSION:</strong><br/>
                              <strong>Inside the Black Box: Changes in the Boardroom</strong><br/>
                              Moderator: <a href="blumenthal_bio.html">Judith Blumenthal</a> - Professor, USC Marshall School of Business<br />

                              <a href="adams_bio.html">Guy Adams</a> - Managing Director of GWA Capital Parters, LLC<br/>
                              
                              <!--<a href="filippone_bio.html">John  Filippone</a> - Partner, Bingham McCutchen LLP<br />
<a href="miller_bio.html">Diane Miller</a> - President & CEO, Wilcox Miller & Nelson<br/>-->
                              <a href="campbell_bio.html">Carlos C. Campbell</a> -Director, Resources America, Inc.<br/>
                    
                              <a href="eastham_bio.html">Karin Eastham</a> - Director, Illumina, Inc., Geron Corporation, Trius Therapeutics, Inc., and Morphosys AG<br /> 
                    <a href="filippone_bio.html">John Filippone</a> -  Partner, Bingham McCutchen LLP <br/>
                    
                    
                        </span>


                  </li>
      
                  <li>  
                        <span class="time">LUNCH<br />12:30-1:30</span>
                        <span class="event">
                              <strong>DIRECTORS' NETWORKING LUNCHEON</strong><br />

Sponsored by USC Marshall at The Vineyard Room<br/>
                        <!--
                              Welcome and Introduction by <a href="merino_bio.html"> Ed Merino</a> - CEO, Office of the Chairman<br/>
                              <a href="ellis_bio.html">Colonel Lee Ellis</a> - Author of <i>Leading With Honor</i><br/>
                              "Leading with honor"
                  -->
                              </span>

                  </li>
                  <li>        
                        <span class="time">1:30-2:30</span>
                        <span class="event">
                              <strong>PLENARY SESSION:</strong><br/>

                                        Welcome and Introduction by <a href="merino_bio.html"> Ed Merino</a> - CEO, Office of the Chairman<br/>
                              <a href="ellis_bio.html">Colonel Lee Ellis</a> - Author of <i>Leading With Honor</i><br/>
                              "Leading with honor"


                  <!--        <strong>News from the Capital: Regulatory and Legislative Update</strong><br/>
                              <strong>Introduction by:</strong>
                              
                              <a href="beatty_bio.html"> Randolph Beatty</a> - Accounting Circle Professor of Accounting<br/>
                    <a href="cunningham_bio.html">Colleen Cunningham</a> - VP and Controller, Zoetis, Inc.<br/>
                  -->         
                        </span>
                  </li>
                  <li>  
                        <span class="time">2:30-2:45</span>

                        <span class="event">
                              <strong>BREAK</strong>
                        </span>
                  </li>
                  <li>
                        <span class="time">2:45-3:45</span>
                  <span class="event"><strong>BREAKOUT SESSION A:</strong><br />
                              <strong>Last call for M&A Transactions</strong><br />
                              Moderator: <a href="http://www.omm.com/johnlaco/">John Laco</a> - Partner, O'Melveny & Myers<br />
                              <!--<a href="cochrane_bio.html/">Brian Cochrane</a> - EVP and Global Leader, Aon M&A Solutions<br />-->

                              <a href="easton_bio.html/">Mark Easton</a> - Partner, O'Melveny & Myers<br />
                              <a href="segil_bio.html/">Larraine Segil</a> - Board member, Frontier Communications<br />
                              
<a href="yamarone_bio.html/">Chuck Yamarone</a> - Director, Houlihan Lokey's Capital Markets Group<br />
                              
                    <!--  <strong>BREAKOUT SESSION B:</strong><br /> 
                      <strong>Developments in Corporate Governance: Say on Pay, Proxy Access, Separation in CEO and Chairman Roles, Staggered Boards</strong><br />
                      <br />
                      <strong>Moderator: Kate Duchene, Resources Global Professionals</strong><br />
                           -->
                      <br />
                      <strong>BREAKOUT SESSION B:</strong><br />
                      <strong>Update on D&O Risks and Insurance </strong><br />
                  Moderator: <a href="greet_bio.html">Nick Greet</a> - Managing Director, Financial Services Group, Aon<br/>
                      <!--<a href="greet_bio.html">Nick Greet</a> - Managing Director Financial Services Group, Aon Risk Solutions <br/>-->
                      
                      <a href="corona_bio.html">Anne Corona </a>- Senior Vice President Financial Services Group, Aon Risk Solutions<br/>                         
                      <a href="http://www.lw.com/attorneys.aspx?page=attorneybio&attno=00992"> Pamela Palmer</a> - Partner, Latham and Watkins<br />
                      
                      <a href="tompkins_bio.html">Craig Tompkins</a> - Executive Chairman and Principal, Marshall and Stevens<br />
                      
                      
                          <!--            <strong>BREAKOUT SESSION C:</strong><br />
                              <strong>What's New in the Digital World:  A Director Briefing</strong><br />
                              Moderator: <a href="feeney_bio.html">Fay Feeney</a> - CEO, Risk for Good<br />

                              <a href="cunningham_bio.html">Colleen Cunningham</a> - Global Managing Director, Resources Global Professionals<br />

                              <a href="magnuson_bio.html">Robert Magnuson</a> - CEO, Magnuson & Company<br />
                              <br />  
                           -->
                            <br />
                      <strong>BREAKOUT SESSION C:</strong><br />
                      <strong>Board Succession: Be Worthy To Serve & Exit With Honor & Dignity</strong><br />
                      Moderator: <a href="merino_bio.html">Ed Merino</a>- Founder and CEO, Office of the Chairman<br/>
                <a href="angeloff_bio.html">Dann Angeloff</a> - President, The Angeloff Company<br />
            <a href="chang_bio.html">Vanessa Chang</a> - Principal, EL & EL Investments<br />       
            <a href="goeglein_bio.html">Richard Geoglein</a> - Nonexecutive Chariman, Pinnacle Entertainment, Inc.<br />
                          <br />
                      <strong>BREAKOUT SESSION D:</strong><br />
                      <strong>Fairness Opinions, Solvency Opinions and other Valuation Issues for Today's Board Members</strong><br />
                      Moderator: <a href="niemann_bio.html">Patrick Niemann</a> - Partner, Ernst & Young<br />
                <a href="kromwyk_bio.html">Paul Kromwyk</a> - Senior Vice President, Cappello Capital Corp.<br />
                      <!--
                <a href="chang_bio.html">Vanessa Chang</a> - Principal, EL & EL Investments<br />         
            <a href="goeglein_bio.html">Richard Geoglein</a> - Nonexecutive Chariman, Pinnacle Entertainment, Inc.<br />
                          -->
                </span>           </li> 
<!--               <li> 
                        <span class="time">2:30-2:45</span>
                        <span class="event">
                              <strong>BREAK</strong><br />
                              Sponsored by Capello Capital Corp
                              
                        </span>
                  </li -->
                  <li>
                        <span class="time">3:45-4:00</span>
                        <span class="event">
                              <strong>BREAK</strong><br/>
                  </li>
            <li>
                        <span class="time">4:00-5:00</span>
                          <span class="event">                    
                            <strong>PLENARY SESSION:</strong><br/>
                            <strong>Directors' Briefing: It's Different this Time</strong><br />
              Moderator: <a href="http://uscsummit.com/bristow_bio.html">Duke Bristow</a> - Chairman, USC Corporate Summit<br/>

                        <!--<a href="niemann_bio.html">Patrick Niemann</a> - Partner, Ernst & Young<br />
<a href="http://www.marshall.usc.edu/faculty/directory/matsusak"> John Matsusaka</a> - Vice Dean for Faculty and Academic Affairs, Charles F. Sexton Chair in American Enterprise, and Professor of Finance and Business Economics<br />
                        -->
                          
                      <!--<a href="herron_bio.html">Jay Herron</a> - Partner, O'Melveny & Myers<br />
                              <a href="lorne_bio.html">Simon Lorne</a> - Vice Chairman & Chief Legal Officer, Millennium Management LLC<br/> -->
                            <a href="cappello_bio.html">Alexander Cappello</a> - Chairman & CEO, Cappello Capital Corp.<br />
                      <a href="sale_bio.html">Andy Sale</a> - Senior Partner, Ernst & Young LLP<br/>
                          
                      <!--
                            <a href="shiba_bio.html">Wendy Shiba</a> - Former General Counsel of KB Home and Chief Legal Officer of PolyOne Corporation(Ret.)<br />
                            -->
                  </span>
                          </li>
                  <li>
                        <span class="time">5:00-6:00</span>
                        <span class="event">
                  <strong>NETWORKING RECEPTION</strong><br />

                              Sponsored by O'Melveny &amp; Myers
                        </span>
                  </li>
                  
                  <br /><br />
                  
                  <span class="date-header">Friday, November 15, 2013</span>
                  <li>
                        <span class="time">NETWORKING BREAKFAST<br>7:30-7:55</span>

                        <span class="event">
                         <strong>NETWORKING BREAKFAST</strong><br />
                              Sponsored by Resources Global Professionals<br/>
                              <br/>
                        </span>

                  </li>
            
                  <li>
                        <span class="time">7:55-8:00</span>
                        <span class="event">
                              <strong>WELCOME</strong><br />
                              <a href="http://uscsummit.com/bristow_bio.html">Duke Bristow</a> - Chairman, USC Corporate Summit<br/>

                        </span>
                  </li>
<li>
                        <span class="time">8:00-9:00</span>
                        <span class="event">
                  <strong>PLENARY SESSION</strong><br/>
            <strong>Good Governance Practices Off Wall Street</strong><br/>
            Moderator: <a href="dibble_bio.html">Terrence Dibble</a>- Partner, KPMG LLP (Retired)<br/>
            <a href="ballhaus_bio.html">William Ballhaus, Jr.</a> - President and CEO (Ret.), The Aerospace Corporation<br />
            <a href="brown_bio.html">Stephen Brown</a> - Associate General Counsel, TIAA-CREF<br/>
                              
                           <!--         <a href="byrd_bio.html">Francis Byrd</a> - Senior Vice President, Corporate Governance, Risk Practice Leader, Laurel Hill Advisory Group<br />
                           -->
                                        <a href="shiba_bio.html">Wendy Shiba</a> - Former General Counsel of KB Home and Chief Legal Officer of PolyOne Corporation (Ret.)<br />
                    <a href="Ukropina_bio.html">James R. Ukropina</a> -  Counsel, O'Melveny & Myers LLP<br/>
                              
            </span></li>
<!--
                  <li>
                        <span class="time">8:00-9:00</span>
                        <span class="event">
                              <strong>PLENARY SESSION: </strong><br/>
                              <strong>Communicating in a Crisis</strong><br />

                              Moderator: <a href="sitrick_bio.html">Michael Sitrick</a> - Chairman &amp; CEO, Sitrick Brincko Group<br />
                              <a href="http://www.uscsummit.com/brosnahan_bio.html">James Brosnahan</a> - Senior Partner, Morrison & Foerster<br />
                              <a href="emshwiller_bio.html">John Emshwiller</a> - Senior National Correspondent, The Wall Street Journal<br/>

                              <a href="ukropina_bio.html">James R. Ukropina</a> - Of Counsel, O'Melveny & Myers<br />
                              </span>
                  </li> 
                              
                  <li>
                        <span class="time">9:00-9:15</span>
                        <span class="event">

                              <strong>BREAK</strong>
                              Sponsored by Union Bank
                        </span>
                  </li> -->         
                        
                  <li>
                        <span class="time">9:15-10:15</span>
                        <span class="event">
                              
                              <strong>BREAKOUT SESSION A:</strong><br />

                              <strong>Outlook for Compensation</strong><br />
                              Moderator:<a href="http://www.pearlmeyer.com/Wetzel">Daniel Wetzel</a> - Managing Partner, Pearl Meyer &amp; Partners<br /> 
                    <a href="http://www.pearlmeyer.com/Esser">Michael Esser</a> - Managing Partner, Pearl Meyer &amp; Partners<br />
                              <a href="miller_bio.html">Diane Miller</a> - President and CEO, Wilcox Miller & Nelson <br/>

                              <a href="murphy_bio.html">Kevin Murphy</a> - Kenneth L. Trefftzs Chair in Finance, USC Marshall School of Business, Advisor to US Government on Executive Compensation<br />
                              
                              
                              <br/>
                              
                              <strong>BREAKOUT SESSION B:</strong><br />
                              <strong>How is Regulation Affecting the Board?</strong><br />

                              Moderator: <a href="merchant_bio.html">Ken Merchant</a> - Chair in Accountancy, Deloitte & Touche LLP and Professor, USC Marshall School of Business<br/>
                              <a href="erickson_bio.html">John C. Erickson</a> - Vice Chairman and Chief Corporate Banking Officer, Union Bank <br/>
                              <a href="mitchell_bio.html">M. Christian Mitchell</a> - Vice Chairman, the Board of Directors, Marshall & Stevens<br />

                              <a href="Ukropina_bio.html">James R. Ukropina</a> - Counsel, O'Melveny & Myers LLP<br />
                              <!--<a href="Ballhaus_bio.html">William F. Ballhaus</a> - President and CEO(r), The Aerospace Corporation<br />-->
                  
                              <br/>
                              <strong>BREAKOUT SESSION C:</strong><br />
                        <strong>Timely Topics for Public Companies: 2012 and Beyond</strong><br />

                              Moderator: <a href="singer_bio.html">Gary Singer</a> - Partner, O'Melveny and Myers LLP<br />
                              <a href="herron_bio.html">Jay Herron</a> - Partner, O'Melveny and Myers LLP<br/>
                              <a href="pizula_bio.html">Steve Pizula</a> - Partner, Deloitte & Touche LLP<br/>
                              <a href="brown_bio.html">Steven Brown</a> - Associate General Counsel, TIAA-CREF<br/>
                              <a href="walton_bio.html">Nina Walton</a> - Associate Professor of Law and Economics, USC Gould School of Law<br/>
                              <br />
                              <strong>BREAKOUT SESSION D:</strong><br />
                              <strong>Governance and the art of war - Global lessons in leveraging GRC for sustained profit making and high reputation</strong><br />
                              Moderator: <a href="smiechewicz_bio.html">Walter Smiechewicz</a> - Chief Audit Executive, First Niagara Bank<br />
                                        <a href="byrd_bio.html">Francis Byrd</a> - Senior Vice President, Corporate Governance, Risk Practice Leader, Laurel Hill Advisory Group<br />
                              <a href="champion_bio.html">Laurie Champion</a> - Director Enterprise Risk Management, Aon Risk Solutions<br />
                                        <a href="duchene_bio.html">Kate Duchene</a> - Chief Legal Officer & Executive VP of Human Resources, Resources Global Professionals<br />                           
                                        <a href="waller_bio.html">Peter Waller</a> - Independent Director, Websense Inc.<br />
                        </span>

                  </li>
                  <li>  
                        <span class="time">10:15-10:30</span>

                        <span class="event">
                              <strong>BREAK</strong>
                        </span>
                  </li>
              <li>
                        <span class="time">10:30-11:45</span>
                        <span class="event">
                        <strong>KEYNOTE ADDRESS:</strong><br/>
                        <strong>Keynote: A Short Story</strong><br/>                
              <strong>Introduction by:</strong><a href="cartwright_bio.html">Brian Cartwright</a> - 23rd General Counsel,  SEC<br/>
              <a href="johnson_bio.html">Michael O. Johnson</a> - Chairman and CEO, Herbalife, Ltd<br />

                              <!--Moderator <a href="http://www.lw.com/attorneys.aspx?page=attorneybio&attno=00751">Brian Cartwright</a> - Senior Advisor, Latham &amp; Watkins<br />
                              <a href="grundfest_bio.html">Joseph A. Grundfest</a> - W.A. Frank Professor of Law and Business, Stanford University<br/>
                              <a href="lorne_bio.html"> Simon Lorne</a> - Vice Chairman & Chief Legal Officer, Millennium Management<br />

                              
                              <a href="http://lawweb.usc.edu/who/faculty/directory/contactInfo.cfm?detailID=23758">Robert K. Rasmussen</a> - Dean and Carl Mason Franklin Chair in Law and
                              Professor of Law and Political Science, USC Gould School of Law -->
                        </span>
                  </li>
                  <li>  
                        <span class="time">LUNCHEON<br />11:45-1:00</span>
                        <span class="event">
                              <strong>DIRECTORS NETWORKING LUNCHEON</strong><br />

                              Sponsored by Bingham McCutchen<br/>
                        <!--  <a href="haden_bio.html"> Pat Haden</a> - Athletic Director, University of Southern California                      -->
                        </span>
                  </li>
                  <li>
                        <span class="time">1:00-2:00</span>
                        <span class="event">

                              <strong>CLOSING PANEL</strong><br /> A Post Election Look Ahead: Analysis and Takeaways </strong><br />
                                        Moderator: <a href="magnuson_bio.html">Robert Magnuson</a> - CEO, Magnuson & Company<br />
                              <br />
                           <!--     <strong>Introduction of Christopher Cox</strong><br />
                                        <a href="goodman_bio.html">Brian Goodman</a> - Senior Practice Leader, Legal & Regulatory practice, Resources Global Professionals
                        -->
            <!--                        <a href="harris_bio.html">Lawrence Harris</a> - Fred V. Keenan Chair in Finance and Professor of Finance and Business Economics<br/> 
                        -->
                              
            <!--                        <a href="goodman_bio.html">Brian Goodman</a> - Senior Practice Leader, Legal & Regulatory, Resources Global Professionals
                              <br /><br />

                              <strong>CLOSING KEYNOTE:</strong><br/>
                              <strong></strong><br />
                              <a href="cox_bio.html">Christopher Cox</a> - Former SEC Chairman, Partner, Bingham McCutchen
                        </span>
                  </li>
                        -->
                  <li>        
                        <span class="time">2:00</span>

                        <span class="event">
                              <strong>CONFERENCE CLOSE</strong><br />

                              <a href="http://marshallapps.usc.edu/portal/subapps/digitalmeasures/faculty.jsp?surveyId=48900">Duke Bristow</a> - Professor, USC Marshall School of Business
                        </span>
                  </li>
            </ul>
            </div> <!-- End of schedule-list -->
      </div> <!-- End of  schedule-->

 <!-- End of main schedule-->

 <!-- begin of side schedule-->

      <div id="glance-box">
            <div id="ataglance">
                  <h3><img src="images/proglance.png" width="273px" height="40px"/></h3>
                        <div class="glance">
                              <strong>When:</strong><br />
                              November 14, 2013 (8am - 6pm)<br />
                              November 15, 2013 (8am - 2pm)<br /><br />

                              <strong> Where: </strong> <br />
                              Davidson Conference Center<br />
                              <a target="_blank" href="https://www.google.com/maps?q=davidson+conference+center&sll=34.02150799999997,-118.28032045098738&sspn=0.0020424783313618424,0.0045049301705165365&t=m&dg=opt&hnear=Davidson+Conference+Center,+Los+Angeles,+California+90089&z=16">USC University Park Campus<br /> 3415 S Figueroa St, Los Angeles, CA 90089<br /></a>
                        
                              <br /><br />
                              
                              <strong>Cost of Participation</strong><br />

                              $2,995
                              
                              <br /><br />
                              
                              <strong>Accreditations</strong><br />

                              <strong>ISS and TIAA-CREF</strong><br />
                              This Program has been accredited by Institutional Shareholder Services and TIAA-CREF for director education.
                              
                              <br /><br />
                              
                              <strong>NACD</strong><br />
                              Approved for 8 CDE credits by the National Association of Corporate Directors.
                              <br /><br />

                              
                              <strong>MCLE Credit</strong><br/>
                              USC Gould School of Law, a State Bar of California-approved MCLE provider, certifies that this activity qualifies for minimum continuing legal education credit in the amount of 7.0 hours. 
                              <br/><br/>
                              
                              <strong>CPE Eligibility</strong><br />
                              Approved for 13 CPE units
                              
                              <br /><br />
                              
                              <strong>Sponsors</strong><br />
                    <a href="http://www.resourcesglobal.com/">Resources Global Professionals</a><br />
                    <a href="http://www.unionbank.com/">Union Bank</a><br/>
                    <a href="http://www.pearlmeyer.com/">Pearl Meyer &amp; Partners</a><br />
                    
                    <a href="http://www.bingham.com/">Bingham McCutchen</a><br />
                    <a href="http://www.omm.com/">O'Melveny &amp; Myers</a><br />   
                    <a href="http://www.aon.com/">Aon Risk Solutions</a><br />
                    <a href="http://www.cappellocorp.com/">Cappello Capital Corp.</a><br/>
                    <a href="http://lw.com">Latham &amp; Watkins</a><br />
            </div>
        </div>
</div> 
</div>
</div>
<br />
<!-- End of main schedule-->

<!-- Begin Hotel Information-->

      <div id="hotel" >
            <h2>Hotel Information</h2>
            <br />
                  <p>
                    <strong><a href="http://www.ritzcarlton.com/en/Properties/LosAngeles/Default.htm">Ritz-Carlton</a></strong><br />
                    Situated approximately 2.8 miles north of the USC campus in the heart of Downtown L.A.,
                    the Ritz-Carlton Los Angeles soars above the city, offering a sleek, sophisticated atmosphere,
                    refined service and sweeping views. Los Angeles landmarks such as the Walt Disney Concert
                    Hall, STAPLES Center, LA Live and The Museum of Contemporary Art (MOCA), are just
                    blocks away. If you choose to stay at the Ritz-Carlton, please make your reservation as soon
                    as possible and be sure to mention that you are attending an event at USC for a prearranged
                    discounted room rate. You will also need to arrange your transportation between the hotel
                    and campus on a daily basis. Hotel information: 900 W. Olympic Blvd, Los Angeles, CA
                    90015 USA; Phone: (213) 743-8800. 

                  </p>
                  <p>
                    <strong><a href="http://www.lalivemarriott.com/">JW Marriott at LA Live</a></strong><br />
                    JW Marriott at LA Live is linked to The Ritz-Carlton and offers luxury accommodations only 2.8
                    miles north of the USC campus. JW Marriott at LA Live provides convenient access to LA Live
                    shops and restaurants, Downtown LA attractions, Staples Center, Regal Cinemas, Los Angeles
                    Convention Center, and the Nokia Theater. You will need to arrange your own transportation
                    between the hotel and campus on a daily basis. Hotel information: 900 W. Olympic Blvd, Los
                    Angeles, CA 90015 USA; Toll-free: 1-888-832-9136 

                  </p>
                  <p>
                    <strong><a href="http://www.omnihotels.com/FindAHotel/LosAngelesCaliforniaPlaza.aspx">Omni Hotel</a></strong><br />
                    The Omni Hotel in Downtown Los Angeles is a four-star, top-tier hotel situated approximately
                    2.5 miles north of the USC campus in downtown Los Angeles. There are many fine restaurants
                    and shops in close proximity. If you choose to stay at the Omni, please make your reservation as
                    soon as possible and be sure to mention that you are attending an event at USC for a prearranged
                    discounted room rate. You will also need to arrange for your own transportation between the
                    hotel and campus on a daily basis. Hotel Information 251 South Olive St. Los Angeles, CA
                    90012 Phone: (213) 617-3300 Fax: (213) 617-3399. <br />
                  </p>
                  <p>
                    <strong><a href="http://www.standardhotels.com/los-angeles/">The Standard Downtown LA</a></strong><br />

                    The Standard Downtown LA. Located approximately 3.3 miles north of the USC campus in downtown Los Angeles, The Standard Downtown LA has
                    comfy hotel rooms, a 24-hour restaurant, poolside bar, meeting and event space, as well as easy access to many fine restaurants and
                    shops. If you choose to stay at The Standard, please make your reservation as soon as possible. You will need to arrange your own
                    transportation between the hotel and campus on a daily basis. Hotel information: 550 Flower St., Los Angeles, CA 90071. For
                    reservations, please call (213) 892-8080 or visit 
                  </p>
                  <p>
                    <strong><a href="http://www.hiltoncheckers.com">The Hilton Checkers Hotel</a></strong><br />
                    Also located in downtown Los Angeles, approximately 3 miles from campus, the Hilton
                    Checkers dates back to the 1920's, and has recently been fully restored. It is the only
                    four-diamond boutique hotel in Los Angeles. You will need to arrange your own
                    transportation between the hotel and campus on a daily basis. Hotel Information 535 South
                    Grand Ave. Los Angeles, CA 90071. For reservations, please call (800) HILTONS or visit
                    
                  </p>

            </div>

<br />
<!-- End Hotel Information-->

<!-- Sponsor List -->

      <div id="sponsorList">
         
          <h2>Sponsors:</h2>

            <div id="mainSponsors">

               <table>
                     <tr colspan="2">
                        <a href="https://www.unionbank.com/" target="_blank"><img width="600px" height="171px" src="img/sponsors/logo_ub.jpg" alt="Union Bank" /></a>            
                     </tr>
                     <tr>
                           <td>
                              <a href="http://www.omm.com/" target="_blank"><img src="img/sponsors/logo_omm.jpg" alt="Melveny and Myers" /></a>
                           </td>
                           <td>
                              <a href="http://www.bingham.com/" target="_blank"><img src="img/sponsors/logo_bingham.jpg" alt="bingham" /></a>
                           </td>
                     </tr>

                     <tr>
                           <td>
                              <a href="http://www.pearlmeyer.com/" target="_blank"><img src="img/sponsors/logo_pearlmeyer.gif" alt="Pearl Meyer and Partners" /></a>
                           </td>
                          <td>
                              <a href="http://www.aon.com/" target="_blank"><img src="img/sponsors/logo_aon.jpg" alt="AON" /></a>
                           </td>
                     </tr>
                     <tr>
                           <td>
                              <a href="http://www.lw.com/" target="_blank"><img src="img/sponsors/logo_lw.jpg" alt="Latham Watkins" /></a>
                              </td>
                           <td>
                              <a href="http://www.cappellocorp.com/" target="_blank"><img src="img/sponsors/logo_cappello.jpg" alt="Cappello Capital Corp." /></a>
                           </td>
                     </tr>
               </table>
         </div>

         <div id="co-promoter">

                  <div id="coproSection">
                        <img src="images/copromote.png" alt="Co-Promoting Organizations" />
                  
                     <br /><br />
                     Members of the following organizations will receive a discount on registration.  Please contact your organizations directly for the appropriate discount codes.
                     <br /><br />

                           <span class="images">
                                 <a href="http://www.nacdonline.org/"><img src="images/NACD_new.gif" alt="" /></a>
                                 <a href="http://acgla.org"><img src="images/acglalogo.gif"></a>
                                 <a href="http://fcdoc.org/"><img src="images/formCD.jpg" alt="" width="210" /></a>
                                 
                                 <a href="http://financialexecutives.org/"><img src="images/fei.jpg" alt="" /></a>
                                 <a href="http://www.womenintheboardroom.com/event-cities/los-angeles/"><img src="images/womenboardroom.gif" alt="" /></a>
                           <span>
                  </div>

    </div>

 </div>



<!-- End of Sponsor List -->


    <!-- /Content -->

    <!-- Footer -->
   <div id="footer">
        <div class="container clearfix">

            <!-- About -->
            <div class="one-half">
                <span class="footerHeaders">Three Forums of Continuing Education Are Available</span>
                <br /><br />
                <p>As set forth in the National Registry Sponsor Agreement, the National Registry statement must be used in its entirety and without alteration, in promotional and other materials distributed to prospective course participants: USC Corporate Governance Summit is registered with the National Association of State Boards of Accountancy (NASBA), as a sponsor of continuing professional education on the National Registry of CPE Sponsors. State boards of accountancy have final authority on the acceptance of individual courses for CPE credit. Complaints regarding registered sponsors may be addressed to the National Registry of CPE Sponsors, 150 Fourth Ave. North, Suite 700, Nashville, TN, 37219-2417. Website: www.nasba.org </p>
        <p>
                USC Gould School of Law, a State Bar of California-approved MCLE provider, certifies that this activity qualifies for minimum continuing legal education credit in the amount of 7.0 hours. This event may or may not meet the requirements for continuing legal education in other states. Please check with the bar association or Supreme Court in the state in which you are seeking credit to determine if the event is eligible. 
              </p>
              <br />
              <img src="images/continuingeducation.jpg" />


            </div>
            <!-- /About -->

            <!-- Return Policy -->
            <div class="one-fourth">
                <span class="footerHeaders">Return Policy</span>
                <br/><br />
                <p>
                  90% of the registration fee is refundable 30 days in advance, on or before October 9, 2012. 50% of the registration fee is refundable 7 days in advance, on or before November 1, 2012. No cash refund is available after November 1, 2012.
                  <br /><br />
                  After November 1, 2012, you may substitute an alternative attendee at either or both days. 
                </p>
            </div>
            <!-- /Return Policy -->

            <!-- Past Events -->
            <div class="one-fourth last">
                <span class="footerHeaders">Past Events</span>
                <div class="photo-stream">
                  <p>
                    <ul>
                        <li><a href="archive2011" target="_blank"> Corporate Governance Summit 2011</a></li>
                        <li><a href="2010" target="_blank"> Corporate Governance Summit 2010</a></li>

                        <li><a href="2009" target="_blank"> Corporate Governance Summit 2009</a></li>
                        <li><a href="2008" target="_blank"> Corporate Governance Summit 2008</a></li>
                        <li><a href="2007" target="_blank"> Corporate Governance Summit 2007</a></li>
                        <li><a href="2006" target="_blank"> Corporate Governance Summit 2006</a></li>
                    </ul>
                  </p>
                </div>
            </div>

            <!-- /Past Events-->

        </div>

        <div class="clear"></div>

        <div class="info container clearfix">

            <!-- Copyright -->
            <ul class="copyright">
                <li>© 2013 USC Corporate Governance Summit
            </ul>

        </div>
    </div> 

    <!-- /Footer -->

</div> <!-- /Main Container -->

<!-- Back to Top -->
<div id="back-top"><a href="#top"></a></div>
<!-- /Back to Top -->
</div>  <!-- /body Container -->
</div>
</body>
</html>