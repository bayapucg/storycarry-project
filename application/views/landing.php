<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=100">
	<title>Story Carry - Read & Write stories, life events in 12 languages</title>
    <meta name="title" content="StoryCarry - Write & Read stories, life events in 12 languages for free.">
    <meta name="description" content="Read & Write stories, life events in the language you wish for free. Hindi, Telugu, Tamil, English, Bengali, Marathi, Gujarati, Malayalam, Kannada, Punjabi, Russian, & ItaliaR">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/landing/images/fav.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Story Carry - Read & Write stories, life events in 12 languages for free">
    <meta property="og:description" content="Read & Write stories, life events in the language you wish for free. Hindi, Telugu, Tamil, English, Bengali, Marathi, Gujarati, Malayalam, Kannada, Punjabi, Russian, & ItaliaR">
    <meta property="og:url" content="https://storycarry.com/">
    <meta property="og:type" content="website">
    <meta property="og:image" content="">
    <script src="<?php echo base_url();?>assets/landing/landing.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/landing/landing.css">
    <style>
    .main-story{
            display:block;
        }
    :focus{
        outline:0;
    }
        .bg-google{
            padding:0px !important;
        }
        .abcRioButtonLightBlue {
            background-color: #ce0c0c !important;
            color: #fefefe !important;
        }
        .abcRioButton.abcRioButtonLightBlue{
            width: 100%!important;
            border-radius:8px !important;
            height: 37px !important;
        }
        svg.abcRioButtonSvg {
            visibility: hidden;
        }
        .abcRioButton{
            box-shadow: none !important;
        }
        .abcRioButtonIcon {
            visibility: hidden;
            padding: 0px !important;
        }
        .abcRioButtonContents span {
            display: none;
        }
        .abcRioButtonContents:after {
            content: 'Google';
            font-size:14px;
            font-weight:400;
            font-family: Arial, sans-serif;
        }
        .abcRioButtonContents {
            margin-right:22px !important;
            line-height: 37px !important; 
        }
        button.close.hovercolor:hover{
            color: #000;
            opacity: 1;
        }
        #snackbar {
          visibility: hidden;
          min-width: 250px;
          background-color: #333;
          color: #fff;
          text-align: center;
          border-radius: 2px;
          padding: 16px;
          position: fixed;
          z-index: 1;
          left: 50%;
          bottom: 30px;
          font-size: 17px;
          transform: translateX(-50%);
        }
        
        #snackbar.show {
          visibility: visible;
          -webkit-animation: fadein 0.5s, fadeout 0.5s 10.5s;
          animation: fadein 0.5s, fadeout 0.5s 10.5s;
        }
        
        @-webkit-keyframes fadein {
          from {bottom: 0; opacity: 0;} 
          to {bottom: 30px; opacity: 1;}
        }
        
        @keyframes fadein {
          from {bottom: 0; opacity: 0;}
          to {bottom: 30px; opacity: 1;}
        }
        
        @-webkit-keyframes fadeout {
          from {bottom: 30px; opacity: 1;} 
          to {bottom: 0; opacity: 0;}
        }
        
        @keyframes fadeout {
          from {bottom: 30px; opacity: 1;}
          to {bottom: 0; opacity: 0;}
        }
        
        .bg-google{
            padding:0px;
        }
        .abcRioButton:focus {
            outline:0;
            box-shadow:none;
        }
        .abcRioButton:hover {
            outline:0;
            box-shadow:none;
        }
        .abcRioButtonContents {
            font-family:Arial, sans-serif !important;
        }
        .abcRioButton{
            outline:0 !important;
            box-shadow:none !important;
            font-family:Arial,sans-serif !important;
            font-size:13.333px;
            -webkit-border-radius: 1px;
            border-radius: 5px;
            -webkit-box-shadow :none!important;
            -webkit-box-sizing:none!important;
            box-sizing:none!important;
            -webkit-transition:none!important;
            transition:none!important;
            -webkit-user-select:none;
            -webkit-appearance:none;
            background-color:#fff;
            background-image:none;
            color:#262626;
            cursor:pointer;
            outline:none;
            overflow:hidden;
            position:relative;
            text-align:center;
            vertical-align:middle;
            white-space:nowrap;
            width:auto;
        }
        .abcRioButtonLightBlue {
            background-color:#ce0c0c!important;
            color:#fefefe!important;
            box-shadow:none;
            font-family:Arial;
        }
        .abcRioButton.abcRioButtonLightBlue{
            width:140px;
            border-radius:8px!important;
        }
        
    </style>
