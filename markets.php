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
    
    <section class="innovation_bg">
        <div class="container">
            <div class="inner-container2">
                <div class="innovation_hero_bg">
                    <img src="images/market/market_bg.png" />
                </div>
            </div>
        </div>
    </section>

    <section class="market_geo_section ">
    <div class="container-medium">
      <div class="padding-vertical">
        <div class="inner-container2">
            <div class="our-solution-section animate-on-scroll">
              <div class="saf_btn border-btn marBottom20"><h5 class="gradient-font">markets</h5></div>
              <h2 class="hero_title">Accelerating Net-Zero</h2>
              <h2 class="hero_title gradient-font">Across Sectors & Geographies</h2>
              
            </div>
        </div>
      </div>
    </div>
  </section>

    <section class="industries-section" >
        <div class="container">
            <div class="industries_img">
              <div class="inner_industries_container">
                <div class="inner_overflow"><img src="images/market/industries_bg.png" /></div>
              </div>
            </div>
            <div class="inner-container2 animate-on-scroll">
                <h2 class="inner_heading_title">Industries</h2>
                <div class="market_industries_section wool-paralax">
                    <div class="left_industries">
                        <div class="ab-paragraph" >                        
                           <p> At <span class="gradient-font1">Essar Future Energy</span>, we are driving the transition to a low-carbon economy by 
                                <span class="gradient-font">delivering clean, high-performance fuels tailored to key</span> <span class="gradient-font1">industries</span>. Our advanced
                                 biofuels and green molecules help businesses across aviation, transport, shipping,
                                  heavy industry, and power reduce emissions while maintaining efficiency and reliability. 
                                  From Sustainable Aviation Fuel (SAF) for air travel to HVO (Renewable Diesel) for road 
                                  transport and e-Methanol & Green Ammonia for maritime, our solutions enable <span class="gradient-font">seamless 
                                  decarbonization across global supply chains.</span></p>
                                 
                          </div>
                    </div>
                    <div class="right_indutries">
                        <p>We also support industrial manufacturing and power generation with Green Hydrogen and Green 
                            Ammonia, offering sustainable alternatives for energy-intensive operations. As industries 
                            push towards net-zero commitments, our <span class="gradient-font">scalable, future-ready approach</span> ensures that businesses 
                            can adopt cleaner energy without disruption.</p>
                    </div>
                    
                    <div class="clearfix"></div>
                </div>
                <div class="know_more_btn"> <a href="#" class="common_btn"><span class="view-txt">Know more </span><span class="arrow"><img src="images/Arrow-3.png"></span><span class="arrow2"><img src="images/Arrow-3.png"></span></a></div>
            </div>
        </div>
    </section>


    <section class="industries-section geographics_section" >
        <div class="container">
            <div class="industries_img">
              <div class="inner_industries_container inner_geographics">
              <div class="inner_overflow2"><img src="images/market/geographies_bg.png" /></div>
              </div>
            </div>
            <div class="inner-container2 animate-on-scroll">
                <h2 class="inner_heading_title">Geographies</h2>
                <div class="market_industries_section wool-paralax">
                    <div class="left_industries">
                        <div class="ab-paragraph" >                        
                           <p> 
                           <span class="gradient-font1">Essar Future Energy</span> is building a strong international footprint, supplying low-carbon 
                           fuels to some of the world’s most critical energy markets. <span class="gradient-font">Our operations are anchored 
                           in Asia, the UK, and Europe,</span> regions that are at the forefront of the global energy 
                           transition. With India emerging as a key hub for biofuel production and innovation,
                            we are well-positioned to support the growing demand for SAF, HVO, Green Hydrogen, 
                            Green Ammonia, and E-Methanol across multiple geographies. 
                           
                           
                           </p>
                                 
                          </div>
                    </div>
                    <div class="right_indutries">
                        <p>In the UK and Europe, where regulatory mandates and sustainability commitments are driving 
                          the shift toward cleaner fuels, our biofuels and green molecules provide <span class="gradient-font2">viable, scalable 
                          alternatives for industries</span> <span class="gradient-font1">looking to decarbonize.</span> Meanwhile, Asia’s rapid industrialization
                           and increasing energy needs make it a crucial region for deploying next-generation clean fuels.
                            By establishing a <span class="gradient-font2">strong supply chain network</span> <span class="gradient-font1">and global partnerships</span>, we are ensuring that
                             businesses across these markets have seamless access to sustainable energy solutions.</p>
                    </div>
                    
                    <div class="clearfix"></div>
                </div>
                <div class="know_more_btn"> <a href="#" class="common_btn"><span class="view-txt">Know more </span><span class="arrow"><img src="images/Arrow-3.png"></span><span class="arrow2"><img src="images/Arrow-3.png"></span></a></div>
            </div>
        </div>
    </section>



   <!-- Partnership Section -->
   <section class="partnership-section solution_cta_section animate-on-scroll">
    <div class="container">
      <div class="call_to_action_section">
          <div class="inner-container2">
            <div class="Left_cta_section">
              <h2 class="cta_title">Committed to delivering scalable, sustainable, and commercially viable clean energy solutions</h2>
              <p class="os_paragraph">Contact us today to partner us in our journey to power the world’s transition to a net-zero future.</p>
              <div class="partner-btn"><a href="#" class="contact-bg"><span class="con-txt">Contact Us</span> <span class="arrow"><img src="images/Arrow-3.png"></span><span class="arrow2"><img src="images/Arrow-3.png"></span></a></div>
            </div>

            <img src="images/solution/cta_right_img.png" alt="Earth" class="partner-img">
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


window.addEventListener('scroll', () => {
  const hero = document.querySelector('.innovation_hero_bg');
  if (window.scrollY > 100) {
    hero.classList.add('full-width');
  } else {
    hero.classList.remove('full-width');
  }
});


document.addEventListener("DOMContentLoaded", function () {
  const elements = document.querySelectorAll(".animate-on-scroll");

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
        observer.unobserve(entry.target); // only animate once
      }
    });
  }, { threshold: 0.2 });

  elements.forEach((el) => observer.observe(el));
});



gsap.set(".inner_industries_container img", {
  scale: 2.5
});

gsap.to(".inner_industries_container img", {
  scale: 1,
  duration: 10,
  ease: "power2.inOut", // Smooth easing
  scrollTrigger: {
    trigger: ".inner_industries_container",
    start: "top 55%",
    end: "top 85%",
    pin: ".inner_industries_container",
    scrub: 8.5
  }
});



gsap.set(".inner_geographics img", {
  scale: 2.5
});

gsap.to(".inner_geographics img", {
  scale: 1,
  duration: 10,
  ease: "power2.inOut", // Smooth easing
  scrollTrigger: {
    trigger: ".inner_geographics",
    start: "top 55%",
    end: "top 85%",
    pin: ".inner_geographics",
    scrub: 8.5
  }
});



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
