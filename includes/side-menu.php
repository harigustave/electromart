<div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i>Browse By Category</div>        
    <nav class="yamm megamenu-horizontal" role="navigation">
  
<ul class="nav">
    <li class="dropdown menu-item">
        <?php
        // Map each category name to its respective Font Awesome icon class
        $iconMap = [
            "Laptops"     => "fa-laptop",
            "Smart phones" => "fa-mobile",
            "Smart Watches" => "fa-clock-o",   // not a standard FA icon, use alternative
            "Smart Lights"     => "fa-lightbulb-o",
            "Smart Gadgets"      => "fa-gamepad",
            "PC Screens"    => "fa-desktop"
        ];

        // Fetch categories from database
        $sql = mysqli_query($con, "SELECT id, categoryName FROM category");
        while ($row = mysqli_fetch_array($sql)) {
            $category = $row['categoryName'];

            // Use mapped icon or a default one if not found
            $iconClass = isset($iconMap[$category]) ? $iconMap[$category] : "fa-box";
        ?>
            <a href="category.php?cid=<?php echo $row['id']; ?>" class="dropdown-toggle">
                <i class="icon fa <?php echo $iconClass; ?> fa-fw"></i>
                <?php echo $category; ?>
            </a>
        <?php } ?>
    </li>
</ul>

    </nav>
</div>