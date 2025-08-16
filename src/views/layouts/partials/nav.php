<ul class="nav flex-column">
<?php foreach($nav as $n): { ?>
    <li class="nav-item">
   <?php  echo "<a class='nav-link active' href=".$n['href']."> ".$n['title']."</a>"; ?>
    </li>
   <?php } endforeach; ?>
</ul>