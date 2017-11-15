<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:61:"/data/wwwroot/www.hrbkcwl.com/app/home/view/product_list.html";i:1507795014;s:60:"/data/wwwroot/www.hrbkcwl.com/app/home/view/common_head.html";i:1507885289;s:67:"/data/wwwroot/www.hrbkcwl.com/app/home/view/common_photography.html";i:1506478985;s:62:"/data/wwwroot/www.hrbkcwl.com/app/home/view/common_footer.html";i:1507819405;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="M_Adnan">
    <title><?php if($info['title']): ?><?php echo $info['title']; ?>-<?php echo $sys['title']; elseif($title): ?><?php echo $title; ?>-<?php echo $sys['title']; else: ?><?php echo $sys['title']; ?>_服务最好的网站建设公司<?php endif; ?></title>
    <meta name="keywords" content="<?php if($info[ 'keywords']): ?><?php echo $info['keywords']; elseif($keywords): ?><?php echo $keywords; else: ?><?php echo $sys['key']; endif; ?>" />
    <meta name="description" content="<?php if($info[ 'description']): ?><?php echo $info['description']; elseif($description): ?><?php echo $description; else: ?><?php echo $sys['des']; endif; ?>" />
    <meta name="author" content="wzs">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="__HOME__/rs-plugin/rs-plugin/css/settings.css" media="screen" />

    <!-- Bootstrap Core CSS -->
    <link href="__HOME__/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="__HOME__/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="__HOME__/css/ionicons.min.css" rel="stylesheet">
    <link href="__HOME__/css/main.css" rel="stylesheet">
    <link href="__HOME__/css/style.css" rel="stylesheet">
    <link href="__HOME__/css/responsive.css" rel="stylesheet">

    <!-- COLORS -->
    <link rel="stylesheet" id="color" href="__HOME__/css/default.css">

    <!-- JavaScripts -->
    <script src="__HOME__/js/jquery-1.11.3.min.js"></script>
    <script src="__HOME__/js/modernizr.js"></script>

    <!-- Online Fonts -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,200,300,500,600,700,800,900,100' rel='stylesheet' type='text/css'> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="animated infinite">

    <!-- Wrap -->
    <div id="wrap">

        <!-- header -->
        <header class="header-normal">
            <div class="sticky">
                <div class="container">
                    <!-- Logo -->
                    <div class="logo"><a href="#."><img class="img-responsive" src="__HOME__/images/logo.png" alt=""></a></div>

                    <!-- Navigation -->
                    <nav class="navbar webimenu">
                        <!-- MENU BUTTON RESPONSIVE -->
                        <div class="menu-toggle"><i class="fa fa-bars"> </i></div>
                        <!-- NAV -->
                        <ul class="nav ownmenu">
                            <li <?php if($controller == 'index'): ?>class="active meganav" <?php endif; ?>>
                                <a href="<?php echo url('home/index/index'); ?>" title="网站首页">网站首页</a>
                            </li>
                            <?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <li>
                                <a href="<?php echo url('home/'.$vo['catdir'].'/index',['catId'=>$vo['id']] ); ?>" title="<?php echo $vo['catname']; ?>"><?php echo $vo['catname']; ?></a>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </nav>

                    <!-- Social Icons -->
                    <div class="social_icons"><a href="#." target="_blank"><i class="fa fa-weibo"></i></a> <a href="#." target="_blank"><i
                        class="fa fa-qq"></i></a> <a href="#." target="_blank"><i class="fa fa-weixin"></i></a> <a href="#."
                            target="_blank"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>
        </header>

    <section class="sub-bnr parallax-bg" data-stellar-background-ratio="0.5" style="background:url(__HOME__/images/sub-bnr-bg.jpg) no-repeat;">
        <div class="container">
            <div class="position-center-center">
                <h3>产品中心</h3>

                <!--======= Breadcrumb =========-->
                <ol class="breadcrumb">
                    <li><a href="index.html">首页</a></li>
                    <li class="active">产品中心</li>
                </ol>
            </div>
        </div>

        <!-- GO DOWN -->
        <div class="scroll"><a href="#content" class="go-down"><img src="__HOME__/images/go-down.png" alt=""></a></div>
    </section>

    <!-- Content -->
    <div id="content">

        <!-- Welcome -->
        <section class="padding-top-150 padding-bottom-100">
            <div class="container">

                <!-- Heading -->
                <div class="heading text-center"><span>WHAT WE DO</span>
                    <h4>我们提供最好的产品</h4>
                    <hr>
                    <p>
                        提供高端网站建设一条龙服务！丰富的产品种类，领先的技术实力，为您提供最全面的服务！
                    </p>
                </div>

                <!-- SERVICES -->
                <div class="services best-services">
                    <ul class="row list">

                        <!-- SERVICES -->
                        <li class="col-md-3" data-content="#colio_c1">
                            <article><i class="lnr lnr-laptop-phone"></i>
                                <hr>
                                <h6>网站建设</h6>
                                <a class="colio-link btn-1" href="#"> 点我！看更多 <i class="lnr lnr-chevron-down"></i></a>
                            </article>
                        </li>

                        <!-- SERVICES -->
                        <li class="col-md-3" data-content="#colio_c2">
                            <article style="background: url(__HOME__/images/ser-bg-2.jpg) no-repeat;"><i class="lnr lnr-eye"></i>
                                <hr>
                                <h6>淘宝美工</h6>
                                <a class="colio-link btn-1" href="#"> 点我！看更多 <i class="lnr lnr-chevron-down"></i></a>
                            </article>
                        </li>

                        <!-- SERVICES -->
                        <li class="col-md-3" data-content="#colio_c3">
                            <article style="background: url(__HOME__/images/ser-bg-3.jpg) no-repeat;"><i class="lnr lnr-rocket"></i>
                                <hr>
                                <h6>平面设计</h6>
                                <a class="colio-link btn-1" href="#"> 点我！看更多 <i class="lnr lnr-chevron-down"></i></a>
                            </article>
                        </li>

                        <!-- SERVICES -->
                        <li class="col-md-3" data-content="#colio_c4">
                            <article style="background: url(__HOME__/images/ser-bg-4.jpg) no-repeat;"><i class="icon-tools-2"></i>
                                <hr>
                                <h6>微营销</h6>
                                <a class="colio-link btn-1" href="#"> 点我！看更多 <i class="lnr lnr-chevron-down"></i></a>
                            </article>
                        </li>

                        <!-- SERVICES -->
                        <li class="col-md-3" data-content="#colio_c5">
                            <article style="background: url(__HOME__/images/ser-bg-5.jpg) no-repeat;"><i class=" icon-pencil"></i>
                                <hr>
                                <h6>SEO优化</h6>
                                <a class="colio-link btn-1" href="#"> 点我！看更多 <i class="lnr lnr-chevron-down"></i></a>
                            </article>
                        </li>

                        <!-- SERVICES -->
                        <li class="col-md-3" data-content="#colio_c6">
                            <article style="background: url(__HOME__/images/ser-bg-6.jpg) no-repeat;"><i class="icon-wine"></i>
                                <hr>
                                <h6>手机站</h6>
                                <a class="colio-link btn-1" href="#"> 点我！看更多 <i class="lnr lnr-chevron-down"></i></a>
                            </article>
                        </li>

                        <!-- SERVICES -->
                        <li class="col-md-3" data-content="#colio_c7">
                            <article style="background: url(__HOME__/images/ser-bg-7.jpg) no-repeat;"><i class="icon-trophy"></i>
                                <hr>
                                <h6>H5场景秀</h6>
                                <a class="colio-link btn-1" href="#"> 点我！看更多 <i class="lnr lnr-chevron-down"></i></a>
                            </article>
                        </li>

                        <!-- SERVICES -->
                        <li class="col-md-3" data-content="#colio_c8">
                            <article style="background: url(__HOME__/images/ser-bg-8.jpg) no-repeat;"><i class="icon-layers"></i>
                                <hr>
                                <h6>视频制作</h6>
                                <a class="colio-link btn-1" href="#"> 点我！看更多 <i class="lnr lnr-chevron-down"></i></a>
                            </article>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Colio Tab Open 1 网站建设 -->
            <div id="colio_c1" class="colio-content">
                <div class="main">

                    <!-- Colio Inside -->
                    <div class="inside-colio">
                        <!-- Big Icon -->
                        <i class="icon-big lnr lnr-laptop-phone"></i>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <h4>高端网站建设</h4>
                                    <hr>
                                    <p>
                                        全球现在约有15亿的用户接入了因特网，今后会更为壮大。通过建设一个网站，可以更好的展示企业/个人或者机构。在当前门户博客、网店、微博等平台虽然可以更好的对自己展示。但是网站仍然是最重要的自我展示的方案。因此，建设一个与自身形象相称或者更新颖的网站，是当前时代必不可少的选择！
                                    </p>

                                    <!-- Feature List Check -->
                                    <div class="feature-list-check margin-top-30">
                                        <h5>产品特点</h5>
                                        <ul class="margin-top-20">
                                            <li>HTML5+CSS3</li>
                                            <li>响应式设计&nbsp;多终端呈现</li>
                                            <li>舒适的用户体验</li>
                                            <li>营销效果</li>
                                        </ul>
                                        <a href="#" class="btn margin-top-20">查看详情</a>

                                    </div>
                                </div>
                                <div class="col-md-5"><img src="__HOME__/images/cp1.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Colio Tab Open 2 淘宝美工 -->
            <div id="colio_c2" class="colio-content">
                <div class="main">

                    <!-- Colio Inside -->
                    <div class="inside-colio">
                        <!-- Big Icon -->
                        <i class="icon-big icon-right lnr lnr-eye"></i>
                        <div class="container">
                            <div class="row">

                                <!-- Colio Image -->
                                <div class="col-md-5"><img src="__HOME__/images/cp2.png" alt=""></div>
                                <!-- Colio Content -->
                                <div class="col-md-7">
                                    <h4>天猫&淘宝店铺装修</h4>
                                    <hr>
                                    <p>
                                        如今电子商务行业竞争越来越大。想要赢得一席之地，必须费尽心思。一个好的店铺设计，能够给客户带来的不只是产品更是一种视觉上的享受。
                                    </p>

                                    <!-- Feature List Check -->
                                    <div class="feature-list-check margin-top-30">
                                        <h5>产品特点</h5>
                                        <ul class="margin-top-20">
                                            <li>品牌识别&nbsp;增加回头率</li>
                                            <li>良好的产品展示</li>
                                            <li> 引入流量&nbsp;提升销售</li>
                                            <li> 装修好的网店更赚钱</li>
                                        </ul>
                                        <a href="#" class="btn margin-top-20">查看详情</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Colio Tab Open 3 平面 -->
            <div id="colio_c3" class="colio-content">
                <div class="main">

                    <!-- Colio Inside -->
                    <div class="inside-colio">
                        <!-- Big Icon -->
                        <i class="icon-big lnr lnr-rocket"></i>
                        <div class="container">
                            <div class="row">

                                <!-- Colio Content -->
                                <div class="col-md-7">
                                    <h4>界面/品牌设计</h4>
                                    <hr>
                                    <p>界面是人与物体互动的媒介，界面就是设计师赋予物体的新面孔，深入剖析企业需求，致力于树立良好的企业品牌形象。</p>

                                    <!-- Feature List Check -->
                                    <div class="feature-list-check margin-top-30">
                                        <h5>产品特点</h5>
                                        <ul class="margin-top-20">
                                            <li>好的创意，创造好的作品</li>
                                            <li>新颖合理的排版布局</li>
                                            <li>画面色彩搭配合理</li>
                                            <li>细心校稿&nbsp;完美印刷</li>
                                        </ul>
                                        <a href="#" class="btn margin-top-20">查看详情</a>
                                    </div>
                                </div>

                                <!-- Colio Img -->
                                <div class="col-md-5"><img src="__HOME__/images/cp3.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Colio Tab Open 4 微营销 -->
            <div id="colio_c4" class="colio-content">
                <div class="main">

                    <!-- Colio Inside -->
                    <div class="inside-colio">
                        <!-- Big Icon -->
                        <i class="icon-big icon-right icon-tools-2"></i>
                        <div class="container">
                            <div class="row">
                                <!-- Colio Image -->
                                <div class="col-md-5"><img src="__HOME__/images/cp4.png" alt=""></div>

                                <!-- Colio Content -->
                                <div class="col-md-7">
                                    <h4>微信深度定制</h4>
                                    <hr>
                                    <p>
                                        在微信框架内的定制与二次开发，提供微官网、微商城、微活动等各类行业定制方案并提供后续的营销与推广服务。
                                    </p>

                                    <!-- Feature List Check -->
                                    <div class="feature-list-check margin-top-30">
                                        <h5>产品特点</h5>
                                        <ul class="margin-top-20">
                                            <li>高品质视觉设计</li>
                                            <li>强大多样的功能组件</li>
                                            <li>定制功能开发</li>
                                            <li>挖掘潜在客户&nbsp;增强粉丝黏度</li>
                                        </ul>
                                        <a href="#" class="btn margin-top-20">查看详情</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Colio Tab Open 1 SEO-->
            <div id="colio_c5" class="colio-content">
                <div class="main">

                    <!-- Colio Inside -->
                    <div class="inside-colio">
                        <!-- Big Icon -->
                        <i class="icon-big icon-pencil"></i>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <h4>SEO优化推广</h4>
                                    <hr>
                                    <p>
                                        优化网站页面信息，符合搜索引擎收录规律。使网站排名更加靠前，让客户更容易搜索到您。让网站获取有效流量，从而产生 订单转化。
                                    </p>

                                    <!-- Feature List Check -->
                                    <div class="feature-list-check margin-top-30">
                                        <h5>产品特点</h5>
                                        <ul class="margin-top-20">
                                            <li>多搜索引擎排名靠前</li>
                                            <li>一次投资&nbsp;一次投资价格低</li>
                                            <li>零成本点击&nbsp;避免恶意点击</li>
                                            <li>全天在线24小时</li>
                                        </ul>
                                        <a href="#" class="btn margin-top-20">查看详情</a>
                                    </div>
                                </div>
                                <div class="col-md-5"><img src="__HOME__/images/cp5.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Colio Tab Open 2 手机站 -->
            <div id="colio_c6" class="colio-content">
                <div class="main">

                    <!-- Colio Inside -->
                    <div class="inside-colio">
                        <!-- Big Icon -->
                        <i class="icon-big icon-right icon-wine"></i>
                        <div class="container">
                            <div class="row">

                                <!-- Colio Image -->
                                <div class="col-md-5"><img src="__HOME__/images/cp6.png" alt=""></div>
                                <!-- Colio Content -->
                                <div class="col-md-7">
                                    <h4>移动网站/应用</h4>
                                    <hr>
                                    <p>
                                        移动应用随时、随地、随心的特征决定了它不同于PC产品的设计理念，移动应用的从业者需要从全新的视角来思考设计。
                                    </p>

                                    <!-- Feature List Check -->
                                    <div class="feature-list-check margin-top-30">
                                        <h5>产品特点</h5>
                                        <ul class="margin-top-20">
                                            <li>在手机上展示企业全部信息</li>
                                            <li>强大实用功能</li>
                                            <li>业务快速高效传播</li>
                                            <li>微信无缝对接&nbsp;全方位营销</li>

                                        </ul>
                                        <a href="#" class="btn margin-top-20">查看详情</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Colio Tab Open 3 APP-->
            <div id="colio_c7" class="colio-content">
                <div class="main">

                    <!-- Colio Inside -->
                    <div class="inside-colio">
                        <!-- Big Icon -->
                        <i class="icon-big icon-trophy"></i>
                        <div class="container">
                            <div class="row">

                                <!-- Colio Content -->
                                <div class="col-md-7">
                                    <h4>H5场景秀</h4>
                                    <hr>
                                    <p>
                                        专门针对微信做的h5互动开发，主要应用于朋友圈传播，具有营销性质的互动。与一般的图文链接相比，微信互动h5表现形式更独特，带有互动效果。
                                    </p>
                                    <!-- Feature List Check -->
                                    <div class="feature-list-check margin-top-30">
                                        <h5>产品特点</h5>
                                        <ul class="margin-top-20">
                                            <li>信息展示灵活炫酷</li>
                                            <li>移动营销新热点</li>
                                            <li>微信快速传播</li>
                                            <li>传播广泛</li>
                                        </ul>
                                        <a href="#" class="btn margin-top-20">查看详情</a>
                                    </div>
                                </div>

                                <!-- Colio Img -->
                                <div class="col-md-5"><img src="__HOME__/images/cp7.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Colio Tab Open 4 视频制作 -->
            <div id="colio_c8" class="colio-content">
                <div class="main">

                    <!-- Colio Inside -->
                    <div class="inside-colio">
                        <!-- Big Icon -->
                        <i class="icon-big icon-right icon-layers"></i>
                        <div class="container">
                            <div class="row">
                                <!-- Colio Image -->
                                <div class="col-md-5"><img src="__HOME__/images/cp8.png" alt=""></div>

                                <!-- Colio Content -->
                                <div class="col-md-7">
                                    <h4>视频制作</h4>
                                    <hr>
                                    <p>
                                        包括企业宣传片、公司形象片、专题片、产品介绍片、微电影、MV、婚礼剪辑等。我们秉承客户至上的理念，无论您从事什么行业，我们将紧贴需求，最精良的视频制作，为您创造最大价值。
                                    </p>

                                    <!-- Feature List Check -->
                                    <div class="feature-list-check margin-top-30">
                                        <h5>产品特点</h5>
                                        <ul class="margin-top-20">
                                            <li>丰富的视觉效果</li>
                                            <li>制造合适的节奏感</li>
                                            <li>专业的录制设备</li>
                                            <li>一流的后期技术</li>
                                        </ul>
                                        <a href="#" class="btn margin-top-20">查看详情</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BUILD A AMAZING WEBSITE -->
        <section class="build-feature parallax-bg padding-top-150" data-stellar-background-ratio="0.3">
            <div class="container">
                <!-- Heading -->
                <div class="heading text-center margin-bottom-30"><span>Build a fantastic website</span>
                    <h4>和我们建立一个神奇的网站</h4>
                    <hr>
                    <p>为您提供标准化、定制化的全方位品质服务，一站式网站建设专家</p>
                </div>
                <div class="row">

                    <!-- FULLY RESPONSIVE -->
                    <div class="col-md-3">
                        <div class="feature-list-check margin-top-50">
                            <h6>01. 高端订制</h6>
                            <ul class="margin-top-20">
                                <li>网站建设</li>
                                <li>电商平台</li>
                                <li>APP开发</li>
                                <li>按需订制</li>
                            </ul>
                        </div>
                    </div>

                    <!-- RETINA READY -->
                    <div class="col-md-3">
                        <div class="feature-list-check margin-top-50">
                            <h6>02. 项目策划</h6>
                            <ul class="margin-top-20">
                                <li>专业需求分析师</li>
                                <li>专属项目经理</li>
                                <li>自身行业策划师</li>
                                <li>专属的策划方案</li>
                            </ul>
                        </div>
                    </div>

                    <!-- 03. UNIQUE DESIGN -->
                    <div class="col-md-3">
                        <div class="feature-list-check margin-top-50">
                            <h6>03. 视觉体验 </h6>
                            <ul class="margin-top-20">
                                <li>顶尖设计团队</li>
                                <li>响应式布局</li>
                                <li>多设备浏览</li>
                                <li>HTML5动画</li>
                            </ul>
                        </div>
                    </div>

                    <!-- FULLY RESPONSIVE -->
                    <div class="col-md-3">
                        <div class="feature-list-check margin-top-50">
                            <h6>04. 整合营销</h6>
                            <ul class="margin-top-20">
                                <li>SEO优化</li>
                                <li>多渠道推广</li>
                                <li>量身定制营销方案</li>
                                <li>移动端推广</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- IPHONE LANDSCAPE -->
                <div class="text-center margin-top-80"><img class="img-responsive" src="__HOME__/images/ipad-land.png" alt="">
                </div>
            </div>
        </section>
        <!-- Gallery -->
        <section class="work-flow parallax-bg padding-top-150 padding-bottom-150" data-stellar-background-ratio="0.5">
            <div class="container">
                <!-- Heading -->
                <div class="heading text-center white"><span>WORKFLOW</span>
                    <h4>我们的工作流程</h4>
                    <hr>
                </div>

                <!-- Work Process -->
                <div class="work-process">
                    <ul class="row">

                        <!-- Planning -->
                        <li class="col-md-3">
                            <article>
                                <div class="icon"><i class="icon-bulb"></i> <span class="number">1</span></div>
                                <h6>了解需求</h6>
                                <span>x</span>
                                <p>
                                    我们需要了解您的详细需求，根据您的需求，我们进行项目周期和价格评估，双方无异议后，达成合作意向。
                                </p>
                            </article>
                        </li>

                        <!-- design -->
                        <li class="col-md-3">
                            <article>
                                <div class="icon"><i class="lnr lnr-picture"></i> <span class="number">2</span></div>
                                <h6> 设计制作</h6>
                                <span>x</span>
                                <p>设计师一对一服务，精准把握客户需求，及时多次沟通网站构思，创造客户心中的理想网站。</p>
                            </article>
                        </li>
                        <!-- Developing -->
                        <li class="col-md-3">
                            <article>
                                <div class="icon"><i class="icon-vector"></i> <span class="number">3</span></div>
                                <h6>前端编码&功能开发</h6>
                                <span>x</span>
                                <p>根据不同页面需求，人工进行代码编写，确保网站运行流畅，浏览器兼容测试，定制程序开发、测试。</p>
                            </article>
                        </li>

                        <!-- presentation -->
                        <li class="col-md-3">
                            <article>
                                <div class="icon"><i class="lnr lnr-screen"></i> <span class="number">4</span></div>
                                <h6>项目演示</h6>
                                <span>x</span>
                                <p>客户验收成果，审核完成后，提出反馈问题，我们会认真快速修改完善，直到客户满意为止。</p>
                            </article>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- PHOTOGRAPHY -->
