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
 
            console.log('res', res);
      }
    });

    return false;

  });


});