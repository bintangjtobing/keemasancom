@if (isset($data) && !empty($data))
    <div class="alert alert_default">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <p>
            <strong>{{ $data['nama_pendek'] }}</strong>
            <br>
            @if ($data['action'] === 'belanja')
                <small>Baru saja belanja <strong>{{ $data['inv'] }}</strong> gram</small>
            @else
                <small>Baru saja bergabung</small>
            @endif
        </p>
    </div>
@endif
