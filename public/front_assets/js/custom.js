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

$(".storeCart").on('submit', function(e){
    //alert('123');
    console.log(123);
    //return false;
  e.preventDefault();
  //processData: false,  
  // contentType: false,
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
       //  setTimeout(function(){
       //   window.location.reload(1);
       // }, 1000);
       console.log(data.count);
      $('#card_count').text(data.count);  
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
var total_price = 0;
var colCount_value = 0;
$('#order_table tbody tr').each(function () {
 colCount_value++;
 var price = $('#order_table tbody tr:nth-child('+colCount_value+') td:nth-child(3) p').text();
 total_price = parseInt(total_price) + parseInt(price);        
}); 
$('.total_price_value span').text(total_price);  
$('.total_price_value_input').val(total_price);  

$(".quantity_value").bind('keyup mouseup', function () {
    var value = $(this).closest('tr').find('.price_value .price').val(); 
    var sum = parseInt(value) * parseInt($(this).val());           
    $(this).closest('tr').find('.price_value p').text(sum);

    var total_price = 0;
    var colCount_value = 0;
    $('#order_table tbody tr').each(function () {
     colCount_value++;
     var price = $('#order_table tbody tr:nth-child('+colCount_value+') td:nth-child(3) p').text();
     total_price = parseInt(total_price) + parseInt(price);        
    });

    console.log(total_price); 
    $('.total_price_value span').text(total_price);
    $('.total_price_value_input').val(total_price);   

    var data_message = $(this).attr('data-message');
    $('#quantity_'+data_message).val($(this).val());         
});
