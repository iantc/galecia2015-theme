<?php include("sites/all/themes/galecia/includes/header.php"); ?>
<div class="main-container container-fluid">
  <div class="row">
    <header role="banner" id="page-header">
      <?php if (!empty($site_slogan)): ?>
        <p class="lead"><?php print $site_slogan; ?></p>
      <?php endif; ?>
      <?php print render($page['header']); ?>
    </header> <!-- /#page-header -->
    <div class="" id="highlight-wrapper">
      <div class="container">
        <div class="row">
          <?php if (!empty($messages)||!empty($page['help'])): ?>
            <div class="container">
              <div class="row">
                <?php print $messages; ?>
                <?php print render($page['help']); ?>
             </div>
            </div>
          <?php endif; ?>
          <div class="highlighted col-md-12">
            <?php print render($page['highlighted']); ?>
          </div>
        </div>
      </div>
    </div>
    <?php if (!empty($page['featured'])): ?>
      <div class="" id="featured-wrapper">
          <div class="container">
            <div class="row">
              <div class="featured col-md-12">
                <?php print render($page['featured']); ?>
              </div>
            </div>
          </div>
      </div>
    <?php endif; ?>
    <?php if (!empty($page['featured_second'])): ?>
      <div class="" id="featured-second-wrapper">
          <div class="container">
            <div class="row">
              <div class="featured_second col-md-12">
                <?php print render($page['featured_second']); ?>
              </div>
            </div>
          </div>
      </div>
    <?php endif; ?>
    <div class="container-fluid" id="main-content-wrapper">
        <div class="container">
          <div class="row">
            <?php if (!empty($page['sidebar_first'])): ?>
              <aside class="col-sm-3" role="complementary">
                <?php print render($page['sidebar_first']); ?>
              </aside>  <!-- /#sidebar-first -->
            <?php endif; ?>
            <section<?php print $content_column_class; ?>>
              <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
              <a id="main-content"></a>
              <?php if (!empty($action_links)): ?>
                <ul class="action-links"><?php print render($action_links); ?></ul>
              <?php endif; ?>
              <?php print render($page['page_top']); ?>
              <?php print render($page['content']); ?>
              <?php print render($page['page_bottom']); ?>
            </section>

            <?php if (!empty($page['sidebar_second'])): ?>
              <aside class="col-sm-3" role="complementary">
                <?php print render($page['sidebar_second']); ?>
              </aside>  <!-- /#sidebar-second -->
            <?php endif; ?>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
<?php include("sites/all/themes/galecia/includes/footer.php"); ?>
