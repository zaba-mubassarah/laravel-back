<form action="{{url('/prescription')}}" method="post">
  <label for="fname">Prescription Date:</label>
  <input type="text" id="fname" name="prescription_date"><br><br>
  <label for="lname">Patient Name:</label>
  <input type="text" id="lname" name="patient_name"><br><br>
  <label for="lname">Patient Age:</label>
  <input type="text" id="lname" name="patient_age"><br><br>
  <label for="lname">Gender:</label>
  <input type="text" id="lname" name="gender"><br><br>
  <label for="lname">Diagonosis:</label>
  <textarea id="w3review" name="diagnosis" rows="4" cols="50">
At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.
</textarea><br>
  <label for="lname">Medicine:</label>
  <textarea id="w3review" name="medicine" rows="4" cols="50">
At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.
</textarea><br>
   <label for="lname">Next Visit Date:</label>
  <input type="text" id="lname" name="next_visist_date"><br><br>
  <input type="submit" value="Submit">
  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
</form>