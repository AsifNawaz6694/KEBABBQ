var map;
  $(document).ready(function(){
    map = new GMaps({
      el: '#map',
      lat: 25.284271,
      lng: 51.511073
    });
    map.addMarker({
      lat: 25.284271,
      lng: 51.511073,
    });
  });