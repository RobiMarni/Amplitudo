<?php
include_once 'helpers.php';




$links = [ ['label' => 'page_one', 
            'page_name' => 'page_1.php',
            'param' => ['id' => 1,
                        
                        'brand' => 'Nike',
                        'name' => 'Sneackers' ]],
            ['label' => 'page_two',
             'page_name' => 'page_2.php',
             'param' => ['id' => 2,
                        
                         'brand' => 'Adidas',
                         'name' => 'Tracksuit' ]] 
];
 
?>

<html>
    <body>
         <ul>
            <li><a <?php echo generateHref($links[0]['page_name'], $links[0]['param']) ?> > Page 1 </a></li>
            <li><a <?php echo generateHref($links[1]['page_name'], $links[1]['param']) ?> > Page 2 </a></li>
         </ul>
    </body>

</html>