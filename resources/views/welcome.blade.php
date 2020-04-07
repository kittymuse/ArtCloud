
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Sundo_尚读中国-中国美术教育综合服务平台</title> 
    <link rel="stylesheet"   type="text/css" href="https://book.chinasundo.com/static/css/home-index/swiper.min.css" />
    <link rel="stylesheet" type="text/css" href="https://book.chinasundo.com/static/css/home-index/shangdu.css"/>  
    <meta name="description" content="Ta是一家致力于中国美术教育领域的综合服务平台。旗下拥有尚读出版、研学院、尚学院、美术圈、云校等多个服务子品牌，分别针对B端机构的教学、管理、市场、后勤四大模块，共计拥有三十余项服务产品体系，服务内容涵盖图书出版、教学体系输出、教师培训输出、管理咨询输出、视频服务输出、技术服务输出、教师认证体系、学生能力测评、教育活动峰会等，服务对象为中国所有美术教育机构及幼儿园、小学、中学、大学的美术教育版块。">
    <meta name="keywords" content="尚读美术,尚读,sundo,美术,图书制作系统">
    <style>
        body{
            font-family: "微软雅黑";
        }
        .fcn a:hover{
            color: white!important;
        }
    </style>
</head>

    <body>
        <!-- 自定义layer弹框样式 -->
        <link rel="stylesheet" type="text/css" href="https://book.chinasundo.com/static/css/home/layui-demo.css">
        <link rel="stylesheet" type="text/css"  href="https://book.chinasundo.com/static/css/topsd.css">
        <div class="top">       
        <div class="logo">
        <img src="https://book.chinasundo.com/static//images/logor.png"/>
        </div>
        <div class="nav">
            <ul>
            <li><a href="https://book.chinasundo.com/">首页</a></li>
            <!-- <li><a href="https://book.chinasundo.com/book/galleryview.html">推荐图书</a></li> -->
            <!-- <li><a href="https://book.chinasundo.com/index.php/Book/galleryview">推荐图书</a></li> -->
            <li><a href="https://book.chinasundo.com/index/aboutus.html">关于我们</a></li>
            <li><a href="https://book.chinasundo.com/index/contactus.html">联系我们</a></li>
            <li><a href="https://book.chinasundo.com/book/galleryview.html">定制图书</a></li>

                            <li style="width:auto; margin-left:15px;height:60px;" class="ev">
                    <a href="javascript:;" style="    display: flex;
    display: -webkit-flex;
    align-items: center;
    float: left;
    margin-top: -8px;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex " >
                    <img src="https://book.chinasundo.com/static//images/625249296168060610.png" class="cop" style="margin-right:5px;border:none" alt="">
                    
                        <img src="https://book.chinasundo.com/static/images/logo-small.jpg" style="width:30px;height:30px;border-radius:50px;display:inline-block;margin-left:7px;border:none" class="cap">
                        <span style="display:inline-block;padding-left:8px;" class="cap">
                                          马超                  </span>
                    </a>    
                </li>

                <div class="by">
                    <div class="bup">
                        <img src="https://book.chinasundo.com/static/images/logo-small.jpg" style="width:30px;height:30px; float:left; margin-left: 17px; margin-top: 8px;">
                        <p>
                          <span>
                                                          马超                          </span>
                          <span>13611260290</span>
                        </p>

                        <a href="https://book.chinasundo.com/user/loginout.html" class="sundo-loginout" style="float: left; margin-left: 23px;margin-top: 10px; color: black; font-size: 12px;"> &nbsp; 退出</a>
                    </div>

                    <div class="opr">
                        <div class="ng">
                            <ul>
                                <li style="border-left:none"><a href="https://book.chinasundo.com/book_customized_center/index.html" >我的制作</a></li>
                                <li><a href="https://book.chinasundo.com/user_auth/index.html">账户管理</a></li>
                                <li><a href="https://book.chinasundo.com/user_message/index.html">消息</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            
            <div id="fullbg"></div> 
            <div id="dialog"> 
             <div class="close">
                <div class="dengaa" style="text-align: center;color: white;background:#45A52A;height: 38px;line-height: 38px;font-size:14px">登录
                <a href="javascript:;" style="float: right;color: white;"onclick="closeBg();">
                <img src="https://book.chinasundo.com/static//images/10828042914668290.png" style="margin-right: 12px;margin-top: 9px;"/>
                </a>
                </div> 
             <div>
             <div class="kuang">
                <dl class="admin_login">
         <dt class="rt">
            <span>尚读 <sup>&#174;</sup> Sundo<br></span>
            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ——&nbsp; 尚读出版美术教材在线定制系统</span>
         </dt>
        <div class="wrapper">
         <ul class="tab">
            <li class="tab-item active">账号密码登录</li>
            <li class="tab-item" style="border-left: 1px solid #DBDBDB;">手机验证登录</li>
        </ul>
        <div class="products">
        <div class="main selected">
        <form action="/user/dologin.html" class="sundo-login" method="post" style="cursor: pointer;">
            <span class="a">
            <dd class="fork">
                <span></span>
                <input type="text"  name="account" placeholder="请输入您的账号" class=""  autocomplete="off" value=""onkeyup="this.value=this.value.replace(/\s+/g,'')"/>
            </dd>
           <dd class="forkaa">
                <span></span>
                <input autocomplete="off"  type="password"  autocomplete="off"  name="password"  placeholder="请输入您的密码" class=""  autocomplete="off"onkeyup="this.value=this.value.replace(/\s+/g,'')"/>
            </dd>
           <dd class="forka">
                <div class="redde">
                <span></span>       
                <input type="text"  autocomplete="off"  name="code" placeholder="验证码" maxlength="5" class="" onkeyup="this.value=this.value.replace(/\s+/g,'')" >
                </div>
                <div class="rutter"><img src="https://book.chinasundo.com/captcha.html" onclick="changeCode(this)"/></div>
          </dd>
          <dd class="forkll">
            <button type="submit" class="submit_btn">立即登录</button>
          </dd>
        </span>
         </form>
        </div>
         
         
        <div class="main">
         <form action="/user/dologin.html" class="sundo-login" method="post">
            <span class="a">
            <dd class="fork">
            <span></span>
            <input type="text"  name="tel" placeholder="请输入您的手机号" maxlength="11" autocomplete="off" value=""onkeyup="this.value=this.value.replace(/\s+/g,'')"/>
        </dd>
        <dd class="forka">
            <div class="redde">
            <span></span>       
            <input type="text"  autocomplete="off"  name="code" placeholder="验证码" maxlength="4" maxlength="4" onkeyup="this.value=this.value.replace(/\s+/g,'')" >
            </div>
            <div class="rutter"><img onclick="changeCode(this)" src="/captcha.html"/></div>
        </dd>
        <dd class="foggi">
            <div style="border: 1px solid #dbdbdb;width: 168px;">
            <span></span>
            <input type="text" name="mescode" autocomplete="off"  placeholder="短信激活码" maxlength="6" autocomplete="off" onkeyup="this.value=this.value.replace(/\s+/g,'')"/>
            </div>
            <div class="dun"><div class="dfq get-mesCode">获取短信激活码</div></div>
        </dd>
          <dd class="forkll">
            <button type="submit" class="submit_btn">立即登录</button>
          </dd>
            </span>
            </form>
            </div>    
            </div>
       </div>
        <dd class="register">
             <a href="javascript:;" style="margin-right: 10px;" class="htp">快速注册</a>
            <!-- <a href="javascript:;" class="htpp">账号找回</a> -->
            <a href="javascript:;" style="color: #E8A400;float: right;" class="ffuu">忘记密码</a>
        </dd>
      
             </div> 
             </div>
             </div> 
               <div class="hao">
                <div class="efy"></div>
                <div class="zha">*手机号输入有误</div>
                <div class="ej"></div>
             </div>
           
             </div>


             <div class="ed">
                    <div class="rf" style="height: 520px;">
           <div class="dengaa" style="text-align: center;color: white;background:#45A52A;height: 38px;line-height: 38px;">快速注册
             <a href="javascript:;" style="float: right;color: white;"class="thj">
                 <img src="https://book.chinasundo.com/static//images/10828042914668290.png" style="margin-right: 12px;margin-top: 9px;"/>
             </a></div> 
    <form action="/User/doRegister.html" class="sundo-register" method="post">
        <dt style="margin-left: 100px;">
            <span>尚读 <sup>&#174;</sup> Sundo<br></span>
            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ——&nbsp; 尚读出版美术教材在线定制系统</span>
         </dt>  
        <dd class="fap">
            <span class="sho"></span>
            <input type="tel" name="tel" autocomplete="off"  placeholder="请输入你的手机号" class=""  />
        </dd>
        <dd class="forkaa">
            <span></span>
            <input type="password" name="password" autocomplete="off" placeholder="设置密码长度为6-12位" class=""  autocomplete="off" onkeyup="this.value=this.value.replace(/\s+/g,'')"/>
        </dd>   
        <dd class="forkaa" style="margin-top:8px">
            <span></span>
            <input type="password" name="repassword" autocomplete="off" placeholder="请再次确认密码" class=""  autocomplete="off" onkeyup="this.value=this.value.replace(/\s+/g,'')"/>
        </dd>
        <dd class="forka" style="margin-top: -6px;">
            <div class="redde" style="margin-left: -14px;">
            <span></span>       
                <input type="text" name="code"  autocomplete="off" placeholder="验证码" maxlength="4"  >
            </div>
                <div class="rutoer"><img src="https://book.chinasundo.com/captcha.html" onclick="changeCode(this);" /></div>
        </dd>
        <dd class="jo" style="margin-top: 10px;">
            <div class="redd" >
            <span style="margin-top: 11px; margin-left: 7px;"></span>       
                <input type="text" name="mescode" autocomplete="off" placeholder="短信激活码" maxlength="6" class="" style="margin-top:-37px" onkeyup="this.value=this.value.replace(/\s+/g,'')" >
            </div>
                <div class="rutter" ><div class="th get-mesCode" style="cursor: pointer;">获取短信激活码</div></div>
        </dd>
            
        <dd class="forkaa" style="clear: both;border: none;">
            <label>
                <div class="rfo lock">成为尚读个人用户</div>
                <input type="radio" name="auth_type" checked value="1" style="display:none;">
            </label>

            <label>
                <div class="rfoo">成为尚读企业用户</div>
                <input type="radio" name="auth_type" value="2" style="display:none;">
            </label>
        </dd>    
        <dd class="forkpl">
            <button type="submit" class="submit_btn" style="margin-left: 98px;">确认注册</button>
        </dd>
        <dd class="register" style="margin-left: 102px; margin-top: 3px;line-height:30px" >
            已有账号？ <a href="javascript:;" class="rea  ffu">去登陆</a><br />
        </dd>
    </form>
                    </div>
                        </div>

            <!-- 账号找回 -->
       
             <div class="edd">
                    <div class="rff" style="height: 434px;">
           <div class="dengaa" style="text-align: center;color: white;background:#45A52A;height: 38px;line-height: 38px;">账号找回
             <a href="javascript:;" style="float: right;color: white;"class="thj">
                 <img src="https://book.chinasundo.com/static//images/10828042914668290.png" style="margin-right: 12px;margin-top: 9px;"/>
             </a></div> 
    <form action="" class="sundo-register" method="post">
        <dt style="margin-left: 100px;">
            <span>尚读 <sup>&#174;</sup> Sundo<br></span>
            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ——&nbsp; 尚读出版美术教材在线定制系统</span>
         </dt>  
        <dd class="fap">
            <span class="sho"></span>
            <input type="tel" name="tel" autocomplete="off"  placeholder="预留联系电话" class=""  />
        </dd>
         <dd class="forka" style="margin-top: -6px;">
            <div class="redde" style="margin-left: -14px;">
            <span></span>       
                <input type="text" name="code"  autocomplete="off" placeholder="验证码" maxlength="4"  >
            </div>
                <div class="rutoer"><img src="https://book.chinasundo.com/captcha.html" onclick="changeCode(this);" /></div>
        </dd>
        <dd class="jo" style="margin-top: 10px;">
            <div class="redd" >
            <span style="margin-top: 11px; margin-left: 7px;"></span>       
                <input type="text" name="mescode" autocomplete="off" placeholder="短信激活码" maxlength="6" class="" style="margin-top:-37px" onkeyup="this.value=this.value.replace(/\s+/g,'')" >
            </div>
                <div class="rutter" ><div class="th get-mesCode" style="cursor: pointer;">获取短信激活码</div></div>
        </dd> 
         <dd class="fap">
            <span class="sho"></span>
            <input type="text" name="tel" autocomplete="off"  placeholder="请输入联系人" class=""  />
        </dd>  
       <dd class="fap">
            <span class="sho"></span>
            <input type="number" name="tel" autocomplete="off"  placeholder="请输入身份证号码验证" class=""  />
        </dd>   
        <dd class="forkpl">
            <button type="submit" class="submit_btn" style="margin-left: 98px;">下一步</button>
        </dd>
    </form>
                    </div>
                        </div>

              <div class="llw">
                     <div class="rfh" style="height: 262px;">
           <div class="dengaa" style="text-align: center;color: white;background:#45A52A;height: 38px;line-height: 38px;">账号找回
             <a href="javascript:;" style="float: right;color: white;"class="thj">
                 <img src="https://book.chinasundo.com/static//images/10828042914668290.png" style="margin-right: 12px;margin-top: 9px;"/>
             </a>
             </div> 
    <form action="" class="" method="post">
        <dt style="margin-left: 100px;">
            <span>尚读 <sup>&#174;</sup> Sundo<br></span>
            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ——&nbsp; 尚读出版美术教材在线定制系统</span>
         </dt>   
          <dd><div class="llo">您的账号为<span style="color:#45A52A;font-size：12px">&nbsp;&nbsp;123456789&nbsp;&nbsp;</span>请妥善保管!</div></dd>
        <dd class="forkpl">
            <button type="submit" class="submit_btn" style="margin-left: 98px;">确认</button>
        </dd>
    </form>
                    </div>
              </div>

                   <!--忘记密码-->
                  <div class="ew">
                    <div class="rfy" style="height: 337px;">
           <div class="dengaa" style="text-align: center;color: white;background:#45A52A;height: 38px;line-height: 38px;">密码找回
             <a href="javascript:;" style="float: right;color: white;"class="thj">
                 <img src="https://book.chinasundo.com/static//images/10828042914668290.png" style="margin-right: 12px;margin-top: 9px;"/>
             </a></div> 
    <form action="/user/checktel.html" class="sundo-findpass" method="post">
        <dt style="margin-left: 100px;">
            <span>尚读 <sup>&#174;</sup> Sundo<br></span>
            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ——&nbsp; 尚读出版美术教材在线定制系统</span>
         </dt>  
        <dd class="fap">
            <span class="sho"></span>
            <input type="tel" name="tel" autocomplete="off"  placeholder="预留联系电话" class=""  />
        </dd>
         <dd class="forka" style="margin-top: -6px;">
            <div class="redde" style="margin-left: -14px;">
            <span></span>       
                <input type="text" name="code"  autocomplete="off" placeholder="验证码" maxlength="4"  >
            </div>
                <div class="rutoer"><img src="https://book.chinasundo.com/captcha.html" onclick="changeCode(this);" /></div>
        </dd>
        <dd class="jo" style="margin-top: 10px;">
            <div class="redd" >
            <span style="margin-top: 11px; margin-left: 7px;"></span>       
                <input type="text" name="mescode" autocomplete="off" placeholder="短信激活码" maxlength="6" class="" style="margin-top:-37px" onkeyup="this.value=this.value.replace(/\s+/g,'')" >
            </div>
                <div class="rutter" ><div class="th get-mesCode" style="cursor: pointer;">获取短信激活码</div></div>
        </dd>    
        <dd class="forkpl" style="margin-top:10px">
            <button type="submit" class="submit_btn" style="margin-left: 98px;">下一步</button>
        </dd>
    </form>
                    </div>
                        </div>


                             <div class="eww">
                    <div class="rfp" style="height: 300px;">
           <div class="dengaa" style="text-align: center;color: white;background:#45A52A;height: 38px;line-height: 38px;">密码找回
             <a href="javascript:;" style="float: right;color: white;"class="thj">
                 <img src="https://book.chinasundo.com/static//images/10828042914668290.png" style="margin-right: 12px;margin-top: 9px;"/>
             </a></div> 
    <form action="/user/updatepass.html" class="sundo-register" method="post">
        <dt style="margin-left: 100px;">
            <span>尚读 <sup>&#174;</sup> Sundo<br></span>
            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ——&nbsp; 尚读出版美术教材在线定制系统</span>
         </dt>  
        <dd class="fap">
            <span class="sho"></span>
            <input type="password" name="password" autocomplete="off"  placeholder="请输入新密码" class=""  />
        </dd>
       <dd class="fap">
            <span class="sho"></span>
            <input type="password" name="repassword" autocomplete="off"  placeholder="再次输入新密码" class=""  />
        </dd>
           
        <dd class="forkpl" style="margin-top:10px">
            <button type="submit" class="submit_btn" style="margin-left: 98px;">确认</button>
        </dd>
    </form>
                    </div>
                        </div>
       <!--  <div class="yt">32131321</div> -->
            </ul>
        
        
                        </div>
        </div>  
        </div>
        </div>


        
      




