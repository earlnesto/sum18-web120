<!--(index.php) The following is helpful starter code for your index.php page. Make this page perfect FIRST and then reuse it to make all your subsequent pages listed in your navigation list -->

<?php include "includes/header.php"?>
        
<!-- START LEFT COL -->

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 <img src="images/desktop.jpg" class="desktop" alt="" />
 <img src="images/phone.jpg" class="phone" alt="" />
 <p>Hello, my name is Robert Byers. I'm originally from Greenville, South Carolina. I moved to Seattle in 2012, after completing my enlistment in the US Navy -- NAS Whidbey Island in Oak Harbor, WA.</p>
 <p>I am currently following the programming track of the IT program. I have <b><i>zero</i> to very little</b> experience in the IT industry but love the classes I've taken and am currently taking.</p>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Right Column</h3>
 <img src="images/tablet.jpg" class="tablet" alt="" />
 <p>My goal is to live <b><i>my</i> best life</b>...</p>
 <p>...and learn as much as I can along the way while <i>helping</i>, <i>uplifting</i> <b>and</b> <i>encouraging</i> every person I may!</p>
</aside>
<!-- END RIGHT COL -->
 
<!-- START Footer -->
<?php include "includes/footer.php"?>
<!-- END Footer --> 

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
    <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
     </script>
</div>
<!-- END WRAPPER -->

</body>
</html>

<!--(portal.css) The following are helpful starter cascading stylesheet rules for your portal website. Save this into your web120 > css folder and make changes that demonstrate your color, font and layout preferences.

(nav.css) The following styles for your navigation for your WEB120 portal website. They come from the W3Schools execise here, https://www.w3schools.com/howto/howto_js_topnav_responsive.asp  Save this code to your web120 > css folder and make changes to demonstrate your color and font preferences, if desired.

(form.css) The following are helpful starter styles for your contactme.php page where your form reside for your WEB120 portal website. Save it in your web120 > css folder and then make changes to it as desired! -->