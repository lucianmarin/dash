<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Lucian's Dash</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="apple-touch-icon" href="http://lucianmarin.com/favicon-ios.png"/>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />

<!-- Google Analytics code -->

</head>
<body>

<?php include("lastRSS.php") ?>

<div id="wrap" class="group">

<div id="left">

<h1>My Stuff</h1>

<div class="box">
<h2><a href="http://lucianmarin.com/archive">Journal</a></h2>
<?php 
$rss = new lastRSS;
$rss->cache_dir = './cache';
$rss->cache_time = 1200;
$rss->date_format = 'j M';
$rss->cp = 'UTF-8';
$rss->items_limit = 4;
?>
<?php if ($rs = $rss->get('http://lucianmarin.com/rss/')) : ?>
    <div class="feed">
    <ul>
    <?php foreach($rs['items'] as $item) :?>
    	<li><span><?php echo $item['pubDate']?></span> <a href="<?php echo $item['link']?>"><?php echo $item['title']?></a></li>
    <?php endforeach;?>
    </ul>
    </div>
<?php else :?>
<div class="feed">
	<ul>
		<li><span>Error</span> RSS file could not be found</li>
	</ul>
</div>
<?php endif;?>
</div>

<div class="box">
<h2><a href="http://web.stagram.com/n/lucianmarin/">Instagram</a></h2>
<?php if ($rs = $rss->get('http://web.stagram.com/rss/n/lucianmarin/')) : ?>
    <div class="feed">
    <ul>
    <?php foreach($rs['items'] as $item) :?>
    	<li><span><?php echo $item['pubDate']?></span><a href="<?php echo $item['link']?>"><?php echo $item['title']?></a></li>
    <?php endforeach;?>
    </ul>
    </div>
<?php else :?>
<div class="feed">
	<ul>
		<li><span>Error</span> RSS file could not be found</li>
	</ul>
</div>
<?php endif;?>
</div>

<div class="box">
<h2><a href="http://vimeo.com/lucianmarin/videos">Vimeo</a></h2>
<?php if ($rs = $rss->get('http://vimeo.com/lucianmarin/videos/rss')) : ?>
    <div class="feed">
    <ul>
    <?php foreach($rs['items'] as $item) :?>
    	<li><span><?php echo $item['pubDate']?></span> <a href="<?php echo $item['link']?>"><?php echo $item['title']?></a></li>
    <?php endforeach;?>
    </ul>
    </div>
<?php else :?>
<div class="feed">
	<ul>
		<li><span>Error</span> RSS file could not be found</li>
	</ul>
</div>
<?php endif;?>
</div>

<div class="box">
<h2><a href="http://dribbble.com/lucianmarin">Dribbble</a></h2>
<?php if ($rs = $rss->get('http://dribbble.com/lucianmarin/shots.rss')) : ?>
    <div class="feed">
    <ul>
    <?php foreach($rs['items'] as $item) :?>
    	<li><span><?php echo $item['pubDate']?></span> <a href="<?php echo $item['link']?>"><?php echo $item['title']?></a></li>
    <?php endforeach;?>
    </ul>
    </div>
<?php else :?>
<div class="feed">
	<ul>
		<li><span>Error</span> RSS file could not be found</li>
	</ul>
</div>
<?php endif;?>
</div>

<div class="box tweet">
<h2><a href="http://twitter.com/lucianmarin">Tweets</a></h2>
<?php if ($rs = $rss->get('http://twitter.com/statuses/user_timeline/12195242.rss')) : ?>
    <div class="feed">
    <ul>
    <?php foreach($rs['items'] as $item) :?>
        <?php $x_title = $item['title'] ?>
        <?php $x_comm = explode("lucianmarin:", $x_title) ?>
    	<li><span><?php echo $item['pubDate']?></span> <a href="<?php echo $item['link']?>"><?php echo $x_comm[1]?></a></li>
    <?php endforeach;?>
    </ul>
    </div>
