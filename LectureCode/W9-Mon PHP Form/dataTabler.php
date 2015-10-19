

        <table id="formTable">
            <tr>
                <th>Name</th>
                <th>Major</th>
                <th>HiddenField</th>
                <th>Department</th>
                <th>HTML5</th>
                <th>CSS3</th>
                <th>jQuery</th>
            </tr>
            <tr>
                <td><?php echo $_POST["name"]; ?></td>
                <td><?php echo $_POST["major"]; ?></td>
                <td><?php echo $_POST["hiddenField"]; ?></td>
                <td><?php echo $_POST["department"]; ?></td>
                <td><?php
                        if(in_array("HTML5", $skills)) {
                            echo 'Yes';
                        } else {
                            echo 'No';
                        }
                    ?></td>
                <td><?php
                        if(in_array("CSS3", $skills)) {
                            echo 'Yes';
                        } else {
                            echo 'No';
                        }
                    ?></td>
                <td><?php
                        if(in_array("jquery", $skills)) {
                            echo 'Yes';
                        } else {
                            echo 'No';
                        }
                    ?></td>
            </tr>
        
        </table>

