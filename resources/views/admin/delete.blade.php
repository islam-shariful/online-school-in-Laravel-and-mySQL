<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
	

</head>
<body>
	
	<a href="/all-student">Back</a> 
	
	
	
	<h3>Delete student</h3>

	<form method="post">
		@csrf
		<table border="1">
			<tr>
				<td>studentname</td>
				<td>{{$student[0]->sName}}</td>
			</tr>
			<tr>
				<td>Stident ID</td>
				<td>{{$student[0]->sid}}</td>
				
			</tr>
			<tr>
				<td>Class</td>
				<td>{{$student[0]->admissionClass}}</td>
				
			</tr>
			<tr>
				<td>Section</td>
				<td>{{$student[0]->section}}</td>
			</tr>
		</table>
		<h3>Are you sure? This can't be undone!</h3>
		<input type="hidden" name="id" value="{{$student[0]->sid}}">
		<input type="submit" name="submit" value="confirm">
	</form>
	
</body>
</html>