</head>
<body>
    <!-- Mobile Header -->
    <div class="header">
        <!--<?php if(isset($landinglogos) && ($landinglogos->num_rows() > 0)){ $landingmlogo = $landinglogos->result();
            if($landingmlogo[0]->type == 'landingmlogo') { ?>
        <img src="<?php echo base_url();?>assets/images/<?php echo $landingmlogo[0]->slideimage;?>" alt="storycarry.com" style="width: 70px;margin-top: 10px;margin-left: 15px;">
        <?php } } else{ ?>
        <img src="<?php echo base_url();?>assets/landing/logom.jpeg" alt="storycarry.com" style="width: 70px;margin-top: 10px;margin-left: 15px;">
        <?php } ?>-->
        <img src="<?php echo base_url();?>assets/images/logom.png" alt="storycarry.com" style="height: 40px;margin-top: 10px;margin-left: 15px;">
        <div style="margin:19px 15px 0px 15px; float: right;font-size:1.1em;">
            <font>
                <!--<a href="#genv" style="color:#000; text-decoration:none" data-toggle="modal" data-target="#genv">FAQ</a>-->
                <a href="<?php echo base_url();?>faq" style="color:#000;">FAQ</a>
            </font>
            <font style="margin-left: 15px;">
                <a href="#loginmodal" style="color:#000; text-decoration:none" data-toggle="modal" data-target="#loginmodal">LOGIN</a>
            </font>
        </div>
    </div><!-- Mobile Header end -->

    <div class="totalbody"> 
        <div class='background-stars'></div>
        <div class="hidden-txt">
            <div style="max-width:400px;margin: 0 auto;">
                <font> Read & Write stories, life incidents in the language you wish for free. </font>
            </div>
        </div>
        <div class="totalbody1">
            <!-- Desktop Header -->
            <header>
                <div class="mainlogo">
                    <!--<?php if(isset($landinglogos) && ($landinglogos->num_rows() > 0)){ $landinglogo = $landinglogos->result();
                        if($landinglogo[0]->type == 'landinglogo') { ?>
                        <img src="<?php echo base_url();?>assets/images/<?php echo $landinglogo[0]->slideimage;?>" alt="storycarry logo" style="margin-top: 15px; margin-left: 20px;">
                    <?php } } else { ?>
                    <img src="<?php echo base_url();?>assets/landing/logo.png" alt="storycarry logo" style="margin-top: 15px; margin-left: 20px;" >
                    <?php } ?>-->
                    <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/landing/storylogoland.png" alt="storycarry logo" style="margin-top: 15px; margin-left: 20px;" ></a>
                </div>
                <div style="display: inline-block;margin:15px 50px 0px 0px; float: right;">
                    <a href="<?php echo base_url();?>faq" style="color:#fff;text-decoration:none">FAQ</a>
                    <a  class="login-but" href="#loginmodal" style="color:#fff; text-decoration:none" data-toggle="modal" data-target="#loginmodal">LOGIN</a>
                </div>
            </header> <!-- Desktop Header end -->
            
            <div>
                <div class="landinfo">
                    <div>
                        <a href="#loginmodal" style="color:#fff; text-decoration:none" data-toggle="modal" data-target="#loginmodal">
                        <div class="startwrite">
                            <img src="<?php echo base_url();?>/assets/landing/svg/editsolid.svg" alt="write story" style="width:18px">
                            START WRITING
                        </div>
                        </a>
                    </div>
                    <font class="infohome">Read & Write stories, life incidents in the<br>language you wish for free.</font>
                    
                    <!-- Type Writes start -->
                    <?php if(isset($typewrites) && !empty($typewrites)){ $typewritelist = implode(',',$typewrites); ?>
                        <font class="typewrite" data-period="2000" data-type='[<?php echo $typewritelist; ?>]'>
                            <span class="wrap"></span>
                        </font>
                    <?php }else{ ?>
                        <font class="typewrite" data-period="2000" data-type='[ "Welcome!", "Story Carry..."]'>
                            <span class="wrap"></span>
                        </font>
                    <?php } ?> <!-- Type Writes end -->
                    
                    <div style="margin-top:22px;cursor:pointer">
                        <img src="<?php echo base_url();?>/assets/landing/storycarry-app.png" alt="StoryCarry app">
                    </div>
                    <div>
                        <font class="download-text">  to carry your stories</font>
                    </div>
                </div>
                
                <!-- Languages -->
                <div class="language-div">
                    <font class="language-intro">Choose your language to Start Reading</font>
                    <hr class="style-one">
                    <div class="language-box">
                        <?php if(isset($languages) && ($languages->num_rows() > 0)){ foreach($languages->result() as $language){ ?>
                            <a href="<?php echo base_url();?><?php echo $language->langname; ?>">
                                <button class="homepage-btn"><?php echo $language->language;?> </button>
                            </a>
                        <?php } } ?>
                    </div>
                    <font style="font-family: 'Nunito', sans-serif;color:white;line-height: 1.5em;">Based on your selection, we will present you with our best content.</font>
                </div> <!-- Languages end -->
                
            </div>
        </div>
    </div>
    
    <div class="main-div">
        <?php if(isset($landinggrids) && ($landinggrids->num_rows() > 0)){ foreach($landinggrids->result() as $landinggrid){ ?>
        <div class="inner-div">
            <img src="<?php echo base_url();?>assets/images/<?php echo $landinggrid->slideimage;?>" class="but" alt="build audience">
            <div>
                <h1 class="div-text"><?php echo $landinggrid->caption;?></h1>
            </div>
            <div style="width:85%;margin:0 auto;">
                <p class="div-text1"><?php echo $landinggrid->description;?></p>
            </div>
        </div>
        <?php } } ?>
    </div>
    
    <div id="snackbar"></div>
    <div class="footer">
        <font style="float:left;font-size: 18px;margin-top: 8px;margin-left:10px;font-family: 'Varela Round', sans-serif;" class="copyright">
            Copyright © <?php echo date('Y');?> Story Carry
        </font>
        <div class="socialbtns">
            <!--<font style="font-size:14px;color:black;font-family: 'Varela Round', sans-serif;" class="socialmedia">SOCIAL MEDIA : </font>-->
            <a href=""><img class="soc-img" src="<?php echo base_url();?>/assets/landing/svg/facebook-square-brands.svg" style="margin-right:6px;cursor:pointer;width:21px;height:24px" alt="facebook storycarry"></a>
            <a href=""><img class="soc-img" src="<?php echo base_url();?>/assets/landing/svg/instagram-brands.svg" alt="instagram storycarry" style="margin-right:6px;cursor:pointer; width:21px;height:24px"></a>
            <a href=""><img class="soc-img" src="<?php echo base_url();?>/assets/landing/svg/twitter-square-brands.svg" style="margin-right:6px;cursor:pointer;width:21px;height:24px" alt="twitter storycarry"></a>
            <a href=""><img class="soc-img" src="<?php echo base_url();?>/assets/landing/svg/quora-brands.svg" style="cursor:pointer;width:21px;height:24px" alt="Quora storycarry"></a>
        </div>
    </div>
    <div class="footer1">
        <div style="font-size:14px;color:black;font-family: 'Varela Round', sans-serif;">
            <center>
                <font style="margin-right:10px" class="hover-tems"><a href="<?php echo base_url();?>about">ABOUT</a></font>
                <font style="margin-right:10px" class="hover-tems"><a href="<?php echo base_url();?>contact">CONTACT</a></font>
                <font style="margin-right:10px" class="hover-tems"><a href="<?php echo base_url();?>terms-conditions">TERMS</a></font>
                <font class="hover-tems"><a href="<?php echo base_url();?>privacy-policy">PRIVACY</a></font>
            </center>
        </div>
    </div>  <!-- footer end -->
        
