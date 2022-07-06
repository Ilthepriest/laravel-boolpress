@extends('layouts.admin')

@section('content')
<h1>Messages</h1>


<div>{{$message->subject}}</div>
<div>{{$message->email}}</div>
<div>{{$message->full_name}}</div>
<div>{{$message->message}}</div>
<div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#model-{{$message->id}}">
  Replay
</button>

<!-- Modal -->
<div class="modal fade" id="model-{{$message->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitle--{{$message->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.messages.store')}}" method="post">
                    @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" name="email" id="email" class="form-control" aria-describedby="emailHelper" value="{{$message->email}}">
                  <small id="emailHelper" class="text-muted">Help text</small>
                </div>

                <div class="mb-3">
                  <label for="subject" class="form-label">Subject</label>
                  <input type="text" name="subject" id="subject" class="form-control" aria-describedby="emailHelper" value="{{'RE:' . $message->subject}}">
                  <small id="emailHelper" class="text-muted">Help text</small>
                </div>

                <div class="mb-3">
                  <label for="message" class="form-label">Message</label>
                  <textarea class="form-control" name="message" id="message" rows="5">
                    _____________Old message__________
                    {{$message->message}}
                  </textarea>
                </div>
                <button type="submit" class="btn btn-success">Send</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



@endsection