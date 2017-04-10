@extends('layout.master')

@section('content')



<div id = 'msg'>This message will be replaced using Ajax. 
         Click the button to replace the message.</div>
     
         {!! Form::button('Replace Message',['onClick'=>'getMessage()']); !!} 
     


 <script>
		 $(document).ready(function(){
		  $.ajaxSetup({
		    headers: {
		      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		  });
		});
		 
         function getMessage(){
            $.ajax({
               type:'POST',
               url:'/tutorial/ajax/message',
               data:'_token = <?php echo csrf_token() ?>',
               success:function(data){
                  $("#msg").html(data.msg);
               }
            });
         }
</script>


@endsection