@extends('base')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col">
            <h2 class="mb-4 text-white text-center">System Logs</h2>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="bg-white rounded shadow p-4">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center" scope="col">#</th>
                                <th class="text-center" scope="col">Log Entry</th>
                                <th class="text-center" scope="col">Date & Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($logs as $log)
                            <tr>
                                <th class="text-center" scope="row" class="text-muted">{{ $log->id }}</th>
                                <td class="text-center">{{ $log->log_entry }}</td>
                                <td class="text-center text-muted">{{ $log->created_at->format('Y-m-d H:i:s') }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center fw-light fst-italic text-muted">No logs to display...</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
