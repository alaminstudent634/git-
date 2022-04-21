<?php

// Question 02:

// Let’s make a website which only contains our teams section.



$all_team = [
    [
        'name' => "Alamin", 
        'e-mail' => "alaminstudent634@gmail.com",
        'title' => "Web Developer",
        'description' =>  "Lorem ipsum dolor sit amet consectetur adipisicing elit.amet consecteturamet consecteturamet Laboriosam voluptatum",
        'image' => "https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"

    ],
  [
        'name' => "Salman", 
        'e-mail' => "Salman@gmail.com",
        'title' => "Graphic Designer",
        'description' =>  "Lorem ipsum dolor sit amet consectetur adipisicing elit.amet consecteturamet consecteturamet Laboriosam voluptatum",
        'image' => "https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" 
    ],
    [
        'name' => "Sojib", 
        'e-mail' => "sojib@gmail.com",
        'title' => "Content Writer",
        'description' =>  "Lorem ipsum dolor sit amet consectetur adipisicing elit.amet consecteturamet consecteturamet Laboriosam voluptatum",
        'image' => "https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
    ],
]



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	
<div class="container">
<h1 class="team">Team Member</h1>
  <div class="team">

<?php foreach($all_team as $team){ ?>

    <div class="member">
      <img src=<?php echo $team["image"];?>>
      <h3><?php echo $team["name"]; ?></h3>
      <span><?php echo $team["e-mail"]; ?></span>
      <h2><?php echo $team["title"]; ?></h2>
      <p><?php echo $team["description"]; ?></p>
      
    
      </div>
<?php } ?>
  </div>
</div>






<style>
 

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-decoration: none;
  font-family: "Poppins";
}

body {
  background: #f4f4f4;
}

.container {
  margin-top: 50px;
}

 img{
   border-radius: 50%;
 }
.container .team {
  width: auto;
  display: flex;
  justify-content: center;
  text-align: center;
  flex-wrap: wrap;
}

.container .team .member {
  width: 325px;
  margin: 10px;
  background: #fff;
  border-radius: 6px;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.07);
  padding: 25px;
}

.container .team .member img {
  width: 80px;
}

.container .team .member h3 {
  color: #444;
}

.container .team .member span {
  font-size: 12px;
  color: #999;
}

.container .team .member p {
  margin: 15px 0;
  font-weight: 400;
  color: #999;
  font-size: 15px;
  text-align: justify;
}
 

.container .team .member .btn a:hover {
  background: #5a36dd;
  color: #fff;
} 
</style>
</body>
</html>