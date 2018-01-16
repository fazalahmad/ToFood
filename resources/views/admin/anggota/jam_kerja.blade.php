@extends('admin.header_admin')
@section('content')
<!-- MAIN CONTENT -->
		<div id="main-content">
			<div class="container-fluid">
				<div class="section-heading">
					<h1 class="page-title">Petugas Kasir</h1>
				</div>
				<div class="row">
					<div class="col-md-6">
            <form action='/add_anggota' method='post' id="advanced-form">
							{{ csrf_field() }}
              <div class="form-group">
                <label for="text-input1">ID Petugas</label>
                <input type="text" name='f_id_petugas' value="{{$id}}" id="text-input1" class="form-control" required data-parsley-minlength="8">
              </div>
              <div class="form-group">
                <label>Shift</label>
                <br/>
                <select name='f_shift' class="form-control">
                  <option>Pilih Shift</option>
                  <option value='pagi'>Pagi</option>
                  <option value="sore">Sore</option>
                </select>
              </div>

              <br/>
              <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
					</div>

					<div class="col-md-6">

					</div>
				</div>
			</div>
		</div>
		<!-- END MAIN CONTENT -->
@endsection
