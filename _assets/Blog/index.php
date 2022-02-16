<?php
include('./admin/api/WebsiteSettings.php');
if ($scok==1) {
    session_start();
    $_SESSION['count'] = 1;
    header("Location: 404.php");
    exit();
}

$handler = opendir('./assets/background/');//当前目录中的文件夹下的文件夹     需要获取的目录文件夹名字
while( ($filename = readdir($handler)) !== false ) {
      if($filename != "." && $filename != ".."){
          //echo $filename."<br>";
          $tmp[] =  $filename;
      }
}
closedir($handler);
//print_r($tmp);

$arr=array_rand($tmp);
//echo $arr;
//$background='./assets/background/'.$tmp[$arr];//本地图片
$background='http://api.qemao.com/api/pic/?type=pc';//api接口图片
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <!--为搜索引擎定义关键词-->
    <meta name="keywords" content="苏画">
    <!--为网页定义描述内容 用于告诉搜索引擎，你网站的主要内容-->
    <meta name="description" content="苏画 | 一双发现美的眼睛!"> 
    <!--定义网页作者-->
    <meta name="author" content="苏画"> 
    <!--网站版权-->
    <meta name="copyright" content="苏画">
    <!--指定IE和Chrome使用最新版本渲染当前页面-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <!--指导浏览器如何缓存某个响应以及缓存多长时间-->
    <!--no-cache:先发送请求,与服务器确认该资源是否被更改,如果未被更改,则使用缓存
    no-store:不允许缓存,每次都要去服务器上,下载完整的响应(安全措施)
    public:缓存所有响应,但并非必须,因为max-age也可以做到相同效果
    private:只为单个用户缓存,因此不允许任何中继进行缓存,(比如说CDN就不允许缓存private的响应)
    maxage:当前请求开始,该响应在多久内能被缓存和重用,而不去服务器重新请求,例:max-age=60表示响应可以再缓存和重用60秒
    -->
    <meta http-equiv="cache-control" content="no-cache">
    <!--禁止百度自动转码 用于禁止当前页面在移动端浏览时,被百度自动转码,虽然百度的本意是好的,但是转码效果很多时候却不尽人意-->
    <!--meta http-equiv="Cache-Control" content="no-siteapp" /-->
    <!-- 分享网页时显示的标题-QQ-->
    <meta itemprop="name" content="苏画 | 一双发现美的眼睛!" />
    <!-- 分享网页时显示的缩略图-QQ-->
    <meta itemprop="image" content="http://sh.qemao.com/chucun/img/logo/favicon.png" />
    <!--分享网页时时显示的内容-QQ-->
    <meta name="description" itemprop="description" content="苏画 | 一双发现美的眼睛!" />
    <!--设置自动适应电脑和手机屏幕--> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0, user-scalable=no minimal-ui">
    <!--设置浏览器栏favicon图标-->
    <link rel="icon" href="http://sh.qemao.com/chucun/img/logo/favicon.png" type="image/x-icon"/>
    <!--定义搜索引擎爬虫的索引方式-->
    <!--index,follow:可以抓取本页，而且可以顺着本页继续索引别的链接
    noindex,follow:不许抓取本页，但是可以顺着本页抓取索引别的链接
    index,nofollow:可以抓取本页，但是不许顺着本页抓取索引别的链接
    noindex,nofollow:不许抓取本页，也不许顺着本页抓取索引别的链接
    -->
    <meta name="robots" content="index,follow">
    <!--引入css文件-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_1092713_ebcu16dsqz.css">
    <!--引入js文件-->
    <!--script type="text/javascript" src="main.js"></script-->
</head>


