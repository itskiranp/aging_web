<h3>New Data Access Request</h3>

<p><strong>Name:</strong> {{ $name }}</p>
<p><strong>Email:</strong> {{ $email }}</p>

@if(!empty($dataset))
    <p><strong>Requested Dataset:</strong> {{ $dataset }}</p>
@endif

@if(!empty($user_message))
    <p><strong>Message:</strong> {{ $user_message }}</p>
@endif
