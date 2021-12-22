<!-- <form action="{{url('/prescription')}}" method="post">
  <label for="fname">Prescription Date:</label>
  <input type="text" id="fname" name="prescription_date"><br><br>
  <label for="lname">Patient Name:</label>
  <input type="text" id="lname" name="patient_name"><br><br>
  <label for="lname">Patient Age:</label>
  <input type="text" id="lname" name="patient_age"><br><br>
  <label for="lname">Gender:</label>
  <input type="text" id="lname" name="gender"><br><br>
  <label for="lname">Diagnosis:</label>
  <input type="text" id="lname" name="diagonsis"><br><br>
  <label for="lname">Medicine:</label>
  <input type="text" id="lname" name="medicine"><br><br>
   <label for="lname">next_visit_date:</label>
  <input type="text" id="lname" name="next_visit_date"><br><br>
  <input type="submit" value="Submit">
 
</form> -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>
  <title></title>
  
</head>
<body>
 
<br>

<br>

<form method="post" action="{{url('/prescription')}}"><big><big>PRESCRIPTION :<br>
  <br>
  </big></big>
  <table width:="50%">
    <tbody>
       <tr>
        <td>Prescription date : <br>
        </td>
        <td><input name="prescription_date" type="text"><br>
        </td>
      </tr>
    <tr>
        <td>Patient Name : <br>
        </td>
        <td><input name="patient_name" type="text"><br>
        </td>
      </tr>
      <tr>
        <td>Patient Age : <br>
        </td>
        <td><input name="patient_age" type="text"><br>
        </td>
      </tr>
      <tr>
        <td>Gender : <br>
        </td>
        <td><input name="gender" type="text"><br>
        </td>
      </tr>
      <tr>
        <td>Medicine : <br>
        </td>
        <td><textarea cols="30" rows="3" name="medicine"></textarea><br>
        </td>
      </tr>
      <tr>
        <td>Diagnosis : <br>
        </td>
        <td><textarea cols="30" rows="3" name="diagonsis"></textarea><br>
        </td>
      </tr>
    <!--   <tr>
        <td>Dosage : <br>
        </td>
        <td>
    <input name="dose" type="checkbox"> Morning<br>
        <input name="dose" type="checkbox"> Afternoon<br>
        <input name="dose" type="checkbox"> Night<br>
        </td>
      </tr> -->
    <!--   <tr>
        <td>Diagnosis :<br>
        </td>
        <td><textarea cols="30" rows="3" name="diagnosis"></textarea><br>
        </td>
      </tr> -->
     <tr>
        <td>Next visit date : <br>
        </td>
        <td><input name="next_visit_date" type="text"><br>
        </td>
      </tr>
    </tbody>
  </table>
  <br>
  <br>
  <input name="submit" value="Generate Prescription" type="submit">&nbsp; &nbsp; <input name="reset" value="RESET" type="reset"> <big><big><br>
  </big></big></form>

</body>
</html>