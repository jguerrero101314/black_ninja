<?php
class managerUsersController
{
  #GUARDAR USUARIO
  #------------------------------------------------------------
  static  public  function saveUsersControllers($data)
  {
    $responseInsert = "";
    $dataController = array('identitify' => $data['identitify'], 'first_name' => $data['first_name'], 'photo' => $data['photo'], 'level1' => 'ok');
    $responseSelect = managerUsersModels::SelectUsersModels($dataController);
    if (!$responseSelect) {
      $responseInsert  = managerUsersModels::saveUsersModels($dataController);
    }

    if ($responseSelect || $responseInsert == "ok") {
      $responseSelect = managerUsersModels::SelectUsersModels($dataController);
      session_start();
      $_SESSION['validate'] = true;
      $_SESSION["first_name"] = $responseSelect["first_name"];
      $_SESSION["photo"] = $responseSelect["photo"];
      $_SESSION["level1"] = $responseSelect["level1"];
      $_SESSION["level2"] = $responseSelect["level2"];
      $_SESSION["level3"] = $responseSelect["level3"];
      $_SESSION["points_level1"] = $responseSelect["points_level1"];
      $_SESSION["points_level2"] = $responseSelect["points_level2"];
      $_SESSION["points_level3"] = $responseSelect["points_level3"];

      echo 'ok';
    }
  }
}
