<?php

if (isset($_POST['submit'])) {
      
      if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['text'])) {
          
          if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['text'])) {
              
              $name = $_POST['name'];
              $email = $_POST['email'];
              $text = $_POST['text'];
  
              $insert  = $comment->insert($name, $email, $text);
          }

      }
}