<?php

// Imagine that in our "database", only the user with id 7 is an admin.
function isAdmin($userid)
{
  return $userid == 7;
}

// Imagine that in our "database", only the users with ids 1 and 4 exist.
function isStandardUser($userid)
{
  return $userid == 1 || $userid == 4;
}
