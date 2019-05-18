<?php $page = $_GET["section"] ?>
<ul class="tabs-menu limiter">
    <li class="<?php echo ($page == 'one')? 'active' : '' ?>"><h2><a href="page-medien.php?section=one">MEDIENBEREICH</a></h2></li>
    <li class="<?php echo ($page == 'two')? 'active' : '' ?>"><h2><a href="page-medienmitteilungen.php?section=two">MEDIENMITTEILUNGEN</a></h2></li>
    <li class="<?php echo ($page == 'three')? 'active' : '' ?>"><h2><a href="page-bilddatenbank.php?section=three">BILDDATENBANK</a></h2></li>
</ul>