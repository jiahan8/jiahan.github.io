

jQuery(document).ready(function(){
    // posts
    jQuery('.ajaxform_post').submit( function() {

        $.ajax({
            url     : $(this).attr('action'),
            type    : $(this).attr('method'),
            data    : $(this).serialize(),
            success : function( data ) {
                         //alert('Form is successfully submitted');  

                         // empty the form     
                         $('.ajaxform_post')[0].reset();
                        
                        // display posts without reload the page
                        $(".content_news").load("DisplayPosts.php");
                      
                      },
            error   : function(){
                         alert('Something wrong');
                      }
        });

        return false;
    });
    // jQuery('').( function() {

    //     $.ajax({
    //         // url     : $(this).attr('action'),
    //         // type    : $(this).attr('method'),
    //         // data    : $(this).serialize(),
    //         success : function( data ) {
    //                      //alert('Form is successfully submitted');  

    //                      // empty the form     
    //                      // $('.ajaxform_post_sort_date')[0].reset();
                        
    //                     // display posts without reload the page
    //                     $(".content_news").load("DisplayPosts.php");
                      
    //                   },
    //         error   : function(){
    //                      alert('Something wrong');
    //                   }
    //     });

    //     return false;
    // });

// $("#sort_date_form").ajaxForm({url: 'DisplayPosts.php', type: 'post'})


    // upload files
    // jQuery('.ajaxform_post2').submit( function() {

    //     $.ajax({
    //         url     : $(this).attr('action'),
    //         type    : $(this).attr('method'),
    //         data    : $(this).serialize(),
    //         success : function( data ) {
    //                      //alert('Form is successfully submitted');  

    //                      // empty the form     
    //                      // $('.ajaxform_post2')[0].reset();
                        
    //                     // display posts without reload the page
    //                     alert("testingtesting");
    //                     // $(".displayfilesdiv").load("DisplayFiles.php");
    //                     alert("testing2");
    //                   },
    //         error   : function(){
    //                      alert('Something wrong');
    //                   },
    //         target  : ".displayfilesdiv";

    //     });

    //     return false;
    // });

    
    // $('#fileToUpload').live('change', function()
    // {
    //   // $("#preview").html('');
    //   // $("#preview").html('<img src="loader.gif" alt="Uploading...."/>');
    //   $(".ajaxform_post2").ajaxForm(
    //   {
    //     target: '.displayfilesdiv'
    //   }).submit();
    // });


      // jQuery('.ajaxform_signup').submit( function() {

    //     $.ajax({
    //         url     : $(this).attr('action'),
    //         type    : $(this).attr('method'),
    //         data    : $(this).serialize(),
    //         success : function( data ) {
    //                      alert('You have Join !!!');  

    //                      // empty the form     
    //                      $('.ajaxform_signup')[0].reset();
                        
    //                     // display posts without reload the page
    //                     $(document).load("Enter.php");
                      
    //                   },
    //         error   : function(){
    //                      alert('username already exists, use other username');
    //                   }
    //     });

    //     return false;
    // });


});





      // $(function () {

      //   $('#sort_date_form').on('submit', function (e) {

      //     e.preventDefault();

      //     $.ajax({
      //       type: 'post',
      //       url: 'DisplayPosts.php',
      //       data: $('form').serialize(),            
      //       // data: $(this).serialize(),
      //       // data: $('button').attr('name'),
      //       success: function (d) {
      //         alert('form was submitted');


      //         console.log(d);


      //                   $(".content_news").load("DisplayPosts.php");
      //       }
      //     });

      //   });

      // });




