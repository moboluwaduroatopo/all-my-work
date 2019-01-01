<?php
session_start();

include_once("../fpdf/fpdf.php");

if ($_GET["order_date"] && $_GET["invoice_no"]) {
	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->setFont("Arial","B",16);
	$pdf->Cell(190,10,"Inventory System",0,1,"C");
	$pdf->setFont("Arial",null,12);

	$pdf->Cell(50,10,"Date",0,0);
	$pdf->Cell(50,10,": ".$_GET["order_date"],0,1);
	$pdf->Cell(50,10,"Customer Name",0,0);
	$pdf->Cell(50,10,": ".$_GET["cust_name"],0,1);

	$pdf->Cell(50,10,"",0,1);


	$pdf->Cell(10,10,"#",1,0,"C");
	$pdf->Cell(70,10,"Product Name",1,0,"C");
	$pdf->Cell(30,10,"Quantity",1,0,"C");
	$pdf->Cell(40,10,"Price",1,0,"C");
	$pdf->Cell(40,10,"Total (Rs)",1,1,"C");

	for ($i=0; $i < count($_GET["pid"]) ; $i++) { 
		$pdf->Cell(10,10, ($i+1) ,1,0,"C");
		$pdf->Cell(70,10, $_GET["pro_name"][$i],1,0,"C");
		$pdf->Cell(30,10, $_GET["qty"][$i],1,0,"C");
		$pdf->Cell(40,10, $_GET["price"][$i],1,0,"C");
		$pdf->Cell(40,10, ($_GET["qty"][$i] * $_GET["price"][$i]) ,1,1,"C");
	}

	$pdf->Cell(50,10,"",0,1);

	$pdf->Cell(50,10,"Sub Total",0,0);
	$pdf->Cell(50,10,": ".$_GET["sub_total"],0,1);
	$pdf->Cell(50,10,"Gst Tax",0,0);
	$pdf->Cell(50,10,": ".$_GET["gst"],0,1);
	$pdf->Cell(50,10,"Discount",0,0);
	$pdf->Cell(50,10,": ".$_GET["discount"],0,1);
	$pdf->Cell(50,10,"Net Total",0,0);
	$pdf->Cell(50,10,": ".$_GET["net_total"],0,1);
	$pdf->Cell(50,10,"Paid",0,0);
	$pdf->Cell(50,10,": ".$_GET["paid"],0,1);
	$pdf->Cell(50,10,"Due Amount",0,0);
	$pdf->Cell(50,10,": ".$_GET["due"],0,1);
	$pdf->Cell(50,10,"Payment Type",0,0);
	$pdf->Cell(50,10,": ".$_GET["payment_type"],0,1);


	$pdf->Cell(180,10,"Signature",0,0,"R");

	$pdf->Output("../PDF_INVOICE/PDF_INVOICE_".$_GET["invoice_no"].".pdf","F");
// SELECT SUM(`total`) FROM `sale_tb` 
	$pdf->Output();	

}product_id  | quantity_sold_last_3_mouth    
 1          | 50    
 2          | 156    
 3          | 78
I have 3 mysql tables looks like this :
product(product_id, name)
order(order_id, order_date)
order_detail(order_detail_id, product_id, order_id, quantity)
select 
    od.product_id
  , sum(od.quantity) as quantity_sold_last_3_month
from order o
  inner join order_detail od
    on o.order_id = od.order_id
where 
  o.order_date >= last_day(now()) + interval 1 day - interval 3 month #first of month, e.g. Jan 1 from today March 25
  #od.order_date >= now()-interval 3 month #exactly 3 months back, e.g. Dec 25 from today
group by od.product_id

?>