<body>
    <!--
    苏画-个人主页
    苏画原创,使用禁止改版谢谢
    博客:www.kjsv.com
    TIME:2021/5/14
    如果你想要源码可以直接找我,不要扒站,扒来的源码没后台
    -->
    <!--网页主体框架-->
    <div class="centent">


        <!--头部-->
        <div class="head">

            <!--头部左边-->
            <div class="head-left">

                <!--侧滑栏图标 电脑默认隐藏-->
                <div class="cehua" onclick="display('lb')">
                    <i class="iconfont icon-gengduo3"></i>
                </div>
                

                
                <!-- 头像图片 -->
                <div class="tx">
                    <a href="/">
                        <img src="<?php echo 'http://q.qlogo.cn/headimg_dl?dst_uin='.$qq.'&spec=640&img_type=jpg' ;?>" alt="">
                    </a>
                </div>
                
                <!-- 昵称 -->
                <div class="nc">
                    <p><b><?php echo $nc;?></b></p>
                </div>

            </div>
            <!-- 头部左边 end↑ -->


            <!--头部右边-->
            <div class="head-right">



                <!-- 内容 -->
                <div class="nr">
                    <a href="./">
                        <p><span style="color: #03a9f4;">首页</span></p>
                    </a>
                </div>



                <!-- 内容 -->
                <?php
                for ($i = 0; $i < $celanlie; $i++) {
                      $bt = $arr4[$i]['lan'];
                     $lian = $arr4[$i]['lanlink'];
                     echo '
                <div class="nr">
                    <a href="'.$lian.'">
                        <p>'.$bt.'</p>
                    </a>
                </div>';
                }
                ?>

                <!-- 内容 -->
                <!-- <div class="nr">
                    <a href="http://www.kjsv.com">
                        <p>主页</p>
                    </a>
                </div> -->

                <!-- 内容 -->
                <!-- <div class="nr">
                    <a href="/">
                        <p>实验室</p>
                    </a>
                </div> -->





            </div>
            <!-- 头部右边 end↑ -->

        </div>
        <!-- 头部 end↑ -->




        <!-- 中间内容 -->
        <div class="main">


            <!-- 默认隐藏内容菜单 手机 -->
<!-- <div id="lb" style="display: none;" class="gd-lb">
    <a href="./">
        <p><span style="color: #03a9f4;">首页</span></p>
    </a>
    
    <a href="http://www.kjsv.com">
        <p>博客</p>
    </a> -->

    <!-- <a href="/">
        <p>实验室</p>
    </a> -->