<div class="swiper-container ppl " id="imgs">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="https://book.chinasundo.com/static/images/home-index/bannerone.jpg"/>
        </div>
        <div class="swiper-slide">
            <img src="https://book.chinasundo.com/static/images/home-index/bannertwo.jpg"/>
        </div>
        <div class="swiper-slide">
            <img src="https://book.chinasundo.com/static/images/home-index/bannerthree.jpg"/>
        </div>
    </div>
    <div class="swiper-button-prev"></div>

    <div class="swiper-pagination"></div>

    <div class="swiper-button-next"></div>
</div>

<div class="youshi">
    <div class="you1">
    <img src="https://book.chinasundo.com/static/images/home-index/66604d6c41ed2d6916cc131a706b772.png" alt="">
        <div class="fgo">
            <p>扫描复制</p>
            <p>课件定制</p>
            <p>视频定制</p>
            <p>教材定制</p>
            <p>定制设计</p>
        </div>
        <div class="er"><img src="https://book.chinasundo.com/static/images/home-index/244afffe71e613dbafd89fdb14a3bd5.png"/></div>
    </div>
    <div class="you2">
        <ul>
            <li class="fcn">
            <a href="https://book.chinasundo.com/book/galleryview.html" style="color:black">
                <div class="servicesBox">
                    <div  class="serBox" >
                        <img src="https://book.chinasundo.com/static/images/home-index/jiaocaidingzhi.jpg"/> 
                        <img src="https://book.chinasundo.com/static/images/home-index/jiaocaidingzhikaobei.png" style="display:none;" />                 
                    </div>
                </div>
                <span class="tu2">教材定制</span>   
                <span class="tu3">教学资源丰富、价值更高,满足机构教学需求.内容具有针对性,实时性.&nbsp;&nbsp;选择性更多,教学质量&nbsp;提高更快.&nbsp;&nbsp;书籍本身价值高,具有收藏性。</span>   
                </a>                    
            </li>
            <li style="border-top: 1px solid white;" class="fcn" >
                <div class="servicesBox">
                    <div  class="serBox" >
                        <img src="https://book.chinasundo.com/static/images/home-index/saomiaofuzhi.jpg"/>
                        <img src="https://book.chinasundo.com/static/images/home-index/saomiaofuzhikaobei.png" style="display:none;" />               
                    </div>
                </div>
                <span class="tu2">扫描复制</span>   
                <span class="tu3">我们拥有先进的高精度扫描仪与调图设备,能精准还原作品 真实感,对于 机构大 量的留校作品可进行专业调图,复制与存储,帮助 机构进行作品分类&nbsp;管理,保护原作。</span>                        
            </li>

            <li style="border-top: 1px solid white;"  class="fcn">
                <div class="servicesBox">
                    <div  class="serBox" >
                        <img src="https://book.chinasundo.com/static/images/home-index/kejiandingzhi.jpg"/>
                        <img src="https://book.chinasundo.com/static/images/home-index/kejiandingzhikaobei.png" style="display:none;" />                  
                    </div>
                </div>
                <span class="tu2">课件定制</span>   
                <span class="tu3">专业的课程体系梳理,精确定位机构教学需求。全面的课件资料,各大名师亲力打造任意筛选。清晰的展示,告别模糊凌乱课件。权威的实力展示,展示机构最真实的教学实力。</span>                     
            </li>

            <li  style="border-top: 1px solid white;"  class="fcn">
                <div class="servicesBox">
                    <div  class="serBox" >              
                        <img src="https://book.chinasundo.com/static/images/home-index/shipindingzhi.jpg"/>
                        <img src="https://book.chinasundo.com/static/images/home-index/shipindingzhikaobei.png" style="display:none;" />                                  
                    </div>
                </div>
                <span class="tu2">视频定制</span>   
                <span class="tu3">机构日常录制的大量教学视频无人处理,匹配机构教学体系的教材没有对应的视频演示,&nbsp;&nbsp;聘请专业剪辑师成本过高,尚读课堂为机构解决这些难题,提供匹配的教学视频。</span>                        
            </li>
        </li>


        <li   class="fcn">
            <div class="servicesBox">
                <div  class="serBox" >
                    <img src="https://book.chinasundo.com/static/images/home-index/dingzhisheji.jpg"/>
                    <img src="https://book.chinasundo.com/static/images/home-index/dingzhishejikaobei.png" style="display:none;" />  
                </div>
            </div>
            <span class="tu2">定制设计</span>   
            <span class="tu3">尚读品策团队,可以深入了解机构的品牌理念, 为您量身打造最完善的品牌宣传视觉方案,从 策划设计到后期制作,一条龙的优化服务,升 级机构品牌的形象,提升机构品牌核心竞争力。</span>                      
        </li>
        <li class="fangda">
            <img src="https://book.chinasundo.com/static/images/home-index/278133029731654794.png"/>
        </li>


    </ul>
