<!DOCTYPE html>
<html>

<head> 
<title> Message </title> 
<link href = "../css/Message.css" type="text/css" rel="stylesheet" />
<link href="webImage/ks.ico" width=10px />
<link rel="stylesheet" href="../jquery-ui-1.12.0.custom/jquery-ui.min.css"/>


<!-- <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> -->

<!-- <link rel="stylesheet" href="css/jquery.nouislider.css" type="text/css" />
 -->
<!-- <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css"/> -->
<!-- <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css"> -->

</head>

<body>

<!-- <marquee> This is My Website </marquee>
 -->
<div class="scroll-left">
<p> This is My Website </p>
</div>


<div id="topbar" align="center">
<!-- <p class=""> -->
  <!-- <li class="dropdown"> -->
  <!-- <p  > -->
    <!-- <li class="dropdown"> -->
      <!-- <a href="" class="dropbtn">$$$</a> -->
      <!-- </li> -->
  <!-- </p> -->
  <!-- <p  > -->
    <!-- <li class="dropdown"> -->
      <a href="" class="dropbtn">Home Page</a>
      <!-- </li> -->
  <!-- </p> -->



      <!-- <div class="dropdown-content">       -->
        <!-- <a href="#otherfiles" >today</a> -->
        <!-- <a href="#otherfiles" ></a> -->
  <!-- </li> -->
<!-- </p> -->
<!-- <p class=""> -->
  <!-- <li class="dropdown"> -->
      <!-- <input id="filter-search" type="text" placeholder="Search Anything" results=6  name="search bar"    /> -->
  <!-- </li> -->
<!-- </p> -->
<!-- music -->
<!-- <div id="listenmusicDiv"> -->
<!-- <div     > -->
<!-- <p class="alignleft" align="right"> -->
  

<!-- </p> -->
<!-- </div> -->
<!-- <p class=""> -->
  <!-- <li class="dropdown"> -->
      <!-- <a href="Upload.php"  target="_blank" class="dropbtn">Share</a> -->
  <!-- </li> -->
<!-- </p> -->
<!-- <p class=""> -->
  <!-- <li class="dropdown"> -->
      <!-- <a href="Join.php"  target="_blank"  class="dropbtn">Join</a> -->
      <!-- <a href="Enter.php"  target="_blank"  class="dropbtn">Enter</a> -->
  <!-- </li> -->
<!-- </p> -->
</div>
<br>



<!-- background image -->
<!-- <br> -->
<div class="parallaxdemo" ></div>
<br>



<!-- upload -->
<!-- <div id="upload_and_music"> -->
<div id="uploadDiv"   align="center" >
<!-- <form  align="center" action="TestingUpload.php" method="post" enctype="multipart/form-data"> -->
    <!-- Upload Anything<br><br> -->
    <!-- <input class="fileButtt" type="file" name="fileToUpload" id="fileToUpload" onchange="preview_image(event)" multiple size="20" >
    <input class="uploadButtt" type="submit" name="submit" value="Upload">
</form> -->
<!-- <br> -->
<!-- </div> -->
  <!-- <input id="filter-search" type="text" placeholder="Search Anything" results=6  name="search bar"    /> -->

<form align="" id="signupform"  action="SavePosts.php"  method="post"    class="ajaxform_post"  >
    <!-- <label for="photo categories">Categories: </label><br> -->

    <!-- <label for="photo notes">Notes: </label><br> -->
    <textarea id="notesID"  type="text" name="just_post_it" placeholder="write notes..." value="" title="describe the photo/video, separate with comma"></textarea>
    <!-- <br> -->
<!-- <textarea id="categoriesID"  type="text" name="photo categories" placeholder="categories/tags" value="" title="set categories of the photo/video, separate with comma"    ></textarea><br> -->

<!-- <form  align="center" action="TestingUpload.php" method="post" enctype=""  class="ajaxform_post2"> -->

<!-- original upload -->
         <!-- <input class="fileButtt" type="file" name="fileToUpload1" id="fileToUpload1"     onchange="preview_image(event)"   multiple size="20" > -->

          <!-- <input class="uploadButtt" type="submit" name="submit" value="Upload">   -->
        

        <!-- </div>   -->
        <!-- <a href="#otherfiles" ></a> -->
          <!-- </form> -->

  <br>
  <br>
    <button id="buttonID"  type="submit"   value="GO" >Go</button><br>  <!-- placeholder="Register" -->
    <!-- <br> -->
</form>
</div>
<!-- <p><a class="p" href="" title="r u kiding me ?">Forget Password</a></p> -->

