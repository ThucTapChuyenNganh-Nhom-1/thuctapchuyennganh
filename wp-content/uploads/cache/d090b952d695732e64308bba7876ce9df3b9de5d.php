<!doctype html>
<html <?php echo get_language_attributes(); ?>>
  <?php echo $__env->make('partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <body <?php body_class() ?>>
  <?php echo App::getTrackingCode('after_open_body'); ?>

  <?php echo $__env->make('partials.loading', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <div id="wrapper" class="wrapper has-animation">
    
    <main id="main-content">
      <?php echo $__env->yieldContent('content'); ?>
    </main>
    <?php if(App\display_sidebar()): ?>
      <aside class="sidebar">
        <?php echo $__env->make('partials.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      </aside>
    <?php endif; ?>
    
    <?php echo $__env->make('partials.javascript', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
    </div>
    <?php echo App::getTrackingCode('before_close_body'); ?>

  </body>
</html>
