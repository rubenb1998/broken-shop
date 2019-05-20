<?PHP
if(!empty($_FILES['uploaded_file']))
{
    $path = "uploads/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
        echo "The file ".  basename( $_FILES['uploaded_file']['name']).
            "Geef mij een injectie";
    } else{
        echo "Niet goed genoeg";
    }
}
?>