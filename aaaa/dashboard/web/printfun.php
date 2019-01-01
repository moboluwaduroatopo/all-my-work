<?php
session_start();
$con=mysqli_connect('localhost','root','','shop_db');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0'>
   <script type='text/javascript' src='jquery/jquery-3.1.1.js'></script>
<script type='text/javascript' src='jquery/popper.min.js'></script>
<link rel='stylesheet' type='text/css' href='bootstrap-4.0.0-dist/css/bootstrap.min.css'>
<link rel='stylesheet' type='text/css' href='bootstrap-4.0.0-dist/css/bootstrap.css'>
<script type='text/javascript' src='bootstrap-4.0.0-dist/js/bootstrap.min.js'></script>
<link rel='stylesheet' type='text/css' href='font-awesome-4.7.0/css/font-awesome.css'>
<style type='text/css'>
	#invoice-POS{
  box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);
  padding:2mm;
  margin: 0 auto;
  width: 154mm;
  background: #FFF;
  
  
::selection {background: #f31544; color: #FFF;}
::moz-selection {background: #f31544; color: #FFF;}
h1{
  font-size: 1.5em;
  color: #222;
}
h2{font-size: .9em;}
h3{
  font-size: 1.2em;
  font-weight: 300;
  line-height: 2em;
}
p{
  font-size: .7em;
  color: #666;
  line-height: 1.2em;
}
 
#top, #mid,#bot{ /* Targets all id with 'col-' */
  border-bottom: 1px solid #EEE;
}

#top{min-height: 100px;}
#mid{min-height: 80px;} 
#bot{ min-height: 50px;}

#top .logo{
  //float: left;
	height: 60px;
	width: 60px;
	background: url(http://michaeltruong.ca/images/logo1.png) no-repeat;
	background-size: 60px 60px;
}
.clientlogo{
  float: left;
	height: 60px;
	width: 60px;
	background: url(http://michaeltruong.ca/images/client.jpg) no-repeat;
	background-size: 60px 60px;
  border-radius: 50px;
}
.info{
  display: block;
  //float:left;
  margin-left: 0;
}
.title{
  float: right;
}
.title p{text-align: right;} 
table{
  width: 100%;
  border-collapse: collapse;
}
td{
  //padding: 5px 0 5px 15px;
  //border: 1px solid #EEE
}
.tabletitle{
  //padding: 5px;
  font-size: .5em;
  background: #EEE;
}
.service{border-bottom: 1px solid #EEE;}
.item{width: 24mm;}
.itemtext{font-size: .5em;}

#legalcopy{
  margin-top: 5mm;
}

  
  
}
</style>
<body>
<div id="printTable">
  <div id='invoice-POS'>
    
    <center id='top'>
      <div class='logo'></div>
      <div class='info'> 
       <h2>Supermarket</h2>
        <h3>Cash Receipt</h3>
      </div><!--End Info-->
    </center><!--End InvoiceTop-->
    
    <div id='mid'>
      <div class='info'>
         <?php 
$con=mysqli_connect('localhost','root','','shop_db');
//$_SESSION['id'] = $_GET['id'];
$_SESSION['id'];
// $sale= mysqli_query($con, "select * from sale_tb join admin using (admin_id)   where sales_id = 3 ");
$sale = mysqli_query($con, "select * from admin join sale_tb using(admin_id)  where sales_id = $_SESSION[id]"); 

//$invoice = mysqli_query($con, "select * from invoice_tb join product_tb using (product_id) join sale_tb using (sales_id) join admin using (admin_id)  where sales_id = $_SESSION[id] ");
while($s=mysqli_fetch_array($sale)){
    echo"
        <p> 
         Date : ".$s['dates']."</br>
         Customer_name   : ".$s['customer_name']."</br>
         Receipt No  : ".$s['sales_id']."</br>
        </p>
     ";
   } ?>
      <!--   <p> 
            Address : street city, state 0000</br>
            Email   : JohnDoe@gmail.com</br>
            Phone   : 555-555-5555</br>
        </p> -->
      </div>
    </div><!--End Invoice Mid-->
    
    <div id='bot'>

					<div id='table'>
						<table>
							
<?php 
				   
$con=mysqli_connect('localhost','root','','shop_db');
//$_SESSION['id'] = $_GET['id'];
$_SESSION['id'];
// $sale= mysqli_query($con, "select * from sale_tb join admin using (admin_id)   where sales_id = 3 ");
$sals = mysqli_query($con, "select * from invoice_tb join product_tb using(product_id) join sale_tb using(sales_id)where sales_id = $_SESSION[id]"); 

//$invoice = mysqli_query($con, "select * from invoice_tb join product_tb using (product_id) join sale_tb using (sales_id) join admin using (admin_id)  where sales_id = $_SESSION[id] ");
while($s=mysqli_fetch_array($sals)){
							echo"<tr class='service' >
								
								<td class='tableitem'><p class='itemtext'><span>".$s['sale_qty']." </span>".$s['product_name']."</p></td>
								<td class='tableitem'><p class='itemtext'></p></td>
								<td class='tableitem'><p class='itemtext' >".$s['price']."</p></td>
								<td class='tableitem'><p class='itemtext'>".$s['sale_total']."</p></td>
							</tr>";}
?>
							<!-- <tr class='service'>
								<td class='tableitem'><p class='itemtext'><span>2</span>Communication</p></td>
								<td class='tableitem'><p class='itemtext'></p></td>
								<td class='tableitem'><p class='itemtext'>$375.00</p></td>
								<td class='tableitem'><p class='itemtext'>$225.00</p></td>
							</tr>
 -->
							

							

							<tr class='tabletitle'>
								<td></td>
								<td class='Rate'><h2>Total: </h2></td>
								  <?php 

$con=mysqli_connect('localhost','root','','shop_db');
//$_SESSION['id'] = $_GET['id'];
$_SESSION['id'];
$sales = mysqli_query($con, "select * from admin join sale_tb using(admin_id)  where sales_id = $_SESSION[id]"); 
while($s=mysqli_fetch_array($sales)){		
     echo" 
     <td class='payment'><h2> ".$s['total']." </h2></td>
      ";}
					?>
</tr>

						</table>
					</div><!--End Table-->
 <div id='mid'>
      <div class='info'>
      			    <?php 

$con=mysqli_connect('localhost','root','','shop_db');
//$_SESSION['id'] = $_GET['id'];
$_SESSION['id'];
// $sale= mysqli_query($con, "select * from sale_tb join admin using (admin_id)   where sales_id = 3 ");
$sales = mysqli_query($con, "select * from admin join sale_tb using(admin_id)  where sales_id = $_SESSION[id]"); 

//$invoice = mysqli_query($con, "select * from invoice_tb join product_tb using (product_id) join sale_tb using (sales_id) join admin using (admin_id)  where sales_id = $_SESSION[id] ");
while($s=mysqli_fetch_array($sales)){		
     echo" 
        <p> 
           Total:  ".$s['total']." </br>
           Tendering   : ".$s['tende']."</br>
           Change   : ".$s['chang']."</br>
           Issued by:  ".$s['surname']." ".$s['middlename']."
        </p>
      ";}
					?>
     <!--    <p> 
            Address : street city, state 0000</br>
            Email   : JohnDoe@gmail.com</br>
            Phone   : 555-555-5555</br>
        </p> -->
      </div>
    </div>
					<div id='legalcopy'>
						<p class='legal'><strong>Thank you so much!</strong> My Appreciation to all my tutors, my supervisors and my boss at SQI 
					</div>

				</div><!--End InvoiceBot-->
 </div> </div><!--End Invoice-->
<button >Print Receipt</button>
<input type='button' name='' value='button' onclick='printsales()'>
</body>
<script type='text/javascript'>
	 function printsales(){
        window.print();
    };
	function printData()
{
   var divToPrint=document.getElementById('printTable');
   newWin= window.open('');
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}
$('button').on('click',function(){
	alert();
//printData();
})
</script>
</html>