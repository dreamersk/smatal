 <!-- Footer Start -->
 <footer class="footer_sect sect_top">
        <div class="container">
            <div class="footer_intro my_foot_grid">
                <div class="foot_item1">
                    <div class="foot_logo"><a href="#"><img src="images/foot_logo.png" alt=""></a></div>
                    <iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29045.08750171031!2d80.28281984769369!3d13.053076867106316!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526769c29e69f3%3A0x3f87b31ff61f31cc!2sSmatal%20Computer%20Academy!5e0!3m2!1sen!2sin!4v1687937339643!5m2!1sen!2sin"></iframe>
                </div>
                <div class="foot_item2">
                    <h4>Quick Links</h4>
                    <ul class="link">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="corporate-training.php">Corporate Training</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contact_us.php">Contact us</a></li>
                        <li><a href="privacy_policy.php">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="foot_item3">
                    <h4>Our Courses</h4>
                    <ul class="link">
                        <li><a href="gd.php">Graphic Design</a></li>
                        <li><a href="ui_ux.php">UI/UX</a></li>
                        <li><a href="video_editing.php">Video Editing / VFX</a></li>
                        <li><a href="cyber_security.php">Cyber Security</a></li>
                        <li><a href="tally.php">Accounting / Tally</a></li>
                        <li><a href="fullstack.php">Full Stack Development</a></li>
                        <li><a href="python.php">Python</a></li>
                        <li><a href="java.php">C/C++/Java</a></li>
                        <li><a href="data_analytics.php">Data Analytics</a></li>
                    </ul>
                </div>
                <div class="foot_item4">
                    <h4>Contact us</h4>
                    <p>203,Hameedia Complex, <br>2nd Floor, <br>Triplicane High Road, <br>Triplicane, Chennai - 600005.</p>
                    <ul>
                        <li><a href="tel:+91 96499 64912"><i class="fa-solid fa-phone"></i>+91 96499 64912</a> <br><a href="tel:044 3581 2535"><i class="fa-solid fa-tty"></i>044 3581 2535</a></li>
                        <li><a href="mailto:info@smatal.in" target="_blank"><i class="fa-regular fa-envelope"></i>info@smatal.in</a></li>
                        <form action="">
                            <li><input type="email" placeholder="Enter Your Mail" required></li>
                            <li><button class="subs_btn">Subscribe</button></li>
                        </form>
                    </ul>
                </div>

            </div>
        </div>
    </footer>
    <div class="copywrite">
        <p> &copy; 2024 All rights are reserved by Smatal Computer Academy.</p>
        <p>Design & Developed by Siva Digitals</p>
    </div>
    
    <!-- <div class="scroll-container">

        <button class="scroll-to-top" onclick="ScrollToTop()">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chevron-double-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 3.707 2.354 9.354a.5.5 0 1 1-.708-.708l6-6z" />
            <path fill-rule="evenodd" d="M7.646 6.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 7.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
          </svg>
        </button>
      
    </div> -->
    <script src="js/base.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/theia-sticky-sidebar.min.js"></script>
    <script>new WOW().init();</script>
    <script>
        function ScrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
        var btn = $('#button');
    }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize theiaStickySidebar on the .icon_svg element
            $('.icon_svg').theiaStickySidebar({
                additionalMarginTop: 120,
                additionalMarginBottom: 20
            });
        });
    </script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('.nav__link');
    const dropdownSublinks = document.querySelectorAll('.dropdown__sublink');
    const dropdownItems = document.querySelectorAll('.dropdown__item .nav__link');

    // Function to remove 'active' class from all links and dropdown items
    function removeActiveClasses() {
        navLinks.forEach(link => link.classList.remove('active'));
        dropdownSublinks.forEach(sublink => sublink.classList.remove('active'));
        dropdownItems.forEach(item => item.classList.remove('active'));
    }

    // Add event listeners to nav links
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            // If this link is already active, remove the active class
            if (link.classList.contains('active')) {
                link.classList.remove('active');
            } else {
                // Otherwise, remove active class from all links and add to the clicked link
                removeActiveClasses();
                link.classList.add('active');
            }
        });
    });

    // Add event listeners to dropdown sublinks
    dropdownSublinks.forEach(sublink => {
        sublink.addEventListener('click', function(event) {
            event.stopPropagation(); // Prevent event from bubbling up to the parent nav__link

            // If this sublink is already active, remove the active class
            if (sublink.classList.contains('active')) {
                sublink.classList.remove('active');
            } else {
                // Otherwise, remove active class from all links and add to the clicked sublink
                removeActiveClasses();
                sublink.classList.add('active');
                sublink.closest('.dropdown__item').querySelector('.nav__link').classList.add('active');
            }
        });
    });
});

</script>

<script>

    function validateForm() {
        var firstName = document.getElementById("firstName").value;
        var lastName = document.getElementById("lastName").value;
        var email = document.getElementById("email").value;
        var mobile = document.getElementById("mobile").value;
        var gender = document.querySelector('input[name="gender"]:checked');
        var qualification = document.getElementById("qualification").value;
        var mode = document.querySelector('input[name="mode"]:checked');

        var firstNameError = document.getElementById("firstNameError");
        var lastNameError = document.getElementById("lastNameError");
        var emailError = document.getElementById("emailError");
        var mobileError = document.getElementById("mobileError");
        var genderError = document.getElementById("genderError");
        var qualificationError = document.getElementById("qualificationError");
        var modeError = document.getElementById("modeError");

        // Clear previous errors
        firstNameError.innerHTML = "";
        lastNameError.innerHTML = "";
        emailError.innerHTML = "";
        mobileError.innerHTML = "";
        genderError.innerHTML = "";
        qualificationError.innerHTML = "";
        modeError.innerHTML = "";

        // Validate first name
        if (firstName.trim() === "") {
            firstNameError.innerHTML = "First Name is required";
            return false;
        }

        // Validate last name
        if (lastName.trim() === "") {
            lastNameError.innerHTML = "Last Name is required";
            return false;
        }

        // Validate email
        if (email.trim() === "") {
            emailError.innerHTML = "Email is required";
            return false;
        }

        // Validate mobile number
        if (mobile.trim() === "") {
            mobileError.innerHTML = "Mobile Number is required";
            return false;
        }

        // Validate gender
        if (!gender) {
            genderError.innerHTML = "Gender is required";
            return false;
        }

        // Validate qualification
        if (qualification.trim() === "") {
            qualificationError.innerHTML = "Qualification is required";
            return false;
        }

        // Validate mode
        if (!mode) {
            modeError.innerHTML = "Preferred Mode is required";
            return false;
        }

        return true; // Form will be submitted if all validations pass
    }
</script>



</body>
</php>