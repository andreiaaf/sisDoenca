let map;
let infoWindow;
$(function() {

    BuscaDados($('#ano').val(), $('#tipoSintoma').val());
});

$('#ano').on('change', function() {

    BuscaDados($('#ano').val(), $('#tipoSintoma').val());
});


$('#tipoSintoma').on('change', function() {

    BuscaDados($('#ano').val(), $('#tipoSintoma').val());
});


function BuscaDados(ano, tipo) {

    $.ajax({
        method: "POST",
        url: "../php/query/buscaMapaSintomas.php",

        data: {
            ano: ano,
            tipo: tipo
        },
        dataType: "JSON",

        success: function(response) {
            // console.log(response.Valores);
            infoWindow = new google.maps.InfoWindow();
            map = new google.maps.Map(document.getElementById("map"), {
                zoom: 14,
                center: { lat: -23.3916596, lng: -46.3502797 },
                mapTypeId: "terrain",
            });

            for (var x = 0; x < response.Valores.length; x++) {

                var qtd = response.Valores[x].qtd;
                var nome = response.Valores[x].nome;
                const cityCircle = new google.maps.Circle({
                    strokeColor: "#FF0000",
                    strokeOpacity: 0.8,
                    strokeWeight: 2,
                    fillColor: "#FF0000",
                    fillOpacity: 0.35,
                    map,
                    center: { lat: Number(response.Valores[x].latitude), lng: Number(response.Valores[x].longetude) },
                    radius: Math.sqrt(Number(response.Valores[x].qtd)) * 100
                });
                cityCircle.addListener('click', function(e) {
                    infoWindow.setContent(nome + " - Quantidade pessoas com sintoma:" + qtd);
                    infoWindow.setPosition(this.getCenter());
                    infoWindow.open(map);
                });
            }

        }
    });



}