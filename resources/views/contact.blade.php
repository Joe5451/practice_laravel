@extends('layouts.app')

@section('content')

<div class="container py-5">
    <h1 class="mb-5">Contact Us</h1>
    <form action="" id="contact_form">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control">
        </div>
    
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
        </div>
    
        <div class="form-group">
            <label>Message</label>
            <textarea class="form-control" rows="3"></textarea>
        </div>
    
        <button type="button" class="btn btn-primary mb-2">Submit</button>
    </form>
</div>

@endsection