<!-- Login Modal popup start -->      
<div id="loginmodal" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog msv">
		<div class="modal-content modal-contentv">
			<div class="modal-body">
				<div class="login-logo">
					<span class="headsvj"><b>SIGN IN</b>
					    <button type="button" class="close" data-dismiss="modal">&times;</button>
					</span>
				</div>
				<div class="login-box-body">
					<span class="text-danger lerror" style="color:red;font-family: sans-serif; font-size: 14px;"><?php echo $this->session->flashdata('signinmsg'); ?></span>
					<form id="loginform" action="#" method="POST" style="margin-bottom: 0;">
					    <div class="input-container has-feedback">
                            <img src="<?php echo base_url();?>assets/landing/svg/email.svg" class="icon" alt="Email">
                            <input class="input-field" type="text" placeholder="Email" name="email" id="email" autocomplete="off">
                        </div>
                        <span class="text-danger email" style="color:red;font-family:sans-serif; font-size: 14px;"></span>
                        <div class="input-container has-feedback" style="margin-top:5px;">
                            <img src="<?php echo base_url();?>assets/landing/svg/lock.svg" class="icon" alt="Password">
                            <input class="input-field" type="password" placeholder="Password" name="password" autocomplete="off">
                        </div>
                        <span class="text-danger password" style="color:red;font-family: sans-serif; font-size: 14px;"></span>
						<div class="row" style="margin-top:5px;">
							<div class="col-xs-12">
								<!--<center> <button type="submit" class="btn bg-green" style="cursor:pointer;display:none;"><img src="<?php echo base_url();?>/assets/landing/svg/spinner.svg" class="spinner"></button></center>-->
								<center> <button type="submit" class="btn bg-green btnspinner" style="cursor:pointer;">Sign in</button></center>
							</div>
						</div>
					</form>
					<div class="" style="margin-bottom:5px;"> 
						<center><p class="text-centerv" style="margin:5px;"> - or - </p></center>
						<div class="flex">
						    <div style="float:left; width:49%;"><button onclick="fbLogin()" id="fbLink" class="btn bg-fb" style="width:100%;cursor:pointer;">facebook</button></div>
						    <div style="width:2%"></div>
						    <div style="float:right; width:49%"><button data-onsuccess="onSignIn" class="g-signin2 btn bg-google" style="width:100%;cursor:pointer;">google</button></div>
						</div>
						<div style="margin-top:50px; border-top:1px solid rgba(221, 221, 221, 1);"></div>
					</div>
					<!--<hr style="margin-top:50px; border-top:1px solid rgba(221, 221, 221, 1);">-->
					<div class="">
					    <center>
					        <p class="text-centerv" style="margin:5px;">Don't have an account? 
					            <a href="#signupmodal" class="signupvj" data-dismiss="modal" data-toggle="modal" data-target="#signupmodal" style="color:#0e92af">Sign Up</a>
					        </p>
					        <p class="text-centerv" style="margin:5px;">or</p>
					        <p  class="text-centerv" style="margin:5px;">
					            <a href="#forgotpassmodal" data-toggle="modal" class="forv" data-target="#forgotpassmodal" data-dismiss="modal" style="color:#0e92af"> FORGOT PASSWORD</a>
					        </p>
					    </center>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Login Modal popup end -->

