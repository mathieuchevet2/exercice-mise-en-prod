<?php




class VerifForm
{
    public function testInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    
    public function testFormLettre($valPOST)
    {
    
      if (empty($valPOST)) 
      {
         $erreur = "Champ requis";
         return $erreur;
      }
      else 
      {
         $valTest = $this->testInput($valPOST);
         
         if (!preg_match("/^[a-zA-Z ]{3,90}$/",$valTest)) 
         {
          $erreur = "En lettres uniquement, 3 a 90 caracteres";
          return $erreur;
         }
         
         
        
      }
       
    }
    
    public function testFormMail($valPOST)
    {
    
      if (empty($valPOST)) 
      {
         $erreur = "Champ requis";
         return $erreur;
      }
      else 
      {
         $valTest = $this->testInput($valPOST);
         
         if (!preg_match("/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/",$valTest)) 
         {
          $erreur = "Ce n'est pas une addresse mail valide";
          return $erreur;
         }
         
         
        
      }
       
    }
    
    public function testFormPass($valPOST)
    {
    
      if (empty($valPOST)) 
      {
         $erreur = "Champ requis";
         return $erreur;
      }
      else 
      {
         $valTest = $this->testInput($valPOST);
         
         if (!preg_match("/^[ -~]{6,20}$/",$valTest)) 
         {
          $erreur = "Ce n'est pas un mot de pass valide";
          return $erreur;
         }
         
         
        
      }
       
    }
    
}
