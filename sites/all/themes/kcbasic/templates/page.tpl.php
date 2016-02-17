
  <!-- ______________________ HEADER _______________________ -->
<div id="header-full">
  <header id="header">
    <div class="container">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
        </a>
        <div id="site-name">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
        </div>
      <?php endif; ?>

      <?php if ($page['header']): ?>
        <div id="header-region">
          <?php print render($page['header']); ?>
        </div>
      <?php endif; ?>
    </div>
  </header> <!-- /header -->
</div> <!-- head -->
<div class="clearfix"></div>
  <!-- ______________________ NAVAGATION _______________________ -->

<div id="navigation-full">
  <?php if ($main_menu || $secondary_menu): ?>
    <nav id="navigation" class="menu <?php if (!empty($main_menu)) {print "with-primary";}
      if (!empty($secondary_menu)) {print " with-secondary";} ?>">
      <div class="container">
		<?php print render($page['navigation']); ?>
      </div>
    </nav> <!-- /navigation -->
  <?php endif; ?>
</div>

  <!-- ______________________ PAGE _______________________ -->

<div id="page-full">
  <div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>
      <div class="container">
        <section id="content">
    
            <?php if ($breadcrumb || $title|| $messages || $tabs || $action_links): ?>
              <div id="content-header">
  
                <?php print $breadcrumb; ?>
  
                <?php if ($page['highlighted']): ?>
                  <div id="highlighted"><?php print render($page['highlighted']) ?></div>
                <?php endif; ?>
  
                <?php print render($title_prefix); ?>
  
                <?php if ($title): ?>
                  <h1 class="title"><?php print $title; ?></h1>
                <?php endif; ?>
  
                <?php print render($title_suffix); ?>
                <?php print $messages; ?>
                <?php print render($page['help']); ?>
  
                <?php if ($tabs): ?>
                  <div class="tabs"><?php print render($tabs); ?></div>
                <?php endif; ?>
  
                <?php if ($action_links): ?>
                  <ul class="action-links"><?php print render($action_links); ?></ul>
                <?php endif; ?>
  
              </div> <!-- /#content-header -->
            <?php endif; ?>
  
            <div id="content-area">
              <?php print render($page['content']) ?>
            </div>
    
        </section> <!-- /content-inner /content -->
  
        <?php if ($page['sidebar_first']): ?>
          <aside id="sidebar-first" class="column sidebar first">
            <?php print render($page['sidebar_first']); ?>
          </aside>
        <?php endif; ?> <!-- /sidebar-first -->
  
        <?php if ($page['sidebar_second']): ?>
          <aside id="sidebar-second" class="column sidebar second">
            <?php print render($page['sidebar_second']); ?>
          </aside>
        <?php endif; ?> <!-- /sidebar-second -->
      </div>
    </div> <!-- /main -->
  </div> <!-- /page -->
</div>  

  <!-- ______________________ FOOTER _______________________ -->
<div id="footer-full">
  <?php if ($page['footer']): ?>
    <footer id="footer">
      <div class="container">
      <?php print render($page['footer']); ?>
      </div>
    </footer> <!-- /footer -->
  <?php endif; ?>
</div>