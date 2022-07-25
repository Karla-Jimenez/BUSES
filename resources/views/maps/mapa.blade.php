<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">
    <meta name="author" content="Parzibyte">
    <title>mapa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <main role="main" class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <p id="estado"></p>
                <a href="https://parzibyte.me/blog"></a>
            </div>
            <div class="col-12">
                <div id="mapa" style="min-height: 500; height: 600px;"></div>
            </div>
        </div>
    </main>
    <script type="text/javascript" src="js/ol.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?key={{ env('AIzaSyDYSTkbL3Cq6ajRoDRFbpWnEL-tL0sj0sU') }}&callback=initMap" ></script>
    <script>
      const init = () => {
    if (!"geolocation" in navigator) {
        return alert("Tu navegador no soporta el acceso a la ubicación. Intenta con otro");
    }

    const ZOOM = 15;
    let mapa = null, marcador = null;
    const $estado = document.querySelector("#estado");
    const formateador = new Intl.DateTimeFormat('es-MX', { dateStyle: 'medium', timeStyle: 'medium' });
    const formatearFecha = fecha => formateador.format(fecha);

    const onActualizacionDeUbicacion = ubicacion => {
        const coordenadas = ubicacion.coords;
        let { latitude, longitude } = coordenadas;

        const icono = "ubicacion.png";
        if (!mapa) {
            // Primera vez, lo creamos y centramos
            mapa = new ol.Map({
                target: 'mapa', // el id del elemento en donde se monta
                layers: [
                    new ol.layer.Tile({
                        source: new ol.source.OSM()
                    })
                ],
                view: new ol.View({
                    center: ol.proj.fromLonLat([longitude, latitude]),
                    zoom: ZOOM,
                })
            });
            marcador = new ol.Feature({
                geometry: new ol.geom.Point(
                    ol.proj.fromLonLat([longitude, latitude])
                ),
            });
            marcador.setStyle(new ol.style.Style({
                image: new ol.style.Icon(({
                    src: icono,
                    scale: 0.5, // Aquí puedes ampliar o disminuir la imagen
                })),
            }));
            const ultimaCapa = new ol.layer.Vector({
                source: new ol.source.Vector({
                    features: [marcador],
                }),
            });
            mapa.addLayer(ultimaCapa);
        }
        // Actualización de ubicación
        mapa.getView().setCenter(ol.proj.fromLonLat([longitude, latitude]));
        marcador.getGeometry().setCoordinates(ol.proj.fromLonLat([longitude, latitude]));
        const fecha = formatearFecha(new Date(ubicacion.timestamp));
        const registro = `Última actualización: ${fecha} en ${latitude},${longitude}`;
        console.log(registro);
        $estado.textContent = registro;
    }

    const onErrorDeUbicacion = err => {
        console.log("Error obteniendo ubicación: ", err);
    }


    const opcionesDeSolicitud = {
        enableHighAccuracy: true, // Alta precisión
        maximumAge: 0, // No queremos caché
        timeout: 5000 // Esperar solo 5 segundos
    };

    idWatcher = navigator.geolocation.watchPosition(onActualizacionDeUbicacion, onErrorDeUbicacion, opcionesDeSolicitud);
}
init();
    </script>
</body>

</html>