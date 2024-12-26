<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
	* {
        	overflow: hidden;
        }
        body {
        	text-align: center;
        }
        h1, h2, h3, h4 {
        	color: black;
			padding:0px;
			margin:0px;
        }

	</style>
    <title>
        Prescription
    </title>
 <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
    </script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js">
    </script>
    
</head>

 <body>
		<h3><i>Republic of the Philippines</i></h3>
		<h1>MARINDUQUE PROVINCIAL HOSPITAL</h1>
	 <h3><i>Boac, Marinduque</i></h3>
	 <h3><i>(042) 332-2490</i></h3>
	 
	 <br/>
	  <button id="save">Save and Print</button>
	<h3 style="font-size:20px;margin:10px;">Patient: <?php echo $_GET['pname']; ?></h3>

		<label style="font-size:20px;margin:10px;">Age: <?php echo $_GET['page']; ?></label>
		<label style="font-size:20px;margin:10px;">Sex: <?php echo $_GET['pgender']; ?></label>
		<label style="font-size:20px;margin:10px;">Date: <?php echo date("Y-m-d"); ?></label>

	<br>
    <label style="font-size:20px;">Address: <?php echo $_GET['paddr']; ?></label>

	<hr>
   <h1 style="text-align:left;font-size:70px">Rx</h1>
   <div style="height:300px;">
		<canvas id="canvas" style="border:gray 1px solid;"></canvas>
	
	</div>
	<div style="width:300px;float:right;position:relative;">
		<h2 style="text-align:left;"> <?php echo $_GET['fullname']; ?></h2>
		<h3 style="text-align:left;">LICENSE NO: <?php echo $_GET['license']; ?></h3>
		<h3 style="text-align:left;">PTR.: <?php echo $_GET['ptr']; ?></h3>
	</div>
    <script src="index.js"></script>
	<script type="text/javascript">
 
const gCanvas = document.querySelector('#canvas');
const gCtx = gCanvas.getContext('2d');

function onSave() {
  gCanvas.toBlob((blob) => {
    const timestamp = Date.now().toString();
    const a = document.createElement('a');
    document.body.append(a);
    a.download = `export-${timestamp}.png`;
    a.href = URL.createObjectURL(blob);
    a.click();
    a.remove();
  });
}


document.querySelector('#save').addEventListener('click', onSave);

    </script>
</body>


</html>