</div>
</div>
<ul id="jump">
    <li>
        <span><sdf   id="top" ></sdf></span>
        <a href="https://book.chinasundo.com/user_auth/index.html" class="so rd"><span class="ppi " style="line-height: 40px;">账户</span></a>
    </li>
    <li>
        <span><sdf id="sina" ></sdf></span>
        <a href="https://book.chinasundo.com/book/galleryview.html" class="so rdd"><span class="ppi">图书系统</span></a>
    </li>
    <li>
        <span><sdf id="share"></sdf></span>
        <a href="javascript:;" class="so rddd">
            <span class="ppi">联系方式
                <div class="rrh">
                    <span class="triangle"></span>
                    <div class="ff">
                        <p>联系电话：400-128-8585</p>
                        <p>邮箱：712636350@QQ.com</p>
                        <p>投稿创作QQ：712636350</p>
                    </div>
                    <div class="di">
                        <img src="https://book.chinasundo.com/static/images/home-index/830726912800341052.png"/>
                    </div>
                    <div class="yy">业务咨询</div>
                </div>
            </span>
        </a>
    </li>
    <li>
        <span><sdf id="reply"  ></sdf></span>
        <a href="javascript:;" class="so rrd dy"><span class="ppi">返回顶部</span></a>
    </li>
