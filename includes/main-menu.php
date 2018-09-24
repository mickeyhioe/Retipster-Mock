<!-- Main Menu -->
<nav class="main-menu">
    <ul class="menu">
        <li <?php if($page == 'Articles'){ echo 'class="active"'; }?>><a href="articles.php">Articles</a></li>
        <li <?php if($page == 'Podcast'){ echo 'class="active"'; }?>><a href="podcast.php">Podcast</a></li>
        <li <?php if($page == 'Resources'){ echo 'class="active"'; }?>><a href="resources.php">Resources</a></li>
        <li <?php if($page == 'Store'){ echo 'class="active"'; }?>><a href="store.php">Store</a></li>
        <li <?php if($page == 'About'){ echo 'class="active"'; }?>><a href="about.php">About</a></li>
        <li <?php if($page == 'Contact'){ echo 'class="active"'; }?>><a href="contact.php">Contact</a></li>
    </ul>
</nav>
<!-- /Main Menu -->