<section class="photography">
        <div class="container-fluid">
            <ul class="row">
                <li><img src="__HOME__/images/photo-1.jpg" alt=""> <a href="__HOME__/images/photo-1.jpg" data-lighter> <i
                            class="lnr lnr-frame-expand"></i> </a></li>
                <li><img src="__HOME__/images/photo-2.jpg" alt=""> <a href="__HOME__/images/photo-2.jpg" data-lighter> <i
                            class="lnr lnr-frame-expand"></i> </a></li>
                <li><img src="__HOME__/images/photo-3.jpg" alt=""> <a href="__HOME__/images/photo-3.jpg" data-lighter> <i
                            class="lnr lnr-frame-expand"></i> </a></li>
                <li><img src="__HOME__/images/photo-4.jpg" alt=""> <a href="__HOME__/images/photo-4.jpg" data-lighter> <i
                            class="lnr lnr-frame-expand"></i> </a></li>
                <li><img src="__HOME__/images/photo-5.jpg" alt=""> <a href="__HOME__/images/photo-5.jpg" data-lighter> <i
                            class="lnr lnr-frame-expand"></i> </a></li>
                <li><img src="__HOME__/images/photo-6.jpg" alt=""> <a href="__HOME__/images/photo-6.jpg" data-lighter> <i
                            class="lnr lnr-frame-expand"></i> </a></li>
                <li><img src="__HOME__/images/photo-7.jpg" alt=""> <a href="__HOME__/images/photo-7.jpg" data-lighter> <i
                            class="lnr lnr-frame-expand"></i> </a></li>
                <li><img src="__HOME__/images/photo-8.jpg" alt=""> <a href="__HOME__/images/photo-8.jpg" data-lighter> <i
                            class="lnr lnr-frame-expand"></i> </a></li>
            </ul>
        </div>
    </section>
    </div>
