$("#contactForm").on('submit', function(e){
  e.preventDefault();
  var formData = $(this).serialize();
  $.ajaxSetup({
    headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
  });
  $.ajax({
    type: $(this).attr('method'),
    url: $(this).attr('action'),
    data: formData,
    success: function (data) {
      console.log(data);
      if(data.status == 200){
        alertify.success(data.msg);
        setTimeout(function(){
         window.location.reload(1);
       }, 1000);
      }else if(data.status == 202){
        alertify.warning(data.msg);
      }else{
        alertify.warning(data.array.errorInfo[2]);
      }
    },
    error: function (data) {
      alertify.warning("Oops. something went wrong. Please try again");
    }
  });
});