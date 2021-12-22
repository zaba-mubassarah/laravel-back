
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
  <form method="post" action="{{ route('prescription.destroy', ($data->id)) }}">

        {{ method_field("PUT") }}
        <button class="btn btn-danger btn-xs pull-left"> Update</button>
      </form>

</body>
</html>