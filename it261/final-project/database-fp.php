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
    <h2>Learn more about Solar System!</h2>
    <?php
$sql = 'SELECT * FROM SolarSystem';

$iConn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_assoc($result)) {
    echo '<img src="images/star1'.$row['StarID'].'.jpg" alt="'.$row['Name'].'">';
    echo '<ul>';
    echo '<li>Distance From Sun: '.$row['FromSun'].'</li>';
    echo '<li>Length Of Year: '.$row['LengthYear'].'</li>';
    echo '<li class="bold">For more information about: <a href="database-view-fp.php?id= '.$row['StarID'].' "> '.$row['Name'].' </a></li>';
    echo '</ul>';
}
    
} else {
    
    echo 'OHHHHH!';
    
}

@mysqli_free_result($result);

@mysqli_close($iConn);
?>
</main>
<aside>
<h3>Solar System</h3>
    <p>The Solar Systm is the gravitationally bound system of the Sun and the objects that orbit it, either directly or indirectly. Of the objects that orbit the Sun directly, the largest are the eight planets, with the remainder being smaller objects, the dwarf planets and small Solar System bodies. Of the objects that orbit the Sun indirectly—the moons—two are larger than the smallest planet, Mercury.</p>
    <br>
    <p>The Solar System formed 4.6 billion years ago from the gravitational collapse of a giant interstellar molecular cloud. The vast majority of the system's mass is in the Sun, with the majority of the remaining mass contained in Jupiter. The four smaller inner planets, Mercury, Venus, Earth and Mars, are terrestrial planets, being primarily composed of rock and metal. The four outer planets are giant planets, being substantially more massive than the terrestrials. The two largest planets, Jupiter and Saturn, are gas giants, being composed mainly of hydrogen and helium; the two outermost planets, Uranus and Neptune, are ice giants, being composed mostly of substances with relatively high melting points compared with hydrogen and helium, called volatiles, such as water, ammonia and methane. All eight planets have almost circular orbits that lie within a nearly flat disc called the ecliptic.</p>
    <br>
    <p>The Solar System also contains smaller objects. The asteroid belt, which lies between the orbits of Mars and Jupiter, mostly contains objects composed, like the terrestrial planets, of rock and metal. Beyond Neptune's orbit lie the Kuiper belt and scattered disc, which are populations of trans-Neptunian objects composed mostly of ices, and beyond them a newly discovered population of sednoids. Within these populations, some objects are large enough to have rounded under their own gravity, though there is considerable debate as to how many there will prove to be. Such objects are categorized as dwarf planets. The only certain dwarf planet is Pluto, with another trans-Neptunian object, Eris, expected to be, and the asteroid Ceres at least close to being a dwarf planet. In addition to these two regions, various other small-body populations, including comets, centaurs and interplanetary dust clouds, freely travel between regions. Six of the planets, the six largest possible dwarf planets, and many of the smaller bodies are orbited by natural satellites, usually termed "moons" after the Moon. Each of the outer planets is encircled by planetary rings of dust and other small objects.</p>
    <br>
    <p>The solar wind, a stream of charged particles flowing outwards from the Sun, creates a bubble-like region in the interstellar medium known as the heliosphere. The heliopause is the point at which pressure from the solar wind is equal to the opposing pressure of the interstellar medium; it extends out to the edge of the scattered disc. The Oort cloud, which is thought to be the source for long-period comets, may also exist at a distance roughly a thousand times further than the heliosphere. The Solar System is located in the Orion Arm, 26,000 light-years from the center of the Milky Way galaxy.</p>
    <br>
</aside>
<?php
include('includes/footer-fp.php');
?>