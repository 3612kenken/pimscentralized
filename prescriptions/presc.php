<?php
// Include the connection file where PDODatabase is defined
include('../connection.php');
?>
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
			background-color: white;
		}

		h1,
		h2,
		h3,
		h4 {
			color: black;
			padding: 0px;
			margin: 0px;
		}

		#canvas-container {
			position: relative;
			width: 100%;
			height: calc(70vh - 200px);

			overflow: auto;
			/* Enable scrolling */
		}

		#canvas {
			display: block;
			margin: 0 auto;
			border: 1px solid black;
		}

		@media print {
			#canvas-container {
				overflow: hidden !important;
				/* Hide scroll bar during printing */
			}

			#canvas {
				width: auto !important;
				height: auto !important;
				max-width: 100%;
				max-height: 100%;
			}
		}
	</style>
	<title>Prescription</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" type="text/javascript"></script>
	<!-- Add this script before your JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>

</head>

<body>
	<h3><i>Republic of the Philippines</i></h3>
	<h1>MARINDUQUE PROVINCIAL HOSPITAL</h1>
	<h3><i>Boac, Marinduque</i></h3>
	<h3><i>(042) 332-2490</i></h3>

	<br />
	<button id="save">Print</button>
	<button id="savethis" onclick="savePrintAsImage()">Save</button>
	<h3 style="font-size:20px;margin:10px;">Patient: <?php echo $_GET['pname']; ?></h3>

	<label style="font-size:20px;margin:10px;">Age: <?php echo $_GET['page']; ?></label>
	<label style="font-size:20px;margin:10px;">Sex: <?php echo $_GET['pgender']; ?></label>
	<label style="font-size:20px;margin:10px;">Date: <?php echo date("Y-m-d"); ?></label>

	<br>
	<label style="font-size:20px;">Address: <?php echo $_GET['paddr']; ?></label>
	<input type="hidden" id="complaint_id" value="<?php echo $_GET['comp_id']; ?>">
	<input type="hidden" id="id_diagnosis" value="<?php echo $_GET['diagnosis']; ?>">
	<hr>
	<h1 style="text-align:left;font-size:70px">Rx</h1>
	<div id="canvas-container">
		<canvas id="canvas" height="1440"></canvas> <!-- Removed fixed width -->
	</div>
	<div style="width:300px;float:right;position:relative;margin-top:10px;">
		<h2 style="text-align:left;"> <?php echo $_GET['fullname']; ?></h2>
		<h3 style="text-align:left;">LICENSE NO: <?php echo $_GET['license']; ?></h3>
		<h3 style="text-align:left;">PTR.: <?php echo $_GET['ptr']; ?></h3>
	</div>

	<script>
		function UpdateComplaintStatus() {
			const complaint_id = $('#complaint_id').val();
			const new_status = "Checked Up"; // Define the new status
			const diagnosis = $('#id_diagnosis').val();

			// Update the status via AJAX
			$.post('../functions/functions.php', { action: 'update_complaint_status', complaint_id: complaint_id, new_status: new_status, diagnosis: diagnosis })
				.done(function (response) {
					console.log(response); // Log the response for debugging
				});
		}
		function savePrintAsImage() {
			UpdateComplaintStatus();

			const $element = $('#savethis');
			const $element2 = $('#save');

			$element.hide();
			$element2.hide();
			domtoimage.toJpeg(document.documentElement, {
				quality: 0.8,
				width: document.documentElement.scrollWidth,
				height: document.documentElement.scrollHeight
			}).then(function (dataUrl) {
				const link = document.createElement('a');
				link.download = 'fullpage.jpg';
				link.href = dataUrl;
				link.click();
			})
				.catch(console.error)
				.finally(() => {
					$element.show();
					$element2.show();
				});
		}

		const canvas = document.querySelector('#canvas');
		const ctx = canvas.getContext('2d');

		function resizeCanvas() {
			canvas.width = window.innerWidth;
			ctx.fillStyle = 'white';
			ctx.fillRect(0, 0, canvas.width, canvas.height);
		}

		function printPage() {
			const $element = $('#savethis');
			const $element2 = $('#save');

			$element.hide();
			$element2.hide();
			window.onbeforeprint = function () {
				document.title = "custom-filename";

			};

			setTimeout(() => {
				$element.show();
				$element2.show();
			}, 1000);
			window.print();


		}

		window.addEventListener('resize', resizeCanvas);
		document.querySelector('#save').addEventListener('click', printPage);

		let isDrawing = false;
		let lastX = 0;
		let lastY = 0;

		canvas.addEventListener('mousedown', (e) => {
			isDrawing = true;
			[lastX, lastY] = [e.offsetX, e.offsetY];
		});

		canvas.addEventListener('mousemove', (e) => {
			if (!isDrawing) return;
			ctx.strokeStyle = 'black';
			ctx.lineWidth = 2;
			ctx.lineCap = 'round';
			ctx.beginPath();
			ctx.moveTo(lastX, lastY);
			ctx.lineTo(e.offsetX, e.offsetY);
			ctx.stroke();
			[lastX, lastY] = [e.offsetX, e.offsetY];
		});

		canvas.addEventListener('mouseup', () => (isDrawing = false));
		canvas.addEventListener('mouseout', () => (isDrawing = false));

		// Initialize on load
		resizeCanvas();

		// Initialize DataTable
		document.addEventListener('DOMContentLoaded', function () {
			const prescriptionTable = document.querySelector('#prescriptionTable');
			if (prescriptionTable) {
				new simpleDatatables.DataTable(prescriptionTable, {
					searchable: true,
					fixedHeight: true,
					perPage: 10
				});
			}
		});
	</script>
</body>

</html>