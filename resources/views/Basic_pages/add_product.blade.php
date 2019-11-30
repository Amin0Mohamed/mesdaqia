<div>
        email: {{Session::get('email')}}
        password : {{Session::get('password')}}
      ID = =   {{Session::get('id')}}

</div>
<br>

<select name="data_selected" onchange="location = this.value;">
        <option>select item</option>
        <option value="/formcars">cars</option>
        <option value="/formjewelries">jewelries</option>
        <option value="/formproperties">properties</option>
        <option value="/formvichles">vichles</option>
        <option value="/formhighvalues">highvalues</option>
</select>
