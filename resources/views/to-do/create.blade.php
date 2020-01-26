{!!Form::open(['action'=>'TodoListsController@store', 'method'=>'POST', 'class'=>'form'])!!}
   <div class="d-flex">
       <div class="form-group" style="width:80%;">
        {{Form::text('task','',['placeholder'=>'Enter Task details', 'class'=>'form-control'])}}
       </div>
       <div class="form-group">
        {{Form::submit('Submit', ['class'=>'btn btn-info ml-3'])}}
       </div>
   </div>  
{!!Form::close()!!}