<div class="container-fluid container-padding">
 +    <button class="btn btn-secondary" data-toggle="modal" data-target="#newroom-modal">Add New Room Record</button>
 +    
 +<!-- Add new room modal -->
 +<div id="newroom-modal" class="modal fade in" tabindex="-1" role="dialog">
 +  <div class="modal-dialog modal-sm" role="document">
 +      <div class="modal-content">
 +
 +          <div class="modal-header">
 +              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 +                  <h4 class="modal-title">Add New Room Record </h4>
 +          </div>
 +
 +          <div class="modal-body">
 +              <!-- Label shows if some data entered is invalid -->
 +                  <label class="label label-danger" id="datainvalid"></label></br>
 +                  
 +            <form method="post" action="admin-functions.php?action=add">
 +                <div class="form-group">    
 +                    <label>Room Type</label>
 +                    <div class="dropdown">
 +                        <select class= "btn btn-sm btn-info" name="roomType" id="roomType">
 +                            <option value="1">Deluxe</option>
 +                            <option value="2">Luxury</option>
 +                            <option value="3">Suite</option>
 +                            <option value="4">Superior</option>
 +                        </select>
 +                    </div>
 +                    <label>Room Name</label>
 +                    <input type="text" id="" class="form-control" placeholder="Room name" name="roomName" required /></br>
 +                    <label>Bed Type</label></br>
 +                    <label style="font-size: 13px;">Single</label>
 +                    <input type="number" id="" class="form-control" min="0" value="0" name="singleBed"/>
 +                    <label style="font-size: 13px;">Double</label>
 +                    <input type="number" id="" class="form-control" min="0" value="0" name="doubleBed"/></br>
 +                    
 +                    <label>No. of Persons</label>
 +                    <input type="number" id="" class="form-control" min="1" value="1" name="numPersons"/></br>
 +                    
 +                    <label>Status</label>
 +                    <div class="dropdown">
 +                        <select class= "btn btn-sm btn-info" name="roomStatus" id="roomStatus" required>
 +                            <option value="Available">Available</option>
 +                            <option value="Unavailable">Unavailable</option>
 +                        </select>
 +                    </div></br></br>
 +                    
 +                    <button class="btn btn-info pull-right" type="submit" name="submit"> Submit Record </button>
 +                </div>
 +            </form>
 +          </div>
 +      </div>
 +  </div>
 +</div>                      
 +<!-- end of add new room modal -->
 +
 +<!-- Table that displays the record list -->
 +<h2>Room Record</h2>
 +<div class="panel panel-default">
 +  <div class="panel-heading"></div>
 +  <div class="panel-body">
 +      <table class="table table-hover" id="item-list-tbl">
 +        <thead>
 +           <tr>
 +              <!-- <th class='thId'>Room Id</th> -->
 +              <th>Room Name</th>
 +              <th>Room Type</th>
 +              <th>Bed Type</th>
 +              <th>No. of Bed/s</th>
 +              <th>No. of Person/s</th>
 +              <th>Status</th>
 +              <th>Action</th>
 +            </tr>
 +          </thead>
 +          <tbody id="item-tbl-body">
 +            <!-- to be filled dynamically -->
 +          </tbody>
 +      </table>
 +  </div>
 +</div>
 +<!-- end of display list -->
 +
 +<!-- Edit room data modal -->
 +<div id="editroom-modal" class="modal fade in" tabindex="-1" role="dialog">
 +  <div class="modal-dialog modal-sm" role="document">
 +      <div class="modal-content">
 +          <div class="modal-header">
 +              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 +                  <h4 class="modal-title">Update Room Record </h4>
 +          </div>
 +          <div class="modal-body">
 +              <!-- Label shows if some data entered is invalid -->
 +                  <label class="label label-danger" id="updateDatainvalid"></label></br>
 +                  
 +            <form method="post" action="admin-functions.php?action=update">
 +                <div class="form-group">
 +                    <input type="hidden" id="edit-roomId" class="form-control" name="roomId"/>
 +
 +                    <label>Room Type</label>
 +                    <div class="dropdown">
 +                        <select class= "btn btn-sm btn-success" name="roomType" id="edit-roomType">
 +                            <option value="1">Deluxe</option>
 +                            <option value="2">Luxury</option>
 +                            <option value="3">Suite</option>
 +                            <option value="4">Superior</option>
 +                        </select>
 +                    </div>
 +                    <label>Room Name</label>
 +                    <input type="text" id="edit-roomName" class="form-control" placeholder="Room name" name="roomName" required /></br>
 +                    <label>Bed Type</label></br>
 +                    <label id="edit-single-lbl" style="font-size: 13px;">Single</label>
 +                    <input type="number" id="edit-single" class="form-control" min="0" value="0" name="singleBed"/>
 +                    <label id="edit-double-lbl" style="font-size: 13px;">Double</label>
 +                    <input type="number" id="edit-double" class="form-control" min="0" value="0" name="doubleBed"/></br>
 +                    
 +                    <label>No. of Persons</label>
 +                    <input type="number" id="edit-numPerson" class="form-control" min="1" value="1" name="numPersons"/></br>
 +                    
 +                    <label>Status</label>
 +                    <div class="dropdown">
 +                        <select class= "btn btn-sm btn-success" name="roomStatus" id="edit-roomStatus" required>
 +                            <option value="Available">Available</option>
 +                            <option value="Unavailable">Unavailable</option>
 +                            <option value="Removed">Removed</option>
 +
 +                        </select>
 +                    </div></br></br>
 +                    
 +                    <button class="btn btn-success pull-right" type="submit" name="submit"> Update Record </button>
 +                </div>
 +            </form>
 +          </div>
 +      </div>
 +  </div>
 +</div>         