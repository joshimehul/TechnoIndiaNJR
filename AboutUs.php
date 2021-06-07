<?php 
$PAGE = 'AboutUs';
$TITLE = 'ABOUT US - Techno India NJR Institute Of Technology';
include_once('includes/navbar.php')
?>

    <div class="space"></div>


 <!-- About Us Main Page Starts-->
  <div  id = "Contain" class="container" style="margin-bottom: 0;">
    <div id="TitleRow" class="row">
      <div class="row-body">
        <div id="RowText"class="row-text">
          <h1>About Us</h1>
        </div>
      </div>
    </div>

    <div class="space">
    </div>

    <!-- Home / About Us-->
    <div class="space" class="row">
      <div class="row-body">
        <div id="noWrap" class="row-text">
          <a id="linkColor" href ="<?php if($PAGE=="AboutUs"){echo './index.php';}else{
            echo './AboutUs.php';?>">Home</a>
          <span id="sep">/</span>
          About Us
        </div>
      </div>
    </div>
    <!-- NavBar-->

    <div class="space">
    </div>
    
    <div id = "noWrap" class="col-md-12 nav-justified d-none d-md-block ">  
    <ul  class="nav-tabs nav nav-justified ">
    <li class="nav-item ">
        <a class="nav-link active" data-bs-toggle="tab" href="#Promoter" >Promoter</a>
    </li>
    <li class="nav-item ">
        <a class="nav-link " data-bs-toggle="tab" href="#Vision" >Vision & Mission</a>
    </li>
    <li class="nav-item ">
        <a a class="nav-link" data-bs-toggle="tab" href="#Founder" >Founder's Message</a>
    </li>
     <li class="nav-item ">
        <a class="nav-link" data-bs-toggle="tab" href="#Key" >Key People</a>
    </li> 
    <li class="nav-item ">
        <a href="#Course" class="nav-link" data-bs-toggle="tab">Course Offered</a>
    </li>
     <li class="nav-item ">
        <a href="#Campus" class="nav-link" data-bs-toggle="tab">Campus At Glance</a>
    </li>
     <li class="nav-item ">
        <a href="#Accredition" class="nav-link" data-bs-toggle="tab">Accredition</a>
    </li>
    </ul>
  </div>

<div class="tab-content d-none d-md-block ">
    <div class="tab-pane active " id="Promoter">
      <br><br>
    <!Introduction-->

    <div id="Heading" class="row shadow-lg p-2 mb-4 bg-white rounded">
      <div class="row-body">
        <div id="headingText"class="row-text">
          <h1>Introduction</h1>
        </div>
      </div>
    </div>

    <div class="space">
    </div>
    <div class="row">
      <div class="row-body">
        <div id = "paraRow" class="row-text">
          <p>
          “Education educates a man, but good education creates a man” is the belief of NJR Foundation which established Techno India NJR Institute of Technology in the year 2008.
          </p>
          <p>
            NJR Foundation, a registered trust, was established in the year 2003 in memory of Shri Navdeep Ranawat and Shri Jitendra Ranawat by Mrs. Meera Ranawat and Mr. Raj Shekhar Vyas, an alumnus of BITS, Pilani having more than 25 years of experience with Tata group and as Techno entrepreneur. Nine more highly qualified trustees with vast experience in the field of law, administration, finance research papers writing and business were inducted subsequently.
          </p>
          Techno NJR was set up with a vision of providing international level engineering education to students of Udaipur so that they do not have to travel to Banglore, Pune, Jaipur for good engineering education.
          <p>

          </p>
        </div>
      </div>
    </div>
    <div class="space">
    </div>

<!--Board of Directors-->

    <div id = "Heading" class="row shadow-lg p-2 mb-4 bg-white rounded">
      <div class="row-body">
        <div id="headingText" class="row-text">
          <h1>Board Of Directors</h1>
        </div>
      </div>
    </div>
    <div class="space">
    </div>

    <!Cards Founder Trustees-->

    <div class="container">
      <div id="alignments" class="row">
        <div id = "col" class="col-md-4 shadow-lg p-2 mb-5 bg-dark rounded" >
          <div id="topSpace" class="card text-center mb-3">
            <img  id="cardImg" class="card-image-top" src="images/Meera-Ranawat.jpg" alt="">
            <div id="topSpace">
            </div>
            <div class="card-body">
              <div id="wordWrap" class="card-text">
                <h1>Meera Ranawat</h1>
              </div>
              <div class="space"></div>
              <div id="noWrap"class="card-text">
                <h5>Chairperson</h5>
              </div>

            </div>
          </div>
        </div>
        
        <div id="col" class="col-md-4 shadow-lg p-2 mb-5 bg-dark rounded ">
          <div id="topSpace" class="card text-center mb-3" >
            <img id="cardImg" class="details card-image-top"  src="images/R-S-Vyas.jpg" alt="">
            <div class="space">
            </div>
            <div class="card-body">
              <div id="noWrap" class="card-text">
                  <h1>R.S.Vyas</h1>
              </div>
              <div class="space"></div>
              <div id="noWrap" class="card-text">
                <h5>Managing Trustee</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="space">
    </div>

    
<!--Trustees-->

    <div id="Heading" class="row shadow-lg p-2 mb-4 bg-white rounded">
      <div class="row-body">
        <div id="headingText" class="row-text">
          <h1>Trustees</h1>
        </div>
      </div>
    </div>
    <div id="space1">
    </div>
    <div class="container">
      <div class="row">
        <div id="wordWrap" class="col-md-3">
          <ul>
            <li>
              <h5>Arvind Mayaram I.A.S.</h5>
            </li>
            <li>
              <h5>Pramod Patni F.C.A</h5>
            </li>
            <li>
              <h5>Vikram Singh</h5>
            </li>
          </ul>
        </div>
        <div class="col-sm-1"></div>
        <div id="wordWrap" class="col-md-4">
           <ul>
            <li>
              <h5>Justice (Retd.) S.S.Vyas</h5>
            </li>
            <li>
              <h5>Yadvendra Singh I.F.S.</h5>
            </li>
            <li>
              <h5>A. K. Roy</h5>
            </li>
          </ul>
        </div>
        <div id="wordWrap" class="col-md-4">
           <ul>
            <li>
              <h5>Shyamoli Roy</h5>
            </li>
            <li>
              <h5>A. K. Biswas</h5>
            </li>
            <li>
              <h5>Ratna Biswas</h5>
            </li>
          </ul>
        </div>
        
      </div>
    </div>
            
