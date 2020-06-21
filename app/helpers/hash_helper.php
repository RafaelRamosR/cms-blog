<?php

  function generate_hash($pass)
  {
    $hash = password_hash($pass, PASSWORD_DEFAULT, ['cost'=>12]);
    return $hash;
  }