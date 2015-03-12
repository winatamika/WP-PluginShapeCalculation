<script type="text/javascript">
    <!--

function number_format(number, decimals, dec_point, thousands_sep) {
  number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function (n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}


    function calcPrice(id)
    {
        var defaultPrice = {{canopysettingprice}};
        
        if(id==1){
            var side1 = parseFloat(document.getElementById("side" + id + '1').value);
            var side2 = parseFloat(document.getElementById("side" + id + '2').value);
            document.getElementById("price" + id).innerHTML = number_format((side1 * side2) * defaultPrice);
        }else if(id==2){
            var side1 = parseFloat(document.getElementById("side" + id + '1').value);
            var side2 = parseFloat(document.getElementById("side" + id + '2').value);
            document.getElementById("price" + id).innerHTML = number_format((side1 * side2) * defaultPrice);
        }else if(id==3){
            var side1 = parseFloat(document.getElementById("side" + id + '1').value);
            var side2 = parseFloat(document.getElementById("side" + id + '2').value);
            document.getElementById("price" + id).innerHTML = number_format((side1 * side2) * defaultPrice); 
        }else if(id==4){
            var side1 = parseFloat(document.getElementById("side" + id + '1').value);
            //var side2 = parseFloat(document.getElementById("side" + id + '2').value);
            document.getElementById("price" + id).innerHTML = number_format((1.72 * side1 * side1) * defaultPrice); 
        }else if(id==5){
            var side1 = parseFloat(document.getElementById("side" + id + '1').value);
            var side2 = parseFloat(document.getElementById("side" + id + '2').value);
            var side3 = parseFloat(document.getElementById("side" + id + '3').value);
            document.getElementById("price" + id).innerHTML = number_format((0.75 * (side1+side2) * side3) * defaultPrice); 
        }else if(id==6){
            var side1 = parseFloat(document.getElementById("side" + id + '1').value);
            var side2 = parseFloat(document.getElementById("side" + id + '2').value);
            document.getElementById("price" + id).innerHTML = number_format((0.75 * side1 * side2) * defaultPrice); 
        }else if(id==7){
            var side1 = parseFloat(document.getElementById("side" + id + '1').value);
            var side2 = parseFloat(document.getElementById("side" + id + '2').value);
            document.getElementById("price" + id).innerHTML = number_format((0.75 * side1 * side2) * defaultPrice); 
        }else if(id==8){
            var side1 = parseFloat(document.getElementById("side" + id + '1').value);
            var side2 = parseFloat(document.getElementById("side" + id + '2').value);
            document.getElementById("price" + id).innerHTML = number_format((0.75 * side1 * side2) * defaultPrice); 
        }
        
    }
    //-->
</script>

<hr />
<form id="shape1" method="post"> 
    <table border="0" cellspacing="0"   cellpadding="2" width="90%" summary="Shapes">
        <tbody>
            <tr>
                <td width="25%" rowspan="6" align="center" valign="top"><img class="thumbnail1" src="{{plugin_rul}}/images/shape1.jpg" border="0" /></td>
              <td width="33%" align="center"><label for="side11">A - B</label></td>
              <td width="42%"><input id="side11" name="side1" size="5" type="text" /> m</td>
            </tr>
            <tr>
                <td align="center"><label for="side12">B - C</label></td>
                <td><input id="side12" name="side2" size="5" type="text" /> m</td>
            </tr>
            <tr  class="tbl">
                <td align="center">Price (IDR)</td>
                <td><span id="price1"> </span></td>
            </tr>
            <tr><td></td>
                <td colspan="2" align="left"><input id="calc1" class="button" onClick="calcPrice(1)" name="calc1" type="button" value="Calculate" /></td>
            </tr>
        </tbody>
    </table>
</form> 
<hr />
<form id="shape2" method="post">
    <table border="0" cellspacing="0" cellpadding="2" width="90%" summary="Shapes">
        <tbody>
            <tr>
                <td width="25%" rowspan="6" align="center"><img class="thumbnail1" src="{{plugin_rul}}/images/shape2.jpg" border="0" /></td>
              <td width="33%" align="center"><label for="side1">A - B</label></td>
                <td width="42%"><input id="side21" name="side1" size="5" type="text" /> m</td>
            </tr>
            <tr>
                <td align="center"><label for="side22">B - C</label></td>
                <td><input id="side22" name="side2" size="5" type="text" /> m</td>
            </tr>
            <tr class="tbl">
                <td align="center">Price (IDR)</td>
                <td><span id="price2"> </span></td>
            </tr>
            <tr><td></td>
                <td colspan="2" align="left"><input id="calc2" class="button" onClick="calcPrice(2)" name="calc2" type="button" value="Calculate" /></td>
            </tr>
        </tbody>
    </table>
</form>
<hr />
<!--
<form id="shape3" method="post">
    <table border="0" cellspacing="0" cellpadding="2" width="90%" summary="Shapes">
        <tbody>
            <tr>
                <td width="25%" rowspan="6" align="center"><img class="thumbnail1" src="{{plugin_rul}}/images/shape3.jpg" border="0" /></td>
              <td width="33%" align="center"><label for="side1">C - D</label></td>
                <td width="42%"><input id="side31" name="side1" size="5" type="text" /> m</td>
            </tr>
            <tr>
                <td align="center"><label for="side2">A - E</label></td>
                <td><input id="side32" name="side2" size="5" type="text" /> m</td>
            </tr>
            <tr  class="tbl">
                <td align="center">Price (IDR)</td>
                <td><span id="price3"> </span></td>
            </tr>
            <tr><td></td>
                <td colspan="2" align="left"><input id="calc3" class="button" onClick="calcPrice(3)" name="calc3" type="button" value="Calculate" /></td>
            </tr>
        </tbody>
    </table>
</form>
<hr />
-->
<!--
<form id="shape4" method="post">
    <table border="0" cellspacing="0" cellpadding="2" width="90%" summary="Shapes">
        <tbody>
            <tr>
                <td width="25%" rowspan="6" align="center"><img class="thumbnail1" src="{{plugin_rul}}/images/shape4.jpg" border="0" /></td>
              <td width="33%" align="center"><label for="side1">S</label></td>
                <td width="42%"><input id="side41" name="side1" size="5" type="text" /> m</td>
            </tr>
            
            <tr  class="tbl">
                <td align="center">Price (IDR)</td>
                <td><span id="price4"> </span></td>
            </tr>
            <tr><td></td>
                <td colspan="2" align="left"><input id="calc4" class="button" onClick="calcPrice(4)" name="calc4" type="button" value="Calculate" /></td>
            </tr>
        </tbody>
    </table>
</form>
<hr />
-->
<!--
<form id="shape5" method="post">
    <table border="0" cellspacing="0" cellpadding="2" width="90%" summary="Shapes">
        <tbody>
            <tr>
                <td width="25%" rowspan="6" align="center"><img class="thumbnail1" src="{{plugin_rul}}/images/shape5.jpg" border="0" /></td>
              <td width="33%" align="center"><label for="side1">A - B</label></td>
                <td width="42%"><input id="side51" name="side1" size="5" type="text" /> m</td>
            </tr>
            <tr>
                <td align="center"><label for="side2">C - D</label></td>
                <td><input id="side52" name="side2" size="5" type="text" /> m</td>
            </tr>
            <tr>
                <td align="center"><label for="side3">D - E</label></td>
                <td><input id="side53" name="side3" size="5" type="text" /> m</td>
            </tr>
            <tr  class="tbl">
                <td align="center">Price (IDR)</td>
                <td><span id="price5"> </span></td>
            </tr>
            <tr><td></td>
                <td colspan="2" align="left"><input id="calc5" class="button" onClick="calcPrice(5)" name="calc5" type="button" value="Calculate" /></td>
            </tr>
        </tbody>
    </table>
</form>
<hr />
-->
<form id="shape6" method="post">
    <table border="0" cellspacing="0" cellpadding="2" width="90%" summary="Shapes">
        <tbody>
            <tr>
                <td width="25%" rowspan="6" align="center"><img class="thumbnail1" src="{{plugin_rul}}/images/shape6.jpg" border="0" /></td>
              <td width="33%" align="center"><label for="side1">A - D</label></td>
                <td width="42%"><input id="side61" name="side1" size="5" type="text" /> m</td>
            </tr>
            <tr>
                <td align="center"><label for="side2">B - C</label></td>
                <td><input id="side62" name="side2" size="5" type="text" /> m</td>
            </tr>
            
            <tr  class="tbl">
                <td align="center">Price (IDR)</td>
                <td><span id="price6"> </span></td>
            </tr>
            <tr><td></td>
                <td colspan="2" align="left"><input id="calc6" class="button" onClick="calcPrice(6)" name="calc6" type="button" value="Calculate" /></td>
            </tr>
        </tbody>
    </table>
</form>
<hr />
<form id="shape7" method="post"> 
    <table border="0" cellspacing="0"  cellpadding="2" width="90%" summary="Shapes">
        <tbody>
            <tr>
                <td width="25%" rowspan="6" align="center"><img class="thumbnail1" src="{{plugin_rul}}/images/shape7.jpg" border="0" /></td>
              <td width="33%" align="center"><label for="side1">A - B</label></td>
                <td width="42%"><input id="side71" name="side1" size="5" type="text" /> m</td>
            </tr>
            <tr>
                <td align="center"><label for="side2">C - D</label></td>
                <td><input id="side72" name="side2" size="5" type="text" /> m</td>
            </tr>
            <tr  class="tbl">
                <td align="center">Price</td>
                <td><span id="price7"> </span></td>
            </tr>
            <tr><td></td>
                <td colspan="2" align="left"><input id="calc7" class="button" onClick="calcPrice(7)" name="calc7" type="button" value="Calculate" /></td>
            </tr>
        </tbody>
    </table>
</form>
<hr />
<!-- 
<form id="shape8" method="post"> 
    <table border="0" cellspacing="0" cellpadding="2" width="90%" summary="Shapes">
        <tbody>
            <tr>
                <td width="25%" rowspan="6" align="center"><img class="thumbnail1" src="{{plugin_rul}}/images/shape8.jpg" border="0" /></td>
              <td width="33%" align="center"><label for="side1">A - C</label></td>
                <td width="42%"><input id="side81" name="side1" size="5" type="text" /> m</td>
            </tr>
            <tr>
                <td align="center"><label for="side2">B - C</label></td>
                <td><input id="side82" name="side2" size="5" type="text" /> m</td>
            </tr>
            
            <tr class="tbl">
                <td align="center">Price (IDR)</td>
                <td><strong><span id="price8"> </span></strong></td>
            </tr>
            <tr>
			<td></td>
                <td colspan="2" align="left"><input id="calc8" class="button" onClick="calcPrice(8)" name="calc8" type="button" value="Calculate" /></td>
				
            </tr>
        </tbody>
    </table>
</form>
-->