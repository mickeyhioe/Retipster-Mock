<!-- Popular Posts -->
<div class="popular-posts">
<?php
    $posts = array(
        array(
            'cat'   => "Cool Technology",
            'title'  => "How I Find Motivated Sellers (And Get Them Calling Me). Step 1: Getting The List",
        ),
        array(
            'cat'   => "Cool Technology",
            'title'  => "How to Find the Highest and Best Use for Your Land",
        ),
        array(
            'cat'   => "Cool Technology",
            'title'  => "Do the Details Matter? Here’s One Easy Way to Enhance Your Property’s Curb Appeal",
        )
    );
    foreach(array_keys($posts) as $num):
        $category = $posts[$num]['cat'];
        $title = $posts[$num]['title'];
?>

    <div class="popular-posts-item">
        <a href="single.php" class="post-content">
            <div class="post-content-bg" style="background-image: url(https://picsum.photos/600/300?image=<?php echo rand(600, 1000)?>);"></div>
            <span class="post-category"><?php echo $category;?></span>
            <span class="h5 post-title"><?php echo $title;?></span>
            <span class="post-user">By: Seth Williams • <span class="span-reading-time"> 11 </span> min read</span>
        </a>
    </div>

<?php endforeach;?>
</div>
<!-- /Popular Posts -->