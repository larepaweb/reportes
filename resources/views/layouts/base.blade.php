<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Metas -->

    <link rel="apple-touch-icon" sizes="57x57" href="../assets/img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../assets/img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../assets/img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../assets/img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../assets/img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../assets/img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../assets/img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon-16x16.png">
    <link rel="manifest" href="../assets/img/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../assets/img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>
        Dex Data Expert
    </title>
    <!-- Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <link href="../assets/css/svgicons.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css" rel="stylesheet" />
    <!-- Alpine -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>




        {{-- datatables --}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
{{--
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> --}}



    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.0.3/css/dataTables.dateTime.min.css">



    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdn.datatables.net/datetime/1.0.3/js/dataTables.dateTime.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>

     <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>


    <link rel=”stylesheet” href=" https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 {{-- fullcalendar --}}
    <script src='https://cdn.jsdelivr.net/npm/moment@2.27.0/min/moment.min.js'></script>
    {{-- <link href='../assets/css/fullcalendar/main.css' rel='stylesheet' /> --}}
    {{-- <script src='../assets/js/fullcalendar/main.js'></script> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" integrity="sha512-KXkS7cFeWpYwcoXxyfOumLyRGXMp7BTMTjwrgjMg0+hls4thG2JGzRgQtRfnAuKTn2KWTDZX4UdPg+xTs8k80Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    {{-- <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/moment@5.5.0/main.global.min.js'></script> --}}

    <style>
        .kbw-signature { width: 100%; height: 150px;}
        #sig canvas{
            width: 100% !important;
            height: 170px;
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>


    <script>
        $(document).ready(function () {

            var SITEURL = "{{ url('/') }}";

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var calendar = $('#calendar').fullCalendar({

                buttonText:{    today:    'Hoy',
                                month:    'mes',
                                week:     'semana',
                                day:      'día',
                                list:     'lista'},
                monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
                dayNames: ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
                dayNamesShort: ['Dom','Lun','Mar','Mié','Jue','Vie','Sáb'],
                editable: true,
                events: SITEURL + "/activities",
                displayEventTime: true,
                eventRender: function (event, element, view) {
                    if (event.allDay === 'true') {
                        event.allDay = true;
                    } else {
                        event.allDay = false;
                    }
                },
                selectable: true,
                selectHelper: true,
                // select: function (event_start, event_end, allDay) {
                //     var event_name = prompt('Nombre de actividad:');
                //     if (event_name) {
                //         var event_start = $.fullCalendar.formatDate(event_start, "Y-MM-DD HH:mm:ss");
                //         var event_end = $.fullCalendar.formatDate(event_end, "Y-MM-DD HH:mm:ss");
                //         $.ajax({
                //             url: SITEURL + "/fullcalenderAjax",
                //             data: {
                //                 event_name: event_name,
                //                 event_start: event_start,
                //                 event_end: event_end,
                //                 type: 'create'
                //             },
                //             type: "POST",
                //             success: function (data) {
                //                 displayMessage("Actividad creada.");

                //                 calendar.fullCalendar('renderEvent', {
                //                     id: data.id,
                //                     title: event_name,
                //                     start: event_start,
                //                     end: event_end,
                //                     allDay: allDay
                //                 }, true);
                //                 calendar.fullCalendar('unselect');
                //             }
                //         });
                //     }
                // },
                eventDrop: function (event, delta) {

                     console.log(event);

                     var event_start = $.fullCalendar.formatDate(event.start, "YY-MM-DD");
                     var event_end = event.start.add(1, "h").format("YY-MM-DD");

                    $.ajax({
                        url: SITEURL + '/fullcalenderAjax',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            title: event.title,
                            start: event_start,
                            end: event_end,
                            id: event.id,
                            type: 'update'
                        },
                        type: "POST",
                        success: function (response) {
                            calendar.fullCalendar('refetchEvents');


                            Swal.fire('Actividad Actualizada');


                            displayMessage("Event updated");
                        }
                    });
                },
                // eventClick: function (event) {

                //     var eventDelete = confirm("Seguro que desea eliminar la actividad");

                //     if (eventDelete) {
                //         $.ajax({
                //             type: "POST",
                //             url: SITEURL + '/fullcalenderAjax',
                //             data: {
                //                 "_token": "{{ csrf_token() }}",
                //                 id: event.id,
                //                 type: 'delete'
                //             },
                //             success: function (response) {
                //                 calendar.fullCalendar('removeEvents', event.id);
                //                 displayMessage("Event removed");
                //             }
                //         });
                //     }
                // }
                eventClick: function (event) {

                    window.location.href = SITEURL + '/edittask/' + event.id;
                }
            });

            var calendar = $('#calendarTecni').fullCalendar({

                buttonText:{    today:    'Hoy',
                                month:    'mes',
                                week:     'semana',
                                day:      'día',
                                list:     'lista'},
                monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
                dayNames: ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
                dayNamesShort: ['Dom','Lun','Mar','Mié','Jue','Vie','Sáb'],
                editable: true,
                events: SITEURL + "/activitiesTecni",
                displayEventTime: true,
                eventRender: function (event, element, view) {
                    if (event.allDay === 'true') {
                        event.allDay = true;
                    } else {
                        event.allDay = false;
                    }
                },
                selectable: true,
                selectHelper: true,
                // select: function (event_start, event_end, allDay) {
                //     var event_name = prompt('Nombre de actividad:');
                //     if (event_name) {
                //         var event_start = $.fullCalendar.formatDate(event_start, "Y-MM-DD HH:mm:ss");
                //         var event_end = $.fullCalendar.formatDate(event_end, "Y-MM-DD HH:mm:ss");
                //         $.ajax({
                //             url: SITEURL + "/fullcalenderAjax",
                //             data: {
                //                 event_name: event_name,
                //                 event_start: event_start,
                //                 event_end: event_end,
                //                 type: 'create'
                //             },
                //             type: "POST",
                //             success: function (data) {
                //                 displayMessage("Actividad creada.");

                //                 calendar.fullCalendar('renderEvent', {
                //                     id: data.id,
                //                     title: event_name,
                //                     start: event_start,
                //                     end: event_end,
                //                     allDay: allDay
                //                 }, true);
                //                 calendar.fullCalendar('unselect');
                //             }
                //         });
                //     }
                // },
                eventDrop: function (event, delta) {

                     console.log(event);

                     var event_start = $.fullCalendar.formatDate(event.start, "YY-MM-DD");
                     var event_end = event.start.add(1, "h").format("YY-MM-DD");

                    $.ajax({
                        url: SITEURL + '/fullcalenderAjaxTecni',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            title: event.title,
                            start: event_start,
                            end: event_end,
                            id: event.id,
                            type: 'update'
                        },
                        type: "POST",
                        success: function (response) {
                            calendar.fullCalendar('refetchEvents');


                            Swal.fire('Actividad Actualizada');


                            displayMessage("Event updated");
                        }
                    });
                },
                // eventClick: function (event) {

                //     var eventDelete = confirm("Seguro que desea eliminar la actividad");

                //     if (eventDelete) {
                //         $.ajax({
                //             type: "POST",
                //             url: SITEURL + '/fullcalenderAjax',
                //             data: {
                //                 "_token": "{{ csrf_token() }}",
                //                 id: event.id,
                //                 type: 'delete'
                //             },
                //             success: function (response) {
                //                 calendar.fullCalendar('removeEvents', event.id);
                //                 displayMessage("Event removed");
                //             }
                //         });
                //     }
                // }
                eventClick: function (event) {

                    window.location.href = SITEURL + '/edittask/' + event.id;
                }
            });

        });

    </script>

    {{-- fileinput --}}
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/> --}}
    <style type="text/css">
        .main-section{
            margin:0 auto;
            padding: 20px;
            margin-top: 100px;
            background-color: #fff;
            box-shadow: 0px 0px 20px #c1c1c1;
        }
        .fileinput-remove,
        .fileinput-upload{
            display: none;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    @livewireStyles

    <link id="pagestyle" href="../assets/css/reportes.css" rel="stylesheet" />

</head>

<body class="g-sidenav-show bg-gray-100">

    {{ $slot }}

    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }

    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.2"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.js" integrity="sha512-+ruHlyki4CepPr07VklkX/KM5NXdD16K1xVwSva5VqOVbsotyCQVKEwdQ1tAeo3UkHCXfSMtKU/mZpKjYqkxZA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>

 {{-- table to json --}}

    <script src="https://cdn.jsdelivr.net/npm/table-to-json@1.0.0/lib/jquery.tabletojson.min.js" integrity="sha256-H8xrCe0tZFi/C2CgxkmiGksqVaxhW0PFcUKZJZo1yNU=" crossorigin="anonymous"></script>



    <link type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script type="text/javascript" src="../assets/pad/jquery.signature.js"></script>

    <script type="text/javascript" src="../assets/pad/jq-signature.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../assets/pad/jquery.signature.css">


    <script>

        $("#file-1").fileinput({
            theme: 'fa',
            uploadUrl: "/image-view",
            uploadExtraData: function() {
                return {
                    _token: $("input[name='_token']").val(),
                };
            },
            allowedFileExtensions: ['jpg', 'png', 'gif', 'wav','ogg', '3gpp', 'mp3', 'mkv', 'aac', 'mp4', '3gp'],
            overwriteInitial: false,
            maxFileSize:5000,
            maxFilesNum: 1,
            slugCallback: function (filename) {
                return filename.replace('(', '_').replace(']', '_');
            }
        });

        $('.js-signature').jqSignature();



        // var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
        //     $('#clear').click(function(e) {
        //         e.preventDefault();
        //         sig.signature('clear');
        //         $("#signature64").val('');
        //     });



    </script>

    @livewireScripts

    @include('sweetalert::alert')

</body>

</html>
