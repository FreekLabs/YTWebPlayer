<?php echo $this->inc('header.php', ['title' => 'Youtube Downloader']); ?>
	<form class="form-download" method="get" id="download" action="getvideo.php">
		<h1 class="form-download-heading">Youtube Downloader</h1>
		<input type="text" name="videoid" id="videoid" size="40" placeholder="YouTube Link or VideoID" autofocus/>
		<input class="btn btn-primary" type="submit" name="type" id="type" value="Download" />
		<p>Valid inputs are YouTube links or VideoIDs:</p>
		<ul>
			<li>youtube.com/watch?v=...</li>
			<li>youtu.be/...</li>
			<li>youtube.com/embed/...</li>
			<li>youtube-nocookie.com/embed/...</li>
			<li>youtube.com/watch?feature=player_embedded&v=...</li>
		</ul>

	<!-- @TODO: Prepend the base URI -->
<?php
if ( $this->get('showBrowserExtensions') === true )
{
	echo '<a href="ytdl.user.js" class="userscript btn btn-mini" title="Install chrome extension to view a \'Download\' link to this application on Youtube video pages."> Install Chrome Extension </a>';
}
?>
<hr />
<p class="muted"><a href="https://github.com/jeckman/YouTube-Downloader" target="_blank">Youtube Downloader <?php echo $this->get('app_version', ''); ?></a> is licensed under GPL 2.</p>
</form>
<?php echo $this->inc('footer.php'); ?>
