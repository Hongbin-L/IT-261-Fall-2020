<?php
session_start();

if(!isset($_SESSION['UserName'])) {
    $_SESSION['mag'] = 'you must log in first';
    header('Location: login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['UserName']);
    header('Location: login.php');
}
include('includes/config-fp.php');
include('includes/header-fp.php');

?>
<?php

if(isset($_SESSION['success'])) :?>
<div class="error success">
<h3>
    <?php
    echo $_SESSION['success'];
    unset ($_SESSION['success']);
    ?>
    </h3>
</div>
<?php endif ?>

<div class="error success">
<?php
    if(isset($_SESSION['UserName'])) :?>
    <h3>Welcom 
<?php echo $_SESSION['UserName'] ;  ?>
</h3>
<br>
<p><a href="index.php?logout='1' ">Log out!</a></p>
</div>
<?php endif  ?>
    <div id="wrapper">
<main>
    <section>
     <h2 class="pageID">Galaxy</h2>       
    <figure>
        <a href="images/galaxy.jpg" >
        <img src="images/galaxy.jpg"  class="galaxy" alt="Galaxy" /></a>
        </figure>
    <p> A galaxy is a gravitationally bound system of stars, stellar remnants, interstellar gas, dust, and dark matter. The word galaxy is derived from the Greek galaxias (γαλαξίας), literally "milky", a reference to the Milky Way. Galaxies range in size from dwarfs with just a few hundred million (108) stars to giants with one hundred trillion (1014) stars, each orbiting its galaxy's center of mass.</p>
    <br>
    <p> Galaxies are categorized according to their visual morphology as elliptical, spiral, or irregular. Many galaxies are thought to have supermassive black holes at their centers. The Milky Way's central black hole, known as Sagittarius A*, has a mass four million times greater than the Sun. As of March 2016, GN-z11 is the oldest and most distant observed galaxy with a comoving distance of 32 billion light-years from Earth, and observed as it existed just 400 million years after the Big Bang.</p>
    <br>
    <p> Research released in 2016 revised the number of galaxies in the observable universe from a previous estimate of 200 billion (2×1011) to a suggested two trillion (2×1012) or more and, overall, as many as an estimated 1×1024 stars (more stars than all the grains of sand on planet Earth). Most of the galaxies are 1,000 to 100,000 parsecs in diameter (approximately 3,000 to 300,000 light years) and separated by distances on the order of millions of parsecs (or megaparsecs). For comparison, the Milky Way has a diameter of at least 30,000 parsecs (100,000 ly) and is separated from the Andromeda Galaxy, its nearest large neighbor, by 780,000 parsecs (2.5 million ly.)</p>
    <br>
    <p> The space between galaxies is filled with a tenuous gas (the intergalactic medium) having an average density of less than one atom per cubic meter. The majority of galaxies are gravitationally organized into groups, clusters, and superclusters. The Milky Way is part of the Local Group, which is dominated by it and the Andromeda Galaxy and is part of the Virgo Supercluster. At the largest scale, these associations are generally arranged into sheets and filaments surrounded by immense voids. Both the Local Group and the Virgo Supercluster are contained in a much larger cosmic structure named Laniakea.</p>
        </section>
        </main>
        <aside>
        <h3>about me</h3>
        <p>I like the science of the unknown especially beyond earth, the center of the earth and ocean. The earth is too small in the universe, so I am curious about the universe and galaxy. The center of the earth is also a place that humans have not yet to reach. The oceans cover 71% of the earth. There are many unknown creatures that humans have not yet to discover, and most of them live in the deep sea. So my website will be about unknown sciense.</p>
        <?php
        echo randImages($galaxy);
            ?>
        </aside>
        
<?php
include('includes/footer-fp.php');
?>