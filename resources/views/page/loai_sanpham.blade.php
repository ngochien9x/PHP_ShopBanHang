@extends('master')
@section('content')
<div class="inner-header">
	<div class="container">
		<div class="pull-left">
			<h6 class="inner-title">Sản phẩm</h6>
		</div>
		<div class="pull-right">
			<div class="beta-breadcrumb font-large">
				<a href="index">Home</a> / <span>Sản phẩm</span>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						<ul class="aside-menu">
							@foreach($loai_sp as $loai)
								<li class="is-active"><a href="loai-san-pham/{{$loai->id}}">{{$loai->name}}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4>New Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">{{count($sp_theoloai)}} found in this page</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@foreach($sp_theoloai as $sp)
									<div class="col-sm-4">
										<div class="single-item">
											<div class="single-item-header">
												<a href="product.html"><img class="resize-img" src="source/image/product/{{$sp->image}}" alt=""></a>
											</div>
											<div class="single-item-body">
												<p class="single-item-title">{{$sp->name}}</p>
												<p class="single-item-price">
													<span>đ {{number_format($sp->unit_price)}}</span>
												</p>
											</div>
											<div class="single-item-caption">
												<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
												<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
								@endforeach
							</div>
							<div class="row-paging">{{$sp_theoloai->appends(['sp_theoloai' => $sp_theoloai->currentPage()])->links()}}</div>
							
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						@if($sp_khac != null) 
						<div class="beta-products-list">
							<h4>Other type products</h4>
							<div class="beta-products-details">
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($sp_khac as $sp)
								<div class="col-sm-4">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img class="resize-img" src="source/image/product/{{$sp->image}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$sp->name}}</p>
											<p class="single-item-price">
												<span>đ {{number_format($sp->unit_price)}}</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							<div class="space40">&nbsp;</div>
							    
							<div class="row-paging">{{$sp_khac->appends(['sp_khac' => $sp_khac->currentPage()])->links()}}</div>
						</div> <!-- .beta-products-list -->
						@endif
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
</div> <!-- .container -->
@endsection