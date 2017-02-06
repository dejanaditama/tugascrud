<!DOCTYPE html>
<html>
<html>
<title>Halaman Awal Operasi CRUD</TITLE>
<style>
div.container {
	width: 100%;
	border 1px solid gray;
}
header, footer {
	padding: 1cm;
	color: white;
	background-color: black;
	clear: left;
	text-align: center;
	}
	
nav {
	float: left;
	max-width: 160px;
	margin: 0;
	padding: 1cm;
}
nav ul {
	list-style-type: none;
	padding: 0;
}
nav ul a {
	text-decoration: none;
}
artikle{
margin-left: 170px;
berder-left: 1px colid gray;
padding :1px;   
overflow; hidden;
}
</style>
</head>
<body>

<div class-"container">
<header> 
<h1><a href ="index.php">Operasi CRUD</a></h1>
</header>

<nav>
	<ul>
	<li><b>MENU</b></li>
	<li><a href ="#">Menu 1</a></li>
	<li><a href ="#">Menu 2</a></li>
	<li><a href ="#">Menu 3</a></li>

	</ul>
</nav>

	</nav>
	<article>
		<table border="1" width="75%" align="center">
			<td>
				<th><a href="Tambah.php"><button type="submit">+ TAMBAH</button></a></th>
			</td>
			<td>
				<th><a href="edit.php"><button type="submit">+ EDIT</button></a></th>
			</td>
			<tr>
				<td>No</td>
				<td>Nama</td>
				<td>Nim</td>
				<td>Alamat</td>
				<td>Aksi</td>
			</tr>
		</table>
	</article>

<footer>
<h2>Dejan Aditama 14.111.121</h2>
</footer>
</div>
</body>
</html>