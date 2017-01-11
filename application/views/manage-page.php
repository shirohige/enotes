<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html >
<head>
  <meta charset="utf-8">
  <script type="text/javascript">
    var base = "<?php echo base_url(); ?>";
    var subdir = "";
    var logout = base + "/manage/logout";
    var foldercount=0;
    var filecount=0;
    var sidelinkid='saved-notes';
    var prevsidelinkid='saved-notes';
    var ff,fd,gf,gd;

  </script>
  <title>e-notes</title>
  <meta name="e-notes" content="">
  <meta name="author" content="Abc,def,ghi">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <link rel="stylesheet" href="<?php echo base_url();?>stylesheets/manage-page-styles.css">

  <!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
  <style>

  </style>
</head>

<body><!--change start -->

    <nav>
      <ul class="nav-container main" >

        <li><h2>e-Notes</h2></li>
        <i class="ion-android-search search-icon" aria-hidden="true"></i>

          <form>
    <input type="text" name="search" class="search-bar" placeholder="Search for files , folders , documents pdf..">
    </form>
    <li class="search"><i class="ion-log-out settings-icon hover-effect" aria-hidden="true"></i>
    <ul class="log-out-sub-menu">

    <li class="close"><i class="ion-android-close settings-icon hover-effect" aria-hidden="true"></i></li>


      <li class="profile-pic" style="background-image:url('<?php echo $this->session->pic ?>');"></li>

    <li class="account-info-container">
        <div class="log-out-username"><?php echo $this->session->name; ?></div>
          <div class="log-out-email-id"><?php echo $this->session->email; ?></div>
            <div class="account-info">My Account</div>
    </li>


    <li class="sign-out-option">
      <div class="log-out-button" id="logout">Log Out</div>
    </li>

    </ul>

    </li>
      </ul>
      <ul class="nav-container" >
        <li class="new-button-container"><div class="new button ">new</div></li>
        <li class="c-hamburger c-hamburger--htla left-menu"><span></span>
        </li>
        <li class="c-hamburger c-hamburger--htla back-arrow"><span></span>
        </li>
        <li><h2 class="active-left-nav">Saved Notes</h2></li>
              <li class="search"><i class="ion-ios-gear settings-icon hover-effect" aria-hidden="true"></i></li>
        <li class="search"><i class="ion-information-circled info-icon hover-effect" aria-hidden="true"></i></li>
        <li class="search"><i class="ion-android-apps grid-icon hover-effect" aria-hidden="true"></i></li>


        <li class="search"><i class="ion-android-more-vertical sub-menu-icon" aria-hidden="true"></i></li>

        <li class="search">
          <i class="ion-android-search search-icon" aria-hidden="true"></i>

          <form>
    <input type="text" name="search" class="search-bar" placeholder="Search..">
    </form>
        </li>
      </ul>

    </nav><!--navigation bar end -->
    <section class="body">
      <div class="container">
        <div class="filter"></div>
        <div class="left-container">
        <ul class="left-navigation">
          <li class="nav-header" id="delete">
            <div class="filter-nav-header"></div>

            <div class="profile-pic" style="background-image:url('<?php echo $this->session->pic ?>')"> </div>
            <div class="email-id"><?php echo $this->session->email; ?></div>

          </li>
            <li class="folder" id="saved-notes"><i class="ion-android-archive folder-icon" ></i><span class="left-nav-bar-text" id="saved-notes">Saved Notes</span></li>
            <li class="folder" id="shared-with-me"><i class="ion-android-people folder-icon" ></i><span class="left-nav-bar-text" id="shared-with-me">Shared with me</span></li>
            <li class="folder" id="recent"><i class="ion-ios-clock folder-icon" ></i><span class="left-nav-bar-text" id="recent">Recent</span></li>
            <li class="folder" id="favorites"><i class="ion-star folder-icon" ></i><span class="left-nav-bar-text" id="favorites">Favorites</span></li>
            <li class="folder" id="trash" ><i class="ion-trash-b folder-icon" ></i><span class="left-nav-bar-text" id="trash">Deleted</span></li>
            <li class="line"></li>

            <li class="folder" id="log-out" onclick="window.location.href=logout;"><i class="ion-log-out folder-icon" ></i><span class="left-nav-bar-text">Log Out</span></li>

          </ul>

        </div><!--left container end --><!--change end -->
        <div class="center-container">
          <form id="myform" style="display:none;">
            <input type="file" id="myfile" name="myfile" value="">
          </form>
          <ul class="display-container ">
            <form id="myform">
              <input type="file" style="display:none;" name="myfile" id="myfile">
            </form>
            <!--<li>
              <h3 class="clearfix">Uploading</h3>
              <ul class="folder-container">
                <li class="folder" draggable="true"  id="folder"><i class="ion-ios-folder folder-icon" ></i><span>Avish1</span><i class="dot-icon ion-android-more-vertical " aria-hidden="true"></i></li>


                <li class="fix"></li>
                <li class="file" draggable="true" id="file3"><div class="file-preview"  style="  background-image: url('http://www.thebakerymadewithlove.com/wp-content/uploads/2014/08/placeholder.png') ;"></div><div class="file-name"><i class="ion-ios-paper folder-icon" ></i><span>file1.jpg</span></div></li>
                <li class="file" draggable="true" id="file4"><div class="file-preview"  style="  background-image: url('http://www.thebakerymadewithlove.com/wp-content/uploads/2014/08/placeholder.png') ;"></div><div class="file-name"><i class="ion-ios-paper folder-icon" ></i><span>file1.jpg</span></div></li>



                <li class="fix"></li>
              </ul>
            </li>-->
            <li>
              <h3 class="clearfix folders-text">Folders</h3>
              <ul class="folder-container" >
                <li class="folder" draggable="true"  id="folder1"><i class="ion-ios-folder folder-icon" ></i><span class="folder-name-text">Avish1</span><i class="dot-icon ion-android-more-vertical " aria-hidden="true"></i></li>
                <li class="folder" draggable="true"  id="folder2"><i class="ion-ios-folder folder-icon" ></i><span class="folder-name-text">Avish1</span><i class="dot-icon ion-android-more-vertical " aria-hidden="true"></i></li>
                <li class="folder" draggable="true"  id="folder3"><i class="ion-ios-folder folder-icon" ></i><span class="folder-name-text">Avish1</span><i class="dot-icon ion-android-more-vertical " aria-hidden="true"></i></li>
                <li class="folder" draggable="true"  id="folder4"><i class="ion-ios-folder folder-icon" ></i><span class="folder-name-text">Avish1</span><i class="dot-icon ion-android-more-vertical " aria-hidden="true"></i></li>
                <li class="folder" draggable="true"  id="folder5"><i class="ion-ios-folder folder-icon" ></i><span class="folder-name-text">Avis
                  h1</span><i class="dot-icon ion-android-more-vertical " aria-hidden="true"></i></li>
                <li class="folder" draggable="true"  id="folder6"><i class="ion-ios-folder folder-icon" ></i><span class="folder-name-text">Avish1</span><i class="dot-icon ion-android-more-vertical " aria-hidden="true"></i></li>



                <li class="fix"></li>
              </ul>
            </li>

            <li>
              <h3 class="clearfix files-text" >Files</h3>
              <ul class="file-container" id="files">
                <li class="file" draggable="true" ><div class="file-preview"  style="  background-image: url('http://www.thebakerymadewithlove.com/wp-content/uploads/2014/08/placeholder.png') ;"></div><div class="file-name" id="file1"><i class="ion-ios-paper folder-icon" ></i><span>file1.jpg</span><i class="dot-icon ion-android-more-vertical " aria-hidden="true"></i></div></li>
                <li class="file" draggable="true" ><div class="file-preview"  style="  background-image: url('http://www.thebakerymadewithlove.com/wp-content/uploads/2014/08/placeholder.png') ;"></div><div class="file-name" id="file2"><i class="ion-ios-paper folder-icon" ></i><span>file1.jpg</span><i class="dot-icon ion-android-more-vertical " aria-hidden="true"></i></div></li>
                <li class="file" draggable="true" ><div class="file-preview"  style="  background-image: url('http://www.thebakerymadewithlove.com/wp-content/uploads/2014/08/placeholder.png') ;"></div><div class="file-name" id="file3"><i class="ion-ios-paper folder-icon" ></i><span>file1.jpg</span><i class="dot-icon ion-android-more-vertical " aria-hidden="true"></i></div></li>
                <li class="file" draggable="true" ><div class="file-preview"  style="  background-image: url('http://www.thebakerymadewithlove.com/wp-content/uploads/2014/08/placeholder.png') ;"></div><div class="file-name" id="file4"><i class="ion-ios-paper folder-icon" ></i><span>file1.jpg</span><i class="dot-icon ion-android-more-vertical " aria-hidden="true"></i></div></li>



                <li class="fix"></li>
              </ul>
            </li>



          </ul>
    <!--files display -->
  <!--  <div class="modal-background-filter"></div>
      <div class"shared-modal-container" >
        <h3>Share with others</h3>
        <div class="link-share-contianer">
          <label class="share-link">link goes here</label>
        </div>
        <div class="or-container">
          <div class="line-share left">
          </div>
          <span>or</span>
          <div class="line-share right">
          </div>
      </div>
        <div class="email-share-contianer">
          <h4>Choose people you want to share file with<h4>
            <form action="/cgi-bin/hello_get.cgi" method="get">
              <input type="text" name="email_id" value="" maxlength="100" />
            </form>
            <ul class="email-suggestion-container">
              <li>email 1</li>
              <li>email 2</li>
              <li>email 3</li>
              <li>email 4</li>
            </ul>
            <div class="button done">done</div>
        </div>
      </div>-->


          <div class="upload-button">+</div><!--upload button -->
        </div><!--center container end -->
        <div class="right-container">
        </div><!--right container end -->
      </div><!--main container end -->






    </section>
    <footer>
  <!--    <ul class="footer">
        <li><a href="">about</a></li>
        <li><a href="">help</a></li>
        <li><a href="">terms</a></li>
        <li><a href="">privacy</a></li>
        <li><a href="">setting</a></li>
        <li><a href="">send feedback</a></li>
      </ul>-->
    </footer>


    <script src="http://localhost:35729/livereload.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="<?php echo base_url();?>javascripts/load.js"></script>