<!-- maincontent end here -->
<!--======= FOOTER =========-->
    <footer>
        <div class="container">

            <!-- FOOTER -->
            <div class="footer-info">
                <div class="row">

                    <!-- keep in touch -->
                    <div class="col-md-4">
                        <div class="padding-right-50">
                            <h6>关于我们</h6>
                            <p>是一家专业从事网站建设，在线推广宣传，微营销，大项目定制的电子商务公司。</p>
                            <ul class="personal-info">
                                <li><i class=" icon-map"></i>哈尔滨市南岗区文景街86号</li>
                                <li><i class="icon-envelope"></i>hrbkcwl@163.com</li>
                                <li><i class="lnr lnr-phone-handset"></i>15004522010</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Links -->
                    <div class="col-md-2">
                        <h6>网站导航</h6>
                        <ul class="links">
                            <li><a href="index.html">网站首页</a></li>
                             <?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <li>
                                <a href="<?php echo url('home/'.$vo['catdir'].'/index',['catId'=>$vo['id']] ); ?>" title="<?php echo $vo['catname']; ?>"><?php echo $vo['catname']; ?></a>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>

                    <!-- INSTAGRAM  -->
                    <div class="col-md-3">
                        <h6>最新活动</h6>
                        <div class="flicker">
                            <div class="single-slide">
                                <div><a href="#."><img class="img-responsive" src="__HOME__/images/img-1.jpg" alt=""></a></div>
                                <div><a href="#."><img class="img-responsive" src="__HOME__/images/img-2.jpg" alt=""></a></div>
                                <div><a href="#."><img class="img-responsive" src="__HOME__/images/img-3.jpg" alt=""></a></div>
                                <div><a href="#."><img class="img-responsive" src="__HOME__/images/img-4.jpg" alt=""></a></div>
                                <div><a href="#."><img class="img-responsive" src="__HOME__/images/img-5.jpg" alt=""></a></div>
                            </div>
                        </div>
                    </div>

                    <!-- keep in touch -->
                    <div class="col-md-3">
                        <h6>资讯通讯</h6>
                        <div class="news-letter">
                            <p>把我们的最新资讯、产品、活动，第一时间与您分享:</p>
                            <form class="subscribe">
                                <input type="tel" placeholder="邮箱">
                                <button type="submit"><i class="fa fa-envelope"></i></button>
                            </form>

                            <!-- Social Icons -->
                            <div class="social_icons"><a href="#." target="_blank"><i class="fa fa-weibo"></i></a> <a href="#." target="_blank"><i class="fa fa-qq"></i></a>                                <a href="#." target="_blank"><i
                                    class="fa fa-weixin"></i></a> <a href="#." target="_blank"><i
                                    class="fa fa-youtube-play"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--======= RIGHTS =========-->
    <div class="rights">
        <div class="container">
            <p>版权所有 2017 哈尔滨酷创网络科技有限公司 黑ICP备17007278号</p>
            <div class="scroll"><a href="#wrap" class="go-up"><i class="lnr lnr-arrow-up"></i></a></div>
        </div>
    </div>
    </div>


<!-- JavaScripts -->

<script src="__HOME__/js/bootstrap.min.js"></script>
<script src="__HOME__/js/own-menu.js"></script>
<script src="__HOME__/js/jquery.lighter.js"></script>
<script src="__HOME__/js/jquery.colio.min.js"></script>
<script src="__HOME__/js/jquery.cubeportfolio.min.js"></script>
<script src="__HOME__/js/owl.carousel.min.js"></script>
<script src="__HOME__/js/color-switcher.js"></script>
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="__HOME__/rs-plugin/rs-plugin/js/jquery.tp.t.min.js"></script>
<script type="text/javascript" src="__HOME__/rs-plugin/rs-plugin/js/jquery.tp.min.js"></script>
<script src="__HOME__/js/main.js"></script>
</body>

</html>