<?php
include 'connect.php';
class book extends connect
{
    
    public function __construct()
    {
        parent::__construct();
    }
    public function searchbox()
    {
        
        $result=mysqli_query($this->db_handle, "select '$_POST[t] from book");
				while($db_field=mysqli_fetch_assoc($result))
				{
					print "<tr>";
					print "<td>".$db_field['book_id']."</td>";
					print "<td>".$db_field['btitle']."</td>";
					print "<td>".$db_field['bedition']."</td>";
					print "<td>".$db_field['bauthor']."</td>";
					print "<td>".$db_field['bpublisher']."</td>";
					print "<td>".$db_field['bcopies']."</td>";
					print "<td>".$db_field['bsource']."</td>";
					print "<td>".$db_field['bcost']."</td>";
					print "<td>".$db_field['bremarks']."</td>";
				}
    }	
}			
$obj=new book();
if(isset($_REQUEST["b1"]))
    $obj->searchbox();

echo "<form name=f method=post action='book_particular_search.php'></form>";
echo "<table>
    <tr>
        <th><select onselect='s()' name=dropdown>
            <option value='Choose Table Menu'>Choose Table Menu</option>
            <option value='book_id'>book_id</option>
            <option value='btitle'>btitle</option>
            <option value='bedition'>bedition</option>
            <option value='bauthor'>bauthor</option>
            <option value='bublisher'>bpublisher</option>
            <option value='bcopies'>bcopies</option>
            <option value='bsource'>bsource</option>
            <option value='bcost'>bcost</option>
            <option value='bremarks'>bremarks</option>
        </select></th>";
        echo "<th><input type='text' name='t'></th>";
        echo "<th><input type='submit' value='Search' onclick='Search()'></th>";
    echo "</tr>
</table>
</form>";
echo "<script>
function s()
{
    f.t.value=f.dropdown.value
}
</script>";
?>