<?php


  function checkPermission($permissions){
    $userAccess = getMyPermission(auth()->user()->grade);
    foreach ($permissions as $key => $value) {
      if($value == $userAccess){
        return true;
      }
    }
    return false;
  }


  function getMyPermission($id)
  {
    switch ($id) {
      case 1:
        return 'student';
        break;
      case 2:
        return 'cesi';
        break;
      case 3:
        return 'bde';
        break;
      default:
        return 'user';
        break;
    }
  }


?>