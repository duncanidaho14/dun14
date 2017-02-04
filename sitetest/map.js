$(function() {
    $("#map").googleMap();
    $("#map").addMarker({
      coords: [36.811728, 2.982867], // GPS coords
      zoom: 10,
      url: 'http://www.handlycafe.dz', // Link to redirect onclick (optional)
      id: 'marker1' // Unique ID for your marker
    });
});


/* Détecte iOS & ANDROID */
function detectBrowser() {
  var useragent = navigator.userAgent;
  var mapdiv = document.getElementById("map");

  if (useragent.indexOf('iPhone') != -1 || useragent.indexOf('Android') != -1 ) {
    mapdiv.style.width = '100%';
    mapdiv.style.height = '100%';
  } else {
    mapdiv.style.width = '600px';
    mapdiv.style.height = '800px';
  }
}