<!-- <div id="preview_and_upload"> -->
<!--   <div id="previewID" align="left">
  <img id="preview_img" />
</div> -->
<!-- <div id="preview_img" > -->
<!-- </div> -->
<!-- </div> -->
<!-- <br> -->
<!-- <br> -->


<!-- <div  id="searchDiv"> -->
  <!-- <input type="text" placeholder="Search Anything" results=6  name="search bar" /> -->
  <!-- <div id="searchResults" ></div> -->
<!-- </div> -->
<!-- <div  id="searchDiv">
  <input type="text" placeholder="Search: " id="filter-search"  results=6  name="search bar" />
  <div id="searchResults" ></div>
</div> -->


<!-- <div class="content_chat">
dfsdfsdfsdf
</div>
 -->




<!-- news / posts / trending / -->
<div class="bethebest">
<p class="alignleft">
  <li class="dropdown">
      <a class="dropbtn"   id="news_id"  >News</a>
      <!-- <div class="dropdown-content">       -->
        <!-- <a href="#otherfiles" >today</a> -->
        <!-- <a href="#otherfiles" ></a> -->
  </li>
</p>
<!-- <p > -->
  <!-- <li class="dropdown"> -->
      <!-- <a  class="dropbtn">Trending</a>
      <div class="dropdown-content">      
        <a  >nostalgic</a>
        <a  >music</a>
        <a  >photos/videos</a>
        <a  >topics</a>        
        <a  >other</a>
      </div> -->
        <!-- <a href="#otherfiles" ></a> -->
  <!-- </li> -->
<!-- </p> -->



<p >
  <li class="dropdown">


    <form  id="sort_date_form"  name="newssortdate"  method="post"  action=""   class="ajaxform_post_sort_date"  >
      <a   type="submit"  name="news_alltime"  id="news_alltime_id"   class="dropbtn">All time</a>
      <!-- <a   id="news_alltime_id"   class="dropbtn">All time</a> -->
      <div class="dropdown-content">      

        <!-- <a   type="submit"  name="news_today"  id="news_today_id"   onclick="document.getElementById('sort_date_form').submit()"  >today</a> -->
        <button   type="submit"  name="news_newest"  id="news_today_id"   value="aaa"  >Newest First</button>
        <!-- <br>     -->
        <button   type="submit"  name="news_today"  id="news_today_id"   value="aaa"  >Today</button>
        <!-- <br>      -->
        <button   type="submit"  name="news_week"  id="news_today_id"   value="aaa"  > This Week</button>
        <!-- <br>      -->
        <button   type="submit"  name="news_month"  id="news_today_id"   value="aaa"  >This Month</button>
        <!-- <br>      -->
        <button   type="submit"  name="news_year"  id="news_today_id"   value="aaa"  >This Year</button>
        <!-- <br>      -->
        <button   type="submit"  name="news_oldest"  id="news_today_id"   value="aaa"  >Oldest First</button>
        <!-- <br>      -->
        <!-- <a   href="javascript:{}"  type="submit"  name="news_today"  id="news_today_id"   value="aaa"   onclick="form.submit();" >today</a>     
        <a   type="submit"  name="news_week"  id="news_today_id"   value="aaa"  onclick="$(this).closest('form').submit(); return false;" >week</a>     
        <a   type="submit"  name="news_month"  id="news_today_id"   value="aaa"  onclick="$(this).closest('form').submit(); return false;" >month</a>     
        <a   type="submit"  name="news_year"  id="news_today_id"   value="aaa"  onclick="$(this).closest('form').submit(); return false;" >year</a>  -->

        <!-- <a   type="submit"  name="news_thisweek"  id="news_thisweek_id"  >this week</a> -->
        <!-- <a   type="submit"  name="news_thismonth"  id="news_thismonth_id"  >this month</a> -->
        <!-- <a   type="submit"  name="news_thisyear"  id="news_thisyear_id"  >this year</a>       -->
      </div>  
        <!-- <a href="#otherfiles" ></a> -->
    </form>

  </li>
</p>


 <!--  <p  >
  <li class="dropdown">
      <a      class="dropbtn">Radio</a>
      <div class="dropdown-content">      
        <a  >
            <input class="" id="music-search" type="text" placeholder="Listen now" results=6  name="search bar" />
        </a> -->
        <!-- <a id="music-search-results" ></a> -->
