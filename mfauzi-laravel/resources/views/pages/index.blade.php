@extends('layout.default')
@section('content')
<form action="" method="post">
	<table>
		<tr>
			<td><label>Username :</label></td>
			<td><input id="name" name="username" placeholder="username" type="text"></td>
		</tr>
		<tr>
			<td><label>Password :</label></td>
			<td><input id="password" name="password" placeholder="**********" type="password"></td>
		</tr>
		<tr colspan="2">
			<td><input name="login" type="submit" value=" Login "></td>
		</tr>
	</table>
</form>
@stop