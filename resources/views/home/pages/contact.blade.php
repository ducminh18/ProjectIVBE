@extends('home.layouts.home-v4-layout')
@section('title')
    Thanh toán
@endsection
@section('page-title')
    Thanh toán
@endsection

@section('content')
	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('/assets/home/images/bg-01.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Liên hệ
		</h2>
	</section>	
	<section ng-if="message" class="bg-img1 txt-center p-lr-15 p-tb-92">
		<h3>@{{message}}</h3>
        <h3>Mã đơn hàng của bạn là : <strong>@{{invoiceId}}</strong> <a href="/track-order?invoice=@{{invoiceId}}">Xem đơn hàng</a></h3>
	</section>	

	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					<form>
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Gửi tin nhắn cho chúng tôi
						</h4>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Email của bạn">
							<img class="how-pos4 pointer-none" src="/assets/home/images/icons/icon-email.png" alt="ICON">
						</div>

						<div class="bor8 m-b-30">
							<textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="msg" placeholder="Chúng tôi có thể giúp gì?"></textarea>
						</div>

						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							Gửi
						</button>
					</form>
				</div>

				<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-map-marker"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Địa chỉ
							</span>

							<p class="stext-115 cl6 size-213 p-t-18">
								Văn phòng Công ty TNHH Đầu tư và Phát triển Mando - Số 5, ngõ 18, đường Phạm Hùng, phường Mỹ Đình 2, quận Nam Từ Liêm, thành phố Hà Nội, Việt Nam
							</p>
						</div>
					</div>

					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-phone-handset"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Số điện thoại
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								0948541032
							</p>
						</div>
					</div>

					<div class="flex-w w-full">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-envelope"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Hỗ trợ
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								cskh@mandofashion.vn
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	

@endsection
@section('scripts')
    <script src="/assets/home/js/contactController.js"></script>
    <script src="/assets/home/js/appController.js"></script>
@endsection
