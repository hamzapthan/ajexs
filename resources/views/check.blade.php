<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Details</th>
		<th>Data</th>
		<th>Delete</th>
		<th>Edit</th>


		
	</tr>
	@foreach($data as $key => $datas)
	<tr>
		<td>{{$key++}}</td>
		<td>{{$datas->name}}</td>
		<td>{{$datas->data}}</</td>
		<td>{{$datas->category}}</</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
@endforeach
</table>
</body>
</html>