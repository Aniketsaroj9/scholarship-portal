<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
   .button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: red;
  color: white;
}
.form{
  background-color: antiquewhite;
}

</style>
</head>
<body>
    
<button  class="button button2" onclick="location.href='home.php'">Home</button>

    <form action="regis_procc.php" method="post" >
        <table  class ="form" cellspacing="0"cellpadding="3">
            <caption><h3 text_align="center">REGISTRATION FORM</h3></caption>
            
                <tr>
                    <td>FIRST NAME:</td>
                    <td>
                        <input type="text"name="name">
                    </td>
                    <tr>
                        <td>MIDDLE NAME:</td>
                    <td>
                        <input type="text"name="mid">
                    </td>
                    </tr>
                    <tr>
                        <td>LAST NAME:</td>
                    <td>
                        <input type="text"name="last">
                    </td>
                    </tr>
                </tr>
                <tr>
                    <td>EMAIL:</td>
                        <td>
                            <input type="email"name="email">
                        </td>
                </tr>
                <tr>
                    <td>MOBILE NO.:</td>
                    <td>
                        <input type="number"name="mobile_number">
                    </td>
                </tr>
                <tr>
                    <td>COUNTRY:</td>
                     <td>
                        <input type="radio"value="India"name="country">INDIA
                        <input type="radio"value="Others"name="country">OTHERS
                     </td>
                </tr>
                <tr>
                    <td>CASTE:</td>
                    <td>
                        <input type="radio"value="OPEN"name="caste">GENERAL
                        <input type="radio"value="OBC"name="caste">OBC
                        <input type="radio"value="SC"name="caste">SC
                        <input type="radio"value="ST"name="caste">ST
                    </td>
                </tr>
                <tr>
                    <td>QUALIFICATION:</td>
                    <td>
                        <input type="radio"value="post_graduation"name="graduation">post_graduation
                        <input type="radio"value="under_graduation"name="graduation">under_graduation
                        <input type="radio"value="school"name="graduation">school
                        </td>
                </tr>
                <tr>
                    <td>CURRENT STATUS:</td>
                    <td>
                        <input type="radio"value="10_below"name="qualification">10th_below
                        <input type="radio"value="10th"name="qualification">10th
                        <input type="radio"value="12th"name="qualification">12th
                        <input type="radio"value="under_graduation"name="qualification">under_graduation
                        <input type="radio"value="post_graduation"name="qualification">post_graduation  
                    </td>
                </tr>
                <tr>
                    <td>STATE:</td>
                    <td>
                        <select name="state">
                        <option value="maharashtra"  >maharashtra</option>  
                        <option value="madhyapradesh">madhyapradesh</option>
                        <option value="uttarpradesh">uttarpadesh</option>
                        <option value="chhattisgad">chhattisgad</option>
                        <option value="andhrapradesh">andhrapradesh</option>
                        <option value="jharkhand">jharkhand</option>
                        <option value="sikkim">sikkim</option>
                        <option value="west_bengal">west_bengal</option>
                        <option value="manipur">manipur</option>
                        <option value="mizoram">mizoram</option>
                        <option value="assam">assam</option>
                        <option value="bihar">bihar</option>
                        <option value="tripura">tripura</option>   
                        <option value="nagaland">nagaland</option>   
                        <option value="arunachal_pradesh">arunachal_pradesh</option>    
                        <option value="gujrat">gujrat</option>   
                        <option value="rajsthan">rajsthan</option>   
                        <option value="punjab">punjab</option>   
                        <option value="delhi">delhi</option>   
                        <option value="jammu_kashmir">jammu_kashmir</option>   
                        <option value="himanchal_pradesh">himanchal_pradesh</option>   
                        <option value="hariyana">hariyana</option>   
                        <option value="uttrakhand">uttrakhand</option>   
                        <option value="telangana">telangana</option>   
                        <option value="tamilnadu">tamilnadu</option>   
                        <option value="kerala">kerala</option>   
                        <option value="karnataka">karnataka</option>   
                        <option value="goa">goa</option>   
                        <option value="odisha">odisha</option>   
                        <option value="meghalaya">meghalaya</option>   
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Choose this schemes:</td>
                    <td>
                        <select name="scheme">
                            <option value="Tribual Development Department" >Tribual Development Department</option>
                            <option value="Directorate of higher education">Directorate of higher education</option>
                            <option value="Directorate of technical education">Directorate of technical education</option>
                            <option value="Anant scholarship">Anant scholarship</option>
                            <option value="NSF scholarship">NSF scholarship</option>
                            <option value="CCRT scholarship">CCRT scholarship</option>
                            <option value="24th NEST scholarship">24th NEST scholarship</option>
                            <option value="Next Genius scholarship">Next Genius scholarship</option>
                            <option value="Joseph Mundassery Scholarship">Joseph Mundassery Scholarship</option>
                            <option value="VJNT,OBC and SBC Welfare Department">VJNT,OBC and SBC Welfare Department</option>    
                        </select>
                    </td>
                <tr>
                    <td>
                        <input type="submit"value="submit">
                    </td>
                </tr>
            
        </table>
    </form>
    </body>
</html>

</body>
</html>