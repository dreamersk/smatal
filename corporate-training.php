<?php 
$page = "corporate_training";
$title = "Corporate training";
include 'header.php';
?>


    <section class="empower_component first_sec">
        <div class="container">
            <div class="banner_form">
                <div class="bnr_title">
                    <h1>Empower your employees to upskill with our corporate training solution</h1>
                </div>
                <div class="form">
                    <form id="trainingForm" onsubmit="return validateEmail()">
                        <input type="text" id="firstName" name="firstName" placeholder="First Name" required>
                        <span id="nameError" class="error"></span>

                        <input type="text" id="lastName" name="lastName" placeholder="Last Name" required>
                        <span id="nameError" class="error"></span><br><br>
                        
                        <input type="email" id="email" name="email" placeholder="Work Mail" required function(isValidEmail)>
                        <span id="emailError" class="error"></span>
                        
                        <input type="text" id="companyName" name="companyName" placeholder="Company Name" required>
                        <span id="companyNameError" class="error"></span><br><br>

                        <input type="number" id="training_ppl" name="training_ppl" placeholder="Number of people to train" required>
                        <span id="trainingError" class="error"></span><br><br>

                        <input type="text" id="job_title" name="job_title" placeholder="Job Title" required>
                        <span id="jobError" class="error"></span><br><br>

                        <textarea id="message" name="message" rows="4" cols="50" placeholder="What are your organization needs?" required></textarea>
                        <span id="messageError" class="error"></span><br><br>
                        
                        <button type="submit" class="pri_btn" id="submitBtn" value="Submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="corporate_training sect_top">
        <div class="container">
            <div class="corporate_cnt">
                <h2 class="title wow fadeInUp text-center" data-wow-delay=".3s">Corporate Training in Chennai: Elevate Your Team's Skills!</h2>
                <p class="content wow fadeInUp" data-wow-delay=".5s">Welcome to Smatal's Corporate Training Program!</p>
                <p class="content wow fadeInUp" data-wow-delay=".10s">Are you ready to elevate your team's skills and drive your company's success to new heights? Look no further than Smatal's Corporate Training Program. As a seasoned professional in the corporate world, I understand the importance of staying ahead of the curve in today's competitive business landscape. That's why I'm thrilled to introduce our tailored training solutions designed to meet the unique needs of your organization.</p>
                <p class="content wow fadeInUp" data-wow-delay=".12s"> At Smatal, we believe that investing in your team's development is key to achieving your business objectives. Our Corporate Training Program offers customizable courses in a variety of disciplines, including IT, business management, leadership, and more. Whether you're looking to upskill your employees in technology, enhance their soft skills, or foster a culture of innovation, we've got you covered.</p>
                <p class="content wow fadeInUp" data-wow-delay=".14s"> What sets Smatal apart is our personalized approach to corporate training. We work closely with you to understand your organization's goals, challenges, and culture, allowing us to create customized training solutions that resonate with your team. Our experienced trainers bring industry expertise and real-world insights to the table, ensuring that your employees receive the highest quality training possible.</p>
                <p class="content wow fadeInUp" data-wow-delay=".16s">  With Smatal's Corporate Training Program, you can empower your team to reach their full potential, drive innovation, and achieve lasting success. Get in touch with us today to discuss how we can tailor our training solutions to meet your organization's unique needs. Let's embark on this journey together and unlock the full potential of your team!</p>
            </div>
        </div>
    </section>
    <section class="corporate_course sect_top">
        <div class="container">
            <h3 class="title wow fadeInUp text-center" data-wow-delay=".3s">Our Corporate Courses</h3>
            <div class="course_cards">
                <a href="gd.php" class="course_box wow fadeInLeft" data-wow-delay=".3s"><h4 class="course_title">Graphic Design</h4></a>
                <a href="ui_ux.php" class="course_box wow fadeInUp" data-wow-delay=".3s"><h4 class="course_title">UI/UX</h4></a>
                <a href="video_editing.php" class="course_box wow fadeInRight" data-wow-delay=".3s"><h4 class="course_title">Video Editing</h4></a>
                <a href="cyber_security.php" class="course_box wow fadeInLeft" data-wow-delay=".6s"><h4 class="course_title">Cyber Security</h4></a>
                <a href="data_analytics.php" class="course_box wow fadeInUp" data-wow-delay=".6s"><h4 class="course_title">Data Analytics</h4></a>
                <a href="fullstack.php" class="course_box wow fadeInRight" data-wow-delay=".6s"><h4 class="course_title">Full Stack</h4></a>
                <a href="404_pag.php" class="course_box wow fadeInLeft" data-wow-delay=".9s"><h4 class="course_title">C, C++</h4></a>
                <a href="java.php" class="course_box wow fadeInUp" data-wow-delay=".9s"><h4 class="course_title">Java</h4></a>
                <a href="python.php" class="course_box wow fadeInRight" data-wow-delay=".9s"><h4 class="course_title">Python</h4></a>
                <a href="tally.php" class="course_box wow fadeInLeft" data-wow-delay=".12s"><h4 class="course_title">Tally/ Accounting</h4></a>
                <a href="aws.php" class="course_box wow fadeInUp" data-wow-delay=".12s"><h4 class="course_title">AWS</h4></a>
                <a href="ms_office.php" class="course_box wow fadeInRight" data-wow-delay=".12s"><h4 class="course_title">MS Office</h4></a>
            </div>
        </div>
    </section>
    <section class="request_callback sect_top">
        <div class="container">
            <div class="callback_cnt">
                <p class="content wow fadeInUp" data-wow-delay=".3s">With Smatal's Corporate Training Program, you can empower your team to reach their full potential, drive innovation, and achieve lasting success. Get in touch with us today to discuss how we can tailor our training solutions to meet your organization's unique needs. Let's embark on this journey together and unlock the full potential of your team!</p>
                <a href="contact_us.php" class="scnd_btn wow fadeInUp" data-wow-delay=".5s">Request Call back</a>
            </div>
        </div>
    </section>
    <section class="spread sect_top">
        <div class="container-fluid">
            <div class="row custom">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="fly-man">
                        <img class="fly_man_img wow fadeInLeft" data-wow-delay="800ms" src="images/fly_man.png" alt="fly-man" title="fly-man">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="knowledge-cnt">
                        <h5 class="title">Spread your Knowledge</h5>
                        <p class="content wow fadeInRight text-center" data-wow-delay="200ms">Connect with us today for expert guidance and support in your journey towards success. Reach out now to unlock endless possibilities!</p>
                        <div class="right-align-btn">
                            <a href="contact_us.php" class="scnd_btn">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php';?>