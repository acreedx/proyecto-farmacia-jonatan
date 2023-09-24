let map;

const image = "../imagenes/farmacia.png";

function initMap() {
  map = new google.maps.Map(
    document.getElementById("map"), {
      center: { lat: -16.4976840786208, lng: -68.14986257880348 },
      zoom: 18,
      maxZoom: 19,
      minZoom: 17,
      streetViewControl: false
  });

  new google.maps.Marker({
    position: { lat: -16.4976840786208, lng: -68.14986257880348 },
    map,
    title: "Farmacia",
    icon: image,
  });
}

window.initMap = initMap;
