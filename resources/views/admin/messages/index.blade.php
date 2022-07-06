@extends('layouts.admin')

@section('content')
<h1>Messages</h1>

<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>Subject</th>
            <th>Email</th>
            <th>FullName</th>
            <th>Message</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @forelse($messages as $message)
            <tr>
                <td scope="row">{{$message->subject}}</td>
                <td>{{$message->email}}</td>
                <td>{{$message->full_name}}</td>
                <td>{{$message->message}}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('admin.messages.show', $message->id)}}">View</a>
                    
                </td>
            </tr>
            @empty
           <tr>
            <td class="row">No messaggi</td>
           </tr>
           @endforelse
        </tbody>
</table>

@endsection