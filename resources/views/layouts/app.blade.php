<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="author" content="Balai Besar Pelaksanaan Jalan Nasional DKI Jakarta">
	<meta name="description" content="Balai Besar Pelaksanaan Jalan Nasional DKI Jakarta.">

	<!-- Font Imports -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=PT+Serif:ital@0;1&display=swap" rel="stylesheet">

	<!-- Core Style -->
	<link rel="stylesheet" href="/style.css">

	<!-- Font Icons -->
	<link rel="stylesheet" href="/css/font-icons.css">

	<!-- Plugins/Components CSS -->
	<link rel="stylesheet" href="/css/swiper.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="/css/custom.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Document Title  -->
	<link rel="icon" href="/images/LOGO_PU.jpg">
    <title>Balai Besar Pelaksanaan Jalan Nasional - @yield('title')</title>
</head>
<body class="stretched">
    <div id="wrapper">
		@include('components.topbar')
		@include('components.header')
		@section('featured')		
		
		@show
		@section('breadcrumb')		
		
		@show
        <section id="content">
			<div class="content-wrap">
				<div class="container">
                    @yield('content')
				</div>
			</div>
		</section>
        @include('components.footer')
    </div>
	<a  class="whats-app" href="https://wa.me/+628119225246">
		<img src="/images/link/callcenter.png" alt="WhatsApp">
	</a>
    <div id="gotoTop" class="uil uil-angle-up"></div>
    <script src="/js/functions.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>
		$(document).ready(function() {
			var titles = [
				{
					name: "Selamat Datang Di Website Balai Besar Pelaksanaan Jalan Nasional DKI Jakarta - Jawa Barat",
					link: "#",
				},
				{
					name: "Kementerian PUPR Pastikan Jalan Nasional Sepanjang 262Km di Yogyakarta Siap Sambut Momentum Mudik Lebaran 2023",
					link: "http://Kementerian PUPR Pastikan Jalan Nasional Sepanjang 262Km di Yogyakarta Siap Sambut Momentum Mudik Lebaran 2023",
				},
				{
					name: "Tingkatkan Konektivitas dan Distribusi Logistik, Kementerian PUPR Rampungkan Penggantian 3 Jembatan di Denpasar",
					link: "http://Tingkatkan Konektivitas dan Distribusi Logistik, Kementerian PUPR Rampungkan Penggantian 3 Jembatan di Denpasar",
				},
				{
					name: "Target Tersambung 3.196 Km Pada Akhir Tahun 2024, Kementerian PUPR Komitmen Wujudkan Penyelenggaraan Jalan Tol yang Berkelanjutan",
					link: "http://Target Tersambung 3.196 Km Pada Akhir Tahun 2024, Kementerian PUPR Komitmen Wujudkan Penyelenggaraan Jalan Tol yang Berkelanjutan",
				}
			];
			var index = 0;
			var interval = 15000; // 15 seconds
			var menuItem = $('.page-menu-item.current a');
			
			function showTitle() {
				menuItem.hide().text(titles[index].name).attr('href', titles[index].link).fadeIn('normal');
				index = (index + 1) % titles.length;
			}
			
			showTitle();
			setInterval(showTitle, interval);
		});
	</script>
	<script>
	function updateClock() {
		// get the current date and time
		let now = new Date();
		// format the date using Indonesia format
		let options = {
			weekday: 'long',
			year: 'numeric',
			month: 'long',
			day: 'numeric'
		};
		let dateStr = now.toLocaleDateString('id-ID', options);
		// format the time as HH:mm:ss
		let timeStr = now.toLocaleTimeString('en-US', {hour12: true});
		// let timeStr = now.toLocaleTimeString('id-ID', {hour12: false}).replace(/\./g, ':');

		// update the clock text
		// $('#clock').text(dateStr + ' | ' + timeStr);
		document.getElementById("clock").innerHTML = dateStr + ' | ' + timeStr;
	}

	// update the clock every second
	setInterval(updateClock, 1000);
	</script>
</body>
</html>