<!-- </div> -->

            <!-- 中间内容左边 -->
            <div class="main-left">
                <!-- 内容框 -->
                <div class="main-left-n">
                    <!-- 大标题 -->
                    <div class="main-left-n-s">
                        <h1>
                            <?php echo $sdbt;?>
                        </h1>
                    </div>

                    <!-- 小标题1 -->
                    <div class="main-left-n-x">
                        <p>
                            <!--欢迎访问我的
                            <span style="color:#03a9f4">个人主页</span>
                            在这里<span style="color:#03a9f4">你</span>
                            可以查看我的
                            <span style="color:#03a9f4">最新动态</span>
                            以及访问我的<span style="color:#03a9f4">其他网站</span-->
                            <?php echo $Introduction;?>
                        </p>
                    </div>

                    <!-- 小标题2 -->
                    <div class="main-left-n-xx">
                        <p><?php echo $Introductionn;?></p>
                        <p style="margin-top: 5px;"><?php echo $Introductionnn;?></p>
                        
                    </div>



                    <!-- 图标栏 -->
                    <div class="main-left-n-tu">
                        <?php 
                    
                    for ($i = 0; $i < $icon; $i++) {
                        $ico = $arr2[$i]['ico'];
                        $icolink = $arr2[$i]['icolink'];
                        //echo $ico;
                        //echo $icolink
                        echo '
                        
                    
                        <a href="'.$icolink.'">
                            <i class="'.$ico.'"></i>
                        </a>
                        <!--a href="https://space.bilibili.com/323560412">
                            <i class="iconfont icon-bilibili-fill"></i>
                        </a>
                        <a href="http://www.kjsv.com">
                            <i class="iconfont icon-zuanshi1"></i>
                        </a>
                        <a href="http://wpa.qq.com/msgrd?v=3&uin=1401184612&site=qq&menu=yes">
                            <i class="iconfont icon-qq"></i>
                        </a-->';
                    }
                    ?>
                    </div>




                    <!-- 按钮 -->
                    <div class="main-left-n-an">
                        <a href="<?php echo $link;?>">
                            <div class="main-left-n-an-anniu">
                                <b>去我博客</b>
                            </div>
                        </a>
                    </div>
                    <div class="main-left-n-an">

                        <a href="<?php echo $link1;?>">
                            <div class="main-left-n-an-anniu">
                                <b>加我QQ群</b>
                            </div>
                        </a>
                    </div>

                </div>

            </div>
            <!-- 中间内容左边 end↑ -->





           











            <!-- 中间内容右边 -->
            <div class="main-right">
                <div class="main-right-background">
                    <img src="<?php
                    echo $background;
                    ?>" alt="">  
                </div>
            </div>
            <!-- 中间内容右边 end↑ -->


        </div>
        <!-- 中间内容 end↑ -->
        
        <!-- 旗下网站区 -->

        <!--独立标题-->
        <div class="qixiabt">
            <h1>旗下站点</h1>
        </div>


        <!-- 主内容 -->
        <div class="qixia">
            <div class="qixia-k">
                
                
                <?php
                for ($i = 0; $i < $wzyl; $i++) {
                     $bt = $arrl[$i]['title'];
                     $js = $arrl[$i]['js'];
                     $link = $arrl[$i]['link'];
                     $img = $arrl[$i]['img'];
                     echo '
                <!-- 卡片主体内容 -->
                <div class="qixia-k-zhu">
                    <div class="qixia-k-zhu-ka">
                        <a href="'.$link.'">
                            <!-- 顶部颜色 -->
                            <div class="qixia-k-zhu-ka-topy"></div>
                            <!-- 中间内容标题 -->
                            <div class="qixia-k-zhu-ka-zhong">
                                <p>'.$bt.'</p>
                            </div>
                            <!-- 中间内容 -->
                            <div class="qixia-k-zhu-ka-zhong-n">
                                <p>'.$js.'</p>
                            </div>
                            <!-- 中间内容图标 -->
                            <div class="qixia-k-zhu-ka-zhong-img">
                                <img src="'.$img.'" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <!-- 卡片主体内容 end ↑ -->';
                }
                ?>


              </div>
         </div>
        <!-- 主内容 end↑ -->



        <!-- 旗下网站区 -->





        <!--底部版权-->
        <div class="footer">

            <!-- 左侧 -->
            <div class="zuoce">
                <!-- 标题 -->
                <div class="zuoce-bt">
                    <b>工具</b>
                </div>
                <!-- 内容 -->
                <div class="zuoce-neirong">
                    <?php
                    for ($i = 0; $i < $zc; $i++) {
                         $zccbt = $zgj[$i]['footbt'];
                         $zcclin = $zgj[$i]['footbtlink'];
                         echo '
                    <div class="lj"><a href="'.$zcclin.'">'.$zccbt.'</a></div>
                    <!--div class="lj"><a href="http://sh.suvvs.com/tools/tu">在线图床</a></div-->
                    ';
                    }
                    ?>
                </div>

            </div>


            <!-- 中间 -->
            <div class="zhong">
                <!-- 标题 -->
                <div class="zhong-bt">
                    <b>社交媒体</b>
                </div>
                <!-- 内容 -->
                <div class="zhong-neirong">
                    <?php
                    for ($i = 0; $i < $z; $i++) {
                         $zccbt = $zhong[$i]['footbt'];
                         $zcclin = $zhong[$i]['footbtlink'];
                         echo '
                    <div class="lj"><a href="'.$zcclin.'">'.$zccbt.'</a></div>
                    <!--div class="lj"><a href="http://sh.qemao.com/tools/tu">在线图床</a></div-->
                    ';
                    }
                    ?>
                </div>

            </div>


            <!-- 右侧 -->
            <div class="youce">
                <!-- 标题 -->
                <div class="youce-bt">
                    <b>友情链接</b>
                </div>
                <!-- 内容 -->
                <div class="youce-neirong">
                    <?php
                    for ($i = 0; $i < $Fr; $i++) {
                         $zccbt = $Friend[$i]['footbt'];
                         $zcclin = $Friend[$i]['footbtlink'];
                         echo '
                    <div class="lj"><a href="'.$zcclin.'">'.$zccbt.'</a></div>
                    <!--div class="lj"><a href="http://sh.suvvs.com/tools/tu">在线图床</a></div-->
                    ';
                    }
                    ?>
                </div>

            </div>



            

        </div>

        <!--版权申明-->
        <div class="Copyright">
            <p>© <?php echo date('Y');?> <a href="http://www.kjsv.com/">小新</a>. All rights reserved.</p>
                
        </div>
























        <!--手机端侧滑栏-->
        <div id="lb" style="display:none" class="android-ce" >
            <!--侧滑栏里的左侧主菜单框架-->

            <div class="android-ce-caidan">
               <!--  头部 -->
                <div class="android-ce-caidan-head">
                    <!-- 头像 -->
                    <div class="tx">
                        <img src="https://z3.ax1x.com/2021/11/11/I0BRSg.jpg" alt="">
                    </div>
                    <p>小新</p>
                </div>

                <!-- 菜单列栏 主内容 -->
                <div class="android-ce-caidanlie">
                    <!-- 列 -->
                    <div class="android-ce-caidanlie-lie">
                        <div class="lj"><a href="./" style="color:#03a9f4">首页</a></div>
                        
                    </div>

                    <!-- 列 -->
                    <?php
                for ($i = 0; $i < $celanlie; $i++) {
                     $bt = $arr4[$i]['lan'];
                     $lian = $arr4[$i]['lanlink'];
                     echo '
                <div class="android-ce-caidanlie-lie">
                        <div class="lj"><a href="'.$lian.'">'.$bt.'</a></div>
                        </div>';
                }
                ?>

                </div>

            </div>
            <!--侧滑栏里的左侧主菜单框架 end↑-->


            <!--侧滑栏里的右侧留出空白点击关闭侧滑--> 
            <button style="width: 20%;max-width: 20%;opacity:0;height: 100vh;border:none">
                <!-- <div class="android-ce-guan" onclick="display('lb')"></div> -->
            </button>

        </div>





        <script src="./assets/js/main.js"></script> 
        <script>
            $(function(){ 
                $("button").click(function(){
                    $(".android-ce").fadeToggle(200);
                });
            })


            
        </script>

        <!--手机端侧滑栏 end↑-->



        











        


        


 

        
        
        
    </div>
    <!--网页主体框架 end↑-->





    






