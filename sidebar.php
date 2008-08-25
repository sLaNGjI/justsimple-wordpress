<div id="sidebar">
<ul>
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>
<li>
    <h2><?php _e('Pages'); ?></h2>
    <ul>
      <?php wp_list_pages('title_li=' ); ?>
    </ul>
  </li>	
  <li>
	<h2><?php _e('Monthly'); ?></h2>
	<ul><?php wp_get_archives('type=monthly'); ?></ul>
  </li>
  <li>
    <h2><?php _e('Categories'); ?></h2>
    <ul>
      <?php wp_list_cats('optioncount=0&hierarchical=1');    ?>
    </ul>
  </li>
<?php if(is_home()) {?>
  <?php get_links_list(); ?>    
  <li>
		<h2>Meta</h2>
		<ul>
			<?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
			<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
			<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
			<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
			<?php wp_meta(); ?>
		</ul>			
   </li>
  <?php }?>
  <?php endif; ?>
</ul>

</div>
<!-- CLOSE sidebar-->
<div class="clear"></div>