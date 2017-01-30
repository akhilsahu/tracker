
<!DOCTYPE html>
<html>
<head>
<title>Lock Screen</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/style-responsive.css">
<!--[if lt IE 9]>
<script src="../asset/js/html5shiv.js"></script>
<script src="../asset/js/respond.min.js"></script>
<![endif]-->
<style type="text/css">
#freecssfooter{display:block;width:100%;padding:120px 0 20px;overflow:hidden;background-color:transparent;z-index:5000;text-align:center;}
#freecssfooter div#fcssholder div{display:none;}
#freecssfooter div#fcssholder div:first-child{display:block;}
#freecssfooter div#fcssholder div:first-child a{float:none;margin:0 auto;}
</style></head>
<body onload="getTime()">
<!--<script type="text/javascript">
(function(){
  var bsa = document.createElement('script');
     bsa.type = 'text/javascript';
     bsa.async = true;
     bsa.src = '//s3.buysellads.com/ac/bsa.js';
  (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);
})();
</script>-->
<div class="container">
  <div id="showtime"></div>
  <div class="col-lg-4 col-lg-offset-4">
    <div class="lock-screen">
      <h2><a data-toggle="modal" href="#myModal"><i class="fa fa-lock"></i></a></h2>
      <p>UNLOCK</p>
      <form action="Client/check" method="post">
      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Welcome Back</h4>
            </div>
            <div class="modal-body">
              <p class="centered"><img src="<?php echo base_url();?>asset/img/ui-sam.jpg" alt="website template image" width="80" class="img-circle"></p>
              <input type="password" name="password" placeholder="Password" autocomplete="off" class="form-control placeholder-no-fix">
            </div>
            <div class="modal-footer centered">
              <button data-dismiss="modal" class="btn btn-theme04" type="button">Cancel</button>
              <button class="btn btn-theme03" type="submit">Login</button>
            </div>
          </div>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
<script src="<?php echo base_url();?>asset/js/jquery.js"></script> 
<script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url();?>asset/js/jquery.backstretch.min.js"></script> 

<script>function getTime(){var e=new Date,n=e.getHours(),i=e.getMinutes(),c=e.getSeconds();i=checkTime(i),c=checkTime(c),document.getElementById("showtime").innerHTML=n+":"+i+":"+c,t=setTimeout(function(){getTime()},500)}function checkTime(e){return 10>e&&(e="0"+e),e}$.backstretch("<?php echo base_url();?>asset/img/login-bg.jpg",{speed:500});</script>
<div id="freecssfooter">
  <div id="fcssholder">
    <div id="bsap_2365" class="bsarocks bsap_b893e54e42ad5b76e7b252f59be18e67"></div>
    <div id="bsap_1635" class="bsarocks bsap_b893e54e42ad5b76e7b252f59be18e67"></div>
    <div id="bsap_1279659" class="bsarocks bsap_b893e54e42ad5b76e7b252f59be18e67" ></div>
  </div>
</div>
<script type="text/javascript">(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-159243-28', 'auto');ga('send', 'pageview');</script>
</body>
</html>