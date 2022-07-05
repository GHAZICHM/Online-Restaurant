<?php
    $n = $_POST['n'];
    include("config.php");
    include("db.php");
    $query = "SELECT * FROM post";
    $posts = $db->query($query);
    foreach($posts as $post){
        if($post['name']==$n){
            $id = $post['id'];
            $name = $post['name'];
            $body = $post['body'];
            $count = $post['count'];
            $img = $post['image'];
            $catId = $post['category_id'];
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/button.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <form action="indexAdmin.php">
      <button type="submit">Back</button>
    </form>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Change Food</p>
      
                      <form action="sub.php" method="post" class="mx-1 mx-md-4" enctype="multipart/form-data">
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example1c">Food Name</label>
                            <input type="text" name="Name" id="form3Example1c" class="form-control" value="Disable to change"/>
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example3c">Description</label>
                            <input type="text" name="body" id="form3Example3c" class="form-control" value=<?=$body?>/>
                            
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example4c">count</label>
                            <input type="text" name="count" id="form3Example4c" class="form-control" value=<?=$count?>/>
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example4cd">Category Id <br>(IranianFood: 1 -Kebab: 2 -FastFood: 3 -Salad: 4)</label>
                            <input type="text" name="categoryId" id="form3Example4cd" class="form-control" value=<?=$catId?>/>
                          </div>
                        </div>
                        <div class="file-upload-wrapper">
                            <input type="file" name="image" id="input-file-now" class="file-upload" value=<?=$img?>/>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button type="submit" class="btn btn-primary btn-lg">Define</button>
                        </div>
                        
                      </form>
      
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
      
                      <img src="./img/defineF.PNG"
                        class="img-fluid" alt="Sample image">
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>