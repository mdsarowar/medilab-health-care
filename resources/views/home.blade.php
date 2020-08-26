@extends('index')
@section('conte')
     <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to Medilab health care</h1>
      <!-- <h2>We are team of talanted designers making websites with Bootstrap</h2> -->
      <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Why Choose Medilab health care?</h3>
              <p>
                Medilab health care will help you in many difficult ways in case of your most difficult and difficult moments. With this help you can easily get many types of health care by contacting the doctor directly. 
              </p>
              <!-- <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div> -->
            </div>
          </div>
          <!-- <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Corporis voluptates sit</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Ullamco laboris ladore pan</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Labore consequatur</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div> -->
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch">
            <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> -->
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>About</h3>
            <p>Through Medileb Health Care, the user can easily avail many benefits. Through this, you will get the information of the doctor according to the type of doctor you need according to the symptoms of your disease.
              With this you can easily do different types of tests at home.  There is a blood bank for saving blood in case of emergency. There are also ambulances of different hospitals with necessary information.</p>

            <!-- <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Dine Pad</a></h4>
              <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
            </div> -->

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-doctor-alt"></i>
              <span data-toggle="counter-up">85</span>
              <p>Doctors</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-patient-bed"></i>
              <span data-toggle="counter-up">18</span>
              <p>Departments</p>
            </div>
          </div>
         

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-laboratory"></i>
              <span data-toggle="counter-up">8</span>
              <p>Research Labs</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-award"></i>
              <span data-toggle="counter-up">150</span>
              <p>Awards</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="samplecollect" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Sample collect info</h2>
          <p>please give your information for sample collect</p>
        </div>
            <!-- class="php-email-form"  -->
        <form action="{{route('submitsam')}}" method="post" class="php-email-form" >  
        @csrf
          <div class="form-row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Name">
              
            </div>
            <div class="col-md-4 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email">
              
            </div>
            <div class="col-md-4 form-group">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone No">
              
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4 form-group">
              <input type="text" name="age" class="form-control " id="age" placeholder="Age">
              
            </div>

            <div class="col-md-4 form-group">
              <input type="text" name="address" class="form-control " id="address" placeholder="Address">
             
            </div>
            <div class="col-md-4 form-group">
              <input type="text" name="house" class="form-control " id="house" placeholder="House No">
              
            </div>
          </div>


          <div class="form-row">
            <div class="col-md-4 form-group">
              <input type="file" name="file" class="form-control " id="file" placeholder="select your file">
              
            </div>

            <div class="col-md-4 form-group">
              <select name="type" id="type" class="form-control">
                <option value="">Select test type</option>
                <option value="blood">blood</option>
                <option value="X-ray">X-ray</option>
                <option value="urine">urine</option>
              </select>
             
            </div>
          </div>

          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="write details"></textarea>
            
          </div>
          <div class="mb-3">
            <!-- <div class="loading">Loading</div>
            <div class="error-message"></div> -->
            <div class="sent-message">Thank you for your valuable infomation . please check your email for connect with us </div>
          </div>
          <div class="text-center">
          <button type="submit">Submit</button>
          <!-- <input type="submit" value='submit'> -->
          </div>
          
        </form>

      </div>
    </section>
    
    <!--Start Ambulance -->
    <section id="ambulance" class="appointment section-bg">
      <div class="container">
        
        <div class="section-title">
          <h2>Ambulance</h2>
          <p>Select your address and call Ambulance .</p>
        </div>

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col-md-4 form-group">
              <select name="doctor" id="doctor" class="form-control">
                <option value="">Select Division</option>
                <option value="#">Dhaka  </option>
                <option value="#"> Chittagong  </option>
                <option value="#"> Rajshahi  </option>
                <option value="#"> Khulna </option>
                <option value="#"> Barisal  </option>
                <option value="#"> Sylhet </option>
                <option value="#"> Rangpur  </option>
                <option value="#"> Mymensingh </option>
               
              </select>
              <div class="validate"></div>
            </div>

            <div class="col-md-4 form-group">
              <select name="doctor" id="doctor" class="form-control">
                <option value="">Select District</option>
                <option value="Doctor 1">dhaka</option>
                <option value="Doctor 2">dhaka</option>
                <option value="Doctor 3">dhaka</option>
              </select>
              <div class="validate"></div>
            </div>
          </div>
      
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Thank you for your valuable infomation . please check your email for connect with us </div>
          </div>
          <div class="text-center"><button type="submit">AMBULANCE</button></div>
        </form>

      </div>
    </section>
    <!-- End Ambulance -->
    <!-- ======= need help Section ======= -->
    <section id="onlineform" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Write Your Problem</h2>
          <p>please give your information and write your problem . a doctor try to give  any tips for your problem within 24 hours</p>
        </div>
        <!-- role="form" class="php-email-form" -->
        <form action="{{URL('problems')}}" method="post" class="php-email-form" >
         @csrf
          <div class="form-row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"  ">
              
            </div>
            <div class="col-md-4 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" ">
              
            </div>
            <div class="col-md-4 form-group">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" ">
             
            </div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="write here Your problem"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            
            <div class="sent-message">Your problem has been sent successfully.we give feedback within 24 hours. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Submit Your Problem</button></div>
        </form>

      </div>
    </section>

     <!-- End Appointment Section -->

    <!-- ======= Doctors Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Make an Appointment</h2>
          <p>you can easily appointment a doctor. so please select your problem department and write  doctor name .</p>
        </div>

        <form action="{{URL('showdoctor')}}" method="post" role="form" class="php-email-form">
        @csrf
          
          <div class="form-row">
            <div class="col-md-4 form-group">
              <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <select name="department" id="department" class="form-control">
                <option value="">Select Department</option>
                <option value="cardiology">cardiology</option>
                <option value="neurology">neurology </option>
                <option value="orthopedic">orthopedic</option>
                <option value="opthalmologist">opthalmologist</option>
                <option value="ent">ent specialist</option>
                <option value="dermatologist">dermatologist</option>
                <option value="medicine">medicine</option>
                <option value="dentist">dentist</option>
              </select>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
            <input type="search" placeholder="search doctor" name ="doctor" >
              <div class="validate"></div>
            </div>
          </div>

          
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Make an Appointment</button></div>
        </form>

      </div>
    </section>
    <!-- ============End Doctors Section ====================-->

   

    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container">

        <div class="section-title">
          <h2>Departments</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">
          <div class="col-lg-33">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item"  >
                <a class="nav-link active show" data-toggle="tab" href="#tab-1"><img src="assets/img/d-icon1.png" alt=""></a>
                <h5>cardiology</h5>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-2"><img src="assets/img/d-icon5.png" alt=""></a>
                <h5>Neurology</h5>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-3"><img src="assets/img/hepato.jpg" alt=""></a>
                <h5>Hepatology</h5>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-4"><img src="assets/img/pediatric.png" alt=""></a>
                <h5>Pediatrics</h5>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-5"><img src="assets/img/d-icon4.png" alt=""></a>
                <h5>Eye Care</h5>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Cardiology</h3>
                    <p class="font-italic">Cardiology (from Greek kardiā, "heart"  "study") is a branch of medicine that deals with the disorders of the heart as well as some parts of the circulatory system. The field includes medical diagnosis and treatment of congenital heart defects, coronary artery disease, heart failure, valvular heart disease and electrophysiology. Physicians who specialize in this field of medicine are called cardiologists, a specialty of internal medicine. Pediatric cardiologists are pediatricians who specialize in cardiology. Physicians who specialize in cardiac surgery are called cardiothoracic surgeons or cardiac surgeons, a specialty of general surgery.</p>
                   
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Neurology</h3>
                    <p class="font-italic">Neurology (from Greek: νεῦρον (neûron), "string, nerve" and the suffix -logia, "study of") is a branch of medicine dealing with disorders of the nervous system. Neurology deals with the diagnosis and treatment of all categories of conditions and disease involving the central and peripheral nervous systems (and their subdivisions, the autonomic and somatic nervous systems), including their coverings, blood vessels, and all effector tissue, such as muscle. Neurological practice relies heavily on the field of neuroscience, the scientific study of the nervous system.
                      A neurologist is a physician specializing in neurology and trained to investigate or diagnose and treat neurological disorders. Neurologists may also be involved in clinical research, clinical trials, and basic or translational research. While neurology is a non-surgical specialty, its corresponding surgical specialty is neurosurgery.</p>
                   
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Hepatology</h3>
                    <p class="font-italic">Hepatology is the branch of medicine that incorporates the study of liver, gallbladder, biliary tree, and pancreas as well as the management of their disorders. Although traditionally considered a sub-specialty of gastroenterology, rapid expansion has led in some countries to doctors specializing solely on this area, who are called hepatologists.</p>

                    <p>Diseases and complications related to viral hepatitis and alcohol are the main reason for seeking specialist advice. More than two billion people have been infected with hepatitis B virus at some point in their life, and approximately 350 million have become persistent carriers. Up to 80% of liver cancers can be attributed to either hepatitis B or hepatitis C virus. In terms of mortality, the former is second only to smoking among known agents causing cancer. With more widespread implementation of vaccination and strict screening before blood transfusion, lower infection rates are expected in the future.[citation needed] In many countries however, overall alcohol consumption is increasing, and consequently the number of people with cirrhosis and other related complications is commensurately increasing.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/hepatology.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Pediatrics</h3>
                    <p class="font-italic">Pediatrics (also spelled paediatrics or pædiatrics) is the branch of medicine that involves the medical care of infants, children, and adolescents. The American Academy of Pediatrics recommends people be under pediatric care through the age of 21(though usually only minors are required to be under pediatric care). In the United Kingdom, pediatrics covers patients until age 18.A medical doctor who specializes in this area is known as a pediatrician, or paediatrician. </p>
                    
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Eye Care</h3>
                    <p class="font-italic">Eyes are organs of the visual system. They provide animals with vision, the ability to receive and process visual detail, as well as enabling several photo response functions that are independent of vision. Eyes detect light and convert it into electro-chemical impulses in neurons. In higher organisms, the eye is a complex optical system which collects light from the surrounding environment, regulates its intensity through a diaphragm, focuses it through an adjustable assembly of lenses to form an image, converts this image into a set of electrical signals, and transmits these signals to the brain through complex neural pathways that connect the eye via the optic nerve to the visual cortex and other areas of the brain. Eyes with resolving power have come in ten fundamentally different forms, and 96% of animal species possess a complex optical system. Image-resolving eyes are present in molluscs, chordates and arthropods</p>
                   
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        

      </div>
    </section>
    
    <!-- End Departments Section -->
    <!-- ======= Testimonials Section ======= -->
    <!-- <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
        </div>

      </div>
    </section> -->
    <!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>Gallery</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>.</p>
        </div>
      </div>

      <div>
        <iframe style="border:2px; width: 100%; height: 350px;" src="https://www.google.com.bd/maps/place/%E0%A6%A7%E0%A6%BE%E0%A6%A8%E0%A6%AE%E0%A6%A8%E0%A7%8D%E0%A6%A1%E0%A6%BF+%E0%A7%A9%E0%A7%A8+%E0%A6%B8%E0%A7%9C%E0%A6%95+%E0%A6%AC%E0%A7%8D%E0%A6%B0%E0%A6%BF%E0%A6%9C,+%E0%A6%A7%E0%A6%BE%E0%A6%A8%E0%A6%AE%E0%A6%A8%E0%A7%8D%E0%A6%A1%E0%A6%BF+%E0%A6%AC%E0%A7%8D%E0%A6%B0%E0%A6%BF%E0%A6%9C,+%E0%A6%A2%E0%A6%BE%E0%A6%95%E0%A6%BE+1209/@23.7509784,90.3713933,17z/data=!3m1!4b1!4m5!3m4!1s0x3755bf4d6018f643:0x603d2d083289b4a3!8m2!3d23.7509735!4d90.373582" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Dhanmondi 32,Dhaka ,Bangladesh</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+880</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


@endsection