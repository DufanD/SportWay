<style type="text/css">
	img.zoom {
	    -webkit-transition: all .2s ease-in-out;
	    -moz-transition: all .2s ease-in-out;
	    -o-transition: all .2s ease-in-out;
	    -ms-transition: all .2s ease-in-out;
	}
	.transisi {
	    -webkit-transform: scale(1.4); 
	    -moz-transform: scale(1.4);
	    -o-transform: scale(1.4);
	    transform: scale(1.4);
	}
</style>
<script type="text/javascript">
	$(document).ready(function(){
	    $('.zoom').hover(function() {
	        $(this).addClass('transisi');
	    }, function() {
	        $(this).removeClass('transisi');
	    });
	});  
</script>
<div class="content-mid">
	<div class="container">
		<div class="col-md-3 m-w3ls">
			<div class="col-md1 ">
				<img src="<?php echo base_url()."assets/"?>images/mid1.jpg" class="zoom img-responsive img" alt="">
			</div>
		</div>
		<div class="col-md-3 m-w3ls1">
			<div class="col-md ">
				<img src="<?php echo base_url()."assets/"?>images/mid2.jpg" class="zoom img-responsive img" alt="">
			</div>
		</div>
		<div class="col-md-3 m-w3ls1">
			<div class="col-md ">
				<img src="<?php echo base_url()."assets/"?>images/mid3.jpg" class="zoom img-responsive img" alt="">
			</div>
		</div>
		<div class="col-md-3 m-w3ls">
			<div class="col-md ">
				<img src="<?php echo base_url()."assets/"?>images/mid4.jpg" class="zoom img-responsive img1" alt="">
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>