<!--Governing Council-->
  
    <div class="space">
    </div>


    <div id="Heading" class="row shadow-lg p-2 mb-4 bg-white rounded">
      <div class="row-body">
        <div id="headingText" class="row-text">
          <h1>Governing Council</h1>
        </div>
      </div>
    </div>
    <div id="space1">
    </div>
    <div class="container">
      <div class="row">
        <div id="noWrap" class="col-md-3">
          <ul>
            <li>
              <h5>Mr. R.S. Vyas</h5>
            </li>
            <li>
              <h5>Prof. N.N. Sharma</h5>
            </li>
            <li>
              <h5>Prof. Sunil Rai</h5>
            </li>
          </ul>
        </div>
        <div class="col-md-1"></div>
        <div id="wordWrap" class="col-md-3">
           <ul>
            <li>
              <h5>Prof. Shrihari Prakash Honward</h5>
            </li>
            <li>
              <h5>Mr. Lalit Yagnik</h5>
            </li>
            <li>
              <h5>Prof. Pankaj Kumar Porwal</h5>
            </li>
          </ul>
        </div>
        <div class="col-md-1 "></div>
        <div id="wordWrap" class="col-md-4">
           <ul>
            <li>
              <h5>Prof. Prasun Chakrabarti</h5>
            </li>
            <li>
              <h5>Prof. Pradeep Chhawchharia</h5>
            </li>
            <li>
              <h5>Prof. V.K. Gorana – RTU Nominee</h5>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
    <div class="tab-pane  " id="Vision">
        <br><br>
          <!--Vision-->

    <div id="Heading" class="row shadow-lg p-2 mb-4 bg-white rounded">
      <div class="row-body">
        <div id="headingText"class="row-text">
          <h1>Vision</h1>
        </div>
      </div>
    </div>
  
  <div class="space">
    </div>
    <div class="row">
      <div class="row-body">
        <div id = "paraRow" class="row-text">
          <p>
          To be a premier Engineering institution on the lines of great private institutions like BITS, Pilani to make a difference in the lives of students, faculty and society at large.
          </p>
          <p>
            As course Curriculum is designed by the University which generally lags behind advances in technology, thecollege will continue to teach new relevant technologies outside the curriculum and devote at least 25% of students time outside prescribed curriculum.
          </p>
          <p> Focus in next few years: Efforts will be made to increase industry partnerships and industry alignment so that students are industry ready by the time they complete the course. This will include industry certifications and courses, Project based learning, internships , participation in Hackathons etc. Students will be provided with the opportunity to work in the industry in 7th and 8th semester ( on the lines of Practice School at BITS).
          Faculty is the biggest strength of this institute. There will be more focus on FDP’s , Research papers and patents by faculty , faculty visits to universities in India and abroad for joint research and projects. college will substantially finance these activities. Academic leave will be granted to faculty pursuing PhD when required so that most faculty complete their PhD in next 5 years.
         </p>
        </div>
      </div>
    </div>
    <div class="space">
    </div>

     <div id = "Heading" class="row shadow-lg p-2 mb-4 bg-white rounded">
      <div class="row-body">
        <div id="headingText" class="row-text">
          <h1>Mission</h1>
        </div>
      </div>
    </div>
    <div class="space">
    </div>
    <div class="row">
      <div class="row-body">
        <div id = "paraRow" class="row-text">
          <p>
          To understand the needs of the industry and transform students into well trained fully employable engineering graduates with rigorous academic knowledge and industry required skill sets. All trustees of NJR Foundation and Management of educational Institutes promoted by NJR shall abide by the following core values :
          </p>
          <ul>
            <li>
              To run professionally managed educational institutes.
            </li>
            <li>
              To pursue excellence in teaching & research.
            </li>
            <li>
              To follow best practices and provide transparency in the governance of institutes promoted by NJR.

            </li>
            <li>
              To follow a fair and just admission process so as to provide access to good education for all sections of society.
            </li>
            <li>
              To create world-class infrastructure in the Institutions promoted by the Foundation.
            </li>
            <li>
              To provide free education to the disadvantaged sections of society. 
            </li>
         
          </ul>
          <p>
            Techno India NJR has been founded by 2 Founder Trustees – one a housewife who lost her only child and husband and another a BITS Pilani graduate. The institute therefore will continue to emphasize Philanthropic activities in memory of departed souls and implement Best practices of eminent Institutes like BITS.
          </p>
          <p>
            In addition to 5% seats allocated by the Institute under the Tuition Fees Waiver Scheme( TFWS), Institute will continue to increase its allocation for Fees concessions (under various heads up to 100% fees waiver) from the present level of around 10% of the revenue (between 40-50 lakh per annum) to around 25% of revenue in next 10 years so that bright students from needy families get a chance to undertake engineering education.
          </p>
          <p>
            Institute has been investing 80% of its surplus (Income minus expenditure) in upgradation of its infrastructure for implementing new technologies and will continue to do so in future. The institute will create more incubation centers within the campus from 2 at present to 5 in next 5 years to promote Startup culture in the institute. The institute will also invest upto 10% in the equity of the institute Start-ups
          </p>
        </div>
      </div>
    </div>
    <div class="space">
    </div>

    <!--Strategic Vision-->

     <div id = "Heading" class="row shadow-lg p-2 mb-4 bg-white rounded">
      <div class="row-body">
        <div id="headingText" class="row-text">
          <h1>Strategic Vision</h1>
        </div>
      </div>
    </div>
    <div class="space">
    </div>
    <div class="row">
      <div class ="row-body">
        <div id="paraRow" class="row-text">
          <p>
            Techno India NJR has been founded by 2 Founder Trustees – one a housewife who lost her only child and husband and another a BITS Pilani graduate. The college therefore will continue to emphasize Philanthropic activities in memory of departed souls and implement Best practices of eminent Institutes like BITS.
          </p>
          <ol>
            <li>
              In addition to 5% seats allocated by the Institute under the Tuition Fees Waiver Scheme( TFWS), the Institute will continue to increase its allocation for Fees concessions under various heads up to 100% fees waiver from the present level of around 10% of the revenue ( between 40-50 lakh per annum) to around 25% of revenue in next 10 years so that bright students from needy families get a chance to undertake engineering education.
            </li>
            <li>
              Institute has been investing 80% of its surplus ( Income minus expenditure) in the up-gradation of its infrastructure for implementing new technologies and will continue to do so in the future. The college will create more incubation centers within the campus from 2 at present to 5 in the next 5 years to promote Startup culture in the college. The college will also invest up to 10% in the equity of college startups.
            </li>
            <li>
              As the course curriculum is designed by the University which generally lags behind advances in technology, the college will continue to teach new relevant technologies outside the curriculum and devote at least 25% of student’s time outside the prescribed curriculum.
            </li>
            <li>
              Focus in the next few years will be to increase industry partnerships and industry alignment so that students are industry-ready by the time they complete the course. This will include industry certifications and courses, Project-based learning, internships, participation in Hackathons, etc. Students will be provided with the opportunity to work in the industry in the 7th and 8th semester ( on the lines of Practice School at BITS)
            </li>
            <li>
              Faculty is the biggest strength of this college. There will be more focus on FDP’s, Research papers and patents by faculty, faculty visits to universities in India and abroad for joint research and projects. the college will substantially finance these activities. Academic leave will be granted to faculty pursuing Ph.D. when required so that most faculty complete their Ph.D. in the next 5 years.
            </li>
          </ol>
        </div>
      </div>
    </div>
    </div>

    <div class="tab-pane" id="Founder">
    <br><br>
    <!-- Founder's Message-->

    <div id="Heading" class="row shadow-lg p-2 mb-4 bg-white rounded">
      <div class="row-body">
        <div id="headingText"class="row-text">
          <h1>Founder's Message</h1>
        </div>
      </div>
    </div>
  
  <div class="space">
    </div>
    <div class="row">
            <div class="col-md-8">
                <div id = "paraRow" class="row-text">
                
                    <p>Greatest reward as founders of Techno India NJR has been steady progress the college has made in establishing itself as one of the finest institutions of learning in Rajasthan . Our next goal will be to establish its presence on national level. We feel proud of the achievements of our college through collective efforts of our faculty and students and they deserve our heartfelt gratitude.
                    </p>
                    <p>Techno India NJR has created an exciting but disciplined student-centric environment of academic excellence reflected in academic results and great placements year after year. Our engineering program links knowledge to practice and skill from the very beginning which makes it easy for students to transition to a successful working professional in later life. In addition to maintaining the high academic standards, most students go through industry certifications and internships to give them real-life feel of technology.
                    </p>

                </div>
            </div>
            <div id = "paraCenter"class="col-md-4">
                <img src="images/founder.jpg" alt="" class="img-responsive" >
                    <p >
                        “Mr. Raj Shekhar Vyas, Mrs. Meera Ranawat”
                    </p>
            </div>
        
    </div>
