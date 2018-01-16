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
            <form action="" method="post" id="advanced-form" data-parsley-validate novalidate>
							{{ csrf_field() }}
              <div class="form-group">
                <label>Kategori</label>
                <br />
                <select name="f_kategori" class="form-control">
                  <option>Pilih Menu</option>
									@if( $edits->kategori == 'Makanan')
                  <option value='Makanan' selected >Makanan</option>
									<option value="Minuman" >Minuman</option>
									@else
									<option value='Makanan' >Makanan</option>
                  <option value="Minuman" selected >Minuman</option>
									@endif
                </select>
              </div>
              <div class="form-group">
                <label for="text-input1">ID Menu</label>
                <input type="text" name="f_id_menu" value="{{$edits->id_menu}}" id="text-input1" class="form-control" required data-parsley-minlength="8">
              </div>
              <div class="form-group">
                <label for="text-input1">Nama</label>
                <input type="text" name="f_nama" value="{{$edits->nama_menu}}" id="text-input1" class="form-control" required data-parsley-minlength="8">
              </div>
              <div class="form-group">
                <label for="text-input2">Harga</label>
              	<input type="text" name="f_harga" value="{{$edits->harga}}" id="text-input1" class="form-control" required data-parsley-minlength="8">
              </div>

              <br/>
              <button type="submit" class="btn btn-primary">Update</button>
            </form>
					</div>

					<div class="col-md-6">

					</div>
				</div>
			</div>
		</div>
		<!-- END MAIN CONTENT -->
@endsection
