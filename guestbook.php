<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/functions.php'; ?>


<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" >
    <label for="name"> please enter your name!</label>
    <input type="text" id="name" name="name" placeholder="Your name.." autocomplete="given-name">
    <label for="age"> please enter your age!</label>
    <input type="text" id="age" name="age" placeholder="How old are you?">
    <label for="pet"> Favourite pet name? </label>
    <input type="text" id="pet" name="pet">
    <label for="mothers_maiden_name"> Please enter your mothers maiden name</label>
    <input type="text" id="mothers_maiden_name" name="mothers_maiden_name"> 
    <label for ="name_of_school_you_went_to"> Please tell us the name of the school you went to!</label>
    <input type="text" id="name_of_school_you_went_to" name="name_of_school_you_went_to"/>

    <input type="submit" value="Submit">

<?php 

$name = $age = $favourite_pet_name = $mothers_maiden_name = $name_of_school_you_went_to = "";

if ($_SERVER["REQUEST_METHOD"]=== "POST"){
$name = sanitize_input($_POST['name']);
$age = sanitize_input ($_POST['age']);
$favourite_pet_name = sanitize_input ($_POST['pet']);
$mothers_maiden_name = sanitize_input ($_POST['mothers_maiden_name']);
$name_of_school_you_went_to = sanitize_input ($_POST['name_of_school_you_went_to']);

$conn = f1_get_db_connection();
$sql = "INSERT INTO guestbook (name, age, favourite_pet_name, mothers_maiden_name, name_of_school_you_went_to) VALUES (?,?,?,?,?)";
$stmt= $conn->prepare($sql);
$result = $stmt->execute([$name, $age, $favourite_pet_name, $mothers_maiden_name, $name_of_school_you_went_to]);

var_dump($result);
if($result){
    echo "Thank you for contacting us we have recieved your query and will 
    respond within the next 2 buisiness days";
}  else {
    echo "Error: " . $stmt->errorInfo()[2]; // Display error message
}


}

?>
