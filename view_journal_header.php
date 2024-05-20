<style>
    .separator {
  display: flex;
  align-items: center;
  text-align: center;
}

.separator::before,
.separator::after {
  content: '';
  flex: 1;
  border-bottom: 1px dotted #000; 
}

.separator:not(:empty)::before {
  margin-right: .25em;
}

.separator:not(:empty)::after {
  margin-left: .25em;
}
</style>
<header class="header-area">
    <div class="header-top bg-img" style="background-image:url(images/header-shape.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 col-12 col-sm-8">
                    <div class="header-contact">
                        <ul>
                            <li><i class="fa fa-phone"></i>+263 77 223 4965</li>
                            <li><i class="fa fa-envelope-o"></i><a href="#">research@muast.ac.zw</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-12 col-sm-4">
                    <div class="login-register">
                        <ul>
                            <li><i class="fa fa-globe fa-1x"  aria-hidden="true"></i><a href="#">www.muast.ac.zw</a></li>
                            <li><span>Editorial Board</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom sticky-bar clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12" >
                    <div style="text-align:center" class="logo">
                    <a href="index.html">
                            <img alt src="images/logo.png" style="height:60px;">
                        </a>
                    </div>
                </div>
                 
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12" >
                    <div style="text-align:center" class="logo">
                    <div class="separator"><b><h1><?php echo $title;?></h1></b></div>
                    </div>
                </div>
                 
            </div> 
        </div>
    </div>
</header>