</ul>
<div class="haoping">
    <div class="container">
        <div>
            <span><img src="https://book.chinasundo.com/static/images/home-index/liulanliang.png"/></span>
            <span >浏览量</span>
            <span></span>
            <span class="counter-value">13250</span>
            <span ></span>
        </div>

        <div>
            <span><img src="https://book.chinasundo.com/static/images/home-index/yonghuliang.png"/></span>
            <span >用户量</span>
            <span></span>
            <span class="counter-value">850</span>
            <span ></span>
        </div>


        <div>
            <span><img src="https://book.chinasundo.com/static/images/home-index/xiaoshouliang.png"/></span>
            <span >销售量</span>
            <span></span>
            <span class="counter-value">7864</span>
            <span ></span>
        </div>
        <div>
            <span><img src="https://book.chinasundo.com/static/images/home-index/yinhsualiang.png"/></span>
            <span >印刷量</span>
            <span></span>
            <span class="counter-value">9845</span>
        </div>
    </div>
</div>
<div class="rgu">
    <div class="qqy">
        <span class="qqo" style="color: black;">最新</span> <span style="color:#4DA833 ;">产品</span>
    </div>
    <div style="text-align: center;margin-top: 10px;color: #999999;">用心专注，定义专业</div>
</div>
<div class="type-con " id="jji">
    <div class="swiper-container product" id="product">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="product-list">
                    <div class="border-box ">
                        <img src="https://book.chinasundo.com/static/images/home-index/aa.png" />
                    </div>
                    <div class="border-bg">

                    </div>
                    <div class="eep">
                        <span class="iconfont icon-lianjie">
                            <a href="https://book.chinasundo.com/book/bookstore.html " ><img src="https://book.chinasundo.com/static/images/home-index/dfeb2c7ba6dabb69a0e8add0d460d0c.png"/></a>  
                        </span> 
                    </div>
                </div>
                <div class="product-list">
                    <div class="border-box">
                        <img src="https://book.chinasundo.com/static/images/home-index/dd.png" />
                    </div>
                    <div class="border-bg">

                    </div>
                    <div class="eep">
                        <span class="iconfont icon-lianjie">
                            <a href="https://book.chinasundo.com/book/bookstore.html"  ><img src="https://book.chinasundo.com/static/images/home-index/dfeb2c7ba6dabb69a0e8add0d460d0c.png"/></a>  
                        </span> 
                    </div>
                </div>
                <div class="product-list">
                    <div class="border-box">
                        <img src="https://book.chinasundo.com/static/images/home-index/ff.png" />
                    </div>
                    <div class="border-bg">

                    </div>
                    <div class="eep">
                        <span class="iconfont icon-lianjie">
                            <a href="https://book.chinasundo.com/book/bookstore.html"  ><img src="https://book.chinasundo.com/static/images/home-index/dfeb2c7ba6dabb69a0e8add0d460d0c.png"/></a>  
                        </span> 
                    </div>
                </div>
                <div class="product-list">
                    <div class="border-box">
                        <img src="https://book.chinasundo.com/static/images/home-index/gg.png" />
                    </div>
                    <div class="border-bg">

                    </div>
                    <div class="eep">
                        <span class="iconfont icon-lianjie">
                            <a href="https://book.chinasundo.com/book/bookstore.html"   ><img src="https://book.chinasundo.com/static/images/home-index/dfeb2c7ba6dabb69a0e8add0d460d0c.png"/></a> 
                        </span> 
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="product-list">
                    <div class="border-box">
                        <img src="https://book.chinasundo.com/static/images/home-index/jj.png" />
                    </div>
                    <div class="border-bg">

                    </div>
                    <div class="eep">
                        <span class="iconfont icon-lianjie">
                            <a href="https://book.chinasundo.com/book/bookstore.html"  ><img src="https://book.chinasundo.com/static/images/home-index/dfeb2c7ba6dabb69a0e8add0d460d0c.png"/></a>  
                        </span> 
                    </div>
                </div>
                <div class="product-list">
                    <div class="border-box">
                        <img src="https://book.chinasundo.com/static/images/home-index/kk.png" />
                    </div>
                    <div class="border-bg">

                    </div>
                    <div class="eep">
                        <span class="iconfont icon-lianjie">
                            <a href="https://book.chinasundo.com/book/bookstore.html"   ><img src="https://book.chinasundo.com/static/images/home-index/dfeb2c7ba6dabb69a0e8add0d460d0c.png"/></a>
                        </span> 
                    </div>
                </div>
                <div class="product-list">
                    <div class="border-box">
                        <img src="https://book.chinasundo.com/static/images/home-index/ll.png" />
                    </div>
                    <div class="border-bg">

                    </div>
                    <div class="eep">
                        <span class="iconfont icon-lianjie">
                            <a href="https://book.chinasundo.com/book/bookstore.html" ><img src="https://book.chinasundo.com/static/images/home-index/dfeb2c7ba6dabb69a0e8add0d460d0c.png"/></a>   
                        </span> 
                    </div>
                </div>
                <div class="product-list">
                    <div class="border-box">
                        <img src="https://book.chinasundo.com/static/images/home-index/ss.png" />
                    </div>
                    <div class="border-bg">

                    </div>
                    <div class="eep">
                        <span class="iconfont icon-lianjie">
                            <a href="https://book.chinasundo.com/book/bookstore.html"  ><img src="https://book.chinasundo.com/static/images/home-index/dfeb2c7ba6dabb69a0e8add0d460d0c.png"/></a>  
                        </span> 
                    </div>

                </div>
            </div>

        </div>


        <div class="swiper-button-prev"></div>

        <div class="swiper-pagination"></div>

        <div class="swiper-button-next"></div>
    </div>
