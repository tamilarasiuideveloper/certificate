<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="images/logo-icon.png" type="image/gif" sizes="16x16">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<title> AAA DeepSphere.AI School of Artificial Intelligence</title>
<meta name="description"  content="">
<link href="fonts/metric.min.css" type="text/css" rel="stylesheet" media="all" />
<link rel="stylesheet" type="text/css" href="custom.css">
<link rel="stylesheet" type="text/css" href="css/custom-contact.css" >
	<link rel="stylesheet" type="text/css" href="css/certificate.css">
<script type="text/javascript">
function ltrim(s)
{
	return s.replace(/^\s*/,"");
}
function rtrim(s)
{
	return s.replace(/\s*$/,"");
}
function trim(s)
{
	return rtrim(ltrim(s));
} 
function emailCheck(emailStr)
{
	var emailPat=/^(.+)@(.+)$/
	var specialChars="\\(\\)<>@,;:\\\\\\\"\\.\\[\\]"
	var validChars="\[^\\s" + specialChars + "\]"
	var quotedUser="(\"[^\"]*\")"
	var ipDomainPat=/^\[(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})\]$/
	var atom=validChars + '+'
	var word="(" + atom + "|" + quotedUser + ")"
	var userPat=new RegExp("^" + word + "(\\." + word + ")*$")
	var domainPat=new RegExp("^" + atom + "(\\." + atom +")*$")
	var matchArray=emailStr.match(emailPat)
	if (matchArray==null) {
		return false
	}
	var user=matchArray[1]
	var domain=matchArray[2]
	if (user.match(userPat)==null) {
		return false
	}
	var IPArray=domain.match(ipDomainPat)
	if (IPArray!=null) {
		for (var i=1;i<=4;i++) {
			if (IPArray[i]>255) {
				return false
			}
		}
		return true
	}
	var domainArray=domain.match(domainPat)
	if (domainArray==null) {
		return false
	}
	var atomPat=new RegExp(atom,"g")
	var domArr=domain.match(atomPat)
	var len=domArr.length
	if (domArr[domArr.length-1].length<2 ||
		domArr[domArr.length-1].length>4) {
		return false
	}
	if (len<2) {
		return false
	}
return true;
} 

