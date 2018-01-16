 @extends('admin.header_admin')
@section('content')
<!-- MAIN CONTENT -->
		<div id="main-content">
			<div class="container-fluid">
				<div class="section-heading">
					<h1 class="page-title">Kasir</h1>
				</div>
				<div class="row">
					<div class="col-md-6">
            <form id="advanced-form" data-parsley-validate novalidate>
              <div class="form-group">
                <label for="text-input1">ID Faktur</label>
                <input type="text" id="text-input1" class="form-control" required data-parsley-minlength="8">
              </div>

              <label for="text-input1">Makanan</label>
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <select class="form-control">
                          <option>Pilih Makanan</option>
                          <option value=''>Mie Juara se-Bandung</option>
                          <option value="">Mie Juara Se-Indonesia</option>
                          <option value="">Mie Juara Se-Asia</option>
                          <option value="">Mie Kitel Kari</option>
                          <option value="">Mie Katsu kari</option>
                          <option value="">Nasi Ayam Katsu</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <input type="number" id="text-input1" class="form-control" min="1" required data-parsley-minlength="8">
                    </div>
                  </div>
                  <div class="col-md-2">
                      <button class="btn btn-success">ADD</button>
                  </div>
              </div>

              <label for="text-input1">Minuman</label>
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <select class="form-control">
                          <option>Pilih Minuman</option>
                          <option value=''>Air Mineral</option>
                          <option value="">Choco Banana</option>
                          <option value="">Choco Banana</option>
                          <option value="">Lychee Tea</option>
                          <option value="">Milk Vanilla</option>
                          <option value="">Tea Manis</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <input type="number" id="text-input1" class="form-control" min="1" required data-parsley-minlength="8">
                    </div>
                  </div>
                  <div class="col-md-2">
                      <button class="btn btn-success">ADD</button>
                  </div>
              </div>
              <br/></br/>


              <br/>
              <button type="submit" class="btn btn-primary">Bayar</button>
            </form>
					</div>

					<div class="col-md-6">
            <div class="panel panel-default">
              <div class="panel-body">
                <table class="table">
                  <tbody>
                      <tr>
                          <td width="170px"><h4>Total Pesanan</h4></td>
                          <td><h4>:</h4></td>
                          <td></td>

                      </tr>
                      <tr>
                          <td><h4>PPN</h4></td>
                          <td><h4>:</h4></td>
                          <td></td>

                      </tr>
                      <tr>
                          <td><h4>Total Pembayaran</h4></td>
                          <td><h4>:</h4></td>
                          <td></td>
                      </tr>
                      <tr>
                          <td><h4>Tunai</h4></td>
                          <td><h4>:</h4></td>
                          <td></td>
                      </tr>
                      <tr>
                          <td><h4>Kembalian</h4></td>
                          <td><h4>:</h4></td>
                          <td></td>
                      </tr>
                  </tbody>
                </table>

              </div>
            </div>
					</div>

				</div>
			</div>
		</div>
		<!-- END MAIN CONTENT -->
@endsection