</div>
</div>
<div class="protide">
    <div class="rguu">
        <div class="qqy">
            <span class="qqo" style="color: white;">新产品</span> <span style="color:#4DA833 ;">特点</span>
        </div>
        <div style="text-align: center;margin-top: 10px;color:  #999999;">全国课件式教学首例开创产品</div>
    </div>
    <div class="cooneer">
        <div class="coneer">
            <div id="picBox">
                <img src="https://book.chinasundo.com/static/images/home-index/zhendongaa.png" id="pic">
                <div id="buttonBox">
                    <div class="llr" onclick="pre()">
                        <span  ><img src="https://book.chinasundo.com/static/images/home-index/549824304941983560.png" style="width:12px;height:15px" /></span>
                    </div>
                    <div class="ttu"  onclick="next()";>
                        <span  ><img src="https://book.chinasundo.com/static/images/home-index/836474367997668336.png" style="width:12px;height:15px" /></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="rfy">
            <div class="cone" >
                <div class="eef"> 
                    <div class="conr">手绘课件</div>
                </div>
                <div class="foo" >
                    <div class="cny" ></div>
                    <p class="jio">名师全手绘课件,知识点拆分详细,难点重点享有配套视频,全方位辅助训练.</p>
                </div>
            </div>
            <div class="cone" >
                <div class="eef"> 
                    <div class="conr">体系完善</div>
                </div>
                <div class="foo" >
                    <div class="cny"></div>
                    <p class="jio">完善的教学体系,从单人到场景的逐步推进,章节设置分配合理,首轮速写基础训练必选.</p>
                </div>
            </div>
            <div class="cone" >
                <div class="eef"> 
                    <div class="conr">同步视频</div>
                </div>
                <div class="foo" >
                    <div class="cny"></div>
                    <p class="jio">精彩范画0基础都可以直接上手,简单易学,具有独特的方法行,日常训练、应对考试都兼具的画风.</p>
                </div>
            </div>
            <div class="cone" >
                <div class="eef"> 
                    <div class="conr">精彩范画</div>
                </div>
                <div class="foo" >
                    <div class="cny"></div>
                    <p class="jio">同步视频重点难点视频解析,打造立体式速写教学,实现双师课堂.</p>
                </div>
            </div>
        </div>
    </div>
