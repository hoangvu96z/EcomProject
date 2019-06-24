<?php 
defined( '_JEXEC' ) or die( 'Restricted access' );

$template_width   					= $this->params->get("templateWidth", "100%");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
    <head>
        <jdoc:include type="head" />
        <link rel="shortcut icon" href="sim.jpg" />
        <script type="text/javascript" src="<?php echo $this->baseurl ?>/media/system/js/modal.js"> </script>
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/media/system/css/modal.css" type="text/css" />
        <script type="text/javascript">
            // <!--
            window.addEvent('domready', function(){ var JTooltips = new
                Tips($$('.hasTip'), { maxTitleChars: 50, fixed: 'false'}); });
            // -->
        </script>
        <script type="text/javascript">
            // <!--
            window.addEvent('domready', function() {
                SqueezeBox.initialize({});
                $$('a.modal').each(function(el) {
                    el.addEvent('click', function(e) {
                        new Event(e).stop();
                        SqueezeBox.fromElement(el);
                    });
                });
            });
            // -->
        </script>
        <?php require("head_includes.php"); ?>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <div>
                    <div id="banner"><jdoc:include type="modules" name="banner" style="xhtml" /></div>
                </div>
                <div id="topmenu"><jdoc:include type="modules" name="top" style="xhtml" /></div>
            </div>
            <div id="navigation">
                <div id="menubar">
                    <div id="menubar1"><jdoc:include type="modules" name="user3" style="xhtml" /></div>
                    <div id="menubar2"><jdoc:include type="modules" name="toolbar" style="xhtml" /></div>
                </div>
            </div>
            <div id="maincontent">
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td valign="top" width="218">
                            <?php if($this->countModules('left')) : ?>
                            <div id="left_out">
                                <div class="sidebar"><jdoc:include type="modules" name="left" style="rounded" /></div>
                            </div>
							<a style="color:#fff" title="Thiết kế website, thiết kế trang web" href="scodeweb.com">http://scodeweb.com</a>
                            <?php endif; ?>
                        </td>
                        <td valign="top">
                            <div id="content_out<?php echo $contentwidth; ?>">
                                <div id="headerimage"></div>
                                <div id="pathway"><jdoc:include type="module" name="breadcrumbs" /></div>
                                <jdoc:include type="message" />
                                <?php if(JRequest::getVar('option')!=null && JRequest::getVar('view')!="frontpage"): ?>
                                <div id="content"><jdoc:include type="component" /></div>
                                <?php endif; ?>

                                <?php if($this->countModules('user1')) : ?>
                                <div id="user1"class="user_bg">
                                    <div class="topmodule_userone">
                                        <div id="user1inside" class="user_inside"><jdoc:include type="modules" name="user1" style="xhtml" /></div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($this->countModules('user2')) : ?>
                                <div id="user2"class="user_bg">
                                    <div class="topmodule_userone">
                                        <div id="user2inside" class="user_inside"><jdoc:include type="modules" name="user2" style="xhtml" /></div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($this->countModules('user4')) : ?>
                                <div id="user4"class="user_bg">
                                    <div class="topmodule_userone">
                                        <div id="user4inside" class="user_inside"><jdoc:include type="modules" name="user4" style="xhtml" /></div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($this->countModules('user5')) : ?>
                                <div id="user5"class="user_bg">
                                    <div class="topmodule_userone">
                                        <div id="user5inside" class="user_inside"><jdoc:include type="modules" name="user5" style="xhtml" /></div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($this->countModules('user6')) : ?>
                                <div id="user6"class="user_bg">
                                    <div class="topmodule_userone">
                                        <div id="user6inside" class="user_inside"><jdoc:include type="modules" name="user6" style="xhtml" /></div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($this->countModules('user7')) : ?>
                                <div id="user7"class="user_bg">
                                    <div class="topmodule_userone">
                                        <div id="user7inside" class="user_inside"><jdoc:include type="modules" name="user7" style="xhtml" /></div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($this->countModules('user8')) : ?>
                                <div id="user8"class="user_bg">
                                    <div class="topmodule_userone">
                                        <div id="user8inside" class="user_inside"><jdoc:include type="modules" name="user8" style="xhtml" /></div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($this->countModules('user9')) : ?>
                                <div id="user9"class="user_bg">
                                    <div class="topmodule_userone">
                                        <div id="user9inside" class="user_inside"><jdoc:include type="modules" name="user9" style="xhtml" /></div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php
                                if(JRequest::getVar('option')==null || JRequest::getVar('view')=="frontpage"):
                                ?>
                                <div id="content"><jdoc:include type="component" /></div>
                                <?php endif;?>

                            </div>
                        </td>
                        <td valign="top" width="218">
                            <?php if($this->countModules('right')) : ?>
                            <div id="right_out">
                                <div class="sidebar"><jdoc:include type="modules" name="right" style="rounded" /></div>
                            </div>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
					
					
                        <td colspan="3" valign="top"><div align="center"><img src="nganhang.gif" width="758" height="86" />
                            </div>
                          <div id="copyright">
                              <div class="footer_item_content">
				<strong>Công ty CP Giải pháp và Truyền thông SCODEWEB</strong><br>
				Văn phòng: 100 Trương Định - Hai Bà Trưng - TP HCM<br>
				Địa chỉ: 27/230 Định Công Thượng - HỒ chí minh<br>
				ĐT: Mr Sơn - 0868896944<br>
				Email: <a href="mailto:scodeweb2016@gmail.com">scodeweb2016@gmail.com</a><br>
				Website: <a title="Thiết kế website, thiết kế trang web" href="scodeweb2016@gmail.com">scodeweb2016@gmail.com</a><br>
						
						<div style="clear:both"></div>
						</div>
				<div style="clear:both"></div>
                          </div>
						  <div style="clear:both"></div>
                      </td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>