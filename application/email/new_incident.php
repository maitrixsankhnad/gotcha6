<?php
$headerMsg = $data['isUpdate'] ? 'Updated Previous Incident':'New Incident Created ';
$bodyMsg   = $data['isUpdate'] ? 'Updated Previous Incident <a href="'.base_url().'dashboard/incident_preview/'.encode($data['incidentid']).'" target=_blank>('.$data['incidentData'].')</a> .':'You are Assinged for New Incident <a href="'.base_url().'dashboard/incident_preview/'.encode($data['incidentid']).'" target=_blank>('.$data['incidentData'].')</a> . Please accept or decline this task.'; 
$message = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns:v="urn:schemas-microsoft-com:vml">
<head>

	<!-- Define Charset -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<!-- Responsive Meta Tag -->
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />

	<link href="http://fonts.googleapis.com/css?family=Questrial" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" type="text/css">
	
    <title>Gotcha-6</title><!-- Responsive Styles and Valid Styles -->

    <style type="text/css">
    
	    body{
            width: 100%; 
            background-color: #f0f2f5; 
            margin:0; 
            padding:0; 
            -webkit-font-smoothing: antialiased;
            mso-margin-top-alt:0px; mso-margin-bottom-alt:0px; mso-padding-alt: 0px 0px 0px 0px;
        }
        
        p,h1,h2,h3,h4{
	        margin-top:0;
			margin-bottom:0;
			padding-top:0;
			padding-bottom:0;
        }
        
        span.preheader{display: none; font-size: 1px;}
        
        html{
            width: 100%; 
        }
        
        table{
            font-size: 14px;
            border: 0;
        }
		
		 /* ----------- responsivity ----------- */
        @media only screen and (max-width: 640px){
			/*------ top header ------ */	
            body[yahoo] .show{display: block !important;}
            body[yahoo] .hide{display: none !important;}
            
            /*----- main image -------*/
			body[yahoo] .main-image img{width: 440px !important; height: auto !important;}
			 
			/* ====== divider ====== */
			body[yahoo] .divider img{width: 440px !important;}
			
			/*--------- banner ----------*/
			body[yahoo] .banner img{width: 440px !important; height: auto !important;}
			/*-------- container --------*/			
			body[yahoo] .container590{width: 440px !important;}
			body[yahoo] .container580{width: 400px !important;}
			body[yahoo] .container1{width: 420px !important;}
			body[yahoo] .container2{width: 400px !important;}
			body[yahoo] .container3{width: 380px !important;}
           
			/*-------- secions ----------*/
			body[yahoo] .section-item{width: 440px !important;}
            body[yahoo] .section-img img{width: 440px !important; height: auto !important;}        
        }

		@media only screen and (max-width: 479px){
			/*------ top header ------ */
			body[yahoo] .main-header{font-size: 24px !important;}
            body[yahoo] .resize-text{font-size: 13px !important;}
            
            /*----- main image -------*/
			body[yahoo] .main-image img{width: 280px !important; height: auto !important;}
			 
			/* ====== divider ====== */
			body[yahoo] .divider img{width: 280px !important;}
			body[yahoo] .align-center{text-align: center !important;}
			
			
			/*-------- container --------*/			
			body[yahoo] .container590{width: 280px !important;}
			body[yahoo] .container580{width: 250px !important;}
			
			body[yahoo] .section-img img{width: 280px !important; height: auto !important;}        
			
            /*------- CTA -------------*/
			body[yahoo] .cta-button{width: 200px !important;}
			body[yahoo] .cta-text{font-size: 15px !important;}
		}
		
</style>
</head>

