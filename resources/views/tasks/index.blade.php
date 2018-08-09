 index page

 @foreach($tasks as $task):
            <ul>
                <li>{{$task->body}}</li>
            </ul>

            @endforeach