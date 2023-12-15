$(function(){


 console.log('hello');

 //form Submit
  $("form").submit(function(){ 

    var formData = new FormData($(this)[0]); 
    formData.append('formId', $(this).attr('id'));

    $.ajax({
      url: 'controller.php',
      type: 'POST',
      data: formData,
      async: false,
      cache: false,
      contentType: false,
      enctype: 'multipart/form-data',
      processData: false,
      beforeSend: function(){ },
      success: function (res) {
 
           location.href = 'order.php';
      }
    });

    return false;

  });



  $(".t-input").click(function(){

    let value = $(this).val();
    let position = 0;
    for (let i=0; i<value.length; i++){
      if(value[i] === "_") {
        position = i;
        break;
      }
      position = i+1;
    }

    $(this).setCursorPosition(position);
  });

  $.fn.setCursorPosition = function(pos) {
    if ($(this).get(0).setSelectionRange) {
      $(this).get(0).setSelectionRange(pos, pos);
    } else if ($(this).get(0).createTextRange) {
      var range = $(this).get(0).createTextRange();
      range.collapse(true);
      range.moveEnd('character', pos);
      range.moveStart('character', pos);
      range.select();
    }
  };

});