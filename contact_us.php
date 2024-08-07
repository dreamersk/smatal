<?php 
$page = "contact_us";
$title = "Contact us";
include 'header.php';
?>

    <section class="contact first_sec">
        <div class="container">
            <div class="cnt_bnr">
                <div class="pencil_art wow fadeInLeft text-center" data-wow-delay="200ms">
                    <img src="images/fly_man.png" alt="fly-man" title="fly-man">
                </div>
                <div class="cnt_content">
                    <h1 class="title wow fadeInRight text-center" data-wow-delay="200ms">Spread your Knowledge</h1>
                    <p class="content wow fadeInRight text-center" data-wow-delay="200ms">Connect with us today for expert guidance and support in your journey towards success. Reach out now to unlock endless possibilities!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="spread sect_top first_sec mobile_show">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact_form sect_top">
        <div class="container">
        <div class="course_form">
            <form id="contactForm" onsubmit="return validateForm()">
                <input type="text" id="firstName" name="firstName" required="required" placeholder="First Name" required>
                <span id="firstNameError" class="error"></span>

                <input type="text" id="lastName" name="lastName"required="required" placeholder="Last Name" required>
                <span id="lastNameError" class="error"></span><br><br>

                <input type="email" id="email" name="email"required="required" placeholder="Work Mail" required>
                <span id="emailError" class="error"></span>
                
                <input type="tel" maxlength="10" id="mobile"required="required" name="mobile" placeholder="Mobile Number" required>
                <span id="mobileError" class="error"></span><br><br>
                
                <h2 class="title">GENDER</h2>
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label>
                <input type="radio" id="others" name="gender" value="others">
                <label for="others">Others</label><br>

                <h2 class="title">Course</h2>
                <input type="radio" id="Graphic Design" name="Graphic Design" value="Graphic Design">
                <label for="Graphic Design">Graphic Design</label>
                <input type="radio" id="UI/UX Design" name="UI/UX Design" value="UI/UX Design">
                <label for="UI/UX Design">UI/UX Design</label>
                <input type="radio" id="Video Editing" name="Video Editing" value="Video Editing">
                <label for="Video Editing">Video Editing</label>
                <input type="radio" id="Cyber Security" name="Cyber Security" value="Cyber Security">
                <label for="Cyber Security">Cyber Security</label><br>
                
                <input type="radio" id="Data Analytics" name="Data Analytics" value="Data Analytics">
                <label for="Data Analytics">Data Analytics</label>
                <input type="radio" id="Full Stack" name="Full Stack" value="Full Stack">
                <label for="Full Stack">Full Stack</label>
                <input type="radio" id="C, C++" name="C, C++" value="C, C++">
                <label for="C, C++">C, C++</label>
                <input type="radio" id="Java" name="Java" value="Java">
                <label for="Java">Java</label><br>

                <input type="radio" id="Python" name="Python" value="Python">
                <label for="Python">Python</label>
                <input type="radio" id="Tally/Accounting" name="Tally/Accounting" value="Tally/Accounting">
                <label for="Tally/Accounting">Tally/Accounting</label>
                <input type="radio" id="MS Office" name="MS Office" value="MS Office">
                <label for="MS Office">MS Office</label>
                <input type="radio" id="AWS" name="AWS" value="AWS">
                <label for="AWS">AWS</label><br>

                <h2 class="title">Qualification</h2>
                <input type="text" id="qualification" name="qualification" placeholder="Qualification" required>
                <span id="qualificationError" class="error"></span><br>

                <h2 class="title">Preferred Mode</h2>
                <input type="radio" id="online" name="mode" value="online">
                <label for="online">Online</label>
                <input type="radio" id="offline" name="mode" value="offline">
                <label for="offline">Offline</label><br>
                <button type="submit" class="pri_btn" id="submitBtn">Submit</button>
            </form>
        </div>
    </div>
    </section>
    <?php include 'footer.php';?>