</div>
    
    <div class="tab-pane" id="Key">
        <br><br>
        <!-- Key People -->

    <div id="Heading" class="row shadow-lg p-2 mb-4 bg-white rounded">
      <div class="row-body">
        <div id="headingText"class="row-text">
          <h1>Key People</h1>
        </div>
      </div>
    </div>
  
  <div class="space">
  </div>

    <div class="row">
        <div id="paraCenter" class="col-md-12">
            <img class="img-responsive" id="KeyPeopleImage" src="images/key-people.jpg" alt="">
    </div>
    </div>
    <div class="space">
    </div>
    <div class="row">
        <div id="pararow" class="row-text">
            <p>
                Techno NJR is led by a group of extremely talented and powerful academic leaders. Besides having requisite professional education from the best institutions in India and abroad, they possess leadership skills and share a common vision and mission with NJR Foundation. Their shared leadership has converted Techno NJR into a unique education destination for students.
            </p>
        </div>
    </div>
    <div class="space">
    </div>
            <div id="Heading" class="row shadow-lg p-2 mb-4 bg-white rounded">
            <div class="row-body">
                <div id="headingText"class="row-text">
                    <h1>Organization Structure</h1>
                </div>
            </div>
            </div>

  <div class="space">
  </div>
  <div class="row">
        <div id ="paraCenter"class="col-md-12">
             <img class="img-responsive" id="KeyPeopleImage" src="images/flowchart.png" alt="">
        </div>
  </div>
</div>

    <div class="tab-pane" id="Course">
        <br><br>
         <!--Image-->

    <div class="row">
        <div  id="paraCenter"class="col-md-12">
            <img class="img-responsive" id="KeyPeopleImage" src="images/CourseOffered.jpg" alt="">
        </div>
    </div>
    <div class="bigSpace">
    </div>

    <!--Heading-->

    <div id="Heading" class="row shadow-lg p-2 mb-4 bg-white rounded">
      <div class="row-body">
        <div id="headingText"class="row-text">
          <h1>Undergraduate Courses</h1>
        </div>
      </div>
    </div>
    

    <!--Table-->
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col-md-9"><h4>B.Tech in<h4></th>
                <th id="paraCenter" scope="col-md-3"><h4>N0. of Seats<h4></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Civil Engineering</th>
                <td id="paraCenter">60</td>
            </tr>
            <tr>
                <th scope="row">Computer Science & Engineering</th>
                <td id="paraCenter">120</td>
            </tr>
            <tr>
                <th scope="row">Electronics & Communication Engineering</th>
                <td id="paraCenter">60</td>
            </tr>
            <tr>
                <th scope="row">Electrical Engineering</th>
                <td id="paraCenter">60</td>
            </tr>
            <tr>
                <th scope="row">Mechanical Engineering</th>
                <td id="paraCenter">60</td>
            </tr>
            <tr>
                <th scope="row">Information Technology</th>
                <td id="paraCenter">60</td>
            </tr>
            <tr>
                <th scope="row">Electrical and Electronics Engineering</th>
                <td id="paraCenter">60</td>
            </tr>
        </tbody>
    </table>
    <div class="space"></div>
    <div class="row">
        <div class="col-md-12">
            <strong>Approved By</strong>
             : AICTE, New Delhi
            <br>
            <strong>Affiliation with</strong>
             : Rajasthan Technical University, Kota
            <br>
            <strong>Admission</strong>
             : 85% seats through JEE and 15% seats through management quota.
            <br>
        </div>
    </div>

    </div>
    <div class="tab-pane" id="Campus">
        <br><br>
        <div class="row">
        <div  id="paraCenter"class="col-md-12">
            <img class="img-responsive" id="KeyPeopleImage" src="images/CampusView.jpg" alt="">
        </div>
    </div>
    <div class="bigSpace">
    </div>

    <!--Location-->

    <div id="Heading" class="row shadow-lg p-2 mb-4 bg-white rounded">
        <div class="row-body">
            <div id="headingText"class="row-text">
                <h1>Location</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div id="paraRow" class="row-text">
                <p>
                Udaipur, the city of tranquil water lakes, is one of the most naturally beautiful city on the planet earth. Udaipur is therefore rightly called the Venice of East.
                Udaipur has also developed into an Education Hub with 5 Universities, 3 Medical Colleges, 4 Dental colleges, 13 Engineering colleges, and many other institutes for Management, Science, Nursing & Pharmacy. Students from Africa, Gujrat, Madhya Pradesh, Bihar, North East, Jammu & Kashmir, and other parts of India come to Udaipur to undertake professional education.
                </p>
            </div>
        </div>
        <div id="paraCenter" class="col-md-4">
            <img src="images/locationUdaipur.jpg" alt="" class="img-responsive" >
        </div>
    </div>

    <div class="space"></div>

    <!--Facilities-->

    <div id="Heading" class="row shadow-lg p-2 mb-4 bg-white rounded">
        <div class="row-body">
            <div id="headingText"class="row-text">
                <h1>Location</h1>
            </div>
        </div>
    </div>
    <div class="space"></div>

    <div class="row">
        <div id="paraRow" class="row-text">
            <p>
                Techno NJR campus is located in a green 10-acre plot situated amongst hills at Bhamashah Industrial area, Kaladwas. There are many colleges in surrounding areas and the area is fast coming up as an education hub of Udaipur. The campus is equipped with all modern facilities required to make student’s stay at campus comfortable.
                Some highlights of facilities at Techno NJR campus:
            </p>
            <ol >
                <li>
                    <strong>Library:</strong>
                     The college library has a vast collection of more than 40,000 books of local and foreign authors, International reference books and journals, access to IEEE and online libraries.
                </li >
                <li id="topSpace">
                    <strong>Computer & Internet:</strong> 
                    Techno NJR has well equipped Computer Labs with 550 nos. HP Computers powered by 20 Mbps Internet connection through Optical Fiber Cable.
                </li>
                <li id="topSpace">
                    <strong>Accommodation:</strong>
                    The campus has a modern Boy’s hostel with single/double seater rooms accommodating 50 students. There is a separate girls hostel located in main Udaipur city.
                </li>
                <li id="topSpace">
                    <strong>Bus Services:</strong>
                    College owns a fleet of 10 buses which cover the entire Udaipur and nearby areas for easy transportation for students.
                </li>
                <li id="topSpace">
                    <strong>Canteen:</strong>
                     A clean hygienic modern canteen operates in the campus which serves breakfast, lunch, and snacks throughout the day.
                </li>
                <li id="topSpace">
                    <strong>Sports:</strong>
                    Campus has 2 main Playgrounds- for Cricket and football. In addition, basketball and volleyball grounds are also available in the campus for students. Indoor games like Table tennis, Chess, carom are also available in the college.
                </li>
                <li id="topSpace">
                    <strong>Gym:</strong> 
                    The fully equipped gymnasium has various equipment that is used for total body workout. Faculty members and students can use the gym.
                </li>
            </ol>
        </div>
    </div>

    </div>
    <div class="tab-pane" id="Accredition">
        <br><br>
        <!-- AICTE Approval Letter -->

    <div id="Heading" class="row shadow-lg p-2 mb-4 bg-white rounded">
      <div class="row-body">
        <div id="headingText"class="row-text">
          <h1>AICTE Approval Letter</h1>
        </div>
      </div>
    </div>
  
  <div class="space">
  </div>
