<?php include 'header.php';?>
<br> <br> <br> <br> <br>
<section class="probootstrap-section probootstrap-bg-white container" data-section="contact">
   <div class="container">
      <div class="row">
         <div class="col-md-5 text-center probootstrap-animate">
            <div class="probootstrap-heading dark">
               <h1 class="primary-heading">Contact Us</h1>
            </div>
            <p>Voluptatibus quaerat laboriosam fugit non Ut consequatur animi est molestiae enim a voluptate totam natus modi debitis dicta impedit voluptatum quod sapiente illo saepe explicabo quisquam perferendis labore et illum suscipit</p>
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