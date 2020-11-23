   <footer>

        <ul>
        <li>Copyright &copy; <?php   
            $startDate = 2020;
            $currentDate = date('Y');
            if($starDate == $currentDate) {
                echo $currentDate;     
            }  else {
                echo ' '.$starDate.'-'.$currentDate.'';
            }
            
            
            ?></li>
        <li>All Rights Reserved</li>
        <li><a href="">Web Design by Hongbin</a></li>
        <li><a href="https://validator.w3.org/check?uri=referer">HTML</a></li>
        <li><a href="https://jigsaw.w3.org/css-validator/check?uri=referer">CSS</a></li>
        </ul>
    
    </footer>

    </div>
</body>

</html>