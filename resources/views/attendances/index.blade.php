@extends('layouts.app')
@section('content')

    <a href="{{ route('attendance.create') }}">Create Attendance</a>
    <table class="table table-bordered">
        <thead>
        <td>Attendance Date</td>
        <td>Subject</td>
        <td>Topic</td>
        </thead>
        <tbody>
        @foreach($attendances as $attendance)
            <tr>
                <td>{{ $attendance->created_at->format('l jS \\of F Y h:i:s A') }}</td>
                <td>{{ $attendance->subject }}</td>
                <td>{{ $attendance->topic }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