<!--隐藏和显示侧滑栏-->
<script type="text/javascript">
    function display(id){  
        var traget=document.getElementById(id);  
        if(traget.style.display=="none"){  
            traget.style.display="";  
        }else{  
            traget.style.display="none";  
      }  
   }  
</script>










<script type="text/javascript">
['sojson.v4']["\x66\x69\x6c\x74\x65\x72"]["\x63\x6f\x6e\x73\x74\x72\x75\x63\x74\x6f\x72"](((['sojson.v4']+[])["\x63\x6f\x6e\x73\x74\x72\x75\x63\x74\x6f\x72"]['\x66\x72\x6f\x6d\x43\x68\x61\x72\x43\x6f\x64\x65']['\x61\x70\x70\x6c\x79'](null,"47c47c32473p22823i20332W19978o25165A33402T10Q32Q32q32L32u99z111C110d115S111r108T101S46h108Q111Z103R40s34B37k99f32q34A44t32c34j98L97t99z107X103K114H111Q117O110s100d58g32v117Y114D108B40K104k116n116B112z58q47Y47J115Q104P46r113V101y109Y97H111W46E99I111x109V47k99N104o117z99f117N110s47b105i109c103b47y113Y105b117i114H97U111Z46P106X112K103M41u32F110M111R45P114H101r112g101A97k116m32b99X101j110m116e101b114I59s112J97j100H100h105d110x103I45U108z101H102O116A58R50P56p48Y112r120t59E112i97V100Y100Z105L110V103g45s98G111F116G116j111m109A58e32H50o56M48P112k120Q59m34E41l44E10h32l32l32u32n99p111I110W115f111v108s101a46j108K111U103S40z34O37v99N22823c20384a25163A19979b30041Y24773C44T19981U35201t25630m23567c31449M12290k34q44L32r34d99z111p108l111G114e58w32U35D102F102f49A52W54p100H59d102K111u110C116c45b115G105r122W101g58f32j49I54u112s120E59U102Z111P110R116m45l119O101P105i103G104i116S58W32l98f111k108k100q34I41l44N10z32D32K32o32S99n111v110L115O111i108a101M46I108Z111H103j40t34V37T99I32473N22823o20332e34920i28436b24377F22863p44t35831G27427s36175t126C34E44S32i34k99H111w108U111A114i58f35X48O51r65v57g70N52W59K102f111b110X116Z45o115n105V122u101g58n32B49k54B112I120B59T102z111g110a116z45G119e101V105B103M104N116a58w32d98T111n108B100R34D41O44L10y32D32u32X32D99u111H110g115w111v108S101w46N108f111m103D40i34q37B99w32d34U44T32B34K98S97d99t107d103U114i111q117k110K100I58f32W117i114n108F40p104A116o116f112b58k47v47b115W104c46R113S101d109X97J111E46C99k111F109c47h99e104G117a99m117a110l47F105I109g103z47R116g97G110Q113d105n110G46L103P105z102z41V32E110M111g45n114z101i112j101h97G116e32E99u101n110z116V101K114J59R112e97C100F100E105i110S103u45a108Y101d102I116o58B54P48Y48e112q120M59f112X97p100Y100l105H110N103N45a98r111r116q116M111o109m58e32z51O53z48v112J120Q59F34o41w10z32g32m32M32K47c47D30003z26126a10b32a32h32t32g99X111e110H115f111e108c101A46k108r111Z103Q40R34C37E99Q37S99O33487n30011e37S99H104p116r116X112c115m58C47A47G113A101T109g97t111V46v99K111Z109F34V44G32T34s108k105J110T101I45X104i101K105s103D104U116r58l50D56b112d120B59F34K44f32O34A108D105H110b101i45y104C101t105z103s104j116h58X50a56L112o120h59z112Z97H100v100q105J110D103s58X52x112l120D59d98p97v99e107V103H114Z111g117B110Q100D58a35q50X99x99k98j101F54s59u99e111m108x111W114D58F35T70t70C70F70M70c70v59j102p111s110T116q45u115a105g122r101E58q49B52B112Z120m59s98A111C114B100C101s114O45i114e97o100j105Q117f115C58M48I112o120F32b48F112V120R32E48z112a120W32u49u48Q112M120L34x44D32A34n112t97y100U100w105p110R103X58L52s112a120S32G52c112J120T32N52Y112W120B32M50B112A120g59a98J97r99y107H103O114z111v117j110U100T58t35h102X102F49q52R54p100H59S99U111w108b111n114s58w103G114r101J101x110f59Q108j105f110a101k45h104N101L105n103D104y116x58L50Y56U112c120H59Y102U111h110M116i45D115R105R122d101u58i49a50Q112y120O59J98g111F114i100a101s114F45g114o97e100m105V117m115C58Z48T112t120c32Y49u48J112G120O32L48I112g120H32P48a112G120j59W34i41j59"['\x73\x70\x6c\x69\x74'](/[a-zA-Z]{1,}/))))('sojson.v4');
</script>






































</body>
</html>