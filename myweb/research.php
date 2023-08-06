<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>CT519</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesoeet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <div class="">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="logo" href="index.php"><img src="images/logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="research.php">Research</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="mybook.php">My Book</a>
                     </li>
                  </ul>
                  <div class="search_icon"><a href="#"><img src="images/search-icon.png"></a></div>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end --> 
      <!-- service section start -->
      <div class="services_section layout_padding">
         <div class="container">
            <div class="services_taital">Smart Plug Load</div>
            <p class="services_text">Smart Plugs are a type of popular consumer products controlling electrical loads via WiFi communication. This paper introduces a new Smart Plug 2.0 concept which offers
                            all-in-one protection against overload, short circuit, arc, ground, or voltage surge faults in addition to the basic power control function. It aims at preventing fire and shock hazards caused by
                            aged or damaged power cords in homes and offices. Smart Plug 2.0 uses power instead of commonly used relays and sophisticated fault detection hardware/software. It offers a µsscale time resolution to detect and respond to a fault condition, and
                            reduces the electrothermal stress on the house wiring by at least 5X in comparison to the existing protection solution. A 120V/10A prototype is built and the testing results are reported in this paper.
                            <br></br>
                            Maximizing energy utilization is a key strategy for todays enterprise in their effort towards sustainable tomorrow. Energy accounts for 50% or more of operating profit and 60%
                            of energy in enterprise is under utilized. Plug loads typically consume up to 50% of the overall electrical energy usage in an enterprise. Even though multiple solutions exist such as Building
                            Management System (BMS) to monitor and control electrical energy at main level such as HVAC but there are no solutions that can detect, analyze and trigger automatic actions in real
                            time at plug load points. The proposed solution for managing plug loads is called PLEMS which allows to monitor and control appliances connected to smart plugs in a policy adaptable way
                            and extend the coverage of existing BMS to plug loads.
                            <br></br>
                            The growth of and reliance on renewable energy necessitate a multi-pronged approach to achieve grid reliability and economics. As they represent a notable portion of U.S. energy
                            consumption, commercial buildings must play an active role in this effort. Conserving energy and responding to grid conditions through demand flexibility can be achieved through the integration of major building systems. Integration of plug and process
                            loads with lighting and heating, ventilation, and air conditioning systems maximizes the effectiveness of integrated building energy management. In this research, we demonstrate the integration
                            of smart outlets into a building automation system.</p>
         </div>
         <div class="services_section_2 layout_padding">
            <div class="container-fluid padding_0">
               <div class="box_main">
                  <div class="box_left">
                     <div class="box_left_main">

                        <div class="box_right_one">
                           <div class="icon_1"><span class="padding_left_10">MOSFETs</span></div>
                           <p>Smart Plug 2.0. The microcontroller starts with a system
                            initiation program after the Smart Plug 2.0 is plugged into a wall
        outlet and receives a manual or remote ON command. It follows
        by enabling a timer interrupt program to check on the load
        current and repeat this step in an infinite loop until exiting from
        the timer interrupt program. Fig. 4 illustrates the timer interrupt
        program flowchart. The program is responsible for all normal
        switching and fault protection operations of the smart plug, and
        runs with a fixed cycle time of 48µs. It starts by activating all
        ADC functions, reading all GPIO status and polling all ADC and
        process data of the microcontroller. If it receives an WiFi or
        manual ON/OFF command at this point, it will respond
        accordingly and exit the program. Otherwise, it will continue to
        read the SYSTEM STATUS flag. If the SYSMTEM STATUS
        flag indicates an OFF STATE (ON_STATE) from the previous
        interrupt cycle, the program will branch into a turn-on program.
        If the SYSMTEM STATUS flag indicates an ON STATE
        (ON_STATE) from the previous interrupt cycle, the program
        will branch into a fault detection program. If the SYSMTEM
        STATUS flag indicates an overcurrent fault being detected
        (OC_DETECTED) from the previous interrupt cycle, the
        program will branch into a short circuit fault authentication
        program. All the branch programs will return to an internal data
        communication program to communicate with the WiFi module
        before completing the current cycle of operation. Note that the
        AC voltage and load current are sampled every 48µs by the
        periodic interrupt function, at a much higher time resolution than
        the typical ms-level sampling rate in a typical Smart Plug 1.0. </p>
                        </div>
                     </div>

                  </div>
                  <div class="box_middle">
                     <div class="box_left_main">
                        <div class="padding_10">
                           <div class="icon_1"><span class="padding_left_10">PLEMS</span></div>
                           <p class="long_text">A. Non-Working Hours Case study: Desktops
        Desktop computers consuming a large percentage of office
        electricity load [2] can be attributed to the following reasons:
        • Many computers are powered on during office hours,
        but remain unused for various reasons. For example, an
        employee may step out for a meeting or attend a training
        session or a leisure break. On an average, a computer
        is actually used for only 5-6 hours out of the total 8-9
        working hours (WH).
        • Desktop computers are left powered on even after office
        hours/during non-working hours(NW) including weekends because employees forget to switch them off while
        leaving for the day.
        We have run an internal pilot to monitor power consumption
        by desktop and CPUs of 30 employees by connecting their
        monitor and CPU to a 15A smart plug each and a couple
        of gateways to span the range of smart plugs in cubicles,
        distributed over a floor. We deployed PLEMS (only the data
        gathering was done for analysis and depicting insights) for
        an entire month to monitor the power consumption. Table I
        shows that the average after office hours consumption by
        a LCD monitor and a CPU were 50.37% and 46.75% of
        their total monthly consumption respectively. The monthly
        consumption was extrapolated over a year and we also observed, a yearly saving potential (NW yearly bill) of USD
        (United States Dollar) 15.10 per monitor and USD 31.06
        per CPU is achievable if the resources are shutdown after
        office hours, at the unit energy price of USD 0.11 per kWh
        [17]. Desktop cannot be powered down just by smart plug
        actuation as it requires soft shutdown process to save/close all
        running softwares and terminate operating system. We assume
        an enterprise admin has full control over any desktop in the
        network to remotely shutdown them. But desktop does not
        follow any heterogeneous protocol to report usage statistics in
        real-time back to admin. Cisco devices (such as IP telephony)
        use their custom EnergyWise [18] system whereas enterprise
        lights and fans use software from Johnson Controls [19] to
        report usage statistics data. So an enterprise admin can be
        informed via PLEMS when any desktop is lying unused (based
        on usage data reported by smart plug), they can take manual
        or configure policy to trigger remote action such as shutdown
        the machine or send SMS/Email to the owner of that machine
        as a warning that his/her machine is consuming idle power.
        Also there exist desktops outside enterprise network due to
        client requirements (especially in projects where sensitive data
        is handled, as in banking domain). For these desktops, the
        enterprise admin can neither monitor nor remotely control
        them. In such scenarios if PLEMS is deployed then admin
        can track the usage of those desktops and take necessary
        action (such as asking clarification from the employee who is
        assigned that machine) if the machine is running after office
        hours or on weekends. On urgent need they can also power
        down those machines by smart plug actuation(though it will
        not be soft shutdown).
        This case study proved the need for an effective PLEMS in
        an enterprise not only to track top energy wasting appliances
        also to help an enterprise admin design policies that trigger,
        to soft shutdown desktops which are not being used actively.
        The above results inspired us to carry out another such study
        of enterprise break room area equipments</p>
                        </div>
                     </div>

                  </div>
                  <div class="box_right">
                     <div class="box_left_main">
                        <div class="box_right_one">
                           <div class="icon_1"><span class="padding_left_10">Metasys</span></div>
                           <p class="long_text">A. Baseline Results : We successfully recorded power measurements from the 25
        plug loads in the Metasys server. From the baseline data, we
        can gain insights into the power consumption of different plug
        loads. In Fig. 3, six example load profiles are shown for a 24-
        hour period on Tuesday, June 21. Plug load use is inconsistent
        during the summer at universities. Thus, a specific day and
        set of devices were chosen for their active use. This enabled
        us to observe standby and active patterns that are similar to
        what other studies have found for comparable devices [7].
        Most of the devices have distinct peaks during business hours
        that likely correspond to active use, which indicates that their
        standby power is in the range of 2 to 60 watts. Energy savings
        can be gained by eliminating this standby power consumption.
        <br></br>
        B. Control Results : In Fig. 4, the aggregate power consumption of the 25 plug
        loads is shown for the baseline week in blue and controls week
        in orange. The periods during which the orange line drops to
        zero correspond with the control schedule, which confirms that
        the BAS was able to turn off the smart outlets at the expected
        times. There were no increases in power consumption during
        these “off” periods, which means that occupants did not have
        to manually override the smart outlets to restore power. This
        is important because occupant satisfaction is crucial for longterm implementation of PLC. There are also spikes in energy
        consumption on Monday and Tuesday of the controls week.
        We observed in the data that two copiers and two printers
        turned on at the same time and believe that the initial spike
        is due to the power-up cycle that printers perform when first
        turned on. For other days, the devices turned on at slightly
        different times, likely due to communication delays between
        the server and smart outlets.
        Fig. 5 shows the amount of energy saved by day of week.
        In total, the controls week used 67.4 kWh (66%) less than the
        baseline week. This would equate to a savings of $23 per week
        or $1,192 per year, assuming an average cost for electricity
        of 34¢ per kWh in San Diego [8]. During weekdays, we see
        savings of 41.1 kWh (53%). These savings will vary depending
        on active use of the plug loads. However, savings from evening
        and weekend controls are likely more predictable.</p>
                        </div>

                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- service section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-sm-12">
                  <div class="map_text"><a href="#"><img src="images/map-icon.png" class="image_main"><span class="padding_left_10">Bangbuathong Nonthaburi</span></a></div>
               </div>
               <div class="col-lg-4 col-sm-12">
                  <div class="map_text"><a href="#"><img src="images/call-icon.png" class="image_main"><span class="padding_left_10">(+66 11439638)</span></a></div>
               </div>
               <div class="col-lg-4 col-sm-12">
                  <div class="map_text"><a href="#"><img src="images/mail-icon.png" class="image_main"><span class="padding_left_10">65130208@dpu.ac.th</span></a></div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <!-- <p class="copyright_text">Copyright 2019 All Right Reserved By.<a href="https://html.design"> Free  html Templates</p> -->
         </div>
      </div>
      <!-- copyright section end -->    
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>