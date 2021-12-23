
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>
  <title></title>
  
</head>
<body>
 
<br>

<br>

<form method="post" action="{{url('/prescription')}}"><big><big>PRESCRIPTION Edit:<button><a href="/prescription" style="padding:10px;">Back to List</a></button>
  </form>
  <form method="post" action="{{ route('prescription.update', ($data->id)) }}">
<br>
  <br>
  </big></big>
  <table width:="50%">
    <tbody>
       <tr>
        <td>Prescription date : <br>
        </td>
        <td><input name="prescription_date" type="text" value="{{ $data->prescription_date }}"><br>
        </td>
      </tr>
    <tr>
        <td>Patient Name : <br>
        </td>
        <td><input name="patient_name" type="text" value="{{ $data->patient_name }}"><br>
        </td>
      </tr>
      <tr>
        <td>Patient Age : <br>
        </td>
        <td><input name="patient_age" type="text" value="{{ $data->patient_age }}"><br>
        </td>
      </tr>
      <tr>
        <td>Gender : <br>
        </td>
        <td><input name="gender" type="text" value="{{ $data->gender }}"><br>
        </td>
      </tr>
      <tr>
        <td>Medicine : <br>
        </td>
        <td><textarea cols="30" rows="3" name="medicine" value="">{{ $data->medicine }}</textarea><br>
        </td>
      </tr>
      <tr>
        <td>Diagnosis : <br>
        </td>
        <td><textarea cols="30" rows="3" name="diagonsis" value="">{{ $data->diagonsis }}</textarea><br>
        </td>
      </tr>
   
     <tr>
        <td>Next visit date : <br>
        </td>
        <td><input name="next_visit_date" type="text" value="{{$data->next_visit_date}}"><br>
        </td>
      </tr>
    </tbody>
  </table>
  <br>
  <br>
        {{ method_field("PUT") }}
        <button class="btn btn-danger btn-xs pull-left" type="submit"> Update</button>
      </form>

</body>
</html>