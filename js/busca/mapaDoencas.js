let map;
let infoWindow;
$(function() {

    BuscaDados($('#ano').val(), $('#tipoDoenca').val());



})

$('#ano').on('change', function() {

    BuscaDados($('#ano').val(), $('#tipoDoenca').val());
});


$('#tipoDoenca').on('change', function() {

    BuscaDados($('#ano').val(), $('#tipoDoenca').val());
});


function BuscaDados(ano, tipo) {
    $('#anoEvol').text(ano);
    $('#totaldes').empty();
    $.ajax({
        method: "POST",
        url: "../php/query/buscaMapaDoencas.php",

        data: {
            // ano: ano,
            // tipo: tipo
        },
        dataType: "JSON",

        success: function(response) {
            console.log(response);
            //     infoWindow = new google.maps.InfoWindow();
            //     map = new google.maps.Map(document.getElementById("map"), {
            //      zoom: 12,
            //      center: { lat: -23.3916596, lng: -46.3502797 },
            //      mapTypeId: "terrain",
            //     });

            //    // Construct the circle for each value in citymap.
            //    // Note: We scale the area of the circle based on the population.
            //    for (const city in citymap) {
            //      // Add the circle for this city to the map.
            //      const cityCircle = new google.maps.Circle({
            //        strokeColor: "#FF0000",
            //        strokeOpacity: 0.8,
            //        strokeWeight: 2,
            //        fillColor: "#FF0000",
            //        fillOpacity: 0.35,
            //        map,
            //        center: citymap[city].center,
            //        radius: Math.sqrt(citymap[city].population) * 100,
            //      });


            //      cityCircle.addListener('click', function(e) {
            //        console.log(e);
            //        console.log(this);
            //        infoWindow.setContent("Quantidade pessoas doentes:" + this.getRadius());
            //        infoWindow.setPosition(this.getCenter());
            //        infoWindow.open(map);
            //      });
            //    }
            //    window.initMap = initMap;
        }
    });
}