function validateform()
{
	var flag = true;
	var sErrStr = ""; 
	var j=0;
	var sFieldName = "";
	var validChars = /\W/;
	if(trim(document.contactform.first_name.value)=="")
	{
	   sErrStr +="First Name\n";
	 
		if(sFieldName == "")
		sFieldName="first_name";			   
	}
	if(trim(document.contactform.last_name.value)=="")
	{
	   sErrStr +="Last Name\n";
	 
		if(sFieldName == "")
		sFieldName="last_name";			   
	}
	if(trim(document.contactform.intereed_programms.value)=="")
	{
	   sErrStr +="Intereed programms\n";
	 
		if(sFieldName == "")
		sFieldName="intereed_programms";			   
	}
	if(trim(document.contactform.job_title.value)=="")
	{
	   sErrStr +="Job Title/Student\n";
	 
		if(sFieldName == "")
		sFieldName="job_title";			   
	}
	if(trim(document.contactform.organization.value)=="")
	{
	   sErrStr +="Organization\n";
	 
		if(sFieldName == "")
		sFieldName="organization";			   
	}
	
	if(trim(document.contactform.email.value)=="")
	{
	   sErrStr +="Email\n";
	 
		if(sFieldName == "")
		sFieldName="email";			   
	}
	else if (!emailCheck(document.contactform.email.value)) 
	{ 
		sErrStr += "Valid Email Address\n"
		if (sFieldName == "")
		sFieldName = "email";
	}
	if(trim(document.contactform.phone.value)=="")
	{
	   sErrStr +="Phone\n";
	 
		if(sFieldName == "")
		sFieldName="phone";			   
	}
	if(trim(document.contactform.address.value)=="")
	{
	   sErrStr +="Address\n";
	 
		if(sFieldName == "")
		sFieldName="address";			   
	}
	if(trim(document.contactform.comments.value)=="")
	{
	   sErrStr +="Comments\n";
	 
		if(sFieldName == "")
		sFieldName="comments";			   
	}
	if (sErrStr != "")
	{
		alert("Please Enter Following Fields: \n"+sErrStr);
		for (i=0;i<document.contactform.elements.length;i++)
		{
			if (document.contactform.elements[i].name == sFieldName)
				document.contactform.elements[i].focus();
		}
		return false;
	}
return true;
}
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-169916546-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-169916546-1');
</script>
</head>
<body>
<header class="clearHeader" id="top">
  <div class="container">
    <div class="row">
      <div class="col-lg-3"><span class="ds-logo"><a href="index.php"><img src="images/logo.png" alt="DeepSphere AI" title="DeepSphere AI"></a></span> </div>
      <div class="col-lg-9">
        <div class="menu-link"></div>
        <ul class="menu">
  <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">AI Program <span class="caret caret_clr"></span></a>
    <ul class="dropdown-menu subtoggle">
      <div class="TreeMenu">
        <div class="listGroup list-group-tree well">
          <li><a href="javascript:void(0);" class="listGroup-item" data-toggle="collapse"> <span class="arrowImg"></span><span class="tit-1">Advanced Artificial Intelligence</span></a>
            <div class="listGroup collapse"> <a href="ai-program.php#Client-Endorsements">Client Endorsements</a> <a href="ai-program.php#Advanced-Artificial-Intelligence">Advanced AI for Executives</a> <a href="ai-program.php#Advanced-Artificial-Intelligence">Advanced AI for Professionals</a> <a href="ai-program.php#Advanced-Artificial-Intelligence">Advanced AI for Students</a> </div>
          </li>
          <li> <a href="javascript:void(0);" class="list-group-item" data-toggle="collapse"> <span class="arrowImg"></span><span class="tit-1">Advanced Data Engineering</span> </a>
            <div class="listGroup collapse" ><a href="ai-program.php#Client-Endorsements">Client Endorsements</a> <a href="ai-program.php#Advanced-Data-Engineering">Advanced Data Engineering for Executives</a> <a href="ai-program.php#Advanced-Data-Engineering">Advanced Data Engineering for Professionals</a> <a href="ai-program.php#Advanced-Data-Engineering">Advanced Data Engineering for Students</a> </div>
          </li>
          <li> <a href="javascript:void(0);" class="list-group-item" data-toggle="collapse"> <span class="arrowImg"></span><span class="tit-1">Advanced Computing</span> </a>
            <div class="listGroup collapse" ><a href="ai-program.php#Client-Endorsements">Client Endorsements</a> <a href="ai-program.php#Advanced-Computing">Advanced Computing for Executives</a> <a href="ai-program.php#Advanced-Computing">Advanced Computing for Professionals</a> <a href="ai-program.php#Advanced-Computing">Advanced Computing for Students</a> </div>
          </li>
        </div>
      </div>
    </ul>
  </li>
  <li><a href="https://www.deepsphere.ai/ai-products/ai-lab/" target="_blank">AI LAB</a></li>
  <li><a href="https://www.deepsphere.ai/ai-products/applied-in-health#Choose-Industry" target="_blank">AI USE CASES</a></li>
<li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Master AI <span class="caret caret_clr"></span></a>
  <ul class="dropdown-menu subtoggle">
    <div class="TreeMenu">
      <div class="listGroup list-group-tree well">
        <li><a href="javascript:void(0);" class="listGroup-item" data-toggle="collapse"> <span class="arrowImg"></span><span class="tit-1">Master Advanced Computing</span></a>
          <div class="listGroup collapse"> <a href="https://www.deepsphere.ai/advanced-AI-learning-python/">Python</a> <a href="https://www.deepsphere.ai/ai-learning/scala">Scala</a> <a href="https://www.deepsphere.ai/ai-learning/r">R</a></div>
        </li>
        <li> <a href="javascript:void(0);" class="list-group-item" data-toggle="collapse"> <span class="arrowImg"></span><span class="tit-1">Master Model Engineering</span> </a>
          <div class="listGroup collapse" ><a href="https://www.deepsphere.ai/wp-login.php">TFX</a> <a href="https://www.deepsphere.ai/wp-login.php">Pytorch</a> <a href="https://www.deepsphere.ai/wp-login.php">XGBoost</a> </div>
        </li>
        <li> <a href="javascript:void(0);" class="list-group-item" data-toggle="collapse"> <span class="arrowImg"></span><span class="tit-1">Master Model Pipeline</span> </a>
          <div class="listGroup collapse" ><a href="https://www.deepsphere.ai/wp-login.php">Kubeflow</a> <a href="https://www.deepsphere.ai/wp-login.php">Kubernetes</a> <a href="https://www.deepsphere.ai/wp-login.php">Dockers</a> </div>
        </li>
        <li> <a href="javascript:void(0);" class="list-group-item" data-toggle="collapse"> <span class="arrowImg"></span><span class="tit-1">Master Data Pipeline</span> </a>
          <div class="listGroup collapse" ><a href="https://www.deepsphere.ai/wp-login.php">Spark</a> <a href="https://www.deepsphere.ai/wp-login.php">Kafka</a> <a href="https://www.deepsphere.ai/wp-login.php">Kaa Cloud</a> </div>
        </li>
        <li> <a href="javascript:void(0);" class="list-group-item" data-toggle="collapse"> <span class="arrowImg"></span><span class="tit-1">Master Cloud Computing</span> </a>
          <div class="listGroup collapse" ><a href="https://www.deepsphere.ai/wp-login.php">Google Cloud Platform</a> <a href="https://www.deepsphere.ai/wp-login.php">AWS</a></div>
        </li>
      </div>
    </div>
  </ul>