<div class="row">
    <div class="row-text">
        <ul>
            <li id="topSpace">
                AICTE Approval letter A.Y. 2020-2021 
              <a id="linkColor" target="_blank" href ="Accredition-pdf/AICTE-Approval-Letter/AICTE-Extension-of-Approval-Letter-2020-21.pdf" ><strong>Click Here to See</strong></a>
            </li>
             <li id="topSpace">
                AICTE Approval letter A.Y. 2019-2020
              <a id="linkColor" target="_blank" href ="Accredition-pdf/AICTE-Approval-Letter/AICTE-Extension-of-Approval-Letter-2019-20.pdf"><strong>Click Here to See</strong></a>
            </li>
             <li id="topSpace">
               AICTE Approval letter A.Y. 2018-2019
              <a id="linkColor" target="_blank" href ="Accredition-pdf/AICTE-Approval-Letter/AICTE-Extension-of-Approval-Letter-2018-19.pdf"><strong>Click Here to See</strong></a>
            </li>
             <li id="topSpace">
                AICTE Approval letter A.Y. 2017-2018 
              <a id="linkColor" target="_blank" href ="Accredition-pdf/AICTE-Approval-Letter/AICTE-Extension-of-Approval-Letter-2017-18.pdf"><strong>Click Here to See</strong></a>
            </li>
             <li id="topSpace">
                AICTE Approval letter A.Y. 2016-2017 
              <a id="linkColor" target="_blank" href ="Accredition-pdf/AICTE-Approval-Letter/AICTE-Extension-of-Approval-Letter-2016-17.pdf"><strong>Click Here to See</strong></a>
            </li>
             <li id="topSpace">
                AICTE Approval letter A.Y. 2015-2016 
              <a id="linkColor"target="_blank" href ="Accredition-pdf/AICTE-Approval-Letter/AICTE-Extension-of-Approval-Letter-2015-16.pdf"><strong>Click Here to See</strong></a>
            </li>
             <li id="topSpace">
                AICTE Approval letter A.Y. 2014-2015 
              <a id="linkColor"target="_blank" href ="Accredition-pdf/AICTE-Approval-Letter/AICTE-Extension-of-Approval-Letter-2014-15.pdf"><strong>Click Here to See</strong></a>
            </li>
             <li id="topSpace">
                AICTE Approval letter A.Y. 2013-2014 
              <a id="linkColor"target="_blank" href ="Accredition-pdf/AICTE-Approval-Letter/AICTE-Extension-of-Approval-Letter-2013-14.pdf"><strong>Click Here to See</strong></a>
            </li>
             <li id="topSpace">
                AICTE Approval letter A.Y. 2012-2013 
              <a id="linkColor"target="_blank" href ="Accredition-pdf/AICTE-Approval-Letter/AICTE-Extension-of-Approval-Letter-2012-13.pdf"><strong>Click Here to See</strong></a>
            </li>
             <li id="topSpace">
                AICTE Approval letter A.Y. 2011-2012 
              <a id="linkColor"target="_blank" href ="Accredition-pdf/AICTE-Approval-Letter/AICTE-Extension-of-Approval-Letter-2011-12.pdf"><strong>Click Here to See</strong></a>
            </li>
             <li id="topSpace">
                AICTE Approval letter A.Y. 2010-2011 
              <a id="linkColor" target="_blank" href ="Accredition-pdf/AICTE-Approval-Letter/AICTE-Extension-of-Approval-Letter-2010-11.pdf"><strong>Click Here to See</strong></a>
            </li>
             <li id="topSpace">
                AICTE Approval letter A.Y. 2009-2010 
              <a id="linkColor" target="_blank" href ="Accredition-pdf/AICTE-Approval-Letter/AICTE-Extension-of-Approval-Letter-2009-10.pdf"><strong>Click Here to See</strong></a>
            </li>
             <li id="topSpace">
                AICTE Approval letter A.Y. 2008-2009 
              <a id="linkColor" target="_blank" href ="Accredition-pdf/AICTE-Approval-Letter/AICTE-Extension-of-Approval-Letter-2008-09.pdf"><strong>Click Here to See</strong></a>
            </li>
        </ul>
    </div>
</div>

<div class="space"></div>
<!-- AICTE Approval Letter -->

    <div id="Heading" class="row shadow-lg p-2 mb-4 bg-white rounded">
      <div class="row-body">
        <div id="headingText"class="row-text">
          <h2>RAJASTHAN TECHNICAL UNIVERSITY KOTA AFFILIATION LETTER</h2>
        </div>
      </div>
    </div>
  
    <div class="space">
    </div>

    <div class="row">
        <div class="row-text">
            <ul>
                <li id="topSpace">
                    RTU Kota Affiliation Letter 2019-20 to 2021-22
                    <a id="linkColor" target="_blank" href ="Accredition-pdf/Affiliation-Letter/Affiliation-Letter-2019-20-to-2021-22.pdf"><strong>Click Here to See</strong></a>
                </li>
                <li id="topSpace">
                    RTU Kota Affiliation Letter 2018-19
                    <a id="linkColor" target="_blank" href ="Accredition-pdf/Affiliation-Letter/Affiliation-Letter-2018-19.pdf"><strong>Click Here to See</strong></a>
                </li>
                <li id="topSpace">
                    RTU Kota Affiliation Letter 2017-18
                    <a id="linkColor" target="_blank" href ="Accredition-pdf/Affiliation-Letter/Affiliation-Letter-2017-18.pdf"><strong>Click Here to See</strong></a>
                </li>
                <li id="topSpace">
                    RTU Kota Affiliation Letter 2015-16 to 2016-17
                    <a id="linkColor" target="_blank" href ="Accredition-pdf/Affiliation-Letter/Affiliation-Letter-2015-16-and-2016-17.pdf"><strong>Click Here to See</strong></a>
                </li>
                <li id="topSpace">
                    RTU Kota Affiliation Letter 2013-14 to 2014-15
                    <a id="linkColor" target="_blank" href ="Accredition-pdf/Affiliation-Letter/Affiliation-Letter-2013-14-and-2014-15.pdf"><strong>Click Here to See</strong></a>
                </li>
                <li id="topSpace">
                    RTU Kota Affiliation Letter 2012-13
                    <a id="linkColor" target="_blank" href ="Accredition-pdf/Affiliation-Letter/Affiliation-Letter-2012-13.pdf"><strong>Click Here to See</strong></a>
                </li>
                <li id="topSpace">
                    RTU Kota Affiliation Letter 2011-12
                    <a id="linkColor" target="_blank" href ="Accredition-pdf/Affiliation-Letter/Affiliation-Letter-2011-12.pdf"><strong>Click Here to See</strong></a>
                </li>
                <li id="topSpace">
                    RTU Kota Affiliation Letter 2010-11
                    <a id="linkColor" target="_blank" href ="Accredition-pdf/Affiliation-Letter/Affiliation-Letter-2010-11.pdf"><strong>Click Here to See</strong></a>
                </li>
                <li id="topSpace">
                    RTU Kota Affiliation Letter 2009-10
                    <a id="linkColor" target="_blank" href ="Accredition-pdf/Affiliation-Letter/Affiliation-Letter-2009-10.pdf"><strong>Click Here to See</strong></a>
                </li>
                <li id="topSpace">
                    RTU Kota Affiliation Letter 2008-09
                    <a id="linkColor" target="_blank" href ="Accredition-pdf/Affiliation-Letter/Affiliation-Letter-2008-09.pdf"><strong>Click Here to See</strong></a>
                </li>

            </ul>
        </div>
    </div>
    </div>
