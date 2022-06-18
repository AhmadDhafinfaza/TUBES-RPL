@extends('user/panel')
   
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0"><?php echo $judul ?></h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active"><?php echo $judul ?></li>
				</ol>
			</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->

		<!-- Main content -->
		<section class="content">
		<div class="container-fluid">
			<!-- Info boxes -->
      <div class="row">
			<div class="col-md-12">
				<div class="card">
				<div class="card-header">
					<h5 class="card-title"><?php echo $judul ?></h5>

					<div class="card-tools">
					
          <a class="btn btn-tool" href="/user/repeat"> <i class="fas fa-undo"> </i> Back </a>  

          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
		  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
					</div>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<div class="row">
					
					<div class="col-md-3"></div>
					
					<div class="col-md-6">
						<form class="form-horizontal" action="#" method="POST" enctype="multipart/form-data">
						@csrf
						@method('PUT')
						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Judul</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="nama_barang" value="#" placeholder="Nama Barang">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Deskripsi</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="jumlah" value="#" placeholder="Jumlah Barang">
							</div>
						</div>

						<div class="input-group mb-3" >
                        <label class="col-sm-3 col-form-label">Pengulangan</label>
                        <div class="col-sm-4">
                            <select name="lokasi_barang" class="form-control">
							<option selected="selected" value="#">Tahunan</option>
                            </select>
							
                            </div>
                        </div>

                        <div class="input-group mb-3" >
                        <label class="col-sm-3 col-form-label">Hari</label>
                        <div class="col-sm-4">
                            <select name="lokasi_barang" class="form-control">
							<option selected="selected" value="#">senin</option>
                            </select>
							
                            </div>
                        </div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">jam</label>
							<div class="col-sm-9">
								<input type="time" class="form-control" name="tgl_beli" value="#" placeholder="">
							</div>
						</div>

						<center>
						<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
						</center>
						</form>
					</div>
					<!-- /.col -->
					</div>
					<!-- /.row -->
				</div>
				<!-- ./card-body -->
				</div>
				<!-- /.card -->
			</div>
			<!-- /.col -->
			</div>
			<!-- /.row -->

		</div><!--/. container-fluid -->
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

@endsection