<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 {{ csrf_field() }}
 
                <div class="form-group">
                    <label for="">Lokasi Pengiriman</label>
                    
                    {!! Form::select('id_province',[''=>'--- Pilih Provinsi ---']+$provinces,null,['class'=>'form-control','required']) !!}

                    </div>
                    <div class="form-group">
                        <label>Pilih Kabupaten/Kota:</label>
                        {!! Form::select('id_regencies',[''=>'--- Pilih Kabupaten/Kota ---'],null,['class'=>'form-control','required']) !!}
                    </div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script type="text/javascript">
    $("select[name='id_province']").change(function(){
        var id_province = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "<?php echo route('select-ajax') ?>",
            method: 'POST',
            data: {id_province:id_province, _token:token},
            success: function(data) {
              $("select[name='id_regencies'").html('');
              $("select[name='id_regencies'").html(data.options);
            }
        });
    });
  </script>
</body>
</html>