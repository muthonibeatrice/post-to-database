<form action="<?php echo (base_url());?>index.php/one/trial1/" method="POST">
Fname:<br>
<input type="text" name="fname">
<br>
Lname:<br>
<input type="text" name="lname">
<br>

<button type = "submit">submit</button>
<br>
</form>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- END META SECTION -->
        
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel = "stylesheet">
	<link href="<?php echo base_url();?>assets/css/owl.carousel.css" rel = "stylesheet">
	<!-- <link href="<?php echo base_url();?>css/sidebar.css" rel = "stylesheet"> -->

	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
	<title class  = "breadcrumb">
		
    	FunKe Science
		FunKe Science
		
	</title>
	<style>
	
	

    #owl-demo .item{
    margin:10px 150px;
	width:1000px;
	height:500px;
    }
    #owl-demo .item img{
    display:block;
    width: 100%;
    height:80% ;
    }
    .logo1 img{
    	width:80px;
    	height:30px;
    }
    .video source{
    	height:50%;
        width:50%;
    }
   /* .text1 {
    	margin-top: 1px;
    }*/
   /* #assessment .jumbotron form-group{
    	 margin:10px 150px;
    }*/

   /* #logo .item{
    margin:10px;
	width:1000px;
	height:5000px;
	}	
    #logo .item img{
    	display: block;
    	width: 50s%;
    	height:10% ;
    }*/

    .navbar-brand{
    	 text-align: center;
    	 display: inline-block;
  		 float: none;
  		 vertical-align: top;
    	/*margin: 50px;*/
    }
    .navbar navbar-default{
    	color:rgb(244,223,144);
    }
    /*.customNavigation{
  text-align: center;
	}
//use styles below to disable ugly selection
	.customNavigation a{
	  -webkit-user-select: none;
	  -khtml-user-select: none;
	  -moz-user-select: none;
	  -ms-user-select: none;
	  user-select: none;
	  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
	}
 */


	</style>
</head>
<body id = "body">

<nav class="navbar <!-- navbar-inverse -->" style="color:rgb(244,223,144)">
  <div class="container-fluid" style>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <ul class="nav navbar-nav navbar-right"> -->
      <ul class="nav navbar-nav">
      	<li><a href="#" class="logo1"><img src="<?php echo base_url('logo1.png');?>"</a></li>
      	<li><a class="text1" href="#"><center>FunKe Science</center></a></li>
      </ul>
      
  	  <!-- </ul> -->
    </div>
  </div>
</nav>
	<!-- <div id="logo">
		<center><div class="item"><img src="<?php echo base_url('logo1.png');?>" alt="Owl Image" class = "img img-rounded"></div><center>
	</div> -->
<div class = "container " >
	<div class = "jumbotron form-group" style = "background-color:rgb(244,223,144)">
	<p><center><h3>chapter One</h3></p>
	<p><center><h1> The Human body</h1></p>
	<p> The human body is made up of different parts which are the head, arms, Neck, chest and legs.</p>
	<!-- <a class = "btn  btn-default active disabled">Watch Now</a>
	<a class = "btn  btn-info ">Tweet it</a></center> -->
 
	</div>
</div>
<div class = "container">
	<div class ="alert <!-- alert-success alert-dismissable -->" style = "background-color:rgb(242,124,126)">
	<!-- <button type = "button" class = "close" data-dismiss = "alert">&times</button> -->
	<center><p><u><h3>The Head</h3></u></p></center>
	<center><p><h4>The head is the part of the body that has the ears,nose,mouth and eyes.</h4><p><center></div>
</div>

<div class = "jumbotron form-group" style = "background-color:rgb(254,244,212)">
    <div id="owl-demo">
		<!-- <div class="item active"><img src="" alt="Owl head"class = "img img-rounded"></div> -->
		<div class="item"><img src="<?php echo base_url('ear1.jpg');?>" alt="Owl ear" class = "img img-rounded"></div>
		<div class="item"><img src="<?php echo base_url('nose1.jpg');?>" alt="Owl nose"class = "img img-rounded"></div>
		<div class="item"><img src="<?php echo base_url('mouth.jpg');?>" alt="Owl mouth"class = "img img-rounded"></div>
		<div class="item"><img src="<?php echo base_url('eye.jpg');?>" alt="Owl eye"class = "img img-rounded"></div>
		<!-- <div class="item"><img src="<?php echo base_url('child.jpg');?>" alt="Owl Image"class = "img img-rounded"></div>
		<div class="item"><img src="<?php echo base_url('child.jpg');?>" alt="Owl Image"class = "img img-rounded"></div>
		<div class="item"><img src="<?php echo base_url('child.jpg');?>" alt="Owl Image"class = "img img-rounded"></div> -->
     
    <!-- </div>
    <div class="row">
        <h1>Radio Group #2</h1>
        <label for="year" class="control-label input-group">Year</label>
        <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-default">
                <input name="year" value="2011" type="ra<?php echo base_url('images.jpg');?>dio">2011
            </label>
            <label class="btn btn-default">
                <input name="year" value="2012" type="radio">2012
            </label>
            <label class="btn btn-default">
                <input name="year" value="2013" checked="checked" type="radio">2013
            </label>
        </div>   -->
	</div>