<!-- Signup Modal popup start -->
<div class="modal fade modal-signup singup-one" id="signupmodal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content modal-contentv">
			<div class="modal-body">
				<div class="login-logo">
					<span class="headsvj"><b>SIGN UP</b>
					    <button type="button" class="close" data-dismiss="modal">&times;</button>
					</span>
				</div>
				<div class="login-box-body">
					<!--<span class="text-danger lerror" style="color:red;font-family:sans-serif;font-size:14px;"><?php echo $this->session->flashdata('signinmsg'); ?></span>-->
					<form id="signup" action="#" method="POST" style="margin-bottom: 0;">
					    <div class="input-container has-feedback" style="margin-bottom:0px;">
                            <img src="<?php echo base_url();?>assets/landing/svg/user.svg" class="icon" alt="User">
                            <input class="input-field" type="text" placeholder="Name" name="name">
                        </div>
                        <span class="text-danger name" style="color:red;font-family:sans-serif;font-size:14px;"></span>
                        
					    <div class="input-container has-feedback" style="margin-top:5px;">
                            <img src="<?php echo base_url();?>assets/landing/svg/email.svg" class="icon" alt="Email">
                            <input class="input-field" type="email" placeholder="Email" name="email">
                        </div>
                        <span class="text-danger email" style="color:red;font-family:sans-serif;font-size:14px;"></span>
                        
                        <div class="input-container has-feedback" style="margin-top:6px;">
                            <img src="<?php echo base_url();?>assets/landing/svg/lock.svg" class="icon" alt="Password">
                            <input class="input-field" type="password" placeholder="Password" name="password">
                        </div>
                        <span class="text-danger password" style="color:red;font-family:sans-serif;font-size:14px;"></span>
                        <div class="row" style="margin-top:5px;">
							<div class="col-xs-12">
								<center><button type="submit" class="btn bg-green btnsignupspinner" style="cursor:pointer;">Sign Up</button></center>
							</div>
						</div>
					</form>
					
					<div class="" style="margin-bottom:5px;"> 
						<center><p class="text-centerv" style="margin:5px;"> - or - </p></center>
						<div class="flex">
						    <div style="float:left; width:49%"><button onclick="fbLogin()" id="fbLink" class="btn bg-fb" style="cursor:pointer;width:100%;">Facebook</button></div>
						    <div style="width:2%"></div>
						    <div style="float:right; width:49%"><button data-onsuccess="onSignIn" class="g-signin2 btn bg-google" style="cursor:pointer;width:100%;"> Google</button></div>
						</div>
		                <center style="margin-top:50px;">
		                    <p class="text-centervv" style="margin-bottom:0;">By signing up, you agree to our <a href="<?php echo base_url();?>terms-conditions" style="color:#0e92af">Terms of Use</a> and <a href="<?php echo base_url();?>privacy-policy" style="color:#0e92af">Privacy Policy</a>.</p>
		                </center>
		                <div style="margin-top:5px; border-top:1px solid rgba(221, 221, 221, 1);"></div>
					</div>
					<!--<hr style="margin-top:-10px; border:1px solid rgba(221, 221, 221, 1);">-->
					<div class="">
					    <center>
					        <p  class="text-centerv" style="margin-bottom:0">Already have an account? <a href="#loginmodal" data-toggle="modal" data-target="#loginmodal" data-dismiss="modal" style="color:#0e92af">Sign In</a></p>
					    </center>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Signup Modal popup end -->

<!-- Forgotpassword Modal popup start -->
<div class="modal fade" id="forgotpassmodal" role="dialog" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content modal-contentv">
			<div class="modal-body">
				<div class="login-logo">
					<span class="headsvj"><b>RESET PASSWORD</b>
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
					</span>
				</div>
				<div class="login-box-body">
					<span class="text-danger ferror" style="color:red;font-family:sans-serif;font-size:14px;"><?php echo $this->session->flashdata('signinmsg'); ?></span>
					<span class="ferrorresend"></span>
					<form id="forgotpassword" action="#" method="POST">
					    <div class="input-container has-feedback" style="margin-top:2px;">
                            <img src="<?php echo base_url();?>assets/landing/svg/email.svg" class="icon" alt="Email">
                            <input class="input-field" type="email" placeholder="Email" name="femail" required>
                        </div>
                        <span class="text-danger femail" style="color:red;font-family: sans-serif;font-size: 14px;"></span>
                        <div class="row" style="margin-top:5px;">
							<div class="col-xs-12">
								<center> <button type="submit" class="btn bg-green forgotpwdresendbtn" style="cursor:pointer;">Reset</button></center>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Forgotpassword Modal popup end -->

