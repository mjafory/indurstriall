
    
    <style>
   /*  SECTIONS  */
.section {
	clear: both;
	padding: 30px;
	margin: 10px;
}

/*  COLUMN SETUP  */
.col {
	display: block;
	float:left;
	margin: 1% 0 1% 1.6%;
}
.col:first-child { margin-left: 0; }

/*  GROUPING  */
.group:before,
.group:after { content:""; display:table; }
.group:after { clear:both;}
.group { zoom:1; /* For IE 6/7 */ }
/*  GRID OF TWO  */
.span_2_of_2 {
	width: auto;
}
.span_1_of_2 {
	width: 49.2%;
}

/*  GO FULL WIDTH AT LESS THAN 480 PIXELS */

@media only screen and (max-width: 480px) {
	.col { 
		margin: 1% 0 10% 0%;
	}
}

@media only screen and (max-width: 480px) {
	.span_2_of_2, .span_1_of_2 { width: auto; }
}
    </style>


            
            <div class="section group">
	<div class="col span_1_of_2">
	<?php include 'sigin.php';?>
	</div>
	<div class="col span_1_of_2">
	<img src="images/social-login-example.png" alt="" width="100%">
	</div>
</div>
            

