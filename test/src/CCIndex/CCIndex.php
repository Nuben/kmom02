<?php
/**
* Standard controller layout.
* 
* @package ChrisCore
*/
class CCIndex implements IController {

   /**
    * Implementing interface IController. All controllers must have an index action.
    */
   public function Index() {   
      global $cc;
      $cc->data['title'] = "The Index Controller";
      $cc->data['main'] = "<h1>Welcome to the index controller!</h1>";
   }

}