</div>
<!-- <div id = "assessment">
	<div class = "jumbotron form-group" style = "background-color:rgb(254,244,212)">
	<p><center><h3>chapter One</h3></p>
	<p><center><h1> The Human body</h1></p>
	<p> The human body is made up of different parts which are the head, arms, Neck, chest and legs.</p> -->
	<!-- <a class = "btn  btn-default active disabled">Watch Now</a>
	<a class = "btn  btn-info ">Tweet it</a></center>
  -->
	</div>
</div>
<div id = "assessment">
<!-- <form>
	<div class= "form-group">
	<div class = "jumbotron form-group" style = "background-color:rgb(254,244,212)">
	<p><center><h3><u>Answer the following Questions</u></h3></p>
		<div class="container">
			<ol start="1" ></ol>
			<div class="row">
		        <h4>We see with our?</h4>
			<form name ="form1" method ="POST" action="<?php echo base_url();?>index.php/one/trial1">
		        <label class="radio-inline">
		          <input name="radioGroup1" id="" value="46" type="radio"> Nose
		        </label>
            Fname:<br>
            <input type="name" name="fname">
            <br>
		        <label class="radio-inline">
		          <input name="radioGroup1" id="radio2" value="48"  type="radio"> Eyes
		        </label>
		        <label class="radio-inline">
		          <input name="radioGroup1" id="radio3" value="49" type="radio"> Hair
		        </label>
            <input type="submit" value="submit"> <!-- name="ask" -->
		        <!-- <input value="GO" onclick="location.href='@Url.Action("one.php/insert1","one.php")'"  type="button" data-toggle="modal" data-target="#myModal">
		        <!-- < -->
		    <!-- </form> --> -->
	     <!--    </div>
	        <form name ="form2" Method ="Post" ACTION ="one.php">
	        <div class="row">
		        <h4>We hear with our?</h4>
		    
		        <label class="radio-inline">
		          <input name="radioGroup" id="radio4" value="50" type="radio"> Mouth
		        </label>
		        <label class="radio-inline">
		          <input name="radioGroup" id="radio5" value="51" type="radio"> Nose
		        </label>
		        <label class="radio-inline">
		          <input name="radioGroup" id="radio6" value="52" type="radio"> Ear
		        </label>

		    </form>
	        </div>
	        <Form name ="form3" Method ="Post" ACTION ="<?php echo (base_url());?>index.php/one/insert1/">
	        <div class="row">
		        <h4>We comb our?</h4>
		    
		        <label class="radio-inline">
		          <input name="radioGroup" id="radio7" value="53" type="radio"> Nose
		        </label>
		        <label class="radio-inline">
		          <input name="radioGroup" id="radio8" value="54" type="radio"> Eyes
		        </label>
		        <label class="radio-inline">
		          <input name="radioGroup" id="radio9" value="55" type="radio"> Hair
		        </label>
		        <label>
		        	<input value="GO" type="submit"><!-- onclick="location.href='@Url.Action("one.php/insert1","one.php")'"  type="button" data-toggle="modal" data-target="#myModal" -->
		        </label>
		     </form>
	        </div>
	        </ol>
    	</div>
    </div>
</div>
</div>
</div>
<div class="modal fade form-group " id="myModal" tabindex="-10" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" role = "dialog" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">You Made it to the next step!!!!!</h4>
      </div>
      <div class="modal-body">
      		<div class="video">
      			<div id="video1">
   				<object class="embed-responsive-item">
     				<video controls  width="520" height="240">
       					<source src=<?php echo base_url('video2.mp4');?> type='video/mp4' height="50%" width="20p"/>
     				</video>
   				</object>
   			</div>
 			</div>		
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Next topic</button>
      </div>
    </div>
  </div>
</div>
<div class ="<!-- navbar-btn btn-success --> navbar" style = "background-color:rgb(102,157,137)">
    <div class ="container">
    	<!-- <footer class ="row"> -->
    		<!-- <nav class = "col-lg-12"> -->
    			<ul class = "breadcrumb" "navbar" style = "background-color:rgb(102,157,137)">
    				<li><a href="">Copyright FunKe Science 2015</a></li>
    				<li><a href="">C4DLab,Nairobi,Kenya</a></li>
    			</ul>
			<!-- </nav> -->
		<!-- </footer> -->

	   <!-- p class ="navbar-text pull-left">Copyright FunKe Science 2015</p> -->
	   <!-- <a class = "navbar-btn btn-danger btn pull-right">subscribe</a> -->
	</div>


