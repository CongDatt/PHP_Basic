<?php

//can be called directly - without creating an instance of the class first.

  class greeting {
    public static function welcome() {
      echo "Hello World!";
    }
  }
  
  class SomeOtherClass {
    public function message() {
      greeting::welcome(); // must use ::
    }
  }

?>