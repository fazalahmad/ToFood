@extends('admin.header_admin')
@section('content')
<!-- MAIN CONTENT -->
		<div id="main-content">
			<div class="container-fluid">
				<div class="section-heading">
					<h1 class="page-title">Petugas Kasir</h1>
				</div>
        <!--data tables  -->
        <table id="example" class="ui celled table" cellspacing="0" width="100%">
          <thead>
            <tr>
                <th>NO</th>
                <th>ID</th>
                <th>Nama</th>
                <th>Kelamin</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Foto</th>
                <th>Shift</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($list as $view)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $view->id_petugas }}</td>
                <td>{{ $view->nama }}</td>
                <td>{{ $view->kelamin }}</td>
                <td>{{ $view->alamat }}</td>
                <td>{{ $view->no_hp }}</td>
                <td>{{ $view->foto }}</td>
                <td>{{ $view->shift }}</td>
                <td>

                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <!--end datatable  -->
			</div>
		</div>
		<!-- END MAIN CONTENT -->
@endsection
