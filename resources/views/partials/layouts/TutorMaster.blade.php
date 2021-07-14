<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Tutor | Dashboard </title>
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="http://localhost:8000/plugins/fontawesome-free/css/all.min.css">
        <!-- Font Flaticon -->
        <link rel="stylesheet" href="http://localhost:8000/plugins/flaticon/font/flaticon.css">
        <link rel="stylesheet" href="http://localhost:8000/plugins/flaticon/font/flaticon-sprites.svg">
        <!-- IonIcons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Font Flaticon -->
        <link rel="stylesheet" href="http://localhost:8000/plugins/flaticon/threedots/flaticon.css">
        <link rel="stylesheet" href="http://localhost:8000/plugins/flaticon/threedots/flaticon-sprites.svg">
        <!-- Font Flaticon -->
        <link rel="stylesheet" href="http://localhost:8000/plugins/flaticon/students/flaticon.css">
        <link rel="stylesheet" href="http://localhost:8000/plugins/flaticon/students/flaticon-sprites.svg">
        <!-- daterange picker -->
        <link rel="stylesheet" href="http://localhost:8000/plugins/daterangepicker/daterangepicker.css">
        <!-- iCheck for checkboxes and radio inputs -->
        <link rel="stylesheet" href="http://localhost:8000/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Bootstrap Color Picker -->
        <link rel="stylesheet" href="http://localhost:8000/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="http://localhost:8000/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="http://localhost:8000/dist/css/adminlte.min.css">
        <!-- SweetAlert2 -->
        <link rel="stylesheet" href="http://localhost:8000/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
        <!-- Toastr -->
        <link rel="stylesheet" href="http://localhost:8000/plugins/toastr/toastr.min.css">
        
        <script src="http://localhost:8000/customJs/myapp1.js"></script>
        
        <!-- dropzonejs -->
        <link rel="stylesheet" href="http://localhost:8000/plugins/dropzone/min/dropzone.min.css">

       
    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 7px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #a7a7a7;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #929292;
        }

        ul {
            margin: 0;
            padding: 0;
        }

        li {
            list-style: none;
        }

        .user-wrapper, .message-wrapper {
            border: 1px solid #dddddd;
            overflow-y: auto;
        }

        .user-wrapper {
            height: 600px;
        }

        .user {
            cursor: pointer;
            padding: 5px 0;
            position: relative;
        }

        .user:hover {
            background: #eeeeee;
        }

        .user:last-child {
            margin-bottom: 0;
        }

        .pending {
            position: absolute;
            left: 13px;
            top: 9px;
            background: #b600ff;
            margin: 0;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            line-height: 18px;
            padding-left: 5px;
            color: #ffffff;
            font-size: 12px;
        }

        .media-left {
            margin: 0 10px;
        }

        .media-left img {
            width: 64px;
            border-radius: 64px;
        }

        .media-body p {
            margin: 6px 0;
        }

        .message-wrapper {
            padding: 10px;
            height: 536px;
            background: #eeeeee;
        }

        .messages .message {
            margin-bottom: 15px;
        }

        .messages .message:last-child {
            margin-bottom: 0;
        }

        .received, .sent {
            width: 45%;
            padding: 3px 10px;
            border-radius: 10px;
        }

        .received {
            background: #ffffff;
        }

        .sent {
            background: #28a745;
            color: white;
            float: right;
            text-align: right;
        }

        .message p {
            margin: 5px 0;
        }

        .date {
            color: white;
            font-size: 12px;
        }

        .active {
            background: #eeeeee;
        }

        #input {
            width: 100%;
            padding: 12px 20px;
            margin: 15px 0 0 0;
            display: inline-block;
            border-radius: 4px;
            box-sizing: border-box;
            outline: none;
            border: 1px solid #cccccc;
        }

        #input:focus {
            border: 1px solid #aaaaaa;
        }
    </style>
        
    </head>
    <body class="hold-transition sidebar-mini sidebar-collapse ">
        <div class="wrapper">
            @include('partials.tutor.tutorNavebar')
            @include('partials.tutor.tutorSidebar')
            @yield('content')
            @include('partials.footer')
        </div>
        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src="http://localhost:8000/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="http://localhost:8000/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE -->
        <script src="http://localhost:8000/dist/js/adminlte.js"></script>
        <!-- OPTIONAL SCRIPTS -->
        <script src="http://localhost:8000/plugins/chart.js/Chart.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="http://localhost:8000/dist/js/demo.js"></script>
        <!-- DataTables  & Plugins -->
        <script src="http://localhost:8000/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="http://localhost:8000/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="http://localhost:8000/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="http://localhost:8000/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="http://localhost:8000/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="http://localhost:8000/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="http://localhost:8000/plugins/jszip/jszip.min.js"></script>
        <script src="http://localhost:8000/plugins/pdfmake/pdfmake.min.js"></script>
        <script src="http://localhost:8000/plugins/pdfmake/vfs_fonts.js"></script>
        <script src="http://localhost:8000/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="http://localhost:8000/plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="http://localhost:8000/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="http://localhost:8000/dist/js/pages/dashboard3.js"></script>
        
        
        <!-- Select2 -->
        <script src="http://localhost:8000/plugins/select2/js/select2.full.min.js"></script>
        <!-- Bootstrap4 Duallistbox -->
        <script src="http://localhost:8000/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
        <!-- InputMask -->
        <script src="http://localhost:8000/plugins/moment/moment.min.js"></script>
        <script src="http://localhost:8000/plugins/inputmask/jquery.inputmask.min.js"></script>
        <!-- date-range-picker -->
        <script src="http://localhost:8000/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="http://localhost:8000/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- dropzonejs -->
        <script src="http://localhost:8000/plugins/dropzone/min/dropzone.min.js"></script>
        <!-- SweetAlert2 -->
        <script src="http://localhost:8000/plugins/sweetalert2/sweetalert2.min.js"></script>
        <!-- Toastr -->
        <script src="http://localhost:8000/plugins/toastr/toastr.min.js"></script>

        <!-- Meeting Liberary -->
        
        <script src='https://farooq.hopto.org/external_api.js'></script>
        <script src="https://js.pusher.com/7.0/pusher.min.js"></script>

        <!-- Function for  table top buttons in Registered Courses -->
        <script type="text/javascript">
        $(function () {
        $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        });
        });
        
        //Timepicker
        $('#timepicker').datetimepicker({
        format: 'LT'
        })
        $('#timepicker1').datetimepicker({
        format: 'LT'
        })
        $('.pro').on('click', function(){
        
        pro_addRow();
        });
        function pro_addRow(){
        var tr ='<tr>'+
            
            '<td><input  class="form-control" type="text"  placeholder="Add Professional Membership" name="pro[]"></td>'+
            '<td><a href="#" onclick="event.preventDefault()" class="btn btn-danger pro_remove">Remove</a></td>'+
            
        '</tr>';
        $('.pro-tbody').append(tr);
        };
        $('tbody').on('click', '.pro_remove', function(){
        $(this).parent().parent().remove();
        });
        </script>
        <script>
        $(function() {
        var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
        });
       
        $('.toastrDefaultSuccess').click(function() {
        toastr.success('Course Registered Successfully.')
        });
       $('.toastsDefaultDanger').click(function() {
      $(document).Toasts('create', {
        class: 'bg-danger',
        icon: 'success',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Course Registered Successfully.'
      })
    });
        
        });

        $('.friend').click(function(e) {
        e.preventDefault();
        })


        /* Jitsi Meet Function*/


            
        </script>

         <script>
    $(function() {
        $('#btnStart').on('click', function() {
            StartMeeting();
        });
    });
    </script>

    <script>
        
    var receiver_id = '';
    var my_id = "{{ Auth::id() }}";
    $(document).ready(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('334c20687dd692e1ddb3', {
            cluster: 'ap2',
            forceTLS: true,
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function (data) {
            // alert(JSON.stringify(data));
            if (my_id == data.from) {
                $('#' + data.to).click();
            } else if (my_id == data.to) {
                if (receiver_id == data.from) {
                    // if receiver is selected, reload the selected user ...
                    $('#' + data.from).click();
                } else {
                    // if receiver is not seleted, add notification for that user
                    var pending = parseInt($('#' + data.from).find('.pending').html());

                    if (pending) {
                        $('#' + data.from).find('.pending').html(pending + 1);
                    } else {
                        $('#' + data.from).append('<span class="pending">1</span>');
                    }
                }
            }
        });

        $('.user').click(function () {
            $('.user').removeClass('active');
            $(this).addClass('active');
             $(this).find('.pending').remove();

            receiver_id = $(this).attr('id');
            $.ajax({
                type: "get",
                url: "message/" + receiver_id, // message is route
                data: "",
                cache: false,

                success: function (data)
                {
                    $('#messages').html(data);
                    scrollToBottomFunc();
                }
            });
        });

        $(document).on('keyup', '.input-text input', function (e) {

            var message = $(this).val();

            // check if enter key is pressed and message is not null also receiver is selected
            if(e.keyCode== 13 && message != '' && receiver_id != '') {
                $(this).val(''); //while enter press text box will be empty

                var datastr = "receiver_id=" + receiver_id + "&message=" + message;
                $.ajax({
                    type:"post",
                    url: "message", //create this POST route
                    data: datastr,
                    cache: false,
                    success: function (data) {

                    },
                    error: function (jqXHR, status, err){

                    },
                    complete: function() {
                        scrollToBottomFunc();
                    },
                });
            }
        });


    });

        // make a function to scroll down auto
    function scrollToBottomFunc() {
        $('.message-wrapper').animate({
            scrollTop: $('.message-wrapper').get(0).scrollHeight
        }, 50);
    }
    </script>
    </body>
</html>