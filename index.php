



<?php

include ("trust/config.php");

include ("trust/head.php");

include ("trust/main.php");

include ("templates/main_pages.php");

include ("trust/foot.php");

?>


<script type="text/javascript">
$(document).ready(function(){
    $("#modal").trigger('click'); 
});
</script>
<button id="modal" style="display:none" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Thông Báo</h4>
      </div>
      <div class="modal-body">
        <p>NẠP THẺ AUTO - HOẠT ĐỘNG 24/7</p>
        <p>NẾU CÓ LỖI BẢO TRÌ, XIN VUI LÒNG GIỮ LẠI VÀ NẠP SAU !</p>
        <p>ACC LIÊN MINH - TẤT CẢ ĐỀU TRẮNG THÔNG TIN !</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

