<?php

// connecting to database
$conn = mysqli_connect("sql109.liveblog365.com", "lblog_34438133", "123456789", "lblog_34438133_bot") or die("Database Error");
// getting user message through ajax
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);
//log creation   
extract($_REQUEST);
    $file=fopen("log.txt","a");
   
    fwrite($file,"Query asked by user :");
    fwrite($file, $getMesg ."\n");
    
//checking user query to database query
$check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%'";
$run_query = mysqli_query($conn, $check_data) or die("Error");

// if user query matched to database query we'll show the reply otherwise it go to else statement
if(mysqli_num_rows($run_query) > 0){
    //fetching reply from the database according to the user query
    $fetch_data = mysqli_fetch_assoc($run_query);
    //storing reply to a varible which we'll send to ajax
    $replay = $fetch_data['replies'];
    echo $replay;
    fwrite($file,"Reply of bot :");
    fwrite($file, $replay ."\n");
}else{
    echo "Sorry can't be able to understand you!";
    fwrite($file,"Reply of bot : ");
    fwrite($file,"Sorry can't be able to understand you!"."\n");
}
   
?>