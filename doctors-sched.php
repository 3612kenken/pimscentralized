<!DOCTYPE html>
<html lang="en">
<?php include("head.php");?>
<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
    <div class="sidebar-header" >
        
        <p class="title text-primary">PIMS </p>
        <h2 class="text-primary" style="font-size:large; margin:0%;padding:0%;margin-bottom: 0%;">Patient Information and Monitoring System</h2>
    </div>
    <div class="sidebar-menu">
        <div class="sidebar-menu">
            <ul class="menu">
            
                <li class='sidebar-title'>Patient Assist Menu</li>
                <li class="sidebar-item ">
                    <a href="dashboard_main.html" class='sidebar-link'>
                        <i data-feather="home" width="20"></i> 
                        <span>Dashboard</span>
                    </a>
                    
                </li>
                <li class="sidebar-item ">
                    <a href="manage_patient.html" class='sidebar-link'>
                        <i data-feather="layout" width="20"></i> 
                        <span>Manage Patient</span>
                    </a>
                    
                </li>
                <li class="sidebar-item ">
                    <a href="doctors.html" class='sidebar-link'>
                        <i data-feather="layout" width="20"></i> 
                        <span>Manage Doctors List</span>
                    </a>
                    
                </li>
    
                <li class="sidebar-item  active">
                    <a href="doctors-sched.html" class='sidebar-link'>
                        <i data-feather="layout" width="20"></i> 
                        <span>Doctor's Schedule</span>
                    </a>
                    
                </li>
    
            
            
            
                <li class='sidebar-title'>Pages</li>
            
            
            
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="user" width="20"></i> 
                        <span>Authentication</span>
                    </a>
                    
                    <ul class="submenu ">
                        
                        <li>
                            <a href="auth-login.html">Login</a>
                        </li>
                        
                        <li>
                            <a href="auth-register.html">Register</a>
                        </li>
                        
                        <li>
                            <a href="auth-forgot-password.html">Forgot Password</a>
                        </li>
                        
                    </ul>
                    
                </li>
         
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            <?php include("nav.php");?>
            
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Doctor's Schedule</h3>
        <p class="text-subtitle text-muted">Here are the list of doctor's schedule</p>
    </div>
    <section class="section">
									<div class="row">
										<div class="col-md-6">
                                            
                                
											<div class="form-group">
												<label for="first-name-column">Title</label>
												<input type="text" id="first-name-column" class="form-control" name="lname-column">
											</div>
											<div class="form-group">
												<label for="first-name-column">Date Schedule</label>
												<input type="date" id="first-name-column" class="form-control" name="lname-column">
											</div>
											<div class="form-group">
												<label for="first-name-column">Description</label>
												<input type="text" id="first-name-column" class="form-control" name="lname-column">
											</div>
												<a class="btn btn-success" href="">Save</a>
										</div>
										<div class="col-md-6">
											<div class="table-responsive">
												<table class='table mb-0' id="table1">
													<thead>
														<tr>
															<th>#</th>
															<th>Title</th>
															<th>Date Schedule</th>
															<th>Description</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>Clinical</td>
															<td>11/12/2024</td>
															<td>Description...</td>
															<td>
																<button class="btn badge bg-primary"> <i class="fa fa-edit"></i></button>
																<button class="btn badge bg-danger"> <i class="fa fa-trash"></i></button>
															</td>
														</tr>
													   
													</tbody>
												</table>
											</div>
									
										</div>
									</div>
        <div id='wrap'>

<div id='calendar'></div>

<div style='clear:both'></div>
</div>
        
    </section>
</div>

           <?php include("footer.php");?>
	<script>

	$(document).ready(function() {
	    var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		/*  className colors
		
		className: default(transparent), important(red), chill(pink), success(green), info(blue)
		
		*/		
		
		  
		/* initialize the external events
		-----------------------------------------------------------------*/
	
		$('#external-events div.external-event').each(function() {
		
			// create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
			// it doesn't need to have a start or end
			var eventObject = {
				title: $.trim($(this).text()) // use the element's text as the event title
			};
			
			// store the Event Object in the DOM element so we can get to it later
			$(this).data('eventObject', eventObject);
			
			// make the event draggable using jQuery UI
			$(this).draggable({
				zIndex: 999,
				revert: true,      // will cause the event to go back to its
				revertDuration: 0  //  original position after the drag
			});
			
		});
	
	
		/* initialize the calendar
		-----------------------------------------------------------------*/
		
		var calendar =  $('#calendar').fullCalendar({
			header: {
				left: 'title',
				center: 'agendaDay,agendaWeek,month',
				right: 'prev,next today'
			},
			editable: true,
			firstDay: 1, //  1(Monday) this can be changed to 0(Sunday) for the USA system
			selectable: true,
			defaultView: 'month',
			
			axisFormat: 'h:mm',
			columnFormat: {
                month: 'ddd',    // Mon
                week: 'ddd d', // Mon 7
                day: 'dddd M/d',  // Monday 9/7
                agendaDay: 'dddd d'
            },
            titleFormat: {
                month: 'MMMM yyyy', // September 2009
                week: "MMMM yyyy", // September 2009
                day: 'MMMM yyyy'                  // Tuesday, Sep 8, 2009
            },
			allDaySlot: false,
			selectHelper: true,
			select: function(start, end, allDay) {
				var title = prompt('Event Title:');
				if (title) {
					calendar.fullCalendar('renderEvent',
						{
							title: title,
							start: start,
							end: end,
							allDay: allDay
						},
						true // make the event "stick"
					);
				}
				calendar.fullCalendar('unselect');
			},
			droppable: true, // this allows things to be dropped onto the calendar !!!
			drop: function(date, allDay) { // this function is called when something is dropped
			
				// retrieve the dropped element's stored Event Object
				var originalEventObject = $(this).data('eventObject');
				
				// we need to copy it, so that multiple events don't have a reference to the same object
				var copiedEventObject = $.extend({}, originalEventObject);
				
				// assign it the date that was reported
				copiedEventObject.start = date;
				copiedEventObject.allDay = allDay;
				
				// render the event on the calendar
				// the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
				$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
				
				// is the "remove after drop" checkbox checked?
				if ($('#drop-remove').is(':checked')) {
					// if so, remove the element from the "Draggable Events" list
					$(this).remove();
				}
				
			},
			
			events: [
				{
					title: 'All Day Event',
					start: new Date(y, m, 1)
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d-3, 16, 0),
					allDay: false,
					className: 'info'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d+4, 16, 0),
					allDay: false,
					className: 'info'
				},
				{
					title: 'Meeting',
					start: new Date(y, m, d, 10, 30),
					allDay: false,
					className: 'important'
				},
				{
					title: 'Lunch',
					start: new Date(y, m, d, 12, 0),
					end: new Date(y, m, d, 14, 0),
					allDay: false,
					className: 'important'
				},
				{
					title: 'Birthday Party',
					start: new Date(y, m, d+1, 19, 0),
					end: new Date(y, m, d+1, 22, 30),
					allDay: false,
				},
				{
					title: 'Click for Google',
					start: new Date(y, m, 28),
					end: new Date(y, m, 29),
					url: 'https://ccp.cloudaccess.net/aff.php?aff=5188',
					className: 'success'
				}
			],			
		});
		
		
	});

</script>
</body>
</html>
