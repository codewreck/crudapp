<h2><?php echo $title; ?></h2>
<h3><a href="<?php echo site_url('news/create'); ?>">Add article</a></h3>

<?php foreach ($news as $news_item): ?>

        <h3><?php echo $news_item['title']; ?></h3>
        <div class="main">
                <?php echo $news_item['text']; ?>
        </div>
        <p>
	        <a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View article</a> | 
	        <a href="<?php echo site_url('news/edit/'.$news_item['slug']); ?>">Edit article</a> | 
	        <a href="<?php echo site_url('news/delete/'.$news_item['slug']); ?>">Delete</a> | 
        </p>
        <hr>

<?php endforeach; ?>
