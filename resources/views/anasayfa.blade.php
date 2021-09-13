<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('back/')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('back/')}}/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary mt-1" id="divimiz" style="background-color:#fff;background-image:none;">
    

    
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="col-xl-10 col-lg-12 col-md-9" >
                    <div class="row mb-3">
                        
                        <div class="col-lg-3"><a href="{{route('admin.dashboard')}}" class="btn btn-success"> Yenile</a></div>
                        <div class="col-lg-7"></div>
                        
                         <div class="col-lg-2"><a href="{{route('admin.logout')}}" class="btn btn-success"> Çıkış Yap</a></div>
                        
                    </div>
                    
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Mesajlaşma </label><br/>
                      
                        <table id="example" class="display overflow-auto" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Kullanıcı Adı</th>
                                        <th>Mesaj</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($messages as $message)
                                    <tr>
                                        <td>{{$message->senderinfo->name}}</td>
                                        <td>{{$message->content}}</td>
                                        
                                    </tr>

                                   @endforeach

                                  
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Kullanıcı Adı</th>
                                        <th>Mesaj</th>
                                        
                                    </tr>
                                </tfoot>
                            </table>
                      <form id="gonderilenform">
                      @csrf
                             <h2 for="exampleFormControlTextarea1">Mesajınız </h2>
                        <textarea class="form-control" name="content" id="txtText" rows="3"></textarea>
                      </div>
                      <a  id="btn"  class="btn btn-primary btn-user btn-block">
                                            Gönder
                        </a>
                    </form>
                    <div class="alert alert-success" style="display:none;" id="succ"></div> 
                        

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('back/')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('back/')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('back/')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('back/')}}/js/sb-admin-2.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
        $('#example').DataTable();

    } );
        $('#example').dataTable( {
          "lengthMenu": [ 5, 10, 50, 75, 100 ],
           "ordering": false,
          "language":{
          "url":"//cdn.datatables.net/plug-ins/1.10.12/i18n/Turkish.json",

        }
} );
        


    </script>

    <script type="text/javascript">
        
    $(document).ready(function () {
        var KarakterSayisi = 0;
        $("#btn").hide();
        $("#txtText").keyup(function () {
            KarakterSayisi = $("#txtText").val().length;
            if(KarakterSayisi>10){
                $("#btn").show();
            }
            if(KarakterSayisi<=10){
                $("#btn").hide();
            }
        });
      
    });
</script>
<script type="text/javascript">
    $(document).on('click','#btn',function(e) {

        
        let content = $("textarea[name=content]").val();
        let _token   = $('meta[name="csrf-token"]').attr('content'); 
        $.ajax({
        url: "{{route('message.post',Auth::user()->id)}}",
        type:"POST",
        data:{
          content:content,
          _token: _token
        },
        success:function(response) {
         $('#succ').show();
        $('#succ').html(response);
        setTimeout(function() { $("#succ").hide(); }, 1500);
        $("#gonderilenform").trigger("reset");               
        },
        error:function (response) {
          alert(response.responseJSON.errors.content);
          window.location.reload()
        }
        
       });
        
    })
    

</script>


</body>

</html>