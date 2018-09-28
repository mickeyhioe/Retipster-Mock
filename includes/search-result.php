<!-- Search Results -->
<div class="search-results">
<?php
    $search = array(
        array(
            'cat'    => "Cool Technology",
            'title'  => "How I Find Motivated Sellers (And Get Them Calling Me). Step 1: Getting The List",
            'excerpt'=> "For the past six months, I have invested a huge amount of time and money into a complete overhaul of REtipster.com. In a lot of ways, I had been feeling like the site wasn’t doing the best job of delivering the content in a way that made it easy for users to find what they..."
        ),
        array(
            'cat'   => "Cool Technology",
            'title'  => "How to Find the Highest and Best Use for Your Land",
            'excerpt'=> "So, you’re thinking about becoming a real estate wholesaler. If you’ve spent any amount of time lurking around the real estate investment community online, you’ve probably come across the buzzword “real estate wholesaling.” To many, wholesaling is the gold standard for getting started in real estate. To others, it’s downright illegal, it’s unethical, and it..."
        ),
        array(
            'cat'   => "Cool Technology",
            'title'  => "Do the Details Matter? Here’s One Easy Way to Enhance Your Property’s Curb Appeal",
            'excerpt'=> "When it comes to valuing land – one of the most important factors in getting this number reasonably accurate is to understand the “highest and best use” for a property. The question of a property’s highest and best use is something all appraisers aim to address – and the issue is particularly relevant to appraisers ..."
        )
    );
    foreach(array_keys($search) as $num):
        $category = $search[$num]['cat'];
        $title = $search[$num]['title'];
        $excerpt = $search[$num]['excerpt'];
?>

    <div class="search-results-item">
        <a href="single.php" class="post-content">
            <div class="post-content-bg" style="background-image: url(https://picsum.photos/600/300?image=<?php echo rand(600, 1000)?>);"></div>
            <span class="post-category"><?php echo $category;?></span>
            <span class="h5 post-title"><?php echo $title;?></span>
            <p class="post-excerpt"><?php echo $excerpt;?></p>
        </a>
    </div>

<?php endforeach;?>
</div>
<!-- /Search Results -->