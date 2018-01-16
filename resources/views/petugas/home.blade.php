@extends('header')
@section('content')
<!-- MAIN CONTENT -->
		<div id="main-content">
			<div class="container-fluid">
				<div class="section-heading">
					<h1 class="page-title">Form Pembayaran</h1>
				</div>
				<div class="row">
					<div class="col-md-6">
            
					</div>
					<div class="col-md-6">
						<div class="panel-content">
							<h2 class="heading"><i class="fa fa-square"></i> Advanced Validation</h2>
							<form id="advanced-form" data-parsley-validate novalidate>
								<div class="form-group">
									<label for="text-input1">Min. 8 Characters</label>
									<input type="text" id="text-input1" class="form-control" required data-parsley-minlength="8">
								</div>
								<div class="form-group">
									<label for="text-input2">Between 5-10 Characters</label>
									<input type="text" id="text-input2" class="form-control" required data-parsley-length="[5,10]">
								</div>
								<div class="form-group">
									<label for="text-input3">Min. Number ( >= 5 )</label>
									<input type="text" id="text-input3" class="form-control" required data-parsley-min="5">
								</div>
								<div class="form-group">
									<label for="text-input4">Between 20-30</label>
									<input type="text" id="text-input4" class="form-control" required data-parsley-range="[20,30]">
								</div>
								<div class="form-group">
									<label>Select Min. 2 Options</label>
									<br />
									<label class="control-inline fancy-checkbox">
										<input type="checkbox" name="checkbox2" required data-parsley-mincheck="2" data-parsley-errors-container="#error-checkbox2">
										<span>Option 1</span>
									</label>
									<label class="control-inline fancy-checkbox">
										<input type="checkbox" name="checkbox2">
										<span>Option 2</span>
									</label>
									<label class="control-inline fancy-checkbox">
										<input type="checkbox" name="checkbox2">
										<span>Option 3</span>
									</label>
									<p id="error-checkbox2"></p>
								</div>
								<div class="form-group">
									<label>Select Between 1-2 Options</label>
									<br />
									<label class="control-inline fancy-checkbox">
										<input type="checkbox" name="checkbox3" required data-parsley-check="[1,2]" data-parsley-errors-container="#error-checkbox3">
										<span>Option 1</span>
									</label>
									<label class="control-inline fancy-checkbox">
										<input type="checkbox" name="checkbox3">
										<span>Option 2</span>
									</label>
									<label class="control-inline fancy-checkbox">
										<input type="checkbox" name="checkbox3">
										<span>Option 3</span>
									</label>
									<p id="error-checkbox3"></p>
								</div>
								<br/>
								<button type="submit" class="btn btn-primary">Validate</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END MAIN CONTENT -->
@endsection
