<form method="post" action="">
  Full Name	: <input type="text" name="full_name" value="Joshua Arnold Tradanarova"><br>
  Age		: <input type="text" name="age" value=21><br>
  <input type="submit" name="submit_form" value="Submit">
</form>

<?php
if(isset($_POST['submit_form'])) {
          $JSONBiodata = array(
		  'full_name' => 'Joshua Arnold Tradanarova', 
		  'age' => 21, 
		  'address' => 'Jalan Banten, Malang', 
		  'hobby' => array('Menulis', 'Menggambar', 'Memotret'), 
		  'is_married' => false, 
		  'list_school' => [ 
		    ['school_name' => 'Universitas Brawijaya Malang', 'Major' => 'S1 Teknologi Informasi', 'year_in' => '2016', 'year_out' => null],
			['school_name' => 'SMA Negeri 55 Jakarta', 'Major' => 'MIA (Matematika & Ilmu Alam)', 'year_in' => '2013', 'year_out' => '2016'],
			['school_name' => 'SMP Asisi Jakarta', 'Major' => null, 'year_in' => '2010', 'year_out' => '2013']
			],
		  'skills' => [
		    ['skill_name' => 'CorelDraw', 'level_skill' => 'Beginner'], 
			['skill_name' => 'Database (DB2/SQL)', 'level_skill' => 'Beginner'], 
			['skill_name' => 'HTML & CSS', 'level_skill' => 'Beginner'],
			['skill_name' => 'PHP', 'level_skill' => 'Beginner'],
			['skill_name' => 'Audacity', 'level_skill' => 'Beginner']
			],
		  'interest_in_coding' => true
		  );
      
	  $Bio = json_encode($JSONBiodata);
	  echo $Bio;
}      
	?>


