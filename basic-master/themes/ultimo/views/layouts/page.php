<?php $this->beginContent('//layouts/main'); ?><div class="main-container col2-right-layout">    <div class="main container show-bg">        <?php if (isset($this->breadcrumbs)): ?>            <?php            $this->widget('zii.widgets.CBreadcrumbs', array(                'links' => $this->breadcrumbs,                'htmlOptions' => array('class' => 'grid-full breadcrumbs'),                'separator' => NULL,                'tagName' => 'div', // will change the container to ul                'activeLinkTemplate' => '<li><a href="{url}">{label}</a><span>/ </span></li>', // will generate the clickable breadcrumb links                 'inactiveLinkTemplate' => '<li class="cms_page"><strong>{label}</strong></li></ul>', // will generate the current page url : <li>News</li>                'homeLink' => '<ul><li class="home"><a href="' . Yii::app()->homeUrl . '">'.F::t('Home').'</a><span>/ </span></li>' // will generate your homeurl item : <li><a href="/dr/dr/public_html/">Home</a></li>            ));            ?><!-- breadcrumbs --><?php endif ?>        <div class="preface grid-full in-col1"></div>        <div class="col-main grid12-9 grid-col2-main in-col2"><?php echo $content; ?>                       </div>        <div class="col-right sidebar grid12-3 grid-col2-sidebar in-sidebar"><div class="block">                <div class="block-title">                    <strong><span>Right Top Block</span></strong>                </div>                <p style="background-color: #f5f5f5; color:#666; padding:10px; margin-bottom:10px; margin-top:10px;">                    Custom CMS block displayed at the top of the right sidebar. Put your own content here: text, HTML, images - whatever you like.                </p>                <p style="background-color: #f5f5f5; color:#666; padding:10px;">                    There are many similar content placeholders across the store. All editable from admin panel.                </p>            </div><div class="block">                <div class="block-title">                    <strong><span>Right Bottom Block</span></strong>                </div>                <div class="block-content sample-block">                    <p>Custom CMS block displayed at the bottom of the right sidebar.  There are many similar content placeholders across the store.</p>                </div>            </div></div>        <div class="postscript grid-full in-col1"></div>    </div></div><?php $this->endContent(); ?>