</div>
<!-- <div class = "select">
	<pre>
		<?php print_r($records)?>
	</pre>
</div> -->
	<!-- <p><center><h1> The Human body</h1></p>
	<p> The human is made up of different parts which are the head, arms, Neck, chest and legs.</p> -->
	<!-- <a class = "btn  btn-default active disabled">Watch Now</a>
	<a class = "btn  btn-info ">Tweet it</a></center>
  -->
	</div>
</div>
    <div class="panel-body" style = "width:95%">
                                <table class="table datatable">
                                    <!-- <thead>
                                        <th style = "font-weight:bold">No</th>
                                        <th style = "font-weight:bold">Name</th>
                                    </thead> -->

                                    <tbody>
                                        <?php
                                            // if($details!="")
                                            // {
                                            //     foreach ($details as $my_details) 
                                            //     {

                                            //             echo "<td>";
                                            //             echo $my_details->choiceid;
                                            //             echo "<br><br>";
                                            //             echo "</td>";
                                            //             echo "<td>";
                                            //             echo $my_details->choicename;
                                            //             echo "<br><br>";
                                            //             echo "</td>";
                                            //         echo "</tr>";
                                            //         echo "</tr>";
                                            //     }

                                            // }
                                        // $r='correct';
											// print_r($answer)
										// while ('echo $r')
										// {
											
										// }
										                                           //
										// if(!empty($data))                                           //   {
//    echo $data;                                             // }

                                         	 
                                         	// foreach ($data as $value) {
                                         	// 	echo '<h1>' . $value .'</h1>';
                                         	// }
                                         	
                                           
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
<!-- 
 	<div class="customNavigation">
		  <a class="btn prev">Previous</a>
		  <a class="btn next">Next</a>
		  <a class="btn play">Autoplay</a>
		  <a class="btn stop">Stop</a>
	</div> -->


<!-- <div class = "container">
	<div class ="row"> 
		<div class = "col-md-3">
		    <h3><a href = "#"> Have you ever felt misunderstood? Do you think you need to understand </a></h3>
			<p class = "bg-default">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
			<a class = "btn  btn-default">Watch Now</a>
		</div>
		<div class = "col-md-3">
		    <h3><a class = "sr-only sr-only focusable" href = "#"> Have you ever felt misunderstood? Do you think you need to understand </a></h3>
			<p class = "bg-danger">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
			<a  href ="#" class = "btn  btn-info">Read more </a>
		</div>
		<div class = "col-md-3">
		    <h3><a href = "#"> Have you ever felt misunderstood? Do you think you need to understand </a></h3>
			<p class = "text-info">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
			<a  href ="#" class = "btn  btn-info">Read more </a>
		</div>
		<div class = "col-md-3">
		    <h3 class ="text-hide"><a href = "#"> Have you ever felt misunderstood? Do you think you need to understand </a></h3>
			<p class = "text-success">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
			<a  href ="#" class = "btn  btn-info">Read more </a>
		</div> -->
	
	
</body>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
<script type = "text/javascript">
$(document).ready(function() {
     
    $("#owl-demo").owlCarousel({
     
    autoPlay: 5000, //Set AutoPlay to 3 seconds
     
    items : 1,
    itemsDesktop : [1199,],
    itemsDesktopSmall : [979,3],
    // data-wrap="hover",
     
   
    });
    });
$(document).ready(function () {
    $("#row8").click(function () {
        // Radios

        $(".rad:checked").each(function() {
            console.log("Radio: " + $(this).val());
        });
    });
})
 $('#link').click(function () {
        var src = '<?php echo base_url('video1.mp4');?>';
        $('#video1').modal('show');
        $('#video1 video').attr('src', src);
    });

    $('#video1 button').click(function () {
        $('#video1 iframe').removeAttr('src');
    });

 //    navigation : true, // Show next and prev buttons
	// slideSpeed : 300,
	// paginationSpeed : 400,
	// singleItem:false
	// // navigation : false,
 //    navigationText : ["prev","next"],
 //    rewindNav : true,
 //    scrollPerPage : false,
 //   $(".next").click(function(){
 //       owl.trigger('owl.next');
 //    })
	// $(".prev").click(function(){
	// 	owl.trigger('owl.prev');
	//  })
 //  $(".play").click(function(){
 //    	owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
 //  })
 //  $(".stop").click(function(){
 //    	owl.trigger('owl.stop');
 //    });
     
 //    });
</script>
</html>