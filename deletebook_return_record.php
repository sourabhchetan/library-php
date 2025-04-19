<?php
	include 'connect.php';
	include 'return.css';
class deletebook_return_records extends connect
{
    public $r1,$r2,$r3,$r4,$r5,$r6,$r7,$r8;
    public function __construct()
    {
        parent::__construct();
    }
    public function allsearch()
   {		
	if($this->db_handle)
	{
		$result=mysqli_query($this->db_handle, "select * from book_return_records");
		print "<table border=1>
	 	<tr>
		
				<th>BORROWERS ID</th>
				<th>BOOK ID</th>
				<th>BOOK TITLE</th>
				<th>STUDENT ID</th>
				<th>STAFF ID</th>
				<th>NUMBER OF COPIES</th>	
				<th>RELESE DATE</th>
				<th>DUE DATE</th>
		</tr>";
		while($db_field=mysqli_fetch_assoc($result))
		{
			print "<tr>";
			print "<td>".$db_field['borrowers_id']."</td>";
			print "<td>".$db_field['book_id']."</td>";
			print "<td>".$db_field['btitle']."</td>";
			print "<td>".$db_field['stud_id']."</td>";
			print "<td>".$db_field['staff_id']."</td>";
			print "<td>".$db_field['stud_no_copies']."</td>";
			print "<td>".$db_field['releasedt']."</td>";
			print "<td>".$db_field['duedt']."</td>";		
		}
		echo "<body><input type=button value=Print class='b' onclick=window.print()></body>";
	  }
     }
	
     public function psearch()
   		{		
			if($this->db_handle)
			{
				$result=mysqli_query($this->db_handle, "select * from book_return_records where borrowers_id='$_POST[t1]' ");
				print "<table border=1>
	 			<tr>
				<th>BORROWERS ID</th>
				<th>BOOK ID</th>
				<th>BOOK TITLE</th>
				<th>STUDENT ID</th>
				<th>STAFF ID</th>
				<th>NUMBER OF COPIES</th>	
				<th>RELESE DATE</th>
				<th>DUE DATE</th>
				</tr>";
				while($db_field=mysqli_fetch_assoc($result))
				{
					print "<tr>";
					print "<td>".$db_field['borrowers_id']."</td>";
					print "<td>".$db_field['book_id']."</td>";
					print "<td>".$db_field['btitle']."</td>";
					print "<td>".$db_field['stud_id']."</td>";
					print "<td>".$db_field['staff_id']."</td>";
					print "<td>".$db_field['stud_no_copies']."</td>";
					print "<td>".$db_field['releasedt']."</td>";
					print "<td>".$db_field['duedt']."</td>";
					
				}
				echo "<body><input type=button value=Print class='b' onclick=window.print()></body>";
	  		}
     		}

    public function delete()
    {
        if($this->db_handle)
        {
            $sql="delete from book_return_records where borrowers_id='$_POST[t1]' ";
            mysqli_query($this->db_handle,$sql);
            echo"<script language=javascript> alert('Record Deleted')</script>";
        }
    }
}
$obj=new deletebook_return_records();
if(isset($_REQUEST["b1"]))
    $obj->delete();
if(isset($_REQUEST["b2"]))
    $obj->allsearch();
if(isset($_REQUEST["b3"]))
    $obj->psearch();
	
	echo "<center> <form name=f method=post action=deletebook_return_record.php>";
	echo "<table border=0>
	      <tr><th><p align=left>BORROWERS ID</th><th><input type=text name=t1 value=$obj->r1></th></tr>";
	echo "<th colspan=2><input type=button value=NEW class='e' onclick=rs()>
	      <input type=submit value=DELETE class='b' name=b1>
	      <input type=submit value=ALLSEARCH class='c' name=b2>
	      <input type=submit value=PSEARCH class='b' name=b3>
	      <input type=button value=HOME class='e' onclick=hom()></th></tr></table></center>";
	
	echo "<script>function rs(){
			f.t1.value=''
			f.t2.value=''
			f.t3.value=''
			f.t4.value=''
			f.t5.value=''
			f.t6.value=''
			f.t7.value=''
			f.t8.value=''
		}
		function hom()
		{
			window.open('menu.html','_self')
		}
		</script>";
?>