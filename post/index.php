<?php
$names = file('demo.csv');
$page = $_GET['page'];
$pagedResults = new Paginated($names, 20, $page);
$handle = fopen('demo.csv', 'r');
  if (($data = fgetcsv($handle, 1000, ',')) !== FALSE)
    {
    }
echo "<table border='3' bgcolor='#dceba9' style='float:center; margin:50'>";
echo '<tr><th>'.implode('</th><th>', $data).'</th></tr>';
while ( $row = $pagedResults->fetchPagedRow())
{
    echo "<tr><td>";
    $row1 = str_replace( ',', "</td><td>", $row );
    echo $row1;
    echo "</td></tr>";
}
fclose($handle);
echo "</table>";
//important to set the strategy to be used before a call to fetchPagedNavigation
$pagedResults->setLayout(new DoubleBarLayout());
echo $pagedResults->fetchPagedNavigation();
?>
<form method="get" action="slider.php">
    <input type="hidden" name="totalcolumns" value="3">
    <input type="submit">
</form>
<script>
parent.frames['f2'].location.href="slider.php?totalcolumns=3";
</script>