<!--         <?php
        $dirname = "../UploadFiles/";
        $audios =  glob("$dirname*.{mp3}" , GLOB_BRACE);
        //$images =  glob("{$dirname}*.png, {$dirname}*.jpeg, {$dirname}*.gif, {$dirname}*.jpg");
        // echo '<div id="audioDiv">';
          $num = 0;
        foreach($audios as $music) {
          // echo ' '.basename($audios[$num] , '.mp3').' ';
          // echo '<a href="#otherfiles" >'.basename($audios[$num] , '.mp3').'
          echo '<a  >
                '.basename($audios[$num] , '.mp3').'<br> -->
   <!--              <audio   controls loop  src="'.$music.'" /> 
                </audio>
                </a>';
          $num++;
        }
        // echo '</div>';
        ?>
      </div>
  </li>
</p> -->
<!-- <p   >
  <li class="dropdown">
      <a      class="dropbtn">Videos</a>
      <div class="dropdown-content">      
        <a >
            <input class="" id="video-search" type="text" placeholder="Watch now" results=6  name="search bar" />
        </a> -->
        <!-- <a id="music-search-results" ></a> -->
<!--         <?php
        $dirname = "../UploadFiles/";
        $videos =  glob("$dirname*.{mp4}" , GLOB_BRACE);
        //$images =  glob("{$dirname}*.png, {$dirname}*.jpeg, {$dirname}*.gif, {$dirname}*.jpg");
        // echo '<div id="audioDiv">';
          $num1 = 0;
                    echo '<div id="instantvideo">';
        foreach($videos as $video) {
          echo '<a  >
              '.basename($videos[$num1] , '.mp4').'<br><br> -->
   <!--              <video      class="hovervideocontrols"     id="video_yeah"       loop   preload="auto" src="'.$video.'#t=03" type="video/mp4"  >
                </video>
                </br>
                </a>';
          $num1++;
        }
        echo '<br></div>';
          // echo '</br><a id="showmoreinstantvideo" > show more </a></br>';        
        ?>
      </div>
      <!-- </div> -->
  <!-- </li> -->
<!-- </p> -->
<!--  <p   >
  <li class="dropdown">
      <a      class="dropbtn">Photos</a>
      <div class="dropdown-content">    -->   
        <!-- <a > -->
            <!-- <input class="" id="photo-search" type="text" placeholder="View now" results=6  name="search bar" /> -->
        <!-- </a> -->
        <!-- <a id="music-search-results" ></a> -->
        <!-- <?php
        $dirname = "../UploadFiles/";
        $images =  glob("$dirname*.{jpg,jpeg,gif,png}" , GLOB_BRACE);
        //$images =  glob("{$dirname}*.png, {$dirname}*.jpeg, {$dirname}*.gif, {$dirname}*.jpg");
        // echo '<div id="audioDiv">';
          $num2 = 0;
                    echo '<div id="instantphoto">';
        foreach($images as $image) {
          echo '<a  >
                <img     id="yeah_img"  src="'.$image.'"  >
                </img>
                </a>';
          $num2++;
        }
        echo '</div>';
        echo '<br>';
          // echo '</br><a id="showmoreinstantvideo" > show more </a></br>';        
        ?> -->
      <!-- </div> -->
      <!-- </div> -->
 <!--  </li>
</p> -->


<!--   <input class="searchthings" id="news-search" type="text" placeholder="Search anything on news..." results=6  name="search bar" /> -->
<br><br>

<p>
  <li class="dropdown">
      <!-- <a class="dropbtn" id="movingT"> -->
        
        <?php
  
        // $datetime = date("Y-m-d h:i:sa");

        // echo "Now is " . $datetime . "<br>";
        // date_default_timezone_set('America/Los_Angeles');
        // $datetime = date_default_timezone_get();

        // if (strcmp($datetime, ini_get('date.timezone'))){
        //     echo 'Script timezone differs from ini-set timezone.';
        // } else {
        //     echo 'Script timezone and ini-set timezone match.';
        // }

        // $datedate = strtotime("+2 hours", "date_default_timezone_set()" );


        // date_default_timezone_set('America/Chicago'); // CDT
        // $current_datetime = date("Y-m-d h:i:s a");
        
        // echo "Now is " .$current_datetime. "<br>";
        // echo "Now is " .date_default_timezone_get(). "<br>";



        ?>

      <!-- </a> -->
  </li>
</p>


</div>
<!-- <p class="alignleft">
  <li class="dropdown">
      <a href="#yeah" class="dropbtn">Music</a>
      <div class="dropdown-content">      
        <a href="#otherfiles" >
            <input class="searchthings" type="text" placeholder="Listen now" results=6  name="search bar" />
        </a>
  </li>
</p>
<p class="alignleft">
  <li class="dropdown">
      <a href="#yeah" class="dropbtn">Videos/Photos</a>
      <div class="dropdown-content">      
        <a href="#otherfiles" >
            <input class="searchthings" type="text" placeholder="View now" results=6  name="search bar" />
        </a>
  </li>
