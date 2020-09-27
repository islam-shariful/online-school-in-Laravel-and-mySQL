<!DOCTYPE html>
<html>
<head>
	<title>Library</title>
</head>
<body>

	<h1>Library</h1>

	<a href="/home">Back</a>
	<form method="post">
		
		{{csrf_field()}}
		<table>
			@for($i=0; $i != count ($libraries); $i++)
			<tr>
				<td>Book ID</td>
				
				<label>{{$libraries[$i]->bid}} </label>
			</tr>
			<tr>
				<td>Book Name</td>
				
				<label>{{$libraries[$i]->bname}}</label>
			</tr>

			<tr>
				<td>Author</td>
				<td><input type="text" name="author" value="{{$libraries[$i]->author}}"></td>
			</tr>
			
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="update"></td>
			</tr>
		</table>
		@endfor
	</form>
</body>
</html>