<?php 
    header ( "content-type: text/html; charset: UTF-8"); 
    header ( "cache-control: must-revalidate"); $offset=48 * 60 * 60; $expire="expires: " . gmdate ( "D, d M Y H:i:s", time() + $offset) . " GMT"; 
    header ($expire);
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="fp, Zadanie, rekrutacyjne, mateusz, bobola, front-end, developer" />
    <meta name="description" content="Zadanie rekrutacyjne - FP Recruitment Team" />
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="home" href="/" />
    <link rel="shortcut icon" href="/favicon.png" />
    <link rel="stylesheet" type="text/css" href="styles/css/main.min.css" />
    <link rel="canonical" href="http://www.bobola.net.pl/zadanie" />
    <meta property="og:title" content="Zadanie rekrutacyjne - FP Recruitment Team, Mateusz Bobola" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.bobola.net.pl/zadanie" />
    <meta property="og:site_name" content="Zadanie rekrutacyjne - FP Recruitment Team, Mateusz Bobola" />
    <!--[if lt IE 9]> 
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> 
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <title>Zadanie rekrutacyjne</title>
</head>

<body class="site-wrapper">
    <div class="container">
        <div class="box-active" style="display: none">
            <article class="box">
                <div class="bg "></div>
                <div class="box__wrapper">
                    <h2 class="box__wrapper--title">Lorem ipsum </h2>
                    <span class="close">&times;</span>
                    <div class="box__wrapper--content">
                        <p>Maecenas malesuada elit lectus felis, malesuada ultricies.</p>
                        <p>vestibulum id,  massa ac turpis faucibus orci luctus non, 
                            consectetuer lobortis quis, varius in, purus. Integer ultrices posuere cubilia Curae, 
                            Nulla ipsum dolor lacus, suscipit adipiscing.
                        </p>
                        <p>Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a, gravida vitae, 
                            dapibus vitae, ultricies eu, 
                            faucibus quis, porttitor eros cursus lectus, pellentesque eget, bibendum a, gravida ullamcorper qua
                        </p>
                        <img class="box__wrapper--content-img" src="images/image.jpg" alt="" />
                    </div>
                </div>
            </article>
        </div>
        <article class="box">
            <div class="bg yellow"></div>
            <div class="box__wrapper">
                <h2 class="box__wrapper--title">Lorem ipsum</h2>
                <div class="box__wrapper--content ellipsis">
                    <p>Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis</p>
                    <div class="hide">
                       <p>Aliquam erat ac ipsum. Integer aliquam purus. Quisque lorem tortor fringilla sed, 
                            vestibulum id, eleifend justo vel bibendum sapien massa ac turpis faucibus orci luctus non, 
                            consectetuer lobortis quis, varius in, purus. Integer ultrices posuere cubilia Curae, 
                            Nulla ipsum dolor lacus, suscipit adipiscing.
                        </p>
                        <p>Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a, gravida vitae, 
                            dapibus risus ante sodales lectus blandit eu, tempor diam pede cursus vitae, ultricies eu, 
                            faucibus quis, porttitor eros cursus lectus, pellentesque eget, bibendum a, gravida ullamcorper qua
                        </p>
                        <img class="box__wrapper--content-img" src="images/image.jpg" alt="" /> 
                    </div>
                </div>
                <a data-color="yellow" class="box__wrapper--link" href="#" title="">READ MORE</a>
            </div>
        </article>
        <article class="box ">
            <div class="bg orange"></div>
            <div class="box__wrapper">
                <h2 class="box__wrapper--title">Lorem ipsum</h2>
                <div class="box__wrapper--content ellipsis">
                    <p>Maecenas malesuada elit lectus felis, malesuada ultricie</p>
                    <div class="hide">
                       <p>Aliquam erat ac ipsum. Integer aliquam purus. Quisque lorem tortor fringilla sed, 
                            vestibulum id, eleifend justo vel bibendum sapien massa ac turpis faucibus orci luctus non, 
                            consectetuer lobortis quis, varius in, purus. Integer ultrices posuere cubilia Curae, 
                            Nulla ipsum dolor lacus, suscipit adipiscing.
                        </p>
                        <p>Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a, gravida vitae, 
                            dapibus risus ante sodales lectus blandit eu, tempor diam pede cursus vitae, ultricies eu, 
                            faucibus quis, porttitor eros cursus lectus, pellentesque eget, bibendum a, gravida ullamcorper qua
                        </p>
                        <img class="box__wrapper--content-img" src="images/image.jpg" alt="" /> 
                    </div>
                </div>
                <a data-color="orange" class="box__wrapper--link" href="#" title="">READ MORE</a>
            </div>
        </article>
        <article class="box double">
            <div class="bg blue"></div>
            <div class="box__wrapper">
                <h2 class="box__wrapper--title">Curabitur et ligula</h2>
                <div class="box__wrapper--content">
                    <div class="ellipsis">
                        <p>Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim. 
                        Phasellus fermentum in, dolor. Pellentesque facilisis. Nulla imperdiet sit amet magna. Vestibulum dapibus, mauris nec 
                        malesuada fames ac turpis velit, rhoncus e
                        </p>
                        <div class="hide">
                           <p>Aliquam erat ac ipsum. Integer aliquam purus. Quisque lorem tortor fringilla sed, 
                                vestibulum id, eleifend justo vel bibendum sapien massa ac turpis faucibus orci luctus non, 
                                consectetuer lobortis quis, varius in, purus. Integer ultrices posuere cubilia Curae, 
                                Nulla ipsum dolor lacus, suscipit adipiscing.
                            </p>
                            <p>Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a, gravida vitae, 
                                dapibus risus ante sodales lectus blandit eu, tempor diam pede cursus vitae, ultricies eu, 
                                faucibus quis, porttitor eros cursus lectus, pellentesque eget, bibendum a, gravida ullamcorper qua
                            </p>
                            <img class="box__wrapper--content-img" src="images/image.jpg" alt="" /> 
                        </div>
                    </div>
                </div>
                <a data-color="blue" class="box__wrapper--link" href="#" title="">READ MORE</a>
            </div>
        </article>
        <article class="box ">
            <div class="bg green"></div>
            <div class="box__wrapper">
                <h2 class="box__wrapper--title">Lorem ipsum</h2>
                <div class="box__wrapper--content ellipsis">
                    <p>Maecenas malesuada elit lectus felis, malesuada ultricie</p>
                    <div class="hide">
                       <p>Aliquam erat ac ipsum. Integer aliquam purus. Quisque lorem tortor fringilla sed, 
                            vestibulum id, eleifend justo vel bibendum sapien massa ac turpis faucibus orci luctus non, 
                            consectetuer lobortis quis, varius in, purus. Integer ultrices posuere cubilia Curae, 
                            Nulla ipsum dolor lacus, suscipit adipiscing.
                        </p>
                        <p>Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a, gravida vitae, 
                            dapibus risus ante sodales lectus blandit eu, tempor diam pede cursus vitae, ultricies eu, 
                            faucibus quis, porttitor eros cursus lectus, pellentesque eget, bibendum a, gravida ullamcorper qua
                        </p>
                        <img class="box__wrapper--content-img" src="images/image.jpg" alt="" /> 
                    </div>
                </div>
                <a data-color="green" class="box__wrapper--link" href="#" title="">READ MORE</a>
            </div>
        </article>
        <article class="box double">
            <div class="bg yellow"></div>
            <div class="box__wrapper">
                <h2 class="box__wrapper--title">Curabitur et ligula</h2>
                <div class="box__wrapper--content ellipsis">
                    <p>Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim. 
                        Phasellus fermentum in, dolor. Pellentesque facilisis. Nulla imperdiet sit amet magna. Vestibulum dapibus, mauris nec 
                        malesuada fames ac turpis velit, rhoncus e
                    </p>
                    <div class="hide">
                       <p>Aliquam erat ac ipsum. Integer aliquam purus. Quisque lorem tortor fringilla sed, 
                            vestibulum id, eleifend justo vel bibendum sapien massa ac turpis faucibus orci luctus non, 
                            consectetuer lobortis quis, varius in, purus. Integer ultrices posuere cubilia Curae, 
                            Nulla ipsum dolor lacus, suscipit adipiscing.
                        </p>
                        <p>Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a, gravida vitae, 
                            dapibus risus ante sodales lectus blandit eu, tempor diam pede cursus vitae, ultricies eu, 
                            faucibus quis, porttitor eros cursus lectus, pellentesque eget, bibendum a, gravida ullamcorper qua
                        </p>
                        <img class="box__wrapper--content-img" src="images/image.jpg" alt="" /> 
                    </div>
                </div>
                <a data-color="yellow" class="box__wrapper--link" href="#" title="">READ MORE</a>
            </div>
        </article>
        <article class="box ">
            <div class="bg pink"></div>
            <div class="box__wrapper">
                <h2 class="box__wrapper--title">Lorem ipsum</h2>
                <div class="box__wrapper--content ellipsis">
                    <p>Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis</p>
                    <div class="hide">
                       <p>Aliquam erat ac ipsum. Integer aliquam purus. Quisque lorem tortor fringilla sed, 
                            vestibulum id, eleifend justo vel bibendum sapien massa ac turpis faucibus orci luctus non, 
                            consectetuer lobortis quis, varius in, purus. Integer ultrices posuere cubilia Curae, 
                            Nulla ipsum dolor lacus, suscipit adipiscing.
                        </p>
                        <p>Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a, gravida vitae, 
                            dapibus risus ante sodales lectus blandit eu, tempor diam pede cursus vitae, ultricies eu, 
                            faucibus quis, porttitor eros cursus lectus, pellentesque eget, bibendum a, gravida ullamcorper qua
                        </p>
                        <img class="box__wrapper--content-img" src="images/image.jpg" alt="" /> 
                    </div>
                </div>
                <a data-color="pink" class="box__wrapper--link" href="#" title="">READ MORE</a>
            </div>
        </article>
        <article class="box">
            <div class="bg grey"></div>
            <div class="box__wrapper">
                <h2 class="box__wrapper--title">Lorem ipsum</h2>
                <div class="box__wrapper--content ellipsis">
                    <p>Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis</p>
                    <div class="hide">
                       <p>Aliquam erat ac ipsum. Integer aliquam purus. Quisque lorem tortor fringilla sed, 
                            vestibulum id, eleifend justo vel bibendum sapien massa ac turpis faucibus orci luctus non, 
                            consectetuer lobortis quis, varius in, purus. Integer ultrices posuere cubilia Curae, 
                            Nulla ipsum dolor lacus, suscipit adipiscing.
                        </p>
                        <p>Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a, gravida vitae, 
                            dapibus risus ante sodales lectus blandit eu, tempor diam pede cursus vitae, ultricies eu, 
                            faucibus quis, porttitor eros cursus lectus, pellentesque eget, bibendum a, gravida ullamcorper qua
                        </p>
                        <img class="box__wrapper--content-img" src="images/image.jpg" alt="" /> 
                    </div>
                </div>
                <a data-color="grey" class="box__wrapper--link" href="#" title="">READ MORE</a>
            </div>
        </article>
        <article class="box">
            <div class="bg yellow"></div>
            <div class="box__wrapper">
                <h2 class="box__wrapper--title">Lorem ipsum</h2>
                <div class="box__wrapper--content ellipsis">
                    <p>Maecenas malesuada elit lectus felis, malesuada ultricie</p>
                    <div class="hide">
                       <p>Aliquam erat ac ipsum. Integer aliquam purus. Quisque lorem tortor fringilla sed, 
                            vestibulum id, eleifend justo vel bibendum sapien massa ac turpis faucibus orci luctus non, 
                            consectetuer lobortis quis, varius in, purus. Integer ultrices posuere cubilia Curae, 
                            Nulla ipsum dolor lacus, suscipit adipiscing.
                        </p>
                        <p>Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a, gravida vitae, 
                            dapibus risus ante sodales lectus blandit eu, tempor diam pede cursus vitae, ultricies eu, 
                            faucibus quis, porttitor eros cursus lectus, pellentesque eget, bibendum a, gravida ullamcorper qua
                        </p>
                        <img class="box__wrapper--content-img" src="images/image.jpg" alt="" /> 
                    </div>
                </div>
                <a data-color="yellow" class="box__wrapper--link" href="#" title="">READ MORE</a>
            </div>
        </article>
        <article class="box">
            <div class="bg darkgreen"></div>
            <div class="box__wrapper">
                <h2 class="box__wrapper--title">Lorem ipsum</h2>
                <div class="box__wrapper--content ellipsis">
                    <p>Maecenas malesuada elit lectus felis, malesuada ultricie</p>
                    <div class="hide">
                       <p>Aliquam erat ac ipsum. Integer aliquam purus. Quisque lorem tortor fringilla sed, 
                            vestibulum id, eleifend justo vel bibendum sapien massa ac turpis faucibus orci luctus non, 
                            consectetuer lobortis quis, varius in, purus. Integer ultrices posuere cubilia Curae, 
                            Nulla ipsum dolor lacus, suscipit adipiscing.
                        </p>
                        <p>Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a, gravida vitae, 
                            dapibus risus ante sodales lectus blandit eu, tempor diam pede cursus vitae, ultricies eu, 
                            faucibus quis, porttitor eros cursus lectus, pellentesque eget, bibendum a, gravida ullamcorper qua
                        </p>
                        <img class="box__wrapper--content-img" src="images/image.jpg" alt="" /> 
                    </div>
                </div>
                <a data-color="darkgreen" class="box__wrapper--link" href="#" title="">READ MORE</a>
            </div>
        </article>
        <article class="box">
            <div class="bg orange"></div>
            <div class="box__wrapper">
                <h2 class="box__wrapper--title">Lorem ipsum</h2>
                <div class="box__wrapper--content ellipsis">
                    <p>Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis</p>
                    <div class="hide">
                       <p>Aliquam erat ac ipsum. Integer aliquam purus. Quisque lorem tortor fringilla sed, 
                            vestibulum id, eleifend justo vel bibendum sapien massa ac turpis faucibus orci luctus non, 
                            consectetuer lobortis quis, varius in, purus. Integer ultrices posuere cubilia Curae, 
                            Nulla ipsum dolor lacus, suscipit adipiscing.
                        </p>
                        <p>Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a, gravida vitae, 
                            dapibus risus ante sodales lectus blandit eu, tempor diam pede cursus vitae, ultricies eu, 
                            faucibus quis, porttitor eros cursus lectus, pellentesque eget, bibendum a, gravida ullamcorper qua
                        </p>
                        <img class="box__wrapper--content-img" src="images/image.jpg" alt="" /> 
                    </div>
                </div>
                <a data-color="orange" class="box__wrapper--link" href="#" title="">READ MORE</a>
            </div>
        </article>
    </div>
    <div class="box-active-bg"></div>
    <script src="js/min/script.min.js"></script>
</html>