</div>   
</div>
<div class="contap">
    <div class="gyu">
        <div class="rgu">
            <div class="qqy">
                <span class="qqo" style="color: black;">畅销</span> <span style="color:#4DA833 ;">书籍</span>
            </div>
            <div style="text-align: center; margin-top: 3px; color: #999999;">用心专注，定义专业</div>
        </div>
        <div class="tpl">
            <div class="rft">
                <ul>
                        <!--     -->
                            <ul>
                                <li><a href="https://book.chinasundo.com/book/bookstore.html" ><img src="https://book.chinasundo.com/static/images/home-index/qq.png" /><p> 《超级课件2.0》-振东速写-视频范画同步100讲-张振东</p></a></li>
                                <li><a href="https://book.chinasundo.com/book/bookstore.html" ><img src="https://book.chinasundo.com/static/images/home-index/ww.png" /><p>《超级课件2.0》-色稿 单体 完整稿 套题实战全书-邹佳欣</p></a></li>
                                <li><a href="https://book.chinasundo.com/book/bookstore.html" ><img src="https://book.chinasundo.com/static/images/home-index/ee.png" /><p>《超级课件2.0》-素描头像-肖迪的教学体系梳理与运用-肖迪 </p></a></li>
                                <li><a href="https://book.chinasundo.com/book/bookstore.html" ><img src="https://book.chinasundo.com/static/images/home-index/rr.png" /><p>《超级课件2.0》-王峰色彩静物体系50讲-王峰</p></a></li>
                                <li><a href="https://book.chinasundo.com/book/bookstore.html" ><img src="https://book.chinasundo.com/static/images/home-index/tt.png" /><p>《超级课件2.0》-素描头像-知识点全解析-陈洪彬</p></a></li>
                                <li><a href="https://book.chinasundo.com/book/bookstore.html" ><img src="https://book.chinasundo.com/static/images/home-index/yy.png" /><p>《超级课件2.0》-色稿专项训练-王峰 </p></a></li>
                                <li><a href="https://book.chinasundo.com/book/bookstore.html" ><img src="https://book.chinasundo.com/static/images/home-index/uu.png" /><p>《超级课件2.0》-素描静物-黄亮教学体系的梳理与运用-黄亮</p></a></li>
                                <li><a href="https://book.chinasundo.com/book/bookstore.html" ><img src="https://book.chinasundo.com/static/images/home-index/ii.png" /><p>《超级课件2.0》-素描头像 -从石膏五官到人像结构一本通-贾杰</p></a></li>
                            </ul>
                        </ul>
                    </div>    
                </div>  
                <div class="geng">
                    <a href="https://book.chinasundo.com/book/galleryview.html" class="lop  ">更多产品&gt;&gt;</a>
                </div>
            </div>

        </div>
        <div class="type-con show-users" >
            <div class="cont">
                <div class="ood">
                    <div class="dul">
                        <div class="syo">
                            <span class="dpy">500万</span>
                            <div class="llp">(用户)</div>
                            <div class="uo">已经用到了尚读出版的图书</div>
                        </div>
                    </div>
                </div>
                <div class="tdp">
                    <div class="show-users-list">
                        <img class="users-list-img" src="https://book.chinasundo.com/static/images/home-index/logo1.png" alt="">
                        <div class="users-list-bg">一翀画室</div>
                    </div>

                    <div class="show-users-list">
                        <img class="users-list-img" src="https://book.chinasundo.com/static/images/home-index/logo2.png"  alt="">
                        <div class="users-list-bg">思想者画室</div>
                    </div>
                    <div class="show-users-list">
                        <img class="users-list-img" src="https://book.chinasundo.com/static/images/home-index/logo3.png" alt="">
                        <div class="users-list-bg">达人画室</div>
                    </div>
                </div>
                <div class="tdpp">
                    <div class="show-users-list">
                        <img class="users-list-img" src="https://book.chinasundo.com/static/images/home-index/logo4.png"  alt="">
                        <div class="users-list-bg">天籁艺术学校</div>
                    </div>

                    <div class="show-users-list">
                        <img class="users-list-img" src="https://book.chinasundo.com/static/images/home-index/logo5.png"  alt="">
                        <div class="users-list-bg">奥景画室</div>
                    </div>

                    <div class="show-users-list">
                        <img class="users-list-img" src="https://book.chinasundo.com/static/images/home-index/logo6.png"  alt="">
                        <div class="users-list-bg">艺升源画室</div>
                    </div>
                </div>
            </div>
        </div>


        <div class="dibu">
            <div class="ji">
                <ul>
                    <li><a href="https://book.chinasundo.com/">首页</a></li>
                    <li><a href="https://book.chinasundo.com/book/bookstore.html" class="zxcp-checklogin" class="sundo-checklogin">书库</a></li>
                    <li><a href="https://book.chinasundo.com/book/bookspecial.html" class="zxcp-checklogin" >专题</a></li>
                    <li><a href="https://book.chinasundo.com/book/gallerystore.html" class="zxcp-checklogin" >图库</a></li>
                    <!-- <li><a href="https://book.chinasundo.com/book/galleryview.html">推荐图书</a></li> -->
                    <li><a href="https://book.chinasundo.com/book/galleryview.html"  >定制图书</a></li>
                    <li><a href="https://book.chinasundo.com/index/aboutus.html" >关于我们</a></li>
                    <li style="border-right:1px solid #5D5D5D"><a href="https://book.chinasundo.com/index/contactus.html" >联系我们</a></li>
                </ul>
            </div>
            <div class="jpo"></div>
            <div class="olp">
                <div class="og">尚读出版 美术教材在线定制系统</div>
                <div class="oph">
                <div class="ogg">
                    <span style="display: block; width: 344px; height: 34px;">地址：北京市通州区宋庄小堡尚堡原创茂B101</span>
                    <span>网址：book.chinasundo.com</span>
                <!-- <span>网址：www.sundobook.com</span> -->
                </div>
                <div class="lpi">
                    <span>联系方式：010-69595882</span>
                    <span>邮箱：712636350@QQ.com</span>
                </div>
            </div>
            <div class="you">
                <ul>
                <li>
                 <img src="https://book.chinasundo.com/static//images/117031345762538738.png" style="width: 64px;height: 70px; margin-left: 90px;margin-top: 27px;"/>
                <div class="fg">
                    <span>QQ:712636305</span>
                    <span style="margin-top: 6px;">投稿创作</span>
                </div>
                </li>
                <li>
                <img src="https://book.chinasundo.com/static//images/830726912800341052.png"/>
                <div class="fgg">业务咨询</div>
                </li>
                </ul>       
            </div>
            </div>
    </div>
    <div class="bei">
        <div class="lt">
                <div>&nbsp;&nbsp;&nbsp;京ICP备 18026369号&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sundo</div>
                <div style="min-width:300px;">&nbsp;&nbsp;&nbsp;© 2018  sundocloud.com 版权所有</div>
        </div>
    </div>

    <!-- jquery -->
    <script src="https://book.chinasundo.com/static/js/home/choose_center/jquery.js" type="text/javascript" charset="utf-8"></script>
        
    <!-- js.cookie -->
    <script src="//cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js" type="text/javascript"></script>

    <!-- lyaer弹框 -->
    <script src="https://book.chinasundo.com/static/layer/layer.js" type="text/javascript" charset="utf-8"></script>

    <!-- jqform -->
    <script src="https://book.chinasundo.com/static//js/jQuery.Form.js" type="text/javascript" charset="utf-8"></script>

    <!-- 公共方法 -->
    <script src="https://book.chinasundo.com/static//js/home/common.js" type="text/javascript" charset="utf-8"></script>
        <script src="https://book.chinasundo.com/static/js/home-index/swiper-4.3.3.min.js"></script>
        <script src="https://book.chinasundo.com/static/js/home-index/swiper.animate.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="https://book.chinasundo.com/static/js/home-index/shangdu.js" type="text/javascript" charset="utf-8"></script>
        <script src="https://book.chinasundo.com/static/js/home/new_project.js" type="text/javascript" charset="utf-8"></script>





</body>
</html>
