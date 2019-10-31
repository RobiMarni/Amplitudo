<?php

function generateUrlQuery($params)
{
    return http_build_query($params);
}


function generateHref($page_name, $params)
{
    return 'href ="'. $page_name . '/?' . generateUrlQuery($params) . '"';
}

function formatGetParams()
{
    echo "<ul> ";
            
            foreach ($_GET as $element) 
            {
                echo "  <li> $element </li> ";
            }
    
           echo " </ul> ";
}

function validateIP($address)
{          
    //filtervalidateip??
    if(filter_var($address, FILTER_VALIDATE_IP))
    {
      //  Address 0.0.0.0. is a valid IP addres;
        echo "Address " . $address ." is a valid IP addres <br>";
        return true;
    }
    else {
        //  Address 0.0.0.0. is a false IP addres;  > 0-255
        echo "Address " . $address ." is a false IP addres <br>";
        return false;
    }
}