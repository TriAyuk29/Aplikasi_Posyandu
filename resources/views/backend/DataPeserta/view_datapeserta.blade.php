@extends('admin.admin_master')

@section('admin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<div class="container-full">
	  <!-- Content Header (Page header) -->

	  <!-- Main content -->
	  <section class="content">
		<div class="row">

		  <div class="col-12">

		   <div class="box">
			  <div class="box-header with-border">
				<h3 class="box-title">Data Peserta</h3>
				<a href="{{route('datapeserta.add')}}" style="float:right;" type="button" class="btn btn-success mb-5">Data Peserta</a>
			  </div>
			  <!-- /.box-header -->
			  <div class="box-body">
				  <div class="table-responsive">
					<table id="example1" class="table table-bordered table-striped">
					  <thead>
						  <tr>
							  <th>Nama Peserta</th>
							  <th>Alamat</th>
							  <th>Berat Badan</th>
							  <th>Tinggi Badan</th>
							  <th>Usia</th>
							  <th>Aksi</th>
							  
						  </tr>
					  </thead>
					  <tbody>
						@foreach ($allDatadatapeserta as $key => $datapeserta)
						  <tr>
							  <td>{{ $datapeserta->nama_peserta}}</td>
							  <td>{{ $datapeserta-->alamat }}</td>
							  <td>{{ $datapeserta-->berat_badan }}</td>
							  <td>{{ $datapeserta->tinggi_badan }}</td>
							  <td>{{ $datapeserta->usia }}</td>
							  <td>
								<a href="{{route('datapeserta.edit' , $datapeserta->id)}}" class="btn btn-info">Edit</a>
								<a href="{{route('datapeserta.delete' , $datapeserta->id)}}" id="delete" class="btn btn-danger">Delete</a>
							  </td>
							 
						  </tr>
						  @endforeach
						  <tr>

					  {{-- <tfoot>
						  <tr>
							  <th>Name</th>
							  <th>Position</th>
							  <th>Office</th>
							 
						  </tr>
					  </tfoot> --}}
					</table>
				  </div>
			  </div>
			  <!-- /.box-body -->
			</div>
			<!-- /.box -->

			
			<!-- /.box -->          
		  </div>
		  <!-- /.col -->
		</div>
		<!-- /.row -->
	  </section>
	  <!-- /.content -->
	
	</div>
</div>
<!-- /.content-wrapper -->


@endsection

<!-- Vendor JS -->
  <script src="{{asset('../assets/vendor_components/datatable/datatables.min.js')}}"></script>
  <script src="{{asset('backend/js/pages/data-table.js')}}"></script> 