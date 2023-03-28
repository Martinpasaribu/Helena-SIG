<?php include "header.php"; ?>

<!-- start banner Area -->
<section class="banner-area relative" style="background: url(img/taman.jpeg); background-size: cover;">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row fullscreen align-items-center justify-content-between">
      <div class="col-lg-6 col-md-6 banner-left">
        <h6 class="text-white" style="font-family:poppins">SISTEM INFORMASI GEOGRAFIS TAMAN REKREASI</h6>
        <h1 class="text-white"  style="font-family:poppins">KOTA BANDAR LAMPUNG</h1>

        <a href="#peta_taman" class="primary-btn text-uppercase"  style="font-family:poppins;background-color:palevioletred">Lihat Detail</a>
				<a href="data_taman.php" class="primary-btn text-uppercase" style="font-family:poppins;background-color:palevioletred">Data Taman</a>
				<a href="tentangme.php" class="primary-btn text-uppercase" style="font-family:poppins;background-color:palevioletred">Info</a>
      </div>

    </div>
  </div>
  </div>
</section>
<!-- End banner Area -->


<main id="main">


  <!-- Start about-info Area -->


		<section class="price-area section-gap" style="background: url(img/pink.jpg); background-size: cover; "
		<div class="title text-center" >
          <h1 class="mb-10" style="background-color:transparent;text-align:center;border-radius:80px;color:black	;font-size:50px;font-family:poppins;padding: 10px 10px 10px 10px;" >Peta Lokasi Wisata</h1>
          <br>
    </div>>
		<section id="peta_taman" class="about-info-area section-gap" style="margin-left:380px";>
			
								<meta charset="utf-8">
								<meta http-equiv="X-UA-Compatible" content="IE=edge">
								<meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
								<meta name="mobile-web-app-capable" content="yes">
								<meta name="apple-mobile-web-app-capable" content="yes">
								<link rel="stylesheet" href="data/css/leaflet.css"><link rel="stylesheet" href="data/css/L.Control.Locate.min.css">
								<link rel="stylesheet" href="data/css/qgis2web.css"><link rel="stylesheet" href="data/css/fontawesome-all.min.css">
								<link rel="stylesheet" href="data/css/leaflet-search.css">
								<link rel="stylesheet" href="data/css/leaflet-control-geocoder.Geocoder.css">
								<link rel="stylesheet" href="data/css/leaflet-measure.css">
								<style>
								#map {
										width: 1250px;
										height: 746px;
								}
								</style>
								<title></title>
					
					
								<div id="map">
								</div>
								<script src="data/js/qgis2web_expressions.js"></script>
								<script src="data/js/leaflet.js"></script><script src="data/js/L.Control.Locate.min.js"></script>
								<script src="data/js/leaflet.rotatedMarker.js"></script>
								<script src="data/js/leaflet.pattern.js"></script>
								<script src="data/js/leaflet-hash.js"></script>
								<script src="data/js/Autolinker.min.js"></script>
								<script src="data/js/rbush.min.js"></script>
								<script src="data/js/labelgun.min.js"></script>
								<script src="data/data/js/labels.js"></script>
								<script src="data/js/leaflet-control-geocoder.Geocoder.js"></script>
								<script src="data/js/leaflet-measure.js"></script>
								<script src="data/js/leaflet-search.js"></script>
								<script src="data/data/Taman_Rekreasi_Kota_Bandar_lampung_1.js"></script>
								<script>

 
								var highlightLayer;
								function highlightFeature(e) {
										highlightLayer = e.target;

										if (e.target.feature.geometry.type === 'LineString') {
											highlightLayer.setStyle({
												color: '#ffff00',
											});
										} else {
											highlightLayer.setStyle({
												fillColor: '#ffff00',
												fillOpacity: 1
											});
										}
										highlightLayer.openPopup();
								}
								var map = L.map('map', {
										zoomControl:true, maxZoom:27, minZoom:1
								})
								var hash = new L.Hash(map);
								map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
								var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
								L.control.locate({locateOptions: {maxZoom: 19}}).addTo(map);
								var measureControl = new L.Control.Measure({
										position: 'topleft',
										primaryLengthUnit: 'meters',
										secondaryLengthUnit: 'kilometers',
										primaryAreaUnit: 'sqmeters',
										secondaryAreaUnit: 'hectares'
								});
								measureControl.addTo(map);
								document.getElementsByClassName('leaflet-control-measure-toggle')[0]
								.innerHTML = '';
								document.getElementsByClassName('leaflet-control-measure-toggle')[0]
								.className += ' fas fa-ruler';
								var bounds_group = new L.featureGroup([]);
								function setBounds() {
										if (bounds_group.getLayers().length) {
												map.fitBounds(bounds_group.getBounds());
										}
								}
								map.createPane('pane_GoogleMaps_0');
								map.getPane('pane_GoogleMaps_0').style.zIndex = 400;
								var layer_GoogleMaps_0 = L.tileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
										pane: 'pane_GoogleMaps_0',
										opacity: 1.0,
										attribution: '',
										minZoom: 1,
										maxZoom: 27,
										minNativeZoom: 0,
										maxNativeZoom: 19
								});
								layer_GoogleMaps_0;
								map.addLayer(layer_GoogleMaps_0);
								function pop_Taman_Rekreasi_Kota_Bandar_lampung_1(feature, layer) {
										layer.on({
												mouseout: function(e) {
														for (i in e.target._eventParents) {
																e.target._eventParents[i].resetStyle(e.target);
														}
														if (typeof layer.closePopup == 'function') {
																layer.closePopup();
														} else {
																layer.eachLayer(function(feature){
																		feature.closePopup()
																});
														}
												},
												mouseover: highlightFeature,
										});
										var popupContent = '<table>\
														<tr>\
																<th scope="row">id</th>\
																<td>' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
														</tr>\
														<tr>\
																<th scope="row">N_Taman</th>\
																<td>' + (feature.properties['N_Taman'] !== null ? autolinker.link(feature.properties['N_Taman'].toLocaleString()) : '') + '</td>\
														</tr>\
														<tr>\
																<th scope="row">Foto</th>\
																<td>' + (feature.properties['Foto'] !== null ? '<img src="data/images/' + String(feature.properties['Foto']).replace(/[\\\/:]/g, '_').trim() + '">' : '') + '</td>\
														</tr>\
												</table>';
										layer.bindPopup(popupContent, {maxHeight: 400,maxWidth: 800},{maxHeight: 400,maxWidth: 800});
								}

								function style_Taman_Rekreasi_Kota_Bandar_lampung_1_0() {
										return {
												pane: 'pane_Taman_Rekreasi_Kota_Bandar_lampung_1',
								rotationAngle: 0.0,
								rotationOrigin: 'center center',
								icon: L.icon({
										iconUrl: 'data/markers/logo.png',
										iconSize: [40.12, 40.12]
								}),
												interactive: true,
										}
								}
								map.createPane('pane_Taman_Rekreasi_Kota_Bandar_lampung_1');
								map.getPane('pane_Taman_Rekreasi_Kota_Bandar_lampung_1').style.zIndex = 401;
								map.getPane('pane_Taman_Rekreasi_Kota_Bandar_lampung_1').style['mix-blend-mode'] = 'normal';
								var layer_Taman_Rekreasi_Kota_Bandar_lampung_1 = new L.geoJson(json_Taman_Rekreasi_Kota_Bandar_lampung_1, {
										attribution: '',
										interactive: true,
										dataVar: 'json_Taman_Rekreasi_Kota_Bandar_lampung_1',
										layerName: 'layer_Taman_Rekreasi_Kota_Bandar_lampung_1',
										pane: 'pane_Taman_Rekreasi_Kota_Bandar_lampung_1',
										onEachFeature: pop_Taman_Rekreasi_Kota_Bandar_lampung_1,
										pointToLayer: function (feature, latlng) {
												var context = {
														feature: feature,
														variables: {}
												};
												return L.marker(latlng, style_Taman_Rekreasi_Kota_Bandar_lampung_1_0(feature));
										},
								});
								bounds_group.addLayer(layer_Taman_Rekreasi_Kota_Bandar_lampung_1);
								map.addLayer(layer_Taman_Rekreasi_Kota_Bandar_lampung_1);
								var osmGeocoder = new L.Control.Geocoder({
										collapsed: true,
										position: 'topleft',
										text: 'Search',
										title: 'Testing'
								}).addTo(map);
								document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
								.className += ' fa fa-search';
								document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
								.title += 'Search for a place';
								setBounds();
								var i = 0;
								layer_Taman_Rekreasi_Kota_Bandar_lampung_1.eachLayer(function(layer) {
										var context = {
												feature: layer.feature,
												variables: {}
										};
										layer.bindTooltip((layer.feature.properties['id'] !== null?String('<div style="color: #DD2AC8; font-size: 10pt; font-family: \'Open Sans\', sans-serif;">' + layer.feature.properties['id']) + '</div>':''), {permanent: true, offset: [-0, -16], className: 'css_Taman_Rekreasi_Kota_Bandar_lampung_1'});
										labels.push(layer);
										totalMarkers += 1;
											layer.added = true;
											addLabel(layer, i);
											i++;
								});
								map.addControl(new L.Control.Search({
										layer: layer_Taman_Rekreasi_Kota_Bandar_lampung_1,
										initial: false,
										hideMarkerOnCollapse: true,
										propertyName: 'N_Taman'}));
								document.getElementsByClassName('search-button')[0].className +=
								' fa fa-binoculars';
								resetLabels([layer_Taman_Rekreasi_Kota_Bandar_lampung_1]);
								map.on("zoomend", function(){
										resetLabels([layer_Taman_Rekreasi_Kota_Bandar_lampung_1]);
								});
								map.on("layeradd", function(){
										resetLabels([layer_Taman_Rekreasi_Kota_Bandar_lampung_1]);
								});
								map.on("layerremove", function(){
										resetLabels([layer_Taman_Rekreasi_Kota_Bandar_lampung_1]);
								});
								</script>


</section>

		</section>
 
  
  <!-- End testimonial Area -->


  <?php include "footer.php"; ?>
