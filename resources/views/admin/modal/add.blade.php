<div class="modal fade" id="myModal" role="dialog">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">ADD VISA</h4>
         </div>
          <form class="form-horizontal"  method="post" action="{{route('postadd')}}">
            {{ csrf_field() }}
         <div class="modal-body">
           
               <div class="form-group">
                  <label class="col-md-2 control-label">Name</label>
                  <div class="col-md-10">
                     <input type="text" name="name" class="form-control" placeholder=" Họ tên">
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-md-2 control-label">Id Card</label>
                  <div class="col-md-10">
                     <input type="text" name="id_card" class="form-control" placeholder=" Vui lòng điền id cart">
                  </div>
               </div>
            
               <div class="form-group">
                  <label class="col-md-2 control-label">Valid Date</label>
                  <div class="col-md-10">
                  
                      <input type='text' name="valid_date" class="form-control" />
                     
                  </div>
               </div>
                 
               <div class="form-group">
                  <label class="col-md-2 control-label">Code</label>
                  <div class="col-md-10">
                     <input type="text" name="code" class="form-control" placeholder=" Vui lòng nhập mã code">
                  </div>
               </div>
              <div class="form-group">
                  <label class="col-md-2 control-label">Service</label>
                  <div class="col-md-10">
                     <select name="service[]" id="" class="form-control selectpicker"  multiple>
                        <option value="facebook">Facebook</option>
                        <option value="google">Google</option>
                        <option value="amazon">Amazon</option>
                        <option value="microsoft">Microsoft</option>
                     </select>
                  </div>
               </div>
               <div class="form-group">
                     <label class="col-md-2 control-label">Status</label>
                     <div class="col-md-10">
                        <select name="status" id="" class="form-control " >
                        <option value="Die">Die</option>
                        <option value="Active">Active</option>
                       
                     </select>
                     </div>
                  </div>
            
            
          
         </div>
         <div class="modal-footer">
         <!-- <input type="submit" value="Change Update"> -->
            <button type="submit" class="btn btn-primary"  >Change Update</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
         </form>
      </div>
   </div>
</div>
