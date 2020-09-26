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
			<tr>
				<td>Book ID</td>
				<td><input type="text" name="bid" value="{{$student[0]->sid}}"</td>
			</tr>
			<tr>
				<td>Book Name</td>
				<td><input type="text" name="bname" value="{{$student[0]->sName}}"></td>
			</tr>

			<tr>
				<td>Author</td>
				<td><input type="text" name="author" value="{{$student[0]->section}}"></td>
			</tr>
			
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="update"></td>
			</tr>
		</table>
	</form>
</body>
</html>