</div>
    

<div class="space">
</div>

    <!--Accordion Starts-->

<div class="accordion d-md-none d-lg-none" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" id="accordionButton"type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Promoter
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       <!Introduction-->

    <div id="Heading" class="row shadow-lg p-2 mb-4 bg-white rounded">
      <div class="row-body">
        <div id="headingText"class="row-text">
          <h1>Introduction</h1>
        </div>
      </div>
    </div>

    <div class="space">
    </div>
    <div class="row">
      <div class="row-body">
        <div id = "paraRow" class="row-text">
          <p>
          “Education educates a man, but good education creates a man” is the belief of NJR Foundation which established Techno India NJR Institute of Technology in the year 2008.
          </p>
          <p>
            NJR Foundation, a registered trust, was established in the year 2003 in memory of Shri Navdeep Ranawat and Shri Jitendra Ranawat by Mrs. Meera Ranawat and Mr. Raj Shekhar Vyas, an alumnus of BITS, Pilani having more than 25 years of experience with Tata group and as Techno entrepreneur. Nine more highly qualified trustees with vast experience in the field of law, administration, finance research papers writing and business were inducted subsequently.
          </p>
          Techno NJR was set up with a vision of providing international level engineering education to students of Udaipur so that they do not have to travel to Banglore, Pune, Jaipur for good engineering education.
          <p>

          </p>
        </div>
      </div>
    </div>
    <div class="space">
    </div>

<!--Board of Directors-->

    <div id = "Heading" class="row shadow-lg p-2 mb-4 bg-white rounded">
      <div class="row-body">
        <div id="headingText" class="row-text">
          <h1>Board Of Directors</h1>
        </div>
      </div>
    </div>
    <div class="space">
    </div>

    <!Cards Founder Trustees-->

    <div class="container">
      <div id="alignments" class="row">
        <div id = "col" class="col-md-4 shadow-lg p-2 mb-5 bg-dark rounded" >
          <div id="topSpace" class="card text-center mb-3">
            <img  id="cardImg" class="card-image-top" src="images/Meera-Ranawat.jpg" alt="">
            <div id="topSpace">
            </div>
            <div class="card-body">
              <div id="wordWrap" class="card-text">
                <h1>Meera Ranawat</h1>
              </div>
              <div class="space"></div>
              <div id="noWrap"class="card-text">
                <h5>Chairperson</h5>
              </div>

            </div>
          </div>
        </div>
        
        <div id="col" class="col-md-4 shadow-lg p-2 mb-5 bg-dark rounded ">
          <div id="topSpace" class="card text-center mb-3" >
            <img id="cardImg" class="details card-image-top"  src="images/R-S-Vyas.jpg" alt="">
            <div class="space">
            </div>
            <div class="card-body">
              <div id="wordWrap" class="card-text">
                  <h1>R.S.Vyas</h1>
              </div>
              <div class="space"></div>
              <div id="wordWrap" class="card-text">
                <h5>Managing Trustee</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="space">
    </div>

    
<!--Trustees-->

    <div id="Heading" class="row shadow-lg p-2 mb-4 bg-white rounded">
      <div class="row-body">
        <div id="headingText" class="row-text">
          <h1>Trustees</h1>
        </div>
      </div>
    </div>
    <div id="space1">
    </div>
    <div class="container">
      <div class="row">
        <div id="wordWrap" class="col-md-3">
          <ul>
            <li>
              <h5>Arvind Mayaram I.A.S.</h5>
            </li>
            <li>
              <h5>Pramod Patni F.C.A</h5>
            </li>
            <li>
              <h5>Vikram Singh</h5>
            </li>
          </ul>
        </div>
        <div class="col-sm-1"></div>
        <div id="wordWrap" class="col-md-4">
           <ul>
            <li>
              <h5>Justice (Retd.) S.S.Vyas</h5>
            </li>
            <li>
              <h5>Yadvendra Singh I.F.S.</h5>
            </li>
            <li>
              <h5>A. K. Roy</h5>
            </li>
          </ul>
        </div>
        <div id="wordWrap" class="col-md-4">
           <ul>
            <li>
              <h5>Shyamoli Roy</h5>
            </li>
            <li>
              <h5>A. K. Biswas</h5>
            </li>
            <li>
              <h5>Ratna Biswas</h5>
            </li>
          </ul>
        </div>
        
      </div>
    </div>
            
