@extends('layouts.app')

@section('content')

@include('courses.popup.academic')



	<div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Courses</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Course</li>
              <li><i class="fa fa-file-text-o"></i>Manage Course</li>
            </ol>
          </div>
    </div>



    <div class="row">
          <div class="col-lg-12">
            <section class="box box-default">
              <header class="box-header with-border">
                Manage Course
              </header>
              <div class="box-body" style="">
                <form class="form-horizontal " method="get">
                	<div class="box-body">
                		<div class="form-group">  


                			<div class="col-sm-3">
                				<label for="academic year">Academic Year</label>
                				<div class="input-group">
                					<select class="form-control" name="academic_id" id="academic_id">
                						

                					</select>
                					<div class="input-group-addon">
                						<span class="fa fa-plus" id="add-more-academic" data-toggle="modal" data-target="#myModal"></span>
                					</div>
                				</div>
                			</div>

                			{{-----------------------------------}}

                			<div class="col-sm-4">
                				<label for="program">Program</label>
                				<div class="input-group">
                					<select class="form-control" name="program_id" id="program_id">
                						

                					</select>
                					<div class="input-group-addon">
                						<span class="fa fa-plus" id="add-more-program" data-toggle="modal" data-target="#myModal"></span>
                					</div>
                				</div>
                			</div>

                			{{------------------------------------}}


                			<div class="col-sm-5">
                				<label for="level">Level</label>
                				<div class="input-group">
                					<select class="form-control" name="level_id" id="level_id">
                						

                					</select>
                					<div class="input-group-addon">
                						<span class="fa fa-plus"></span>
                					</div>
                				</div>
                			</div>

                			{{---------------------------------------------------}}


                			<div class="col-sm-3">
                				<label for="shift">Shift</label>
                				<div class="input-group">
                					<select class="form-control" name="shift_id" id="shift_id">
                						

                					</select>
                					<div class="input-group-addon">
                						<span class="fa fa-plus"></span>
                					</div>
                				</div>
                			</div>


                			{{--------------------------}}

                			<div class="col-sm-4">
                				<label for="time">Time</label>
                				<div class="input-group">
                					<select class="form-control" name="time_id" id="time_id">
                						

                					</select>
                					<div class="input-group-addon">
                						<span class="fa fa-plus"></span>
                					</div>
                				</div>
                			</div>

                			{{-----------------------------}}



                			<div class="col-sm-3">
                				<label for="batch">Batch</label>
                				<div class="input-group">
                					<select class="form-control" name="batch_id" id="batch_id">
                						

                					</select>
                					<div class="input-group-addon">
                						<span class="fa fa-plus"></span>
                					</div>
                				</div>
                			</div>

                			{{---------------------------------}}


                			<div class="col-sm-2">
                				<label for="group">Group</label>
                				<div class="input-group">
                					<select class="form-control" name="group_id" id="group_id">
                						

                					</select>
                					<div class="input-group-addon">
                						<span class="fa fa-plus"></span>
                					</div>
                				</div>
                			</div>


                				{{-----------------------------------------------}}

                				{{--------------------------------------------}}
                			<div class="col-sm-3" data-provide="datepicker">
                				<label for="startdate">Start Date</label>
                				<div class="input-group">
                					<input type="text"class="form-control" name="start_date" id="start_date">
                					</input>
                					<div class="input-group-addon">
                						<span class="fa fa-calendar"></span>
                					</div>
                				</div>
                			</div>
                			{{--------------------------------------------------------}}

                			<div class="col-sm-4" data-provide="datepicker">
                				<label for="enddate">End Date</label>
                				<div class="input-group">
                					<input type="text"class="form-control" name="end_date" id="end_date">
                					</input>
                					<div class="input-group-addon">
                						<span class="fa fa-calendar"></span>
                					</div>
                				</div>
                			</div>
        {{---------------------------------------------------------------------------}}
        

                		</div>
                	</div>

                	<div class="box-footer">
                		<button type="submit" class="btn btn-danger">Create Course</button>
                	</div>
                </form>
              </div>
            </section>
        </div>

    </div>
@endsection


@section('script')
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js') }}"></script>
	<script type="text/javascript">
		$(function (){
			$('#start_date').datetimepicker({
				changeMonth:true,
				changeYear:true,
			});
		});


		$(function (){
			$('#end_date').datetimepicker({
				changeMonth:true,
				changeYear:true,
				format: 'mm/dd/yyyy',
			});
		});
        //==================================================
        //$('#add-more-academic').on('click',function(){
          //  $('#myModal').modal();
       // })
        //==================================================
        $(document).ready(function(){
            $('.btn-save-academic').on('click',function(e){
                e.preventDefault();
                var academic = $('#academic_year').val();
                alert(academic);
                $('#myModal').modal('hide');
            });
        });
        $('#add-more-program').on('click', function(){
            $('#myModal').modal()
        })
        


        //var myEl = document.getElementById('btn-save-academic');

        //myEl.addEventListener('click', function() {
    //alert('Hello world');
      //  }, false);

	</script>

@endsection
