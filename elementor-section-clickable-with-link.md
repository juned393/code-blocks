Make elementor section clickable with link

Give this class name to elementor section: '.click-child'

Add only on link element within section, it may be to the heading or image.

Add this javascript code on a page:

<script>
	jQuery(document).ready(function() { jQuery("body").on("click", ".click-child", function() { var href = jQuery(this).find("a").attr('href'); window.location = href; }); });
</script>
