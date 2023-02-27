
<?php
  
 class Person{
  public $name;
  public $email;

  public function __construct($personname, $personemail)
  {
    $this->name = $personname;
    $this->email = $personemail;
  }

  public function setName($name){

      $this->name = $name;
 
  }

  public function setEmail($email){
     $this->email = $email;
  }

  public function getName(){
    echo "Your name is: {$this->name}<br>";
  }

  public function getEmail(){
    echo "Your email is: {$this->email}<br>";
  }
 } 

$personOBJ = new Person('Forhad', 'forhad@gmail.com');
$personOBJ->getName();
$personOBJ->getEmail();

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Retrieve the user's name and email from the form
  $name = $_POST['name'];
  $email = $_POST['email'];

  $personForm = new Person($name,  $email);

  // Display the name and email properties on the webpage
  $personForm->getName();
  $personForm->getEmail();

}else{
  $name = '';
  $email = '';
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Person Data</title>
</head>
<body>

<h1>Person Form</h1>


<form action="" method="POST">
  <label for="fname">Name:</label><br>
  <input type="text" id="fname" name="name" value="<?php echo $name; ?>" required><br>
  <label for="lname">Email:</label><br>
  <input type="email" id="email" name="email" value="<?php echo $email; ?>" required><br><br>
  <input type="submit" name="submit" value="Submit">
</form> 


</body>
</html>