<!-- Change Newpassword Modal popup start -->
<?php if(isset($hash) && !empty($hash)){ ?>
<div class="modal fade in" role="dialog" tabindex="-1" aria-hidden="true" style="display: block; padding-right: 0px;">
    <!--<div class="modal fade" id="newpasswordmodal" role="dialog" tabindex="-1" aria-hidden="true">-->
	<div class="modal-dialog">
		<div class="modal-content modal-contentv">
			<div class="modal-body">
				<div class="login-logo">
					<span class="headsvj"><b>CHANGE PASSWORD</b>
					    <button type="button" class="close hovercolor" data-dismiss="modal">&times;</button>
					</span>
				</div>
				<div class="login-box-body">
					<span class="text-danger nerror" style="color:red;font-family:sans-serif;font-size:14px;"></span>
					<form id="newpasswordform" action="#" method="POST" style="margin-bottom: 0;">
					    <input type="hidden" name="userid" value="<?php echo $hash;?>" id="fpwduserid">
					    <div class="input-container has-feedback" style="margin-top:2px;">
                            <img src="<?php echo base_url();?>assets/landing/svg/lock.svg" class="icon" alt="Password">
                            <input class="input-field" type="password" placeholder="New Password" name="newpassword">
                        </div>
                        <span class="text-danger newpassword" style="color:red;font-family: sans-serif; font-size: 14px;"></span>
                        
                        <div class="input-container has-feedback" style="margin-top:5px;">
                            <img src="<?php echo base_url();?>assets/landing/svg/lock.svg" class="icon" alt="Password">
                            <input class="input-field" type="password" placeholder="Confirm New Password" name="cnewpassword">
                        </div>
                        <span class="text-danger cnewpassword" style="color:red;font-family: sans-serif; font-size: 14px;"></span>
                        <div class="row" style="margin-top:5px;">
							<div class="col-xs-12">
								<center> <button type="submit" class="btn bg-green cpwdspinnerbtn" style="cursor:pointer;">Submit</button></center>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<!-- Newpassword Modal popup end -->

<!-- Languages list Modal popup when first time signup start -->
<input type="hidden" id="cslang" value="">
<input type="hidden" id="userid" value="">
<div class="modal fade" id="chooselanguage" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog">
		<div class="modal-content modal-contentvl">
			<div class="modal-body" style="padding:0">
				<div class="login-logo" style="height:50px;border:none;">
				    <center>
				        <p style="margin:0 0 10px; font-size:25px;">Welcome!</p>
					    <span class="heads" style="text-transform:uppercase;font-size:1em">
					        <b>Select Your Preferred reading language</b>
					    </span>
					</center>
				</div>
				<div class="login-box-body" style="margin-top:20px; max-height:256px; overflow-y:scroll; margin-top:20px;">
					<form id="lang" action="#" method="POST" style="margin-bottom: 0;">
					    <div class="pt10" style="display:flex; flex-wrap:wrap; justify-content:center;">
					        <?php if(isset($languages) && ($languages->num_rows() >0)) { 
							foreach ($languages->result() as $language) { ?>
								<!--<a href="javascript:void(0);" class="community-btn" onclick="chooselanguage('<?php echo $language->code;?>')">
								    <?php echo $language->language; ?>
								</a>-->
								<a href="javascript:void(0);" class="community-btn langbtn <?php echo $language->code;?>" onclick="chooselangbtn('<?php echo $language->code;?>')">
								    <?php echo $language->language; ?>
								</a>
    						<?php } } ?>
        				</div>
					</form>
				</div>
				<div style="margin-top:14px;">
				    <center>
				        <a href="javascript:void(0);" class="btn-next chooselanguagebtn btnlangspin" style="color:#bcb2b2; background:#eee;" onclick="chooselanguage()">NEXT</a>
				    </center>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Languages list Modal popup when first time signup end -->

<!-- Community(Geners) list Modal popup when first time signup start -->
<div class="modal fade" id="choosecommunity" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog">
		<div class="modal-content modal-contentvl" style="padding-bottom:0">
			<div class="modal-body" style="padding:0">
				<div class="login-logo" style="height:50px;border:none;">
				    <center>
				        <p style="margin:0 0 10px;font-size:25px;">Welcome!</p>
					    <span class="heads"><b>Select 2 or more preferred genres</b>
					    </span>
					</center>
				</div>
				<form id="choosecommu" method="POST" style="margin-bottom:0;padding:0">
    				<div class="login-box-body" style="margin-top:20px; max-height:256px; overflow-y:scroll; margin-top:20px;">
    				    <div class="pt10" style="display:flex; flex-wrap:wrap; justify-content:center; color:white;">
						<?php if(isset($gener) && ($gener->num_rows() > 0)) { foreach($gener->result() as $generrow) { ?>
							<label class="btn-default community-btn choosecomm" id="<?php echo $generrow->id;?>" style="padding:6px 2px;">
								<input type="checkbox" class="checkbox<?php echo $generrow->id;?>" style="float:left; display:none;" name="choosecomm[]" value="<?php echo $generrow->id;?>"><?php echo $generrow->gener; ?>
							</label>
						<?php } } ?>
        				</div>
    				</div>
    				<div style="margin-top:8px;">
    				    <center>
    				        <button type="submit" class="btn-next choosecommsave btncommspin" style="color:#bcb2b2; background:#eee; width:82.67px; height:37px;"> NEXT </button>
    				    </center>
    				</div>
    				<!--<div style="margin-top:18px;">
    				    <center>
    				        <button type="submit" class="btn-next choosecommsave" style="display:none;width:82px;"> NEXT </button>
    				    </center>
    				</div>-->
				</form>
			</div>
		</div>
	</div>
</div>
<!-- Community(Geners) list Modal popup when first time signup end -->

<!-- social fb g+ Signup/ Login Modal popup start -->
<div class="modal fade" id="socialfbgmodal" role="dialog" tabindex="-1" aria-hidden="true" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog">
		<div class="modal-content modal-contentv">
			<div class="modal-body">
				<div class="login-logo">
					<span class="heads"><b>SIGN UP</b>
					    <button type="button" class="close" data-dismiss="modal">&times;</button>
					</span>
				</div>
				<div class="login-box-body">
					<span class="text-danger slerror" style="color:red;font-family: sans-serif; font-size: 14px;"><?php echo $this->session->flashdata('sfbgmsg'); ?></span>
					<form id="socialfbg" action="#" method="POST" style="margin-bottom: 0;">
					    <div class="input-container has-feedback" style="margin-top:2px;">
                            <img src="<?php echo base_url();?>assets/landing/svg/user.svg" class="icon" alt="User">
                            <input class="input-field" type="text" placeholder="Name" name="fbgname" readonly style="background-color: #eee;opacity: 1;">
                        </div>
                        <span class="text-danger fbgname" style="color:red;font-family:sans-serif; font-size:14px;"></span>
                        
					    <div class="input-container has-feedback" style="margin-top:5px;">
                            <img src="<?php echo base_url();?>assets/landing/svg/email.svg" class="icon" alt="Email">
                            <input class="input-field" type="email" placeholder="Email" name="fbgemail">
                        </div>
                        <span class="text-danger fbgemail" style="color:red;font-family:sans-serif;font-size:14px;"></span>
                        
                        <div class="input-container has-feedback" style="margin-top:5px;">
                            <img src="<?php echo base_url();?>assets/landing/svg/lock.svg" class="icon" alt="Password">
                            <input class="input-field" type="password" placeholder="Enter new Password" name="fbgpassword">
                        </div>
                        <span class="text-danger fbgpassword" style="color:red;font-family:sans-serif;font-size:14px;"></span>
                        
                        <input type="hidden" name="fbgid" value="">
                        <input type="hidden" name="fbgtype" value="">
                        
                        <div class="row">
							<div class="col-xs-12">
								<center> <button type="submit" class="btn bg-green">Sign Up </button></center>
							</div>
						</div>
					</form>
					<div class="" style="margin-bottom:20px;"><center>
		                <p class="text-centervv" style="margin-bottom:0;">By signing up, you agree to our <a href="" style="color:#0e92af">Terms of Use</a> and <a href="" style="color:#0e92af">Privacy Policy</a>.</p>
                    </center></div> <hr style="margin-top:-10px; border:1px solid rgba(221, 221, 221, 1);">
					<div class="">
					    <center>
					        <p  class="text-centerv" style="margin-bottom:0">Already have an account? <a href="#loginmodal" data-toggle="modal" data-target="#loginmodal" data-dismiss="modal" style="color:#0e92af">Sign In</a></p>
					    </center>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- social fb g+ Signup/ Login Modal popup end -->

<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script>
    /*$(document).ready(function() {
        $(".signupvj, .forv").click(function(){
            $('body').css('overflow', 'hidden');
        });
    });
    $(".close").click(function(){
        $('body').css('overflow', 'auto');
    });*/
    $(document).on('show.bs.modal', '.modal', function () {
        // run your validation... ( or shown.bs.modal )
        $('body').css('overflow', 'hidden');
    });
    $(document).on('hide.bs.modal', '.modal', function () {
        $('body').css('overflow', 'auto');
    });
    
    $(document).ready(function() {
        $("a").click(function() {
            $('span.text-danger').empty();
        });
    });
</script>

<!-- Register/ Signup  Script -->
<script type="text/javascript">
	$( "form#signup" ).submit(function( event ) {
		event.preventDefault();
		$('span.text-danger').empty();
        $.ajax({
            type: 'POST',
            url: "<?php echo base_url();?>welcome/signup",
            data: $("form#signup").serialize(),
            beforeSend: function() {
                $('.btnsignupspinner').html('<img src="<?php echo base_url();?>/assets/landing/svg/spinner.svg" class="spinner">');
            },
            success: function(resultdata, status) {
                $('.btnsignupspinner').html('Sign Up');
                var result=JSON.parse(resultdata);
    			if(result.status == -1){
    				$.each(result.validations,function (p,q){
    					$('span.'+p).text(q);
    				});
    			}else if((result.status == 1) && (result.response)){
    				$('input').val('');
    				$('#userid').val(result.response);
    				$('#signupmodal').modal('hide');
    				$('#chooselanguage').modal('show');
    			}else{
    				alert('Registration failed please try again.');
    				location.reload();
    			}
            }
		});
	});
	
	/*$( "form#signup" ).submit(function( event ) {
		event.preventDefault();
		$.post("<?php echo base_url();?>welcome/signup",$("form#signup").serialize(),function(resultdata, status) {
			$('span.text-danger').empty();
			var result=JSON.parse(resultdata);
			if(result.status == -1){
				$.each(result.validations,function (p,q){
					$('span.'+p).text(q);
				});
			}else if((result.status == 1) && (result.response)){
			    $('.btnsignupspinner').html('<img src="<?php echo base_url();?>/assets/landing/svg/spinner.svg" class="spinner">');
				$('input').val('');
				$('#userid').val(result.response);
				$('#chooselanguage').modal('show');
				$('#signupmodal').modal('hide');
			}else{
				alert('Registration failed please try again.');
				location.reload();
			}
		});
	});*/
	
	
	//// Login  Script	
	$( "form#loginform" ).submit(function( event ) {
		event.preventDefault();
		$.post("<?php echo base_url();?>welcome/signin",$("form#loginform").serialize(),function(resultdata, status) {
			$('span.text-danger').empty();
			var result=JSON.parse(resultdata);
			if(result.status == -1){
				$.each(result.validations,function (p,q){
					$('span.'+p).text(q);
				});
			}else if((result.status == 1) && (result.response == 'success')){
			    $('.btnspinner').html('<img src="<?php echo base_url();?>/assets/landing/svg/spinner.svg" class="spinner">');
				if(result.preferedlang){
				    location.href = "<?php echo base_url();?>"+result.preferedlang;
				}else{
				    location.href = "<?php echo base_url();?>english";
				}
			}else if((result.status == 1) && (result.response.res == 'nolanguage') && (result.response.userid)){
			    $('.btnspinner').html('<img src="<?php echo base_url();?>/assets/landing/svg/spinner.svg" class="spinner">');
			    $('#userid').val(result.response.userid);
			    $('#chooselanguage').modal('show');
			}else if((result.status == 1) && (result.response.res == 'nocommunities') && (result.response.userid)){
			    $('.btnspinner').html('<img src="<?php echo base_url();?>/assets/landing/svg/spinner.svg" class="spinner">');
			    $('#userid').val(result.response.userid);
			    $('#choosecommunity').modal('show');
			}else{
				$('.lerror').text('Incorrect Email id or Password.');
			}
		});
	});
	
	// Forgot Password  Script
	$( "form#forgotpassword" ).submit(function( event ) {
		event.preventDefault();
		$('.forgotpwdresendbtn').html('<img src="<?php echo base_url();?>/assets/landing/svg/spinner.svg" class="spinner">');
		$.post("<?php echo base_url();?>forgotpassword",$("form#forgotpassword").serialize(),function(resultdata, status) {
			$('span.text-danger').empty();
			var result=JSON.parse(resultdata);
			if(result.status == -1){
				$.each(result.validations,function (p,q){
					$('span.'+p).text(q);
				});
			}else if((result.status == 1) && (result.response > 0)){
			    $('#fpwduserid').val(result.response);
			    /*$('#forgotpassmodal').modal('hide');
				////$('#newpasswordmodal').modal('show');
				$('#snackbar').text('Please check Your Email Inbox for new Password').addClass('show');
    	        setTimeout(function(){ $('#snackbar').removeClass('show'); }, 3000); */
    	        $('#forgotpassword').css('visibility','hidden');
    	        $('#forgotpassword').css('margin-top','-35px');
    	        $('.ferrorresend').html('<div style="display:flex; justify-content:center;font-weight:400"><h3 style="font-family: arial, sans-serif;">EMAIL SENT</h3>'+
    	        '<img src="<?php echo base_url();?>/assets/landing/svg/check-circle-solid.svg" style="height:16px; padding: 21px 0px 0px 10px;"></div>');
    	        $('.forgotpwdresendbtn').text('RESEND').css('visibility','visible');
			}else if((result.status == 2) && (result.response == 'fail')){
			    $('#snackbar').text('The Email Id Entered is not found.').addClass('show');
    	        setTimeout(function(){ $('#snackbar').removeClass('show'); }, 5000);
			}else{
				$('.ferror').text('Please Enter Correct Email Id.');
			}
		});
	});
	
	// Forgot Password  new pwd Script
	$( "form#newpasswordform" ).submit(function( event ) {
		event.preventDefault();
		$.post("<?php echo base_url();?>newpassword",$("form#newpasswordform").serialize(),function(resultdata, status) {
			$('span.text-danger').empty();
			var result=JSON.parse(resultdata);
			if(result.status == -1){
				$.each(result.validations,function (p,q){
					$('span.'+p).text(q);
				});
			}else if((result.status == 1) && (result.response == 'success')){
			    $('.cpwdspinnerbtn').html('<img src="<?php echo base_url();?>/assets/landing/svg/spinner.svg" class="spinner">');
			    $('#snackbar.show').css('z-index', '1111');
				$('#snackbar').text('Change Password Success. Please Login').addClass('show');
    	        setTimeout(function(){ $('#snackbar').removeClass('show'); }, 5000);
				/*setTimeout(function(){
					$('#newpasswordmodal').modal('hide')
					location.reload()
				}, 3100);*/
				setTimeout(function(){
					location.href = "<?php echo base_url();?>";
				}, 3100);
			}else if((result.status == 2) && (result.response == 'fail')){
			    $('#snackbar').text('Failed to change Password.').addClass('show');
    	        setTimeout(function(){ $('#snackbar').removeClass('show'); }, 4000);
			}else if((result.status == 3) && (result.response == 'notmatch')){
				$('.nerror').text('New Password and Confirm New Password not matched.');
			}else{
			    $('.nerror').text('Somthing Wrong... Try Again');
			    setTimeout(function(){
					$('#newpasswordmodal').modal('hide')
					location.reload()
				}, 2000);
			}
		});
	});
	
	
    /*function resendmail(email){
		$.ajax({
			url: "<?php echo base_url();?>index.php/welcome/resendemail",
			type: 'POST',
			data: {'email':email},
			dataType: 'json',
			success: function (resultdata) {
				if(resultdata == 1){
					$('.resendmail').html('<span class="text-success">Mail sent successfully. Please check your inbox.</span>');
				}else{
					$('.resendmail').html('<span class="text-danger">Mail sent Fail. Please try again (or) Contact Us.</span>');
				}
			}
		});
	}*/
	
	function chooselangbtn(lang){
	    if(lang){
    	    $('#cslang').val(lang);
    	    $('.langbtn').css('background','#eee');
    	    $('.langbtn').css('color','#000');
    	    $('.'+lang).css('background','#3c8dbc');
    	    $('.'+lang).css('color','#fff');
    	    $('.chooselanguagebtn').css('color','#fff');
    	    $('.chooselanguagebtn').css('background','#3c8dbc');
	    }
	}
	
	//Sign up choose language
	function chooselanguage(){
	    $('.btnlangspin').html('<img src="<?php echo base_url();?>/assets/landing/svg/spinner.svg" class="spinner">');
	    var choselanguage = $('#cslang').val();
	    var userid = $('#userid').val();
		$.ajax({
			url: "<?php echo base_url();?>welcome/chooselanguage",
			type: 'POST',
			data: {'choselanguage':choselanguage, 'userid' : userid},
			dataType: 'json',
			success: function (resultdata) {
				if(resultdata == 1){
					$('#cslang').val(choselanguage);
					$('#chooselanguage').modal('hide');
					$('#choosecommunity').modal('show');
				}else{
				   console.log('fail');
				}
			}
		});
	}
	//Sign up select and deselect community
	$( document ).ready(function() {
		var commids = [];
		$('.choosecomm').on('click', function(){
		   var chosenid = $(this).attr('id');
			if($('.checkbox'+chosenid).prop('checked')){
				commids.push(chosenid);
				$(this).removeClass('btn-default').addClass('btn-primary').css({"background":"#3c8dbc", "color": "#fff"});
			}else if($('#'+chosenid).hasClass('btn-primary')){
				$('#'+chosenid).removeClass('btn-primary').addClass('btn-default').css({"background":"#eee", "color":"#000"});
				$('.checkbox'+chosenid).prop('checked',false);
			}
			var choosecommcount = $('input[name="choosecomm[]"]:checked').length;
			if(choosecommcount >= 2){
				$('.choosecommsave').css({"display":"block", "background":"#3c8dbc", "color": "white"});
				//$('.choosecommsave').css('background','3c8dbc');
			}else{
				//$('.choosecommsave').css('display','none');
				$('.choosecommsave').css({"display":"block!important", "background":"#eee", "color": "#fff"});
			}
		});
		
		//Sign up choose communities
		$( "form#choosecommu" ).submit(function( event ) {
			event.preventDefault();
			var choosecommcount = $('input[name="choosecomm[]"]:checked').length;
			var cslang = $('#cslang').val();
			var userid = $('#userid').val();
			if(choosecommcount >= 2){
			    $('.btncommspin').html('<img src="<?php echo base_url();?>/assets/landing/svg/spinner.svg" class="spinner">');
				$.ajax({
					url: "<?php echo base_url();?>welcome/choosecommu",
					type: 'POST',
					data: {'commids': commids, 'cslang': cslang, 'userid':userid },
					success: function (resultdata) {
						/*if(resultdata == 1){
							location.href = "<?php echo base_url();?>english/"+cslang;
						}*/
						if((resultdata != 1) || (resultdata != 0)){
						    location.href = "<?php echo base_url();?>"+resultdata;
						}else{
						    location.href = "<?php echo base_url();?>";
						}
					}
				});
			}else{
				$('.choosecommsave').css('display','none');
			}
		});  
	});
	
	
	
	$( "form#socialfbg" ).submit(function( event ) {
		event.preventDefault();
		$.post("<?php echo base_url();?>welcome/socialfbg",$("form#socialfbg").serialize(),function(resultdata, status) {
			$('span.text-danger').empty();
			var result=JSON.parse(resultdata);
			if(result.status == -1){
				$.each(result.validations,function (p,q){
					$('span.'+p).text(q);
				});
			}else if((result.status == 1) && (result.response)){
				$('input').val('');
				$('#socialfbgmodal').modal('hide');
				$('#chooselanguage').modal('show');
			}else{
				alert('Registration failed please try again.');
			//	location.reload();
			}
		});
	});
	
</script>

</body>
</html>