<!--Governing Council-->
  
    <div class="space">
    </div>


    <div id="Heading" class="row shadow-lg p-2 mb-4 bg-white rounded">
      <div class="row-body">
        <div id="headingText wordWrap" class="row-text">
          <h1>Governing Council</h1>
        </div>
      </div>
    </div>
    <div id="space1">
    </div>
    <div class="container">
      <div class="row">
        <div id="wordWrap" class="col-md-3">
          <ul>
            <li>
              <h5>Mr. R.S. Vyas</h5>
            </li>
            <li>
              <h5>Prof. N.N. Sharma</h5>
            </li>
            <li>
              <h5>Prof. Sunil Rai</h5>
            </li>
          </ul>
        </div>
        <div class="col-md-1"></div>
        <div id="wordWrap" class="col-md-3">
           <ul>
            <li>
              <h5>Prof. Shrihari Prakash Honward</h5>
            </li>
            <li>
              <h5>Mr. Lalit Yagnik</h5>
            </li>
            <li>
              <h5>Prof. Pankaj Kumar Porwal</h5>
            </li>
          </ul>
        </div>
        <div class="col-md-1"></div>
        <div id="wordWrap" class="col-md-4">
           <ul>
            <li>
              <h5>Prof. Prasun Chakrabarti</h5>
            </li>
            <li>
              <h5>Prof. Pradeep Chhawchharia</h5>
            </li>
            <li>
              <h5>Prof. V.K. Gorana – RTU Nominee
              </h5>
            </li>
          </ul>
        </div>
      </div>
    </div>
      </div>
    </div>
  </div>
  <!--1. accordion End of Promotor-->
  <br>
 <!--2. Accordion of Vision And Mission-->
 <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" id="accordionButton" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
       Vision & Mision
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
          <!--Vision-->

    <div id="Heading" class="row shadow-lg p-2 mb-4 bg-white rounded">
      <div class="row-body">
        <div id="headingText"class="row-text">
          <h1>Vision</h1>
        </div>
      </div>
    </div>
  
  <div class="space">
    </div>
    <div class="row">
      <div class="row-body">
        <div id = "paraRow" class="row-text">
          <p>
          To be a premier Engineering institution on the lines of great private institutions like BITS, Pilani to make a difference in the lives of students, faculty and society at large.
          </p>
          <p>
            As course Curriculum is designed by the University which generally lags behind advances in technology, thecollege will continue to teach new relevant technologies outside the curriculum and devote at least 25% of students time outside prescribed curriculum.
          </p>
          <p> Focus in next few years: Efforts will be made to increase industry partnerships and industry alignment so that students are industry ready by the time they complete the course. This will include industry certifications and courses, Project based learning, internships , participation in Hackathons etc. Students will be provided with the opportunity to work in the industry in 7th and 8th semester ( on the lines of Practice School at BITS).
          Faculty is the biggest strength of this institute. There will be more focus on FDP’s , Research papers and patents by faculty , faculty visits to universities in India and abroad for joint research and projects. college will substantially finance these activities. Academic leave will be granted to faculty pursuing PhD when required so that most faculty complete their PhD in next 5 years.
         </p>
        </div>
      </div>
    </div>
    <div class="space">
    </div>

     <div id = "Heading" class="row shadow-lg p-2 mb-4 bg-white rounded">
      <div class="row-body">
        <div id="headingText" class="row-text">
          <h1>Mission</h1>
        </div>
      </div>
    </div>
    <div class="space">
    </div>
    <div class="row">
      <div class="row-body">
        <div id = "paraRow" class="row-text">
          <p>
          To understand the needs of the industry and transform students into well trained fully employable engineering graduates with rigorous academic knowledge and industry required skill sets. All trustees of NJR Foundation and Management of educational Institutes promoted by NJR shall abide by the following core values :
          </p>
          <ul>
            <li>
              To run professionally managed educational institutes.
            </li>
            <li>
              To pursue excellence in teaching & research.
            </li>
            <li>
              To follow best practices and provide transparency in the governance of institutes promoted by NJR.

            </li>
            <li>
              To follow a fair and just admission process so as to provide access to good education for all sections of society.
            </li>
            <li>
              To create world-class infrastructure in the Institutions promoted by the Foundation.
            </li>
            <li>
              To provide free education to the disadvantaged sections of society. 
            </li>
         
          </ul>
          <p>
            Techno India NJR has been founded by 2 Founder Trustees – one a housewife who lost her only child and husband and another a BITS Pilani graduate. The institute therefore will continue to emphasize Philanthropic activities in memory of departed souls and implement Best practices of eminent Institutes like BITS.
          </p>
          <p>
            In addition to 5% seats allocated by the Institute under the Tuition Fees Waiver Scheme( TFWS), Institute will continue to increase its allocation for Fees concessions (under various heads up to 100% fees waiver) from the present level of around 10% of the revenue (between 40-50 lakh per annum) to around 25% of revenue in next 10 years so that bright students from needy families get a chance to undertake engineering education.
          </p>
          <p>
            Institute has been investing 80% of its surplus (Income minus expenditure) in upgradation of its infrastructure for implementing new technologies and will continue to do so in future. The institute will create more incubation centers within the campus from 2 at present to 5 in next 5 years to promote Startup culture in the institute. The institute will also invest upto 10% in the equity of the institute Start-ups
          </p>
        </div>
      </div>
    </div>
    <div class="space">
    </div>

    <!--Strategic Vision-->

     <div id = "Heading" class="row shadow-lg p-2 mb-4 bg-white rounded">
      <div class="row-body">
        <div id="headingText" class="row-text">
          <h1>Strategic Vision</h1>
        </div>
      </div>
    </div>
    <div class="space">
    </div>
    <div class="row">
      <div class ="row-body">
        <div id="paraRow" class="row-text">
          <p>
            Techno India NJR has been founded by 2 Founder Trustees – one a housewife who lost her only child and husband and another a BITS Pilani graduate. The college therefore will continue to emphasize Philanthropic activities in memory of departed souls and implement Best practices of eminent Institutes like BITS.
          </p>
          <ol>
            <li>
              In addition to 5% seats allocated by the Institute under the Tuition Fees Waiver Scheme( TFWS), the Institute will continue to increase its allocation for Fees concessions under various heads up to 100% fees waiver from the present level of around 10% of the revenue ( between 40-50 lakh per annum) to around 25% of revenue in next 10 years so that bright students from needy families get a chance to undertake engineering education.
            </li>
            <li>
              Institute has been investing 80% of its surplus ( Income minus expenditure) in the up-gradation of its infrastructure for implementing new technologies and will continue to do so in the future. The college will create more incubation centers within the campus from 2 at present to 5 in the next 5 years to promote Startup culture in the college. The college will also invest up to 10% in the equity of college startups.
            </li>
            <li>
              As the course curriculum is designed by the University which generally lags behind advances in technology, the college will continue to teach new relevant technologies outside the curriculum and devote at least 25% of student’s time outside the prescribed curriculum.
            </li>
            <li>
              Focus in the next few years will be to increase industry partnerships and industry alignment so that students are industry-ready by the time they complete the course. This will include industry certifications and courses, Project-based learning, internships, participation in Hackathons, etc. Students will be provided with the opportunity to work in the industry in the 7th and 8th semester ( on the lines of Practice School at BITS)
            </li>
            <li>
              Faculty is the biggest strength of this college. There will be more focus on FDP’s, Research papers and patents by faculty, faculty visits to universities in India and abroad for joint research and projects. the college will substantially finance these activities. Academic leave will be granted to faculty pursuing Ph.D. when required so that most faculty complete their Ph.D. in the next 5 years.
            </li>
          </ol>
        </div>
      </div>
      </div>
    </div>
  </div>
  <!--2. Accordion Vision And Mission Ends-->
  <br> 
  <!--Accordion Founder's Message-->
   <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" id="accordionButton" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
       Founder's Message
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        
    <!-- Founder's Message-->

    <div id="Heading" class="row shadow-lg p-2 mb-4 bg-white rounded">
      <div class="row-body">
        <div id="headingText"class="row-text">
          <h1>Founder's Message</h1>
        </div>
      </div>
    </div>
  
  <div class="space">
    </div>
    <div class="row">
            <div class="col-md-8">
                <div id = "paraRow" class="row-text">
                
                    <p>Greatest reward as founders of Techno India NJR has been steady progress the college has made in establishing itself as one of the finest institutions of learning in Rajasthan . Our next goal will be to establish its presence on national level. We feel proud of the achievements of our college through collective efforts of our faculty and students and they deserve our heartfelt gratitude.
                    </p>
                    <p>Techno India NJR has created an exciting but disciplined student-centric environment of academic excellence reflected in academic results and great placements year after year. Our engineering program links knowledge to practice and skill from the very beginning which makes it easy for students to transition to a successful working professional in later life. In addition to maintaining the high academic standards, most students go through industry certifications and internships to give them real-life feel of technology.
                    </p>

                </div>
            </div>
            <div id = "paraCenter"class="col-md-4">
                <img src="images/founder.jpg" alt="" class="img-responsive" >
                    <p >
                        “Mr. Raj Shekhar Vyas, Mrs. Meera Ranawat”
                    </p>
            </div>
        
    </div>
      </div>
    </div>
  </div>
  <!--3. Accordion Founder's Message Ends-->
  <br>
  <!--4. Accordion KeyPeople Message-->
   <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" id="accordionButton" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
       Key People
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <!-- Key People -->

    <div id="Heading" class="row shadow-lg p-2 mb-4 bg-white rounded">
      <div class="row-body">
        <div id="headingText"class="row-text">
          <h1>Key People</h1>
        </div>
      </div>
    </div>
  
  <div class="space">
  </div>

    <div class="row">
        <div id="paraCenter" class="col-md-12">
            <img class="img-responsive" id="KeyPeopleImage" src="images/key-people.jpg" alt="">
    </div>
    </div>
    <div class="space">
    </div>
    <div class="row">
        <div id="pararow" class="row-text">
            <p>
                Techno NJR is led by a group of extremely talented and powerful academic leaders. Besides having requisite professional education from the best institutions in India and abroad, they possess leadership skills and share a common vision and mission with NJR Foundation. Their shared leadership has converted Techno NJR into a unique education destination for students.
            </p>
        </div>
    </div>
    <div class="space">
    </div>
            <div id="Heading" class="row shadow-lg p-2 mb-4 bg-white rounded">
            <div class="row-body">
                <div id="headingText"class="row-text">
                    <h1>Organization Structure</h1>
                </div>
            </div>
            </div>

  <div class="space">
  </div>
  <div class="row">
        <div id ="paraCenter"class="col-md-12">
             <img class="img-responsive" id="KeyPeopleImage" src="images/flowchart.png" alt="">
        </div>
  </div>

      </div>
    </div>
  </div>
  <!--4. Accordion Key People Ends-->
  <br>
  <!--5 Accordion Course Offered Message-->
   <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" id="accordionButton" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapsefive">
       Course Offered
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
         <!--Image-->

    <div class="row">
        <div  id="paraCenter"class="col-md-12">
            <img class="img-responsive" id="KeyPeopleImage" src="images/CourseOffered.jpg" alt="">
        </div>
    </div>
    <div class="bigSpace">
    </div>

    <!--Heading-->

    <div id="Heading" class="row shadow-lg p-2 mb-4 bg-white rounded">
      <div class="row-body">
        <div id="headingText"class="row-text">
          <h1>Undergraduate Courses</h1>
        </div>
      </div>
    </div>
    

    <!--Table-->
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col-md-9"><h4>B.Tech in<h4></th>
                <th id="paraCenter" scope="col-md-3"><h4>N0. of Seats<h4></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Civil Engineering</th>
                <td id="paraCenter">60</td>
            </tr>
            <tr>
                <th scope="row">Computer Science & Engineering</th>
                <td id="paraCenter">120</td>
            </tr>
            <tr>
                <th scope="row">Electronics & Communication Engineering</th>
                <td id="paraCenter">60</td>
            </tr>
            <tr>
                <th scope="row">Electrical Engineering</th>
                <td id="paraCenter">60</td>
            </tr>
            <tr>
                <th scope="row">Mechanical Engineering</th>
                <td id="paraCenter">60</td>
            </tr>
            <tr>
                <th scope="row">Information Technology</th>
                <td id="paraCenter">60</td>
            </tr>
            <tr>
                <th scope="row">Electrical and Electronics Engineering</th>
                <td id="paraCenter">60</td>
            </tr>
        </tbody>
    </table>
    <div class="space"></div>
    <div class="row">
        <div class="col-md-12">
            <strong>Approved By</strong>
             : AICTE, New Delhi
            <br>
            <strong>Affiliation with</strong>
             : Rajasthan Technical University, Kota
            <br>
            <strong>Admission</strong>
             : 85% seats through JEE and 15% seats through management quota.
            <br>
        </div>
    </div>

      </div>
    </div>
  </div>
  <!--5. Accordion Course Offered Ends-->
  <br>
  <!--6 Accordion Campus At Glance Message-->
   <div class="accordion-item">
    <h2 class="accordion-header" id="headingSix">
      <button class="accordion-button collapsed" id="accordionButton" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
       Campus At Glance
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="row">
        <div  id="paraCenter"class="col-md-12">
            <img class="img-responsive" id="KeyPeopleImage" src="images/CampusView.jpg" alt="">
        </div>
    </div>
    <div class="bigSpace">
    </div>

    <!--Location-->

    <div id="Heading" class="row shadow-lg p-2 mb-4 bg-white rounded">
        <div class="row-body">
            <div id="headingText"class="row-text">
                <h1>Location</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div id="paraRow" class="row-text">
                <p>
                Udaipur, the city of tranquil water lakes, is one of the most naturally beautiful city on the planet earth. Udaipur is therefore rightly called the Venice of East.
                Udaipur has also developed into an Education Hub with 5 Universities, 3 Medical Colleges, 4 Dental colleges, 13 Engineering colleges, and many other institutes for Management, Science, Nursing & Pharmacy. Students from Africa, Gujrat, Madhya Pradesh, Bihar, North East, Jammu & Kashmir, and other parts of India come to Udaipur to undertake professional education.
                </p>
            </div>
        </div>
        <div id="paraCenter" class="col-md-4">
            <img src="images/locationUdaipur.jpg" alt="" class="img-responsive" >
        </div>
    </div>

    <div class="space"></div>

    <!--Facilities-->

    <div id="Heading" class="row shadow-lg p-2 mb-4 bg-white rounded">
        <div class="row-body">
            <div id="headingText"class="row-text">
                <h1>Location</h1>
            </div>
        </div>
    </div>
    <div class="space"></div>

    <div class="row">
        <div id="paraRow" class="row-text">
            <p>
                Techno NJR campus is located in a green 10-acre plot situated amongst hills at Bhamashah Industrial area, Kaladwas. There are many colleges in surrounding areas and the area is fast coming up as an education hub of Udaipur. The campus is equipped with all modern facilities required to make student’s stay at campus comfortable.
                Some highlights of facilities at Techno NJR campus:
            </p>
            <ol >
                <li>
                    <strong>Library:</strong>
                     The college library has a vast collection of more than 40,000 books of local and foreign authors, International reference books and journals, access to IEEE and online libraries.
                </li >
                <li id="topSpace">
                    <strong>Computer & Internet:</strong> 
                    Techno NJR has well equipped Computer Labs with 550 nos. HP Computers powered by 20 Mbps Internet connection through Optical Fiber Cable.
                </li>
                <li id="topSpace">
                    <strong>Accommodation:</strong>
                    The campus has a modern Boy’s hostel with single/double seater rooms accommodating 50 students. There is a separate girls hostel located in main Udaipur city.
                </li>
                <li id="topSpace">
                    <strong>Bus Services:</strong>
                    College owns a fleet of 10 buses which cover the entire Udaipur and nearby areas for easy transportation for students.
                </li>
                <li id="topSpace">
                    <strong>Canteen:</strong>
                     A clean hygienic modern canteen operates in the campus which serves breakfast, lunch, and snacks throughout the day.
                </li>
                <li id="topSpace">
                    <strong>Sports:</strong>
                    Campus has 2 main Playgrounds- for Cricket and football. In addition, basketball and volleyball grounds are also available in the campus for students. Indoor games like Table tennis, Chess, carom are also available in the college.
                </li>
                <li id="topSpace">
                    <strong>Gym:</strong> 
                    The fully equipped gymnasium has various equipment that is used for total body workout. Faculty members and students can use the gym.
                </li>
            </ol>
        </div>
    </div>

      </div>
    </div>
  </div>
  <!--6. Accordion CampusAt Glance Ends-->
  <br>
  <!--6. Accordion Accridition Ends-->
   <div class="accordion-item">
    <h2 class="accordion-header" id="headingSeven">
      <button class="accordion-button collapsed" id="accordionButton" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
        Accridition
      </button>
    </h2>
    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <!-- AICTE Approval Letter -->

    <div id="Heading" class="row shadow-lg p-2 mb-4 bg-white rounded">
      <div class="row-body">
        <div id="headingText"class="row-text">
          <h1>AICTE Approval Letter</h1>
        </div>
      </div>
    </div>
  
  <div class="space">
  </div>