<script src="jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url();?>javascripts/scripts.js"></script>
<script src="<?php echo base_url();?>javascripts/dropdown-menu.js"></script>
<script src="<?php echo base_url();?>javascripts/submenu.js"></script>

<script>

/* Events fired on the drag target */


document.addEventListener("dragstart", function(event) {
    // The dataTransfer.setData() method sets the data type and the value of the dragged data

    event.dataTransfer.setData("Text", event.target.id);

    // Output some text when starting to drag the p element

    // Change the opacity of the draggable element
    c=document.getElementById(event.target.id).childNodes;
    var ghostImage = c[1].cloneNode(true);




     ghostImage.style.position = "absolute";
     ghostImage.style.backgroundColor="white"
     ghostImage.style.top = "0px";
     ghostImage.style.right = "-1000px";
     ghostImage.style.opacity = "1";
    ghostImage.style.height="30px";
    ghostImage.style.width="200px";
    ghostImage.style.fontWeight="100";
    ghostImage.style.fontSize="13px";
    ghostImage.style.paddingLeft="10px";
    ghostImage.style.paddingTop="6px";
    ghostImage.childNodes[0].style.marginRight="10px";
    ghostImage.childNodes[2].style.visibility = "hidden";

     document.body.appendChild(ghostImage);

     event.dataTransfer.setDragImage(ghostImage, 0, 0);


});

