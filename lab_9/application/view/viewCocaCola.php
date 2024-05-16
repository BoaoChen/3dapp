<!DOCTYPE html>
<html lang="en">

<head>

    <title>Lab 9 MVC Web 3D Applications</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../application/css/bootstrap-4.4.1.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../application/css/x3dom.css">
    <link rel="stylesheet" href="../application/css/custom.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../application/css/jquery.fancybox.min.css">

</head>

<body id="bodyColor">
    <!-- Logo and navigation bar -->
    <nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
        <div class="container-fluid">
            <!-- Brand -->
            <div class="logo">
                <a class="navbar-brand" href="#">
                    <h1>1</h1>
                    <h1>oca</h1>
                    <h2>Cola</h2>
                    <h3>Journey</h3>
                    <p>Refreshing the world, one story at a time</p>
                </a>
            </div>
            <!-- Collapsible Navbar Menu Icon -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a id="navHome" class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a id="navAbout" class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="About Web 3D Applications" data-content="3D Apps is a final year and postgraduate module ...">
                            About
                        </a>
                    </li>
                    <!-- Dropdown -->
                    <li class="nav-item">
                        <a id="navModels" class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="X3D Models" data-content="There are three X3D models: Coke, Sprite and Pepper">Models</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid main_contents">
        <!-- Home page block element -->
        <div id="home">
            <div class="row">
                <div class="col-sm-12">
                    <a href="https://www.coca-colacompany.com/about-us/history">
                    <div id="main_3d_image">
                        <div id="main_text" class="col-xs-12 col-sm-4">
                            <div id="title_home"></div>
                            <div id="subTitle_home"></div>
                            <div id="description_home"></div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <section class="product-section">
                <h1 class="text-center mt-5 mb-3">Our Products</h1>
            <div class="row">
                <!-- Coca Cola Column -->
                <div class="col-md-4">
                    <div class="card">
                        <a href="../application/assets/images/render_images/coke.jpg" data-fancybox data-caption="My 3D Coke Can Render" class="thumbnail">
                            <img src="../application/assets/images/site_images/coca_cola.jpg" class="card-img-top img-fluid img-thumbnail" alt="Coca Cola">
                        </a>
                        <div class="card-body">
                            <div id="title_left" class="card-title drinksText"></div>
                            <div id="subTitle_left" class="card-subtitle drinksText"></div>
                            <div id="description_left" class="card-text drinksText"></div>
                            <a href="https://www.coca-cola.com/gb/en/brands/coca-cola-original-taste" class="btn btn-primary">Find out more ...</a>
                        </div>
                    </div>
                </div>
                <!-- Sprite Column -->
                <div class="col-md-4">
                    <div class="card">
                        <a href="../application/assets/images/render_images/sprite.jpg" data-fancybox data-caption="My 3D Sprite Bottle Render" class="thumbnail">
                            <img src="../application/assets/images/site_images/sprite.jpg" class="card-img-top img-fluid img-thumbnail" alt="Sprite">
                        </a>
                        <div class="card-body">
                            <div id="title_centre" class="card-title drinksText"></div>
                            <div id="subTitle_centre" class="card-subtitle drinksText"></div>
                            <div id="description_centre" class="card-text drinksText"></div>
                            <a href="https://www.coca-cola.com/gb/en/brands/sprite" class="btn btn-primary">Find out more ...</a>
                        </div>
                    </div>
                </div>
                <!-- Dr Pepper Column -->
                <div class="col-md-4">
                    <div class="card">
                        <a href="../application/assets/images/render_images/pepper.jpg" data-fancybox data-caption="My 3D Pepper Cup Render" class="thumbnail">
                            <img src="../application/assets/images/site_images/dr_pepper.jpg" class="card-img-top img-fluid img-thumbnail" alt="Dr Pepper">
                        </a>
                        <div class="card-body">
                            <div id="title_right" class="card-title drinksText"></div>
                            <div id="subTitle_right" class="card-subtitle drinksText"></div>
                            <div id="description_right" class="card-text drinksText"></div>
                            <a href="https://www.coca-cola.com/gb/en/brands/dr-pepper" class="btn btn-primary">Find out more ...</a>
                        </div>
                    </div>
                </div>
            </div>
            </section>
        </div>
        <!-- End home page -->
        <!-- About page block element -->
        <div id="about" style="display:none;">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div id="title_About" class="card-title"></div>
                        <div id="description_About" class="card-text"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Coke page block element -->
        <div id="models" style="display:none;">
            <div class="row d-flex">
                <!-- Column to hold the X3D Model -->
                <div class="col-md-8 x3d-card">
                    <div class="card text-left">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a id="navCoke" class="nav-link active" href="#">X3D Models</a>
                                </li>
                                <div class="ml-auto">
                                <button id="modelButton" type="button" class="btn btn-success btn-responsive" onMouseUp="cokeScene(); cokeDescription();">Coke</button>
                                <button id="modelButton" type="button" class="btn btn-success btn-responsive" onMouseUp="spriteScene(); spriteDescription();">Sprite</button>
                                <button id="modelButton" type="button" class="btn btn-success btn-responsive" onMouseUP="pepperScene(); pepperDescription();">Pepper</button>
                                </div>
                            </ul>
                        </div>


                        <div id="x3dBackground" class="card-body">
                    <!-- X3D Models -->
                    <div class="x3d_model">
                        <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
                        <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>
                        <div id="x3dModelTitle_pepper" class="card-title drinksText"></div>
                        
                        <!-- Place the X3D code here -->
                        <div class="model3D">
                          <x3d id="wire">
                            <scene>
                                <Switch whichChoice="0" id='SceneSwitch'>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/cola can.x3d"> </inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/Sprite.x3d"> </inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/pepper.x3d"> </inline>
                                    </transform>
                                </Switch>
                            </scene>
                          </x3d>
                        </div> 
                        <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
                        <div id="x3dCreationMethod_sprite" class="card-text drinksText"></div>
                        <div id="x3dCreationMethod_pepper" class="card-text drinksText"></div>
                    </div>
                  </div>


                    
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                                  <!-- Column for the camera view controls -->
                                  <div class="col-sm-12">
                                    <div class="card text-left">
                                        <div class="card-header">
                                          <ul class="nav nav-tabs card-header-tabs">
                                          <!-- Dropdown nav-tab -->
                                          <li class="nav-item dropdown">
                                              <a class="nav-link active" href="#">Cameras</a>
                                            </li>
                                          </ul>
                                        </div>
                                        <div class="card-body">
                                          <div class="card-Title x3dCamera_Subtitle drinksText">
                                            <h3>Camera Views</h3>
                                          </div>                            
                                          <a href="#" class="btn btn-success btn-responsive" onclick="cameraFront();">Default</a>
                                          <a href="#" class="btn btn-primary btn-responsive" onclick="cameraFront();">Front</a>
                                          <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</a>
                                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</a>
                                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</a>
                                          <a href="#" class="btn btn-outline-dark btn-responsive" onclick="cameraTop();">Top</a>
                                          <a href="#" class="btn btn-outline-dark btn-responsive" onclick="cameraBottom();">Bottom</a>
                                          <div class="card-text x3dCameraDescription drinksText">
                                            <p>These buttons select a limited range of X3D model viewpoints, one for each camera view.</p>
                                          </div>
                                        </div>
                                      </div>
                                </div>
                                <!-- Column for the animation controls -->
                                <div class="col-sm-12">
                                    <div class="card text-left">
                                        <div class="card-header">
                                          <ul class="nav nav-tabs card-header-tabs">
                                            <li class="nav-item">
                                              <a class="nav-link active" href="#">Animation</a>
                                            </li>
                                          </ul>
                                        </div>
                                        <div class="card-body">
                                          <div class="card-Title x3dAnimationSubtitle drinksText">
                                            <h3>Animation Options</h3>
                                          </div>
                                          <a href="#" class="btn btn-outline-dark btn-responsive" onclick="spinX();">RotX</a>
                                          <a href="#" class="btn btn-outline-dark btn-responsive" onclick="spinY();">RotY</a>
                                          <a href="#" class="btn btn-outline-dark btn-responsive" onclick="spinZ();">RotZ</a>
                                          <a href="#" class="btn btn-outline-light btn-responsive" onclick="stopRotation();">Stop</a>
                                          <div class="card-text x3dAnimationDescription drinksText">
                                              <p>These buttons select a range of X3D animation options. 
                                                Only one type of rotation motion can be run at a time.</p>
                                          </div>
                                        </div>
                                      </div>
                                </div>
                                <!-- Column for the render type and lighting controls -->
                                <div class="col-sm-12">
                                    <div class="card text-left">
                                        <div class="card-header">
                                          <ul class="nav nav-tabs card-header-tabs">
                                            <li class="nav-item">
                                              <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" >Render</a>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Polygon</a>
                                                <a class="dropdown-item" href="#" onclick="wireframe();">Wireframe</a>
                                                <a class="dropdown-item" href="#">Vertex</a>
                                              </div>
                                            </li>
                                          <!-- Dropdown nav-tab -->
                                          <li class="nav-item dropdown">
                                              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Lights</a>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#" onclick="headLight();">Default</a>
                                                <a class="dropdown-item" href="#" onclick="omniLight();">Onmi On/Off</a>
                                                <a class="dropdown-item" href="#" onclick="targetLight();">Target On/Off</a>
                                                <a class="dropdown-item" href="#" onclick="headLight();">Headlight On/Off</a>
                                              </div>
                                            </li>
                                          </ul>
                                        </div>
                                        <div class="card-body">
                                          <div class="card-Title x3dRendersubtitle drinksText">
                                            <h3>Render and Lighting Options</h3>
                                          </div>
                                          <a href="#" class="btn btn-success btn-responsive">Poly</a>
                                          <a href="#" class="btn btn-secondary btn-responsive" onclick="wireframe();">Wire</a>
                                          <a href="#" class="btn btn-success btn-responsive" onclick="headLight();">Headlight</a>
                                          <a href="#" class="btn btn-outline-dark btn-responsive">Default</a>
                                          <div class="card-text x3dRenderDescription drinksText">
                                              <p>These buttons select a limited number of render and lighting options; use the dropdown menus for more options.</p>
                                          </div>
                                        </div>
                                      </div>
                                </div>
                    </div>
                </div>    
                                
            </div>
        </div>


                <!-- Start the photogallery panels -->
                <div id="photogallery" class="row" style="display:none;">

                                  <!-- Column to hold 3D Image gallery -->
                <div class="col-12">
                    <div class="card text-left">
                        <div class="card-header gallery-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Gallery</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="card-title title_gallery drinksText"></div>
                            <div class="gallery" id="gallery"></div>
                            <div class="card-text description_gallery drinksText"></div>
                        </div>
                    </div>
                </div>
          </div> <!-- End the photogallery panels -->

            <!-- Row to hold 1 card to hold the coca cola descriptive text, etc. -->
            <div id="cokeDescription" class="row" style="display:none;">
                <!-- Coca Cola Column -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="historytext">
                            <div id="title_coke" class="card-title drinksText"></div>
                            <div id="subTitle_coke" class="card-subtitle drinksText"></div>
                            <div id="description_coke" class="card-text drinksText"></div>
                            <a href="https://www.coca-colacompany.com/about-us/history" 
                            class="btn btn-primary btn-responsive">Visit Coca Cola</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End coke page -->

            <!-- Row to hold 1 card to hold the sprite descriptive text, etc.-->
            <div id="spriteDescription" class="row" style="display:none;">
              <div class="col-12">
                  <div class="card">
                      <div class="card-body">
                        <div class="historytext">
                          <div id="title_sprite" class="card-title drinksText"></div>
                          <div id="subTitle_sprite" class="card-subtitle drinksText"></div>
                          <div id="description_sprite" class="card-text drinksText"></div>  
                          <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" 
                          class="btn btn-primary btn-responsive">Visit Sprite</a>  
                        </div>               
                      </div>
                  </div>
              </div>
            </div> <!-- End sprite page -->

            <!-- Row to hold 1 card to hold the pepper descriptive text, etc.-->
            <div id="pepperDescription" class="row" style="display:none;">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="historytext">
                            <div id="title_pepper" class="card-title drinksText"></div>
                            <div id="subTitle_pepper" class="card-subtitle drinksText"></div>
                            <div id="description_pepper" class="card-text drinksText"></div>  
                            <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" 
                            class="btn btn-primary btn-responisve">Visit Pepper</a>
                        </div>               
                        </div>
                    </div>
                </div>
            </div> <!-- End pepper page --> 
      
    </div>

    <!-- Your 3D App footer -->
    <nav id="footerColor" class="navbar navbar-expand-sm footer">
        <div class="container-fluid">
            <div class="navbar-text float-left copyright">
                <p><span class="align-baseline"></span>&copy Mobile Web 3D Applications | <a href="javascript:changeLook()">Restyle</a> | <a href="javascript:changeBack()">Reset</a></span></p>
            </div>
            <div class="navbar-text social">
                <a href="#"><i class="fab fa-github-square fa-2x fa-pull-right"></i></a>
                <a href="#"><i class="fab fa-google-plus-square fa-2x fa-pull-right"></i></a>
                <a href="#"><i class="fab fa-twitter-square fa-2x fa-pull-right"></i></a>
                <a href="#"><i class="fab fa-facebook-square fa-2x fa-pull-right"></i></a>
            </div>
        </div>
    </nav>

    <!-- My 3D App modals -->
    <!-- Contact modal -->
    <!-- The Modal -->
    <div class="modal fade" id="contactModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">3D App Contact Details</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <p>Boao Chen, University of Sussex, Email: bc418@sussex.ac.uk</p>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../application/js/jquery-3.4.1.js" crossorigin="anonymous"></script>

    <script src="../application/js/popper.min.js" crossorigin="anonymous"></script>

    <script src="../application/js/bootstrap-4.4.1.js" crossorigin="anonymous"></script>

    <script src="../application/js/x3dom.js"></script>

    <script src="https://kit.fontawesome.com/6ac3910c4e.js" crossorigin="anonymous"></script>

    <script src="../application/js/custom.js" crossorigin="anonymous"></script>

    <script src="../application/js/swap_restyle.js"></script>

    <script src="../application/js/gallery_generator.js"></script>

    <script src="../application/js/getJsonData.js"></script>

    <script src="../application/js/modelInteractions.js"></script>

    <script src="../application/js/jquery.fancybox.min.js"></script>
    
</body>
</html>
