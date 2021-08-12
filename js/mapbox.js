mapboxgl.accessToken =
  "pk.eyJ1IjoiZ29tbWkiLCJhIjoiY2s0YjZ6aWt2MGF0aDNtbXhsZWwxbGlnOSJ9.pCsu9C-0cBmFLBc1n9ivxw";
var map = new mapboxgl.Map({
  container: "map",
  style: "mapbox://styles/mapbox/streets-v11",
  center: [15.1151, 46.361], // starting position [lng, lat]
  zoom: 17, // starting zoom
});
map.addControl(new mapboxgl.NavigationControl());

var geojson = {
  type: "FeatureCollection",
  features: [
    {
      type: "Feature",
      geometry: {
        type: "Point",
        coordinates: [15.1151, 46.361],
      },
      properties: {
        title: "DAMIS-D d.o.o.",
        description: "Elektromontaza",
      },
    },
  ],
};
// add markers to map
geojson.features.forEach(function (marker) {
  // create a HTML element for each feature
  var el = document.createElement("div");
  el.className = "marker";

  // make a marker for each feature and add to the map
  new mapboxgl.Marker(el)
    .setLngLat(marker.geometry.coordinates)
    .setPopup(
      new mapboxgl.Popup({ offset: 25 }) // add popups
        .setHTML(
          "<h3>" +
            marker.properties.title +
            "</h3><p>" +
            marker.properties.description +
            "</p>"
        )
    )
    .addTo(map);
});