<?php else :?>
<div class="feed">
	<ul>
		<li><span>Error</span> RSS file could not be found</li>
	</ul>
</div>
<?php endif;?>
</div>

</div>

<div id="right">

<h1>Things I Like</h1>

<div class="box">
<h2><a href="http://delicious.com/lucianmarin"><span>Some</span> Delicious <span>Links</span></a></h2>
<?php if ($rs = $rss->get('http://delicious.com/v2/rss/lucianmarin')) : ?>
    <div class="feed">
    <ul>
    <?php foreach($rs['items'] as $item) :?>
    	<li><span><?php echo $item['pubDate']?></span> <a href="<?php echo $item['link']?>"><?php echo $item['title']?></a></li>
    <?php endforeach;?>
    </ul>
    </div>
<?php else :?>
<div class="feed">
	<ul>
		<li><span>Error</span> RSS file could not be found</li>
	</ul>
</div>
<?php endif;?>
</div>

<div class="box">
<h2><a href="http://www.reddit.com/"><span>Saved on</span> Reddit</a></h2>
<?php if ($rs = $rss->get('http://www.reddit.com/.rss')) : ?> <!-- your RSS feed saved Reddit stories -->
    <div class="feed">
    <ul>
    <?php foreach($rs['items'] as $item) :?>
    	<li><span><?php echo $item['pubDate']?></span> <a href="<?php echo $item['link']?>"><?php echo $item['title']?></a></li>
    <?php endforeach;?>
    </ul>
    </div>
<?php else :?>
<div class="feed">
	<ul>
		<li><span>Error</span> RSS file could not be found</li>
	</ul>
</div>
<?php endif;?>
</div>

<div class="box">
<h2><a href="http://vimeo.com/lucianmarin/likes"><span>Liked on</span> Vimeo</a></h2>
<?php if ($rs = $rss->get('http://vimeo.com/lucianmarin/likes/rss')) : ?>
    <div class="feed">
    <ul>
    <?php foreach($rs['items'] as $item) :?>
    	<li><span><?php echo $item['pubDate']?></span> <a href="<?php echo $item['link']?>"><?php echo $item['title']?></a></li>
    <?php endforeach;?>
    </ul>
    </div>
<?php else :?>
<div class="feed">
	<ul>
		<li><span>Error</span> RSS file could not be found</li>
	</ul>
</div>
<?php endif;?>
</div>

<div class="box">
<h2><a href="http://dribbble.com/lucianmarin/shots/likes"><span>Liked on</span> Dribbble</a></h2>
<?php if ($rs = $rss->get('http://dribbble.com/lucianmarin/shots/likes.rss')) : ?>
    <div class="feed">
    <ul>
    <?php foreach($rs['items'] as $item) :?>
    	<li><span><?php echo $item['pubDate']?></span> <a href="<?php echo $item['link']?>"><?php echo $item['title']?></a></li>
    <?php endforeach;?>
    </ul>
    </div>
<?php else :?>
<div class="feed">
	<ul>
		<li><span>Error</span> RSS file could not be found</li>
	</ul>
</div>
<?php endif;?>
</div>

<div class="box tweet">
<h2><a href="http://twitter.com/lucianmarin/favorites">
<span>Favorite</span> Tweets</a></h2>
<?php if ($rs = $rss->get('http://twitter.com/favorites/lucianmarin.rss')) : ?>
    <div class="feed">
    <ul>
    <?php foreach($rs['items'] as $item) :?>
        <?php $x_title = $item['title'] ?>
        <?php $x_comm = explode(":", $x_title, 2) ?>
    	<li><span><?php echo $item['pubDate']?></span> <a href="<?php echo $item['link']?>"><?php echo $x_comm[1]?></a></li>
    <?php endforeach;?>
    </ul>
    </div>
<?php else :?>
<div class="feed">
	<ul>
		<li><span>Error</span> RSS file could not be found</li>
	</ul>
</div>
<?php endif;?>
</div>

</div>

</div>

</body>
</html>