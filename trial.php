<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Change Button Text Based on Radio Button Selection</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<style>
.divTable{
    display: table;
    width: 100%;
 text-align: center;

}
.divTableRow {
    display: table-row;
}
.divTableHeading {
    background-color: #ffffff;
    display: table-header-group;
}
.divTableCell, .divTableHead {
    border: 1px solid #ffffff;
    display: table-cell;
    padding: 3px 10px;
}
.divTableHeading {
    background-color: #ffffff;
    display: table-header-group;
    font-weight: bold;
}
.divTableFoot {
    background-color: #ffffff;
    display: table-footer-group;
    font-weight: bold;
}
.divTableBody {
    display: table-row-group;
}
</style>
<body>
    <label><input type="radio" name="buttonText" value="Submit">Submit</label>
    <label><input type="radio" name="buttonText" value="Reset">Reset</label>
    <label><input type="radio" name="buttonText" value="Custom">Custom</label>
    
    <button id="myButton">Button</button>
    
    <script>
        $(document).ready(function() {
            $('input[name=buttonText]').change(function() {
                var buttonText = $(this).val();
                $('#myButton').text(buttonText);
            });
        });
    </script>
    <div class="divTable">
<div class="divTableBody">
<div class="divTableRow">
<div class="divTableCell">name</div>
<div class="divTableCell">class</div>
<div class="divTableCell">subject</div>
<div class="divTableCell">marks</div>
</div>
<div class="divTableRow">
<div class="divTableCell">nidhi</div>
<div class="divTableCell">9</div>
<div class="divTableCell">math</div>
<div class="divTableCell">10</div>
</div>
    </div>


</body>
</html>

<!-- $(document).ready(function() {
            $('input[type=radio][name=rbtn]').change(function() {
                if (this.value === 'cod') {
                    $('#myButton').text('Submit');
                } else if (this.value === 'onlinep') {
                    $('#myButton').text('proceed to pay');
                } 
            });
        }); -->
        <tr>
<td>".$row['orderid']. "</td>
<td>".$row['rate']."</td>
<td>".$row['qty']."</td>
<td>". $row['productid']. "  </td>
<tr>";



<!DOCTYPE html>
<html>
<body>

<h1>JavaScript Strings</h1>
<h2>The length Property</h2>

<p>The length of the string is:</p>
<p id="demo"></p>

<script>
let text = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
console.log(text.length);
</script>

</body>
</html>
