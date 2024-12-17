<!DOCTYPE html>
<html>
<head>
	<title>Data Karyawan - Laravel CRUD</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

	<!-- Font Awesome for Modern Icons -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<style>
		body {
			font-family: 'Be Vietnam Pro', sans-serif;
		}
		.table th, .table td {
			vertical-align: middle;
		}
		.btn-icon {
			padding: 0.4rem 0.6rem;
			font-size: 0.9rem;
		}
	</style>
</head>
<body class="bg-light">

	<div class="container py-4">
		<h1>Marcello Ezra Andilolo Lubis - 5026221097</h1>
		<h2 class="mb-4 text-center">Data Karyawan</h2>

		<div class="d-flex justify-content-between align-items-center mb-3">
			<a href="/karyawan/tambah" class="btn btn-primary">
				<i class="fas fa-plus"></i> Tambah Karyawan Baru
			</a>

			<!-- Search Form -->
			<form action="/karyawan/cari" method="GET" class="d-flex align-items-center">
				<input type="text" name="cari" class="form-control me-2" placeholder="Cari Nama Karyawan" value="{{ request('cari') }}">
				<input type="number" name="pagination" class="form-control me-2" placeholder="Pagination" value="{{ request('pagination', 10) }}" style="max-width: 100px;">
				<button type="submit" class="btn btn-success">
					<i class="fas fa-search"></i> Cari
				</button>
			</form>
		</div>

		<table class="table table-bordered table-striped">
			<thead class="table-dark">
				<tr>
					<th>Kode</th>
					<th>Nama</th>
					<th>Divisi</th>
					<th>Departemen</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($karyawan as $k)
				<tr>
					<td>{{ $k->kodepegawai }}</td>
					<td>{{ $k->namalengkap }}</td>
					<td>{{ $k->divisi }}</td>
					<td>{{ $k->departemen }}</td>
					<td class="text-center">
						<form action="/karyawan/hapus/{{ $k->kodepegawai }}" method="POST" style="display: inline;">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger btn-icon">
								<i class="fas fa-trash-alt"></i>
							</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		<br/>
		Halaman : {{ $karyawan->currentPage() }} <br/>
		Jumlah Data : {{ $karyawan->total() }} <br/>
		Data Per Halaman : {{ $karyawan->perPage() }} <br/>

		<!-- Pagination Links -->
		<div class="d-flex justify-content-center">
			{{ $karyawan->appends(['cari' => request('cari'), 'pagination' => request('pagination')])->links('pagination::bootstrap-4') }}
		</div>

	</div>

	<!-- Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>