<div class="row">
    <div class="row-text">
        <ul>
            <li id="topSpace">
                AICTE Approval letter A.Y. 2020-2021 
              <a id="linkColor" target="_blank" href ="Accredition-pdf/AICTE-Approval-Letter/AICTE-Extension-of-Approval-Letter-2020-21.pdf" ><strong>Click Here to See</strong></a>
            </li>
             <li id="topSpace">
                AICTE Approval letter A.Y. 2019-2020
              <a id="linkColor" target="_blank" href ="Accredition-pdf/AICTE-Approval-Letter/AICTE-Extension-of-Approval-Letter-2019-20.pdf"><strong>Click Here to See</strong></a>
            </li>
             <li id="topSpace">
               AICTE Approval letter A.Y. 2018-2019
              <a id="linkColor" target="_blank" href ="Accredition-pdf/AICTE-Approval-Letter/AICTE-Extension-of-Approval-Letter-2018-19.pdf"><strong>Click Here to See</strong></a>
            </li>
             <li id="topSpace">
                AICTE Approval letter A.Y. 2017-2018 
              <a id="linkColor" target="_blank" href ="Accredition-pdf/AICTE-Approval-Letter/AICTE-Extension-of-Approval-Letter-2017-18.pdf"><strong>Click Here to See</strong></a>
            </li>
             <li id="topSpace">
                AICTE Approval letter A.Y. 2016-2017 
              <a id="linkColor" target="_blank" href ="Accredition-pdf/AICTE-Approval-Letter/AICTE-Extension-of-Approval-Letter-2016-17.pdf"><strong>Click Here to See</strong></a>
            </li>
             <li id="topSpace">
                AICTE Approval letter A.Y. 2015-2016 
              <a id="linkColor"target="_blank" href ="Accredition-pdf/AICTE-Approval-Letter/AICTE-Extension-of-Approval-Letter-2015-16.pdf"><strong>Click Here to See</strong></a>
            </li>
             <li id="topSpace">
                AICTE Approval letter A.Y. 2014-2015 
              <a id="linkColor"target="_blank" href ="Accredition-pdf/AICTE-Approval-Letter/AICTE-Extension-of-Approval-Letter-2014-15.pdf"><strong>Click Here to See</strong></a>
            </li>
             <li id="topSpace">
                AICTE Approval letter A.Y. 2013-2014 
              <a id="linkColor"target="_blank" href ="Accredition-pdf/AICTE-Approval-Letter/AICTE-Extension-of-Approval-Letter-2013-14.pdf"><strong>Click Here to See</strong></a>
            </li>
             <li id="topSpace">
                AICTE Approval letter A.Y. 2012-2013 
              <a id="linkColor"target="_blank" href ="Accredition-pdf/AICTE-Approval-Letter/AICTE-Extension-of-Approval-Letter-2012-13.pdf"><strong>Click Here to See</strong></a>
            </li>
             <li id="topSpace">
                AICTE Approval letter A.Y. 2011-2012 
              <a id="linkColor"target="_blank" href ="Accredition-pdf/AICTE-Approval-Letter/AICTE-Extension-of-Approval-Letter-2011-12.pdf"><strong>Click Here to See</strong></a>
            </li>
             <li id="topSpace">
                AICTE Approval letter A.Y. 2010-2011 
              <a id="linkColor" target="_blank" href ="Accredition-pdf/AICTE-Approval-Letter/AICTE-Extension-of-Approval-Letter-2010-11.pdf"><strong>Click Here to See</strong></a>
            </li>
             <li id="topSpace">
                AICTE Approval letter A.Y. 2009-2010 
              <a id="linkColor" target="_blank" href ="Accredition-pdf/AICTE-Approval-Letter/AICTE-Extension-of-Approval-Letter-2009-10.pdf"><strong>Click Here to See</strong></a>
            </li>
             <li id="topSpace">
                AICTE Approval letter A.Y. 2008-2009 
              <a id="linkColor" target="_blank" href ="Accredition-pdf/AICTE-Approval-Letter/AICTE-Extension-of-Approval-Letter-2008-09.pdf"><strong>Click Here to See</strong></a>
            </li>
        </ul>
    </div>
