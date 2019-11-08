<?php

namespace Domaci_3;

use Domaci_3\MenuItem;

require_once 'Modeli/MenuItem.php';

class Menu implements Renderable 
{
    private $items;
    private $page_1;
    private $page_2;
    private $links;

   public function Niz() 
    { 
       $links = [ 
                  ['label' => 'page_one',  
                  'page_name' => 'page_1.php', 
                  'param' => ['id' => 1, 
                  'name' => 'Marko', 
                  'lastname' => 'Markovic' ]],

                  ['label' => 'page_two',    'page_name' => 'page_2.php', 
                  'param'  => ['id' => 2, 'name' => 'Janko',    'lastname' => 'Jankovic' ]],

                  ['label' => 'homepage',
                  'page_name' => 'homepage.php', 
                  'param' => ['id' => 3, 'name' => 'Petar',    'lastname' => 'Petrovic' ]] 
       ];
    return $links;

}   


    public function __construct()
    {
      $this->links = $this->Niz();
      $this->page_1 =    new MenuItem($this->links[0]['label'], $this->links[0]['page_name'], $this->links[0]['params']);
      $this->page_2 =    new MenuItem($this->links[1]['label'], $this->links[1]['page_name'], $this->links[1]['params']);
      $this->homepage =  new MenuItem($this->links[2]['label'], $this->links[2]['page_name'], $this->links[2]['params']);
     
     
       $this->items = [$this->page_1, $this->page_2, $this->homepage];
}

public function render()
{
    echo " <ul> ";
        foreach($this->items as $item)
        {
           echo "<li>" . $item->render() . "</li>";
        }
    echo " </ul>";


}
}