</p> -->
<!-- <br> -->
<!-- <br> -->
<!-- <br> -->
<!-- <div class="mergediv"> -->
<div class="content_news"  align="">

    <!-- <p class="content_news_news_count"></p> -->


    <?php include "DisplayPosts.php" ?>

  <!-- auto load scroll posts   -->
  <!-- <input type="hidden" id="row_no" value="10"> -->


    <p class="content_news_news"> i want to eat salmon !!!  i want to eat salmon !!!  i want to eat salmon !!!  i want to eat salmon !!!  i want to eat salmon !!!  i want to eat salmon !!!  i want to eat salmon !!!  i want to eat salmon !!!  i want to eat salmon !!!  i want to eat salmon !!!  i want to eat salmon !!!  i want to eat salmon !!!</p>
    <p class="content_news_news"> whats new </p>
    <p class="content_news_news"> show anything show anything show anything show anything show anything show anything show anything</p>
    <p class="content_news_news"> whats going on now </p>
    <p class="content_news_news"> this is the best website ever !!!</p>
    <p class="content_news_news"> this is the best website ever !!! this is the best website ever !!! this is the best website ever !!! this is the best website ever !!! this is the best website ever !!! this is the best website ever !!! this is the best website ever !!!</p>

    <!-- <h6 id="showmorenews"> show more news</h6> -->
    
</div>
<!-- <div class="content_news"  align="">
    <p class="content_news_news"> whats going on now </p>
    <p class="content_news_news"> this is the best website ever !!!</p>
    <p class="content_news_news"> this is the best website ever !!! this is the best website ever !!! this is the best website ever !!! this is the best website ever !!! this is 
</p>
</div> -->
<!-- </div> -->
<!-- <br> -->
<br>


<!-- message -->
<!-- <div>
<p class="alignleft">
  <li class="dropdown">
      <a    class="dropbtn"   id="message_id">Message Box</a> -->
      <!-- <div class="dropdown-content">       -->
        <!-- <a href="#otherfiles" >categories</a> -->
        <!-- <a href="#otherfiles" ></a> -->
<!--   </li>
  <li class="dropdown">
      <a  class="dropbtn">Human</a>
  </li>
</p> -->
<!-- <p    class="allsearchbar" align="right"> -->
<!-- <input class="searchthings" type="text" placeholder="Search messages" results=6  name="search bar" size="4" /> -->
<!-- </p> -->
<!-- <br><br> -->
  <!-- <div class="content_message"> -->

  <!-- <?php include "MessageDisplayAllUsers.php" ?> -->

    <!-- <p class="content_message_message"> post to public </p> -->
    <!-- <p class="content_message_message" > people - whos online</p> -->
    <!-- <p class="content_message_message"> people - whos nearby</p> -->

    <!-- <p class="content_message_message" > whos online</p> -->
    <!-- <p class="content_message_message"> whos nearby</p> -->

  <!-- </div> -->
<!-- </div> -->
<!-- <br> -->

<!-- <div>
  <p>All files</p>
</div>
<br> -->


<!-- activities -->
<!-- <div> -->
<!-- <div> -->
<!-- <p class="alignleft"> -->
  <!-- <li class="dropdown"> -->
      <!-- <a   class="dropbtn"   id="activity_id" >Your Activity</a> -->
      <!-- <div class="dropdown-content">       -->
        <!-- <a href="#otherfiles" >categories</a> -->
        <!-- <a href="#otherfiles" ></a> -->
  <!-- </li> -->
<!-- </p> -->
<!-- <p > -->
  <!-- <li class="dropdown"> -->
      <!-- <a href="#yeah" class="dropbtn">Other's Activities</a> -->
      <!-- <a  class="dropbtn">Human</a>       -->
      <!-- <div class="dropdown-content">       -->
        <!-- <a href="#otherfiles" >categories</a> -->
        <!-- <a href="#otherfiles" ></a> -->
<!--   </li>
</p>
<p >
  <li class="dropdown">
      <a href="#yeah" class="dropbtn">All time</a>
      <div class="dropdown-content">      
        <a href="#otherfiles" >today</a>
        <a href="#otherfiles" >this week</a>
        <a href="#otherfiles" >this month</a>
        <a href="#otherfiles" >this year</a>         -->
        <!-- <a href="#otherfiles" ></a> -->
  <!--     </div>
  </li>
</p> -->
<!-- <p   class="allsearchbar"  align="right"> -->
  <!-- <input class="searchthings" type="text" placeholder="Search activities" results=6  name="search bar" /> -->
