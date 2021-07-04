<div class="message-wrapper">
  <ul class="messages">
    @foreach($messages as $message)
    <li class="message clearfix">
      {{--if message from id is equal to auth id then it is sent by logged in user --}}
      <div class="{{ ($message->from == Auth::id()) ? 'sent' : 'received' }}">
        <p>{{ $message->message }}</p>
        <p class="date">{{ date('d M y, h:i a', strtotime($message->created_at)) }}</p>
      </div>
    </li>
    @endforeach
  </ul>
</div>
<div class="card-footer">
  <div class="input-group input-text">
    <input type="text" name="message" placeholder="Type Message ..." class="form-control submit">
  </div>
</div>