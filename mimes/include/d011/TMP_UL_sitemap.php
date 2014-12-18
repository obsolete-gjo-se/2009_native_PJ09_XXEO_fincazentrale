<ul>
	<?php do { ?>
	<li><a href="<?php echo $row_sitemap['Pfad']; ?>"><?php echo $row_sitemap['Keyword']; ?></a></li>
	<?php } while ($row_sitemap = mysql_fetch_assoc($sitemap)); ?>
</ul>
