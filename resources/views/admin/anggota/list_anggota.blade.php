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
					@if(session('success'))
						<div class="alert alert-success text-center alert-block {{session('success')}}">
					     <button type="button" class="close" data-dismiss="alert">×</button>
					     <strong>{{session('success')}}</strong>
					  </div>
					@endif
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
								<td width="120px">
                    <a href="edit_anggota/{{$view->id_petugas}}" class="btn btn-success btn-sm glyphicon glyphicon-pencil" ></a>
                    <a href="delete_menu/{{$view->id_petugas}}" class="btn btn-info btn-sm glyphicon glyphicon-trash" ></a>
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
