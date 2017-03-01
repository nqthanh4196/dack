@extends('layouts.master')

@section('content')
<!-- Main Content -->
<div class="main-content">
	<div class="shopping-cart">
		
		<div class="container">
			<div class="row row-fit-20">
				
				<!-- Shopping Cart -->
				<div class="col-md-6">
					<div class="shopping-cart-items">
						
						<!-- Caption -->
						<p class="caption">Giỏ hàng</p>

						<!-- Cart Items -->
						<div class="cart-items">
							<table>
								
								<thead>
									<tr>
										<td>Tên </td>
										<td>Giá</td>
										<td>Số lượng</td>
										<td>Tổng tiền</td>
									</tr>
								</thead>

								<tbody>
								@foreach($data as $item)
									<tr>
										<td>
											<div class="cart-product">
												<a href="/cart/{{$item->rowId}}/delete" class="delete-product" ><i class="icon-cross">
												</i></a>
												<div class="image">
													<a href="/product/{{$item->id}}">
														<img src="/{{$item->options->image}}" alt="cart product" />
													</a>
												</div>
												<h4><a href="/product/{{$item->id}}">{{$item->name}}</a></h4>
											</div>
										</td>
										<td>{{$item->price}}</td>
										<td>{{$item->qty}}</td>
										<td>{{$item->subtotal}}</td>
									</tr>
								@endforeach
								</tbody>
							</table>
							<div class="coupon">
								<div class="enter-coupon">
									<a href="/shop" class="update-cart">Tiếp tục mua hàng</a>
								</div>
							</div>
						</div>
						<!-- Cart Totals -->
						<div class="cart-totals">
							<h4>Tổng tiền của giỏ hàng</h4>
							<p>Tổng tiền của giỏ hàng <?php echo Cart::subtotal(); ?> </p>
							<p>Free shipping</p>
							<p>Tổng tiền <?php echo Cart::subtotal(); ?></p>

							<a href="/checkout"  class="checkout">Thanh TSPoán</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection