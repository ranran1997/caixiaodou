<?php /* Smarty version 3.1.24, created on 2016-08-11 09:08:30
         compiled from "D:/AppServ/www/public_html/views/details.html" */ ?>
<?php
/*%%SmartyHeaderCode:2756857abd00e2233d8_39022971%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4874372f527250e442f74e75f8bad24f1f966569' => 
    array (
      0 => 'D:/AppServ/www/public_html/views/details.html',
      1 => 1443252234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2756857abd00e2233d8_39022971',
  'variables' => 
  array (
    'Detail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_57abd00e51a567_34698255',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57abd00e51a567_34698255')) {
function content_57abd00e51a567_34698255 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2756857abd00e2233d8_39022971';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  
  <!-- 详情页开始 -->

<link href="css/details.css" rel="stylesheet" type="text/css" >

<?php echo '<script'; ?>
 src="js/jquery-2.1.1.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/details.js" type="text/javascript"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/javascript" src="js/mzp-packed.js"><?php echo '</script'; ?>
>


<?php if (isset($_smarty_tpl->tpl_vars['Detail']->value)) {?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['name'] = 'detail';
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['Detail']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['detail']['total']);
?>

<!-- main开始 -->
<div class="main"> 

    <!-- 商品详情页product-info 大框架 -->
    <div class="product-info-bg">

       <!-- 商品详情页product-info 开始 -->
        <div class="product-info">

            <!-- 商品详情 left  -->
            <div class="product-left">

                <!-- 商品图片 -->
                <div class="t2">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['Detail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['imgRootL'];?>
" id="zoom1" class="MagicZoom MagicThumb">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['Detail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['imgRootS'];?>
" id="main_img" class="main_img" style="width:460px; height:282px;" />
                    </a>
                </div>

                <div id="showArea">
                    <a  href="<?php echo $_smarty_tpl->tpl_vars['Detail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['imgRootL'];?>
" rel="zoom1" rev="<?php echo $_smarty_tpl->tpl_vars['Detail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['imgRootS'];?>
">
                        <img class="imgS" src="<?php echo $_smarty_tpl->tpl_vars['Detail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['imgRootB'];?>
" />
                    </a>

                   <!--  <a href="images/img02.jpg" rel="zoom1" rev="images/img02.jpg">
                        <img class="imgS" src="images/img02s.jpg" />
                    </a>

                    <a  href="images/img03.jpg" rel="zoom1" rev="images/img03.jpg">
                        <img class="imgS" src="images/img03s.jpg" />
                    </a> -->
                </div>
                <!-- 商品图片 -->
            </div>
            <!-- 商品详情 left  -->

            <!-- 商品详情 right  -->
            <div class="right-content">
                
                <div>
                    <ul class="summary">
                        
                        <li id="pName">
                            <span ><?php echo $_smarty_tpl->tpl_vars['Detail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['productName'];?>
</span>
                        </li>
                        <div class="panel">    
                            <li class="detail">
                                <span class="label">价格</span>
                                <span id="price_old">￥<?php echo $_smarty_tpl->tpl_vars['Detail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['productOldPrice'];?>
</span>
                                <span class="unit-price"><?php echo $_smarty_tpl->tpl_vars['Detail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['productUnitPrice'];?>
元/500g</span>
                            </li>

                            <li class="detail">
                                <span class="label">促销价</span>
                                <span id="price_new">￥<?php echo $_smarty_tpl->tpl_vars['Detail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['productNewPrice'];?>
</span>
                            </li>

                            <li class="detail">
                                <span class="label">净含量</span>
                                <span class="weigth"><?php echo $_smarty_tpl->tpl_vars['Detail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['productWeigth'];?>
</span>
                            </li>

                            <li class="detail">
                                <span class="label">特点</span>
                                <span class="point"><?php echo $_smarty_tpl->tpl_vars['Detail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['productPoint'];?>
</span>
                            </li>

                        </div>
                        
                    </ul>

                    <ul class="ind-panel">
                        <li class="ind-item ind-sellCount canClick" data-label="月销量">
                            <div class="indcon">
                                <span class="label">月销量</span>
                                <span class="count"><?php echo $_smarty_tpl->tpl_vars['Detail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['productSales'];?>
</span>
                            </div>
                        </li>

                        <li class="ind-item ind-sellCount canClick" data-label="月销量">
                            <div class="indcon">
                                <a href="#1">
                                    <span class="label">用户评价</span>
                                    <span class="count"><?php echo $_smarty_tpl->tpl_vars['Detail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['productSales'];?>
</span>
                                </a>
                            </div>
                        </li>

                        <li class="ind-item ind-sellCount canClick" data-label="月销量">
                            <div class="indcon">
                                <span class="label">点赞次数</span>
                                <span class="count"><?php echo $_smarty_tpl->tpl_vars['Detail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['productLove'];?>
</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- 数量 -->
                <div class="cxd-key">
                    <div class="cxd-skin">
                        <div class="cxd-sku">

                            <!-- 输入数量 -->
                            <dl class="cxd-amount tm-clear">
                                <dt class="cxd-metatit">数量</dt>
                                <dd id="j_Amount">
                                    <span class="cxd-amount-widget amount-wrap">
                                        <input type="text" class="cxd-text amount-input" id="amount-input" value="1" maxlength="8" title="请输入购买数量">
                                        <span class="amount-btn">
                                            <span class="amount-increase" id="increase">+</span>
                                            <span class="amount-decrease" id="decrease">-</span>
                                        </span>
                                    </span>
                                </dd>
                            </dl>
                            <!-- 输入数量 -->

                            <!-- 加入菜篮按钮 -->
                            <div class="cxd-action">
                                <div class="cxd-btn-basket cxd-btn-sku">
                                    <a  rel="nofollow" class="btn" onclick="addToCart('buy','<?php echo $_smarty_tpl->tpl_vars['Detail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['productId'];?>
','<?php echo $_smarty_tpl->tpl_vars['Detail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['productName'];?>
','<?php echo $_smarty_tpl->tpl_vars['Detail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['detail']['index']]['productNewPrice'];?>
')">
                                        <span>加入购物车</span>
                                    </a>
                                </div>
                                
                            </div> 
                            <!-- 加入菜篮按钮 -->
                        </div>
                       
                    </div>
                    
                </div> 
                <!-- 数量          -->
            </div> 
            <!-- 商品详情 right  -->
                     
        </div>
        <!-- 商品详情页product-info 结束 --> 
    </div>
    <!-- 商品详情页product-info 大框架 -->

    <!-- 自由搭配 -->
    <div id="J_SaleCombo" class="cxd-scombo" data-spm="1998099587">
        <div class="cxd-combo-inner">
            <ul class="tab-nav tab-nav-combos">
                <li class="selected">自由搭配</li>
            </ul>
            <div class="tab-content tab-content-combos">
              
                    <div class="tab-pannel tab-pannel-combos ziyou" data-comboid="2316400000171009138">
                        <div class="tm-combo-mitem tm-combo-i36247161745">
                            <div class="tm-img">
                                <a href="//detail.tmall.com/item.htm?id=36247161745&amp;bi_from=tm_comb" target="_blank" title="赤豪牛排套餐团购牛扒10块新鲜牛肉1500g含菲力刀叉黄油酱包邮" alt="赤豪牛排套餐团购牛扒10块新鲜牛肉1500g含菲力刀叉黄油酱包邮"><img src="//img.alicdn.com/bao/uploaded/i1/TB1GzmzJFXXXXctXFXXXXXXXXXX_!!0-item_pic.jpg_130x130.jpg">
                                </a>
                            </div>

                            <div class="selected"><i></i></div>
                            <p class="tm-original-price tm-clear">价格&nbsp;<i>¥</i><s>240.00</s>
                            </p> 
                        </div>

                        <div class="tm-combo-spliter">+</div>

                        <div class="tm-combo-action"> 
                            <div class="tm-combo-info">     
                                <p class="tm-combo-price">套餐价：<i>¥</i><s>172.80</s></p>   <p class="tm-save-price">省<i>¥</i><s>171.00</s></p>     
                                <p class="tm-original-price">价格：<i>¥</i><s>343.80</s>
                                </p> 
                            </div> 

                            <div class="tm-combo-btn J_ComboAddCart">加入购物车</div> 
                        </div>

                        <div class="tm-combo-items tab-content">
                            <div class="tab-content-groups">
                                <div class="tab-content-pre">
                                    <a href="javascript:a()" class="a-button">
                                        <span class="a-button-inner">
                                            <i class="a-icon a-icon-pre"></i>
                                        </span>
                                    </a>
                                </div>
                                <div class="tab-pannel tab-pannel-groups">

                                    <div class="tm-combo-item tm-combo-i44346190723">  
                                        <div class="tm-img">
                                            <a href="//detail.tmall.com/item.htm?id=44346190723&amp;bi_from=tm_comb" target="_blank" title="赤豪新西兰草饲生鲜S级新鲜团购原味西冷牛排180克送黄油" alt="赤豪新西兰草饲生鲜S级新鲜团购原味西冷牛排180克送黄油">
                                            <img src="//img.alicdn.com/bao/uploaded/i1/TB1qZW1JFXXXXbrXXXXXXXXXXXX_!!0-item_pic.jpg_130x130.jpg">
                                            </a>
                                        </div>

                                        <div class="tm-enable selected"><i></i></div>
                                        <p class="tm-original-price tm-clear">价格&nbsp;<i>¥</i><s>89.00</s>
                                        </p>
                                    </div>

                                    <div class="tm-combo-item tm-combo-i44346190723">  
                                        <div class="tm-img">
                                            <a href="//detail.tmall.com/item.htm?id=44346190723&amp;bi_from=tm_comb" target="_blank" title="赤豪新西兰草饲生鲜S级新鲜团购原味西冷牛排180克送黄油" alt="赤豪新西兰草饲生鲜S级新鲜团购原味西冷牛排180克送黄油">
                                            <img src="//img.alicdn.com/bao/uploaded/i1/TB1qZW1JFXXXXbrXXXXXXXXXXXX_!!0-item_pic.jpg_130x130.jpg">
                                            </a>
                                        </div>

                                        <div class="tm-enable"><i></i></div>
                                        <p class="tm-original-price tm-clear">价格&nbsp;<i>¥</i><s>89.00</s>
                                        </p>
                                    </div>

                                    <div class="tm-combo-item tm-combo-i44346190723">  
                                        <div class="tm-img">
                                            <a href="//detail.tmall.com/item.htm?id=44346190723&amp;bi_from=tm_comb" target="_blank" title="赤豪新西兰草饲生鲜S级新鲜团购原味西冷牛排180克送黄油" alt="赤豪新西兰草饲生鲜S级新鲜团购原味西冷牛排180克送黄油">
                                            <img src="//img.alicdn.com/bao/uploaded/i1/TB1qZW1JFXXXXbrXXXXXXXXXXXX_!!0-item_pic.jpg_130x130.jpg">
                                            </a>
                                        </div>

                                        <div class="tm-enable"><i></i></div>
                                        <p class="tm-original-price tm-clear">价格&nbsp;<i>¥</i><s>89.00</s>
                                        </p>
                                    </div>

                                </div>

                                <div class="tab-content-next">
                                    <a href="javascript:a()" class="a-button">
                                        <span class="a-button-inner">
                                            <i class="a-icon a-icon-next"></i>
                                        </span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    <!-- </div> -->
                </div> 
            </div>             
        </div>
    </div>
    <!-- 自由搭配 -->

    <!-- 详情、烹饪方法和评价 -->
    <div class="details-bg">
        <div class="details-main">
            <!-- 头部 -->
            <div class="details-head">
                <ul class="details-top">
                    <li class="info showline " id="info">
                        商品详情
                    </li>
                        
                    <li class="method" id="method">
                        烹饪方法
                    </li>

                    <li class="evaluation" id="evaluation">
                        用户评价
                        <span>12222</span>
                    </li>

                </ul>
            </div>
            <!-- 头部 -->

            <!-- 具体介绍 -->
            <div class="details-body-bg">
                <!-- 商品详情 -->
                <div class="details-body" id="details-body">
                    <!-- 文字介绍 -->
                   <blockquote class="block_txt" id="block_txt">
                       <div id="block_txt1">
                           <span class="txt_tart">“</span>
                                最近老公超级没食欲，都快瘦成狗了！天天早上不吃饭，中午吃几口，晚上吃几口，看着可怜巴巴的。昨天早上我起来给烙了馅饼，他也只吃了几口，愁人啊！问起想吃什么，永远都是烤肉烤肉！晕啊~家里有个一岁多点满地跑的小宝宝，带去吃火锅烤肉挺麻烦的，而且那个环境也
                                
                           <span class="txt_end">”</span>
                       </div>
                   </blockquote>
                   <!-- 文字介绍 -->
                   <div id="block_txt_show" style="display:block;">
                       <a href="javascript:void(0);">展开</a>
                   </div>

                   <div id="block_txt_hide" style="display:none;">
                       <a href="javascript:void(0);">收起</a>
                   </div>

                    <!-- 表格介绍材料等 -->
                    <div class="recipeCategory clear">
                        <!-- 主料 -->
                        <div class="recipeCategory_sub clear">
                          <div class="recipeCategory_sub_L">主料</div>
                          <div class="recipeCategory_sub_R">
                            <ul class="ingred1">
                                <li>
                                    <span class="catrgory_s1">
                                        <a target="_blank" href="http://www.meishichina.com/YuanLiao/MingXia/" title="明虾的做法大全">明虾
                                        </a>
                                    </span>
                                    <span class="category_s2">(300g)</span>
                                </li>

                                <li>
                                    <span class="category_s1">姜</span>
                                    <span class="category_s2">(3g)</span>
                                </li>

                                <li>
                                    <span class="category_s1">蒜蓉（蘸料）</span>
                                    <span class="category_s2">（适量）</span>
                                </li>

                                <li>
                                    <span class="category_s1">生抽（蘸料）</span>
                                    <span class="category_s2">（1茶匙）</span>
                                </li>

                                 <li>
                                    <span class="category_s1">姜</span>
                                    <span class="category_s2">(3g)</span>
                                </li>

                                <li>
                                    <span class="category_s1">蒜蓉（蘸料）</span>
                                    <span class="category_s2">（适量）</span>
                                </li>

                                <li>
                                    <span class="category_s1">生抽（蘸料）</span>
                                    <span class="category_s2">（1茶匙）</span>
                                </li>
                            </ul>                             
                          </div>
                        </div> 
                        <!-- 主料 -->

                        <!-- 调料 -->
                        <div class="recipeCategory_sub clear">
                          <div class="recipeCategory_sub_L">调料</div>
                          <div class="recipeCategory_sub_R">
                            <ul class="ingred1">
                                <li>
                                    <span class="catrgory_s1">
                                       <a target="_blank" href="http://www.meishichina.com/YuanLiao/XiaoCong/" title="小葱的做法大全">小葱</a>
                                    </span>
                                    <span class="category_s2">(适量)</span>
                                </li>

                                <li>
                                    <span class="category_s1">
                                        <a target="_blank" href="http://www.meishichina.com/YuanLiao/XiangCai/" title="香菜的做法大全">香菜</a>
                                    </span>
                                    <span class="category_s2">(适量)</span>
                                </li>

                                <li>
                                    <span class="category_s1">黄酒</span>
                                    <span class="category_s2">（适量）</span>
                                </li>

                                <li>
                                    <span class="category_s1">红曲米</span>
                                    <span class="category_s2">（15g）</span>
                                </li>
                            </ul>                             
                          </div>
                        </div> 
                        <!-- 调料 -->

                        <!-- 热量 -->
                        <div class="recipeCategory_sub clear">
                          <div class="recipeCategory_sub_L">热量</div>
                          <div class="recipeCategory_sub_R">
                            <ul class="ingred1">
                                <li>
                                    <span class="catrgory_s1">
                                       <a target="_blank" href="http://www.meishichina.com/YuanLiao/XiaoCong/" title="小葱的做法大全">小葱</a>
                                    </span>
                                    <span class="category_s2">(适量)</span>
                                </li>

                                <li>
                                    <span class="category_s1">
                                        <a target="_blank" href="http://www.meishichina.com/YuanLiao/XiangCai/" title="香菜的做法大全">香菜</a>
                                    </span>
                                    <span class="category_s2">(适量)</span>
                                </li>

                                <li>
                                    <span class="category_s1">黄酒</span>
                                    <span class="category_s2">（适量）</span>
                                </li>

                                <li>
                                    <span class="category_s1">红曲米</span>
                                    <span class="category_s2">（15g）</span>
                                </li>
                            </ul>                             
                          </div>
                        </div> 
                        <!-- 热量 -->
                    </div>
                    <!-- 表格介绍材料等 -->
                </div>
                <!-- 商品详情 -->

                <!-- 烹饪方法 -->
                <div class="recipeStep hide" id="recipeStep" >
                    <!-- 具体步骤 -->
                    <div>
                        <ul>
                            <li>
                                <div class="recipeStep_word" >
                                    <div class="recipeStep_num" >
                                        <img src="http://static.meishichina.com/res/num/1.png" alt="1">
                                    </div>
                                    羊蹄用刀将表面刮一遍再清洗干净，再准备好香菜、大葱、红曲米和姜。羊蹄用刀将表面刮一遍再清洗干净，再准备好香菜、大葱、红曲米和姜。羊蹄用刀将表面刮一遍再清洗干净，再准备好香菜、大葱、红曲米和姜。羊蹄用刀将表面刮一遍再清洗干净，再准备好香菜、大葱、红曲米和姜。
                                </div>   
                            </li>

                            <li>
                                <div class="recipeStep_word" >
                                    <div class="recipeStep_num" >
                                        <img src="http://static.meishichina.com/res/num/2.png" alt="1">
                                    </div>
                                    羊蹄用刀将表面刮一遍再清洗干净，再准备好香菜、大葱、红曲米和姜。
                                </div>   
                            </li>

                            <li>
                                <div class="recipeStep_word" >
                                    <div class="recipeStep_num" >
                                        <img src="http://static.meishichina.com/res/num/3.png" alt="1">
                                    </div>
                                    羊蹄用刀将表面刮一遍再清洗干净，再准备好香菜、大葱、红曲米和姜。
                                </div>   
                            </li>

                            <li>
                                <div class="recipeStep_word" >
                                    <div class="recipeStep_num" >
                                        <img src="http://static.meishichina.com/res/num/4.png" alt="1">
                                    </div>
                                    羊蹄用刀将表面刮一遍再清洗干净，再准备好香菜、大葱、红曲米和姜。
                                </div>   
                            </li>

                            <li>
                                <div class="recipeStep_word" >
                                    <div class="recipeStep_num" >
                                        <img src="http://static.meishichina.com/res/num/5.png" alt="1">
                                    </div>
                                    羊蹄用刀将表面刮一遍再清洗干净，再准备好香菜、大葱、红曲米和姜。
                                </div>   
                            </li>

                            <li>
                                <div class="recipeStep_word" >
                                    <div class="recipeStep_num" >
                                        <img src="http://static.meishichina.com/res/num/6.png" alt="1">
                                    </div>
                                    羊蹄用刀将表面刮一遍再清洗干净，再准备好香菜、大葱、红曲米和姜。
                                </div>   
                            </li>
                        </ul>
                    </div>
                    <!-- 具体步骤 -->

                    <!-- 小窍门 -->
                    <div class="recipeTip" >
                        <p>小窍门</p>

                        <li>1收汁之前翻个面可以令食物上色更加均匀。</li>
                        <li>2收汁是打开盖子进行的，到最后汤汁非常粘稠时容易往外溅，所以一定要看着点。</li> 
        
                    </div>
                    <!-- 小窍门 -->
                </div>
                <!-- 烹饪方法 -->

                <!-- 用户评价 -->
                <div id="J_Reviews" class="J_DetailsSection hide">
                    <div class="cxd-rate">
                        <!-- 星级评分头部 -->
                        <div class="rate-header rate-header-tags" style="display:block;">
                            <div class="rate-score">
                                <h4>菜品描述相符</h4>
                                <strong>4.8</strong>
                                <p>
                                    <span class="score-value-no score-value-4d9">
                                        <em></em>
                                    </span>
                                </p>
                            </div>
                                
                        </div>
                        <!-- 星级评分头部 -->

                        <!-- 评价导航条 -->
                        <div class="rate-toolbar">
                            <span class="rate-filter">
                                <input class="rate-list-all rate-radio-group" id="J_RateWithFilterall1442723293446" type="radio" name="radiogrounp" checked="">
                                <label for="J_RateWithFilterall1442723293446">全部</label>

                                <input class="rate-list-append rate-radio-group" id="J_RateWithAppend1442723294634" type="radio" name="radiogrounp">
                                <label for="J_RateWithAppend1442723294634">追评 (8)</label>

                                <input class="rate-list-append rate-radio-group" id="J_RateWithAppend1442723294633" type="radio" name="radiogrounp">
                                <label for="J_RateWithAppend1442723294633">客服回复 (8)</label>
                            </span>

                           <span class="tm-toolbar-lft">
                               <input class="rate-list-hascontent" id="J_RateWithContent1442746721891" type="radio" name="content" checked="">
                               <label for="J_RateWithContent1442746721891">按默认</label>

                                <input class="rate-list-hascontent" id="J_RateWithContent1442746721892" type="radio" name="content" >
                               <label for="J_RateWithContent1442746721892">按时间</label>
                            </span>
                        </div>
                        <!-- 评价导航条 -->

                        <!-- 评价具体内容 -->
                        <div class="rate-grid">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="cxd-col-master">
                                            <div class="cxd-rate-premiere">
                                                <div class="cxd-rate-tag">
                                                    <div class="cxd-rate-title">初次评价：</div>
                                                    <div class="cxd-rate-date">08.29</div>
                                                </div>

                                                <div class="cxd-rate-content">
                                                    <div class="cxd-rate-fulltxt">包装的很到位，泡沫箱+保温袋+冰袋，收货时里边的牛排还冻的硬邦邦的.牛排煎下很好吃。方便实惠简单</div>
                                                </div>
                                            </div>

                                            <div class="cxd-rate-service">
                                                <div class="cxd-rate-tag">
                                                    <div class="cxd-rate-title">客服回复：</div>
                                                    <div class="cxd-rate-date">08.30</div>
                                                </div>

                                                <div class="cxd-rate-content">
                                                    <div class="cxd-rate-fulltxt">包装的很到位，泡沫箱+保温袋+冰袋，收货时里边的牛排还冻的硬邦邦的.牛排煎下很好吃。方便实惠简单</div>
                                                </div>
                                            </div>

                                            <div class="cxd-rate-append">
                                                <div class="cxd-rate-tag">
                                                    <div class="cxd-rate-title">
                                                        <span class="cxd-rate-daydiff">收货6天后追加：</span>
                                                    </div>
                                                    <div class="cxd-rate-date">09.10</div>
                                                </div>

                                                <div class="cxd-rate-content">
                                                    <div class="cxd-rate-fulltxt">包装的很到位，泡沫箱+保温袋+冰袋，收货时里边的牛排还冻的硬邦邦的.牛排煎下很好吃。方便实惠简单</div>
                                                </div>
                                            </div>
                                        </td>

                                       <!--  <td class="col-meta">
                                            <div class="rate-sku">
                                                <p title=""></p>
                                            </div>
                                            <div class="rate-user-profile">
                                                <p title=""></p>
                                            </div>
                                        </td> -->

                                        <td class="col-author">
                                            <div class="rate-user-info">c<span>***</span>烬<span>（匿名）</span>
                                            </div>
                                            <!-- <div class="rate-user-grade">
                                                <a href="//vip.tmall.com" target="_blank" title="天猫T4达人">
                                                <img src="//g.alicdn.com/tm/member-club/4.6.0/img/tmall-grade-t4-18.png">
                                                </a>
                                                <img title="1001 - 2000个买家信用积分" src="//assets.alicdn.com/sys/common/icon/rank_s/b_blue_3.gif">
                                            </div>
                                            <div class="rate-gift">获认真评价奖<s></s>
                                            </div> -->
                                        </td>
                                    </tr>

                                     <tr>
                                        <td class="cxd-col-master">
                                            <div class="cxd-rate-premiere">
                                                <div class="cxd-rate-tag">
                                                    <div class="cxd-rate-title">初次评价：</div>
                                                    <div class="cxd-rate-date">08.29</div>
                                                </div>

                                                <div class="cxd-rate-content">
                                                    <div class="cxd-rate-fulltxt">包装的很到位，泡沫箱+保温袋+冰袋，收货时里边的牛排还冻的硬邦邦的.牛排煎下很好吃。方便实惠简单</div>
                                                </div>
                                            </div>

                                            <div class="cxd-rate-service">
                                                <div class="cxd-rate-tag">
                                                    <div class="cxd-rate-title">客服回复：</div>
                                                    <div class="cxd-rate-date">08.30</div>
                                                </div>

                                                <div class="cxd-rate-content">
                                                    <div class="cxd-rate-fulltxt">包装的很到位，泡沫箱+保温袋+冰袋，收货时里边的牛排还冻的硬邦邦的.牛排煎下很好吃。方便实惠简单</div>
                                                </div>
                                            </div>

                                            <div class="cxd-rate-append">
                                                <div class="cxd-rate-tag">
                                                    <div class="cxd-rate-title">
                                                        <span class="cxd-rate-daydiff">收货6天后追加：</span>
                                                    </div>
                                                    <div class="cxd-rate-date">09.10</div>
                                                </div>

                                                <div class="cxd-rate-content">
                                                    <div class="cxd-rate-fulltxt">包装的很到位，泡沫箱+保温袋+冰袋，收货时里边的牛排还冻的硬邦邦的.牛排煎下很好吃。方便实惠简单</div>
                                                </div>
                                            </div>
                                        </td>

                                       <!--  <td class="col-meta">
                                            <div class="rate-sku">
                                                <p title=""></p>
                                            </div>
                                            <div class="rate-user-profile">
                                                <p title=""></p>
                                            </div>
                                        </td> -->

                                        <td class="col-author">
                                            <div class="rate-user-info">c<span>***</span>烬<span>（匿名）</span>
                                            </div>
                                            <!-- <div class="rate-user-grade">
                                                <a href="//vip.tmall.com" target="_blank" title="天猫T4达人">
                                                <img src="//g.alicdn.com/tm/member-club/4.6.0/img/tmall-grade-t4-18.png">
                                                </a>
                                                <img title="1001 - 2000个买家信用积分" src="//assets.alicdn.com/sys/common/icon/rank_s/b_blue_3.gif">
                                            </div>
                                            <div class="rate-gift">获认真评价奖<s></s>
                                            </div> -->
                                        </td>
                                    </tr>
                                </tbody>
                            </table> 
                        </div>
                        <!-- 评价具体内容 -->
                    </div>
                </div>
                <!-- 用户评价 -->
            </div>
            <!-- 具体介绍 -->

        </div>
    </div >
<!-- main结束 -->

   <?php endfor; endif; ?>
    <?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>