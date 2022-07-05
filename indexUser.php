<?php
    include('header.php');
?>
<?php
    include("config.php");
    include("db.php");
    $query = "SELECT * FROM post";
    $posts = $db->query($query);
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="./css/FoodsDesign.css">
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
        <script>
            var div;
            var text;
            var inner;
        </script>
    </head>
    <body>
        <section id="Foods">
                <div class="text">
                    Foods which have already been defined : 
                </div>   
                <div class="text">
                        Iranian Food : 
                </div> 
                    <br>         
                <div class="food" id="d1">
                    <img src="./img/iraniFood.jpg" class="image">
                    
                    
                </div>
                <div class="text">
                        Kebab : 
                </div> 
                    <br>
                <div class="food" id="d2">
                    <img src="./img/kebabFood.jpg" class="image">
                </div>
                <div class="text">
                        Fast Food : 
                </div> 
                    <br>
                <div class="food" id="d3">
                    <img src="./img/fastFood.jpg" class="image">
                    
                    
                </div>
                <div class="text">
                        Salad : 
                </div> 
                <br>
                <div class="food" id="d4">
                    <img src="./img/salad.jpg" class="image">
                </div>
                
            <?php
                foreach($posts as $post){
                    $id = $post['id'];
                    $name = $post['name'];
                    $body = $post['body'];
                    $count = $post['count'];
                    $img = $post['image'];
                    $catId = $post['category_id'];
                    if($catId == '1'){
                        
                        echo "
                            <script>
                                div = document.getElementById('d1');
                                text = '<button class=\"item\"><img class=\"img\" src=\"./img/$img\" ><p class=\"name\">The Name is: $name </p><p  class=\"body\">Description: $body </p><p class=\"count\">count: $count</p></button>';
                                inner = div.innerHTML;
                                inner += text;
                                div.innerHTML = inner;
                            </script>
                            ";
                            continue;
                    }
                    if($catId == '2'){
                        echo "
                        
                        <script>
                            div = document.getElementById('d2');
                            text = '<button class=\"item\"><img class=\"img\" src=\"./img/$img\" ><p class=\"name\">The Name is: $name </p><p  class=\"body\">Description: $body </p><p class=\"count\">count: $count</p></button>';
                            inner = div.innerHTML;
                            inner += text;
                            div.innerHTML = inner;
                        </script>
                        ";
                        continue;
                    }
                    if($catId == '3'){
                        echo "
                        <script>
                            div = document.getElementById('d3');
                            text = '<button class=\"item\"><img class=\"img\" src=\"./img/$img\" ><p class=\"name\">The Name is: $name </p><p  class=\"body\">Description: $body </p><p class=\"count\">count: $count</p></button>';
                            inner = div.innerHTML;
                            inner += text;
                            div.innerHTML = inner;
                        </script>
                        ";
                        continue;
                    }
                    if($catId == '4'){
                        echo "
                        <script>
                            div = document.getElementById('d4');
                            text = '<button class=\"item\"><img class=\"img\" src=\"./img/$img\" ><p class=\"name\">The Name is: $name </p><p  class=\"body\">Description: $body </p><p class=\"count\">count: $count</p></button>';
                            inner = div.innerHTML;
                            inner += text;
                            div.innerHTML = inner;
                        </script>
                        ";
                        continue;
                    }
                    
                }
            ?>
            
            
        </section>
    </body>
    
</html>