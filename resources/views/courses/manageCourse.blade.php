		
@extends('layouts.app')
@section('content')
@include('courses.popup.academic')
@include('courses.popup.program')
@include('courses.popup.level')
@include('courses.popup.shift')
@include('courses.popup.time')


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
            <section class="panel">
              <header class="panel-heading">
                Manage Course
              </header>
              <div class="panel-body" style="border-bottom: 1px solid #ccc; ">
                <form class="form-horizontal " id="frm-create-class">
                	<div class="panel panel-default">
                		<div class="form-group">  


                			<div class="col-sm-3">
                				<label for="academic year">Academic Year</label>
                				<div class="input-group">
                					<select class="form-control" name="academic_id" id="academic_id">
                                        <option value="">------Select------</option>
                                        @foreach($academics as $key =>$y)
                                            <option value="{{ $y->academic_id }}">{{ $y->academic }}
                                                
                                            </option>
                                            }
                                            }

                                        @endforeach
                						

                					</select>
                					<div class="input-group-addon">
                						<span class="fa fa-plus" id="add-more-academic"></span>
                					</div>
                				</div>
                			</div>

                			{{-----------------------------------}}

                			<div class="col-sm-4">
                				<label for="program">Program</label>
                				<div class="input-group">
                					<select class="form-control" name="program_id" id="program_id">
                                        <option value="">------Select------</option>
                                        @foreach($programs as $key =>$p)
                                            <option value="{{ $p->program_id }}">{{ $p->program }}
                                                
                                            </option>
                                            }
                                            }

                                        @endforeach
                						

                					</select>
                					<div class="input-group-addon">
                						<span class="fa fa-plus" id="add-more-program"></span>
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
                						<span class="fa fa-plus" id="add-more-level"></span>
                					</div>
                				</div>
                			</div>

                			{{---------------------------------------------------}}


                			<div class="col-sm-3">
                				<label for="shift">Shift</label>
                				<div class="input-group">
                					<select class="form-control" name="shift_id" id="shift_id">
                						@foreach($shift as $shf)
                                            <option value="{{ $shf->shift_id}}">{{ $shf->shift }}</option>
                                        @endforeach

                					</select>
                					<div class="input-group-addon">
                						<span class="fa fa-plus" id="add-more-shift"></span>
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
                						<span class="fa fa-plus" id="add-more-time"></span>
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
                			<div class="col-sm-3">
                				<label for="startdate">Start Date</label>
                				<div class="input-group date" >
                					<input type="text"class="form-control" name="start_date" id="start_date">
                					</input>
                					<div class="input-group-addon">
                						<span class="fa fa-calendar"></span>
                					</div>
                				</div>
                			</div>
                			{{--------------------------------------------------------}}

                			<div class="col-sm-4">
                				<label for="enddate">End Date</label>
                				<div class="input-group">
                					<input type="text" data-provide='datepicker' class="form-control" name="end_date" id="end_date">
                					</input>
                					<div class="input-group-addon">
                						<span class="fa fa-calendar"></span>
                					</div>
                				</div>
                			</div>
        {{---------------------------------------------------------------------------}}
        

                		</div>
                	</div>

                	<div class="panel-footer">
                		<button type="submit" class="btn btn-danger">Create Course</button>
                	</div>
                </form>
              </div>
            </section>
        </div>

    </div>
@endsection


@section('view.scripts')
	<script type="text/javascript">
       $('#start_date').datepicker({
            changeMonth:true,
            changeYear:true,
       });
       $('#end_date').datepicker({
            changeMonth:true,
            changeYear:true,
       });
       //===================================================
       $('#add-more-academic').on('click', function(){
        $('#academic-year-show').modal();
       });
       //===================================================
       $('.btn-save-academic').on('click', function(){
        var academic = $('#new-academic').val();
        $.post("{{ route('postInsertAcademic') }}", { academic:academic }, function(data){
                $('#academic_id').append($("<option/>",{
                    value :academic_id,
                    text :data.academic
                }))
                $('#new-academic').val("");
        });
       });
       //=====================================================
       $('#add-more-program').on('click', function(){
        $('#program-show').modal();
       });
       $('.btn-save-program').on('click',function(){
            var program =$('#program').val();
            var description=$('#description').val();

            $.post("{{route ('postInsertProgram') }}",{program:program,description:description },function(data){
                    $('#program_id').append($("<option/>",{
                        value : data.program_id,
                        text : data.program
                    }))
                    $('#program').val("");
                    $('#description').val("");
            });
        });

       $('#frm-create-class #program_id').on('change',function(e){
            var program_id = $(this).val();
            var level = $('#level_id');
            $(level).empty();

            $.get("{{ route('showLevel') }}",{program_id:program_id},function(data){
                    $.each(data,function(i,l){
                        $(level).append($('<option/>',{
                            value : l.level_id,
                            text : l.level
                        }))
                    })
            });
       });
       //============================================================
       $('#add-more-level').on('click',function(){

            var programs =$('#program_id option');
            var program =$('#frm-level-create').find('#program_id');
            $(program).empty();
            $.each(programs, function(i,pro){
                $(program).append($("<option/>",{
                    value : $(pro).val(),
                    text : $(pro).text(),
                }));
            })
            $('#level-show').modal('show');
       });
       //========================================================
       $('#frm-level-create').on('submit',function(e){
            e.preventDefault();
            var data = $(this).serialize();
            var url = $(this).attr('action');
            $.post(url,data,function(data){
                $('#level_id').append($("<option/>",{
                    value : data.level_id,
                    text :data.level
                }))
            });
       })
       //==============================================================
       $('#add-more-shift').on('click',function(){
            $('#shift-show').modal('show');
       });
       $('#frm-shift-create').on('submit',function(e){
            e.preventDefault();
            var data =$(this).serialize();
            var shift=$('#shift_id');
            $.post("{{ route('createShift') }}",data,function(data){
                    $(shift).append($("<option/>",{
                        value : data.shift_id,
                        text : data.shift
                    }));
            });
            $(this).trigger("reset");
       });
       //==========================================================================================
       $('#add-more-time').on('click',function(){
        $('#time-show').modal('show');
       });
       //==============================================================
       $('#frm-time-create').on('submit',function(e){
        e.preventDefault();
        var data =$(this).serialize();
        $.post("{{ route('createTime') }}", data,function(data){


            $('#time_id').append($("<option/>",{
                value : data.time_id,
                text : data.time
            }))
        })
        $(this).trigger('reset');
       })
       
	</script>

@endsection
            