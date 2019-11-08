@extends('admin.master')

@section('title', 'List of Plants')

@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<i class="fa fa-list"></i> List of Plant Variants
		</h1>
		<ol class="breadcrumb">
			<li><a href="{{ route('admin_dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Plants</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Info boxes -->
		<div class="row">
			<div class="col-md-12">
				<div class="box box-success">
					<div class="box-body">
						<div class="row">
							<div class="col-md-12">
								<table id="example1" class="table table-striped table-hover">
									<thead>
										<tr>
											<th>#</th>
											<th width="9%">Plant Variant Name</th>
											<th width="25%">Plant Variant Description</th>
											<th width="25%">Plant Variant Growth Description</th>
											<th width="8%">Plant Variant</th>
											<th>Added</th>
											<th></th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										@forelse($plant_variants as $plant_variant)
										<tr>
											<td>{{ $plant_variant->id }}</td>
											<td>{{ $plant_variant->plant_variant_name }}</td>
											<td>{{ substr($plant_variant->plant_variant_description, 0, 200) }}</td>
											<td>{{ substr($plant_variant->plant_variant_growth_description, 0, 200) }}</td>
											<td><img height="50px" src="#"></td>
											<td>{{ $plant_variant->created_at->diffForHumans() }}</td>
											<td><a href="#" class="btn btn-danger btn-sm">Edit</a></td>
											<td><a href="#" class="btn btn-primary btn-sm">Details</a></td>
										</tr>
										@empty

										@endforelse
									</tbody>
								</table>
							</div>
							<!-- /.col -->
						</div>
						<!-- /.row -->
					</div>
					<!-- ./box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->

		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection

@section('scripts')
<script>
	$(function () {
		$('#example1').DataTable({
			'ordering'    : false
		})
	})
</script>
@endsection