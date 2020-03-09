<?php include 'header.php';?>
<br> <br> <br> <br> <br>
<section class="probootstrap-section probootstrap-bg-white container" data-section="contact">
   <div class="container">
      <div class="row">
         <div class="col-md-5 text-center probootstrap-animate">
            <div class="probootstrap-heading dark">
               <h1 class="primary-heading">Contact Us</h1>
            </div>
            <p style="text-align: justify;">
                <b>Office Address </b> - Mulay Arcade, 3rd Floor, 1537 Sadashiv Peth, Tilak Road, Pune - 411030. <br>
                Contact - 020 2445 6490

                 <br> <br>

                <b>Site Address </b> - CTS. No 721, Plot no. 54 + 55 + 56, Gujraat Colony, Near Ajamtha Avenue, Next to Mayur Colony, Kothrud, Pune 411038 <br> 
                  Contact - +91-91300 41371
                   <br> <br>
            </p>
         </div>
         <div class="col-md-6 col-md-push-1 probootstrap-animate">
            <div id="googleMap" style="width:100%;height:400px;"></div>
         </div>
      </div>
   </div>
</section>
<script>
   function myMap() {
   var mapProp= {
     center:new google.maps.LatLng(51.508742,-0.120850),
     zoom:5,
   };
   var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
   }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
<?php include 'footer.php';?>