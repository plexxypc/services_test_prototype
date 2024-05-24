<!--Banner Start-->
    <footer class="footer-main custom-padding-36-footer">
      <div class="container">
        <div class="row px-xl-4">
          <div class="col-12 col-md-12 divider"></div>
          <!--end of col-->
          <div class="col-12 col-md-3">
            <div class="wiedget-title mb-3">Services</div>
            <ul>
              <li>
                <a href="../qa-services">QA Services</a>
              </li>
              <li>
                <a href="../qa-auditing-services">QA Auditing Services</a>
              </li>
              <li>
                <a href="../qa-consulting-services">QA Consulting Services</a>
              </li>
              <li>
                <a href="../sdet-resourcing-services">SDET Resourcing Services</a>
              </li>
              <li>
                <a href="../casino-game-development">Casino Game Development</a>
              </li>
              <li>
                <a href="../casual-game-development">Casual Game Development</a>
              </li>
              <li>
                <a href="../mobile-game-development">Mobile Game Development</a>
              </li>
              <li>
                <a href="../ios-game-development">iOS Game Development</a>
              </li>
              <li>
                <a href="../nodejs-development">NodeJs Development</a>
              </li>
            </ul>

          </div>
          <div class="col-12 col-md-3">
            <div class="wiedget-title mb-3">Company</div>
            <ul>
              <li>
                <a href="../about-us">About</a>
              </li>
              <li>
                <a href="../process">Process</a>
              </li>
              <li>
                <a href="../testimonials">Testimonials</a>
              </li>
              <li>
                <a href="../contact">Contact</a>
              </li>
              <li>
                <a href="../sitemap">Sitemap</a>
              </li>
               <li>
                <a href="tel:+91-8860912115">Call IN <a href="tel:+91-8860912115">+91-8860912115</a>
                </a>
              </li>
              <!---<li>
                <a href="tel:+91-8860912115">Call USA <a href="tel:+91-8860912115">+91-8860912115</a>
                </a>
              </li> -->
            </ul>
           
          </div>
          <div class="col-12 col-md-3">
            <div class="wiedget-title mb-3">Support</div>
            <ul>
               <li class="mb-2">
                <a href="#">
                  <i class="fa fa-adjust fs-3 me-2" aria-hidden="true"></i>
                  <span>Business IN: <a href="tel:+91-8860912115">+91-8860912115</a>
                  </span>
                </a>
              </li>
              <!--<li class="mb-2">
                <a href="#">
                  <i class="fa fa-adjust fs-3 me-2" aria-hidden="true"></i>
                  <span>Business USA: <a href="tel:+1-3045794220">+1-3045794220</a>
                  </span>
                </a>
              </li>
              <li class="mb-2">
                <a href="#">
                  <i class="fa fa-adjust fs-3 me-2" aria-hidden="true"></i>
                  <span>Careers : <a href="tel:+91-8860912115">+91-8860912115</a>
                  </span>
                </a>
              </li> -->
              <li class="mb-2">
                <a href="#">
                  <i class="fa fa-adjust fs-3 me-2" aria-hidden="true"></i>
                  <span>
                    <a href="mailto:sales@creatiosoft.com">sales@creatiosoft.com</a>
                  </span>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-12 col-md-3">
            <div class="mt-41">
              <div class="wiedget-title mb-3">Connect With Us</div>
              <a href="https://www.facebook.com/creatiosoft" target="_blank" class="btn btn-fab1 btn-primary fg-white">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="https://www.instagram.com/creatiosoft/" target="_blank" class="btn btn-fab1 btn-primary fg-white">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="https://www.linkedin.com/company/creatiosoft/" target="_blank" class="btn btn-fab1 btn-primary fg-white">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="https://twitter.com/creatiosoft" target="_blank" class="btn btn-fab1 btn-primary fg-white">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="https://www.youtube.com/channel/UCQU2yX2FzVcIcb-xNZLb4ng" target="_blank" class="btn btn-fab1 btn-primary fg-white">
                <i class="fa fa-youtube" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div> 
    </footer>
    <!-- Button trigger modal --> 
<style>

    @media only screen and (min-device-width: 320px) and (max-device-width: 480px){
	.watsapp {
    width: 130px;
		right: 10px;
	}

  .watsapp img {
    width: 130px !important;
    height: auto !important;
  }
	
	.clc-tele {
		bottom: 60px !important; 
		
	}
	.clc-wa {
		bottom: 10px !important;
	}
}
</style>
       
		<!-- Button trigger modal -->  
    <?php include('chat.php');?>

    <!-- jQuery JS -->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
     <script   src="../assets/js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap JS -->
  
      <script src="../assets/js/bootstrap-bundle.min.js" async></script>
    <script src="../assets/js/b.js"></script>
    <!-- owl carousel JS -->
    <script src="/assets/js/owl-carousel.min.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script defer src="../assets/js/wow.min.js"></script>


    


<script>
    $(function(){
    var current = location.pathname;
    if(current=='/our-portfolio/'){

    }
    else{
    $('.nav-item a').each(function(){
        var $this = $(this);
        // if the current path is like this link, make it active
        if($this.attr('href').indexOf(current) !== -1){
           $this.addClass('active');
         /*  $(this).closest('.dropdown').siblings().removeClass("active")
            $(this).closest('.dropdown').addClass("active");*/
        }
    })
  }
})
</script>

<script>
  window.intercomSettings = {
    api_base: "https://api-iam.intercom.io",
    app_id: "jz734470"
  };
</script>

<script>
// We pre-filled your app ID in the widget URL: 'https://widget.intercom.io/widget/jz734470'
(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/jz734470';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(document.readyState==='complete'){l();}else if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
</script>
  </body>
</html>