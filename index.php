<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-xl-6">
			<form method="post" action="signup.php" id="signup">
				<div class="form-group">
					<label>Name : </label>
					<input type="text" name="name" class="form-control">
				</div>

				<div class="form-group">
					<label>Email : </label>
					<input type="text" name="email" class="form-control">
				</div>

				<div class="form-group">
					<label>Subject : </label>
					<input type="text" name="subject" class="form-control">
				</div>
				<input type="submit" name="save" value="Save" class="btn btn-info">
			</form>
		</div>
	</div>
</div>


<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script>
	$("#signup").validate({
		rules : {
			name : {
				required:true,
			},
			email : {
				required:true,
			},
			subject : {
				required:true,
			},
		},

		submitHandler:function(form)
		{
			$.ajax({
				url : 'signup.php',
				type: 'POST',
				data: new FormData($('form')[0]),
				contentType:false,
				cache:false,
				processData:false,
				success:function(data)
				{
					alert(data);
				}
			});

		}
	});
</script>
</body>
</html>