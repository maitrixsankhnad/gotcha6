

<tr>
  <td><div class="radio">
      <label>
      <input type="radio" class="flat" name="rm_id" id="option'+i+'" style="margin-top:21px" value="'+obj[i].fld_id+'">
      </label>
    </div></td>
  <td><div class="img-circle profile_img"><i class="fa fa-user green"></i></div></td>
  <td><a class="title" href="#" style="color:#000">'+obj[i].fld_username+'</a></td>
  <td><div class="selfDiscBox">
      <div class="stars stars-example-fontawesome-o'+(i+1)+'">'+totrating+'</div>
    </div></td>
  <td><div class="col-md-2">
      <button type="button" class="btn btn-primary" style="padding:5px 15px" data-toggle="modal" onClick="rmDetails('+obj[i].fld_id+')">view</button>
    </div></td>
</tr>
