@extends('admin/panel')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">{{$judul}}</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
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
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <a href="#" class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></a>

            <div class="info-box-content">
              <span class="info-box-text">tes</span>
              <span class="info-box-number">
                100
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <a href="#" class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></a>


            <div class="info-box-content">
              <span class="info-box-text">tes</span>
              <span class="info-box-number">
                100
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->


        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-12">

          <!-- TABLE: LATEST ORDERS -->
          <div class="card">
            <div class="card-header border-transparent">
              <h3 class="card-title">Timeline</h3>


              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table m-0">
                  <thead>
                    <tr>
                      <th>Judul</th>
                      <th>Deskripsi</th>
                      <th>Jam</th>
                      <th>Tanggal</th>
                      <th>Prioritas</th>
                      <th>Status</th>
                      <th>Kategori</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Belajar RPL</td>
                      <td>Belajar materi Scrum</td>
                      <td>15.00</td>
                      <td>25-03-2022</td>
                      <td>Urgent</td>
                      <td>Belum Selesai</td>
                      <td>Task Kuliah</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <a href="#" class="btn btn-sm btn-info float-left">Buat Task Baru</a>
              <a href="#" class="btn btn-sm btn-secondary float-right">Lihat Semua Task</a>
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
<!--/. container-fluid -->

</section>

<!-- /.content -->
</div>

@endsection