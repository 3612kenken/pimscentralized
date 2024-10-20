<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
 <!-- Main File-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	
	<script>
	
		function SwalAlert(indx, title, text){
			var type = "";
			if (indx==1){
				type="info";
			}else if (indx==2){
				type="warning";
			}else if (indx==3){
				type="error";
			}else if (indx==4){
				type="question";
			}else{
				type="success";
			}
			Swal.fire({
			  icon: type,
			  title: title,
			  text: text
			});
		}
		
	</script>