<body yahoo="fix" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
 
	
		
	
	<table class="body_color" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="f0f2f5">
		
		<tbody><tr>
			<td>
				<table class="container590" width="510" cellspacing="0" cellpadding="0" align="center" border="0">
					
					<tbody><tr>
						<!-- ======= main img ======= -->
						<td class="section-img" align="center">
							<a href="" style="display: block; border-style: none !important; border: 0 !important;" class="editable_img"><img style="display: block; width: 221px;" src="'.base_url().'/assets/images/logo.png" alt="logo" width="221" border="0"></a>
						</td>			
					</tr>
					
					<tr><td style="font-size: 35px; line-height: 35px;" height="35">&nbsp;</td></tr>
					
					<tr>
						<td style="color: #646b81; font-size: 32px; font-family: "Varela Round", sans-serif; mso-line-height-rule: exactly; line-height: 30px;" class="title_color main-header" align="center">
							
							<!-- ======= section header ======= -->
							
							<div class="test"><div class="editable_text" style="line-height: 30px;">
								<span class="text_container">
	        					
	        						'.$headerMsg.'
	        					
								</span>
							</div></div>
        				</td>
					</tr>
					
					<tr><td style="font-size: 30px; line-height: 30px;" height="30">&nbsp;</td></tr>
					
					<tr>
						<td>
							<table class="divider_color" width="180" cellspacing="0" cellpadding="0" align="center" border="0" bgcolor="dee0e5">
								<tbody><tr><td style="font-size: 1px; line-height: 1px;" height="1">&nbsp;</td></tr>
							</tbody></table>
						</td>
					</tr>
					
					<tr><td style="font-size: 20px; line-height: 20px;" height="20">&nbsp;</td></tr>
					
					<tr>
						<td>
							<table class="container580" width="480" cellspacing="0" cellpadding="0" align="center" border="0">				
								<tbody><tr>
									<td style="color: #8189a1; font-size: 16px; font-family: "Varela Round", sans-serif; mso-line-height-rule: exactly; line-height: 32px;" class="resize-text text_color" align="center">
										<div class="editable_text" style="line-height: 32px">
											
											<!-- ======= section text ======= -->
											<span class="text_container">
				        					        '.$bodyMsg.'
				        						
				        					
											</span>
										</div>
			        				</td>	
								</tr>
							</tbody></table>
						</td>
					</tr>
					
					<tr><td style="font-size: 50px; line-height: 50px;" height="50">&nbsp;</td></tr>
					
					<tr>
						<td align="center">
							
							<table style="border-radius: 50px;" class="cta-button main_color" width="250" cellspacing="0" cellpadding="0" align="center" border="0" bgcolor="f06e6a">
								
								<tbody><tr><td style="font-size: 13px; line-height: 13px;" height="13">&nbsp;</td></tr>
								
								<tr>
									
	                				<td style="color: #ffffff; font-size: 16px; font-family: "Questrial", sans-serif;" class="cta-text" align="center">
	                					<!-- ======= main section button ======= -->
	                					
		                    			<div class="editable_text" style="line-height: 24px;">
		                    				<span class="text_container">
			                    			<a href="'.base_url().'dashboard/incident_preview/'.encode($data['incidentid']).'"  target=_blank style="color: #ffffff; text-decoration: none;">Click here to Open Incident</a> 
		                    				</span>
		                    			</div>
		                    		</td>
		                    		
	                			</tr>
								
								<tr><td style="font-size: 13px; line-height: 13px;" height="13">&nbsp;</td></tr>
							
							</tbody></table>
						</td>
					</tr>
					
					<tr><td style="font-size: 90px; line-height: 90px;" height="90">&nbsp;</td></tr>
					
					<tr>
						<td style="color: #afb6c6; font-size: 14px; font-family: "Questrial", sans-serif; line-height: 22px;" align="center">
							<!-- ======= section subtitle ====== -->
							
							<div class="editable_text" style="line-height: 22px;">
	        					<span class="text_container">
	        						
										<!--<a href="" style="color: #afb6c6; text-decoration: none;" class="text2_color">About us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="" style="color: #afb6c6; text-decoration: none;" class="text2_color">Unsubscribe</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="" style="color: #afb6c6; text-decoration: none;" class="text2_color">Contact</a>-->
            						
	        					</span>
							</div>
        				</td>
					</tr>
					
					<tr><td style="font-size: 40px; line-height: 40px;" height="40">&nbsp;</td></tr>
														
				</tbody></table>
			</td>
		</tr>
		
	</tbody></table>
	
	 
</body>
</html>';
?>