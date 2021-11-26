<!DOCTYPE html>
<html lang="fr">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

      <title>Mini Gestion Utilisateur</title>

      <style>
         .btn-sm {
            background-color: aqua;
         }
         .text-center {
            margin-top: 2%;
            margin-bottom: 2%;
         }
      </style>
   </head>

   <body>
      <section class="container">
         <div class="row">
            <div class="col">
               <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                  <div class="container-fluid">
                     <a
                        class="navbar-brand mb-0 h1"
                        href="MiniGestionUtilisateur.html"
                        >Projet</a
                     >
                     <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                     >
                        <span class="navbar-toggler-icon"></span>
                     </button>
                     <div
                        class="collapse navbar-collapse"
                        id="navbarSupportedContent"
                     >
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                           <li class="nav-item">
                              <a
                                 class="nav-link active"
                                 aria-current="page"
                                 href="#"
                                 >Mini Gestion Utilisateur</a
                              >
                           </li>
                        </ul>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
      </section>

      <h1 class="text-center">
         "Bienvenue sur le gestionnaire des utilisateurs"
      </h1>

      <section>
         <!-- Button trigger modal -->
         <div class="text-center">
            <button
               type="button"
               class="btn btn-primary"
               data-bs-toggle="modal"
               data-bs-target="#exampleModal"
            >
               Ajouter un utilisateur
            </button>
         </div>

         <!-- Modal -->
         <div
            class="modal fade"
            id="exampleModal"
            tabindex="-1"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
         >
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h6 class="modal-title" id="exampleModalLabel">
                      ajout d'utilisateur
                     </h6>
                     <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                     ></button>
                  </div>
                  <div class="modal-body">
                     <div class="row">
                        <div class="col">
                           <label for="exampleInputEmail1" class="form-label">
                           <h4 class="text-center">
                           Veuillez remplir le formulaire SVP !!!
                           </h4>

<?php

class Session {
    
    public static function set($key,$value){
        return $_SESSION[$key]=$value;
    }
    public static function get($key){
        if(isset($_SESSION[$key]))
        return $_SESSION[$key];
        else return false;
    }
    
}
 
  session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(Session::get("utilisateur")){
        $list=Session::get("utilisateur");
        $newList = array_merge_recursive($list,array(array(test_input($_POST["name"]),test_input($_POST["prenom"]),test_input($_POST["email"]))));
        Session:: set("utilisateur",$newList);
    }else{
        Session:: set("utilisateur", array(array(test_input($_POST["name"]),test_input($_POST["prenom"]),test_input($_POST["email"]))));
    }
    // $list=  [test_input($_POST["name"]),test_input($_POST["email"]),test_input($_POST["website"])];
    // $newList = array_merge_recursive($_SESSION["utilisateur"],$list->getAll());
//    array_push($_SESSION["utilisateur"],$list);
    // $_SESSION["utilisateur"] = $newList;
    // $_SESSION=$list;
//   $name = test_input($_POST["name"]);
//   $email = test_input($_POST["email"]);
//   $website = test_input($_POST["website"]);
 
}
   //fonction de validation de formulaire 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
//fin formulaire
//affichage
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  prenom: <input type="text" name="prenom">
  <br><br>
  email: <input type="email" name="email">
  <br><br>
  <input class="btn btn-primary" type="submit" name="ajouter" value="Submit">  
</form>
              
                  <div class="modal-footer">
                     <button
                     class="btn btn-primary"
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                     >
                        Fermer
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="container">
         <div class="row">
            <div class="col">
               <section class="table-responsive">
                  <table class="table table-bordered border-primary">
                     <thead>
                        <tr>
                           <th>Nom</th>
                           <th>Prenom</th>
                           <th>email</th>
                           <th>Supprimer</th>
                           <th>Modifier</th>
                        </tr>
                        
                     </thead>
                     <tbody>
                         
<?php 
if(Session::get("utilisateur")){
for($i = 0; $i < sizeof(Session::get("utilisateur")) ; $i = $i + 1){?>
<tr>
    <td><?php print_r(Session::get("utilisateur")[$i][0]) ?></td>
    <td><?php print_r(Session::get("utilisateur")[$i][1]) ?></td>
    <td><?php print_r(Session::get("utilisateur")[$i][2]) ?></td>
    <td><button type="submit" class="btn btn-primary">Supprimer</button></td>
    <td>
      <button type="submit" class="btn btn-primary">Modifier</button>
   </td>
</tr>
<?php }} ?>

                     </tbody>
                  </table>
               </section>
            </div>
         </div>
      </section>

      <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: Bootstrap Bundle with Popper -->


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   </body>
</html>

