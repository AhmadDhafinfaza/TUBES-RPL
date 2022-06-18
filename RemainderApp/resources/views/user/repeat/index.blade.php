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
				<li class="breadcrumb-item"><a href="/admin/inventaris">Home</a></li>
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
					
          <a class="btn btn-tool" href="/user/repeat/create"> <i class="fas fa-plus"> </i> Add </a>
          
          <a class="btn btn-tool" href="#"> <i class="fas fa-undo"> </i> Back </a>  

          <button type="button" class="btn btn-tool" data-card-widget="collapse">
						<i class="fas fa-minus"></i>
					</button>
					</div>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<div class="row">
					<div class="col-md-12">
          			<table id="myTable" class="table table-striped display nowrap compact" style="width:100%">
                  <thead>
                  <tr>
                    <th width="5%" style="text-align: center;">Judul</th>
                    <th width="10%" style="text-align: center;">Deskripsi</th>
					<th width="10%" style="text-align: center;">Pengulangan</th>
					<th width="10%" style="text-align: center;">hari</th>
					<th width="10%" style="text-align: center;">Jam</th>
                    <th style="text-align:center" width="15%">Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td style="text-align: center;">Matkul RPL</td>
                    <td style="text-align: center;">Matkul sama pak nur ichsan</td>
					<td style="text-align: center;">Mingguan</td>
					<td style="text-align: center;">Selasa</td>
                    <td style="text-align: center;">07.00</td>
                    <td style="text-align: center;">
						<form action="#" method="POST">
                    		<a class="btn btn-info btn-xs" href="/user/repeat/edit"><i class="fas fa-pencil-alt"> </i> Edit</a>
							@csrf
							@method('DELETE')
                    		<button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"> </i> Delete</button>
                		</form>
                    </td>
                  </tr>
                  </tbody>
                  </tfoot>
                </table>
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



