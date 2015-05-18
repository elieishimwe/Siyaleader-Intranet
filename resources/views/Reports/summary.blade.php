@extends('master')

@section('content')

   <!-- #content -->
            <div id="content" class="">
                <!-- .outer -->
                <div class="container-fluid outer">
                    <div class="row-fluid">
                        <!-- .inner -->
                        <div class="span12 inner">
                            <!--BEGIN INPUT TEXT FIELDS-->
                            <div class="row-fluid">
                                <div class="span12">
                                    <div class="box dark">
                                        <header>
                                            <div class="icons"><i class="icon-edit"></i></div>
                                            <h5>Daily Summary Report</h5>

                                             <!-- .toolbar -->
                                            <div class="toolbar">
                                                <ul class="nav">
                                                    <li><a href="#"></a></li>
                                                    <li class="dropdown">
                                                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                                            <i class="icon-th-large"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href=""></a></li>
                                                            <li><a href=""></a></li>
                                                            <li><a href=""></a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a class="accordion-toggle minimize-box" data-toggle="collapse" href="#div-1">
                                                            <i class="icon-chevron-up"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.toolbar -->
                                        </header>
                                         @if(Session::has('success'))
                                            <div class="status alert alert-danger">
                                                {{ Session::get('success') }}
                                            </div>
                                        @endif
                                        <div id="div-1" class="accordion-body collapse in body">
                                         {!! Form::open(['url' => 'daily-summary-form', 'method' => 'post', 'class' => 'form-horizontal' ]) !!}

                                                {!! Form::hidden('user',Auth::user()->id) !!}

                                                <div class="control-group">
                                                    <label class="control-label" for="dp3">Date</label>
                                                    <div class='controls'>
                                                        <input class="span6" type='text' id='date' name='date'>
                                                    </div>
                                                </div>


                                                <div class="control-group">
                                                    <label for="autosize" class="control-label">What did I do yesterday?</label>

                                                    <div class="controls">
                                                        <textarea id="yestActivities" name="yestActivities" class="span6"></textarea>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label for="autosize" class="control-label">What were the highlights of yesterday?</label>


                                                    <div class="controls">

                                                        <textarea id="yestHighightsActivities" name="yestHighightsActivities" class="span6"></textarea>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label for="autosize" class="control-label">What were the low points of yesterday?</label>

                                                    <div class="controls">
                                                        <textarea id="yestLowPoints" name="yestLowPoints" class="span6"></textarea>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Where all my activitites captured on CRM?</label>
                                                    <div class="controls">
                                                        <label>
                                                            <input class="uniform" type="radio" name="CRMCaptured" value="1" checked>Yes
                                                        </label>
                                                        <label>
                                                            <input class="uniform" type="radio" name="CRMCaptured" value="0">No
                                                        </label>

                                                    </div>
                                                </div>


                                                <div class="control-group">
                                                    <label class="control-label">What am I going to be doing today?</label>
                                                     <div class="controls">
                                                        <textarea id="todayActivities" name="todayActivities" class="span6"></textarea>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                <label class="control-label"></label>
                                                <button type="submit" class="btn btn-large btn-metis-1 span5">Save</button>

                                                </div>

                                                {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--END TEXT INPUT FIELD-->




                            <!--END SELECT-->


                        </div>


                        <!-- /.inner -->
                    </div>
                    <!-- /.row-fluid -->
                </div>
                <!-- /.outer -->
            </div>
            <!-- /#content -->
@endsection