<!-- </p> -->
<!-- </div> -->
  <!-- <br> -->
  <!-- <br> -->
  <!-- <br> -->


<!-- <div class="content_activity"> -->
  


<!--   <p class="content_activity_activity" > sb is viewing your photos/videos/profile now - time (link)</p>
  <p class="content_activity_activity" > sb is viewing sb photos/videos/profile now - time </p>
  <p class="content_activity_activity" > sb likes/shares your photos/videos/profile now - time (link)</p>
  <p class="content_activity_activity" > sb is following sb now</p>
  <p class="content_activity_activity" > sb is unfollowing sb now</p>
  <p class="content_activity_activity" > sb saw ur message but doesnt reply - time (link)</p>
  <p class="content_activity_activity" > sb is messaging with sb now - time </p>
  <p class="content_activity_activity" > sb is posting sth - time</p>
  <p class="content_activity_activity" > sb is listening sth now</p>
  <p class="content_activity_activity" > sb spent ...time on photos/videos/profiles</p>
  <p class="content_activity_activity" > sb spent ...time on ...music</p>
  <p class="content_activity_activity" > sb spent ...time on sth...</p>

</div>

</div>
 -->



<div>

<p   class="alignleft"   >
  <li class="dropdown">
      <a  id="showall_id" class="dropbtn"> Show All </a>
      <div  id="allyeahyeah"  class="dropdown-content">
        <!-- <a id="showall_id" href="#otherfiles" >Show All</a> -->
        <a id="videos_id"  >Videos</a>
        <a id="musics_id"  >Musics</a>
        <a id="pictures_id"  >Pictures</a>
        <a id="animated_id"  >Animation</a>
        <!-- <a class="" href="#otherfiles" >Small Images</a> -->
        </div>
        <!-- <a href="#otherfiles" ></a> -->
  </li>
</p>

<!-- <p   >
  <li class="dropdown"> -->
      <!-- <a href="#yeah" class="dropbtn">Most Views/Top Rankings</a> -->
<!--       <a  class="dropbtn">Popular</a>      
      <div class="dropdown-content">      
        <a  >photos</a>
        <a  >music</a>
        <a  >videos</a>
        <a  >other files</a>
        <a  >posts</a>
        <a  >profiles</a>        
        <a  >show all viewers</a> -->
        <!-- <a href="#otherfiles" ></a> -->
      <!--   </div>
  </li>
</p> -->
<!-- <p >
  <li class="dropdown">
      <a  class="dropbtn">Categories</a>
      <div class="dropdown-content">      
        <a  >sweet</a>
        <a  >sports</a>
        <a  >sexy</a> -->
        <!-- <a href="#otherfiles" ></a> -->
      <!--   </div>
  </li>
</p> -->


<!-- <p >
  <li class="dropdown">
      <a  id="showall_id" class="dropbtn"> Favorite </a>
      <div  id="allyeahyeah"  class="dropdown-content"> -->
        <!-- <a id="showall_id" href="#otherfiles" >Show All</a> -->
        <!-- <a id="videos_id"  >Videos</a> -->
        <!-- <a id="musics_id"  >Musics</a> -->
        <!-- <a id="pictures_id"  >Photos</a> -->
        <!-- <a id="animated_id"  >Others</a> -->
        <!-- <a class="" href="#otherfiles" >Small Images</a> -->
        <!-- </div> -->
        <!-- <a href="#otherfiles" ></a> -->
  <!-- </li>
</p> -->

<!-- <p >
  <li class="dropdown">
      <a href="#yeah" class="dropbtn">All time</a>
      <div class="dropdown-content">      
        <a href="#otherfiles" >today</a>
        <a href="#otherfiles" >this week</a>
        <a href="#otherfiles" >this month</a>
        <a href="#otherfiles" >this year</a>      
      </div>   -->
        <!-- <a href="#otherfiles" ></a> -->
  <!-- </li> -->
<!-- </p> -->
<p  >
<!-- <form  align="center" action="TestingUpload.php" method="post" enctype="multipart/form-data"  class="ajaxform_post2"> -->
    <!-- Upload Anything<br><br> -->
      <li class="dropdown">
      <a  class="dropbtn">Share</a>
      <div class="dropdown-content">
        <form  align="center" action="TestingUploadDemo.php" method="post" enctype="multipart/form-data"  class="ajaxform_post2">
          <input class="fileButtt" type="file" name="fileToUpload" id="fileToUpload" onchange="preview_image(event)" multiple size="20" />
          <input class="uploadButtt" type="submit" name="submit" value="Upload" />  
        <!-- </div>   -->
        <!-- <a href="#otherfiles" ></a> -->
        </form>
      </div>
      </li>
