<!DOCTYPE html>
<head>
    <title>Webtech Class type</title>
</head>
<body>
    <form method="post" novalidate >
        <table border="1" width="100%">
            <tr>
                <td colspan="3" align="center">PERSONAL PROFILE</td>
                
            </tr>
            <tr>
                <td width="30%">Name</td>
                <td width="60%"><input width="50%" type="text" name="name"></td>
                <td width="20%"></td>
            </tr>
            <tr>
                <td width="30%">Email</td>
                <td width="60%"><input width="50%" type="email" name="email"></td>
                <td width="20%"></td>
            </tr>
            <tr>
                <td width="30%">Gender</td>
                <td width="60%">
                    <input width="50%" type="radio" value="Male" name="gender"> Male
                    <input width="50%" type="radio" value="Female" name="gender"> Female
                    <input width="50%" type="radio" value="Others" name="gender"> Others 
                
                </td>
                <td width="20%"></td>
            </tr>
            <tr>
                <td width="30%">Date of birth</td>
                <td width="60%">
                    <input width="50%" type="number"  name="dd"> /
                    <input width="50%" type="number"  name="mm"> /
                    <input width="50%" type="number"  name="yy"> (dd//mm//yyyy) 
                
                </td>
                <td width="20%"></td>
            </tr>
            <tr>
                <td width="30%">Blood Group</td>
                <td width="60%">
                    <select name="" id="">
                        <option value="A+">A+</option>

                    </select>
                
                </td>
                <td width="20%"></td>
            </tr>
            <tr>
                <td width="30%">Degree</td>
                <td width="60%">
                    <input type="checkbox" name="HSC" value="SSC" id="">SSC
                    <input type="checkbox" name="HSC" value="HSC" id="">HSC
                    <input type="checkbox" name="HSC" value="BSc" id="">BSc
                    <input type="checkbox" name="HSC" value="MSc" id="">MSc

                
                </td>
                <td width="20%"></td>
            </tr>

            <tr>
                <td width="30%">Phot</td>
                <td width="70%" colspan="2">
                    <input type="file" name="Browse" id="">

                
                </td>
                
            </tr>
            <tr>
                <td colspan="3" align="center" height="100%"><br></td>
                
            </tr>
            <tr>
                <td colspan="3" align="right" height="100%" >
                    <button type="submit">submit</button>
                    <button type="reset">reset</button>
                </td>
               
                
            </tr>
            
        </table>
    </form>
</body>
</html>