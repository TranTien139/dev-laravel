 <div class="input-group subcribe">
      <form action="{{ url('nhan-tin-khuyen-mai') }}" method="post" role="form" id="" class="mail-letter">
      <input name="_token" value="{!! csrf_token() !!}" type="hidden">
         <input type="email" name="txtnewletter" class="form-control " placeholder="��ng k� nh?n tin khuy?n m?i">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit" type="button">��NG K�</button>
      </span>
      </form>
    </div><!-- /input-group -->