<!-- </form> -->
</p>
<!-- <p class="allsearchbar"> -->
  <!-- <input id="media-search" class="searchthings" type="text" placeholder="Search files/categories" results=6  name="search bar" /> -->
<!-- </p> -->
<!-- </div> -->
<br>


<!-- all files -->
<div class="displayfilesdiv">
<?php include "DisplayFilesDemo.php" ?>
</div>

<br>
<div id="overlay"></div>
<div id="overlayImage">
    <img class="imgBig" src="" alt=""     /> <!-- width="400" -->
    <!-- <p > amazing notes here </p>
    <form align="" id="postForm"  action="SavePostMessage.php"  method="post"  class="ajaxform_post"  >    
      <textarea class="postArea" type="text" name=""  placeholder="comments here... (thats a ok idea)"  value=""  title="say anything" ></textarea>
      <br>
      <button id="postBtt"  type="submit"  value="GO" >Comment now</button><br>
    </form>
    <p > comments area here </p> -->

    <?php 
    // include "HitCounter.php" 
    ?>
    <p class="imgBigNotes" > </p>
    <p class="imgBigFavorite" ></p>


</div>
<div id="overlayVideo">
    <video class="vidBig" src="" alt="" /></video>
</div>
<div id="overlayAudio">
    <audio class="audBig" src="" alt="" /></audio>
</div>

<!-- </div> -->
<br>

<!-- send message -->
<div id="overlayMessage"></div>
<div id="overlayContentMessage">
  <form align="" id="messageForm"  action="SaveMessage.php"  method="post"    class="ajaxform_post"  >
    <input class="messageInput" placeholder="anyone" /> <!-- width="400" -->
    <br>
    <textarea class="messageArea" type="text" name="send_message"  placeholder="hey want to play now?"  value=""  title="send anything" ></textarea>
    </br>
    <!-- <input class="messageSend" /> -->
    <button id="messageBtt"  type="submit"   value="GO" >Send now</button><br>  <!-- placeholder="Register" -->
  </form>
</div>



<p id="showmorecontent">Show More</p>
<p id="showlesscontent">Show Less</p>
<!-- <button id="showmorecontent" value="Show More">Show More</button> -->
<!-- <button id="showlesscontent" value="Show Less">Show Less</button> -->


<!-- background image -->
<br>
<div class="parallax2" ></div>



<br>
<br>
<br>
<br>
<br>
<br>


<!-- footer -->
<div class="footer">
<p> &#169; Creator: Jia Han &#160; &#160;</p>
</div>



<?php
$dir = "/UploadFilesDemo/";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      echo "filename:" . $file . "<br>";
    }
    closedir($dh);
  }
}
?>








<!-- mouseover video controls -->
<script>
// var video1 = document.getElementsByClassName("hovervideocontrols");
// $(video1).on({
//     mouseenter: function () {
//       video1.setAttribute("controls","controls")
//     },
//     mouseleave: function () {
//       video1.removeAttribute("controls");
//     }
// });
</script>
<!-- or -->

<!-- //    var video1 = '<?php   //echo   $videoclass; ?>';
// $("*").hover(function toggleControls() {
//     if (this.hasAttribute("controls")) {
//         this.removeAttribute("controls");
//     } else {
//         this.setAttribute("controls", "controls");
//     }
// }); -->



<script>
  // var video = document.getElementsByClassName("hovervideocontrols");
//     var video = document.getElementsByClassName("hovervideocontrols");

// function toggleControls1() {
//     // var video = document.getElementsByClassName("hovervideocontrols");

//   if (video.hasAttribute("controls")) {
//      // video.removeAttribute("controls")   
//   } else {
//      video.setAttribute("controls","controls")   
//   }
//   // video.setAttribute("controls", "controls");

// }
     // video1.setAttribute("controls","controls")   

</script>
<script>
  // var video = document.getElementsByClassName("hovervideocontrols");

//     var video = document.getElementById("video_yeah");

// function toggleControls2() {
//   video.removeAttribute("controls");

// }  
</script>




<!-- preview upload image -->
<script>
function preview_image(event){
  var reader = new FileReader();
  reader.onload = function(){
    var output = document.getElementById('preview_img');
    output.src = reader.result;
  }
    reader.readAsDataURL(event.target.files[0]);
}
</script>
<script>
 function preview_all_files(event){
    for (var i = 0 ; i <= hasNext(); i++) {
      
    }
 }
</script>


