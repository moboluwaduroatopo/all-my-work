<!-- Footer -->
<footer class="page-footer font-small info-color">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Our Services</h5>

          <ul class="list-unstyled">
            
              <?php
        require("conn.php");
        //$tid= $_GET['tid'];
         $select = mysqli_query($con, "select * from type_tb ");

         while($r=mysqli_fetch_array($select)){
  echo"      <li>    <a  href='#'>".$r['type_name']." </a>
          </li>       
  
    ";
};
      
        ?>
              
           
          
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Office/Home Address</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Office: A.U.D Primary School, Ejigbo Road Iwo</a>
            </li>
            <li><a href="#">Home: Kobaope Area,beside Abimota Grammar School,Iwo,Osun State. </a></li>
            
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contact Us</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">08037425232</a>
            </li>
            <li>
              <a href="#!">  atopooilcompany@gmail.com</a>
            </li>
         <li>
              <a href="#!">Open: 7am</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">


      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:Design by
      POL ,a.k.a motee
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
