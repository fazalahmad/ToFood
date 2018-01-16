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
                <th>Kategori</th>
                <th>ID Menu</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($menu as $view)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $view->kategori }}</td>
                <td>{{ $view->id_menu }}</td>
                <td>{{ $view->nama_menu }}</td>
                <td>{{ $view->harga }}</td>
                <td>
                    <a href="edit_menu/{{$view->id_menu}}" class="btn btn-success btn-sm glyphicon glyphicon-pencil" ></a>
                    <a href="delete_menu/{{$view->id_menu}}" class="btn btn-info btn-sm glyphicon glyphicon-trash" ></a>
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