<script>
//   $(window).scroll(function() {
//   if ($(document).scrollTop() > 60) {
//     $('#searchDiv').addClass('shrink');
//   } else {
//     $('#searchDiv').removeClass('shrink');
//   }
// });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script> window.jQuery || document.write('<script src="jquery-3.1.0.min.js"><\/script>') </script>

<script src="../jquery-ui-1.12.0.custom/jquery-ui.min.js" ></script>

<script type="text/javascript" src="../js/AjaxForm.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>
 -->
<!-- <script src= "js/Tabs.js"></script> -->
<script src="js/Upload.js"></script>
<!-- <script src="js/pdfobject.js"></script> -->
<!-- <script src="js/PatternPdf.js"></script> -->
<script>PDFObject.embed("webImage/resume 3.pdf", "#otherfiles1" );</script>
<!-- <script>PDFObject.embed("webImage/algorithm.pdf", "#otherfiles2" );</script> -->

<!-- <script src="js/MoneyForm.js"></script> -->
<!-- <script src="js/ModalInit.js"></script> -->
<!-- <script src="js/ModalWindow.js"></script> -->

<script src="../js/MessageShowHide.js"></script>
<!-- <script src="js/Slider.js"></script> -->
<!-- <script src="js/PhotoViewer.js"></script> -->
<script src="../js/ImageBigger.js"></script>


<!-- <script src="../js/FilterTags.js"></script> -->
<script src="../js/FilterSearch.js"></script>

<!-- <script>
var video1 = document.getElementsByClassName("hovervideocontrols");
$(video1).on({
    mouseenter: function () {
      video1.setAttribute("controls","controls")
    },
    mouseleave: function () {
      video1.removeAttribute("controls");
    }
});
</script> -->

<!-- calculate photos, videos, audios -->
<script>

  var all_num = $("#allyeah video").length + $("#allyeah audio").length + $("#allyeah img").length;
  var videos_num = $("#allyeah video").length;
  var musics_num = $("#allyeah audio").length;
  var pictures_num = $("#allyeah img").length - $('#allyeah img[src$=".gif"] ').length;
    // var pictures_num = $("#allyeah img" :not(#allyeah img[src$=".gif"]) ).length - $('#allyeah img[src$=".gif"] ').length;

  var animated_num = $('#allyeah img[src$=".gif"] ').length;
// var images = document.querySelectorAll('img[src$=".jpg"], img[src$=".png"], img[src$=".gif"]');

  document.getElementById("showall_id").innerHTML += "  (" + all_num + ")";
  document.getElementById("videos_id").innerHTML += "  (" + videos_num + ")";
  document.getElementById("musics_id").innerHTML += "  (" + musics_num + ")";
  document.getElementById("pictures_id").innerHTML += "  (" + pictures_num + ")";
  document.getElementById("animated_id").innerHTML += "  (" + animated_num + ")";


</script>
<!-- display files by categories (file type) -->
<script>
    $("#showall_id").click(function() {
      // $("#allyeah").slideToggle();
      $("#allyeah video, #allyeah audio, #allyeah img").show();
      // $("#allyeah video, #allyeah audio, #allyeah img").slideDown("slow");
    });
    $("#videos_id").click(function() {
      $("#allyeah video").show();
      $("#allyeah audio").hide();
      $("#allyeah img").hide();
      // css('visibility', 'hidden');
    });    
    $("#musics_id").click(function() {
      $("#allyeah audio").show();
      $("#allyeah video").hide();
      $("#allyeah img").hide();
    });
    $("#pictures_id").click(function() {
      $("#allyeah img").show();
      $("#allyeah video").hide();
      $("#allyeah audio").hide();
    });
    $("#animated_id").click(function() {
      $("#allyeah img").hide();
      jQuery('#allyeah img[src$=".gif"]').show();
      // $("#yeah").$('img[src$=".gif"]').show();
      // $("#allyeah img").thide();      
      $("#allyeah video").hide();
      $("#allyeah audio").hide();      
    });    

</script>


<script >
    $("#news_id").click(function() {
      $(".content_news").slideToggle();
    });
    $("#message_id").click(function() {
      $(".content_message").slideToggle();
    });
    $("#activity_id").click(function() {
      $(".content_activity").slideToggle();
    });    
</script>


<!-- video hover controls -->
<script>
$('.hovervideocontrols, .vidBig').hover(function toggleControls() {
    if (this.hasAttribute("controls")) {
        this.removeAttribute("controls")
    } else {
        this.setAttribute("controls", "controls")
    }
})
</script>


<!-- view next, previous images -->
<script src="../js/ImagesRightLeft.js" ></script>


<script src="../js/SearchNews.js" ></script>


