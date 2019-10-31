<?php
include_once 'helpers.php';

$links = [ ['label' => 'page_one', 
            'page_name' => 'page_1.php',
            'param' => ['id' => 1,
                        'name' => 'Marko',
                        'lastname' => 'Markovic' ]],

            ['label' => 'page_two',
             'page_name' => 'page_2.php',
             'param' => ['id' => 1,
                         'name' => 'Janko',
                         'lastname' => 'Jankovic' ]] 
];
 
?>

<html>
    <body>

         <ol>
            <li><a <?php echo generateHref($links[0]['page_name'], $links[0]['param']) ?> >Page</a></li>
            <li><a <?php echo generateHref($links[1]['page_name'], $links[1]['param']) ?> >Page</a></li>
         </ol>
         
    </body>

</html>