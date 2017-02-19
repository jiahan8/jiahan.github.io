
$ar;


    function changeImage(dir) {
 
        var img = $(".imgBig").attr('src');
        var str = img.replace( "http://localhost", "..").replace("%20", " ");

        var index = $ar.indexOf(str);
  // alert(index);

        // get prev/next img src
        var nextimgpath = $ar[  index + (dir) ];
 // alert(nextimgpath);
        

        // checking if it is video, if yes, just stop (X display)
        var checkextension = /(?:\.([^.]+))?$/;
        var getextension = checkextension.exec(nextimgpath)[1];

// var ext = re.exec("file.name.with.dots.txt")[1];   // "txt"
// var ext = re.exec("file.txt")[1];                  // "txt"
// var ext = re.exec("file")[1];                      // undefined
// var ext = re.exec("")[1];                          // undefined
// var ext = re.exec(null)[1];                        // undefined
// var ext = re.exec(undefined)[1];                   // undefined

// (?:         # begin non-capturing group
//   \.        #   a dot
//   (         #   begin capturing group (captures the actual extension)
//     [^.]+   #     anything except a dot, multiple times
//   )         #   end capturing group
// )?          # end non-capturing group, make it optional
// $           # anchor to the end of the string


        if( getextension!=="mp4" ){


        // assign new src
        $('.imgBig').attr('src',  nextimgpath );        
        var imgpath = $('.imgBig').src;
// alert(imgpath);
        
        
        }


   // alert('image changed'); // for debug
    } // end changeImage

    document.onkeydown = function(e) {
        e = e || window.event;
        if (e.keyCode == '37') {
        
    // alert("left"); // for debug
        
            changeImage(-1); //left <- show Prev image

     // alert("left 2");

        } else if (e.keyCode == '39') {
            // right -> show next image

        
    // alert("right"); // for debug

            changeImage(1);

     // alert("right 2");
        }


  // alert('done'); // for debug

    };



    // function changeImage(dir) {
    //     var img = document.getElementsByClassName("imgBig");
    //     img.src = jsArray[jsArray.indexOf(img.src) + (dir || 1)] || jsArray[dir ? jsArray.length - 1 : 0];
    // }

    // document.onkeydown = function(e) {
    //     e = e || window.event;
    //     if (e.keyCode == '37') {
    //         changeImage(-1); //left <- show Prev image
    //     } else if (e.keyCode == '39') {
    //         // right -> show next image
    //         changeImage();
    //     }
    // };


