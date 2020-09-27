<!DOCTYPE html>
<html>
<head>
	<title>Update Student</title>
</head>
<body>

	<h1>Update Student Info</h1>

	<a href="/all-student">Back</a>
	<form method="post">
		
		{{csrf_field()}}
		<table>
			<tr>
				<td>Student ID</td>
				<td><input type="text" name="sid" value="{{$student[0]->sid}}" readonly></td>
			</tr>
			<tr>
				<td>Student Name</td>
				<td><input type="text" name="name" value="{{$student[0]->sName}}"></td>
			</tr>

			<tr>
				<td>Section</td>
				<td><input type="text" name="section" value="{{$student[0]->section}}"></td>
			</tr>
			<tr>
				<td>Father's Name</td>
				<td><input type="text" name="fName" value="{{$student[0]->fName}}"></td>
			</tr>
			<tr>
				<td>Mother's Name</td>
				<td><input type="text" name="mName" value="{{$student[0]->mName}}"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><input type="text" name="gender" value="{{$student[0]->gender}}"></td>
			</tr>
			<tr>
				<td>Blood Group</td>
				<td><input type="text" name="bg" value="{{$student[0]->bGroup}}"></td>
			</tr>
			<tr>
				<td>Date of Birth</td>
				<td><input type="text" name="dob" value="{{$student[0]->dob}}"></td>
			</tr>
			<tr>
				<td>Admission Date</td>
				<td><input type="text" name="admDate" value="{{$student[0]->admissionDate}}"></td>
			</tr>
			<tr>
				<td>Religion</td>
				<td><input type="text" name="rg" value="{{$student[0]->religion}}"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="{{$student[0]->eMail}}"></td>
			</tr>
			<tr>
				<td>Admission Class</td>
				<td><input type="text" name="admClass" value="{{$student[0]->admissionClass}}" ></td>
			</tr>
			<tr>
				<td>Gurdian's Phone Number</td>
				<td><input type="text" name="gpn" value="{{$student[0]->gPN}}"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" name="address" value="{{$student[0]->address}}"></td>
			</tr>
			<tr>
				
				<td><input type="text" name="simg" value="{{$student[0]->myImage}}" hidden></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="update"></td>
			</tr>
		</table>
	</form>
</body>
</html>