<?php

class Agua
{  
    

    function getEstado (float $temperatura): string
    {
        
        if ($temperatura <= 0) return 'Sólido'; 
    }
}  