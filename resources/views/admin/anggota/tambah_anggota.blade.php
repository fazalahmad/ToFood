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
                <input type="text" name='f_id_petugas' id="text-input1" class="form-control" required data-parsley-minlength="8">
              </div>
              <div class="form-group">
                <label for="text-input1">Nama</label>
                <input type="text" name="f_nama" id="text-input1" class="form-control" required data-parsley-minlength="8">
              </div>
							<div class="form-group">
                <label>Gender</label>
                <br />
                <select name="f_kelamin" class="form-control">
                  <option>Pilih Gender</option>
                  <option value='laki_laki'>Laki-laki</option>
                  <option value="perempuan">Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label for="text-input2">Alamat</label>
                <textarea name="f_alamat" class="form-control" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label for="text-input3">Nomor HP</label>
                <input type="text" name="f_no_hp" id="text-input3" class="form-control" required data-parsley-min="5">
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
