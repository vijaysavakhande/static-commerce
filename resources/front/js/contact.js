;(function($){
  'use strict';
  jQuery(document).ready(function($) {
    $.validate({
      form:'#frmContact',
      errorMessagePosition: 'top',
      scrollToTopOnError:false,
      validateOnBlur:false,
      onSuccess:function($form){
        var post = $form.serialize();
        $.post('/contact',post, function(data, textStatus, xhr) {
          
        },'json');
        return false;
      }
    })
    // $('#frmContact').parsley({
    //   // errorsWrapper:'<span class="parsley-error-list"></span>',
    //   // errorTemplate: '<span class="parsley-error"></span>',
    // });
  });
})(jQuery);