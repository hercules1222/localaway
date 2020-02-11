@extends('layouts.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <style>
        #trigger-upload {
            color: white;
            background-color: #00ABC7;
            font-size: 14px;
            padding: 7px 20px;
            background-image: none;
            
        }
        
        #fine-uploader-manual-trigger .qq-upload-button {
            margin-right: 15px;
        }
        
        #fine-uploader-manual-trigger .buttons {
            width: 36%;
        }
        
        #fine-uploader-manual-trigger .qq-uploader .qq-total-progress-bar-container {
            width: 60%;
        }
    </style>
@endsection

@section('content')
    <h1>Survey</h1>

    <table id="customer-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Person Type</th>
                <th>Location</th>
                <th>Note</th>
                <th>Time</th>
            @foreach ($header as $question)
                <th>{{ $question->question }}</th>
            @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($person as $row)
                <tr>
                    <th>{{ $row->id }}</th>
                    <th>{{ $row->name }}</th>
                    <th>{{ $row->email }}</th>
                    <th>{{ $row->phone }}</th>
                    <th>{{ $row->person_type }}</th>
                    <th>{{ $row->location }}</th>
                    <th>{{ $row->note }}</th>
                    <th>{{ $row->created_at }}</th>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('page_vendor_scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

@endsection

@section('page_scripts')
    <script>
        $(document).ready(function() {
            $("#customer-table").DataTable();
        })
    </script>
@endsection