<nav>
    <ul>
        <li><a class="navButton <?php echo strpos($_SERVER['REQUEST_URI'], 'index.php') !== false ? 'active' : '' ?>"
                href="index.php" title="Go to the Home page">Home.</a></li>
        <li><a class="navButton <?php echo strpos($_SERVER['REQUEST_URI'], 'about.php') !== false ? 'active' : '' ?>"
                href="about.php" title="Learn more about us">About Us.</a></li>
        <li><a class="navButton <?php echo strpos($_SERVER['REQUEST_URI'], 'help.php') !== false ? 'active' : '' ?>"
                href="help.php" title="Get help to decide">Need Help?</a></li>
        <li><a class="navButton <?php echo strpos($_SERVER['REQUEST_URI'], 'support.php') !== false ? 'active' : '' ?>"
                href="support.php" title="Get support">Support.</a></li>
    </ul>
</nav>