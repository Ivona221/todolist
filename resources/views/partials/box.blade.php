
<div class="container">


    <div class="col-sm-offset-2 col-sm-8 ">
        <div class="panel panel-default bg-info">
            <div class="panel-heading bg-warning" >
                DATE-{{ $date }} {{ date("D", strtotime($date))}}
               <a href="{{action('TodoController@show',array('date'=>$date))}}"> <button  class="btn btn-sm btn-default pull-right" >&#187;</button></a>
            </div>

            <div class="panel-body">
                <!-- Display Validation Errors -->


                <!-- New Task Form -->
                <form action="{{ url('todo')}}" method="POST" class="form-horizontal">
                {{ csrf_field() }}

                <!-- Task Name -->
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Task</label>

                        <div class="col-sm-6">
                            <input type="text" name="task" id="task-name" class="form-control" value="">
                            <input type="hidden" name="date" value={{$date}}>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">

                            <ul>
                            @foreach(App\Todo::where(['date'=>$date,'user_id'=>Auth::user()->id])->get() as $td)
                                <li class="list-group-item @if($td->id%2==0) list-group-item-success @else list-group-item-warning @endelse @endif "><span class="glyphicon glyphicon-menu-right"></span> {{$td->task}}</li>
                                @endforeach
                            </ul>

                        </div>
                    </div>
                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-btn fa-plus"></i>Add Task
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
</div>

