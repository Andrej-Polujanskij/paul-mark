(function($) {
  "use strict";
  $(document).on('ready', function() {
    //Home page



    //Form checkbox
    $('label').change(function() {
      let chekInput = document.querySelector('#p_policy').checked;
      if (chekInput == !false) {
        $(this).find('.checkbox-dot').toggleClass('checked');
      } else {
        $(this).find('.checkbox-dot').toggleClass('checked');
      }
    });

    $( ".submit_btn" ).click(function() {
      let chekInput = document.querySelector('#p_policy').checked;
  
      if(chekInput == !true){
          $('.checkbox-dot').css({'border': '2px solid red'});
      }else{
          $('.checkbox-dot').css({'border': ' 2px solid #c2b9ac'});
       }
  
  }); 
  
  $('#p_policy').change(function(){
    let chekInput = document.querySelector('#p_policy').checked;
  
      if(chekInput == true){
          $('.checkbox-dot').css({'border': ' 2px solid #c2b9ac'});
      }else{
          $('.checkbox-dot').css({'border': '2px solid red'});
       }
  });


      // Form validation
    $("#contact-form").validate({
      errorPlacement: function() {
        return false; // suppresses error message text
      },
      errorClass: 'error-validation-class'
    });
    $.validator.addClassRules({
      required: {
        required: true
      },
      requiredemail: {
        required: true,
        email: true
      },
      minSeven: {
        required: true,
        minlength: 7
      },
      mintnine: {
        required: true,
        minlength: 9
      }
    });

    //Form sending
    $(document).on('submit', '#contact-form', function(event) {
      event.preventDefault();

      $('.spinner').fadeIn();
      $('.blur').fadeIn();
      var formData = new FormData(this);
      formData.append('action', 'send_contact_form_message');

      jQuery.ajax({
        url: variables.ajaxUrl,
        data: formData,
        processData: false,
        contentType: false,
        type: 'POST',

        success: function(data) {
          // console.log(data);

          $('.spinner').fadeOut();
          $('.blur').fadeOut();

          var inputValue = document.querySelectorAll('.inputText');
          for (var i = 0; i < inputValue.length; i++) {
            inputValue[i].value = '';
          }
          $('.checkbox-dot').toggleClass('checked');
          $('input:checkbox').removeAttr('checked');

        }
      });
    });

    //Mobile menu
    $('#hamburger1').change(function(){
      let chekInput = document.querySelector('#hamburger1').checked;

      // let myUL = $('.mobile-menu nav ul')
      // console.log(myUL.children().length);
      // for (let i = 1; i <= myUL.children().length; i++) {
      //      let delTime = 0.35 + (i * 0.07)
   
      //   $(`.mobile-menu nav ul li:nth-child(${i})`).css(`transition-delay`, `${delTime}s`)
        
      // }
    
        if(chekInput == true){
            $('.mobile-menu').toggleClass('display-block');
            $('html').toggleClass('overflow-fidden');
            // $('.head-contact').toggleClass('onShow');
            // myUL.children().toggleClass('onShow');
        }else{
            $('.mobile-menu').toggleClass('display-block');
            $('html').toggleClass('overflow-fidden');
            // $('.head-contact').toggleClass('onShow');
            // myUL.children().toggleClass('onShow');
         }
    });

 

  });
})(jQuery);