@extends('admin.header_admin')
@section('content')
<!-- MAIN CONTENT -->
		<div id="main-content">
			<div class="container-fluid">
				<div class="section-heading">
					<h1 class="page-title">Menu</h1>
				</div>
				<div class="row">
					<div class="col-md-6">
            <form action="add_menu" method="post" id="advanced-form" data-parsley-validate novalidate>
							{{ csrf_field() }}
              <div class="form-group">
                <label>Kategori</label>
                <br />
                <select name="f_kategori" id="f_kategori" onchange="validate_menu()" class="form-control">
                  <option >Pilih Menu</option>
                  <option value='Makanan'>Makanan</option>
                  <option value="Minuman">Minuman</option>
                </select>
              </div>
              <div class="form-group">
                <label for="text-input1">ID Menu</label>
                <input type="text" name="f_id_menu" id="j_id" class="form-control" required data-parsley-minlength="8" disabled>
              </div>
              <div class="form-group">
                <label for="text-input1">Nama</label>
                <input type="text" name="f_nama" id="j_nama" class="form-control" required data-parsley-minlength="8" disabled>
              </div>
              <div class="form-group">
                <label for="text-input2">Harga</label>
              	<input type="text" name="f_harga" id="j_harga" class="form-control" required data-parsley-minlength="8" disabled>
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
