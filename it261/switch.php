<?php

if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today){
    case 'Monday':
        $colorDark = '#af0000';
        $color = '#ff0000';
        $title = "Monday";
        $star = 'Monday is Dubhe Day!';
        $pic = 'dubhe.jpg';
        $alt = 'Dubhe';
            $content = 'Alpha Ursae Majoris (Latinised from α Ursae Majoris, abbreviated Alpha UMa, α UMa), formally named Dubhe /ˈdʌbiː/, is, despite being designated "α" (alpha), the second-brightest object in the constellation of Ursa Major.Alpha Ursae Majoris forms part of the Big Dipper (also known as the Plough or the Great Bear), and is the northern of the pointers, the two stars of Ursa Major which point towards Polaris, the North Star.';
    break;
        
    case 'Tuesday':
        $colorDark = '#9b2a00';
        $color = '#ff5212';
        $title = "Tuesday";
        $star = 'Tuesday is Merak Day!';
        $pic = 'merak.jpg';
        $alt = 'Merak';
            $content = 'Beta Ursae Majoris (β Ursae Majoris, abbreviated Beta UMa, β UMa), formally named Merak /ˈmɪəræk/, is a star in the northern circumpolar constellation of Ursa Major.The apparent visual magnitude of this star is +2.37, which means it is readily visible to the naked eye. It is more familiar to northern hemisphere observers as one of the "pointer stars" in the Big Dipper, or the Plough (UK), which is a prominent asterism of seven stars that forms part of the larger constellation. Extending an imaginary straight line from this star through the nearby Alpha Ursae Majoris (Dubhe) extends to Polaris, the north star.';
    break;
        
    case 'Wednesday':
        $colorDark = 'rgb(152, 152, 0)';
        $color = '#e8e800';
        $title = "Wednesday";
        $star = 'Wednesday is Phecda Day!';
        $pic = 'phecda.jpg';
        $alt = 'Phecda';
            $content = 'Gamma Ursae Majoris (γ Ursae Majoris, abbreviated Gamma UMa, γ UMa), formally named Phecda /ˈfɛkdə/ is a star in the constellation of Ursa Major. Since 1943, the spectrum of this star has served as one of the stable anchor points by which other stars are classified. Based upon parallax measurements with the Hipparcos astrometry satellite, it is located at distance of around 83.2 light-years (25.5 parsecs) from the Sun.It is more familiar to most observers in the northern hemisphere as the lower-left star forming the bowl of the Big Dipper, together with Alpha Ursae Majoris (Dubhe, upper-right), Beta Ursae Majoris (Merak, lower-right) and Delta Ursae Majoris (Megrez, upper-left). Along with four other stars in this well-known asterism, Phecda forms a loose association of stars known as the Ursa Major moving group. Like the other stars in the group, it is a main sequence star, as the Sun is, although somewhat hotter, brighter and larger.Phecda is located in relatively close physical proximity to the prominent Mizar-Alcor star system. The two are separated by an estimated distance of 8.55 ly (2.62 pc); much closer than the two are from the Sun. The star Beta Ursae Majoris is separated from Gamma Ursae Majoris by 11.0 ly (3.4 pc).';
    break;
        
    case 'Thursday':
        $colorDark = '#004500';
        $color = '#00a700';
        $title = "Thursday";
        $star = 'Thursday is Megrez Day!';
        $pic = 'megrez.jpg';
        $alt = 'Megrez';
            $content = 'Delta Ursae Majoris (δ Ursae Majoris, abbreviated Delta UMa, δ UMa), formally named Megrez /ˈmiːɡrɛz/, is a star in the northern circumpolar constellation of Ursa Major. With an apparent magnitude of +3.3, it is the dimmest of the seven stars in the Big Dipper asterism. Parallax measurements yield a distance estimate of 80.5 light-years (24.7 parsecs) from the Sun.';
    break;
        
    case 'Friday':
        $colorDark = '#004b4b';
        $color = '#00aaaa';
        $title = "Friday";
        $star = 'Friday is Alioth Day!';
        $pic = 'alioth.jpg';
        $alt = 'Alioth';
            $content = 'Epsilon Ursae Majoris (Latinised from ε Ursae Majoris, abbreviated Epsilon UMa, ε UMa), officially named Alioth /ˈæliɒθ/, is, despite being designated "ε" (epsilon), the brightest star in the constellation of Ursa Major, and at magnitude 1.77 is the thirty-second brightest star in the sky.It is the star in the tail of the bear closest to its body, and thus the star in the handle of the Big Dipper (or Plough) closest to the bowl. It is also a member of the large and diffuse Ursa Major moving group. Historically, the star was frequently used in celestial navigation in the maritime trade, because it is listed as one of the 57 navigational stars.';
    break;
        
    case 'Saturday':
        $colorDark = '#00004e';
        $color = '#0000d1';
        $title = "Saturday";
        $star = 'Saturday is Mizar Day!';
        $pic = 'mizar.jpg';
        $alt = 'Mizar';
            $content = 'Mizar /ˈmaɪzɑːr/ is a second-magnitude star in the handle of the Big Dipper asterism in the constellation of Ursa Major. It has the Bayer designation ζ Ursae Majoris (Latinised as Zeta Ursae Majoris). It forms a well-known naked eye double star with the fainter star Alcor, and is itself a quadruple star system. The whole system lies about 83 light-years away from the Sun, as measured by the Hipparcos astrometry satellite, and is part of the Ursa Major Moving Group.';
    break;
        
    case 'Sunday':
        $colorDark = '#360036';
        $color = '#8e008e';
        $title = "Sunday";
        $star = 'Sunday is Alkaid Day!';
        $pic = 'alkaid.jpg';
        $alt = 'Alkaid';
            $content = 'Eta Ursae Majoris (Latinised from η Ursae Majoris, abbreviated Eta UMa, η UMa), formally named Alkaid /ælˈkeɪd/, is a star in the constellation of Ursa Major. It is the most eastern (leftmost) star in the Big Dipper (or Plough) asterism. However, unlike most stars of the Big Dipper, it is not a member of the Ursa Major moving group. With an apparent visual magnitude of +1.84, it is the third-brightest star in the constellation and one of the brightest stars in the night sky.';
    break;
}


include('includes/portal-config.php');
include('includes/header.php');

?>
        
<section>
 <h2><?php echo $star;  ?></h2>
            <img src="images/<?php echo $pic;   ?>" alt="<?php echo $alt;   ?>">
            <p><?php echo $content; ?></p>
        

</section>

         <aside>
             <h3>Big Dipper</h3>
             <img src="images/bigdipper.jpg" alt="bigdipper">
            <h2>Click below to find out the Big Dipper stars of the day for the week!</h2>
            <ul>
                <li><a href="switch.php?today=Monday">Monday</a></li>
                <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
                <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
                <li><a href="switch.php?today=Thursday">Thursday</a></li>
                <li><a href="switch.php?today=Friday">Friday</a></li>
                <li><a href="switch.php?today=Saturday">Saturday</a></li>
                <li><a href="switch.php?today=Sunday">Sunday</a></li>
            </ul>
        </aside>
    
 <?php
include('includes/fooder.php');
?>