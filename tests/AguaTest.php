<?php 
use PHPUnit\Framework\TestCase; 

require_once('Agua.php'); 

class AguaTest extends TestCase 
{  

    private $miAgua = null; 
    public function setUp(): void 
    
   
{ 
    $this->miAgua = new Agua(); 
} 

    public function testSolido(): void 
{ 

         foreach (range(-273, 0) as $temperatura) { 
         $estado = $this->miAgua->getEstado ($temperatura); 
         $this->assertSame('Sólido', $estado, "Temperatura $temperatura no es sólida"); 
        } 
   } 

   public function testLiquida(): void 
   { 
              foreach (range(1, 99) as $temperatura) { 
              $estado = $this->miAgua->getEstado ($temperatura); 
              $this->assertSame ('Líquido', $estado, "Temperatura $temperatur  a no es Líquido"); 
       
            }  
       } 
      
       public function testGaseoso(): void 
       { 
               foreach (range(100, 500) as $temperatura) { 
                $estado = $this->miAgua->getEstado ($temperatura); 
                $this->assertSame ('Gaseoso', $estado, "Temperatura $temperatur  a no es Gaseoso"); 
            } 
       } 
       
       public function testTipoFloat0Int(): void 
       { 
                $estado = $this->miAgua->getEstado ($temperatura); 
                $this->assertSame ('Gaseoso', $estado, "Temperatura $temperatur  a no es Gaseoso"); 
                } 
            
    }
   
