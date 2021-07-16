
<!DOCTYPE html>
<html>
<head>
	
	<title>Quick Start - Leaflet</title>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>


	
</head>
<body>	



<div id="mapid" style="width: 1400px; height: 700px;"></div>
<script>

	var mymap = L.map('mapid').setView([-5.400554,105.313026], 13);

	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 20,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
	}).addTo(mymap);

	L.marker([-5.400554,105.313026]).addTo(mymap)
		.bindPopup("<b>Bryna petshop</b><br />Perumahan palem asri tirtayasa sukabumi, Sukabumi, Kec. Sukabumi, Kota Bandar Lampung, Lampung 35122").openPopup();

	L.circle([-5.400554,105.313026], 50, {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5
	}).addTo(mymap).bindPopup("Area");

	L.marker([-5.3913443,105.3000546]).addTo(mymap)
		.bindPopup("<b>Zyafira PetShop</b><br />Sukarame, Bandar Lampung City, Lampung 35122").openPopup();

	L.circle([-5.3913443,105.3000546], 50, {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5
	}).addTo(mymap).bindPopup("Area");

	L.marker([-5.3499599,105.2666781]).addTo(mymap)
		.bindPopup("<b>R.B pet shop</b><br />Jl. R.A. Basyid, Rajabasa Jaya, Kec. Rajabasa, Kota Bandar Lampung, Lampung 35141").openPopup();

	L.circle([-5.3499599,105.2666781], 50, {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5
	}).addTo(mymap).bindPopup("Area");

	L.marker([-5.3951762,105.2823352]).addTo(mymap)
		.bindPopup("<b>Zieku Petshop</b><br />Jl. Pramuka No.22, Rajabasa, Kec. Rajabasa, Kota Bandar Lampung, Lampung 35142").openPopup();

	L.circle([-5.3951762,105.2823352], 50, {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5
	}).addTo(mymap).bindPopup("Area");

	L.marker([-5.3954022,105.2121596]).addTo(mymap)
		.bindPopup("<b>Cahaya Petshop</b><br />Gg. Sejahtera 3 No.9, Sumber Rejo, Kec. Kemiling, Kota Bandar Lampung, Lampung 35152").openPopup();

	L.circle([-5.3954022,105.2121596], 50, {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5
	}).addTo(mymap).bindPopup("Area");

	L.marker([-5.3994163,105.2127248]).addTo(mymap)
		.bindPopup("<b>Marbel Pet Shop</b><br />No.18 Ruko Wismamas, Jl. Teuku Cik Ditiro, Sumber Rejo, Kec. Kemiling, Kota Bandar Lampung, Lampung 35155").openPopup();

	L.circle([-5.3994163,105.2127248], 50, {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5
	}).addTo(mymap).bindPopup("Area");

	L.marker([-5.3995662,105.2093165]).addTo(mymap)
		.bindPopup("<b>Marbel Pet Shop</b><br />No.18 Ruko Wismamas, Jl. Teuku Cik Ditiro, Sumber Rejo, Kec. Kemiling, Kota Bandar Lampung, Lampung 35155").openPopup();

	L.circle([-5.3995662,105.2093165], 50, {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5
	}).addTo(mymap).bindPopup("Area");

	L.marker([-5.4470863,105.2657241]).addTo(mymap)
		.bindPopup("<b>Aneka Jaya Petshop</b><br />Jl. Ikan Hiu No.41, Tlk. Betung, Kec. Telukbetung Selatan, Kota Bandar Lampung, Lampung 35221").openPopup();

	L.circle([-5.4470863,105.2657241], 50, {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5
	}).addTo(mymap).bindPopup("Area");

	L.marker([-5.3938237,105.2826733]).addTo(mymap)
		.bindPopup("<b>Pet Shop Clambit's</b><br />Jl. Urip Sumoharjo No.203, Sukarame, Kec. Sukarame, Kota Bandar Lampung, Lampung 35122").openPopup();

	L.circle([-5.3938237,105.2826733], 50, {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5
	}).addTo(mymap).bindPopup("Area");

	L.marker([-5.3951762,105.2823352]).addTo(mymap)
		.bindPopup("<b>Rumi Pet Shop</b><br />Jl. Arif Rahman Hakim No.51, Jagabaya III, Way Halim, Kota Bandar Lampung, Lampung 35122").openPopup();

	L.circle([-5.3951762,105.2823352], 50, {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5
	}).addTo(mymap).bindPopup("Area");

	L.marker([-5.3921895,105.2806957]).addTo(mymap)
		.bindPopup("<b>Chuchu Pet Shop</b><br />Jl. Urip Sumoharjo No.8A, Jagabaya III, Way Halim, Kota Bandar Lampung, Lampung 35132").openPopup();

	L.circle([-5.3921895,105.2806957], 50, {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5
	}).addTo(mymap).bindPopup("Area");

	L.marker([-5.4199365,105.2550813]).addTo(mymap)
		.bindPopup("<b>Lucky Star Petshop</b><br />Jl. S. Parman No.8 B, Tj. Karang, Engal, Kota Bandar Lampung, Lampung 35213").openPopup();

	L.circle([-5.4199365,105.2550813], 50, {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5
	}).addTo(mymap).bindPopup("Area");

	L.marker([-5.4196101,105.2554179]).addTo(mymap)
		.bindPopup("<b>Evo Petshop</b><br />Jalan s Parman no 23b Dan c, Pelita, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35116").openPopup();

	L.circle([-5.4196101,105.2554179], 50, {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5
	}).addTo(mymap).bindPopup("Area");

	L.marker([-5.408785,105.2625945]).addTo(mymap)
		.bindPopup("<b>Paws Pet House</b><br />Jl. Hayam Wuruk No.12, Kb. Jeruk, Kec. Tj. Karang Tim., Kota Bandar Lampung, Lampung 35213").openPopup();

	L.circle([-5.408785,105.2625945], 50, {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5
	}).addTo(mymap).bindPopup("Area");

	L.marker([-5.4099674,105.2468809]).addTo(mymap)
		.bindPopup("<b>Bee Catshop</b><br />Jl. Antara, Suka Jawa, Kec. Tj. Karang Bar., Kota Bandar Lampung, Lampung 35119").openPopup();

	L.circle([-5.4099674,105.2468809], 50, {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5
	}).addTo(mymap).bindPopup("Area");

	L.marker([-5.4042212,105.2365916]).addTo(mymap)
		.bindPopup("<b>Addalu Bird Shop</b><br />Jl. Kepodang, Gedong Air, Kec. Tj. Karang Bar., Kota Bandar Lampung, Lampung 35116").openPopup();

	L.circle([-5.4042212,105.2365916], 50, {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5
	}).addTo(mymap).bindPopup("Area");

	L.marker([-5.3999943,105.2452436]).addTo(mymap)
		.bindPopup("<b>Homey Pet Store</b><br />Jl. Imam Bonjol, Gedong Air, Kec. Tj. Karang Bar., Kota Bandar Lampung, Lampung 35118").openPopup();

	L.circle([-5.3999943,105.2452436], 50, {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5
	}).addTo(mymap).bindPopup("Area");

	L.marker([-5.3983154,105.248584]).addTo(mymap)
		.bindPopup("<b>Ciko Petshop Bandar Lampung</b><br />Samping gapura, Jl. Sam Ratulangi Gg. Dahlia 3, Gedong Air, Kec. Tj. Karang Bar., Kota Bandar Lampung, Lampung 35125").openPopup();

	L.circle([-5.3983154,105.248584], 50, {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5
	}).addTo(mymap).bindPopup("Area");

	L.marker([-5.3844526,105.2708543]).addTo(mymap)
		.bindPopup("<b>Lucky Star-M Pet Shop</b><br />Jl. Ki Maja, Kedaton, Kec. Kedaton, Kota Bandar Lampung, Lampung 35132").openPopup();

	L.circle([-5.3844526,105.2708543], 50, {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5
	}).addTo(mymap).bindPopup("Area");

	L.marker([-5.3838683,105.2715222]).addTo(mymap)
		.bindPopup("<b>Toto Fish Shop</b><br />Jl. Ki Maja No.75, Way Halim Permai, Kec. Kedaton, Kota Bandar Lampung, Lampung 35135").openPopup();

	L.circle([-5.3838683,105.2715222], 50, {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5
	}).addTo(mymap).bindPopup("Area");

	L.marker([-5.3834696,105.2715256]).addTo(mymap)
		.bindPopup("<b>EVO PETS WAY HALIM</b><br />Jl. Ki Maja, Kedaton, Kec. Kedaton, Kota Bandar Lampung, Lampung 35132").openPopup();

	L.circle([-5.3834696,105.2715256], 50, {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5
	}).addTo(mymap).bindPopup("Area");

	L.marker([-5.3700558,105.274961]).addTo(mymap)
		.bindPopup("<b>HAMISH PETSHOP</b><br />Jl. Ratu Dibalau No.108, Tj. Senang, Kec. Tj. Senang, Kota Bandar Lampung, Lampung 35136").openPopup();

	L.circle([-5.3700558,105.274961], 50, {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5
	}).addTo(mymap).bindPopup("Area");

	L.marker([-5.3772964,105.2734507]).addTo(mymap)
		.bindPopup("<b>Zally aquarium</b><br />Jl. Gn. Rajabasa Raya, Perumnas Way Halim, Kec. Kedaton, Kota Bandar Lampung, Lampung 35132").openPopup();

	L.circle([-5.3772964,105.2734507], 50, {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5
	}).addTo(mymap).bindPopup("Area");

	L.marker([-5.3818748,105.2719084]).addTo(mymap)
		.bindPopup("<b>Paws Pet House</b><br />Jalan Ki Maja No. 5 Blok BB, Way Halim Permai, Way Halim, Kota Bandar Lampung, Lampung 35135").openPopup();

	L.circle([-5.3818748,105.2719084], 50, {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5
	}).addTo(mymap).bindPopup("Area");

	L.marker([-5.3820153,105.2666775]).addTo(mymap)
		.bindPopup("<b>I'm Organic Distributor (Lampung)</b><br />Jl. Raden Saleh Raya No.35, Kedaton, Kec. Kedaton, Kota Bandar Lampung, Lampung 35141").openPopup();

	L.circle([-5.3820153,105.2666775], 50, {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5
	}).addTo(mymap).bindPopup("Area");

	L.marker([-5.3828544,105.2698183]).addTo(mymap)
		.bindPopup("<b>Molania Petshop</b><br />Jl Mawar No. 22 Way Halim, Kedaton, Kec. Kedaton, Kota Bandar Lampung, Lampung 35132").openPopup();

	L.circle([-5.3828544,105.2698183], 50, {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5
	}).addTo(mymap).bindPopup("Area");





	L.polygon([
		[51.509, -0.08],
		[51.503, -0.06],
		[51.51, -0.047]
	]).addTo(mymap).bindPopup("I am a polygon.");


	var popup = L.popup();

</script>



</body>
</html>