</li>
  
  <li><a href="https://www.deepsphere.ai/corporate-finance/" target="_blank">AI TEST DRIVE</a></li>
  <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">AI Publications <span class="caret caret_clr"></span></a>
    <ul class="dropdown-menu subtoggle">
      <div class="TreeMenu">
        <div class="listGroup list-group-tree well">
          <li><a href="javascript:void(0);" class="listGroup-item" data-toggle="collapse"> <span class="arrowImg"></span><span class="tit-1">AI Implementation Guide</span></a>
            <div class="listGroup collapse"> <a href="http://www.dsschoolofai.com/ai-development-infrastructure/" target="_blank">AI Development Infrastructure Setup</a> <a href="http://www.dsschoolofai.com/supervised-learning/" target="_blank">Supervised Machine Learning</a> <a href="http://www.dsschoolofai.com/unsupervised-learning/" target="_blank">Unsupervised Machine Learning</a> <a href="http://dsschoolofai.com/reinforcement-learnng/" target="_blank">Reinforcement Machine Learning</a> <a href="http://dsschoolofai.com/deep-learning/" target="_blank">Deep Learning</a> <a href="http://www.dsschoolofai.com/advanced-reinforcement-learning/" target="_blank">Advanced Reinforcement Learning</a> </div>
          </li>
          <li> <a href="javascript:void(0);" class="list-group-item" data-toggle="collapse"> <span class="arrowImg"></span><span class="tit-1">AI Applied In Business</span> </a>
            <div class="listGroup collapse" > <a href="https://www.deepsphere.ai/corporate-finance/" target="_blank">AI Applied in Financial Close</a> </div>
          </li>
          <li> <a href="javascript:void(0);" class="list-group-item" data-toggle="collapse"> <span class="arrowImg"></span><span class="tit-1">Advanced AI Learning</span> </a>
            <div class="listGroup collapse" > <a href="https://www.deepsphere.ai/ai-learning/python" target="_blank">Master AI With Python</a> <a href="https://www.deepsphere.ai/ai-learning/scala/">Master AI With Scala</a> <a href="https://www.deepsphere.ai/ai-learning/r/">Master AI With R</a> </div>
          </li>
        </div>
      </div>
    </ul>
  </li>
  <li><a href="https://www.deepsphere.ai/customers" target="_blank">CLIENTS</a></li>
  <li><a href="https://www.deepsphere.ai/company/testimonials" target="_blank">Testimonials</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li class="buttons"><a class="brouchure_link" href="https://www.deepsphere.ai/advanced-AI-learning-python/" target="_blank">Code | Test | Deploy <span class="m_line">|</span> &gt;</a><a class="brouchure_link" href="https://deepsphereai.litmos.com/account/Login" target="_blank">Intelligent LMS Demo <span class="m_line">|</span> &gt;</a><a class="brouchure_link" href="enrollment.php">Enrollment <span class="m_line">|</span> &gt;</a></li>
  <!--<li><a href="#Contact-Content">Contact</a></li>-->
</ul>
      </div>
    </div>
  </div>
</header>

