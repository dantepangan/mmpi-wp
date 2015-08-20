<?php

/*

     Template Name: Storefinder Page

*/

get_header(); ?>
<div class="container-fluid careers-title">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
					<div class="search-header careers-header">
						<h3>Store Finder</h3>
					</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 select-area">
				<h4 class="blue">Select Area</h4>
				<!-- Accordion Start -->
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingOne">
				      <h4 class="panel-title">
				        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Luzon</a>
				      </h4>
				    </div>
				    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
				      <div class="panel-body">
				        <ul>
				        	<li><a class="sendabra">Abra</a></li>
				        	<li><a class="sendalbay">Albay</a></li>
				        	<li><a class="sendaurora">Aurora</a></li>
				        	<li><a class="sendbataan">Bataan</a></li>
				        	<li><a class="sendbatangas">Batangas</a></li>
				        	<li><a class="sendbenguet">Benguet</a></li>
				        	<li><a class="sendbulacan">Bulacan</a></li>
				        	<li><a class="sendcagayan">Cagayan</a></li>
				        	<li><a class="sendcavite">Cavite</a></li>
				        	<li><a class="sendcamarinesnorte">Camarines Norte</a></li>
				        	<li><a class="sendcamarinessur">Camarines Sur</a></li>
				        	<li><a class="sendcatanduanes">Catanduanes</a></li>
				        	<li><a class="sendifugao">Ifugao</a></li>
				        	<li><a class="sendisabella">Isabela</a></li>
				        	<li><a class="sendilocossur">Ilocos Sur</a></li>
				        	<li><a class="sendilocosnorte">Ilocos Norte</a></li>
				        	<li><a class="sendlaguna">Laguna</a></li>
				        	<li><a class="sendlaunion">La Union</a></li>
				        	<li><a class="sendmanila">Metro Manila</a></li>
				        	<li><a class="sendnuevaencija">Nueva Encija</a></li>
				        	<li><a class="sendnuevavizcaja">Nueva Vizcaja</a></li>
				        	<li><a class="sendpampanga">Pampanga</a></li>
				        	<li><a class="sendpangasinan">Pangasinan</a></li>
				        	<li><a class="sendquezon">Quezon</a></li>
				        	<li><a class="sendquirino">Quirino</a></li>
				        	<li><a class="sendrizal">Rizal</a></li>
				        	<li><a class="sendsorsogon">Sorsogon</a></li>
				        	<li><a class="sendtarlac">Tarlac</a></li>
				        	<li><a class="sendzambales">Zambales</a></li>
				        	<li><a class="sendbrookespoint">Brookes Point(Palawan)</a></li>
				        	<li><a class="sendcoron">Coron(Palawan)</a></li>
				        	<li><a class="sendcuyo">Cuyo(Palawan)</a></li>
				        	<li><a class="sendelnido">El Nido(Palawan)</a></li>
				        	<li><a class="sendnarra">Narra(Palawan)</a></li>
				        	<li><a class="sendpuertaprincessa">Puerta Princessa(Palawan)</a></li>
				        	<li><a class="sendquezonpalawan">Quezon(Palawan)</a></li>
				        	<li><a class="sendrizalpalawan">Rizal(Palawan)</a></li>
				        	<li><a class="sendroxaspalawan">Roxas(Palawan)</a></li>
				        	<li><a class="sendtaytaypalwan">Taytay(Palawan)</a></li>
				        </ul>
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingThree">
				      <h4 class="panel-title">
				        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Visayas</a>
				      </h4>
				    </div>
				    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				      <div class="panel-body">
				        <ul>
				        	<li><a class="sendaklan">Aklan</a></li>
				        	<li><a class="sendantique">Antique</a></li>
				        	<li><a class="sendbohol">Bohol</a></li>
				        	<li><a class="sendcapiz">Capiz</a></li>
				        	<li><a class="sendcarcarcebu">Carcar(Cebu)</a></li>
				        	<li><a class="sendguimaras">Guimaras</a></li>
				        	<li><a class="sendmadamecebu">Mandaue(Cebu)</a></li>
				        	<li><a class="sendtalisaycebu">Talisay(Cebu)</a></li>
				        	<li><a class="sendiloilo">Iloilo</a></li>
				        	<li><a class="sendleyte">Leyte</a></li>
				        	<li><a class="sendnegrosoccidental">Negros Occidental</a></li>
				        </ul>
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingFour">
				      <h4 class="panel-title">
				        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Mindanao</a>
				      </h4>
				    </div>
				    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
				      <div class="panel-body">
				         <ul>
				        	<li><a class="sendagusan">Agusan Del Sur</a></li>
				        	<li><a class="sendbukidnon">Bukidnon</a></li>
				        	<li><a class="sendcagayandeoro">Cagayan De Oro</a></li>
				        	<li><a class="sendcaraga">Caraga</a></li>
				        	<li><a class="sendcompostela">Compostela</a></li>
				        	<li><a class="sendcotabato">Cotabato</a></li>
				        	<li><a class="sendsouthcotabato">South Cotabato</a></li>
				        	<li><a class="senddavao">Davao</a></li>
				        	<li><a class="senddavaodelsur">Davao Del Sur</a></li>
				        	<li><a class="senddavaooriental">Davao Oriental</a></li>
				        	<li><a class="senddavaodelnorte">Davao Del Norte</a></li>
				        	<li><a class="sendlanao">Lanao Del Norte</a></li>
				        	<li><a class="sendmaguindanao">Maguindanao</a></li>
				        	<li><a class="sendmasbate">Masbate</a></li>
				        	<li><a class="sendmisamis">Misamis</a></li>
				        	<li><a class="sendmisamisoccidental">Misamis Occidental</a></li>
				        	<li><a class="sendmisamisoriental">Misamis Oriental</a></li>
				        	<li><a class="sendsurigao">Surigao</a></li>
				        	<li><a class="sendsurigaodelsur">Surigao Del Sur</a></li>
				        	<li><a class="sendzamboangadelnorte">Zamboanga Del Norte</a></li>
				        	<li><a class="sendzamboangadelsur">Zamboanga Del Sur</a></li>
				        	<li><a class="sendzamboangasibugay">Zamboanga Sibugay</a></li>
				        </ul>
				      </div>
				    </div>
				  </div>
				</div>
				<!-- Accordion end -->
			</div>
			<div class="col-md-8 show-area">
			<div class="show-container">
				<h4 class="blue">Metro Manila</h4>
				<div class="shop-spot">
					<h5>Buendia Taft Avenue</h5>
					<p>WABBIT MOTORS TRADING</p>
					<p><i class="fa fa-map-marker"></i>&nbsp;2008 A-B TAFT AVE. COR, BUENDIA PASAY CITY</p>
					<p><i class="fa fa-phone-square"></i>&nbsp; +63 917 743 22 81</p>
					<!-- <a href="#">View on Google Maps</a> -->
				</div>	
				<div class="shop-spot">
					<h5>Caloocan</h5>
					<p>V8 RACER MOTORS CO. LTD.</p>
					<p><i class="fa fa-map-marker"></i>&nbsp;#478 AUGUSTO BLDG. RIZAL AVENU EXT. BRGY 106 ZONE 10 DIST. 2 CALOOCAN CITY</p>
					<p><i class="fa fa-phone-square"></i>&nbsp; N/A</p>
					<!-- <a href="#">View on Google Maps</a> -->
				</div>	
				<div class="shop-spot">
					<h5>EAST FAIRVIEW</h5>
					<p>V8 RACER MOTORS CO. LTD.</p>
					<p><i class="fa fa-map-marker"></i>&nbsp;81-A East Fairview Quezon City</p>
					<p><i class="fa fa-phone-square"></i>&nbsp; +63 927 531 56 61/+63 2 921 88 24</p>
					<!-- <a href="#">View on Google Maps</a> -->
				</div>	
				<div class="shop-spot">
					<h5>La Carlota</h5>
					<p>Daan Hari Motors Corp.</p>
					<p><i class="fa fa-map-marker"></i>&nbsp;492 Rizal St. La Carlota City Negros Occidental</p>
					<p><i class="fa fa-phone-square"></i>&nbsp; +63 905 551 53 73</p>
					<!-- <a href="#">View on Google Maps</a> -->
				</div>	
				<div class="shop-spot">
					<h5>Victorias</h5>
					<p>Daan Hari Motors Corp.</p>
					<p><i class="fa fa-map-marker"></i>&nbsp;Bangga Daan Banwa, Hi-way Barangay 13 Victorias City Negros Occidental</p>
					<p><i class="fa fa-phone-square"></i>&nbsp; +63 905 551 58 33</p>
					<!-- <a href="#">View on Google Maps</a> -->
				</div>	
			</div>	
			</div>
		</div>
	</div>
</div>
<!-- Footer -->
<?php get_footer(); ?>
<!-- Footer End -->
