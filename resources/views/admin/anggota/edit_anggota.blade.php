@extends('admin.header_admin')
@section('content')
<!-- MAIN CONTENT -->
		<div id="main-content">
			<div class="container-fluid">
				<div class="section-heading">
					<h1 class="page-title">Update Petugas</h1>
				</div>
				<div class="row">
					<div class="col-md-6">
            <form action='' method='post' id="advanced-form">
							{{ csrf_field() }}
              <div class="form-group">
                <label for="text-input1">ID Petugas</label>
                <input type="text" name='f_id_petugas' value="{{$edits->id_petugas}}" id="text-input1" class="form-control" required data-parsley-minlength="8">
              </div>
              <div class="form-group">
                <label for="text-input1">Nama</label>
                <input type="text" name="f_nama" value="{{$edits->nama}}" id="text-input1" class="form-control" required data-parsley-minlength="8">
              </div>
							<div class="form-group">
                <label>Gender</label>
                <br />
                <select name="f_kelamin" class="form-control">
                  <option>Pilih Gender</option>
                  @if( $edits->kelamin == 'laki_laki')
                  <option value='laki_laki' selected>Laki-laki</option>
                  <option value="perempuan">Perempuan</option>
                  @else
                  <option value='laki_laki'>Laki-laki</option>
                  <option value="perempuan" selected>Perempuan</option>
                  @endif
                </select>
              </div>
              <div class="form-group">
                <label for="text-input2">Alamat</label>
                <textarea name="f_alamat" class="form-control" rows="3"> {{$edits->alamat}} </textarea>
              </div>
              <div class="form-group">
                <label for="text-input3">Nomor HP</label>
                <input type="text" name="f_no_hp" value="{{$edits->no_hp}}" id="text-input3" class="form-control" required data-parsley-min="5">
              </div>
              <div class="form-group">
                <label>Shift</label>
                <br/>
                <select name='f_shift' class="form-control">
                  <option>Pilih Shift</option>
                  @if( $edits->shift == "pagi")
                  <option value="pagi" selected>Pagi</option>
                  <option value="sore">Sore</option>
                  @else
                  <option value="pagi">Pagi</option>
                  <option value="sore" selected>Sore</option>
                  @endif
                </select>
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