</div>

<div class="space"></div>
<!-- AICTE Approval Letter -->

    <div id="Heading" class="row shadow-lg p-2 mb-4 bg-white rounded">
      <div class="row-body">
        <div id="headingText"class="row-text">
          <h2>RAJASTHAN TECHNICAL UNIVERSITY KOTA AFFILIATION LETTER</h2>
        </div>
      </div>
    </div>
  
    <div class="space">
    </div>

    <div class="row">
        <div class="row-text">
            <ul>
                <li id="topSpace">
                    RTU Kota Affiliation Letter 2019-20 to 2021-22
                    <a id="linkColor" target="_blank" href ="Accredition-pdf/Affiliation-Letter/Affiliation-Letter-2019-20-to-2021-22.pdf"><strong>Click Here to See</strong></a>
                </li>
                <li id="topSpace">
                    RTU Kota Affiliation Letter 2018-19
                    <a id="linkColor" target="_blank" href ="Accredition-pdf/Affiliation-Letter/Affiliation-Letter-2018-19.pdf"><strong>Click Here to See</strong></a>
                </li>
                <li id="topSpace">
                    RTU Kota Affiliation Letter 2017-18
                    <a id="linkColor" target="_blank" href ="Accredition-pdf/Affiliation-Letter/Affiliation-Letter-2017-18.pdf"><strong>Click Here to See</strong></a>
                </li>
                <li id="topSpace">
                    RTU Kota Affiliation Letter 2015-16 to 2016-17
                    <a id="linkColor" target="_blank" href ="Accredition-pdf/Affiliation-Letter/Affiliation-Letter-2015-16-and-2016-17.pdf"><strong>Click Here to See</strong></a>
                </li>
                <li id="topSpace">
                    RTU Kota Affiliation Letter 2013-14 to 2014-15
                    <a id="linkColor" target="_blank" href ="Accredition-pdf/Affiliation-Letter/Affiliation-Letter-2013-14-and-2014-15.pdf"><strong>Click Here to See</strong></a>
                </li>
                <li id="topSpace">
                    RTU Kota Affiliation Letter 2012-13
                    <a id="linkColor" target="_blank" href ="Accredition-pdf/Affiliation-Letter/Affiliation-Letter-2012-13.pdf"><strong>Click Here to See</strong></a>
                </li>
                <li id="topSpace">
                    RTU Kota Affiliation Letter 2011-12
                    <a id="linkColor" target="_blank" href ="Accredition-pdf/Affiliation-Letter/Affiliation-Letter-2011-12.pdf"><strong>Click Here to See</strong></a>
                </li>
                <li id="topSpace">
                    RTU Kota Affiliation Letter 2010-11
                    <a id="linkColor" target="_blank" href ="Accredition-pdf/Affiliation-Letter/Affiliation-Letter-2010-11.pdf"><strong>Click Here to See</strong></a>
                </li>
                <li id="topSpace">
                    RTU Kota Affiliation Letter 2009-10
                    <a id="linkColor" target="_blank" href ="Accredition-pdf/Affiliation-Letter/Affiliation-Letter-2009-10.pdf"><strong>Click Here to See</strong></a>
                </li>
                <li id="topSpace">
                    RTU Kota Affiliation Letter 2008-09
                    <a id="linkColor" target="_blank" href ="Accredition-pdf/Affiliation-Letter/Affiliation-Letter-2008-09.pdf"><strong>Click Here to See</strong></a>
                </li>

            </ul>
        </div>
    </div>
      </div>
    </div>
  </div>

 <!--7. Accordion Accridition Ends-->
</div>
</div>



<div class="bigSpace"></div>
</div>

<?php include_once('includes/footer.php') ?>