// While dragging the p element, change the color of the output text
document.addEventListener("drag", function(event) {


});

// Output some text when finished dragging the p element and reset the opacity
document.addEventListener("dragend", function(event) {

    event.target.style.opacity = "1";
    event.target.style.backgroundColor = "white";

});


/* Events fired on the drop target */

// When the draggable p element enters the droptarget, change the DIVS's border style
document.addEventListener("dragenter", function(event) {

    if ( event.target.className == "folder" ) {
        event.target.style.border = "1px solid gray";

    }
});

// By default, data/elements cannot be dropped in other elements. To allow a drop, we must prevent the default handling of the element
document.addEventListener("dragover", function(event) {
    event.preventDefault();

});

// When the draggable p element leaves the droptarget, reset the DIVS's border style
document.addEventListener("dragleave", function(event) {
    if ( event.target.className == "folder" ) {
        event.target.style.border = "";
    }
});

/* On drop - Prevent the browser default handling of the data (default is open as link on drop)
   Reset the color of the output text and DIV's border color
   Get the dragged data with the dataTransfer.getData() method
   The dragged data is the id of the dragged element ("drag1")
   Append the dragged element into the drop element
*/
document.addEventListener("drop", function(event) {
    event.preventDefault();
    if ( event.target.className == "folder" && event.target.id!=event.dataTransfer.getData("Text")) {
        var data = event.dataTransfer.getData("Text");
        //alert(event.target.id);
        if(event.target.id == 'saved-notes'){
          if(subdir == "") src = $("#"+data).attr('name');
          else src = subdir+"/"+$("#"+data).attr('name');
          dest = "";
          if(prevsidelinkid == 'trash'){
            fd(src);
            gd();
            event.target.style.border = "";
            return;
          }else if(prevsidelinkid == 'favorites'){
            ff(src);
            gf();
            event.target.style.border = "";
            return;
          }
        }
        else if(event.target.id == 'favorites'){
          if(subdir == "") src = $("#"+data).attr('name');
          else src = subdir+"/"+$("#"+data).attr('name');
          dest = "favourites";
          ff(src);
          return;
        }
        else if(event.target.id == 'trash'){
          if(subdir == "") src = $("#"+data).attr('name');
          else src = subdir+"/"+$("#"+data).attr('name');
          fd(src);
          return;
        }
        else if(event.target.id == 'recent'){
          return;
        }
        else if(event.target.id == 'shared-with-me'){
          return;
        }
        else if(event.target.id == 'log-out'){
          window.location.href = base + "/manage/logout";
        }
        else {
          if(subdir == ""){
            dest = $("#"+event.target.id).attr('name');
            src = $("#"+data).attr('name');
          }
          else {
            dest = subdir+"/"+$("#"+event.target.id).attr('name');
            src = subdir+"/"+$("#"+data).attr('name');
          }
        }
        //alert("dest:" + dest);
        //alert("src:" + src);
        move(src,dest);
      //  event.target.parentNode.appendChild(document.getElementById(data));
        //var element = document.getElementById(data);
        //element.parentNode.removeChild(element);

    }
    event.target.style.border = "";
});

</script>
</body>
</html>