<!--section start-->
<section class="section banner contact">
  
  <div class="container-fluid">
     
    <h1 class="green_txt">The First and Only Comprehensive Advanced  Artificial Intelligence Learning Management System</h1><br>
	<div class="play_icon"><a target="_blank" href="https://youtu.be/kSicXXdsU5Q"><img src="https://www.deepsphere.ai/wp-content/themes/Avada-Child-Theme/images/play-oil.png" alt="The First and Only Comprehensive Advanced  Artificial Intelligence Learning Management System" title="The First and Only Comprehensive Advanced  Artificial Intelligence Learning Management System"></a><br><br>
</div>
    <br><br><br>
  </div>
</section>
 
 
 
 
 

 


<h2 id="Contact-Content" class="section-title-no-border b-line-green">Contact</h2>
<section class="section address">
  <div class="bg-color"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-3">&nbsp;</div>
      <div class="col-lg-6">
        <div class="ds-logo"><img src="images/logo.png" alt="DeepSphere AI" title="DeepSphere AI"></div>
        <div class="box last-box">
          <h3>Point of Contact</h3>
          <p>Jothi Periasamy<br>
            Chief AI Architect <br>
          <hr/>
          <h5>Address</h5>
		   <h4 class="Ad-bold-Text">USA <img src="images/contact/united-states.png"></h4>
		  <p>DeepSphere.AI, Inc<br>
			2100 Geng Road <br>
            Suite 210 <br>
            Palo Alto <br>
            CA 94303
          <span class="m-none"><br>
            <br>
          </span>
          </p>
		    <h4 class="Ad-bold-Text">INDIA <img src="images/contact/india.png"></h4>
			<h5>Development Center</h5>
			<p>#368, First Floor, <br>
            4th Main Road, <br>
            Nolambur,<br>
            Mogappair West,<br>
			Chennai-600037 
			<span class="m-none"><br>
            <br>
          </span>
          </p>
		  <h5> Registered Office</h5>
		  	<p>No 38, Mahatma Gandhi Rd, <br>
            VGN Phase -4, <br>
           Nolambur,<br>
			Chennai-600037 
			<span class="m-none"><br>
            <br>
          </span>
          </p>
          <hr>
          <h5>Contact e-Mail</h5>
          <p><a href="mailto:lnfo@DeepSphere.AI">lnfo@DeepSphere.AI</a>
          <span class="m-none"><br>
            <br>
          </span>
          </p>
          <hr>
          <h5>Contact Phone</h5>
          <p>(916)-296-0228
          <span class="m-none"><br>
            <br>
          </span>
          </p>
          <hr>
          <h5>Web</h5>
          <p><a href="https://www.deepsphere.ai" target="_blank">DeepSphere.AI</a> </p>
          <p><a href="http://www.DSSchoolofAI.com">DSSchoolofAI.com</a> </p>
        </div>
      </div>
      <div class="col-lg-3">&nbsp;</div>
    </div>
  </div>
</section>
<section class="newsletter">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h4>Join our Newsletter list to get all the latest articles, posts and other benefits</h4>
      </div>
      <div class="col-lg-6">
        <div id="mc_embed_signup">
          <form action="https://deepsphere.us7.list-manage.com/subscribe/post?u=f4e814ca715faaf3d7ced0190&amp;id=e4c1645b90" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll">
              <div class="form">
                <div class="row">
                  <div class="col-lg-8">
                    <label for="mce-EMAIL" class="inline_div"></label>
                    <input type="email" value="" name="EMAIL" class="email form-control" id="mce-EMAIL" placeholder="Enter your email address" required>
                  </div>
                  <div aria-hidden="true" class="news_vis">
                    <input type="text" name="b_f4e814ca715faaf3d7ced0190_e4c1645b90" tabindex="-1" value="">
                  </div>
                  <div class="col-lg-4">
                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary button">
                  </div>
                  <div id="mce-responses" class="clear">
                    <div class="response r_1 wht_clr" id="mce-error-response"></div>
                    <div class="response r_1" id="mce-success-response"></div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script> 
        <!--End mc_embed_signup--> 
      </div>
    </div>
  </div>
</section>

<!--section start-->
<footer>
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="about-box">
            <h4 class="f24">About Us</h4>
