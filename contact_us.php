<!DOCTYPE html>
<html lang="en">
<head>
    
<?php
	  include 'head.php';
    ?>

</head>
<body class="saf_page solution_page">
  

    <!-- header start --> 
    <?php
	  include 'header.php';
    ?>
    <!-- header end -->
<section class="contact_us_section">
    <div class="container">
        <div class="inner-container2">
            <div class="inner_contact_us">
                <div class="Left_contact">
                    <h3>Partner with us in building a <span class="gradient-font">zero-carbon energy future</span></h3>
                    <p>Whether you’re a feedstock supplier, an offtaker, or an industry partner,
                         Essar Future Energy is here to collaborate on sustainable energy solutions. 
                         Get in touch with us today!</p>
                    <div class="mail_text"><img src="images/mailto.png" /><a href="mailto:hello@essarfutureenergy.com">hello@essarfutureenergy.com</a></div>
                </div>
                <div class="Right_contact">
                    <div class="inner-container-space">
                      <form onsubmit="return validateForm()" novalidate>
                          <div class="row">
                              <div class="form_div"><input type="text" name="firstName" placeholder="First Name" required></div>
                              <div class="form_div"><input type="text" name="lastName" placeholder="Last Name" required></div>
                          </div>
                          <div class="row">
                          <div class="form_div"><input type="email" name="email" placeholder="E-mail" required></div>
                          <div class="form_div"><input type="tel" name="phone" placeholder="Phone" required pattern="[0-9+()\- ]+"></div>
                          </div>
                          <div class="form_div"><textarea name="interest" placeholder="What are you interested in?" required></textarea></div>
                          <button type="submit" class="common_btn"> <span class="view-txt"> Send message</span><span class="arrow"><img src="images/Arrow-3.png"></span><span class="arrow2"><img src="images/Arrow-3.png"></span></button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


  <!-- footer start --> 
  <?php
	  include 'footer.php';
    ?>
    <!-- footer end -->


    <!-- foot start --> 
  <?php
	  include 'foot.php';
    ?>
    <!-- foot end -->

<script type="text/javascript">

function validateForm() {
      const form = document.querySelector("form");
      const inputs = form.querySelectorAll("input, textarea");
      let valid = true;

      inputs.forEach(input => {
        if (!input.checkValidity()) {
          input.style.borderColor = "red";
          valid = false;
        } else {
          input.style.borderColor = "#fff";
        }
      });

      return valid;
    }

  //setInterval(autoplaySections, 4000);


// Initialize a new Lenis instance for smooth scrolling
const lenis = new Lenis();

// Synchronize Lenis scrolling with GSAP's ScrollTrigger plugin
lenis.on('scroll', ScrollTrigger.update);

// Add Lenis's requestAnimationFrame (raf) method to GSAP's ticker
// This ensures Lenis's smooth scroll animation updates on each GSAP tick
gsap.ticker.add((time) => {
  lenis.raf(time * 1000); // Convert time from seconds to milliseconds
});

// Disable lag smoothing in GSAP to prevent any delay in scroll animations
gsap.ticker.lagSmoothing(0);





</script>

</body>
</html>
