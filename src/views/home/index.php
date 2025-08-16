
<h2 class="text-center">This is the Home Page, Welome Guest</h2>
<?php         
echo "<p>Widok home!</p>";
//var_dump($nav->menu_id);
foreach($nav as $n) {
    echo "'". $n['menu_id'] ." ". $n['title'] ."'";
}