<p>DeepSphere.AI is the most powerful AI platform for enterprise to discover invisible business  insights at the deepest level.</p>
<p>DeepSphere.AI is a cloud-ready, on-demand subscription platform for every enterprise to quickly adapt and advance AI through a progressive AI computing lab, advanced AI education, prebuilt industrial AI POC, and AI data engineering.</p>
<p>DeepSphere.AI platform brings together business processes, AI, IIoT, and big data, built-on open source technologies and enterprise systems with interoperable capabilities on SAP, Oracle, and MS systems.</p>
 <div class="social-links"> <a href="https://twitter.com/DeepsphereAI" target="_blank"><i class="fa fa-twitter fa-fw"></i></a> <a href="https://www.facebook.com/DeepSphereAI-103312568240722/" target="_blank"><i class="fa fa-facebook fa-fw"></i></a> <a href="https://www.instagram.com/deepsphere.ai/" target="_blank"><i class="fa fa-instagram fa-fw"></i></a> <a href="https://www.linkedin.com/company/deepsphere-ai/" target="_blank"><i class="fa fa-linkedin fa-fw"></i></a> </div>
          </div>
        </div>
        <div class="col-md-4">
          <h4>Quick Links </h4>
          <ul class="foot-links">
            <li><a href="https://www.deepsphere.ai/" target="_blank">DeepSphere.AI, Inc.</a></li>
<li><a href="http://www.dsschoolofai.com/" target="_blank">DeepSphere.AI School of AI</a></li>
<li><a href="https://www.deepsphere.ai/ai-products/ai-lab" target="_blank">Advanced AI Lab</a></li>
<li><a href="https://www.deepsphere.ai/corporate-finance/" target="_blank">AI Applied in Corporate Finance</a></li>
<li><a href="https://www.deepsphere.ai/advanced-AI-learning-python/" target="_blank">Master AI With Python</a></li>
<li><a href="https://www.deepsphere.ai/ai-learning/scala/" target="_blank">Master AI With Scala</a></li>
<li><a href="https://www.deepsphere.ai/ai-learning/R/" target="_blank">Master AI With R</a></li>
<li><a href="https://www.deepsphere.ai/ai-products/applied-in-health" target="_blank">AI Applied in Health</a></li>
<li><a href="https://www.deepsphere.ai/ai-products/applied-in-oilfield" target="_blank">AI Applied in Oil & Gas</a></li>
<li><a href="https://www.deepsphere.ai/ai-products/applied-in-energy" target="_blank">AI Applied in Energy</a></li>
<li><a href="https://www.deepsphere.ai/ai-products/applied-in-consumer" target="_blank">AI Applied in Consumer</a></li>
<li><a href="https://www.deepsphere.ai/ai-products/ai-education" target="_blank">Advanced AI Learning</a></li>
</ul>
        </div>
        <div class="col-md-2">
          <h4>Contact</h4>
          <div class="address-sc">
            <p>DeepSphere.AI</p>
            <p><a href="mailto:Info@ DeepSphere.AI">Info@ DeepSphere.AI</a></p>
            <p>(916)-296-0228</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="copyright">&copy; <script>document.write(new Date().getFullYear())</script> 
      DeepSphere.ai. All rights reserved </div>
  </div>
</footer>
<!--section end--> 

<a href="#top" id="myBtn"></a> 

<!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS  --> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script> 
<script src="js/bootstrap.min.js"></script> 
<script>
$(function() {
	//caches a jQuery object containing the header element
	var header = $(".clearHeader");
	$(window).scroll(function() {
		var scroll = $(window).scrollTop();	
		if (scroll >= 200) {
			header.removeClass('clearHeader').addClass("darkHeader");
		} else {
			header.removeClass("darkHeader").addClass('clearHeader');
		}
	});
});
</script> 
<script>

jQuery(document).ready(function() {
  
  var btn = $('#myBtn');

  $(window).scroll(function() {
    if ($(window).scrollTop() > 1200) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  });
 
});

</script>
<script type="text/javascript">
$(document).ready(function(){
    $("header .dropdown, .btn-group").hover(function(){
        var dropdownMenu = $(this).children(".dropdown-menu");
        if(dropdownMenu.is(":visible")){
            dropdownMenu.parent().toggleClass("open");
        }
    });
});     
</script>

<script>
$(document).ready(function(){
  $(".menu-link").click(function(){
    $(".menu").toggleClass("active");
  });
});
</script>
<script type="text/javascript">//<![CDATA[

    window.onload=function(){
      
jQuery(function() {

// delegated handler
jQuery(".list-group-tree").on('click', "[data-toggle=collapse]", function(){
  jQuery(this).toggleClass('in')
	jQuery(this).next(".listGroup.collapse").collapse('toggle');
  return false;
})

});


    }

  //]]></script>
</body>
</html>