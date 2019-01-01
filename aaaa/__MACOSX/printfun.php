<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<script type="text/javascript">
	function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})
</script>
<body>
<table border="1" cellpadding="3" id="printTable">
	<tbody><tr>
		<th>First Name</th>
		<th>Last Name</th>		
		<th>Points</th>
	</tr>
	<tr>
		<td>Jill</td>
		<td>Smith</td>		
		<td>50</td>
	</tr>
	<tr>
		<td>Eve</td>
		<td>Jackson</td>		
		<td>94</td>
	</tr>
	<tr>
		<td>John</td>
		<td>Doe</td>		
		<td>80</td>
	</tr>
	<tr>
		<td>Adam</td>
		<td>Johnson</td>		
		<td>67</td>
	</tr>
</tbody></table>
<br />
<br />
<table border="1" cellpadding="3" id="notPrintTable">
	<tbody><tr>
		<th>First Name</th>
		<th>Last Name</th>		
		<th>Points</th>
	</tr>
	<tr>
		<td>test</td>
		<td>test</td>		
		<td>000</td>
	</tr>
</tbody></table>
<br />
<br />

<button>Print me</button>

</body>
</html>