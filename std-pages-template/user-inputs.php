<div class="row" style="margin:50px;">

			<div class="col-md-4 text-center">
                
                
                     
                                <h4>Profile Picture</h4>
						
                               
                                       
                                            <img class="border-gray" width="100%" src="https://cdn-icons-png.flaticon.com/128/149/149071.png" id='output' alt="..." width="300">
                                              <hr>
											<h5 class="title">Change User<br>
                                                <small>Profile Picture</small>
                                            </h5>
											  <input onchange='loadFile(event);' style="display:none;" type='file' id='filename'/>
                                       
                                          
                                           
                                                <label for='filename' class="btn btn-info">
												
													<span class="fa fa-upload"></span> Browse File</label>
												
                                       
                           
                       
                          </div>
            
                         
					
					<div class="col-md-4">           
                              
                          
                            
                             <h5>Basic Informantion</h5>
                              <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" id='lastname' value ='' class="form-control" required="">
                                
                              </div>
                             
                              <div class="form-group">
                                <label>First Name</label>
                                <input type="text" id='firstname' value ='' class="form-control" required="">
                               
                              </div>
                              <div class="form-group">
                                <label>Middle Name</label>
                                <input type="text" id='middle' value ='' class="form-control" required="">
                                
                              </div>
							  
                              
                              <div class="form-group">
                                <label>Designation</label>
                                <select class="form-control">
									<option selected disabled>--select--</option>
									<option value="User">User</option>
									<option value="Nurse">Nurse</option>
									<option value="Doctor">Doctor</option>
									<option value="Administrator">Administrator</option>
								</select>
							</div>
                              <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control">
									<option selected disabled>--select--</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
							</div>
								<div class="form-group">
                                <label>Address</label>
                                <textarea id='middle' value ='' class="form-control" required=""></textarea>
                                
                              </div>
							  
							  <div class="form-group">
                                <label>Status</label>
                                <select class="form-control">
									<option selected disabled>--select--</option>
									<option value="Active">Active</option>
									<option value="Not Active">Not Active</option>
								</select>
							</div>
								
                    </div>
					<div class="col-md-4">  
							<h5>Doctor Details<br><small>Required to fillup for doctor's designation</small></h5>
							<div id="doc-details">
                               <div class="form-group">
                                <label>Profession</label>
                                <input type="text" id='middle' value ='' class="form-control" required="">
                                
                              </div>
                               <div class="form-group">
                                <label>Licence No.</label>
                                <input type="text" id='middle' value ='' class="form-control" required="">
                                
                              </div>
                               <div class="form-group">
                                <label>Clinic Name</label>
                                <input type="text" id='middle' value ='' class="form-control" required="">
                                
                              </div>
                              
                               <div class="form-group">
                                <label>Clinic Address</label>
                                <textarea id='middle' value ='' class="form-control" required=""></textarea>
                                
                              </div>
							   <div class="form-group">
                                <label>Contact Number</label>
                                <input type="text" id='middle' value ='' class="form-control" required="">
                                
                              </div>
                             
							</div>  
                          
						   
					</div>
				
                      
            
            
                  
            
              </div>
			  <div class=" text-right">
                                <button class="btn btn-success btn-lg" onclick="SaveRecord();"><i class="fa fa-save"></i> Save User</button>
                            </div>
          </div>