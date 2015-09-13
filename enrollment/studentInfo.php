<?PHP
require_once 'classes/StudentValues.php';

$ProspectiveStudent = new Student();
$zip = $_GET['zip'];



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Lets Find a Teacher!</title>
<link type="text/css" rel="stylesheet" href="enrollmentStyles.css"/>

<script src='//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
<script src="js/incrementing.js"></script>

</head>

<body>

<p><h2>Lets Find a Teacher!</h2></p>

	<div class="InquiryPanels" id="NofStudents">
    	<p>How many students would you like to enroll?</p>
        
        <form method="post" action="">
        	<div class="numbers-row">
                <input type="text" name="nStudents" id="nStudents" value="1">
      		</div>
   </form>
        
        
    </div>
    
    <div class="InquiryPanels" id="QuestionsWindow">
        	<table>
            	<tr><td><strong><u>Questions</u></strong></td></tr>
                <tr><td>What is the student's age?</td></tr>
<?php if(!empty($_POST['age'])) {
	$ProspectiveStudent->age = $_POST['age'];
	echo "<tr><td>Has this student taken lessons before?</td></tr>"; 
}
?>

<?php if(isset($_POST['PriorLessons'])) {
	$ProspectiveStudent->PriorLessons = $_POST['PriorLessons'];
	
	if($ProspectiveStudent->PriorLessons == 'Yes')
	   echo "<tr><td>How many years of lessons has this student had?</td></tr>";
}
?>                

<?php if(!empty($_POST['LessonYears'])) {
	$ProspectiveStudent->LessonYears = $_POST['LessonYears'];
	echo "<tr><td>When was their last lesson?</td></tr>"; 
}
	if(!empty($_POST['FinalPreviousLesson'])) {
	$ProspectiveStudent->FinalPreviousLesson = $_POST['FinalPreviousLesson'];
	}
?>               
            </table>
    </div>

    <div class="InquiryPanels" id="InputWindow">
    	<form method="post" action="">
        	<table>
            	<tr><td><strong><u>Student #1</u></strong></td></tr>
                <tr><td><input type="number" name="age" 
					<?PHP echo "value=\"" . $ProspectiveStudent->age . "\""; ?>
                    /></td></tr>
	
                		<?PHP 
if(isset($ProspectiveStudent->age)) echo " <tr><td>
				<input type=\"radio\" name=\"PriorLessons\" value=\"Yes\"";
if(isset($ProspectiveStudent->PriorLessons) && 
		 $ProspectiveStudent->PriorLessons == 'Yes') echo " checked";
if(isset($ProspectiveStudent->age)) echo "/>Yes";
	
if(isset($ProspectiveStudent->age)) echo "
				<input type=\"radio\" name=\"PriorLessons\" value=\"No\"";
if(isset($ProspectiveStudent->PriorLessons) && 						
		 $ProspectiveStudent->PriorLessons == 'No') echo "checked"; 
if(isset($ProspectiveStudent->age)) echo "/>No </td></tr>";
	
if($ProspectiveStudent->PriorLessons == 'Yes')
	echo "<tr><td><input type=\"number\" name=\"LessonYears\"";
if(isset($ProspectiveStudent->LessonYears)) echo "value=\"" .
			$ProspectiveStudent->LessonYears . "\" ";
if($ProspectiveStudent->PriorLessons == 'Yes')
	echo " /></td></tr>";

if(isset($ProspectiveStudent->LessonYears))
	echo "<tr><td><input type=\"date\" name=\"FinalPreviousLesson\"";
if(isset($ProspectiveStudent->FinalPreviousLesson))
	echo "value\"" . $ProspectiveStudent->FinalPreviousLesson . "\"";
if(isset($ProspectiveStudent->LessonYears))
	echo " /></td></tr>";

						?>
                
    
                
                <tr><td><input type="submit" name="submit" value="submit" /></td></tr>
            </table>  
        </form>
    </div>
    
    <div class="ResultPanels">
    	<strong>Results</strong><br />
        We found 1 teacher available for new lessons in <?php echo $zip; ?>.
        <div id="TeacherResultCard">   
			<div id="TeacherResultPhoto"></div>

    		<h2>Ashlee Young</h2>
            <table class="credentials">
            <tr><td>Master of Music</td></tr>
            <tr><td>USC Thornton School of Music</td></tr>
            <tr><td>8 Years Teaching Experience</td></tr>
            <tr><td><img id="star" src="images/star.png"/> <span>5</span></td></tr>
            </table>
            <button>Set Up A Test Lesson</button>
        </div>
    
    </div>

	<p><a id="HomeBtn" href="../index.php">Back To Home</a></p>
    
    
</body>
</html>