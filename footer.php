<div class="footer">
	
<script src="https://code.jquery.com/jquery-3.3.1.min.js"integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="../rozvrh.js"></script>


<script type="text/javascript">

$("#save").click(function()
{
	$.ajax(
		{
			url: "../ajax.php",
			type: "POST",
			dataType: "json",
			data: {
				que: $("#que").val(),
				ans: $("#ans").val()
			},
			success: function(result){
				
				if(result.error){
					$("#error_space").html(result.html);
				}
				else{
					$("#accordion").html(result.html);
					$("#exampleModal").modal('hide');
				}

			}
		}
	)
}
)

</script>

</div>

</div>

	</body>

</html>
