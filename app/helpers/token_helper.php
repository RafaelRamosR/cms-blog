<?php
  /*
    Generate a pseudo token to avoid CSRF attacks. Functions used:

    - session_regenerate_id = Update the current session id with a newly generated one
    - bin2hex = Convert binary data into hexadecimal representation
    - random_bytes(32) = Generates cryptographically secure pseudo-random bytes - 32 is the size of the string
    - hash_hmac = Generate a keyed hash value using the HMAC method
    - session_id = Get and/or set the current session id
  */
  function generateToken()
  {
    session_regenerate_id(true);
    $key = bin2hex(random_bytes(32));
    $token = hash_hmac('sha256', session_id(), $key);
    return $token;
  }