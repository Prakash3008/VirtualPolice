<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Simple Example of PDF file using PHP and MySQL</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body>
<div class= "container" style="padding-top:50px">
<h2>Generate PDF FIR </h2>
<form class="formss-inline" method="post" action="generatepdf.php">
Enter your Aadhar Number:	<input type="text" name="aadhar" id="aadhar" />
<button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary"><i class="fa fa-pdf"" aria-hidden="true"></i>
Download FIR</button>
</form>
</fieldset>
</div>
</body>
</html>