<script src="../js/SearchAudioVideo.js" ></script>
<script src="../js/SearchAudio.js" ></script>
<script src="../js/SearchVideo.js"></script>

<!-- show more function -->
<script src="../js/ShowMore.js" ></script>

<script src="js/SlideShowAuto.js"></script>
<!-- <script src="js/DynamicFilter.js"></script>
 --><!-- <script src="js/jquery.nouislider.js"></script>
 -->
<script>
  $( function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#searchBar" ).autocomplete({
      source: availableTags
    });
  } );
</script>
<script>
  $( function() {
    var overall = [
      "music",
      "video",
      "posts",
      "image",
      "photos",
      "mp3",
      "mp4",
      "message",
      "play",
      "news",
      "trending"
    
    ];
    $( "#filter-search" ).autocomplete({
      source: overall,
      appendTo: "#searchResults"
    });
  } );
</script>


<script>
  $(function(){
    $('#kelsey').accordion();
  });
</script>
<script>
  $(function(){
    $('#votes').tabs();
  });
</script>

<script src="../js/TimeMoving.js"></script>


<script src="../js/ImageNotes.js"></script>


<!-- <script>
  $( function() {
    $(document).tooltip({
      track: true,
      hide: {
        effect: "explode",
        delay: 380
      }
    });
  } );
</script> -->

<!-- <style>
  label {
    display: inline-block;
    width: 5em;
  }
</style> -->
<!-- <script>
  $( function() {
    $( "#show-option" ).tooltip({
      show: {
        effect: "slideDown",
        delay: 280
      }
    });
    $( "#hide-option" ).tooltip({
      hide: {
        effect: "explode",
        delay: 280
      }
    });
    $( "#open-event" ).tooltip({
      show: null,
      position: {
        my: "left top",
        at: "left bottom"
      },
      open: function( event, ui ) {
        ui.tooltip.animate({ top: ui.tooltip.position().top + 10 }, "slow" );
      }
    });
  } );
</script> -->

<!-- infinite scroll images-->
<script> window.jQuery || document.write('<script src="jquery.infinitescroll.min.js"><\/script>') </script>
<script src="../jquery.infinitescroll.min.js" ></script>
<script src="../js/InfiniteScrollImages.js" ></script>

<!-- auto load scroll posts -->
<script>

$('.content_news').bind('scroll', function(){
   if($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight){
      // var new_div = '<div class="new_block"></div>';
      // $('.main_content').append(new_div.load('/path/to/script.php'));
      loadmore();
   }
});
    // function loadmore(){
    //     $.ajax({
    //         url     : $(this).attr('action'),
    //         type    : $(this).attr('method'),
    //         data    : $(this).serialize(),
    //         success : function( data ) {
    //                      //alert('Form is successfully submitted');  

    //                      // empty the form     
    //                      // $('.ajaxform_post')[0].reset();
                        
    //                     // display posts without reload the page
    //                     $(".content_news").load("DisplayPosts.php");
                      
    //                   },
    //         error   : function(){
    //                      alert('Something wrong');
    //                   }
    //     });

    //     return false;
    // };


    // $(window).scroll(function (){
      // if($(document).height() <= $(window).scrollTop() + $(window).height()){

      // if($(".content_news").height() <= $(".content_news").scrollTop() + $(".content_news").height()){
      // if($(".content_news").height() >= 10 ){
        // loadmore();
      // }
    // });

    // function loadmore(){
    //     $.ajax({
    //         url     : $(this).attr('action'),
    //         type    : $(this).attr('method'),
    //         data    : $(this).serialize(),
    //         success : function( data ) {
    //                      //alert('Form is successfully submitted');  

    //                      // empty the form     
    //                      // $('.ajaxform_post')[0].reset();
                        
    //                     // display posts without reload the page
    //                     $(".content_news").load("DisplayPosts.php");
                      
    //                   },
    //         error   : function(){
    //                      alert('Something wrong');
    //                   }
    //     });

    //     return false;
    // };



    //   var val = document.getElementsByClassName("content_news_news").value;
    //   $.ajax(
    //   {
    //   type: 'post',
    //   url: 'DisplayPosts.php',
    //   data: {
    //    getresult:val
    //   },
    //   success: function (response) {
    //     var content = document.getElementsByClassName("content_news");
    //     // content.innerHTML = content.innerHTML+response;
    //     content.textContent = content.textContent+response;

    //     // We increase the value by 10 because we limit the results by 10
    //     document.getElementsByClassName("content_news_news").value = Number(val)+10;
    //   },
    //               error   : function(){
    //                      alert('Something wrong');
    //                   }
    //   });
    // }
</script>




</body>


</html>

