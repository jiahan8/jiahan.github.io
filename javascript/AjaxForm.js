

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
    


});

